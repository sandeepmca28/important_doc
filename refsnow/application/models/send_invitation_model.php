<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Send_Invitation_Model extends CI_Model 
{    
    function __construct()
    {
        $this->send_invite = $this->db->dbprefix('provider_send_invitation'); 
        parent::__construct();
    }
    
    public function add($post)
    {
        $this->db->insert($this->send_invite,$post);
        return $this->db->insert_id();
    }
    
    public function update($inviter_id)
    {
        $this->db->where(array('unique_number_id'=>$inviter_id));
        $this->db->update($this->send_invite,array('invitation_status'=>0));
        return true;
    }
    
    public function get_detail($id)
    {
        $this->db->from($this->send_invite);
        $this->db->where(array('unique_number_id'=>$id,'invitation_status'=>1));        
        $query = $this->db->get();        
        return $query->row();
    }
}