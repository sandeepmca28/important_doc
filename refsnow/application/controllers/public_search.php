<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Public_Search extends MY_Provider
{
        private $_postData;
        public $_formData;
        public function __construct()
        {
            parent::__construct();
            $this->_postData = $this->_formData = array();
            $this->_formData= $this->data;
            $this->load->helper(array('form'));
            $this->load->model(array('public_search_model'));
            $this->load->library(array('form_validation','country_state'));           
            //pre($this->_formData['countries']);
        }
        
        public function index()
        {         
            $this->data['countries']= $this->country_state->country();
            
            //pre( $this->data['countries']);
            $this->load->view('header',$this->data);
            $this->load->view('providers/public_search');
            $this->load->view('footer');            
        }
        
        public function public_search_results()
        {         
            $this->data['countries']= $this->country_state->country();  
            $this->data['listing']= $this->public_search_model->public_client_search($_GET);
            //pre($this->data['listing']);
            $this->load->view('header',$this->data);
            $this->load->view('providers/public_search_listing');
            $this->load->view('footer');            
        }

}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */