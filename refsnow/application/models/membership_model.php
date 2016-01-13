<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Membership_Model extends CI_Model 
{    
    function __construct()
    {
        parent::__construct();
        $this->membership = $this->db->dbprefix('membership'); 
        
    }
    
    public function add($post)
    {
        return$this->db->insert($this->membership,$post);
    }
    
    public function update($post)
    {
        $this->db->insert($this->send_invite,$post);
        return $this->db->insert_id();
    }
    
    public function get_detail($id)
    {
        $this->db->where(array('id'=>$id));
        $this->db->from($this->send_invite);
        return $this->db->get()->row();
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