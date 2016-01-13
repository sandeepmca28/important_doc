<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Provider_Model extends CI_Model 
{    
    function __construct()
    {
        $this->provider = $this->db->dbprefix('providers');                
        $this->users = $this->db->dbprefix('users'); 
        $this->countries = $this->db->dbprefix('countries'); 
        $this->states = $this->db->dbprefix('states');                
        parent::__construct();
    }
    
    public function listing()
    { 
        $sql=" Select * from $this->provider p inner join $this->users  u  ON p.user_id= u.user_id  order by p.pu_user_created  desc";
         return $query= $this->db->query($sql)->result();
    }
    public function detail($pid)
    { 
        $sql=" Select p.*,u.username, c.country country ,s.name state from $this->provider p 
                INNER JOIN $this->users  u ON p.user_id= u.user_id
                LEFT JOIN  $this->states s  ON s.id =p.pu_user_state
                LEFT JOIN  $this->countries c ON  c.id=p.pu_user_country
                where p.pu_user_id=?  ";
         return $query= $this->db->query($sql,array($pid))->row();
    }
    
    
}