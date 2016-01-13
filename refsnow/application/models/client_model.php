<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Client_Model extends CI_Model
{
    function __construct()
    {
        $this->clients = $this->db->dbprefix('clients');
        $this->messages = $this->db->dbprefix('messages');
        $this->provider_users = $this->db->dbprefix('providers');     
        $this->reviews = $this->db->dbprefix('reviews');
        $this->client_send_invitation_to_provider = $this->db->dbprefix('client_send_invitation_to_provider');
        parent::__construct();
    }

    public function get_total_review($client_id)
    {
       
        $this->db->from($this->reviews);
        $this->db->where(array('review_client_id'=>$client_id));
        $query= $this->db->get();
        return $query->num_rows();        
    }
    
    public function send_invitation_to_provider($post)
    {
        return $this->db->insert($this->client_send_invitation_to_provider,$post);        
    }    
    public function get_client_detail($id)
    {
        $this->db->where(array('client_id'=>$id));
        
        $query= $this->db->get($this->clients);
        if($query->num_rows()>0)
           return $query->row();
        return false;
    }

    public function update_client($post,$id)
    {
        if($this->db->update($this->clients,$post,array('client_id'=>$id)))
           return true;
        return false;
    }

    public function check_duplicate_email($email)
    {
        $this->db->from($this->clients);
        $this->db->where(array('client_email'=>$email));
        $this->db->or_where(array('client_email2'=>$email));
        $this->db->or_where(array('client_proffessional_email'=>$email));
        $query1 =$this->db->get()->num_rows();
        
        if($query1<=0)
        {
            $this->db->from($this->provider_users);
            $this->db->where(array('pu_user_email'=>$email));
            $this->db->or_where(array('pu_user_email2'=>$email));
            $query2 =$this->db->get()->num_rows();
            
            if($query2>0)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }  
        return true;
    }
    
    public function client_search($post)
    {        
         $sql= "";
         $andSql="";
         
         if(!empty($post['client_first_name']))
         {
             $sql.= " client_first_name LIKE '%".$post['client_first_name']."%' ";
             $andSql=' AND ';
         }
         
         if(!empty($post['client_last_name']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_first_name LIKE '%".$post['client_first_name']."%' ";
         }
         
         if(!empty($post['client_last_name']))
         {   
             if(!empty($andSql))
             { 
                $andSql=' AND ';
             }
             $sql.= " $andSql client_last_name LIKE '%".$post['client_last_name']."%' ";
         }
         
         if(!empty($post['client_email']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_email LIKE '%".$post['client_email']."%' ";
         }
         
         if(!empty($post['client_email2']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_email2 LIKE '%".$post['client_email2']."%' ";
         }
         
         if(!empty($post['client_proffessional_email']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_proffessional_email LIKE '%".$post['client_proffessional_email']."%' ";
         }
         
         if(!empty($post['client_phone']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_phone LIKE '%".$post['client_phone']."%' ";
         }
         
         if(!empty($post['client_cell_phone']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_cell_phone LIKE '%".$post['client_cell_phone']."%' ";
         }
         
         if(!empty($post['client_ter_handle']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_ter_handle LIKE '%".$post['client_ter_handle']."%' ";
         }
         
         if(!empty($post['client_datecheck_handle']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_datecheck_handle LIKE '%".$post['client_datecheck_handle']."%' ";
         }
         
         if(!empty($post['client_pf411_id']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_pf411_id LIKE '%".$post['client_pf411_id']."%' ";
         }
         
         if(!empty($sql))
         {
            $complete_sql= " SELECT * FROM $this->clients WHERE $sql   ";
            return $result= $this->db->query($complete_sql)->result_object();            
         }
         else
         {
             return false;
         }
    }
     
}