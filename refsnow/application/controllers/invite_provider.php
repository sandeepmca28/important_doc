<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
Class Invite_Provider extends MY_Client
{
        public  $formData;
        private $postData;

        public function __construct()
        {
            parent::__construct();
            $this->_postData = $this->formData = array();
            $this->load->model(array('client_model'));
            $this->load->library(array('form_validation'));
        }

        public function index()
        {
            $this->form_validation->set_rules('name_of_provider','Enter provider name','trim|xss_clean');
            $this->form_validation->set_rules('provider_email','Email','trim|valid_email|max_length[50]|xss_clean');
            $this->form_validation->set_rules('client_name','Enter your name','trim|xss_clean');
            $this->form_validation->set_rules('client_email','Email','trim|valid_email|max_length[50]|xss_clean');
            $this->form_validation->set_rules('client_message_for_provider','Enter your message for provider','trim|xss_clean');

            if($this->form_validation->run() !== FALSE)
            {
                $post=array();
                $post['client_message_for_provider'] = $this->input->post('client_message_for_provider',true);
                $post['provider_email'] = $this->input->post('provider_email',true);
                $post['name_of_provider'] = $this->input->post('name_of_provider',true);
                $post['client_email'] = $this->input->post('client_email',true);
                $post['client_name'] = $this->input->post('client_name',true);
                $post['client_phone']   = $this->input->post('client_phone',true);
                $post['client_request_for_reference']   = $this->input->post('client_request_for_reference',true);
                $this->send_email_to_provider($post);
                $this->session->set_flashdata('message_class','server_success');
                $this->session->set_flashdata('message','Invitation has been sent to provider for joining Refsnow.com.');
                redirect(base_url().'invite_provider');
                exit();

            }else
            {
                $this->load->view('header',$this->data);
                $this->load->view('clients/invite_provider');
                $this->load->view('footer');
            }
        }

        private function send_email_to_provider($post)
        {
            $this->data['client']=$this->client_model->get_client_detail($this->session->userdata('clientId'));
            $this->data['unique_number_id']=  uniqid();

            $this->data['link']= base_url().'provider/signup/'.encodeWithCodeigniter($this->data['client']->client_id).'/'. encodeWithCodeigniter($this->data['unique_number_id']);
            $this->data['client_message_for_provider'] = $post['client_message_for_provider'];
            $this->data['provider_email']   = $post['provider_email'];
            $this->data['client_name']   = $post['client_name'];
            $this->data['client_email']   = $post['client_email'];
            $this->data['name_of_provider']   = $post['name_of_provider'];
            $this->data['client_phone']   = $post['client_phone'];
            $this->data['client_request_for_reference']=0;
            $this->data['client_request_for_reference']   = $post['client_request_for_reference'];
            $insertArr= array(
                'unique_number_id'=>$this->data['unique_number_id'],
                'client_login_id'=>$this->data['client']->client_id,
                'client_message_for_provider'=>$this->data['client_message_for_provider'],
                'provider_email'=>$this->data['provider_email'],
                'name_of_provider'=>$this->data['name_of_provider'],
                'client_name'=>$this->data['client_name'],
                'client_email'=>$this->data['client_email'],
                'client_phone'=>$this->data['client_phone'],
                'client_request_for_reference'=>$this->data['client_request_for_reference'],
                'ip'=>$this->input->ip_address,
                'invitation_status'=>1,
            );

            $this->client_model->send_invitation_to_provider($insertArr);
            $message= $this->load->view('clients/email/invite_provider_email', $this->data,true);

            $this->load->library('email');
            $this->email->from($this->data['client']->client_email,$this->data['client']->client_first_name.' '.$this->data['client']->client_last_name);
            $this->email->to($this->data['email']);

            $this->email->subject('Invitation for joining RefsNow.com');
            $this->email->message($message);
            $this->email->send();

        }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */