<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model 
{    
    function __construct()
    {
        $this->users = $this->db->dbprefix('users');                
        parent::__construct();
    }
    
    public function add_user($userData)
    {
         $this->db->insert($this->users,$userData);
         return $this->db->insert_id();
    }
    
    public function get_username($userID)
    {
        return $this->db->get_where($this->users,array('user_id'=>$userID))->row();         
    }
    
    public function check_duplicate_username($username)
    {
        $query = $this->db->get_where($this->users,array('username'=>$username));
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
        
}