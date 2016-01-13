<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Client_About_Us extends MY_Client
{        
        public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
        {
            $this->load->view('header');
            $this->load->view('clients/client_about_us');
            $this->load->view('footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */