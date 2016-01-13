<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_Us_Model extends CI_Model
{
    function __construct()
    {        
        $this->contact_us = $this->db->dbprefix('contact_us');        
        parent::__construct();
    }

    public function save_message($post)
    {
        $this->db->insert($this->contact_us,$post);
    }
    
}