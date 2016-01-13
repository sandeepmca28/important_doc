<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
Class Point_History extends MY_Provider
{
    private $provider_id;
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('point_model','provider_model'));
        $this->provider_id = $this->session->userdata('providerId');
    }

    public function index()
    {
        $this->data['provider_detail']=
        $this->data['points_listing'] = $this->point_model->points_listing($this->provider_id);
        $this->load->view('header',$this->data);
        $this->load->view('point_history');
        $this->load->view('footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */