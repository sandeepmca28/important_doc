<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Point_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->point_types = $this->db->dbprefix('point_types');
        $this->points = $this->db->dbprefix('points');
        $this->providers = $this->db->dbprefix('providers');
    }

    public function points_listing($pid)
    {
        $sql = "select *,c.pu_user_fname,a.provider_id pid,a.id iddd from $this->points a "
                . " LEFT JOIN $this->point_types b on a.point_type_id=b.id  "
                . " LEFT JOIN $this->providers c on a.provider_id=c.pu_user_id  "
                . " WHERE provider_id =? ORDER BY a.created_date desc  ";
        $query = $this->db->query($sql, array($pid));
        return $query->result();
    }

    public function approve_points($post, $where)
    {
        
        return $this->db->update($this->points, $post, $where);
    }

}
