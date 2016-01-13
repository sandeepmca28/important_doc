<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Provider extends MY_Provider
{
        private $_postData;
        public $_formData;
        public function __construct()
        {
            parent::__construct();
            $this->_postData = $this->_formData = array();
            $this->_formData= $this->data;
            $this->load->helper(array('form'));
            $this->load->model(array('user_model','provider_model','login_model','membership_model','send_invitation_model','point_model','send_suggestion_model','client_model'));
            $this->load->library(array('form_validation','country_state'));
            $this->_formData['countries'] = $this->country_state->country();
            $this->data['countries']= $this->_formData['countries'];
            //pre($this->_formData['countries']);
        }

        public function index()
        {
                $this->_formData['provider']= $this->provider_model->get_provider_detail();
                $this->form_validation->set_rules('pu_user_fname','Name','trim|required|max_length[30]|xss_clean');
                $this->form_validation->set_rules('pu_user_city','City','trim|required|max_length[50]|xss_clean|callback_alpha_dash_space');
                $this->form_validation->set_rules('pu_user_state','State','trim|required|xss_clean');
                $this->form_validation->set_rules('pu_user_country','Country','trim|numeric|required|xss_clean');
                $this->form_validation->set_rules('pu_user_phone','Phone','trim|numeric|max_length[20]|xss_clean');
                $this->form_validation->set_rules('pu_user_phone2','Phone','trim|numeric|max_length[20]|xss_clean');
                //$this->form_validation->set_rules('pu_user_email','Email','trim|required|valid_email|max_length[100]|xss_clean');
                //$this->form_validation->set_rules('pu_user_email2','Email','trim|valid_email|max_length[100]|xss_clean');
                $this->form_validation->set_rules('pu_user_website','Website','trim|max_length[100]|xss_clean');
                $this->form_validation->set_rules('pu_user_terID','TER ID','trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_user_tr_id_link','TER ID Link','trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_user_pf11ID','PF411 ID', 'trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_user_pf11ID_link','PF411 ID Link', 'trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_user_datecheckID','Datecheck ID', 'trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_af_id','AF ID', 'trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_af_id_link','AF ID Link', 'trim|max_length[200]|xss_clean');

                //$this->form_validation->set_rules('pu_user_RS2K_advertiser','RS2K Advertiser', 'trim|max_length[200]|xss_clean');
                $this->form_validation->set_rules('pu_user_other','Other', 'trim|max_length[200]|xss_clean');

                if($this->form_validation->run()!==false)
                {
                     $provider_id = $this->session->userdata('providerId');
                     $this->_postData['pu_user_fname']= $this->input->post('pu_user_fname');
                     $this->_postData['pu_user_city']= $this->input->post('pu_user_city');
                     $this->_postData['pu_user_state']= $this->input->post('pu_user_state');
                     $this->_postData['pu_user_country']= $this->input->post('pu_user_country');
                     $this->_postData['pu_user_phone']= $this->input->post('pu_user_phone');
                     $this->_postData['pu_user_phone2']= $this->input->post('pu_user_phone2');

                     //$this->_postData['pu_user_email']= $this->input->post('pu_user_email');
                     //$this->_postData['pu_user_email2']= $this->input->post('pu_user_email2');

                     $this->_postData['pu_user_website']= $this->input->post('pu_user_website');
                     $this->_postData['pu_user_terID']= $this->input->post('pu_user_terID');
                     $this->_postData['pu_user_tr_id_link']= $this->input->post('pu_user_tr_id_link');
                     $this->_postData['pu_user_pf11ID']= $this->input->post('pu_user_pf11ID');
                     $this->_postData['pu_user_pf11ID_link']= $this->input->post('pu_user_pf11ID_link');
                     $this->_postData['pu_user_datecheckID']= $this->input->post('pu_user_datecheckID');
                     $this->_postData['pu_af_id']= $this->input->post('pu_af_id');
                     $this->_postData['pu_af_id_link']= $this->input->post('pu_af_id_link');
                     $this->_postData['pu_user_other']= $this->input->post('pu_user_other');

                     if(!empty($_FILES) && !empty($_FILES['pu_user_photo']['name']))
                     {
                            $config['upload_path'] = './uploads/providers/profile/';
                            $config['allowed_types'] = 'gif|jpg|png';
                            $config['max_size']	= '2024';
                            $config['file_name']  =  $this->_postData['pu_user_photo']= uniqid();
                            $config['image_library'] = 'gd2';

                            //$config['source_image'] = $data['upload_data']['full_path'];
                            $config['create_thumb'] = false;
                            $config['maintain_ratio'] = true;
                            $config['width'] = 400;
                            $config['height'] = 400;

                            $this->load->library('upload', $config);
                            if($this->upload->do_upload('pu_user_photo'))
                            {
                                $data = array('upload_data' => $this->upload->data());

                                //$this->image_lib->resize();
                                $this->_postData['pu_user_ext'] = $data['upload_data']['file_ext'];
                                $this->provider_model->update_provider($this->_postData,$provider_id);
                                $this->session->set_flashdata('message_class','server_success');
                                $this->session->set_flashdata('message','Profile updated successfully.');
                                redirect($this->data['base_url'].'provider');
                                exit();
                            }
                            $this->_formData['file_error']=$this->upload->display_errors();
                     }

                    $this->provider_model->update_provider($this->_postData,$this->session->userdata('providerId'));
                    $this->session->set_flashdata('message_class','server_success');
                    $this->session->set_flashdata('message','Profile updated successfully.');
                    redirect($this->data['base_url'].'provider');
                    exit();
                }
                else
                {
                    //pre($this->_formData['countries']);
                    $this->load->view('header',$this->_formData);
                    $this->load->view('providers/provider_profile');
                    $this->load->view('footer');
                }
         }

         public function signup()
         {
                $this->form_validation->set_rules('username','Username','trim|required|max_length[30]|xss_clean|alpha_numeric');
                $this->form_validation->set_rules('password','Password','trim|required|matches[cpassword]|xss_clean');
                $this->form_validation->set_rules('cpassword','Password Confirmation', 'trim|required|xss_clean');

                $this->form_validation->set_rules('fname','Name','trim|required|xss_clean');
                $this->form_validation->set_rules('pu_user_email','Email 1','trim|required|valid_email|is_unique[tb_providers.pu_user_email]');
                $this->form_validation->set_rules('pu_user_email2','Email 2','trim|valid_email|is_unique[tb_providers.pu_user_email]');
                $this->form_validation->set_rules('pu_user_phone','Phone Number','trim|integer|max_length[20]|is_unique[tb_providers.pu_user_phone]|xss_clean');
                $this->form_validation->set_rules('pu_user_phone2','Cell Number','trim|integer|max_length[20]|is_unique[tb_providers.pu_user_phone]|xss_clean');
                $this->form_validation->set_rules('website','Website','trim|xss_clean');
                $this->form_validation->set_rules('terID','Ter ID','trim|xss_clean|is_unique[tb_providers.pu_user_terID]');
                $this->form_validation->set_rules('trID_link','TER Handle','trim|xss_clean');
                $this->form_validation->set_rules('pf11ID','PF411 ID','trim|xss_clean|is_unique[tb_providers.pu_user_pf11ID]');

                $this->form_validation->set_rules('pf11ID_link','PF411 Link','trim|xss_clean');
                $this->form_validation->set_rules('datecheckID','datecheck Handle','trim|xss_clean|is_unique[tb_providers.pu_user_datecheckID]');
                $this->form_validation->set_rules('RS2K_advertiser','RS2K Advertiser','trim|xss_clean');
                $this->form_validation->set_rules('terms','Terms','trim|required|xss_clean');

                if($this->form_validation->run() !== FALSE)
                {
                        $this->userData['username']= $this->input->post('username',true);
                        $this->userData['password'] = md5($this->input->post('password',true));
                        $this->userData['text_password'] =$this->input->post('password',true);

                        $this->userData['user_type_id']=2;
                        $this->formData['user_id'] = $this->user_model->add_user($this->userData);

                        $this->formData['pu_user_fname']= $this->input->post('fname',true);
                        $this->formData['pu_user_email'] =$this->input->post('pu_user_email',true);
                        $this->formData['pu_user_email2'] =$this->input->post('pu_user_email2',true);

                        $this->formData['pu_user_phone']= $this->input->post('pu_user_phone',true);
                        $this->formData['pu_user_phone2']= $this->input->post('pu_user_phone2',true);
                        $this->formData['pu_user_website']= $this->input->post('website',true);
                        $this->formData['pu_user_terID']= $this->input->post('trID',true);
                        $this->formData['pu_user_tr_id_link']= $this->input->post('trID_link',true);
                        $this->formData['pu_af_id']= $this->input->post('afID',true);
                        $this->formData['pu_af_id_link']= $this->input->post('afID_link',true);
                        $this->formData['pu_user_pf11ID']= $this->input->post('pf11ID',true);
                        $this->formData['pu_user_pf11ID_link']= $this->input->post('pf11ID_link',true);
                        $this->formData['pu_user_datecheckID']= $this->input->post('datecheckID',true);
                        $this->formData['pu_user_RS2K_advertiser']= $this->input->post('RS2K_advertiser',true);

                        $last_id = $this->login_model->provider_signup($this->formData);
                        $post_memership=array();
                        $post_memership['subscription_id']= 5;
                        $post_memership['provider_id']= $last_id;

                        $flag=false;
                        $inviter_id=0;

                        if($this->uri->segment(3))
                        {
                            $inviter_id= mysql_real_escape_string(decodeWithCodeigniter($this->uri->segment(3)));
                            $inviter_detail= $this->send_invitation_model->get_detail($inviter_id);

                            if(!empty($inviter_detail))  /*  if detail array is not empty then subscription for 3 months  */
                            {
                                $flag=true;
                                $this->send_invitation_model->update($inviter_id);
                            }
                        }

                        if($flag===true)
                        {
                            $point_types  = $this->point_model->get_point_types_detail($id=2);
                            $post_points['provider_id']= $this->session->userdata('providerId');
                            $post_points['point_type_id'] = $point_types->points;
                            $post_points['created_date'] = insert_in_table();
                            $post_points['provider_send_invitation_id']= $inviter_detail->id;
                            $this->point_model->add($post_points);

                            $post_memership['subscription_id']=2;
                            $inviter_id=$inviter_detail->login_provider_id;
                        }

                        $this->membership_model->add($post_memership);
                        $updateArray=array();
                        $updateArray['pu_user_created']= insert_in_table();
                        $updateArray['pu_user_rfn_p_id']= providerRFIDGenrate().$last_id;
                        $updateArray['pu_inviter_id']= $inviter_id;

                        $this->provider_model->update_provider($updateArray,$last_id);
                        $this->session->set_flashdata('message_class','server_success');
                        $this->session->set_flashdata('message','You are registered successfully.');

                        $this->load->library('email');                                             
                        $config['mailtype'] = 'html';
                        $this->email->initialize($config);
                        $this->email->from('support@refsnow.com','Refsnow');
                        $this->email->to($this->formData['pu_user_email']);
                        $this->email->subject('Refsnow.com - Registration successfull');

                        $message="Hello<br>".
                        $message.="Thank you for registering for a membership with RefsNow. We will contact you shortly once we verify your information.";
                        $message.="<br/>";

                        $this->email->message($message);
                        $this->email->send();
                        redirect($this->data['base_url'].'provider/login');
                        exit();
                    }

                    $this->load->view('header',$this->data);
                    $this->load->view('providers/provider_signup');
                    $this->load->view('footer');
          }

        public function login()
        {
            $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
            $this->form_validation->set_rules('password','Password','trim|required|xss_clean');

            if ($this->form_validation->run() !== FALSE)
            {
                $this->formData['username'] = $this->input->post('username', true);
                $this->formData['password'] = $this->input->post('password', true);
                $userData = $this->login_model->providerLogin($this->formData);

                if ($userData !== false)
                {
                    if($userData->status == 1)
                    {
                        $providerData = $this->login_model->getProviderDetail($userData->user_id);
                        $this->session->unset_userdata('userId');
                        $this->session->unset_userdata('clientId');
                        $this->session->unset_userdata('clientEmail');
                        $this->session->unset_userdata('userTypeLogin');

                        $this->session->set_userdata('userId', $providerData->user_id);
                        $this->session->set_userdata('providerId', $providerData->pu_user_id);
                        $this->session->set_userdata('providerEmail', $providerData->pu_user_id);
                        $this->session->set_userdata('userTypeLogin', 'provider');
                        redirect($this->data['base_url'].'provider');
                        exit();

                    } else
                    {
                        $this->session->set_flashdata('message_class', 'server_error');
                        $this->session->set_flashdata('message', 'Sorry, Your account not activated yet.');
                        redirect($this->data['base_url'].'provider/login');
                        exit();
                    }
                } else
                {
                    $this->session->set_flashdata('message_class', 'server_error');
                    $this->session->set_flashdata('message', 'Invalid Email or Password');
                    redirect($this->data['base_url'].'provider/login');
                    exit();
                }
            }

            $this->load->view('header');
            $this->load->view('providers/provider_login');
            $this->load->view('footer');
       }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect($this->data['base_url']); exit();
    }

    public function become_member()
    {
        $this->load->view('header',$this->data);
        $this->load->view('providers/become_a_member');
        $this->load->view('footer');
    }

    public function signin()
    {
        $this->load->view('header',$this->data);
        $this->load->view('providers/provider_signin');
        $this->load->view('footer');
    }

    public function refer_a_provider()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email]');
        if($this->form_validation->run()!==false)
        {
            $provider_detail= $this->provider_model->get_provider_detail();
            $post['email']= mysql_real_escape_string($this->input->post('email',true));
            $post['ip'] = $this->input->ip_address();
            $post['login_provider_id']= $this->session->userdata('providerId');
            $post['unique_number_id']= uniqid();
            $post['invitation_status']= 1;
            $post['provider_message'] =$this->input->post('message',true);
            $last_id = $this->send_invitation_model->add($post);

            $this->data['message']= $this->input->post('message',true);
            $this->data['provider_name']= $provider_detail->pu_user_fname;

            /* start : Refer a provider 3 pts  */
            $point_types = $this->point_model->get_point_types_detail($id=1);
            $post_points['point_type_id']=$point_types->points;
            $post_points['created_date']= insert_in_table();
            //$post_points['provider_send_invitation_id']= $last_id;
            $post_points['provider_id']=$post['login_provider_id'];
            $this->point_model->add($post_points);

            /* end */
            $unique_number_id=$post['unique_number_id'];
            $this->data['link']=$this->data['base_url'].'provider/signup/'.encodeWithCodeigniter($unique_number_id);
            echo $message= $this->load->view('providers/emails/send_invitation',$this->data,true);

            $subject="RefsNow.com - Invitation Email";
            send_email($post['email'],$subject,$message);
            die;
            $this->session->set_flashdata('message_class','server_success');
            $this->session->set_flashdata('message','Invitation sent successfully.');
            redirect($this->data['base_url'].'provider/refer_a_provider');

        } else
        {
            $this->load->view('header',$this->data);
            $this->load->view('providers/refer_a_provider');
            $this->load->view('footer');
        }
    }

    public function send_invitation_to_client()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email]');
        if($this->form_validation->run()!==false)
        {
            $provider_detail= $this->provider_model->get_provider_detail();
            $post['email']= mysql_real_escape_string($this->input->post('email',true));
            $post['ip'] = $this->input->ip_address();
            $post['login_provider_id']= $this->session->userdata('providerId');
            $post['unique_number_id']= uniqid();
            $post['provider_message']= $this->input->post('message',true);
            $post['invitation_status']= 1;
            $last_id= $this->send_invitation_model->add($post);

            $this->data['message']= $this->input->post('message',true);
            $this->data['provider_name']= $provider_detail->pu_user_fname;

            
            $unique_number_id = $post['unique_number_id'];
            /*
            $point_types = $this->point_model->get_point_types_detail($id=4);
            $post_points['point_type_id']=$point_types->points;
            $post_points['created_date']= insert_in_table();
            $post_points['provider_id']=$post['login_provider_id'];
            $this->point_model->add($post_points);
            */
            
            $this->data['link']=$this->data['base_url'].'client/signup/'.encodeWithCodeigniter($unique_number_id);
            echo $message= $this->load->view('providers/emails/send_invitation_to_client',$this->data,true);
           die;

            $subject="RefsNow.com  - Invitation Email";
            send_email($post['email'],$subject,$message);

            $this->session->set_flashdata('message_class','server_success');
            $this->session->set_flashdata('message','Invitation sent successfully.');
            redirect($this->data['base_url'].'provider/send_invitation_to_client');

        } else
        {
            $this->load->view('header',$this->data);
            $this->load->view('providers/client_invite.php');
            $this->load->view('footer');
        }
    }

    public function send_suggestions()
    {
        $this->form_validation->set_rules('message','Suggestions','trim|required|xss_clean');
        if($this->form_validation->run()!==false)
        {
            //$post['email']= mysql_real_escape_string($this->input->post('email',true));

            $post['ip'] = $this->input->ip_address();
            $post['login_id']= $this->session->userdata('providerId');
            $post['unique_number_id']= uniqid();
            $post['message']= $this->input->post('message',true);
            $this->data['message']= $this->input->post('message',true);
            $provider_detail=$this->provider_model->get_provider_detail();
            $this->data['provider_name']=$provider_detail->pu_user_fname;
            $last_id= $this->send_suggestion_model->add($post);

            $point_types = $this->point_model->get_point_types_detail($id=5);
            $post_points['point_type_id']=$point_types->points;
            $post_points['created_date']=  insert_in_table();
            $post_points['provider_id']=$post['login_id'];
            //$post_points['provider_send_invitation_id']= $inviter_detail->id;
            $this->point_model->add($post_points);

            $this->session->set_flashdata('message_class','server_success');
            $this->session->set_flashdata('message','Suggestion sent successfully.');
            redirect($this->data['base_url'].'provider/send_suggestions');

           // $this->data['link']=$this->data['base_url'].'provider/signup/'.encodeWithCodeigniter($last_id);
           // echo $message= $this->load->view('providers/emails/send_invitation',$this->data,true);

           //$subject="RefsNow.com  - Invitation Email";
           //send_email($post['email'],$subject,$message);

        } else
        {
            $this->load->view('header',$this->data);
            $this->load->view('providers/suggestion');
            $this->load->view('footer');
        }
    }

    public function forgot()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        if($this->form_validation->run() !== FALSE)
        {
            $this->_formData['pu_user_email'] =$this->input->post('email',true);
            $result= $this->login_model->checkEmail($this->_formData['pu_user_email']);

            if($result==!false)
            {
                $this->_formData['password']=  get_random_password();
                $this->_formData['user_id']=$result->user_id;
                $this->login_model->resetPassword($this->_formData['user_id'],$this->_formData['password']);
                $userData = $this->user_model->get_username($this->_formData['user_id']);

                $this->load->library('email');
                $this->email->from('support@refsnow.com', 'Refsnow');
                $this->email->to($this->_formData['pu_user_email']);
                $this->email->subject('Refsnow.com - Reset password email');

                $message="Hello<br>".
                $message.="Your username is: ".$userData->username;
                $message.="<br>Your new password is: ".$this->_formData['password'];
                $message.="<br>Thanks";

                $this->email->message($message);
                $this->email->send();
                $this->session->set_flashdata('message_class','server_success');
                $this->session->set_flashdata('message','Your password has been reset. Check your email for login detail.');
                redirect($this->data['base_url'].'provider/login');
                exit();
            }
            else
            {
                $this->session->set_flashdata('message_class','server_warning');
                $this->session->set_flashdata('message','This email does not exist in our database.');
                redirect($this->data['base_url'].'provider/login');
                exit();
            }
        }

        $this->load->view('header',$this->data);
        $this->load->view('providers/provider_forgot');
        $this->load->view('footer');
    }

    function alpha_dash_space($str)
    {
         if( ! preg_match("/^([-a-z_ ])+$/i", $str))
         {
             $this->form_validation->set_message('alpha_dash_space', 'The %s field should contain only alpha and space');
             return false;
         }
         else
             return true;
    }

    public function check_duplicate_email()
    {
         $email = mysql_real_escape_string($this->input->post('email',true));
         if($this->provider_model->check_duplicate_email($email))
             echo 'false';
         else
            echo 'true';
    }

    public function check_duplicate_email_signup()
    {
         if($this->input->post('pu_user_email'))
         {
            $email = mysql_real_escape_string($this->input->post('pu_user_email',true));
         }elseif($this->input->post('pu_user_email2'))
         {
             $email = mysql_real_escape_string($this->input->post('pu_user_email2',true));
         }
         
         if($this->provider_model->check_duplicate_email_signup($email))
         {
            echo 'false';
         }
         else
         {
            echo 'true';
         }
    }

    public function check_duplicate_email_invitation()
    {
         $email = mysql_real_escape_string($this->input->post('email',true));
         if($this->provider_model->check_duplicate_email_invitation($email))
         {
             echo 'false';
         }
         else
         {
             echo 'true';
         }
    }    
    
    public function check_duplicate_terid_provider()
    {
         $trID = mysql_real_escape_string($this->input->post('trID',true));
         if($this->provider_model->check_duplicate_terid_provider($trID))
             echo 'false';
         else
            echo 'true';
    }
    
    public function check_duplicate_username()
    {
         $username = mysql_real_escape_string($this->input->post('username',true));
         if($this->user_model->check_duplicate_username($username))
         {
             echo 'false';
         }
         else
         {
             echo 'true';
         }
    }
    
    public function check_duplicate_pf11ID_provider()
    {
         $pf11ID = mysql_real_escape_string($this->input->post('pf11ID',true));
         if($this->provider_model->check_duplicate_pf11ID_provider($pf11ID))
         {
             echo 'false';
         }
         else
         {
             echo 'true';
         }
    }
    public function check_duplicate_afID_provider()
    {
         $afID = mysql_real_escape_string($this->input->post('afID',true));
         if($this->provider_model->check_duplicate_afID_provider($afID))
         {
             echo 'false';
         }
         else
         {
             echo 'true';
         }
    }

    public function check_duplicate_datecheckID_provider()
    {
          $datecheckID = mysql_real_escape_string($this->input->post('datecheckID',true));
         if($this->provider_model->check_duplicate_datecheckID_provider($datecheckID))
         {
             echo 'false';
         }
         else
         { 
             echo 'true';
         }
    }

    function provider_detail()
    {
        $id = decodeWithCodeigniter($this->uri->segment(3));
        $this->data['provider'] = $this->provider_model->get_provider_detail($id);
        //pre($this->data['provider']);
        
        $this->load->view('header',$this->data);
        $this->load->view('providers/provider_detail');
        $this->load->view('footer');

    }

    public function client_search()
    {
        $this->load->view('header',$this->data);
        $this->load->view('providers/client_search');
        $this->load->view('footer');
    }

    public function provider_search()
    {
        $this->load->view('header',$this->data);
        $this->load->view('providers/provider_search');
        $this->load->view('footer');
    }

    public function provider_search_listing()
    {
            // $this->load->library('pagination');
            // $config1['base_url'] = base_url().'provider/client_search_listing/';
            // $config1['total_rows'] =10;
            // $config1['per_page'] = 1;
            // $config1['use_page_numbers'] = TRUE;

            //$config1['uri_segment'] = 3;
            //$config1['page_query_string'] = TRUE;
            //$config1['num_links'] = 3;

            //$this->pagination->initialize($config1);

            $post=array();
            $post['pu_user_fname'] = $this->input->post('pu_user_fname',true);
            //$post['client_last_name'] = $this->input->post('last_name',true);
            $post['pu_user_email'] = $this->input->post('pu_user_email',true);
            $post['pu_user_email2'] = $this->input->post('pu_user_email2',true);

            $post['pu_user_phone'] = $this->input->post('pu_user_phone',true);
            $post['pu_user_phone2'] = $this->input->post('pu_user_phone2',true);

            $post['pu_user_city'] = $this->input->post('pu_user_city',true);
            $post['pu_user_state'] = $this->input->post('pu_user_state',true);
            $post['pu_user_country'] = $this->input->post('pu_user_country',true);

            $post['pu_user_terID']= $this->input->post('pu_user_terID',true);
            $post['pu_user_pf11ID']= $this->input->post('pu_user_pf11ID',true);
            $post['pu_user_datecheckID']= $this->input->post('pu_user_datecheckID',true);

            $this->data['listing'] = $this->provider_model->provider_search($post);

            //pre( $this->data['listing']);

            //$config['num_links'] = 2;
            //$config['use_page_numbers'] = TRUE;
            // $config['page_query_string'] = TRUE;
            // $config['display_pages'] = true;


            // echo $this->pagination->create_links();die;

            //echo $this->db->last_query();
            // pre($this->data['listing']);die;

            $this->load->view('header',$this->data);
            $this->load->view('providers/provider_search_listing');
            $this->load->view('footer');
    }
    
    public function client_search_listing()
    {
            // $this->load->library('pagination');
            // $config1['base_url'] = base_url().'provider/client_search_listing/';
            // $config1['total_rows'] =10;
            // $config1['per_page'] = 1;
            // $config1['use_page_numbers'] = TRUE;

            //$config1['uri_segment'] = 3;
            //$config1['page_query_string'] = TRUE;
            //$config1['num_links'] = 3;

            //$this->pagination->initialize($config1);

            $post=array('client_last_name'=>'','client_last_name'=>'','email1'=>'','email2'=>'','email3'=>'','phone1'=>'','phone2'=>'','phone3'=>'','ter_handle'=>'','pf411_id'=>'','datecheck_handle'=>'');
            $post['client_first_name'] = $this->input->post('first_name',true);
            $post['client_last_name'] = $this->input->post('last_name',true);
            $post['client_email'] = $this->input->post('email1',true);
            $post['client_email2'] = $this->input->post('email2',true);
            $post['client_proffessional_email'] = $this->input->post('email3',true);
            $post['client_phone'] = $this->input->post('phone1',true);
            $post['client_cell_phone'] = $this->input->post('phone2',true);
            //$post['phone3'] = $this->input->post('phone3',true);
            $post['client_ter_handle']= $this->input->post('ter_handle',true);
            $post['client_pf411_id']= $this->input->post('pf411_id',true);
            $post['client_datecheck_handle']= $this->input->post('datecheck_handle',true);
            $this->data['listing'] = $this->client_model->client_search($post);

            //pre( $this->data['listing']);

            //$config['num_links'] = 2;
            //$config['use_page_numbers'] = TRUE;
            // $config['page_query_string'] = TRUE;
            // $config['display_pages'] = true;


            // echo $this->pagination->create_links();die;

            //echo $this->db->last_query();
            // pre($this->data['listing']);die;

            $this->load->view('header',$this->data);
            $this->load->view('providers/client_search_listing');
            $this->load->view('footer');
    }
    
    public function client_detail()
    {
        $client_id = decodeWithCodeigniter($this->uri->segment(3));
        $this->data['client_reviews'] = $this->client_model->get_total_review($client_id);
        $this->data['client'] = $this->client_model->get_client_detail($client_id);
        $provider_id = $this->session->userdata('providerId');
        $this->data['provider_membership'] = $this->membership_model->provider_membership_status($provider_id);

        $this->data['client']->how_would_prefer_contacted  = explode(',',$this->data['client']->how_would_prefer_contacted);
        $this->data['client']->client_prefer_incall_outcall = explode(',',$this->data['client']->client_prefer_incall_outcall);
        $this->data['client']->client_what_type_of_footwear_prefer = explode(',',$this->data['client']->client_what_type_of_footwear_prefer);
        $this->data['client']->client_feel_about_provider_smoking = explode(',',$this->data['client']->client_feel_about_provider_smoking);
        $this->data['client']->client_alcohol_preference = explode(',',$this->data['client']->client_alcohol_preference);
        $this->data['client']->client_personality = explode(',',$this->data['client']->client_personality);
        $this->data['client']->client_session_preferences = explode(',',$this->data['client']->client_session_preferences);

        //pre($this->data['client'] );
        $this->load->view('header',$this->data);
        $this->load->view('client_detail');
        $this->load->view('footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/csend_invitationontrollers/welcome.php */