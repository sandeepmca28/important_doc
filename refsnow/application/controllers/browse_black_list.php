<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Browse_Black_List extends MY_Provider
{
        private $_postData;
        public $_formData;
        public function __construct()
        {
            parent::__construct();
            $this->_postData = $this->_formData = array();
            $this->_formData= $this->data;
            $this->load->helper(array('form'));
            $this->load->model(array('post_review_model','provider_model','login_model','membership_model','send_invitation_model','point_model','send_suggestion_model','client_model'));
            $this->load->library(array('form_validation','country_state'));
            $this->_formData['countries'] = $this->country_state->country();
            $this->data['countries']= $this->_formData['countries'];
            //pre($this->_formData['countries']);
        }

        public function index()
        {   
            $this->load->library('pagination');
            $pid=$this->session->userdata('providerId');
            $this->data['listing']=$this->post_review_model->black_listing_search($pid);
           
             // pre($this->data['listing']);
            $config['base_url'] = base_url().'browse_black_list/index';
            $config['total_rows'] =count($this->data['listing']);
            $config['per_page'] = 1;

            $this->pagination->initialize($config);
            $this->data['pagination']= $this->pagination->create_links();
            
            $this->load->view('header');
            $this->load->view('providers/blacklist_search_listing',$this->data);
            $this->load->view('footer');
        }

        public function black_list_review_detail()
        {   
           
            $pid=$this->session->userdata('providerId');
            $rid= decodeWithCodeigniter($this->uri->segment(3));
            $this->data['your_reviews']= $this->post_review_model->black_listing_search_detail($pid,$rid);           
           

          
            $this->load->view('header');
            $this->load->view('providers/blacklist_search_listing_detail',$this->data);
            $this->load->view('footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */