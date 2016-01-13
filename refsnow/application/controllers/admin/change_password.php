<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Change_Password extends CI_Controller {
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
        $this->form_validation->set_rules('password','Password','trim|required|matches[confirm_password]|xss_clean');
        $this->form_validation->set_rules('confirm_password','Password Confirmation', 'trim|required|xss_clean');

        if($this->form_validation->run()!==false)
        {
            $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
            $post['password']= md5($salt.$this->input->post('password',true));
            $where['id'] = $this->session->userdata('id');
            //$post['password']= md5($this->input->post('confirm_password',true));
            $this->admin_user_model->update($post,$where);
            $this->session->set_flashdata('msg','Password changed successfully');
            $this->session->set_flashdata('msg_class','alert-success');
            redirect('admin/change_password');
        }
        else 
        {   
            $this->load->view('admin/change_password');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */