<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Send_Suggestion_Model extends CI_Model 
{    
    function __construct()
    {
        $this->send_suggestion = $this->db->dbprefix('send_suggestion'); 
        parent::__construct();
    }
    
    public function add($post)
    {
        $this->db->insert($this->send_suggestion,$post);
        return $this->db->insert_id();
    }
    public function get_detail($id)
    {
        $this->db->where(array('id'=>$id));
        $this->db->from($this->send_suggestion);
        return $this->db->get()->row();        
    }
}