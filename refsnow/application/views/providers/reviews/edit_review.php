
<section id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_2.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
    </div>

    <div id="content_right">
         <section <?php if($this->session->flashdata('message_class')=='success')  { ?>  style="display:none;" <?php }?> class="form_container">
            <form id="edit_review_form" name="edit_review_form" method="post">

                <div class="form_title"> <h1>Edit Review About Client</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
               <?php if($your_review->review_parent_id ==0){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        
                        <span class="normal_text_label">First Name? </span><br> 
                        <?php echo form_error('first_name', '<div class="required_class">', '</div>'); ?>

                        <input type="text" placeholder="First name" class="date_of_meeting" value="<?php echo $first_name; ?>" name="first_name" id="first_name" />
                        <span class="required_field">*</span>
                    </div>
                </div>
               <?php }?>
               <?php if($your_review->review_parent_id ==0){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Last Name? </span><br>
                        <?php echo form_error('last_name', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="Last name" class="date_of_meeting" value="<?php echo $last_name; ?>" name="last_name" id="last_name" />
                    </div>
                </div>
                <?php }?>
               
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Email's? </span><br> 
                        <?php echo form_error('client_first_email', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_second_email', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_third_email', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="First email" class="date_of_meeting" value="<?php echo $client_first_email; ?>" name="client_first_email" id="client_first_email" /> <span class="required_field">*</span>
                        <input type="text" placeholder="Second email" class="date_of_meeting" value="<?php echo $client_second_email; ?>" name="client_second_email" id="client_second_email" />
                        <input type="text" placeholder="Third email" class="date_of_meeting" value="<?php echo $client_third_email ?>" name="client_third_email" id="client_third_email" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Phone number? </span><br>
                        <?php echo form_error('client_first_phone', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_second_phone', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_third_phone', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="First phone number" class="date_of_meeting"  value="<?php echo $client_first_phone; ?>" name="client_first_phone" id="client_first_phone" />
                        <input type="text" placeholder="Second phone number" class="date_of_meeting" value="<?php echo $client_second_phone; ?>" name="client_second_phone" id="client_second_phone" />
                        <input type="text" placeholder="Third phone number" class="date_of_meeting"  value="<?php echo $client_third_phone; ?>" name="client_third_phone" id="client_third_phone" />
                    </div>
                </div>
                
               <?php if($your_review->review_parent_id ==0){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        
                        <span class="normal_text_label"> Residence City, State ? </span><br>                                         
                        <?php echo form_error('client_country','<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_state','<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_city','<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_residence', '<div class="required_class">', '</div>'); ?>
                        
                        <select id="client_country" class="post-review-dropdown dropdown-top-margin" name="client_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('client_country',$value->id ,(($value->id == $client_country) ? true:false)) ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select><span class="required_field">*</span>

                        <select id="client_state" data-stateid="<?php echo $client_state; ?>" class="post-review-dropdown dropdown-top-margin" name="client_state">
                            <option value="">Select &nbsp; State </option>
                        </select><span class="required_field">*</span>
                        
                        <input type="text" placeholder="City" class="date_of_meeting dropdown-top-margin" value="<?php echo $client_city; ?>" name="client_city" id="client_city" /> <span class="required_field">*</span>
                        <input type="text" placeholder="Residence" class="date_of_meeting" value="<?php echo $client_residence; ?>" name="client_residence" id="client_residence" /> <span class="required_field">*</span>
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> TER Handle? </span><br>                                         
                        <input type="text" placeholder="TER Handle" class="date_of_meeting" value="<?php echo $client_ter_handle; ?>" name="client_ter_handle" id="client_ter_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> PF411 Handle? </span><br>                                         
                        <input type="text" placeholder="PF411 Handle" class="date_of_meeting" value="<?php echo $client_pf411_handle; ?>" name="client_pf411_handle" id="client_pf411_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> DateCheck Handle? </span><br>                                         
                        <input type="text" placeholder="DateCheck Handle" class="date_of_meeting" value="<?php echo $client_datecheck_handle; ?>" name="client_datecheck_handle" id="client_datecheck_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> ECCIE Handle? </span><br>                                         
                        <input type="text" placeholder="ECCIE Handle" class="date_of_meeting" value="<?php echo $client_eccie_handle; ?>" name="client_eccie_handle" id="client_eccie_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Member of RSK2? </span><br>                                         
                        <input type="radio" name="client_member_of_rsk2" id="client_member_of_rsk2"  <?php echo set_radio('client_member_of_rsk2', 'y',(($client_member_of_rsk2=='y') ? true:false)); ?> value="y" >  <span class="normal_text">Yes</span>
                        <input type="radio" name="client_member_of_rsk2" id="client_member_of_rsk2" <?php echo set_radio('client_member_of_rsk2', 'n',(($client_member_of_rsk2=='n') ? true:false)); ?> value="n" > <span class="normal_text">No</span>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Other__? </span><br>                                         
                        <input type="text" placeholder="Other" class="date_of_meeting"  value="<?php echo $client_other_handle; ?>" name="client_other_handle" id="client_other_handle" />
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">How does the client prefer to be contacted? </span><br>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '1',in_array(1,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">All - email/text/call </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '2',in_array(2,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email/text </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '3',in_array(3,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email anytime </span> </span></li>

                        </ul> 

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '4',in_array(4,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email but, be discreet  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '5',in_array(5,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">No not email  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '6',in_array(6,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Phone anytime  </span> </li>

                        </ul>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '7',in_array(7,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Phone anytime, leave voice mail  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '8',in_array(8,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do Not Call  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '9',in_array(9,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime </span>  </li>

                        </ul>
                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '10',in_array(10,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime but, be discreet </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '11',in_array(11,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text with time limitations </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="12" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '12',in_array(12,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime </span>  </li>

                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="13" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '13',in_array(13,$how_client_prefer_to_be_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do not text </span> </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php } ?>
               
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Date of meeting? </span><br>
                        <?php echo form_error('date_of_meeting', '<div class="required_class">', '</div>'); ?>

                        <input type="text" placeholder="Enter date of meeting" class="date_of_meeting" value="<?php echo $date_of_meeting; ?>" name="date_of_meeting" id="date_of_meeting" />
                    </div>
                </div>  
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">City/State where you met client?</span><br> 
                        <?php echo form_error('meeting_country', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('meeting_state', '<div class="required_class">', '</div>'); ?>
                        <select id="meeting_country" class="post-review-dropdown dropdown-top-margin" name="meeting_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('meeting_country', $value->id , ($value->id === $meeting_country)? true:false); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <select id="meeting_state" data-stateid="<?php echo $meeting_state; ?>" class="post-review-dropdown dropdown-top-margin" name="meeting_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        <input type="text" placeholder="Meeting city" class="date_of_meeting dropdown-top-margin" value="<?php echo $meeting_city; ?>" name="meeting_city" id="meeting_city" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Incall or Outcall? </span><br>
                        <select id="incall_outcall" class="post-review-dropdown" name="incall_outcall">
                            <option value="">Select &nbsp;Incall or Outcall </option>
                            <option <?php echo set_select('incall_outcall', '1',($incall_outcall==1)?true:false); ?> value="1">Outcall - Residence </option>
                            <option <?php echo set_select('incall_outcall', '2',($incall_outcall==2)?true:false); ?> value="2">Outcall Hotel </option>
                            <option <?php echo set_select('incall_outcall', '3',($incall_outcall==3)?true:false); ?> value="3">Incall – Residence </option>
                            <option <?php echo set_select('incall_outcall', '4',($incall_outcall==4)?true:false); ?> value="4">Incall – Hotel </option>
                            <option <?php echo set_select('incall_outcall', '5',($incall_outcall==5)?true:false); ?> value="5">Other </option>
                            <option <?php echo set_select('incall_outcall', '6',($incall_outcall==6)?true:false); ?> value="6">where?___</option>
                        </select>
                    </div>
                </div> 
                 <?php if($your_review->review_parent_id ==0){ ?> 
                
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Regular client? </span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="regular_client" id="regular_client" value="y" <?php echo set_radio('regular_client', 'y',($regular_client=== 'y')?true:false); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="regular_client" id="regular_client" value="n" <?php echo set_radio('regular_client', 'n',($regular_client=== 'n')?true:false); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 
                 <?php } ?>
                <div class="post-reviw-column3">                 

                    <span class="normal_text_label">Rate the experience for clients? </span><br>
                    <?php echo form_error('rateing_experince', '<div class="required_class">', '</div>'); ?>
                    <div class="post_review_column_inner">
                        <div class="basic" data-average="<?php echo $rateing_experince; ?>" data-id="1"></div>  
                        <input type="hidden" id="rateing_experince" value="<?php echo $rateing_experince; ?>" name="rateing_experince" />
                    </div>
                </div> 

                <div class="post-reviw-column3">                   

                    <span class="normal_text_label">Would you meet with client again?</span><br>
                    <div class="post_review_column_inner">                      
                        <?php echo form_error('meet_again_client', '<div class="required_class">', '</div>'); ?>

                        <input type="radio" name="meet_again_client" id="meet_again_client" value="y" <?php echo set_radio('meet_again_client', 'y',($meet_again_client=== 'y')?true:false); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="meet_again_client" id="meet_again_client" value="n" <?php echo set_radio('meet_again_client', 'n',($meet_again_client=== 'n')?true:false); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Schedule? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('shedule[]','1',in_array(1,$shedule)?true:false); ?> name="shedule[]"><span class="normal_text">Early </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('shedule[]','2',in_array(2,$shedule)?true:false); ?> class="post_review_checkbox" name="shedule[]"><span class="normal_text">On Time </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('shedule[]','3',in_array(3,$shedule)?true:false); ?> class="post_review_checkbox" name="shedule[]"><span class="normal_text">Late with notice </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('shedule[]','4',in_array(4,$shedule)?true:false); ?> name="shedule[]"><span class="normal_text">Late with w/o notice </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('shedule[]', '5',in_array(5,$shedule)?true:false); ?> name="shedule[]"><span class="normal_text"> Cancelled w/ notice </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('shedule[]', '6',in_array(6,$shedule)?true:false); ?> name="shedule[]"><span class="normal_text">Rescheduled as promised </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('shedule[]','7',in_array(7,$shedule)?true:false); ?> name="shedule[]"><span class="normal_text"> No Show/ No Call </span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Type of date? </span><br>

                        <select id="type_of_date" class="post-review-dropdown"  name="type_of_date">
                            <option value="">Select &nbsp; Type of date </option>
                            <option <?php echo set_select('type_of_date', '1',($type_of_date==1)?true:false); ?> value="1">Single </option>
                            <option <?php echo set_select('type_of_date', '2',($type_of_date==2)?true:false); ?> value="2">Single w/ Drinks in room </option>
                            <option <?php echo set_select('type_of_date', '3',($type_of_date==3)?true:false); ?> value="3">Single w/ Drinks in public </option>
                            <option <?php echo set_select('type_of_date', '4',($type_of_date==4)?true:false); ?> value="4">Single w/ Dinner in room </option>
                            <option <?php echo set_select('type_of_date', '5',($type_of_date==5)?true:false); ?> value="5">Single w/ Dinner in Public </option>
                            <option <?php echo set_select('type_of_date', '6',($type_of_date==6)?true:false); ?> value="6">Single - Fantasy (fetish) </option>
                            <option <?php echo set_select('type_of_date', '7',($type_of_date==7)?true:false); ?> value="7">Double </option>
                            <option <?php echo set_select('type_of_date', '8',($type_of_date==8)?true:false); ?> value="8">Double w/ Drinks in room </option>
                            <option <?php echo set_select('type_of_date', '9',($type_of_date==9)?true:false); ?> value="9">Double w/ Drinks in public </option>
                            <option <?php echo set_select('type_of_date', '10',($type_of_date==10)?true:false); ?> value="10">Double -  Fantasy (fetish) </option>
                            <option <?php echo set_select('type_of_date', '11',($type_of_date==11)?true:false); ?> value="11">Dom - light </option>
                            <option <?php echo set_select('type_of_date', '12',($type_of_date==12)?true:false); ?> value="12">Dom - heavy</option>
                        </select>
                    </div>
                </div>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Length of date? </span><br>

                        <select id="length_of_date" class="post-review-dropdown" name="length_of_date">
                            <option value="">Select &nbsp;/Length of date </option>
                            <option <?php echo set_select('length_of_date','1',($length_of_date==1)?true:false); ?> value="1">1 hr </option>
                            <option <?php echo set_select('length_of_date','2',($length_of_date==2)?true:false); ?> value="2">90 mins </option>
                            <option <?php echo set_select('length_of_date','3',($length_of_date==3)?true:false); ?> value="3">2 hrs  </option>
                            <option <?php echo set_select('length_of_date','4',($length_of_date==4)?true:false); ?> value="4">3 hrs </option>
                            <option <?php echo set_select('length_of_date','5',($length_of_date==5)?true:false); ?> value="5">4 hrs </option>
                            <option <?php echo set_select('length_of_date','6',($length_of_date==6)?true:false); ?> value="6">5 hrs </option>
                            <option <?php echo set_select('length_of_date','7',($length_of_date==7)?true:false); ?> value="7">6 hrs or more  </option>
                            <option <?php echo set_select('length_of_date','8',($length_of_date==8)?true:false); ?> value="8">overnight </option>
                            <option <?php echo set_select('length_of_date','9',($length_of_date==9)?true:false); ?> value="9">weekend </option>
                            <option <?php echo set_select('length_of_date','10',($length_of_date==10)?true:false); ?> value="10">vacation - in state </option>
                            <option <?php echo set_select('length_of_date','11',($length_of_date==11)?true:false); ?> value="11">vacation - out of state </option>
                            <option <?php echo set_select('length_of_date','12',($length_of_date==12)?true:false); ?> value="12">vacation - out of country</option>
                        </select>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Did he Tip?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="did_he_tip" id="did_he_tip" value="y" <?php echo set_radio('did_he_tip', 'y',($did_he_tip=='y')?true:false); ?>>  <span class="normal_text">Yes</span>
                        <input type="radio" name="did_he_tip" id="did_he_tip" value="n" <?php echo set_radio('did_he_tip', 'n',($did_he_tip=='n')?true:false); ?>> <span class="normal_text">No</span>
                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Your Date? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('your_date[]','1',in_array(1,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Perfect Gentlemen </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('your_date[]','2',in_array(2,$your_date)?true:false); ?>  class="post_review_checkbox" name="your_date[]"><span class="normal_text">Enjoyable & Fun  </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('your_date[]','3',in_array(3,$your_date)?true:false); ?>  class="post_review_checkbox" name="your_date[]"><span class="normal_text">Respectful </span> </span></li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('your_date[]', '4',in_array(4,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Short & Sweet </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('your_date[]', '5',in_array(5,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Overstated his time w/o compensation </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('your_date[]', '6',in_array(6,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Extended time with compensation </span> </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('your_date[]', '7',in_array(7,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Would not see again but, safe </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('your_date[]', '8',in_array(8,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Didn’t have chemistry </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('your_date[]', '9',in_array(9,$your_date)?true:false); ?>  name="your_date[]"><span class="normal_text">Difficult but, would see again </span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('your_date[]', '10',in_array(10,$your_date)?true:false); ?> name="your_date[]"><span class="normal_text">Rough would recommend with strong boundaries </span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Personality? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('personality[]', '1',in_array(1,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Easy going  </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('personality[]', '2',in_array(2,$personality)?true:false); ?> class="post_review_checkbox" name="personality[]"><span class="normal_text">Shy </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('personality[]', '3',in_array(3,$personality)?true:false); ?> class="post_review_checkbox" name="personality[]"><span class="normal_text">Uptight </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('personality[]', '4',in_array(4,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Talkative </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('personality[]', '5',in_array(5,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Thoughtful </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('personality[]', '6',in_array(6,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Passionate </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('personality[]', '7',in_array(7,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Impatient </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('personality[]', '8',in_array(8,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Jerk </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('personality[]', '9',in_array(9,$personality)?true:false); ?> name="personality[]"><span class="normal_text">Annoying </span>  </li>
                        </ul>

                        <div class="clear"></div>
                    </div>
                </div>
                 <?php if($your_review->review_parent_id ==0){ ?> 
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Experience? </span><br>

                        <select id="experience" class="post-review-dropdown" name="experience">
                            <option value="">Select &nbsp;experience </option>
                            <option <?php echo set_select('experience', '1',($experience=='1')?true:false); ?> value="1 ">First Time  </option>
                            <option <?php echo set_select('experience', '2',($experience=='2')?true:false); ?> value="2">Newbie </option>
                            <option <?php echo set_select('experience', '3',($experience=='3')?true:false); ?> value="3">Once in awhile  </option>
                            <option <?php echo set_select('experience', '4',($experience=='4')?true:false); ?> value="4">Frequently </option>
                            <option <?php echo set_select('experience', '5',($experience=='5')?true:false); ?> value="5">Hobbyist </option>
                        </select>
                    </div>
                </div>
                
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Age? </span><br>

                        <select id="age" class="post-review-dropdown" name="age">
                            <option  value="">Select &nbsp;Age </option>
                            <option <?php echo set_select('age', '1',($age=='1')?true:false); ?> value="1">18-20 </option>
                            <option <?php echo set_select('age', '2',($age=='2')?true:false); ?> value="2">21-25 </option>
                            <option <?php echo set_select('age', '3',($age=='3')?true:false); ?> value="3">26-30 </option>
                            <option <?php echo set_select('age', '4',($age=='4')?true:false); ?> value="4">31-35 </option>
                            <option <?php echo set_select('age', '5',($age=='5')?true:false); ?> value="5">36-40 </option>
                            <option <?php echo set_select('age', '6',($age=='6')?true:false); ?> value="6">41-45 </option>
                            <option <?php echo set_select('age', '7',($age=='7')?true:false); ?> value="7">46-50 </option>
                            <option <?php echo set_select('age', '8',($age=='8')?true:false); ?> value="8">51-55 </option>
                            <option <?php echo set_select('age', '9',($age=='9')?true:false); ?> value="9">56-60 </option>
                            <option <?php echo set_select('age', '10',($age=='10')?true:false); ?> value="10">61-65 </option>
                            <option <?php echo set_select('age', '11',($age=='11')?true:false); ?> value="11">66-70 </option>
                            <option <?php echo set_select('age', '12',($age=='12')?true:false); ?> value="12">71-75 </option>
                            <option <?php echo set_select('age', '13',($age=='13')?true:false); ?> value="13">76-80 </option>
                            <option <?php echo set_select('age', '14',($age=='14')?true:false); ?> value="14">Over 81</option>
                        </select>
                    </div>
                </div>
                 <?php } ?> 
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Appearance? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1"  <?php echo set_checkbox('appearance[]', '1',in_array(1,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Handsome  </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2" <?php echo set_checkbox('appearance[]', '2',in_array(2,$appearance)?true:false); ?> class="post_review_checkbox" name="appearance[]"><span class="normal_text">Professional</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3" <?php echo set_checkbox('appearance[]', '3',in_array(3,$appearance)?true:false); ?> class="post_review_checkbox" name="appearance[]"><span class="normal_text">Athletic </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('appearance[]', '4',in_array(4,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Thin  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('appearance[]', '5',in_array(5,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Tall  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('appearance[]', '6',in_array(6,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Short </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('appearance[]', '7',in_array(7,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Regular  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('appearance[]', '8',in_array(8,$appearance)?true:false,in_array(1,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Over weight </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('appearance[]', '9',in_array(9,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Skin issue</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('appearance[]', '10',in_array(10,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Bad odor/Smelly </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('appearance[]', '11',in_array(11,$appearance)?true:false); ?> name="appearance[]"><span class="normal_text">Bad Hygiene</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 <?php if($your_review->review_parent_id ==0){ ?> 
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Ethnicity?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" <?php echo set_radio('ethnicity', '1',($ethnicity==1)?true:false); ?> name="ethnicity" id="ethnicity" value="1" >  <span class="normal_text">Caucasian </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '2',($ethnicity==2)?true:false); ?> name="ethnicity" id="ethnicity" value="2" > <span class="normal_text">Asian</span>
                        <input type="radio" <?php echo set_radio('ethnicity', '3',($ethnicity==3)?true:false); ?> name="ethnicity" id="ethnicity" value="3" > <span class="normal_text">Indian </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '4',($ethnicity==4)?true:false); ?> name="ethnicity" id="ethnicity" value="4" > <span class="normal_text">Pacific Islander </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '5',($ethnicity==5)?true:false); ?> name="ethnicity" id="ethnicity" value="5" > <span class="normal_text">Hispanic </span>
                        <input type="radio" <?php echo set_radio('ethnicity', '6',($ethnicity==6)?true:false); ?> name="ethnicity" id="ethnicity" value="6" > <span class="normal_text">Middle Eastern </span>
                    </div>
                </div> 
                 <?php }?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">GFE?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="gfe" id="gfe" value="y" <?php echo set_radio('gfe', 'y',($gfe=='y')?true:false); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="gfe" id="gfe" value="n" <?php echo set_radio('gfe', 'n',($gfe=='n')?true:false); ?> > <span class="normal_text">No</span>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Performance? </span><br>
                        <select id="performance" class="post-review-dropdown" name="performance">
                            <option value="">Select &nbsp;performance </option>
                            <option <?php echo set_select('performance', '1',($performance=='1')?true:false); ?> value="1">High energy </option>
                            <option <?php echo set_select('performance', '2',($performance=='2')?true:false); ?> value="2">Difficult Performing (ED) </option>
                            <option <?php echo set_select('performance', '3',($performance=='3')?true:false); ?> value="3">Quick </option>
                            <option <?php echo set_select('performance', '4',($performance=='4')?true:false); ?> value="4">MSOG </option>
                            <option <?php echo set_select('performance', '5',($performance=='5')?true:false); ?> value="5">Normal pace </option>
                            <option <?php echo set_select('performance', '6',($performance=='6')?true:false); ?> value="6">Took forever </option>
                        </select>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <span class="normal_text_label">Did the client write you a review?</span><br>
                    <div class="post_review_column_inner">                      
                       
                        <input type="radio" <?php echo set_radio('did_client_write_you_review', 'y',($did_client_write_you_review=='y')?true:false); ?> name="did_client_write_you_review" id="did_client_write_you_review" value="y" >  <span class="normal_text">Yes</span>
                        <input type="radio" <?php echo set_radio('did_client_write_you_review', 'n',($did_client_write_you_review=='n')?true:false); ?> name="did_client_write_you_review" id="did_client_write_you_review" value="n" > <span class="normal_text">No</span>
                    
                    </div>
                </div> 
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Which review site? </span><br>
                    <div class="post_review_column_inner">
                        <input type="radio" name="which_review_website" class="which_review_website" value="1"  <?php echo set_radio('which_review_website', '1',($which_review_website=='1')?true:false); ?> > <span class="normal_text">TER </span>
                        <input type="radio" name="which_review_website" class="which_review_website" value="2"  <?php echo set_radio('which_review_website', '2',($which_review_website=='2')?true:false); ?> > <span class="normal_text">Adultfax </span>
                        <input type="radio" name="which_review_website" class="which_review_website" value="3"  <?php echo set_radio('which_review_website', '3',($which_review_website=='3')?true:false); ?> > <span class="normal_text">ECCIE </span>
                        <input type="radio" name="which_review_website" class="which_review_website" value="4"  <?php echo set_radio('which_review_website', '4',($which_review_website=='4')?true:false); ?> > <span class="normal_text">TNA </span>
                        <input type="radio" name="which_review_website" class="which_review_website other_review_text" value="5"  <?php echo set_radio('which_review_website', '5',($which_review_website=='5')?true:false); ?> > <span class="normal_text">Other</span>
                        <input type="text" placeholder="Other site" style="display:none;" name="which_review_website_other" id="which_review_website_other" value="<?php echo $which_review_website_other; ?>" > 
                    
                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Rate the review client provided? </span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('rate_review_client_provided[]', '1',in_array(1,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Great  </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="2"  <?php echo set_checkbox('rate_review_client_provided[]', '2',in_array(2,$rate_review_client_provided)?true:false); ?> class="post_review_checkbox" name="rate_review_client_provided[]"><span class="normal_text">Good </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" value="3"  <?php echo set_checkbox('rate_review_client_provided[]', '3',in_array(3,$rate_review_client_provided)?true:false); ?> class="post_review_checkbox" name="rate_review_client_provided[]"><span class="normal_text">Acceptable  </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4"  <?php echo set_checkbox('rate_review_client_provided[]', '4',in_array(4,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Not good/Not Bad </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5"  <?php echo set_checkbox('rate_review_client_provided[]', '5',in_array(5,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Unhappy w/ review,  low ratings  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6"  <?php echo set_checkbox('rate_review_client_provided[]', '6',in_array(6,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Criticle  </span> </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input type="checkbox" class="post_review_checkbox" value="7"  <?php echo set_checkbox('rate_review_client_provided[]', '7',in_array(7,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">False information  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8"  <?php echo set_checkbox('rate_review_client_provided[]', '8',in_array(8,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Did not see but, wrote a review </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9"  <?php echo set_checkbox('rate_review_client_provided[]', '9',in_array(9,$rate_review_client_provided)?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Bad review</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <span class="normal_text_label">Would you like to blacklist this client ?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="blacklist_client" id="blacklist_client" value="y"  <?php echo set_radio('blacklist_client', 'y',($blacklist_client=='y')?true:false); ?>  >  <span class="normal_text">Yes</span>
                        <input type="radio" name="blacklist_client" id="blacklist_client" value="n"  <?php echo set_radio('blacklist_client', 'n',($blacklist_client=='n')?true:false); ?>  > <span class="normal_text">No</span>
                    </div>
                </div>
                <div class="post-reviw-column1">
                    <div class="column_inner">
                        <span class="normal_text_label">Comments(50 words or less) </span><br>
                        <?php echo form_error('review_desc','<div class="required_class">','</div>'); ?>
                        <textarea placeholder="Enter review text here" cols="3" rows="3" class="review_detail" name="review_desc"> <?php echo $review_desc; ?></textarea>
                    </div>
                </div>
                
                <span class="submit_button_contact">
                    <input name="submit" type="submit" value="Update" class="submit_button" /> 
                    </span>
               <?php if($your_review->review_parent_id ==0){ ?>
                <span class="submit_button_contact1">
                    <a class="submit_button_link" href="<?php echo base_url().'post_review/related_reviews/'.encodeWithCodeigniter($review_id); ?>">Add Additional Related Review</a>
                </span>
               <?php } ?>
                <span class="submit_button_contact1">
                    <button class="submit_button_link" onclick="window.history.go(-1);">Back</button>
                </span>
                
            </form>
        </section>
    </div>  
    <div class="clear"></div>       
</section>

<script src="<?php echo base_url(); ?>theme/js/edit_post_review.js"></script>
<script>
//var $ = $.noConflict();   
$(document).ready(function(){
    
    $("#create_review_form").validate({
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