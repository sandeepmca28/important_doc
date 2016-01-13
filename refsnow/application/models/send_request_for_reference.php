<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Send_Request_For_Reference extends CI_Model
{
    function __construct()
    {   
        parent::__construct();
        $this->request_reference = $this->db->dbprefix('request_reference');
    }

    public function save_reference_request($post)
    {
        $this->db->insert($this->request_reference,$post);
    }
     
}