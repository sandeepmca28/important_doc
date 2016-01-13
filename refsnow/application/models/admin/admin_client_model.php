<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Client_Model extends CI_Model 
{    
    function __construct()
    {
        $this->clients = $this->db->dbprefix('clients');                
        $this->users = $this->db->dbprefix('users'); 
         $this->countries = $this->db->dbprefix('countries'); 
         $this->states = $this->db->dbprefix('states');                
        parent::__construct();
    }
    
    public function listing()
    { 
        $sql=" Select * from $this->clients p inner join $this->users  u  ON p.user_id= u.user_id  order by p.client_created  desc";
         return $query= $this->db->query($sql)->result();
    }
    
    public function detail($pid)
    { 
        $sql=" Select p.*,u.username, c.country country ,s.name state from $this->clients p 
                INNER JOIN $this->users  u ON p.user_id= u.user_id
                LEFT JOIN  $this->states s  ON s.id =p.client_residence_state
                LEFT JOIN  $this->countries c ON  c.id=p.client_residence_country
                where p.client_id=?  ";
         return $query= $this->db->query($sql,array($pid))->row();
    }
}