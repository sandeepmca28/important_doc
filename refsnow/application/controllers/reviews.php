<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Reviews extends MY_Provider
{
    private $_postData;
    public $_formData;

    public function __construct()
    {
        parent::__construct();
        $this->_postData = $this->_formData = array();
        $this->_formData[]=$this->data;
        $this->load->model(array('post_review_model','point_model'));
        $this->load->helper(array('form', 'email','text'));
        $this->load->library(array('form_validation', 'country_state'));
        $this->_formData['countries'] = $this->country_state->country();
    }

    public function index()
    {
        $this->_formData['your_reviews'] = $this->post_review_model->getYourReviewListing();
        $this->load->view('header');
        $this->load->view('providers/reviews/review_listing', $this->_formData);
        $this->load->view('footer');
    }

     public function create_review()
    {
            $this->form_validation->set_rules('first_name', 'First Name?', 'trim|alpha|required|max_length[30]|xss_clean');
            $this->form_validation->set_rules('last_name', 'Last Name?', 'trim|alpha|required|max_length[30]|xss_clean');

            $this->form_validation->set_rules('client_first_email', 'First Email?', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('client_second_email', 'Sceond Email?', 'trim|valid_email|xss_clean}');
            $this->form_validation->set_rules('client_third_email', 'Third Email?', 'trim|valid_email|xss_clean');
            $this->form_validation->set_rules('client_first_phone', 'First Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('client_second_phone', 'Second Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('client_third_phone', 'Third Phone Number?', 'trim|numeric|xss_clean');

            $this->form_validation->set_rules('client_residence', 'Residence?','trim|alpha|required|max_length[150]|xss_clean');
            $this->form_validation->set_rules('client_city', 'Residence City?','trim|alpha|required|max_length[30]|xss_clean');
            $this->form_validation->set_rules('client_state', 'Residence State?','trim|numeric|required|xss_clean');
            $this->form_validation->set_rules('client_country', 'Residence Country?','trim|numeric|required|xss_clean');

            $this->form_validation->set_rules('meeting_country', 'Meeting country?','trim|numeric|xss_clean');
            $this->form_validation->set_rules('meeting_state', 'Meeting state?','trim|numeric|xss_clean');
            $this->form_validation->set_rules('meeting_city', 'Meeting city?','trim|alpha|xss_clean');

            $this->form_validation->set_rules('client_ter_handle', 'TER Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_pf411_handle', 'PF411 Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_datecheck_handle', 'DateCheck Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_eccie_handle', 'ECCIE Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_member_of_rsk2', 'Member of rsk2?', 'trim|max_length[1]|xss_clean');
            $this->form_validation->set_rules('client_other_handle', 'Other__?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('how_client_prefer_to_be_contacted[]', 'How does the client prefer to be contacted?', 'trim|xss_clean');
            $this->form_validation->set_rules('date_of_meeting', 'Date of meeting?', 'trim|xss_clean');
            $this->form_validation->set_rules('incall_outcall', 'Incall or Outcall?', 'trim|xss_clean');
            $this->form_validation->set_rules('regular_client', 'Regular client?', 'trim|xss_clean');
            $this->form_validation->set_rules('rateing_experince', 'Rate the experience for clients?', 'trim|required|xss_clean');
            $this->form_validation->set_rules('shedule[]', 'Schedule?', 'trim|xss_clean');
            $this->form_validation->set_rules('type_of_date', 'Type of date?', 'trim|xss_clean');
            $this->form_validation->set_rules('length_of_date', 'Length of date? ', 'trim|xss_clean');
            $this->form_validation->set_rules('did_he_tip', 'Did he Tip?', 'trim|xss_clean');
            $this->form_validation->set_rules('meet_again_client', 'Would you meet with client again?', 'trim|required|xss_clean');
            $this->form_validation->set_rules('your_date[]', 'Your Date? ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('personality[]', 'Personality? ', 'trim|xss_clean');
            $this->form_validation->set_rules('experience', 'Experience?', 'trim|xss_clean');
            $this->form_validation->set_rules('age', 'Age? ', 'trim|xss_clean');
            $this->form_validation->set_rules('appearance[]', 'Appearance? ', 'trim|xss_clean');
            $this->form_validation->set_rules('ethnicity', 'Ethnicity?', 'trim|xss_clean');
            $this->form_validation->set_rules('gfe', 'GFE?', 'trim|xss_clean');
            $this->form_validation->set_rules('performance', 'Performance? ', 'trim|xss_clean');
            $this->form_validation->set_rules('did_client_write_you_review', 'Did the client write you a review?', 'trim|xss_clean');
            $this->form_validation->set_rules('which_review_website', 'Which review site? ', 'trim|xss_clean');
            $this->form_validation->set_rules('rate_review_client_provided[]', 'Rate the review client provided? ', 'trim|xss_clean');
            $this->form_validation->set_rules('which_review_website_other', 'Other? ','trim|xss_clean');
            $this->form_validation->set_rules('review_desc', 'Comments?', 'trim|xss_clean');
            $this->form_validation->set_rules('blacklist_client', 'Would you like to blacklist this client?', 'trim|xss_clean');

            $this->form_validation->set_rules('review_invite_sent', 'Send Invite?', 'trim|xss_clean');

            if ($this->form_validation->run() !== false)
            {
                $this->_postData['first_name'] = $this->input->post('first_name', true);
                $this->_postData['last_name'] = $this->input->post('last_name', true);

                $this->_postData['client_first_email'] = $this->input->post('client_first_email', true);
                $this->_postData['client_second_email'] = $this->input->post('client_second_email', true);
                $this->_postData['client_third_email'] = $this->input->post('client_third_email', true);

                $this->_postData['client_first_phone'] = $this->input->post('client_first_phone', true);
                $this->_postData['client_second_phone'] = $this->input->post('client_second_phone', true);
                $this->_postData['client_third_phone'] = $this->input->post('client_third_phone', true);

                $this->_postData['client_residence'] = $this->input->post('client_residence', true);
                $this->_postData['client_city'] = $this->input->post('client_city', true);
                $this->_postData['client_state'] = $this->input->post('client_state', true);
                $this->_postData['client_country'] = $this->input->post('client_country', true);

                $this->_postData['client_ter_handle'] = $this->input->post('client_ter_handle', true);
                $this->_postData['client_pf411_handle'] = $this->input->post('client_pf411_handle', true);
                $this->_postData['client_datecheck_handle'] = $this->input->post('client_datecheck_handle', true);
                $this->_postData['client_eccie_handle'] = $this->input->post('client_eccie_handle', true);
                $this->_postData['client_member_of_rsk2'] = $this->input->post('client_member_of_rsk2', true);
                $this->_postData['client_other_handle'] = $this->input->post('client_other_handle', true);
                $this->_postData['how_client_prefer_to_be_contacted'] = arrayToString($this->input->post('how_client_prefer_to_be_contacted', true));

                $this->_postData['date_of_meeting'] = mysqlDateFormat($this->input->post('date_of_meeting', true));
                $this->_postData['incall_outcall'] = $this->input->post('incall_outcall', true);
                $this->_postData['regular_client'] = $this->input->post('regular_client', true);
                $this->_postData['rateing_experince'] = $this->input->post('rateing_experince', true);
                $this->_postData['meet_again_client'] = $this->input->post('meet_again_client', true);

                $this->_postData['meeting_country'] = $this->input->post('meeting_country', true);
                $this->_postData['meeting_state'] = $this->input->post('meeting_state', true);
                $this->_postData['meeting_city'] = $this->input->post('meeting_city', true);

                $this->_postData['shedule'] = arrayToString($this->input->post('shedule', true));
                $this->_postData['type_of_date'] = $this->input->post('type_of_date', true);
                $this->_postData['length_of_date'] = $this->input->post('length_of_date', true);
                $this->_postData['did_he_tip'] = $this->input->post('did_he_tip', true);
                $this->_postData['your_date'] = arrayToString($this->input->post('your_date', true));
                $this->_postData['personality'] = arrayToString($this->input->post('personality', true));
                $this->_postData['appearance'] = arrayToString($this->input->post('appearance', true));
                $this->_postData['experience'] = $this->input->post('experience', true);
                $this->_postData['age'] = $this->input->post('age', true);
                $this->_postData['ethnicity'] = $this->input->post('ethnicity', true);
                $this->_postData['gfe'] = $this->input->post('gfe', true);
                $this->_postData['performance'] = $this->input->post('performance', true);
                $this->_postData['did_client_write_you_review'] = $this->input->post('did_client_write_you_review', true);
                $this->_postData['rate_review_client_provided'] = arrayToString($this->input->post('rate_review_client_provided', true));

                $this->_postData['blacklist_client'] = $this->input->post('blacklist_client', true);

                $this->_postData['which_review_website'] = $this->input->post('which_review_website', true);
                $this->_postData['which_review_website_other'] = $this->input->post('which_review_website_other', true);

                $this->_postData['review_desc'] = $this->input->post('review_desc', true);
                $this->_postData['review_provider_id'] = $this->session->userdata('providerId');
                $this->_postData['review_invite_sent'] = $this->input->post('review_invite_sent', true);
                $this->_postData['review_active'] = 1;
                $this->_postData['review_creation'] = date('Y-m-d h:i:s');

                if ($this->_postData['review_invite_sent'] == true)
                {   
                    $provider_id = $this->session->userdata('providerId');
                    $point_types = $this->point_model->get_point_types_detail($id=4);                                
                    $post_points['point_type_id'] = $point_types->points;                
                    $post_points['provider_id'] = $provider_id;
                    $post_points['created_date'] = date('Y-m-d h:i:s');
                    $this->point_model->add($post_points);
                    
                    $link = sendInviteLinkToClient($this->_postData['review_provider_id']);
                    $message = "Hi, You have been invited to sign up refsnow.com.<br>Click this link: $link";
                    send_email($this->_postData['client_first_email'], "Refsnow.com: Invite to sign up", $message);
                }

                $provider_id = $this->session->userdata('providerId');
                $point_types = $this->point_model->get_point_types_detail($id=3);                                
                $post_points['point_type_id'] = $point_types->points;                
                $post_points['provider_id'] = $provider_id;
                $post_points['created_date'] = date('Y-m-d h:i:s');
                $this->point_model->add($post_points);
                
                $last_post_review_id = $this->post_review_model->addReview($this->_postData);
                $this->session->set_flashdata('message_class', 'review_server_success');
                $this->session->set_flashdata('last_post_review_id', $last_post_review_id);
                $this->session->set_flashdata('message', 'Review saved successfully');
                redirect($this->data['base_url'].'reviews');
                exit();
                
            } else
            {
                $this->load->view('header');
                $this->load->view('providers/reviews/create_review', $this->_formData);
                $this->load->view('footer');
            }
    }
    
    public function edit_review()
    {
            $review_id = mysql_real_escape_string(decodeWithCodeigniter($this->uri->segment(3)));
            $this->_formData['review_id'] = $review_id;            
            $this->_formData['your_review']= $this->post_review_model->getYourReviewDetail($review_id);
            
            /* For only parent review         */
            if ($this->_formData['your_review']->review_parent_id == 0)
            {
                $this->form_validation->set_rules('first_name', 'First Name?', 'trim|alpha|required|max_length[30]|xss_clean');
                $this->form_validation->set_rules('last_name', 'Last Name?', 'trim|alpha|required|max_length[30]|xss_clean');
                $this->form_validation->set_rules('client_residence', 'Residence?', 'trim|alpha|required|max_length[150]|xss_clean');
                $this->form_validation->set_rules('client_city', 'Residence City?', 'trim|alpha|required|max_length[30]|xss_clean');
                $this->form_validation->set_rules('client_state', 'Residence State?', 'trim|numeric|required|xss_clean');
                $this->form_validation->set_rules('client_country', 'Residence Country?', 'trim|numeric|required|xss_clean');
            }

            $this->form_validation->set_rules('client_first_email', 'First Email?', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('client_second_email', 'Sceond Email?', 'trim|valid_email|xss_clean}');
            $this->form_validation->set_rules('client_third_email', 'Third Email?', 'trim|valid_email|xss_clean');

            $this->form_validation->set_rules('client_first_phone', 'First Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('client_second_phone', 'Second Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('client_third_phone', 'Third Phone Number?', 'trim|numeric|xss_clean');

            $this->form_validation->set_rules('meeting_country', 'Meeting country?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('meeting_state', 'Meeting state?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('meeting_city', 'Meeting city?', 'trim|alpha|xss_clean');

            $this->form_validation->set_rules('client_ter_handle', 'TER Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_pf411_handle', 'PF411 Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_datecheck_handle', 'DateCheck Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_eccie_handle', 'ECCIE Handle?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('client_member_of_rsk2', 'Member of rsk2?', 'trim|max_length[1]|xss_clean');
            $this->form_validation->set_rules('client_other_handle', 'Other__?', 'trim|max_length[200]|xss_clean');
            $this->form_validation->set_rules('how_client_prefer_to_be_contacted[]', 'How does the client prefer to be contacted?', 'trim|xss_clean');
            $this->form_validation->set_rules('date_of_meeting', 'Date of meeting?', 'trim|xss_clean');
            $this->form_validation->set_rules('incall_outcall', 'Incall or Outcall?', 'trim|xss_clean');
            $this->form_validation->set_rules('regular_client', 'Regular client?', 'trim|xss_clean');
            $this->form_validation->set_rules('rateing_experince', 'Rate the experience for clients?', 'trim|required|xss_clean');
            $this->form_validation->set_rules('shedule[]', 'Schedule?', 'trim|xss_clean');
            $this->form_validation->set_rules('type_of_date', 'Type of date?', 'trim|xss_clean');
            $this->form_validation->set_rules('length_of_date', 'Length of date? ', 'trim|xss_clean');
            $this->form_validation->set_rules('did_he_tip', 'Did he Tip?', 'trim|xss_clean');
            $this->form_validation->set_rules('meet_again_client', 'Would you meet with client again?', 'trim|required|xss_clean');
            $this->form_validation->set_rules('your_date[]', 'Your Date? ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('personality[]', 'Personality? ', 'trim|xss_clean');
            $this->form_validation->set_rules('experience', 'Experience?', 'trim|xss_clean');
            $this->form_validation->set_rules('age', 'Age? ', 'trim|xss_clean');
            $this->form_validation->set_rules('appearance[]', 'Appearance? ', 'trim|xss_clean');
            $this->form_validation->set_rules('ethnicity', 'Ethnicity?', 'trim|xss_clean');
            $this->form_validation->set_rules('gfe', 'GFE?', 'trim|xss_clean');
            $this->form_validation->set_rules('performance', 'Performance? ', 'trim|xss_clean');
            $this->form_validation->set_rules('did_client_write_you_review', 'Did the client write you a review?', 'trim|xss_clean');
            $this->form_validation->set_rules('which_review_website', 'Which review site? ', 'trim|xss_clean');
            $this->form_validation->set_rules('rate_review_client_provided[]', 'Rate the review client provided? ', 'trim|xss_clean');
            $this->form_validation->set_rules('which_review_website_other', 'Other? ', 'trim|xss_clean');
            $this->form_validation->set_rules('review_desc', 'Comments?', 'trim|xss_clean');
            $this->form_validation->set_rules('blacklist_client', 'Would you like to blacklist this client ?', 'trim|xss_clean');

            $this->_formData['first_name'] = $this->input->post('first_name', true) ? $this->input->post('first_name', true) : $this->_formData['your_review']->first_name;
            $this->_formData['last_name'] = $this->input->post('last_name', true) ? $this->input->post('last_name', true) : $this->_formData['your_review']->last_name;

            $this->_formData['client_first_email'] = $this->input->post('client_first_email', true) ? $this->input->post('client_first_email', true) : $this->_formData['your_review']->client_first_email;
            $this->_formData['client_second_email'] = $this->input->post('client_second_email', true) ? $this->input->post('client_second_email', true) : $this->_formData['your_review']->client_second_email;
            $this->_formData['client_third_email'] = $this->input->post('client_third_email', true) ? $this->input->post('client_third_email', true) : $this->_formData['your_review']->client_third_email;

            $this->_formData['client_first_phone'] = $this->input->post('client_first_phone', true) ? $this->input->post('client_first_phone', true) : $this->_formData['your_review']->client_first_phone;
            $this->_formData['client_second_phone'] = $this->input->post('client_second_phone', true) ? $this->input->post('client_second_phone', true) : $this->_formData['your_review']->client_second_phone;
            $this->_formData['client_third_phone'] = $this->input->post('client_third_phone', true) ? $this->input->post('client_third_phone', true) : $this->_formData['your_review']->client_third_phone;

            $this->_formData['client_residence'] = $this->input->post('client_residence', true) ? $this->input->post('client_residence', true) : $this->_formData['your_review']->client_residence;
            $this->_formData['client_city'] = $this->input->post('client_city', true) ? $this->input->post('client_city', true) : $this->_formData['your_review']->client_city;
            $this->_formData['client_state'] = $this->input->post('client_state', true) ? $this->input->post('client_state', true) : $this->_formData['your_review']->client_state;
            $this->_formData['client_country'] = $this->input->post('client_country', true) ? $this->input->post('client_country', true) : $this->_formData['your_review']->client_country;

            $this->_formData['client_ter_handle'] = $this->input->post('client_ter_handle', true) ? $this->input->post('client_ter_handle', true) : $this->_formData['your_review']->client_ter_handle;
            $this->_formData['client_pf411_handle'] = $this->input->post('client_pf411_handle', true) ? $this->input->post('client_pf411_handle', true) : $this->_formData['your_review']->client_pf411_handle;
            $this->_formData['client_datecheck_handle'] = $this->input->post('client_datecheck_handle', true) ? $this->input->post('client_datecheck_handle', true) : $this->_formData['your_review']->client_datecheck_handle;
            $this->_formData['client_eccie_handle'] = $this->input->post('client_eccie_handle', true) ? $this->input->post('client_eccie_handle', true) : $this->_formData['your_review']->client_eccie_handle;
            $this->_formData['client_member_of_rsk2'] = $this->input->post('client_member_of_rsk2', true) ? $this->input->post('client_member_of_rsk2', true) : $this->_formData['your_review']->client_member_of_rsk2;
            $this->_formData['client_other_handle'] = $this->input->post('client_other_handle', true) ? $this->input->post('client_other_handle', true) : $this->_formData['your_review']->client_other_handle;

            $this->_formData['how_client_prefer_to_be_contacted'] = $this->input->post('how_client_prefer_to_be_contacted', true) ? $this->input->post('how_client_prefer_to_be_contacted', true) : stringToArray($this->_formData['your_review']->how_client_prefer_to_be_contacted);

            $this->_formData['date_of_meeting'] = $this->input->post('date_of_meeting', true) ? $this->input->post('date_of_meeting', true) : date('m-d-Y', strtotime($this->_formData['your_review']->date_of_meeting));
            $this->_formData['incall_outcall'] = $this->input->post('incall_outcall', true) ? $this->input->post('incall_outcall', true) : $this->_formData['your_review']->incall_outcall;
            $this->_formData['regular_client'] = $this->input->post('regular_client', true) ? $this->input->post('regular_client', true) : $this->_formData['your_review']->regular_client;
            $this->_formData['rateing_experince'] = $this->input->post('rateing_experince', true) ? $this->input->post('rateing_experince', true) : $this->_formData['your_review']->rateing_experince;
            $this->_formData['meet_again_client'] = $this->input->post('meet_again_client', true) ? $this->input->post('meet_again_client', true) : $this->_formData['your_review']->meet_again_client;

            $this->_formData['meeting_country'] = $this->input->post('meeting_country', true) ? $this->input->post('meeting_country', true) : $this->_formData['your_review']->meeting_country;
            $this->_formData['meeting_state'] = $this->input->post('meeting_state', true) ? $this->input->post('meeting_state', true) : $this->_formData['your_review']->meeting_state;
            $this->_formData['meeting_city'] = $this->input->post('meeting_city', true) ? $this->input->post('meeting_city', true) : $this->_formData['your_review']->meeting_city;

            $this->_formData['shedule'] = $this->input->post('shedule', true) ? $this->input->post('shedule', true) : stringToArray($this->_formData['your_review']->shedule);
            $this->_formData['type_of_date'] = $this->input->post('type_of_date', true) ? $this->input->post('type_of_date', true) : $this->_formData['your_review']->type_of_date;
            $this->_formData['length_of_date'] = $this->input->post('length_of_date', true) ? $this->input->post('length_of_date', true) : $this->_formData['your_review']->length_of_date;
            $this->_formData['did_he_tip'] = $this->input->post('did_he_tip', true) ? $this->input->post('did_he_tip', true) : $this->_formData['your_review']->did_he_tip;
            $this->_formData['your_date'] = $this->input->post('your_date', true) ? $this->input->post('your_date', true) : stringToArray($this->_formData['your_review']->your_date);
            $this->_formData['personality'] = $this->input->post('personality', true) ? $this->input->post('personality', true) : stringToArray($this->_formData['your_review']->personality);
            $this->_formData['appearance'] = $this->input->post('appearance', true) ? $this->input->post('appearance', true) : stringToArray($this->_formData['your_review']->appearance);
            $this->_formData['experience'] = $this->input->post('experience', true) ? $this->input->post('experience', true) : $this->_formData['your_review']->experience;
            $this->_formData['age'] = $this->input->post('age', true) ? $this->input->post('age', true) : $this->_formData['your_review']->age;
            $this->_formData['ethnicity'] = $this->input->post('ethnicity', true) ? $this->input->post('ethnicity', true) : $this->_formData['your_review']->ethnicity;
            $this->_formData['gfe'] = $this->input->post('gfe', true) ? $this->input->post('gfe', true) : $this->_formData['your_review']->gfe;
            $this->_formData['performance'] = $this->input->post('performance', true) ? $this->input->post('performance', true) : $this->_formData['your_review']->performance;
            $this->_formData['did_client_write_you_review'] = $this->input->post('did_client_write_you_review', true) ? $this->input->post('did_client_write_you_review', true) : $this->_formData['your_review']->did_client_write_you_review;
            $this->_formData['rate_review_client_provided'] = $this->input->post('rate_review_client_provided', true) ? $this->input->post('rate_review_client_provided', true) : stringToArray($this->_formData['your_review']->rate_review_client_provided);

            $this->_formData['blacklist_client'] = $this->input->post('blacklist_client', true) ? $this->input->post('blacklist_client', true) : $this->_formData['your_review']->blacklist_client;
            $this->_formData['which_review_website'] = $this->input->post('which_review_website', true) ? $this->input->post('which_review_website', true) : $this->_formData['your_review']->which_review_website;
            $this->_formData['which_review_website_other'] = $this->input->post('which_review_website_other', true) ? $this->input->post('which_review_website_other', true) : $this->_formData['your_review']->which_review_website_other;
            $this->_formData['review_desc'] = $this->input->post('review_desc', true) ? $this->input->post('review_desc', true) : $this->_formData['your_review']->review_desc;

            if ($this->form_validation->run() !== false)
            {
                if ($this->input->post('submit'))
                {
                    $this->_postData['first_name'] = $this->input->post('first_name', true);
                    $this->_postData['last_name'] = $this->input->post('last_name', true);

                    $this->_postData['client_first_email'] = $this->input->post('client_first_email', true);
                    $this->_postData['client_second_email'] = $this->input->post('client_second_email', true);
                    $this->_postData['client_third_email'] = $this->input->post('client_third_email', true);

                    $this->_postData['client_first_phone'] = $this->input->post('client_first_phone', true);
                    $this->_postData['client_second_phone'] = $this->input->post('client_second_phone', true);
                    $this->_postData['client_third_phone'] = $this->input->post('client_third_phone', true);

                    $this->_postData['client_residence'] = $this->input->post('client_residence', true);
                    $this->_postData['client_city'] = $this->input->post('client_city', true);
                    $this->_postData['client_state'] = $this->input->post('client_state', true);
                    $this->_postData['client_country'] = $this->input->post('client_country', true);

                    $this->_postData['client_ter_handle'] = $this->input->post('client_ter_handle', true);
                    $this->_postData['client_pf411_handle'] = $this->input->post('client_pf411_handle', true);
                    $this->_postData['client_datecheck_handle'] = $this->input->post('client_datecheck_handle', true);
                    $this->_postData['client_eccie_handle'] = $this->input->post('client_eccie_handle', true);
                    $this->_postData['client_member_of_rsk2'] = $this->input->post('client_member_of_rsk2', true);
                    $this->_postData['client_other_handle'] = $this->input->post('client_other_handle', true);
                    $this->_postData['how_client_prefer_to_be_contacted'] = arrayToString($this->input->post('how_client_prefer_to_be_contacted', true));

                    $this->_postData['date_of_meeting'] = mysql_date_m_d_y($this->input->post('date_of_meeting', true));
                    $this->_postData['incall_outcall'] = $this->input->post('incall_outcall', true);
                    $this->_postData['regular_client'] = $this->input->post('regular_client', true);
                    $this->_postData['rateing_experince'] = $this->input->post('rateing_experince', true);
                    $this->_postData['meet_again_client'] = $this->input->post('meet_again_client', true);

                    $this->_postData['meeting_country'] = $this->input->post('meeting_country', true);
                    $this->_postData['meeting_state'] = $this->input->post('meeting_state', true);
                    $this->_postData['meeting_city'] = $this->input->post('meeting_city', true);


                    $this->_postData['shedule'] = arrayToString($this->input->post('shedule', true));
                    $this->_postData['type_of_date'] = $this->input->post('type_of_date', true);
                    $this->_postData['length_of_date'] = $this->input->post('length_of_date', true);
                    $this->_postData['did_he_tip'] = $this->input->post('did_he_tip', true);
                    $this->_postData['your_date'] = arrayToString($this->input->post('your_date', true));
                    $this->_postData['personality'] = arrayToString($this->input->post('personality', true));
                    $this->_postData['appearance'] = arrayToString($this->input->post('appearance', true));
                    $this->_postData['experience'] = $this->input->post('experience', true);
                    $this->_postData['age'] = $this->input->post('age', true);
                    $this->_postData['ethnicity'] = $this->input->post('ethnicity', true);
                    $this->_postData['gfe'] = $this->input->post('gfe', true);
                    $this->_postData['performance'] = $this->input->post('performance', true);
                    $this->_postData['did_client_write_you_review'] = $this->input->post('did_client_write_you_review', true);
                    $this->_postData['rate_review_client_provided'] = arrayToString($this->input->post('rate_review_client_provided', true));
                    $this->_postData['blacklist_client'] = $this->input->post('blacklist_client', true);
                    $this->_postData['which_review_website'] = $this->input->post('which_review_website', true);
                    $this->_postData['which_review_website_other'] = $this->input->post('which_review_website_other', true);

                    $this->_postData['review_desc'] = $this->input->post('review_desc', true);
                  
                    $this->_postData['review_active'] = 1;
                    
                    $this->post_review_model->updateReview($this->_postData, $review_id);
                    $this->session->set_flashdata('message_class', 'review_server_success');
                    
                    $this->session->set_flashdata('message', 'Review updated successfully');

                    redirect($this->data['base_url'] . 'reviews');
                    exit();
                }
            } else
            {
                $this->load->view('header');
                $this->load->view('providers/reviews/edit_review', $this->_formData);
                $this->load->view('footer');
            }
    }

     public function review_detail()
    {       
            $review_id = mysql_real_escape_string(decodeWithCodeigniter($this->uri->segment(3)));
            $this->_formData['your_reviews'] = $this->post_review_model->getYourReviewDetail($review_id);
           
            $this->load->view('header');
            $this->load->view('providers/reviews/review_detail', $this->_formData);
            $this->load->view('footer');
    }

    public function create_related_review()
    {
            $review_id = mysql_real_escape_string(decodeWithCodeigniter($this->uri->segment(3)));
            $grand_parent_review_id = $this->post_review_model->grand_parent_review_id($review_id);
            
            $this->form_validation->set_rules('client_first_email', 'First Email?', 'trim|valid_email|xss_clean');
            $this->form_validation->set_rules('client_second_email', 'Sceond Email?', 'trim|valid_email|xss_clean}');
            $this->form_validation->set_rules('client_third_email', 'Third Email?', 'trim|valid_email|xss_clean');
            $this->form_validation->set_rules('client_first_phone', 'First Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('client_second_phone', 'Second Phone Number?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('client_third_phone', 'Third Phone Number?', 'trim|numeric|xss_clean');

            $this->form_validation->set_rules('meeting_country', 'Meeting country?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('meeting_state', 'Meeting state?', 'trim|numeric|xss_clean');
            $this->form_validation->set_rules('meeting_city', 'Meeting city?', 'trim|alpha|xss_clean');

            $this->form_validation->set_rules('date_of_meeting', 'Date of meeting?', 'trim|xss_clean');
            $this->form_validation->set_rules('incall_outcall', 'Incall or Outcall?', 'trim|xss_clean');

            $this->form_validation->set_rules('rateing_experince', 'Rate the experience for clients?', 'trim|xss_clean');
            $this->form_validation->set_rules('meet_again_client', 'Would you meet with client again?', 'trim|xss_clean');
            $this->form_validation->set_rules('shedule[]', 'Schedule?', 'trim|xss_clean');

            $this->form_validation->set_rules('type_of_date', 'Type of date?', 'trim|xss_clean');
            $this->form_validation->set_rules('length_of_date', 'Length of date? ', 'trim|xss_clean');
            $this->form_validation->set_rules('did_he_tip', 'Did he Tip?', 'trim|xss_clean');

            $this->form_validation->set_rules('your_date[]', 'Your Date? ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('personality[]', 'Personality? ', 'trim|xss_clean');
            $this->form_validation->set_rules('appearance[]', 'Appearance? ', 'trim|xss_clean');
            $this->form_validation->set_rules('gfe', 'GFE?', 'trim|xss_clean');
            $this->form_validation->set_rules('performance', 'Performance? ', 'trim|xss_clean');

            $this->form_validation->set_rules('did_client_write_you_review', 'Did the client write you a review?', 'trim|xss_clean');
            $this->form_validation->set_rules('which_review_website', 'Which review site? ', 'trim|xss_clean');

            $this->form_validation->set_rules('which_review_website_other', 'Which review site? ', 'trim|xss_clean');
            $this->form_validation->set_rules('rate_review_client_provided[]', 'Rate the review client provided? ', 'trim|xss_clean');
            $this->form_validation->set_rules('review_desc', 'Comments?', 'trim|xss_clean');
            $this->form_validation->set_rules('blacklist_client', 'Would you like to blacklist this client ?', 'trim|xss_clean');

            if ($this->form_validation->run() !== false)
            {
                $this->_postData['first_name']=$this->_postData['last_name'] =$this->_postData['client_residence'] =$this->_postData['client_city']= $this->_postData['how_client_prefer_to_be_contacted']=$this->_postData['client_other_handle']= $this->_postData['client_eccie_handle']=$this->_postData['client_member_of_rsk2']=$this->_postData['client_datecheck_handle'] = $this->_postData['client_pf411_handle'] =$this->_postData['client_ter_handle']= $this->_postData['client_state'] =$this->_postData['client_country']= '';
               
                $this->_postData['client_first_email'] = $this->input->post('client_first_email', true);
                $this->_postData['client_second_email'] = $this->input->post('client_second_email', true);
                $this->_postData['client_third_email'] = $this->input->post('client_third_email', true);

                $this->_postData['client_first_phone'] = $this->input->post('client_first_phone', true);
                $this->_postData['client_second_phone'] = $this->input->post('client_second_phone', true);
                $this->_postData['client_third_phone'] = $this->input->post('client_third_phone', true);

                
                $this->_postData['date_of_meeting'] = mysqlDateFormat($this->input->post('date_of_meeting', true));
                $this->_postData['incall_outcall'] = $this->input->post('incall_outcall', true);
                $this->_postData['regular_client'] = $this->input->post('regular_client', true);
                $this->_postData['rateing_experince'] = $this->input->post('rateing_experince', true);
                $this->_postData['meet_again_client'] = $this->input->post('meet_again_client', true);

                $this->_postData['meeting_country'] = $this->input->post('meeting_country', true);
                $this->_postData['meeting_state'] = $this->input->post('meeting_state', true);
                $this->_postData['meeting_city'] = $this->input->post('meeting_city', true);


                $this->_postData['shedule'] = arrayToString($this->input->post('shedule', true));
                $this->_postData['type_of_date'] = $this->input->post('type_of_date', true);
                $this->_postData['length_of_date'] = $this->input->post('length_of_date', true);
                $this->_postData['did_he_tip'] = $this->input->post('did_he_tip', true);
                $this->_postData['your_date'] = arrayToString($this->input->post('your_date', true));
                $this->_postData['personality'] = arrayToString($this->input->post('personality', true));
                $this->_postData['appearance'] = arrayToString($this->input->post('appearance', true));
                $this->_postData['experience'] = '';
                $this->_postData['age'] = '';
                $this->_postData['ethnicity'] = '';
                $this->_postData['gfe'] = $this->input->post('gfe', true);
                $this->_postData['performance'] = $this->input->post('performance', true);
                $this->_postData['did_client_write_you_review'] = $this->input->post('did_client_write_you_review', true);
                $this->_postData['rate_review_client_provided'] = arrayToString($this->input->post('rate_review_client_provided', true));
                $this->_postData['blacklist_client'] = $this->input->post('blacklist_client', true);
                $this->_postData['which_review_website'] = $this->input->post('which_review_website', true);
                $this->_postData['which_review_website_other'] = $this->input->post('which_review_website_other', true);

                $this->_postData['review_desc'] = $this->input->post('review_desc', true);
                $this->_postData['review_provider_id'] = $this->session->userdata('providerId');

                $this->_postData['review_active'] = 1;
                $this->_postData['review_parent_id'] = $grand_parent_review_id;
                $this->_postData['review_creation'] = date('Y-m-d H:i:s');

                $last_post_review_id = $this->post_review_model->addReview($this->_postData);
                $this->session->set_flashdata('message_class', 'review_server_success');
                $this->session->set_flashdata('last_post_review_id', $last_post_review_id);
                $this->session->set_flashdata('message', 'Review saved successfully');
                redirect($this->data['base_url'] . 'reviews/post_review');
                exit();
            } else
            {
                $this->load->view('header');
                $this->load->view('providers/reviews/create_related_review', $this->_formData);
                $this->load->view('footer');
            }
    }

    public function related_reviews_listing()
    {      
            $review_id = mysql_real_escape_string(decodeWithCodeigniter($this->uri->segment(3)));
            $this->_formData['your_reviews'] = $this->post_review_model->getRelatedReviewListing($review_id);
            
            $this->load->view('header');
            $this->load->view('providers/reviews/related_reviews_listing', $this->_formData);
            $this->load->view('footer');
    }

   
    public function get_state_ajax()
    {
        $id = $stateid = $states = '';
        $id = mysql_real_escape_string($this->input->post('id', true));
        $stateid = mysql_real_escape_string($this->input->post('stateid', true));
        $states = $this->country_state->state($id);
        echo $this->load->view('providers/ajax/state_ajax', array('states' => $states, 'stateid' => $stateid), true);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */