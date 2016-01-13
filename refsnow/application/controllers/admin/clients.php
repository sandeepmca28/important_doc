<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data=array();
        $this->load->library('form_validation');
        $this->load->model(array('admin/admin_client_model'));
        
        if(!$this->session->userdata('is_admin_login'))
        {
            redirect('admin/home');
        }
    }

    public function index()
    {
        $this->load->library('pagination');
        $this->data['listing']=$this->admin_client_model->listing();
       
       //pre($this->data['lisiting']);
        $config['base_url'] = HTTP_ADMIN_BASE_URL.'clients/';
        $config['total_rows'] = count($this->data['lisiting']);
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $this->data['pagination']=$this->pagination->create_links();
        $this->load->view('admin/client_listing', $this->data);
    }

    public function detail()
    {
        $proivder_id= $this->uri->segment(4);
        $this->data['detail']=$this->admin_client_model->detail($proivder_id);
        $this->load->view('admin/client_detail',$this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */