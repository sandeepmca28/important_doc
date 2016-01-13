<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('rating_exp'))
{
    function rating_exp($arr)
    {
        $rating = $arr->rating;
        $total_reviews = $arr->total*5;
        $per= ($rating*100)/$total_reviews;
        return $accutal= (5*$per)/100;
    }

}

if ( ! function_exists('encodeWithCodeigniter'))
{
    function encodeWithCodeigniter($str)
    {
        $CI =& get_instance();
        $CI->load->library('encrypt');
        $encodeSting = $CI->encrypt->encode($str,config_item('encryption_key'));
        {
            $ret = strtr(
                    $encodeSting,
                    array(
                        '+' => '.',
                        '=' => '-',
                        '/' => '~'
                    )
                );
        }
        return $ret;
    }
}

if ( ! function_exists('decodeWithCodeigniter'))
{
    function decodeWithCodeigniter($str)
    {
        $CI =& get_instance();
        $CI->load->library('encrypt');
         $string = strtr(
            $str,
            array(
                '.' => '+',
                '-' => '=',
                '~' => '/'
            )
        );

        $encodeSting = $CI->encrypt->decode($string,config_item('encryption_key'));
        return $encodeSting;
    }
}

if ( ! function_exists('pre'))
{
    function pre($arr)
    {
        echo "<pre>"; print_r($arr); echo '</pre>';
    }
}

if ( ! function_exists('mysqlDateFormat'))
{
    function mysqlDateFormat($date)
    {
        $d = date_create(strtotime($date));
        return date_format($d,"Y-m-d h:i:s");
    }
}

if ( ! function_exists('mysql_date_m_d_y'))
{
    function mysql_date_m_d_y($date)
    {
        $arr= explode('-',$date);
        return  date('Y-m-d H:i:s',strtotime("$arr[2]-$arr[0]-$arr[1]"));
    }
}

if ( ! function_exists('insert_in_table'))
{
    function insert_in_table()
    {
        return  date('Y-m-d H:i:s');
    }
}

if ( ! function_exists('formatDate'))
{
    function formatDate($date)
    {
        if($date!='0000-00-00 00:00:00')
        {
            return date("F d, Y",strtotime($date));
        }
        return "<span class=\"glyphicon glyphicon-option-horizontal\">--------</span>";
    }
}

if ( ! function_exists('formatDateWithOption'))
{
    function formatDateWithOption($date,$format)
    {
        return date($format,strtotime($date));
    }
}


if ( ! function_exists('approvedStatus'))
{
    function approvedStatus($string)
    {
        $string_content ="";
        switch ($string)
        {
            case 'pending':
                $string_content="Pending" ;
                break;

            case 'approved':
                $string_content="Approved" ;
                break;
            
        }
        return $string_content;
    }
}


if ( ! function_exists('pointType'))
{
    function pointType($string)
    {
        $string_content ="";
        switch ($string)
        {
            case 'refer_a_provider':
                $string_content="Invite a provider" ;
                break;

            case 'refer_a_provider_with_sign_up_additional':
                $string_content="Provider signup" ;
                break;
            case 'post_a_review':
                $string_content="Post a review" ;
                break;
            case 'send_a_invite_to_client':
                $string_content="Invite a client";
                break;
            case 'suggestion':
                $string_content="Suggestions" ;
                break;
            default:
                $string_content="Free Member";
        }
        return $string_content;
    }
}

if (! function_exists('get_random_password'))
{
    /**
     * Generate a random password.
     *
     * get_random_password() will return a random password with length 6-8 of lowercase letters only.
     *
     * @access    public
     * @param    $chars_min the minimum length of password (optional, default 6)
     * @param    $chars_max the maximum length of password (optional, default 8)
     * @param    $use_upper_case boolean use upper case for letters, means stronger password (optional, default false)
     * @param    $include_numbers boolean include numbers, means stronger password (optional, default false)
     * @param    $include_special_chars include special characters, means stronger password (optional, default false)
     *
     * @return    string containing a random password
     */

    function get_random_password($chars_min=6, $chars_max=6, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
    {
        $length = rand($chars_min, $chars_max);
        $selection = 'AEUOYIBCDFGHJKLMNPQRSTVWXZ';

        if($include_numbers) {
            $selection .= "1234567890";
        }

        if($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }

        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];
            $password .=  $current_letter;
        }
      return $password;
    }
}

if ( ! function_exists('providerRFIDGenrate'))
{
    function providerRFIDGenrate()
    {
        $RF_providerID="RNP".get_random_password(4,4,true,true,false);
        return $RF_providerID;
    }
}

if ( ! function_exists('clientRFIDGenrate'))
{
    function clientRFIDGenrate()
    {
        $RF_providerID="RNC".get_random_password(4,4,true,true,false);
        return $RF_providerID;
    }
}

if ( ! function_exists('arrayToString'))
{
    function arrayToString($arr)
    {
        if(is_array($arr))
        {
         return $str = implode(',',$arr);
        }
        return "";
    }
}

if ( ! function_exists('stringToArray'))
{
    function stringToArray($str)
    {
         return $arr = explode(',',$str);
    }
}

if(!function_exists('sendInviteLinkToClient'))
{
    function sendInviteLinkToClient($providerId)
    {
        $CI = & get_instance();
        $CI->load->library('encrypt');
        $uniqueId = $providerId.'_'.uniqid();
        $url = encodeWithCodeigniter($uniqueId);
        $link = base_url()."/client_signup/".urldecode($url);
        return $link;
    }
}

if ( ! function_exists('l'))
{
    function l()
    {
        $CI = & get_instance();
        echo  $CI->db->last_query();
    }
}


/* End of file array_helper.php */
/* Location: ./system/helpers/array_helper.php */