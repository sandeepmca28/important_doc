<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends CI_Model 
{    
    function __construct()
    {
        $this->provider_users = $this->db->dbprefix('providers');
        $this->users = $this->db->dbprefix('users');     
        $this->clients = $this->db->dbprefix('clients'); 
        parent::__construct();
    }
    
    public function provider_signup($data)
    {
        $this->db->insert($this->provider_users,$data);        
        return $this->db->insert_id();
    }
    public function client_signup($data)
    {
        $this->db->insert($this->clients,$data);        
       return $this->db->insert_id();
    }
    
    public function providerLogin($data)
    {
        $this->db->select('user_id,status');
        $this->db->from($this->users);
        
        $this->db->where( array('username' =>$data["username"],'password'=> md5($data["password"])));
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
           return $query->row();
        }
        return false;
        
    }
    public function getLastProviderId()
    {
        $this->db->select('pu_user_id');
        $this->db->from($this->provider_users);
        $this->db->order_by('pu_user_id desc ');
        $this->db->limit(1, 0);
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
           return $query->row()->pu_user_id;
        }
        return false;
    }
    
    public function clientLogin($data)
    {
        $this->db->select('user_id,status,user_type_id');
        $this->db->from($this->users);
        
        $this->db->where( array('username' =>$data["username"],'password'=> $data["password"]));
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
           return $query->row();
        }
        return false;
    }
    
    public function resetPassword($user_id,$newPass)
    {
       return $this->db->update($this->users,array('password'=>md5($newPass)),array('user_id'=>$user_id));    
    }
    
    public function checkEmail($email)
    {
        $this->db->select('pu_user_id,user_id');
        $this->db->from($this->provider_users);
        
        $this->db->where(array('pu_user_email'=>$email));
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
            return $query->row();
        }
        return false;
    }
    
    public function checkClientEmail($email)
    {
        $this->db->select('client_id,user_id');
        $this->db->from($this->clients);
        
        $this->db->where(array('client_email'=>$email));
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
            return $query->row();
        }
        return false;
    }
    
    /***  get provider detail based on user_id   ***/    
    public function getProviderDetail($user_id)
    {
        $this->db->select('*');
        $this->db->from($this->provider_users);
        
        $this->db->where( array('user_id' =>$user_id));
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
            return  $query->row();
        }
        return false;
    }
    
    /***  get provider detail based on email   ***/    
    public function getClientDetail($user_id)
    {
        $this->db->select('*');
        $this->db->from($this->clients);       
        $this->db->where( array('user_id' =>$user_id));
        $query = $this->db->get();       
        if($query->num_rows()>0)
        {
            return  $query->row();
        }
        return false;
    }
    
}