<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_User_Model extends CI_Model 
{    
    function __construct()
    {
        $this->admin_users = $this->db->dbprefix('admin_users');                
        parent::__construct();
    }
    
    public function update($post,$where)
    {
         return $this->db->update($this->admin_users,$post,$where);
    }
    
}