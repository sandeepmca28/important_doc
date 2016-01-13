<!DOCTYPE html>
<html lang="en">
	<head><?php //echo date_default_timezone_get(); echo  date('Y-m-d h:i:s'); //pre($this->session->all_userdata());?>
		<meta charset="UTF-8">
		<title>Refsnow.com Home, About us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
                <!-- Bootstrap core CSS -->
                <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
                <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
                <!-- Add custom CSS here -->
                 <script src="<?php echo HTTP_JS_PATH; ?>bootstrap.js"></script>
                <script src="<?php echo HTTP_JS_PATH; ?>das.js"></script>
                <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                  <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
                  <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
                <![endif]-->
		<link rel="stylesheet" href="<?php  echo base_url(); ?>theme/css/style.css" />
                <link href="<?php echo config_item('JS_PATH'); ?>jquery-validation/demo/css/screen.css" />
                <script>
                    var baseUrl = '<?php echo base_url(); ?>';
                    var base_url = '<?php echo base_url(); ?>';
                    var site_url = '<?php echo base_url(); ?>';
                </script>
                 
                <link href="<?php echo base_url();?>theme/js/jquery-ui/jquery-ui.css" rel="stylesheet">
                <script src="<?php echo config_item('JS_PATH'); ?>jquery-ui/external/jquery/jquery.js"></script>
                <script src="<?php echo base_url();?>theme/js/jquery-ui/jquery-ui.js"></script>


                <script src="<?php echo config_item('JS_PATH'); ?>jquery-validation/dist/jquery.validate.min.js"></script>
                <script src="<?php echo config_item('JS_PATH'); ?>menu_script.js"></script>

                <script type="text/javascript" src="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.js"></script>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.css" media="screen" />
                
                <!--[if lte IE 8]><script src="<?php  echo base_url(); ?>theme/css/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
                
        </head>
	<body>
        


        <div id="main-body-wrapper">

        	<!-- Header -->
                <header id="header">

                   <div id="header-left">
                      <a href="<?php  echo base_url(); ?>" id="logo"><img src="<?php echo base_url(); ?>theme/images/logo.png"/></a>
                   </div>

                   <div id="header-right">
                        <nav>
                           <ul id="nav">                                    
                                <li>
                                    <a href="<?php echo base_url();?>">Home</a>
                                    <?php 
                                      if($this->session->userdata('userTypeLogin')==='provider') 
                                       { 
                                           ?>
                                            <ul>
                                              <li><a href="<?php echo base_url();?>about_us">About Us</a></li>
                                            </ul>
                                         <?php                                        
                                       } 
                                       ?>
                                    </li>
                                    <?php if($this->session->userdata('userTypeLogin')==='provider') { ?>
                                    <li><a href="<?php echo base_url();?>provider/client_search">Client Search</a></li>
                                    <li><a href="<?php echo base_url();?>reviews/create_review">Post a review</a>
                                            <ul>
                                                <li><a href="<?php echo base_url();?>reviews/create_review">Review Client</a></li>
                                                <li><a href="<?php echo base_url();?>reviews">Your Reviews</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="#">Blacklist</a>
                                            <ul>
                                                <li><a href="<?php echo base_url();?>provider/provider_search">Advanced Search </a></li>
                                                <li><a href="<?php echo base_url();?>report_incident/create_report_incident">Report an Incident</a></li>
                                                <li><a href="<?php echo base_url(); ?>browse_black_list">Browse Blacklist Database</a></li>
                                                <li><a href="<?php echo base_url();?>report_incident">Your Incident Report </a></li>
                                                <li><a href="<?php echo base_url();?>public_search">Public search</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="#">Mailbox</a></li>
                                    <li><a href="#">Account</a>
                                        <ul>   
                                            <li><a href="<?php echo base_url();?>provider/logout">Log Out</a></li>
                                            <li><a href="<?php echo base_url();?>provider/">Profile</a></li>
                                            <li><a href="<?php echo base_url();?>point_history">Points History</a></li>
                                            <li><a href="<?php echo base_url();?>provider/refer_a_provider">Invite a Provider </a></li>
                                            <li><a href="<?php echo base_url();?>provider/send_invitation_to_client">Invite a Client</a></li>
                                            <li><a href="<?php echo base_url();?>provider/send_suggestions">Suggestions</a></li>
                                       </ul>
                                    </li>
                                    <li> <a href="<?php echo base_url();?>provider_contact_us">Contact</a>                                        
                                    </li>
                                    <li><a href="<?php echo base_url();?>subscription">Subscription</a>
                                        
                                    </li>
                                    
                                    <?php } elseif($this->session->userdata('userTypeLogin')==='client') { ?>
                                                                        
                                    <li><a href="<?php echo base_url();?>client_about_us">About Us</a></li>
                                 
                                       
                                    </li>
                                    <li><a href="<?php echo base_url();?>client">My Profile</a>
                                        <ul>
                                            <li><a href="<?php echo base_url();?>client/logout">Log Out </a></li>
                                           
                                        </ul>    
                                    </li>
                                    <li><a href="<?php echo base_url();?>client_request_reference">Request a Reference</a></li>
                                    <li><a href="<?php echo base_url();?>invite_provider">Invite a Provider</a>
                                        
                                    </li>
                                    <li> <a href="<?php echo base_url();?>client_contact">Contact</a>
                                       
                                    </li>
                                    
                                    <?php } else { ?>

                                    <li><a href="javascript:void(0);">Provider </a>
                                        <ul>
                                            <li><a href="<?php echo base_url();?>provider/signin">Sign In </a></li>
                                            <li><a href="<?php echo base_url();?>provider/become_member">Become A Member</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Client </a>
                                        <ul>
                                            <li><a href="<?php echo base_url();?>client/login">Sign In </a></li>
                                            <li><a href="<?php echo base_url();?>client/signup">Become A Member</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url();?>contact_us">Contact</a></li>
                                    <?php }  ?>
                            </ul>
                       </nav>
                   </div>
                    <?php 
                        if($this->session->userdata('userTypeLogin') === 'client') 
                        {                             
                            $rdata= $this->ci->client_rating();
                            $overall =rating_exp($rdata);
                            
                            if(!empty($rdata))
                            {
                                ?> 
                            <div style="color:#c83923;"> #<?php echo $rdata->total ?> Of Reviews, Overall Star Rating: <div style="display: inline-block" class="header_rating" data-average="<?php echo $overall ?>" data-id="1"></div>  </div>
                                <?php 
                            }        
                            
                              ?>
                             <script>
                                $(function(){
                             
                                    $(".header_rating").jRating({
                                    bigStarsPath:baseUrl+"theme/js/jRating-master/jquery/icons/stars.png",
                                    phpPath : baseUrl+'theme/js/jRating-master/php/jRating.php',
                                    isDisabled : true,
                                    nbRates : 100,
                                    type:'big',
                                    decimalLength:0,
                                   
                                });
                            })
                            </script>
                           
                            <?php   
                        } 
                        ?> 
                </header>
                
                