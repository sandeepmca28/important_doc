<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
Class Client_Contact extends MY_Client
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
            //$post['provider_email'] = $this->input->post('provider_email',true);                
            //$this->send_email_to_provider($post);
            $post=array();
            $post['message'] = $this->input->post('textarea_contact',true); 
            $post['message_by'] =1;
            $post['message_to'] =$this->session->userdata('userId');
            $this->message_model->send_message($post);
            $this->session->set_flashdata('message_class','server_success');
            $this->session->set_flashdata('message','Your message has been sent!');
            redirect(base_url().'client_contact');
            exit();

        }else
        {
            $this->data['list_messages'] = $this->message_model->list_messages_client($this->session->userdata('userId'));
           // pre($this->data['list_messages']);
            $this->load->view('header',$this->data);
            $this->load->view('clients/client_contact');
            $this->load->view('footer');
        }
    }
        
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */