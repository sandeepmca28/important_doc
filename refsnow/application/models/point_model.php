<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Point_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->point_types = $this->db->dbprefix('point_types');
        $this->points = $this->db->dbprefix('points');
        $this->providers = $this->db->dbprefix('providers');
    }

    public function add($post)
    {
        return$this->db->insert($this->points,$post);
    }

    public function get_point_types_detail($id='')
    {
        $this->db->where(array('id'=>$id));
        $this->db->from($this->point_types);
        return $this->db->get()->row();
    }

    public function points_listing($id)
    {
        $sql= "select *,c.pu_user_fname,a.id iddd from $this->points a "
                . " join $this->point_types b on a.point_type_id=b.id  "
                . " join $this->providers c on a.provider_id=c.pu_user_id where "
                . "  provider_id =? order by created_date desc  ";
        $query =$this->db->query($sql,array($id));
        return $query->result();
    }
}