<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_Model extends CI_Model
{
    function __construct()
    {        
        $this->messages =  $this->db->dbprefix('messages'); 
        $this->providers = $this->db->dbprefix('providers');
        $this->clients = $this->db->dbprefix('clients');
        
        parent::__construct();
    }
    
    public function send_message($post)
    {
        $this->db->insert($this->messages,$post);
    }
    
    public function list_messages($user_id)
    {   
        return $result= $this->db->query("SELECT pu_user_fname,m.* FROM  $this->providers p
                INNER JOIN  $this->messages m  ON p.user_id= m.check_user_id  where p.user_id=$user_id order by m.id")->result_array();        
    }    
    
    public function list_messages_client($user_id)
    {   
        return $result= $this->db->query("SELECT client_first_name,m.* FROM  $this->clients c
                INNER JOIN  $this->messages m  ON c.user_id= m.check_user_id  where c.user_id=$user_id order by m.id")->result_array();        
    }  
}