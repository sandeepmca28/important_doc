<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Setting extends CI_Controller {
/**
 * ark Admin Panel for Codeigniter 
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model(array('admin/admin_user_model'));
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() 
    {   
       //pre($this->session->all_userdata()); 
        $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
        $this->form_validation->set_rules('email','Email', 'trim|valid_email|required|xss_clean');

        if($this->form_validation->run()!==false)
        {
            $post['username']= mysql_real_escape_string($this->input->post('username',true));
            $post['email']= mysql_real_escape_string($this->input->post('email',true));
            $where['id'] = $this->session->userdata('id');
            //$post['password']= md5($this->input->post('confirm_password',true));
            $this->admin_user_model->update($post,$where);
            $this->session->set_flashdata('msg','Information updated successfully');
            $this->session->set_flashdata('msg_class','alert-success');
            redirect('admin/setting');
        }
        else 
        {   
            $this->load->view('admin/setting');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */