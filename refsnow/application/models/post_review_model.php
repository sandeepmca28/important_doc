<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post_Review_Model extends CI_Model 
{    
    function __construct()
    {
        $this->provider_users = $this->db->dbprefix('provider_users'); 
        $this->clients = $this->db->dbprefix('clients');
        $this->reviews = $this->db->dbprefix('reviews');
        $this->states = $this->db->dbprefix('states');
        parent::__construct();
    }
    
    public function addReview($data)
    {
        if($this->db->insert($this->reviews,$data))
                return $this->db->insert_id();
        return false;
    }
    
    public function updateReview($data,$id)
    {
        if($this->db->update($this->reviews,$data,array('review_id'=>$id)))
                return true;
        return false;
    }
    
    public function grand_parent_review_id($id)
    {
        $this->db->where(array('review_id'=>$id));
        $query= $this->db->get($this->reviews);
        if($query->num_rows()>0)
         return ($query->row()->review_parent_id);
        return false;
    }
    
    public function getYourReviewDetail($id)
    {
        $this->db->where(array('review_id'=>$id));
        $query= $this->db->get($this->reviews);
        if($query->num_rows()>0)
           return $query->row();
        return false;
    }
    
    public function getYourReviewListing()
    {
        $this->db->where(array('review_parent_id'=>0));
        $this->db->order_by('last_updated desc');
        $query= $this->db->get($this->reviews);
        if($query->num_rows()>0)
           return $query->result();
        return false;
    }
    
    public function getRelatedReviewListing($id)
    {
        $query = $this->db->query("select * from $this->reviews  where review_parent_id=$id order by last_updated desc");
        if($query->num_rows()>0)
           return $query->result();
        return false;
    }
    
    public function black_listing_search($pid='')
    {
        $query = $this->db->query(" SELECT s.name as state,r.* FROM 
             $this->reviews r left join  $this->states s ON s.id= r.review_id
             Where review_active=1");
        
        if($query->num_rows()>0)
           return $query->result();
        return false;
    }    
    
    public function  black_listing_search_detail($pid='',$rid='')
    {
        $query = $this->db->query(" SELECT s.name as state,r.* FROM 
             $this->reviews r left join  $this->states s ON s.id= r.review_id
             Where blacklist_client='y' and review_id=$rid and review_active=1");
        
        if($query->num_rows()>0)
           return $query->row();
        return false;
    }
}