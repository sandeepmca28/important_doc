<?php
Class MY_Controller extends CI_Controller
{
    public $data;
    public $ci;
    function __construct()
    {
        parent::__construct();
        $this->data = array();
        $this->ci= & get_instance();
        $base_url = $this->config->item('base_url');
        $this->data["base_url"]= $base_url;
        $this->data["site_url"]= $base_url;
        $this->data['document_root']= $this->config->item('DOCUMENT_ROOT');
        $this->data['js_path'] = $this->config->item('JS_PATH');
        $this->data['css_path'] = $this->config->item('CSS_PATH');
        $this->data['fonts_path']=$this->config->item('FONTS_PATH');
        $this->data['images_path'] = $this->config->item('IMAGES_PATH');
        $this->data['p_images_path'] = $this->config->item('P_IMAGES_PATH');
        $this->data['controller'] = $this->ci->uri->segment(1);
        $this->data['method'] = $this->ci->uri->segment(2);
    }

    public function client_rating()
    {
         $client_id= $this->ci->session->userdata('clientId');
        /*$client_detail= $this->ci->db->query( " Select * from tb_clients where client_id =$client_id")->row();

        $email1= $client_detail->client_email;
        $email3= $client_detail->client_proffessional_email;
        $email2= $client_detail->client_email2;
        $client_phone=$client_detail->client_phone;
        $client_cell_phone=$client_detail->client_cell_phone;

        $where='';
        if(!empty($email1))
        {
            $where.="(client_first_email='$email1')  ";
            $or=' OR ';
        }

        if(!empty($email2))
        {
            if(!empty($or))
            {
               $where.=" OR (client_second_email='$email2' )  ";
            }
            else
            {
               $where.="  (client_second_email='$email2' )  ";
            }

        }

        if(!empty($email3))
        {
            if(!empty($or))
            {
                $where.=" OR ( client_third_email='$email3' ) ";
            }
            else
            {
                 $where.="  ( client_third_email='$email3' ) ";
            }
        }

        if(!empty($client_phone))
        {
            if(!empty($or))
            {
                $where.=" OR (client_first_phone = '$client_phone' )  ";
            }
            else
            {
                $where.="  (client_first_phone = '$client_phone' )  ";
            }
        }

        if(!empty($client_cell_phone))
        {
            if(!empty($or))
            {
                $where.=" OR ( client_second_phone='$client_cell_phone'  ) ";
            }
            else
            {
                 $where.="  ( client_second_phone='$client_cell_phone'  ) ";
            }
        }

        $sql=" Select count(review_id) as total,sum(rateing_experince) as rating from tb_reviews
               WHERE  $where  ";

        return $row= $this->ci->db->query($sql)->row();
        */
        //pre($row);
    }

}

Class MY_Provider extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->authenticate()===false)
        {
            if (in_array($this->data['method'],array('check_duplicate_datecheckID_provider','check_duplicate_afID_provider','check_duplicate_pf11ID_provider','check_duplicate_terid_provider','check_duplicate_email_invitation','check_duplicate_email_signup','check_duplicate_username','signin','login','become_member','forgot','signup','check_duplicate_email')))
            {
                /* do nothing  */
            }
            else
            {
                redirect($this->data['base_url']);
            }
        }
    }

    protected function authenticate()
    {
         if($this->session->userdata('providerId') )
         {
            return true;
         }
         return false;
    }
}

Class MY_Client extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        if($this->authenticate()===false)
        {
            if (in_array($this->data['method'],array('check_duplicate_username','client_about_us','signin','logout','login','forgot','signup','check_duplicate_email')))
            {
                /* do nothing  */
            }
            else
            {
                redirect($this->data['base_url']);
            }
        }
    }

    protected function authenticate()
    {
         if($this->session->userdata('clientId'))
         {
            return true;
         }
         return false;
    }
}
?>