<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Report_Incident_Model extends CI_Model 
{    
    function __construct()
    {
        $this->provider_users = $this->db->dbprefix('provider_users'); 
        $this->clients = $this->db->dbprefix('clients');
        $this->reviews = $this->db->dbprefix('reviews');
        $this->report_incidents = $this->db->dbprefix('report_incidents');
        parent::__construct();
    }
    
    public function add_incident_report($data)
    {
        if($this->db->insert($this->report_incidents,$data))
                return true;
        return false;
    }
    
    public function getYourReportListing()
    {
        $this->db->where(array('report_incident_rnp_id'=>$this->session->userdata('providerId')));
        $query= $this->db->get($this->report_incidents);
        if($query->num_rows()>0)
           return $query->result();
        return false;
    }
    public function getYourReportDetail($id)
    {
        $this->db->where(array('report_incident_rnp_id'=>$this->session->userdata('providerId'),'report_incident_id'=>$id));
        $query= $this->db->get($this->report_incidents);
        if($query->num_rows()>0)
           return $query->row();
        return false;
    }
    public function update_incident_report($data,$id)
    {
         return $this->db->update($this->report_incidents,$data,array('report_incident_id'=>$id));
        
    }
    
}