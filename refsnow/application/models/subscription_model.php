<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Subscription_Model extends CI_Model 
{    
    function __construct()
    {
        parent::__construct();
        $this->membership = $this->db->dbprefix('membership'); 
        $this->payment = $this->db->dbprefix('payments'); 
        $this->subscription = $this->db->dbprefix('subscription'); 
    }
    
    public function subscription_detail($id)
    {
        $this->db->from($this->subscription);
        $this->db->where(array('id'=>$id));
        return $this->db->get()->row();    
    }
    
    public function payment($post)
    {
        return $this->db->insert($this->payment,$post);
    }
    
    public function add($post)
    {
        return $this->db->insert($this->membership,$post);
    }
    
    public function update($provider_id,$data)
    {       
        $this->db->where(array('provider_id'=>$provider_id));
        $this->db->update($this->membership,$data);        
    }     
    
    public function provider_membership_status($provider_id)
    {
        $this->db->where(array('provider_id'=>$provider_id));
        $query= $this->db->get($this->membership);
        if($query->num_rows()>0)
           return $query->row();
        return false;
    }
}