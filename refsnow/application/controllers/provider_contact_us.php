<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
Class Provider_Contact_Us extends MY_Provider
{
        public  $formData;
        private $postData;

        public function __construct()
        {
            parent::__construct();
            $this->_postData = $this->formData = array();
            $this->load->model(array('message_model'));
            $this->load->library(array('form_validation'));            
        }

        public function index()
        {
            $this->form_validation->set_rules('textarea_contact','Enter your personal message','trim|xss_clean');
            //$this->form_validation->set_rules('provider_email','Email','trim|valid_email|max_length[100]|xss_clean');
            
           if($this->form_validation->run() !== FALSE)            
           {              
                $post=array();
                $post['message'] = $this->input->post('textarea_contact',true); 
                $post['message_by'] =$this->session->userdata('userId');
                $post['message_to'] =1;
                $post['check_user_id'] =$this->session->userdata('userId');
                $this->message_model->send_message($post);
                $this->session->set_flashdata('message_class','server_success');
                $this->session->set_flashdata('message','Your message has been sent!');
                redirect(base_url().'provider_contact_us');
                exit();
                
            }else
            {                 
                $this->session->userdata('userId');
                $this->data['list_messages'] = $this->message_model->list_messages($this->session->userdata('userId'));               
                $this->load->view('header',$this->data);
                $this->load->view('providers/provider_contact_us');
                $this->load->view('footer');
            }
        }
        
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */