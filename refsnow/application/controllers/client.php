<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Client extends MY_Client 
{
        public  $formData;
        private $postData;        
        public function __construct() 
        {
            parent::__construct(); 
            
            $this->_postData = $this->formData = array();
            $this->load->helper(array('form'));
            $this->load->model(array('provider_model','point_model','login_model','send_invitation_model','client_model','user_model'));
            $this->load->library(array('form_validation','country_state'));
            $this->data['countries'] = $this->country_state->country();
        }
        
        public function index()                
        {                       
            $post=array();            
            $client_id = $this->session->userdata('clientId');
            $this->data['client'] = $this->client_model->get_client_detail($client_id); 
            $this->data['client']->how_would_prefer_contacted= explode(',',$this->data['client']->how_would_prefer_contacted);          
            $this->data['client']->client_prefer_incall_outcall= explode(',',$this->data['client']->client_prefer_incall_outcall);          
            $this->data['client']->client_what_type_of_footwear_prefer= explode(',',$this->data['client']->client_what_type_of_footwear_prefer);          
            $this->data['client']->client_feel_about_provider_smoking= explode(',',$this->data['client']->client_feel_about_provider_smoking);          
            $this->data['client']->client_alcohol_preference= explode(',',$this->data['client']->client_alcohol_preference);          
            $this->data['client']->client_session_preferences= explode(',',$this->data['client']->client_session_preferences);          
            $this->data['client']->client_personality= explode(',',$this->data['client']->client_personality);          
           
            $this->form_validation->set_rules('client_first_name','First Name','trim|required|xss_clean');           
            $this->form_validation->set_rules('client_last_name','Last Name','trim|xss_clean');
            $this->form_validation->set_rules('client_nic_name','Nic Name','trim|xss_clean');
            $this->form_validation->set_rules('client_email2','Email','trim|valid_email|max_length[100]|xss_clean');
            $this->form_validation->set_rules('client_proffessional_email','Email','trim|valid_email|max_length[100]|xss_clean');
            $this->form_validation->set_rules('client_phone','Phone','trim|xss_clean');
            $this->form_validation->set_rules('client_cell_phone','Cell Phone ','trim|xss_clean');
            
            $this->form_validation->set_rules('client_residence_country','Country','trim|xss_clean');
            $this->form_validation->set_rules('client_residence_state','State','trim|xss_clean');
            $this->form_validation->set_rules('client_residence_city','city','trim|xss_clean');
            
            $this->form_validation->set_rules('client_ter_handle','TER Handle','trim|xss_clean');
            
            $this->form_validation->set_rules('client_datecheck_handle','DateCheck Handle','trim|xss_clean');
            $this->form_validation->set_rules('client_pf411_id','PF411 ID','trim|xss_clean');
            $this->form_validation->set_rules('client_eccie_handle','ECCIE Handle','trim|xss_clean');
            $this->form_validation->set_rules('client_other_handle','Other Handle','trim|xss_clean');
            $this->form_validation->set_rules('how_would_prefer_contacted[]','How would you prefer to be contacted?','trim|xss_clean');
            $this->form_validation->set_rules('client_special_instructions','Special Instructions','trim|xss_clean');
            $this->form_validation->set_rules('client_level_of_discretion','Level of discretion','trim|xss_clean');
            $this->form_validation->set_rules('client_age','Age','trim|xss_clean');
            $this->form_validation->set_rules('client_height','Height','trim|xss_clean');
            $this->form_validation->set_rules('client_weight','Weight','trim|xss_clean');
            $this->form_validation->set_rules('client_ethnicity','Ethnicity','trim|xss_clean');
            $this->form_validation->set_rules('client_proffession','Proffession','trim|xss_clean');
            $this->form_validation->set_rules('client_proffession_other','Other','trim|xss_clean');
            $this->form_validation->set_rules('client_prefer_incall_outcall[]','Do you prefer Incall or Outcall','trim|xss_clean');
            $this->form_validation->set_rules('client_prefer_incall_outcall_other','Other','trim|xss_clean');
            $this->form_validation->set_rules('client_clothing_preference','Clothing Preference','trim|xss_clean');
            $this->form_validation->set_rules('client_clothing_preference_instruction','Special Instructions','trim|xss_clean');
            
            $this->form_validation->set_rules('client_what_type_of_footwear_prefer[]','What type of footwear do you prefer','trim|xss_clean');
            $this->form_validation->set_rules('client_cented_lotion_perfume','Would you like for the provider to wear scented lotions or perfumes','trim|xss_clean');
            
            $this->form_validation->set_rules('client_fetishes','Fetishes','trim|xss_clean');
            
            $this->form_validation->set_rules('client_smoke','Do you smoke','trim|xss_clean');
            
            $this->form_validation->set_rules('client_feel_about_provider_smoking[]','How do you feel about the provider smoking','trim|xss_clean');
            
            $this->form_validation->set_rules('client_do_you_drink_alcohol','Do you drink alcohol','trim|xss_clean');
            
            $this->form_validation->set_rules('client_alcohol_preference[]','Preferences','trim|xss_clean');
            $this->form_validation->set_rules('client_health_problem','Do you have any Health problems','trim|xss_clean');
            $this->form_validation->set_rules('client_health_problem_other','Other','trim|xss_clean');
            $this->form_validation->set_rules('client_personality[]','Your Personality','trim|xss_clean');
            
            $this->form_validation->set_rules('client_personality_other','Other','trim|xss_clean');
            
            $this->form_validation->set_rules('client_experience','Experience','trim|xss_clean');
            $this->form_validation->set_rules('client_session_preferences[]','Session preferences','trim|xss_clean');
            
            $this->form_validation->set_rules('client_session_preferences_other','Other preferences','trim|xss_clean');
            
            $this->form_validation->set_rules('client_hobbies_interest','Hobbies/interest','trim|xss_clean');
            
            $this->form_validation->set_rules('client_more_about_you','More about you','trim|xss_clean');
                        
            if($this->form_validation->run() !== FALSE)
            {       
                $post['client_first_name'] = $this->input->post('client_first_name',true);                
                $post['client_last_name'] = $this->input->post('client_last_name',true);
                $post['client_nic_name'] = $this->input->post('client_nic_name',true);
                $post['client_email2'] = $this->input->post('client_email2',true);
                
                $post['client_proffessional_email'] = $this->input->post('client_proffessional_email',true);
                $post['client_phone'] = $this->input->post('client_phone',true);
                $post['client_cell_phone'] = $this->input->post('client_cell_phone',true);
                $post['client_ter_handle'] = $this->input->post('client_ter_handle',true);
                
                $post['client_proffession_other'] = $this->input->post('client_proffession_other',true);               
                $post['client_ethnicity'] = $this->input->post('client_ethnicity',true);
                $post['client_datecheck_handle'] = $this->input->post('client_datecheck_handle',true);
                $post['client_pf411_id'] = $this->input->post('client_pf411_id',true);
                
                $post['client_eccie_handle'] = $this->input->post('client_eccie_handle',true);                
                $post['client_residence_country'] = $this->input->post('client_residence_country',true);                
                $post['client_residence_state'] = $this->input->post('client_residence_state',true);                
                $post['client_residence_city'] = $this->input->post('client_residence_city',true);
                $post['client_other_handle'] = $this->input->post('client_other_handle',true);
                
                $post['how_would_prefer_contacted'] = $this->input->post('how_would_prefer_contacted')!='' ? implode(',',$this->input->post('how_would_prefer_contacted',true)):'';
                $post['client_special_instructions'] = $this->input->post('client_special_instructions',true);
                $post['client_level_of_discretion'] = $this->input->post('client_level_of_discretion',true);
                $post['client_age'] = $this->input->post('client_age',true);
                
                $post['client_height'] = $this->input->post('client_height',true);
                $post['client_weight'] = $this->input->post('client_weight',true);
                $post['client_proffession'] = $this->input->post('client_proffession',true);
                $post['client_prefer_incall_outcall'] = $this->input->post('client_prefer_incall_outcall',true) ? implode(',',$this->input->post('client_prefer_incall_outcall',true)):'';
                $post['client_prefer_incall_outcall_other'] = $this->input->post('client_prefer_incall_outcall_other',true);
                $post['client_clothing_preference'] = $this->input->post('client_clothing_preference',true);
                
                $post['client_clothing_preference_instruction'] = $this->input->post('client_clothing_preference_instruction',true);
                $post['client_what_type_of_footwear_prefer'] = $this->input->post('client_what_type_of_footwear_prefer',true)!='' ?  implode(',',$this->input->post('client_what_type_of_footwear_prefer',true)):'';
               
                $post['client_cented_lotion_perfume'] = $this->input->post('client_cented_lotion_perfume',true);
                $post['client_fetishes'] = $this->input->post('client_fetishes',true);
                $post['client_smoke'] = $this->input->post('client_smoke',true);
                
                $post['client_feel_about_provider_smoking'] = $this->input->post('client_feel_about_provider_smoking',true)!='' ? implode(',',$this->input->post('client_feel_about_provider_smoking',true)):'';
                $post['client_do_you_drink_alcohol'] = $this->input->post('client_do_you_drink_alcohol',true);
                $post['client_alcohol_preference'] = $this->input->post('client_alcohol_preference',true) !=''? implode(',',$this->input->post('client_alcohol_preference',true)):'';
                $post['client_health_problem'] = $this->input->post('client_health_problem',true);
                
                $post['client_health_problem_other'] = $this->input->post('client_health_problem_other',true);
                $post['client_personality'] = $this->input->post('client_personality',true)!='' ? implode(',',$this->input->post('client_personality',true)):'';                
                $post['client_personality_other'] = $this->input->post('client_personality_other',true);
                $post['client_experience'] = $this->input->post('client_experience',true);
                
                $post['client_experience_comment'] = $this->input->post('client_experience_comment',true);
                $post['client_session_preferences'] = $this->input->post('client_session_preferences',true)!='' ? implode(',',$this->input->post('client_session_preferences',true)):'';
                $post['client_session_preferences_other'] = $this->input->post('client_session_preferences_other',true);
                $post['client_hobbies_interest'] = $this->input->post('client_hobbies_interest',true);
                $post['client_more_about_you'] = $this->input->post('client_more_about_you',true);
              
                if(!empty($_FILES['client_profile_pic'][name]))
                {
                    $config['upload_path']= './uploads/clients/profile/';
                    $config['allowed_types']= 'gif|jpg|png';
                    $config['max_size']= '2024';
                    $post['client_profile_pic'] = $config['file_name']= uniqid();
                    $this->load->library('upload',$config);

                    if($this->upload->do_upload('client_profile_pic'))
                    {                        
                        $data = array('upload_data' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $data['upload_data']['full_path'];
                        $config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;

                        $config['width'] = 400;
                        $config['height'] = 400;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $post['client_pic_ext'] = $data['upload_data']['file_ext'];
                       
                        $this->client_model->update_client($post,$client_id);
                        $this->session->set_flashdata('message_class','server_success');
                        $this->session->set_flashdata('message','Your profile has been updated successfully.');
                        redirect(base_url().'client');
                        exit();
                    }
                    else
                    {
                        $this->data['file_error']=$this->upload->display_errors();
                        $this->load->view('header',$this->data);            
                        $this->load->view('clients/client_profile');
                        $this->load->view('footer');                       
                        exit();
                    }
                }
                
                $this->client_model->update_client($post,$client_id);
                $this->session->set_flashdata('message_class','server_success');
                $this->session->set_flashdata('message','Your profile has been updated successfully.');
                redirect(base_url().'client');
                exit();
            }
            else 
            {
                $this->load->view('header',$this->data);            
                $this->load->view('clients/client_profile');
                $this->load->view('footer');  
            }                    
        }
        
        public function login()
        {                        
            $this->form_validation->set_rules('password','Password','trim|required|xss_clean');           
            $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
            
            if($this->form_validation->run() !== FALSE)
            {
                $this->formData['username'] =$this->input->post('username',true);
                $this->formData['password'] = md5($this->input->post('password',true)); 
                $userData = $this->login_model->clientLogin($this->formData);
                   
                if(!empty($userData))
                {
                    if($userData->status == 1 && $userData->user_type_id == 3)
                    {
                        $clientData = $this->login_model->getClientDetail($userData->user_id);
                        $this->session->unset_userdata('providerName');
                        $this->session->unset_userdata('userId');
                        $this->session->unset_userdata('providerId');
                        $this->session->unset_userdata('providerEmail');
                        $this->session->unset_userdata('userTypeLogin');                        
                        $this->session->set_userdata('userId', $clientData->user_id);
                        $this->session->set_userdata('clientName', $clientData->client_first_name.''.$clientData->client_last_name);
                        $this->session->set_userdata('clientId', $clientData->client_id);
                        $this->session->set_userdata('clientEmail', $clientData->client_email);
                        $this->session->set_userdata('userTypeLogin', 'client');                        
                        redirect(base_url().'client_about_us');
                        exit();
                    }
                    else 
                    {
                         $this->session->set_flashdata('message_class','server_error');
                         $this->session->set_flashdata('message','Sorry, your account not activiated yet.');
                         redirect(base_url().'client/login');
                         exit();
                    }
                }else
                {
                    $this->session->set_flashdata('message_class','server_error');
                    $this->session->set_flashdata('message','Invalid Email or Password');
                    redirect(base_url().'client/login');
                    exit();
                }
            }

            $this->load->view('header');
            $this->load->view('clients/client_login');
            $this->load->view('footer');
        }
        
        public function signup()
        {   
            $this->form_validation->set_rules('username','Username','trim|required|alpha_numeric|xss_clean|is_unique[tb_users.username]');
            $this->form_validation->set_rules('client_password','Password','trim|required|matches[cpassword]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required');
            
            $this->form_validation->set_rules('client_first_name','First Name','trim|required|min_length[2]|xss_clean');
            $this->form_validation->set_rules('client_last_name','Last Name','trim|min_length[2]|xss_clean');
            $this->form_validation->set_rules('client_email','Email','trim|required|valid_email|is_unique[tb_clients.client_email]|xss_clean');
                        
            $this->form_validation->set_rules('client_email2','Email 2','trim|valid_email|is_unique[tb_clients.client_email2]|xss_clean');
            $this->form_validation->set_rules('client_proffessional_email','Proffessional Email','trim|valid_email|is_unique[tb_clients.client_proffessional_email]|xss_clean');
            $this->form_validation->set_rules('client_phone','Phone','trim|min_length[9]|max_length[20]|is_unique[tb_clients.client_phone]|xss_clean');
            $this->form_validation->set_rules('client_cell_phone','Cell Phone','trim|min_length[9]|max_length[20]|is_unique[tb_clients.client_cell_phone]|xss_clean');
            $this->form_validation->set_rules('client_ter_handle','TER Handle','trim|is_unique[tb_clients.client_ter_handle]|xss_clean');
            
            $this->form_validation->set_rules('client_pf411_id','PF411 ID','trim|is_unique[tb_clients.client_pf411_id]|xss_clean');
            $this->form_validation->set_rules('client_eccie_handle','ECCIE Handle','trim|is_unique[tb_clients.client_eccie_handle]|xss_clean');
            $this->form_validation->set_rules('client_datecheck_handle','DateCheck Handle','trim|is_unique[tb_clients.client_datecheck_handle]|xss_clean');
           
            if($this->form_validation->run() !== FALSE)
            {                   
                $post = array();                
                $userData['username']= $this->input->post('username',true);
                $userData['password']= md5($this->input->post('client_password',true));
                $userData['text_password']= $this->input->post('client_password',true);
                $userData['user_type_id']=3;
                $userData['status']=1;
                $last_id= $this->user_model->add_user($userData);  
                
                $post['user_id']= $last_id;                
                $post['client_first_name']=  $this->input->post('client_first_name',true);
                $post['client_last_name']=  $this->input->post('client_last_name',true);                
                $post['client_email']=  $this->input->post('client_email',true);
                $post['client_email2']=  $this->input->post('client_email2',true);
                $post['client_proffessional_email']= $this->input->post('client_proffessional_email',true);
                $post['client_phone']=  $this->input->post('client_phone',true);
                $post['client_cell_phone']=  $this->input->post('client_cell_phone',true);
                $post['client_ter_handle']=  $this->input->post('client_ter_handle',true);                
                $post['client_datecheck_handle']=  $this->input->post('client_datecheck_handle',true);
                $post['client_eccie_handle']=  $this->input->post('client_eccie_handle',true);                
                $post['client_pf411_id']=  $this->input->post('client_pf411_id',true);                
                $post['client_created']=  insert_in_table();
                
                $last_id = $this->login_model->client_signup($post);  
                $inviter_id=0;
                        
                if($this->uri->segment(3))
                {
                    $inviter_id= mysql_real_escape_string(decodeWithCodeigniter($this->uri->segment(3)));
                    $inviter_detail= $this->send_invitation_model->get_detail($inviter_id);

                    if(!empty($inviter_detail))  
                    {  
                        //$flag=true;
                        $this->send_invitation_model->update($inviter_id);
                        $point_types = $this->point_model->get_point_types_detail($id=4);
                        $post_points['point_type_id']=$point_types->points;
                        $post_points['created_date']= insert_in_table();
                        //$post_points['provider_send_invitation_id']= $inviter_detail->id;
                        $post_points['provider_id']=$inviter_detail->login_provider_id;
                        $this->point_model->add($post_points);
                    }
                }
                
                $update_data=array();                
                $update_data['client_rfsnow_id']= clientRFIDGenrate().$last_id;                
                $this->client_model->update_client($update_data,$last_id);
                
                $this->session->set_flashdata('message_class','server_success');
                $this->session->set_flashdata('message','You are registered successfully. Email has been sent with login detail.');
                
                $this->load->library('email');
                $this->email->from('support@refsnow.com', 'Refsnow');
                $this->email->to($post['client_email']);
                $this->email->subject('Refsnow.com - Registration successfull');
                
                $message="Hello<br>".
                $message.="Your Username :".$userData['username']."<br> Your password: ".$this->input->post('client_password',true)."  <br>Thank you for registering for a membership with RefsNow. We will contact you shortly once we verify your information.";               
                $message.="<br/>";

                $this->email->message($message);
                $this->email->send();                
                redirect(base_url().'client/login');
                
            }
            
            $this->load->view('header');
            $this->load->view('clients/client_signup');
            $this->load->view('footer');
        }
            

        public function check_duplicate_username()
        {
              $username = mysql_real_escape_string($this->input->post('username',true));
             if($this->user_model->check_duplicate_username($username))
                 echo 'false';
             else
                echo 'true';
        }
    
        public function check_duplicate_email()
        {
             
             $client_email = mysql_real_escape_string($this->input->post('client_email',true));
             $client_email2 = mysql_real_escape_string($this->input->post('client_email2',true));
             $client_proffessional_email = mysql_real_escape_string($this->input->post('client_proffessional_email',true));
             
             if(isset($client_email) && !empty($client_email))
             {
                 if($this->client_model->check_duplicate_email($client_email))
                 {
                    echo 'false';
                    exit();
                 }
                else
                {
                    echo 'true';
                    exit();
                }
             }
             if(isset($client_email2) && !empty($client_email2))
             {
                 if($this->client_model->check_duplicate_email($client_email2))
                 {
                    echo 'false';
                    exit();
                 }
                else
                {
                    echo 'true';
                    exit();
                }
             }
             if(isset($client_proffessional_email) && !empty($client_proffessional_email))
             {
                 if($this->client_model->check_duplicate_email($client_proffessional_email))
                 {
                    echo 'false';
                    exit();
                 }
                else
                {
                    echo 'true';
                    exit();
                }
             }
        }
        
        public function logout()                
        { 
            $this->session->sess_destroy();
            redirect(base_url());
        }
        
        public function forgot()
        { 
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');            
            if($this->form_validation->run() !== FALSE)
            {
                $this->_formData['client_email'] =$this->input->post('email',true); 
                $result= $this->login_model->checkClientEmail($this->_formData['client_email']);
                $this->_formData['user_id'] = $result->user_id;
                
                if($result==!false)
                { 
                    $this->_formData['password']=  get_random_password();                    
                    $this->login_model->resetPassword($this->_formData['user_id'],$this->_formData['password']);
                   
                    $userData = $this->user_model->get_username($this->_formData['user_id']);
                   
                    $this->load->library('email');
                    $this->email->from('support@refsnow.com', 'Refsnow');
                    $this->email->to($this->_formData['client_email']);
                    $this->email->subject('Refsnow.com - Reset password email');
                    
                    $message="Hello<br>";
                    $message.="Your username is: ".$userData->username;
                    $message.="Your new password is: ".$this->_formData['password'];
                    $message.="<br/>Thanks";
                    
                    $this->email->message($message);
                    $this->email->send();                    
                    $this->session->set_flashdata('message_class','server_success');
                    $this->session->set_flashdata('message','Your password has been reset. Check your email for login detail');
                    redirect(base_url().'client/login');
                    exit();
                }
                else 
                {
                    $this->session->set_flashdata('message_class','server_warning');
                    $this->session->set_flashdata('message','This email does not exist in database.');
                    redirect(base_url().'client/login');
                    exit();
                }

            }
            
            $this->load->view('header');
            $this->load->view('clients/client_forgot');
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