<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Providers extends CI_Controller
{
    public function __construct()
    {
        $this->data['page'] = 'providers';
        parent::__construct();
        $this->data=array();
        $this->load->library('form_validation');
        $this->load->model(array('admin/admin_provider_model','admin/admin_point_model'));
        
        if(!$this->session->userdata('is_admin_login'))
        {
            redirect('admin/home');
        }
    }

    public function index()
    {
        $this->load->library('pagination');
        $this->data['listing']=$this->admin_provider_model->listing();
       
       //pre($this->data['lisiting']);
        $config['base_url'] = HTTP_ADMIN_BASE_URL.'providers/';
        $config['total_rows'] = count($this->data['lisiting']);
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $this->data['pagination']=$this->pagination->create_links();
        $this->load->view('admin/provider_listing', $this->data);
    }

    public function detail()
    {
        $proivder_id= $this->uri->segment(4);
        $this->data['detail']=$this->admin_provider_model->detail($proivder_id);
        $this->load->view('admin/provider_detail',$this->data);
    }
    
    public function point_received()
    {
        $proivder_id= $this->uri->segment(4);
        $this->data['points']=$this->admin_point_model->points_listing($proivder_id);
        //pre($this->data['detail']);die;
        $this->load->view('admin/points_detail',$this->data);
        
    }
    
    public function approve_action()
    {
        $provider_id= $this->input->post('pid');
        $point_id= $this->input->post('point_id');
        $post = array('approved_status'=>'approved','approved_date'=>insert_in_table());
        $where=array('provider_id'=>$provider_id,'id'=>$point_id);
        
        $this->admin_point_model->approve_points($post,$where);
        $this->session->set_flashdata('class','success');
        $this->session->set_flashdata('msg','Approved Successfully');
        redirect(current_url());
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */