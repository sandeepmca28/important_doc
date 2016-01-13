<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Contact_Us extends MY_Controller
{        
        public function __construct()
        {
            parent::__construct();
            
            $this->_postData = $this->formData = array();
            
            $this->load->helper(array('form'));
            $this->load->model(array('contact_us_model'));
            $this->load->library(array('form_validation','country_state'));
            $this->data['countries'] = $this->country_state->country();
        }

        public function index()
        {                   
            $this->form_validation->set_rules('name','Name','trim|required|max_length[50]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[50]|xss_clean');
            $this->form_validation->set_rules('message','Message','trim|required|xss_clean');            
                
            if($this->form_validation->run()!==false)
            {                
                    $this->_postData['name']= $this->input->post('name');
                    $this->_postData['email']= $this->input->post('email');
                    $this->_postData['message']= $this->input->post('message');
                     
                    $this->contact_us_model->save_message($this->_postData);    
                    
                    $this->load->library('email');                    
                    $this->email->from($this->_postData['email'], $this->_postData['name']);
                    $this->email->to('sandeepmca28@gmail.com');                    
                    $this->email->subject('Contact Us Email');
                    $this->email->message($this->_postData['message']);
                    $this->email->send();                            
                    $this->session->set_flashdata('message_class','server_success');
                    $this->session->set_flashdata('message','Message has been sent successfully.');
                    redirect($this->data['base_url'].'contact_us');
                    exit();
            }
            else
            {                
                $this->load->view('header');
                $this->load->view('contact_us');
                $this->load->view('footer');
            }          
        }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */