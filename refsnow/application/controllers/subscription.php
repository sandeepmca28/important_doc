<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Subscription extends MY_Provider
{
        private $_postData;
        public $_formData;
        public function __construct()
        {
            parent::__construct();
            $this->_postData = $this->_formData = array();
            $this->_formData= $this->data;
            $this->load->helper(array('form'));
            $this->load->model(array('provider_model','membership_model','subscription_model'));
            $this->load->library(array('form_validation','paypal'));
        }

        public function index()
        {                
            $this->load->view('header',$this->data);
            $this->load->view('providers/subscription',$this->data);
            $this->load->view('footer');  
        }  
        
        public function payment()
        { 
            $providerId=$this->session->userdata('providerId');
            $this->data['provider_detail'] = $this->provider_model->get_provider_detail();
                    
            $this->form_validation->set_rules('subscription','Subscription','trim|required|xss_clean');
            if($this->form_validation->run() !== FALSE)
            {
                $pdata['subscription_id'] = $this->input->post('subscription',true);                
                $subscription_detail= $this->subscription_model->subscription_detail($pdata['subscription_id']);
               
                $bussiness_paypal_email= config_item('paypal_business_email');
                $item_name= $subscription_detail->subscription_type.' Months';
                $item_amount= $subscription_detail->amount;
                $return_url = base_url().'subscription/thanks';
                $cancel_url = base_url().'subscription/payment';
                $notify_url = base_url().'subscription/notify_url';
                $paypal_array=array('pid'=>$providerId,'bussiness_paypal_email'=>$bussiness_paypal_email,'subscription'=>$item_name,'amount'=>$item_amount,'return_url'=>$return_url,'cancel_url'=>$cancel_url,'notify_url'=>$notify_url);
                $this->paypal->process_payment($paypal_array);
                exit();
            }
            else
            {
               $this->load->view('header',$this->data);
               $this->load->view('providers/subscription_payment');
               $this->load->view('footer');
            }
        }
        
        public function thanks()
        {
            $this->data['response']= $this->paypal->paypal_response();
            $this->load->view('header',$this->data);
            $this->load->view('providers/thank',$this->data);
            $this->load->view('footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */