<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class About_Us extends MY_Provider
{        
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {        
        $this->load->view('header');
        $this->load->view('about_us');
        $this->load->view('footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */