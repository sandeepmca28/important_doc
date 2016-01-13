<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Report_Incident extends MY_Provider
{
    private $_postData;
    private $_formData;

    public function __construct()
    {
        parent::__construct();
        $this->_postData = $this->_formData = array();
        $this->_formData = $this->data;
        
        $this->load->helper(array('form'));
        $this->load->model(array('post_review_model', 'report_incident_model'));
        $this->load->library(array('form_validation', 'country_state'));
    }

    public function index()
    {        
            $this->_formData['your_incident_data'] = $this->report_incident_model->getYourReportListing();
            $this->_formData['countries'] = $this->country_state->country();
            $this->load->view('header');
            $this->load->view('providers/report_incident/report_incident_listing', $this->_formData);
            $this->load->view('footer');       
    }

    public function create_report_incident()
    {     
           // $this->_formData['post_review_data'] = $this->post_review_model->getYourReviewDetail($post_review_id);
            $this->_formData['countries'] = $this->country_state->country();

            $this->_formData['report_first_name'] = $this->input->post('report_first_name');
            $this->_formData['report_last_name'] = $this->input->post('report_last_name');

            $this->_formData['report_first_email'] = $this->input->post('report_first_email');
            $this->_formData['report_second_email'] = $this->input->post('report_second_email');
            $this->_formData['report_third_email'] = $this->input->post('report_third_email') ;

            $this->_formData['report_first_phone'] = $this->input->post('report_first_phone');
            $this->_formData['report_second_phone'] = $this->input->post('report_second_phone');
            $this->_formData['report_third_phone'] = $this->input->post('report_third_phone');

            $this->_formData['report_residence_city'] = $this->input->post('report_residence_city');
            $this->_formData['report_residence_state'] = $this->input->post('report_residence_state');
            $this->_formData['report_residence_country'] = $this->input->post('report_residence_country');

            $this->_formData['report_incident_city'] = $this->input->post('report_incident_city') ;
            $this->_formData['report_incident_state'] = $this->input->post('report_incident_state') ;
            $this->_formData['report_incident_country'] = $this->input->post('report_incident_country') ;

            $this->_formData['report_client_ter_handle'] = $this->input->post('report_client_ter_handle');
            $this->_formData['report_client_pf411_handle'] = $this->input->post('report_client_pf411_handle');
            $this->_formData['report_client_datecheck_handle'] = $this->input->post('report_client_datecheck_handle');
            $this->_formData['report_client_member_of_rsk2'] = $this->input->post('report_client_member_of_rsk2') ;

            $this->_formData['report_client_eccie_handle'] = $this->input->post('report_client_eccie_handle'); 
            $this->_formData['report_client_other_handle'] = $this->input->post('report_client_other_handle');
            $this->_formData['report_details'] = $this->input->post('report_details');


            $this->_formData['report_client_eccie_handle'] = $this->input->post('report_client_eccie_handle');            $this->_formData['report_details'] = $this->input->post('report_details');


            $this->form_validation->set_rules('report_incident_date', 'Incident date?', 'trim|required|xss_clean');
            $this->form_validation->set_rules('report_first_name', 'First Name?', 'trim|alpha|required|max_length[30]|xss_clean');
            $this->form_validation->set_rules('report_last_name', 'Last Name?', 'trim|alpha|max_length[30]|xss_clean');

            $this->form_validation->set_rules('report_first_email', 'First Email?', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('report_second_email', 'Sceond Email?', 'trim|valid_email|xss_clean}');
            $this->form_validation->set_rules('report_third_email', 'Third Email?', 'trim|valid_email|xss_clean');


            $this->form_validation->set_rules('report_first_phone', 'First Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('report_second_phone', 'Second Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('report_third_phone', 'Third Phone Number?', 'trim|numeric|xss_clean');


            $this->form_validation->set_rules('report_residence_city', 'City?', 'trim|alpha|max_length[30]|xss_clean');
            $this->form_validation->set_rules('report_residence_state', 'State?', 'trim|xss_clean');
            $this->form_validation->set_rules('report_residence_country', 'Country?', 'trim|xss_clean');

            $this->form_validation->set_rules('report_incident_city', 'City?', 'trim|alpha|max_length[30]|xss_clean');
            $this->form_validation->set_rules('report_incident_state', 'State?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('report_incident_country', 'Country?', 'trim|numeric|xss_clean');

            $this->form_validation->set_rules('report_client_ter_handle', 'TER Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_pf411_handle', 'PF411 ID?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_datecheck_handle', 'DateCheck Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_eccie_handle', 'ECCIE Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_member_of_rsk2', 'Member of rsk2?', 'trim|max_length[1]|xss_clean');
            $this->form_validation->set_rules('report_client_other_handle', 'Other__?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_details', 'Details?', 'trim|xss_clean');

            $this->form_validation->set_rules('level3[]', 'Level III ?', 'trim|xss_clean');
            $this->form_validation->set_rules('level2[]', 'Level II ?', 'trim|xss_clean');
            $this->form_validation->set_rules('level1[]', 'Level I', 'trim|xss_clean');

            if ($this->form_validation->run() !== false)
            {
                $this->_postData['report_first_name'] = $this->_formData['report_first_name'];
                $this->_postData['report_last_name'] = $this->_formData['report_last_name'];
                $this->_postData['report_first_email'] = $this->_formData['report_first_email'];
                $this->_postData['report_second_email'] = $this->_formData['report_second_email'];
                $this->_postData['report_third_email'] = $this->_formData['report_third_email'];

                $this->_postData['report_first_phone'] = $this->_formData['report_first_phone'];
                $this->_postData['report_second_phone'] = $this->_formData['report_second_phone'];
                $this->_postData['report_third_phone'] = $this->_formData['report_third_phone'];

                $this->_postData['report_residence_city'] = $this->_formData['report_residence_city'];
                $this->_postData['report_residence_state'] = $this->_formData['report_residence_state'];
                $this->_postData['report_residence_country'] = $this->_formData['report_residence_country'];

                $this->_postData['report_incident_city'] = $this->_formData['report_incident_city'];
                $this->_postData['report_incident_state'] = $this->_formData['report_incident_state'];
                $this->_postData['report_incident_country'] = $this->_formData['report_incident_country'];

                $this->_postData['report_client_ter_handle'] = $this->_formData['report_client_ter_handle'];
                $this->_postData['report_client_pf411_handle'] = $this->_formData['report_client_pf411_handle'];
                $this->_postData['report_client_datecheck_handle'] = $this->_formData['report_client_datecheck_handle'];
                $this->_postData['report_client_eccie_handle'] = $this->_formData['report_client_eccie_handle'];
                $this->_postData['report_client_member_of_rsk2'] = $this->_formData['report_client_member_of_rsk2'];
                $this->_postData['report_client_other_handle'] = $this->_formData['report_client_other_handle'];

                $this->_postData['report_details'] = $this->_formData['report_details'];

                $this->_postData['report_level3'] = arrayToString($this->input->post('level1', true));
                $this->_postData['report_level2'] = arrayToString($this->input->post('level2', true));
                $this->_postData['report_level1'] = arrayToString($this->input->post('level3', true));

                $this->_postData['report_incident_date'] = mysqlDateFormat($this->input->post('report_incident_date'));

                $this->_postData['report_incident_rnp_id'] = $this->session->userdata('providerId');
                $this->_postData['report_post_review_id'] = $post_review_id;

                $this->report_incident_model->add_incident_report($this->_postData);
                $this->session->set_flashdata('message_class', 'success');
                $this->session->set_flashdata('message', 'Incident detail saved successfully');
                redirect($this->data['base_url']);
            } else
            {
                $this->load->view('header');
                $this->load->view('providers/report_incident/report_incident', $this->_formData);
                $this->load->view('footer');
            }
        
    }

    function edit_report_incident()
    {           
            $report_review_id = $this->uri->segment(3);
            $this->_formData['post_review_data'] = $this->report_incident_model->getYourReportDetail($report_review_id);
            $this->_formData['countries'] = $this->country_state->country();
            $this->_formData['report_incident_date'] = $this->input->post('report_incident_date') ? $this->input->post('report_incident_date') : $this->_formData['post_review_data']->report_incident_date;
            $this->_formData['report_first_name'] = $this->input->post('report_first_name') ? $this->input->post('report_first_name') : $this->_formData['post_review_data']->report_first_name;
            $this->_formData['report_last_name'] = $this->input->post('report_last_name') ? $this->input->post('report_last_name') : $this->_formData['post_review_data']->report_last_name;
            $this->_formData['report_first_email'] = $this->input->post('report_first_email') ? $this->input->post('report_first_email') : $this->_formData['post_review_data']->report_first_email;
            $this->_formData['report_second_email'] = $this->input->post('report_second_email') ? $this->input->post('report_second_email') : $this->_formData['post_review_data']->report_second_email;
            $this->_formData['report_third_email'] = $this->input->post('report_third_email') ? $this->input->post('report_third_email') : $this->_formData['post_review_data']->report_third_email;
            $this->_formData['report_first_phone'] = $this->input->post('report_first_phone') ? $this->input->post('report_first_phone') : $this->_formData['post_review_data']->report_first_phone;
            $this->_formData['report_second_phone'] = $this->input->post('report_second_phone') ? $this->input->post('report_second_phone') : $this->_formData['post_review_data']->report_second_phone;
            $this->_formData['report_third_phone'] = $this->input->post('report_third_phone') ? $this->input->post('report_third_phone') : $this->_formData['post_review_data']->report_third_phone;
            $this->_formData['report_residence_city'] = $this->input->post('report_residence_city') ? $this->input->post('report_residence_city') : $this->_formData['post_review_data']->report_residence_city;
            $this->_formData['report_residence_state'] = $this->input->post('report_residence_state') ? $this->input->post('report_residence_state') : $this->_formData['post_review_data']->report_residence_state;
            $this->_formData['report_residence_country'] = $this->input->post('report_residence_country') ? $this->input->post('report_residence_country') : $this->_formData['post_review_data']->report_residence_country;
            $this->_formData['report_incident_city'] = $this->input->post('report_incident_city') ? $this->input->post('report_incident_city') : $this->_formData['post_review_data']->report_incident_city;
            $this->_formData['report_incident_state'] = $this->input->post('report_incident_state') ? $this->input->post('report_incident_state') : $this->_formData['post_review_data']->report_incident_state;
            $this->_formData['report_incident_country'] = $this->input->post('report_incident_country') ? $this->input->post('report_incident_country') : $this->_formData['post_review_data']->report_incident_country;
            $this->_formData['report_client_ter_handle'] = $this->input->post('report_client_ter_handle') ? $this->input->post('report_client_ter_handle') : $this->_formData['post_review_data']->report_client_ter_handle;
            $this->_formData['report_client_pf411_handle'] = $this->input->post('report_client_pf411_handle') ? $this->input->post('report_client_pf411_handle') : $this->_formData['post_review_data']->report_client_pf411_handle;
            $this->_formData['report_client_datecheck_handle'] = $this->input->post('report_client_datecheck_handle') ? $this->input->post('report_client_datecheck_handle') : $this->_formData['post_review_data']->report_client_datecheck_handle;
            $this->_formData['report_client_member_of_rsk2'] = $this->input->post('report_client_member_of_rsk2') ? $this->input->post('report_client_member_of_rsk2') : $this->_formData['post_review_data']->report_client_member_of_rsk2;
            $this->_formData['report_client_eccie_handle'] = $this->input->post('report_client_eccie_handle') ? $this->input->post('report_client_eccie_handle') : $this->_formData['post_review_data']->report_client_eccie_handle;
            $this->_formData['report_client_other_handle'] = $this->input->post('report_client_other_handle') ? $this->input->post('report_client_other_handle') : $this->_formData['post_review_data']->report_client_other_handle;
            $this->_formData['report_details'] = $this->input->post('report_details') ? $this->input->post('report_details') : $this->_formData['post_review_data']->report_details;


            $this->_formData['report_client_eccie_handle'] = $this->input->post('report_client_eccie_handle') ? $this->input->post('report_client_eccie_handle') : $this->_formData['post_review_data']->report_client_eccie_handle;
            $this->_formData['report_client_other_handle'] = $this->input->post('report_client_other_handle') ? $this->input->post('report_client_other_handle') : $this->_formData['post_review_data']->report_client_other_handle;
            $this->_formData['report_details'] = $this->input->post('report_details') ? $this->input->post('report_details') : $this->_formData['post_review_data']->report_details;
            $this->_formData['level3'] = $this->input->post('level3[]') ? $this->input->post('level3[]') : stringToArray($this->_formData['post_review_data']->report_level3);
            $this->_formData['level2'] = $this->input->post('level2[]') ? $this->input->post('level2[]') : stringToArray($this->_formData['post_review_data']->report_level2);
            $this->_formData['level1'] = $this->input->post('level1[]') ? $this->input->post('level1[]') : stringToArray($this->_formData['post_review_data']->report_level1);

            $this->form_validation->set_rules('report_incident_date', 'Incident date?', 'trim|required|xss_clean');
            $this->form_validation->set_rules('report_first_name', 'First Name?', 'trim|alpha|required|max_length[30]|xss_clean');
            $this->form_validation->set_rules('report_last_name', 'Last Name?', 'trim|alpha|max_length[30]|xss_clean');

            $this->form_validation->set_rules('report_first_email', 'First Email?', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('report_second_email', 'Sceond Email?', 'trim|valid_email|xss_clean}');
            $this->form_validation->set_rules('report_third_email', 'Third Email?', 'trim|valid_email|xss_clean');


            $this->form_validation->set_rules('report_first_phone', 'First Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('report_second_phone', 'Second Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('report_third_phone', 'Third Phone Number?', 'trim|numeric|xss_clean');


            $this->form_validation->set_rules('report_residence_city', 'City?', 'trim|alpha|max_length[30]|xss_clean');
            $this->form_validation->set_rules('report_residence_state', 'State?', 'trim|xss_clean');
            $this->form_validation->set_rules('report_residence_country', 'Country?', 'trim|xss_clean');

            $this->form_validation->set_rules('report_incident_city', 'City?', 'trim|alpha|max_length[30]|xss_clean');
            $this->form_validation->set_rules('report_incident_state', 'State?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('report_incident_country', 'Country?', 'trim|numeric|xss_clean');


            $this->form_validation->set_rules('report_client_ter_handle', 'TER Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_pf411_handle', 'PF411 ID?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_datecheck_handle', 'DateCheck Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_eccie_handle', 'ECCIE Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_client_member_of_rsk2', 'Member of rsk2?', 'trim|max_length[1]|xss_clean');
            $this->form_validation->set_rules('report_client_other_handle', 'Other__?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('report_details', 'Details?', 'trim|xss_clean');

            $this->form_validation->set_rules('level3[]', 'Level III ?', 'trim|xss_clean');
            $this->form_validation->set_rules('level2[]', 'Level II ?', 'trim|xss_clean');
            $this->form_validation->set_rules('level1[]', 'Level I', 'trim|xss_clean');

            if ($this->form_validation->run() !== false)
            {
                $this->_postData['report_first_name'] = $this->_formData['report_first_name'];
                $this->_postData['report_last_name'] = $this->_formData['report_last_name'];
                $this->_postData['report_first_email'] = $this->_formData['report_first_email'];
                $this->_postData['report_second_email'] = $this->_formData['report_second_email'];
                $this->_postData['report_third_email'] = $this->_formData['report_third_email'];

                $this->_postData['report_first_phone'] = $this->_formData['report_first_phone'];
                $this->_postData['report_second_phone'] = $this->_formData['report_second_phone'];
                $this->_postData['report_third_phone'] = $this->_formData['report_third_phone'];

                $this->_postData['report_residence_city'] = $this->_formData['report_residence_city'];
                $this->_postData['report_residence_state'] = $this->_formData['report_residence_state'];
                $this->_postData['report_residence_country'] = $this->_formData['report_residence_country'];

                $this->_postData['report_incident_city'] = $this->_formData['report_incident_city'];
                $this->_postData['report_incident_state'] = $this->_formData['report_incident_state'];
                $this->_postData['report_incident_country'] = $this->_formData['report_incident_country'];

                $this->_postData['report_client_ter_handle'] = $this->_formData['report_client_ter_handle'];
                $this->_postData['report_client_pf411_handle'] = $this->_formData['report_client_pf411_handle'];
                $this->_postData['report_client_datecheck_handle'] = $this->_formData['report_client_datecheck_handle'];
                $this->_postData['report_client_eccie_handle'] = $this->_formData['report_client_eccie_handle'];
                $this->_postData['report_client_member_of_rsk2'] = $this->_formData['report_client_member_of_rsk2'];
                $this->_postData['report_client_other_handle'] = $this->_formData['report_client_other_handle'];
                $this->_postData['report_details'] = $this->_formData['report_details'];

                $this->_postData['report_level3'] = arrayToString($this->input->post('level1', true));
                $this->_postData['report_level2'] = arrayToString($this->input->post('level2', true));
                $this->_postData['report_level1'] = arrayToString($this->input->post('level3', true));

                $this->_postData['report_incident_date'] = mysqlDateFormat($this->input->post('report_incident_date'));
                $this->_postData['report_incident_rnp_id'] = $this->session->userdata('providerId');


                $this->report_incident_model->update_incident_report($this->_postData, $report_review_id);
                $this->session->set_flashdata('message_class', 'success');
                $this->session->set_flashdata('message', 'Incident detail updated successfully');
                redirect($this->data['base_url']);
                
            } else
            {
                $this->load->view('header');
                $this->load->view('providers/report_incident/edit_report_incident', $this->_formData);
                $this->load->view('footer');
            }
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */