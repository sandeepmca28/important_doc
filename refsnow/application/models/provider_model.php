<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Provider_Model extends CI_Model 
{    
    function __construct()
    {
        $this->provider_users = $this->db->dbprefix('providers');          
        $this->states = $this->db->dbprefix('states');         
        parent::__construct();
    }
    
    public function get_provider_detail()
    {
        $this->db->where(array('pu_user_id'=>$this->session->userdata('providerId')));
        $query= $this->db->get($this->provider_users);
        if($query->num_rows()>0)
           return $query->row();
        return false;
    }
       
    public function update_provider($post,$id)
    {
        if($this->db->update($this->provider_users,$post,array('pu_user_id'=>$id)))
           return true;
        return false;
    }
    
    public function check_duplicate_email($email)
    {
        $query=$this->db->get_where($this->provider_users,array('pu_user_email'=>$email,'pu_user_id'=>$this->session->userdata('providerId')));
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
    
    public function check_duplicate_email_invitation($email)
    {
        $this->db->where('pu_user_email',$email);
        $this->db->or_where('pu_user_email2',$email);
        $query= $this->db->get($this->provider_users);        
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
    
    public function check_duplicate_email_signup($email)
    {
        $this->db->where('pu_user_email',$email);
        $this->db->or_where('pu_user_email2',$email);
        $query= $this->db->get($this->provider_users);        
        //l();
        
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
    
    public function check_duplicate_terid_provider($trid)
    {
        $this->db->where('pu_user_terID',$trid);        
        $query= $this->db->get($this->provider_users);        
        //l();
        
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
    
    public function check_duplicate_pf11ID_provider($pf11ID)
    {
        $this->db->where('pu_user_pf11ID',$pf11ID);        
        $query= $this->db->get($this->provider_users);        
        //l();
        
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
    
    public function check_duplicate_afID_provider($afID)
    {
        $this->db->where('pu_af_id',$afID);        
        $query= $this->db->get($this->provider_users);        
        //l();
        
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
    
    public function check_duplicate_datecheckID_provider($datecheckID)
    {
        $this->db->where('pu_user_datecheckID',$datecheckID);        
        $query= $this->db->get($this->provider_users);        
        //l();
        
        if($query->num_rows()>0)
        {
            return true;
        }
        return false;
    }
            
    public function provider_search($post)
    {        
         $sql= "";
         $andSql="";
         
         if(!empty($post['pu_user_fname']))
         {
             $andSql='  AND ';
             $sql.= " pu_user_fname LIKE '%".$post['pu_user_fname']."%' ";
         }
                  
         if(!empty($post['pu_user_email']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_email LIKE '%".$post['pu_user_email']."%' ";
         }
         
         if(!empty($post['pu_user_email2']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_email2 LIKE '%".$post['pu_user_email2']."%' ";
         }
         
         if(!empty($post['pu_user_phone']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_phone LIKE '%".$post['pu_user_phone']."%' ";
         }
         
         if(!empty($post['pu_user_phone2']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_phone2 LIKE '%".$post['pu_user_phone2']."%' ";
         }
         
         if(!empty($post['pu_user_city']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_city LIKE '%".$post['pu_user_city']."%' ";
         }
         
         if(!empty($post['pu_user_state']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_state LIKE '%".$post['pu_user_state']."%' ";
         }
         
         if(!empty($post['pu_user_country']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_country LIKE '%".$post['pu_user_country']."%' ";
         }
         
         if(!empty($post['pu_user_terID']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_terID LIKE '%".$post['pu_user_terID']."%' ";
         }
          if(!empty($post['pu_user_datecheckID']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_datecheckID LIKE '%".$post['pu_user_datecheckID']."%' ";
         }
         
         if(!empty($post['pu_user_pf11ID']))
         {   
             if(empty($andSql))
             { 
                 $andSql=' AND ';
             }
             $sql.= " $andSql pu_user_pf11ID LIKE '%".$post['pu_user_pf11ID']."%' ";
         }
         
         if(!empty($sql))
         {
            $complete_sql= " SELECT * FROM $this->provider_users p LEFT JOIN $this->states s ON s.id=p.pu_user_id WHERE $sql   ";
            return $result= $this->db->query($complete_sql)->result_object();  
            
         }
         else
         {
             return false;
         }
    }
        
}