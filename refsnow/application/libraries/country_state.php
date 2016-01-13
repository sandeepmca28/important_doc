<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Pagination Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Pagination
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 */
class CI_Country_State {

	var $tb_country			= ''; // The page we are linking to
	var $tb_state			= ''; // A custom prefix added to the path.
	var $CI='';
	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */

	public function __construct($params = array()){
		
		$this->CI= & get_instance();
		$this->tb_states = $this->CI->db->dbprefix('states');
		$this->tb_countries = $this->CI->db->dbprefix('countries');

	}

	function country(){

		$this->CI->db->order_by('country asc');
		$query=$this->CI->db->get($this->tb_countries);
                
		return $query->result();
	}

	function state($id){

		
		$this->CI->db->where(array('region_id'=>$id));
		$this->CI->db->order_by('name asc');

		$query=$this->CI->db->get($this->tb_states);

		return $query->result();

	}
}
// END Pagination Class

/* End of file Pagination.php */
/* Location: ./system/libraries/Pagination.php */