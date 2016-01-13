<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** 
// ------------------------------------------------------------------------
/**
 * Pagination Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Pagination
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 */

class CI_Paypal 
{
    var $CI;	
    public function __construct($params = array())
    {	
        $this->CI = & get_instance();
        $this->CI->load->model('subscription_model'); 
    }
    
    public function process_payment($array)
    {        
        $paypal_email = $array['bussiness_paypal_email'];
	$return_url   = $array['return_url'];
	$cancel_url   = $array['cancel_url'];
	$notify_url   = $array['notify_url'];
	$item_name    = $array['subscription'];
	$item_amount  = $array['amount'];
        $pid          = $array['pid'];
        $querystring  = '';
        
        // Firstly Append paypal account to querystring
        $querystring .= "?business=".urlencode($paypal_email)."&";

        // Append amount&amp;amp;amp;amp;amp;amp; currency (£) to quersytring so it cannot be edited in html

        //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
        $querystring .= "item_name=".urlencode($item_name)."&";
        $querystring .= "amount=".urlencode($item_amount)."&";

        //loop for posted values and append to querystring
        foreach($_POST as $key => $value) {
            $value = urlencode(stripslashes($value));
            $querystring .= "$key=$value&";
        }

        $querystring .= "return=".urlencode(stripslashes($return_url))."&";
        $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
        $querystring .= "notify_url=".urlencode($notify_url);

        // Append querystring with custom field
        $querystring .= "&custom=".$pid;

        // Redirect to paypal IPN
        header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
        exit();
    }
    
    public function paypal_response()
    {          
           if(isset($_POST["txn_id"])&& isset($_POST["txn_type"]))
           {
                // Response from Paypal
                // read the post from PayPal system and add 'cmd'
               
                //pre($_POST);die;
                $req = 'cmd=_notify-validate';
                foreach ($_POST as $key => $value) 
                {            
                    $value = urlencode(stripslashes($value));
                    $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
                    $req .= "&$key=$value";
                }

                // assign posted variables to local variables
                $data['item_name']          = $_POST['item_name'];
                $data['payer_status']       = $_POST['payer_status'];
                $data['payment_status']     = $_POST['payment_status'];
                $data['payment_amount']     = $_POST['mc_gross'];
                $data['payment_currency']   = $_POST['mc_currency'];
                $data['txn_id']             = $_POST['txn_id'];
                $data['txn_type']           = $_POST['txn_type'];       
                $data['receiver_email']     = $_POST['receiver_email'];
                $data['payer_email']        = $_POST['payer_email'];
                $data['custom']             = $_POST['custom'];

                // post back to PayPal system to validate
                $header  = "POST /cgi-bin/webscr HTTP/1.0\r\n";
                $header .= "Host: www.sandbox.paypal.com\r\n";
                $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $header .= "Content-Length: ". strlen($req). "\r\n\r\n";
                $fp = fsockopen ('ssl://www.sandbox.paypal.com',443,$errno,$errstr,30);

                if (!$fp)
                {
                    echo 'error: '.$errno. ' ' . $errstr;die;
                } 
                else 
                {            
                    fputs($fp, $header . $req);
                    while (!feof($fp)) 
                    {
                        $res = fgets ($fp, 1024);                        
                        //pre($res);
                        
                        if (strcmp($res, "VERIFIED") == 0) 
                        {           
                            //Used for debugging
                            //mail('user@domain.com', 'PAYPAL POST - VERIFIED RESPONSE', print_r($post, true));
                            //Validate payment (Check unique txnid &amp;amp;amp; correct price)
                            //PAYMENT VALIDATED &amp;amp;amp; VERIFIED!
                            
                            //$valid_price = check_price($data['payment_amount'], $data['item_number']);
                            // if ($valid_txnid && $valid_price) 
                            
                            $valid_txnid = $this->check_txnid($data['txn_id']);
                            
                            if ($valid_txnid ) 
                            {   
                                $payment_status= $this->updatePayments($data);
                                if($payment_status)
                                {
                                    $response= array('message_class'=>'server_success','msg'=>"Payment has been made successfully.",'message'=>'Your membership has been updated successfully.');
                                }
                                else
                                {  
                                   $response= array('message_class'=>'server_success','msg'=>"database error during insert opertation",'message'=>'Your membership has been updated successfully.');
                                    // Payment made but data not insreted into database
                                    // E-mail admin or alert user
                                    //die("database error during insert opertation");
                                }
                            } 
                            else 
                            {
                                $payment_status= $this->updatePayments($data);
                                if($payment_status)
                                {               
                                    $response=array('message_class'=>'server_success','msg'=>"Payment has been made,but data changed.",'message'=>'Your membership has been updated successfully.');
                                }
                                else
                                {  
                                    $response=array('message_class'=>'server_success','msg'=>"Payment has been made,but data changed.database error during insert opertation",'message'=>'Your membership has been updated successfully.');
                                    // Payment made but data not insreted into database
                                    // E-mail admin or alert user
                                    // echo ("Payment has been made,but data changed.database error during insert opertation");
                                   
                                }
                                 
                                // Payment made but data has been changed
                                // E-mail admin or alert user
                            }
                                
                            $pdata['status']='active';
                            $this->CI->subscription_model->update($data['custom'],$pdata);
                            return $response;

                        }
                        else if (strcmp ($res, "INVALID") == 0) 
                        {
                            $response = array('message_class'=>'server_error','msg'=>"Invalid Payment");
                            return $response;
                            //echo "Invalid Payment";
                            // PAYMENT INVALID &amp;amp;amp; INVESTIGATE MANUALY!
                            // E-mail admin or alert user
                            // Used for debugging
                            // @mail("user@domain.com", "PAYPAL DEBUGGING", "Invalid Response
                            // $data =print_r($post, true)."&amp;amp;lt;/pre&amp;amp;gt; ");
                            
                        }
                    }
                    fclose ($fp);
                }
                
                 //pre($_POST);

                 /* $pdata['status']='active';
                 $this->subscription_model->update($providerId,$pdata);
                 $this->session->set_flashdata('message_class','server_success');
                 $this->session->set_flashdata('message','Your membership has been updated successfully.');
                 redirect($this->data['base_url'].'provider');
                 exit(); */
                 

            }  
            else
            {
              redirect(base_url());
            }
    }
    
    function updatePayments($data)
    {
        if (is_array($data)) 
        {             
             $response_data=array(
                'txn_id' => $data['txn_id'],
                'payer_status'=>$data['payer_status'],
                'item_name'=>$data['item_name'],
                'txn_type'=>$data['txn_type'],                    
                'payment_amount'=>$data['payment_amount'],
                'payment_currency'=>$data['payment_currency'],
                'payer_email'=>$data['payer_email'],
                'receiver_email'=>$data['receiver_email'],
                'payment_status'=>$data['payment_status'],
                'custom'=>$data['custom']
            ); 
             
           //$this->CI->load->model('subscription_model');            
            return $this->CI->subscription_model->payment($response_data);           
        }
    }
    
    function check_txnid($tnxid)
    {
        $valid_txnid = true;

        //get result set
        $query = $this->CI->db->query("SELECT pay_id FROM tb_payments WHERE txn_id = '$tnxid'");
        if ($query->num_rows()>0) 
        {
           $valid_txnid = false;
        }
        return $valid_txnid;
    }

    function check_price($price, $id)
    {
         /*
            $valid_price = false;
            
            $query = $this->CI->db->query("SELECT payment_amount FROM tb_payments WHERE pay_id = '$id'");
            if ($query->num_rows()>0) 
            {
                $row= $query->row_array();
                $num = (float)$row['amount'];
                if($num == $price)
                {
                        $valid_price = true;
                }
                
            }
            
            return $valid_price;*/
    }
   
}

/* End of file Pagination.php */
/* Location: ./system/libraries/Pagination.php */