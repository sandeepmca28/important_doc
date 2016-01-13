<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
Class Client_Request_Reference extends MY_Client
{
    public  $formData;
    private $postData;

    public function __construct()
    {
        parent::__construct();
        $this->_postData = $this->formData = array();
        $this->load->model(array('send_request_for_reference'));
        $this->load->library(array('form_validation'));     
    }

    public function index()
    {
        $this->form_validation->set_rules('name_of_provider','Enter provider name','trim|max_length[50]|xss_clean');
        $this->form_validation->set_rules('provider_email','Email','trim|valid_email|max_length[50]|xss_clean');
        $this->form_validation->set_rules('client_name','Enter your name','max_length[50]|trim|xss_clean');
        $this->form_validation->set_rules('client_email','Email','trim|valid_email|max_length[50]|xss_clean');
        $this->form_validation->set_rules('client_message_for_provider','Enter your message for provider','max_length[500]|trim|xss_clean');

        if($this->form_validation->run() !== FALSE)
        {  
            $post=array();
            $this->data['name_of_provider']= $post['name_of_provider'] = $this->input->post('name_of_provider',true);   
            $this->data['provider_email1']= $post['provider_email1'] = $this->input->post('provider_email1',true);
            $this->data['provider_email2']= $post['provider_email2'] = $this->input->post('provider_email2',true);
            
            $this->data['client_message_for_provider']= $post['client_message_for_provider'] = $this->input->post('client_message_for_provider',true);  
            $this->data['client_name']= $post['client_name'] = $this->input->post('client_name',true);      
            $this->data['client_date_of_meeting']= $post['client_date_of_meeting'] = date('Y-m-d',strtotime($this->input->post('client_date_of_meeting',true)));            
            $this->data['client_email']= $post['client_email'] = $this->input->post('client_email',true);                
            $this->data['client_phone']= $post['client_phone'] = $this->input->post('client_phone',true);
            //$this->data['client_request_for_reference']= $post['client_request_for_reference']= $this->input->post('client_request_for_reference',true);
            $post['ip']= $this->input->ip_address();
            $post['unique_number_id']= uniqid();  
            $post['client_login_id']=$this->session->userdata('clientId');
            $post['reference_status']= 1;
            
            $this->data['link']= base_url().'reviews/create_review/'.encodeWithCodeigniter($post['client_login_id']).'/'.encodeWithCodeigniter($post['unique_number_id']);
            
            $this->send_request_for_reference->save_reference_request($post);            
            $this->load->library('email');

            $this->email->from($post['client_email'], $post['client_name']);
            $this->email->to($post['provider_email1'] .','. $post['provider_email2']);
           
            $this->email->subject('Refsnow.com - Request for reference');
            $message= $this->load->view('clients/email/client_reference_request',$this->data,true);
            $this->email->message($message);
            $this->email->send();           
            
            $this->session->set_flashdata('message_class','server_success');
            $this->session->set_flashdata('message','Invitation has been sent to client.');
            redirect(base_url().'client_request_reference');
            exit();

        }else
        {
            $this->load->view('header',$this->data);
            $this->load->view('clients/client_request_reference');
            $this->load->view('footer');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */