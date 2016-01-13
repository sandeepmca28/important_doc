<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Public_Search_Model extends CI_Model
{
    function __construct()
    {
        $this->clients = $this->db->dbprefix('clients');
        $this->countries = $this->db->dbprefix('countries');
        $this->states = $this->db->dbprefix('states');       
        parent::__construct();
        
    }
    
    public function public_client_search($post)
    {        
         $sql= "";
         $andSql="";
         
         if(isset($post['first_name']) && !empty($post['first_name']))
         {
             
             $sql.= " client_first_name LIKE '%".$post['first_name']."%' ";
             $andSql=' AND ';
         }
         
         if(isset($post['last_name']) && !empty($post['last_name']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             
             $sql.= " $andSql client_last_name LIKE '%".$post['last_name']."%' ";
         }
         
         if(isset($post['client_first_email']) && !empty($post['client_first_email']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_email LIKE '%".$post['client_first_email']."%' ";
         }
         
         if(isset($post['client_first_phone']) && !empty($post['client_first_phone']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_phone LIKE '%".$post['client_first_phone']."%' ";
         }
         
        
         if(isset($post['client_handle']) && !empty($post['client_handle']))
         {   
             if(!empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql client_ter_handle LIKE '%".$post['client_handle']."%' OR client_datecheck_handle LIKE '%".$post['client_handle']."%' OR client_pf411_id LIKE '%".$post['client_handle']."%' OR client_eccie_handle LIKE '%".$post['client_handle']."%' OR client_other_handle LIKE '%".$post['client_handle']."%' ";
         }
        
         /*
         if(!empty($post['country']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql country LIKE '%".$post['country']."%' ";
         }
         
         if(!empty($post['state']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql state LIKE '%".$post['state']."%' ";
         }  */
         
         if(!empty($sql))
         {
            $complete_sql= " SELECT * FROM $this->clients "
                    . " "
                    . " WHERE   $sql   ";
            return $result= $this->db->query($complete_sql)->result_object();            
         }
         else
         {
             return false;
         }
    }
     
}