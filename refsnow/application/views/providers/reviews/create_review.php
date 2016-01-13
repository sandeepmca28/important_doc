<script>
var j = $.noConflict();   
j(document).ready(function(){
    
    j("#create_review_form1").validate({
        rules: {
                first_name: {
                    required: true
                },
                 client_first_email: {
                        required: true,
                        email: true,
                }
                , 
                 client_second_email: {                      
                        email: true,
                }
                , 
                client_third_email: {                        
                        email: true,
                }
                , 
                client_country :{                    
                    required:true
                },
                
                 client_state :{                    
                    required:true
                },
                  client_city :{                    
                   required:true
                },
                  client_residence :{                    
                   required:true
                },
        },
        messages: {
                first_name: "Please enter your name",
                client_first_email:"Pealse enter valid email",
                client_second_email:"Pealse enter valid email",
                client_third_email :"Pealse enter valid email",
                client_country :"Please select country name",
                client_state : "Please select state name",
                client_city : "Please enter city name",
                client_residence :"Please enter residence detail"
            }
    });
});

</script>
<section id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/stock-photo-50980866-sensual-mature-woman-posing-in-black-lingerie-min.jpg" />      
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/z - iStock_000047770164_Full-min.jpg"/>
        
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000029615742- RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000003253313_RN-min.jpg"/>

        
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/z - stock-photo-28972460-woman-in-bed-with-laptop-min.jpg"/>
       
    </div>
    <div id="content_right">
        
        <section <?php if($this->session->flashdata('message_class')=='server_success') { ?>  style="display:block;" <?php } else { ?> style="display:none;" <?php }?> class="form_container">
            
                <div class="form_title"><h1>Post Review About Client</h1></div> 
                <div class="separator separator_provider_signup"></div>
                
                <div class="post-reviw-column">
                    <div class="column_inner">
                        <a class="link_anchor" target="_blank" href="<?php echo base_url();?>report_incident/<?php echo $this->session->flashdata('last_post_review_id'); ?>">Would you like Report an incident ?</a>
                    </div>
                </div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
           
        </section>
        
         <section <?php if($this->session->flashdata('message_class')=='server_success')  { ?>  style="display:none;" <?php }?> class="form_container">
            <form id="create_review_form" name="create_review_form" method="post">

                <div class="form_title"> <h1>Post Review About Client</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                <div class="post-reviw-column">

                    <div class="column_inner">
                        <p class="post-review-p"><span class="post-refs-span">Refs</span>
                            <span class="post-nowcom-span">Now.com</span>
                        </p>
                        <article class="post-review-article1">REF'S Now offers confidential verification for clients from verifiable providers</article>
                        <article class="post-review-article2">This is a quick and hassle free way to set up an appointment without the delay of waiting to be verified.  This process can take hours, days and sometimes there’s no response from the providers due to their schedule and travel plans</article>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">First Name? </span><br> 
                        
                        <input type="text" placeholder="First name" class="date_of_meeting" value="<?php echo set_value('first_name'); ?>" name="first_name" id="first_name" />
                        <span class="required_field">*</span>
                        <?php echo form_error('first_name', '<div class="required_class_1">', '</div>'); ?>
                        
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Last Name? </span><br>
                        <input type="text" placeholder="Last name" class="date_of_meeting" value="<?php echo set_value('last_name'); ?>" name="last_name" id="last_name" />
                         
                        <span class="required_field">*</span>
                        <?php echo form_error('last_name', '<div class="required_class_1">', '</div>'); ?>
                         
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        
                        <span class="normal_text_label">Email's? </span><br> 
                       
                        <input type="text" placeholder="First email" class="date_of_meeting" value="<?php echo set_value('client_first_email'); ?>" name="client_first_email" id="client_first_email" /> <span class="required_field">*</span>
                        <?php echo form_error('client_first_email', '<div class="required_class_1">', '</div>'); ?>
                        <input type="text" placeholder="Second email" class="date_of_meeting" value="<?php echo set_value('client_second_email'); ?>" name="client_second_email" id="client_second_email" />
                        <?php echo form_error('client_second_email', '<div class="required_class_1">', '</div>'); ?>
                        <input type="text" placeholder="Third email" class="date_of_meeting" value="<?php echo set_value('client_third_email'); ?>" name="client_third_email" id="client_third_email" />
                       
                        <?php echo form_error('client_third_email', '<div class="required_class_1">', '</div>'); ?>
                    
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Phone number? </span><br>
                        
                        <input type="text" placeholder="First phone number" class="date_of_meeting"  value="<?php echo set_value('client_first_phone'); ?>" name="client_first_phone" id="client_first_phone" />
                        <input type="text" placeholder="Second phone number" class="date_of_meeting" value="<?php echo set_value('client_second_phone'); ?>" name="client_second_phone" id="client_second_phone" />
                        <input type="text" placeholder="Third phone number" class="date_of_meeting"  value="<?php echo set_value('client_third_phone'); ?>" name="client_third_phone" id="client_third_phone" />
                        <?php echo form_error('client_first_phone', '<div class="required_class_1">', '</div>'); ?>
                        <?php echo form_error('client_second_phone', '<div class="required_class_1">', '</div>'); ?>
                        <?php echo form_error('client_third_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label"> Residence City, State ? </span><br>                                         
                       
                        <select id="client_country" class="post-review-dropdown dropdown-top-margin" name="client_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('client_country', $value->id ); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <span class="required_field">*</span>
                         <?php echo form_error('client_country','<div class="required_class_1">', '</div>'); ?>
                        <select id="client_state" class="post-review-dropdown dropdown-top-margin" name="client_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        <input type="hidden" name="state_post_value"  id="state_post_value" value="<?php echo $this->input->post('client_state'); ?>" />
                        <span class="required_field">*</span>
                        
                        <?php echo form_error('client_state','<div class="required_class_1">', '</div>'); ?>
                        <input type="text" placeholder="City" class="date_of_meeting dropdown-top-margin" value="<?php echo set_value('client_city'); ?>" name="client_city" id="client_city" /> <span class="required_field">*</span>
                        
                        <?php echo form_error('client_city','<div class="required_class_1">', '</div>'); ?>
                        <input type="text" placeholder="Residence" class="date_of_meeting" value="<?php echo set_value('client_residence'); ?>" name="client_residence" id="client_residence" /> <span class="required_field">*</span>
                        <?php echo form_error('client_residence', '<div class="required_class_1">', '</div>'); ?>
                      
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> TER Handle? </span><br>                                         
                        <input type="text" placeholder="TER Handle" class="date_of_meeting" value="<?php echo set_value('client_ter_handle'); ?>" name="client_ter_handle" id="client_ter_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> PF411 Handle? </span><br>                                         
                        <input type="text" placeholder="PF411 Handle" class="date_of_meeting" value="<?php echo set_value('client_pf411_handle'); ?>" name="client_pf411_handle" id="client_pf411_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> DateCheck Handle? </span><br>                                         
                        <input type="text" placeholder="DateCheck Handle" class="date_of_meeting" value="<?php echo set_value('client_datecheck_handle'); ?>" name="client_datecheck_handle" id="client_datecheck_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> ECCIE Handle? </span><br>                                         
                        <input type="text" placeholder="ECCIE Handle" class="date_of_meeting" value="<?php echo set_value('client_eccie_handle'); ?>" name="client_eccie_handle" id="client_eccie_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Member of RSK2? </span><br>                                         
                        <input type="radio" name="client_member_of_rsk2" id="client_member_of_rsk2"  <?php echo set_radio('client_member_of_rsk2', 'y'); ?> value="y" >  <span class="normal_text">Yes</span>
                        <input type="radio" name="client_member_of_rsk2" id="client_member_of_rsk2" <?php echo set_radio('client_member_of_rsk2', 'n'); ?> value="n" > <span class="normal_text">No</span>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Other__? </span><br>                                         
                        <input type="text" placeholder="Other" class="date_of_meeting"  value="<?php echo set_value('client_other_handle'); ?>" name="client_other_handle" id="client_other_handle" />

                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">How does the client prefer to be contacted? </span><br>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '1'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">All - email/text/call </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '2'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email/text </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '3'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email anytime </span> </span></li>

                        </ul> 

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '4'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email but, be discreet  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '5'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">No not email  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '6'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Phone anytime  </span> </li>

                        </ul>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '7'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Phone anytime, leave voice mail  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '8'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do Not Call  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '9'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime </span>  </li>

                        </ul>
                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '10'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime but, be discreet </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '11'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text with time limitations </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="12" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '12'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime </span>  </li>

                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="13" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '13'); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do not text </span> </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Date of meeting? </span><br>
                      
                        <input type="text" placeholder="Enter date of meeting" class="date_of_meeting" value="<?php echo set_value('date_of_meeting'); ?>" name="date_of_meeting" id="date_of_meeting" />
                        <span class="required_field">*</span>
                        <?php echo form_error('date_of_meeting', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div>  
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">City/State where you met client?</span><br> 
                        
                        
                        <select id="meeting_country" class="post-review-dropdown dropdown-top-margin" name="meeting_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('meeting_country', $value->id ); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>                        
                        <?php echo form_error('meeting_country', '<div class="required_class_1">', '</div>'); ?>    
                        
                        <select id="meeting_state" class="post-review-dropdown dropdown-top-margin" name="meeting_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        
                        <?php echo form_error('meeting_state', '<div class="required_class_1">', '</div>'); ?>
                        <input type="text" placeholder="Meeting city" class="date_of_meeting dropdown-top-margin" value="<?php echo set_value('meeting_city'); ?>" name="meeting_city" id="meeting_city" />

                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Incall or Outcall? </span><br>
                        <select id="incall_outcall" class="post-review-dropdown" name="incall_outcall">
                            <option value="">Select &nbsp;Incall or Outcall </option>
                            <option <?php echo set_select('incall_outcall', '1'); ?> value="1">Outcall - Residence </option>
                            <option <?php echo set_select('incall_outcall', '2'); ?> value="2">Outcall Hotel </option>
                            <option <?php echo set_select('incall_outcall', '3'); ?> value="3">Incall – Residence </option>
                            <option <?php echo set_select('incall_outcall', '4'); ?> value="4">Incall – Hotel </option>
                            <option <?php echo set_select('incall_outcall', '5'); ?> value="5">Other </option>
                            <option <?php echo set_select('incall_outcall', '6'); ?> value="6">where?___</option>
                        </select>
                    </div>
                </div> 

                <div class="post-reviw-column3">
                    <span class="normal_text_label">Regular client? </span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="regular_client" id="regular_client" value="y" <?php echo set_radio('regular_client', 'y'); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="regular_client" id="regular_client" value="n" <?php echo set_radio('regular_client', 'n'); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 
                <div class="post-reviw-column3">                 

                    <span class="normal_text_label">Rate the experience for clients? <span class="required_field">*</span></span><br>
                   
                    <div class="post_review_column_inner">
                        <div class="basic" data-average="0" data-id="1"></div>  
                        <input type="hidden" id="rateing_experince" value="<?php echo set_value('rateing_experince'); ?>" name="rateing_experince" />
                        
                        <?php echo form_error('rateing_experince', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div> 

                <div class="post-reviw-column3">                   

                    <span class="normal_text_label">Would you meet with client again?</span><br>
                    <div class="post_review_column_inner">                      
                        
                        <input type="radio" name="meet_again_client" id="meet_again_client" value="y" <?php echo set_radio('meet_again_client', 'y'); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="meet_again_client" id="meet_again_client" value="n" <?php echo set_radio('meet_again_client', 'n'); ?> > <span class="normal_text">No</span>
                       <span class="required_field">*</span>
                       <?php echo form_error('meet_again_client', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                       
                        <span class="normal_text_label">Schedule? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('shedule[]','1'); ?> name="shedule[]"><span class="normal_text">Early </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('shedule[]','2'); ?> class="post_review_checkbox" name="shedule[]"><span class="normal_text">On Time </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('shedule[]','3'); ?> class="post_review_checkbox" name="shedule[]"><span class="normal_text">Late with notice </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('shedule[]','4'); ?> name="shedule[]"><span class="normal_text">Late with w/o notice </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('shedule[]', '5'); ?> name="shedule[]"><span class="normal_text"> Cancelled w/ notice </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('shedule[]', '6'); ?> name="shedule[]"><span class="normal_text">Rescheduled as promised </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('shedule[]','7'); ?> name="shedule[]"><span class="normal_text"> No Show/ No Call </span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Type of date? </span><br>

                        <select id="type_of_date" class="post-review-dropdown"  name="type_of_date">
                            <option value="">Select &nbsp; Type of date </option>
                            <option <?php echo set_select('type_of_date', '1'); ?> value="1">Single </option>
                            <option <?php echo set_select('type_of_date', '2'); ?> value="2">Single w/ Drinks in room </option>
                            <option <?php echo set_select('type_of_date', '3'); ?> value="3">Single w/ Drinks in public </option>
                            <option <?php echo set_select('type_of_date', '4'); ?> value="4">Single w/ Dinner in room </option>
                            <option <?php echo set_select('type_of_date', '5'); ?> value="5">Single w/ Dinner in Public </option>
                            <option <?php echo set_select('type_of_date', '6'); ?> value="6">Single - Fantasy (fetish) </option>
                            <option <?php echo set_select('type_of_date', '7'); ?> value="7">Double </option>
                            <option <?php echo set_select('type_of_date', '8'); ?> value="8">Double w/ Drinks in room </option>
                            <option <?php echo set_select('type_of_date', '9'); ?> value="9">Double w/ Drinks in public </option>
                            <option <?php echo set_select('type_of_date', '10'); ?> value="10">Double -  Fantasy (fetish) </option>
                            <option <?php echo set_select('type_of_date', '11'); ?> value="11">Dom - light </option>
                            <option <?php echo set_select('type_of_date', '12'); ?> value="12">Dom - heavy</option>
                        </select>
                    </div>
                </div>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Length of date? </span><br>

                        <select id="length_of_date" class="post-review-dropdown" name="length_of_date">
                            <option value="">Select &nbsp;/Length of date </option>
                            <option <?php echo set_select('length_of_date','1'); ?> value="1">1 hr </option>
                            <option <?php echo set_select('length_of_date','2'); ?> value="2">90 mins </option>
                            <option <?php echo set_select('length_of_date','3'); ?> value="3">2 hrs  </option>
                            <option <?php echo set_select('length_of_date','4'); ?> value="4">3 hrs </option>
                            <option <?php echo set_select('length_of_date','5'); ?> value="5">4 hrs </option>
                            <option <?php echo set_select('length_of_date','6'); ?> value="6">5 hrs </option>
                            <option <?php echo set_select('length_of_date','7'); ?> value="7">6 hrs or more  </option>
                            <option <?php echo set_select('length_of_date','8'); ?> value="8">overnight </option>
                            <option <?php echo set_select('length_of_date','9'); ?> value="9">weekend </option>
                            <option <?php echo set_select('length_of_date','10'); ?> value="10">vacation - in state </option>
                            <option <?php echo set_select('length_of_date','11'); ?> value="11">vacation - out of state </option>
                            <option <?php echo set_select('length_of_date','12'); ?> value="12">vacation - out of country</option>
                        </select>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Did he Tip?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="did_he_tip" id="did_he_tip" value="y" <?php echo set_radio('did_he_tip', 'y'); ?>>  <span class="normal_text">Yes</span>
                        <input type="radio" name="did_he_tip" id="did_he_tip" value="n" <?php echo set_radio('did_he_tip', 'n'); ?>> <span class="normal_text">No</span>
                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        
                        <span class="normal_text_label">Your Date? </span>  <span class="required_field">*</span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('your_date[]','1'); ?>  name="your_date[]"><span class="normal_text">Perfect Gentlemen </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('your_date[]','2'); ?>  class="post_review_checkbox" name="your_date[]"><span class="normal_text">Enjoyable & Fun  </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('your_date[]','3'); ?>  class="post_review_checkbox" name="your_date[]"><span class="normal_text">Respectful </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('your_date[]', '4'); ?>  name="your_date[]"><span class="normal_text">Short & Sweet </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('your_date[]', '5'); ?>  name="your_date[]"><span class="normal_text">Overstated his time w/o compensation </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('your_date[]', '6'); ?>  name="your_date[]"><span class="normal_text">Extended time with compensation </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('your_date[]', '7'); ?>  name="your_date[]"><span class="normal_text">Would not see again but, safe </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('your_date[]', '8'); ?>  name="your_date[]"><span class="normal_text">Didn’t have chemistry </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('your_date[]', '9'); ?>  name="your_date[]"><span class="normal_text">Difficult but, would see again </span>  </li>
                        </ul>
                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('your_date[]', '10'); ?> name="your_date[]"><span class="normal_text">Rough would recommend with strong boundaries </span>  </li>
                        </ul>
                        
                        <div class="clear"></div>
                         <?php  echo form_error('your_date[]', '<div class="required_class_1">', '</div>');  ?>   
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class_1">', '</div>');  ?>
                        <span class="normal_text_label">Personality? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('personality[]', '1'); ?> name="personality[]"><span class="normal_text">Easy going  </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('personality[]', '2'); ?> class="post_review_checkbox" name="personality[]"><span class="normal_text">Shy </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('personality[]', '3'); ?> class="post_review_checkbox" name="personality[]"><span class="normal_text">Uptight </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('personality[]', '4'); ?> name="personality[]"><span class="normal_text">Talkative </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('personality[]', '5'); ?> name="personality[]"><span class="normal_text">Thoughtful </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('personality[]', '6'); ?> name="personality[]"><span class="normal_text">Passionate </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('personality[]', '7'); ?> name="personality[]"><span class="normal_text">Impatient </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('personality[]', '8'); ?> name="personality[]"><span class="normal_text">Jerk </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('personality[]', '9'); ?> name="personality[]"><span class="normal_text">Annoying </span>  </li>
                        </ul>

                        <div class="clear"></div>
                    </div>
                </div>


                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Experience? </span><br>

                        <select id="experience" class="post-review-dropdown" name="experience">
                            <option value="">Select &nbsp;experience </option>
                            <option <?php echo set_select('experience', '1'); ?> value="1 ">First Time  </option>
                            <option <?php echo set_select('experience', '2'); ?> value="2">Newbie </option>
                            <option <?php echo set_select('experience', '3'); ?> value="3">Once in awhile  </option>
                            <option <?php echo set_select('experience', '4'); ?> value="4">Frequently </option>
                            <option <?php echo set_select('experience', '5'); ?> value="5">Hobbyist </option>
                        </select>
                    </div>
                </div>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Age? </span><br>

                        <select id="age" class="post-review-dropdown" name="age">
                            <option  value="">Select &nbsp;Age </option>
                            <option <?php echo set_select('age', '1'); ?> value="1">18-20 </option>
                            <option <?php echo set_select('age', '2'); ?> value="2">21-25 </option>
                            <option <?php echo set_select('age', '3'); ?> value="3">26-30 </option>
                            <option <?php echo set_select('age', '4'); ?> value="4">31-35 </option>
                            <option <?php echo set_select('age', '5'); ?> value="5">36-40 </option>
                            <option <?php echo set_select('age', '6'); ?> value="6">41-45 </option>
                            <option <?php echo set_select('age', '7'); ?> value="7">46-50 </option>
                            <option <?php echo set_select('age', '8'); ?> value="8">51-55 </option>
                            <option <?php echo set_select('age', '9'); ?> value="9">56-60 </option>
                            <option <?php echo set_select('age', '10'); ?> value="10">61-65 </option>
                            <option <?php echo set_select('age', '11'); ?> value="11">66-70 </option>
                            <option <?php echo set_select('age', '12'); ?> value="12">71-75 </option>
                            <option <?php echo set_select('age', '13'); ?> value="13">76-80 </option>
                            <option <?php echo set_select('age', '14'); ?> value="14">Over 81</option>
                        </select>
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class_1">', '</div>');  ?>
                        <span class="normal_text_label">Appearance? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1"  <?php echo set_checkbox('appearance[]', '1'); ?> name="appearance[]"><span class="normal_text">Handsome  </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('appearance[]', '2'); ?> class="post_review_checkbox" name="appearance[]"><span class="normal_text">Professional</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('appearance[]', '3'); ?> class="post_review_checkbox" name="appearance[]"><span class="normal_text">Athletic </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('appearance[]', '4'); ?> name="appearance[]"><span class="normal_text">Thin  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('appearance[]', '5'); ?> name="appearance[]"><span class="normal_text">Tall  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('appearance[]', '6'); ?> name="appearance[]"><span class="normal_text">Short </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('appearance[]', '7'); ?> name="appearance[]"><span class="normal_text">Regular  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('appearance[]', '8'); ?> name="appearance[]"><span class="normal_text">Over weight </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('appearance[]', '9'); ?> name="appearance[]"><span class="normal_text">Skin issue</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('appearance[]', '10'); ?> name="appearance[]"><span class="normal_text">Bad odor/Smelly </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('appearance[]', '11'); ?> name="appearance[]"><span class="normal_text">Bad Hygiene</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <span class="normal_text_label">Ethnicity?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" <?php echo set_radio('ethnicity', '1'); ?> name="ethnicity" id="ethnicity" value="1" >  <span class="normal_text">Caucasian </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '2'); ?> name="ethnicity" id="ethnicity" value="2" > <span class="normal_text">Asian</span>
                        <input type="radio" <?php echo set_radio('ethnicity', '3'); ?> name="ethnicity" id="ethnicity" value="3" > <span class="normal_text">Indian </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '4'); ?> name="ethnicity" id="ethnicity" value="4" > <span class="normal_text">Pacific Islander </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '5'); ?> name="ethnicity" id="ethnicity" value="5" > <span class="normal_text">Hispanic </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '6'); ?> name="ethnicity" id="ethnicity" value="6" > <span class="normal_text">Middle Eastern </span>
                    </div>
                </div> 

                <div class="post-reviw-column3">
                    <span class="normal_text_label">GFE?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="gfe" id="gfe" value="y" <?php echo set_radio('gfe', 'y'); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="gfe" id="gfe" value="n" <?php echo set_radio('gfe', 'n'); ?> > <span class="normal_text">No</span>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Performance? </span><br>
                        <select id="performance" class="post-review-dropdown" name="performance">
                            <option value="">Select &nbsp;performance </option>
                            <option <?php echo set_select('performance', '1'); ?> value="1">High energy </option>
                            <option <?php echo set_select('performance', '2'); ?> value="2">Difficult Performing (ED) </option>
                            <option <?php echo set_select('performance', '3'); ?> value="3">Quick </option>
                            <option <?php echo set_select('performance', '4'); ?> value="4">MSOG </option>
                            <option <?php echo set_select('performance', '5'); ?> value="5">Normal pace </option>
                            <option <?php echo set_select('performance', '6'); ?> value="6">Took forever </option>
                        </select>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <span class="normal_text_label">Did the client write you a review?</span><br>
                    <div class="post_review_column_inner">                      
                       
                        <input type="radio" <?php echo set_radio('did_client_write_you_review', 'y'); ?> name="did_client_write_you_review" id="did_client_write_you_review" value="y" >  <span class="normal_text">Yes</span>
                        <input type="radio" <?php echo set_radio('did_client_write_you_review', 'n'); ?> name="did_client_write_you_review" id="did_client_write_you_review" value="n" > <span class="normal_text">No</span>
                    
                    </div>
                </div> 
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Which review site? </span><br>
                    <div class="post_review_column_inner">
                        
                        <input type="radio" name="which_review_website" class="which_review_website" value="1"  <?php echo set_radio('which_review_website', '1'); ?> > <span class="normal_text">TER </span>
                        <input type="radio" name="which_review_website" class="which_review_website" value="2"  <?php echo set_radio('which_review_website', '2'); ?> > <span class="normal_text">Adultfax </span>
                        <input type="radio" name="which_review_website" class="which_review_website" value="3"  <?php echo set_radio('which_review_website', '3'); ?> > <span class="normal_text">ECCIE </span>
                        <input type="radio" name="which_review_website" class="which_review_website" value="4"  <?php echo set_radio('which_review_website', '4'); ?> > <span class="normal_text">TNA </span>
                        <input type="radio" name="which_review_website" class="which_review_website other_review_text" value="5"  <?php echo set_radio('which_review_website', '5'); ?> > <span class="normal_text">Other</span>
                        <input type="text" placeholder="Other site" style="display:none;" name="which_review_website_other" id="which_review_website_other" value="<?php echo set_value('which_review_website_other'); ?>" > 
                    
                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Rate the review client provided? </span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('rate_review_client_provided[]', '1'); ?> name="rate_review_client_provided[]"><span class="normal_text">Great  </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2"  <?php echo set_checkbox('rate_review_client_provided[]', '2'); ?> class="post_review_checkbox" name="rate_review_client_provided[]"><span class="normal_text">Good </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3"  <?php echo set_checkbox('rate_review_client_provided[]', '3'); ?> class="post_review_checkbox" name="rate_review_client_provided[]"><span class="normal_text">Acceptable  </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4"  <?php echo set_checkbox('rate_review_client_provided[]', '4'); ?> name="rate_review_client_provided[]"><span class="normal_text">Not good/Not Bad </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5"  <?php echo set_checkbox('rate_review_client_provided[]', '5'); ?> name="rate_review_client_provided[]"><span class="normal_text">Unhappy w/ review,  low ratings  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6"  <?php echo set_checkbox('rate_review_client_provided[]', '6'); ?> name="rate_review_client_provided[]"><span class="normal_text">Criticle  </span> </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7"  <?php echo set_checkbox('rate_review_client_provided[]', '7'); ?> name="rate_review_client_provided[]"><span class="normal_text">False information  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8"  <?php echo set_checkbox('rate_review_client_provided[]', '8'); ?> name="rate_review_client_provided[]"><span class="normal_text">Did not see but, wrote a review </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9"  <?php echo set_checkbox('rate_review_client_provided[]', '9'); ?> name="rate_review_client_provided[]"><span class="normal_text">Bad review</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Would you like to blacklist this client ?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="blacklist_client" id="blacklist_client" value="y"  <?php echo set_radio('blacklist_client', 'y'); ?>  >  <span class="normal_text">Yes</span>
                        <input type="radio" name="blacklist_client" id="blacklist_client" value="n"  <?php echo set_radio('blacklist_client', 'n'); ?>  > <span class="normal_text">No</span>
                    </div>
                </div>
                
                <div class="post-reviw-column1">
                    <div class="column_inner">
                        <span class="normal_text_label">Comments(50 words or less) </span><br>
                        <?php echo form_error('review_desc','<div class="required_class_1">','</div>'); ?>
                        <textarea placeholder="Enter review text here" cols="3" rows="3" class="review_detail" name="review_desc"> <?php echo set_value("review_desc"); ?></textarea>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Send invite to client?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="review_invite_sent" id="review_invite_sent" value="y"  <?php echo set_radio('review_invite_sent', 'y'); ?>  >  <span class="normal_text">Yes</span>
                        <input type="radio" name="review_invite_sent" id="review_invite_sent" value="n"  <?php echo set_radio('review_invite_sent', 'n'); ?>  > <span class="normal_text">No</span>
                    </div>
                </div>
                <span class="submit_button_contact">
                    <input type="submit" value="Submit" class="submit_button" />
                </span>
            </form>
        </section>
    </div>  
    <div class="clear"></div>       
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.css" media="screen" />
<script src="<?php echo base_url(); ?>theme/js/post_review.js"></script>
