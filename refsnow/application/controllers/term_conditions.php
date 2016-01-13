<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Term_Conditions extends MY_Provider
{        
        public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
        {
            $this->load->view('header');
            $this->load->view('term_conditions');
            $this->load->view('footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */