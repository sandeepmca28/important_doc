<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Common extends MY_Provider
{
    private $_postData;
    public $_formData;

    public function __construct()
    {
        parent::__construct();
        $this->_postData = $this->_formData = array();
        $this->load->library(array('country_state'));
    }

    public function get_state_ajax()
    {
        $id = $stateid = $states = '';
        $id = $this->input->post('id', true);
        $stateid = $this->input->post('stateid', true);
        $states = $this->country_state->state($id);
        echo $this->load->view('ajax/state_ajax', array('states' => $states, 'stateid' => $stateid), true);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */