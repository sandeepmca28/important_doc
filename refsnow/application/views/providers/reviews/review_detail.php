<section id="main-container">
    
    <div id="content_left">
        
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000002477442Large-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-24508071-sexy-woman-lying-on-bed-using-cell-phone-min.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-3583060-girl-on-the-bed-with-notebook-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-22951734-young-woman-in-underwear-reading-sms-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
           
    </div>

    <div id="content_right">
        
       
        
         <section <?php if($this->session->flashdata('message_class')=='success') { ?>  style="display:none;" <?php }?> class="form_container">
            <form method="post">

                <div class="form_title"> <h1>Review Detail</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
               
                <?php if(!empty($your_reviews->first_name)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">First Name? </span><br> 
                        <?php echo form_error('first_name', '<div class="required_class">', '</div>'); ?>
                        <input disabled="disabled" type="text" placeholder="First name" class="date_of_meeting" value="<?php echo $your_reviews->first_name; ?>" name="first_name" id="first_name" />
                        <span class="required_field">*</span>
                    </div>
                </div>
               <?php } ?>
                <?php if(!empty($your_reviews->last_name)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Last Name? </span><br>
                        <?php echo form_error('last_name', '<div class="required_class">', '</div>'); ?>
                        <input disabled="disabled" type="text" placeholder="Last name" class="date_of_meeting" value="<?php echo $your_reviews->last_name; ?>" name="last_name" id="last_name" />
                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($your_reviews->client_first_email)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Email's? </span><br> 
                        <?php echo form_error('client_first_email', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_second_email', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_third_email', '<div class="required_class">', '</div>'); ?>
                        
                        <input disabled="disabled" type="text" placeholder="First email" class="date_of_meeting" value="<?php echo $your_reviews->client_first_email; ?>" name="client_first_email" id="client_first_email" /> <span class="required_field">*</span>
                        
                        <?php if(!empty($your_reviews->client_second_email)){ ?>
                        <input disabled="disabled" type="text" placeholder="Second email" class="date_of_meeting" value="<?php echo $your_reviews->client_second_email; ?>" name="client_second_email" id="client_second_email" />
                        <?php }?>
                        <?php if(!empty($your_reviews->client_third_email)){ ?>
                        <input disabled="disabled" type="text" placeholder="Third email" class="date_of_meeting" value="<?php echo $your_reviews->client_third_email ?>" name="client_third_email" id="client_third_email" />
                        <?php }?>
                        
                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($your_reviews->client_first_phone)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Phone number? </span><br>
                        <?php echo form_error('client_first_phone', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_second_phone', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_third_phone', '<div class="required_class">', '</div>'); ?>
                        <input disabled="disabled" type="text" placeholder="First phone number" class="date_of_meeting"  value="<?php echo $your_reviews->client_first_phone; ?>" name="client_first_phone" id="client_first_phone" />
                        <?php if(!empty($your_reviews->client_second_phone)){ ?>
                        <input disabled="disabled" type="text" placeholder="Second phone number" class="date_of_meeting" value="<?php echo $your_reviews->client_second_phone; ?>" name="client_second_phone" id="client_second_phone" />
                        <?php }?>
                        <?php if(!empty($your_reviews->client_third_phone)){ ?>
                        <input disabled="disabled" type="text" placeholder="Third phone number" class="date_of_meeting"  value="<?php echo $your_reviews->client_third_phone; ?>" name="client_third_phone" id="client_third_phone" />
                        <?php }?>
                    </div>
                </div>
                 <?php } ?>
                <?php if(!empty($your_reviews->client_country)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        
                        <span class="normal_text_label"> Residence City, State ? </span><br>                                         
                        <?php echo form_error('client_residence', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_city','<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_state','<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_country','<div class="required_class">', '</div>'); ?>
                       
                        <select disabled="disabled" id="client_country" class="post-review-dropdown dropdown-top-margin" name="client_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('client_country',$value->id ,(($value->id == $your_reviews->client_country) ? true:false)) ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        
                        <select disabled="disabled" id="client_state" data-stateid="<?php echo $your_reviews->client_state; ?>" class="post-review-dropdown dropdown-top-margin" name="client_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        
                        <input disabled="disabled" type="text" placeholder="City" class="date_of_meeting dropdown-top-margin" value="<?php echo $your_reviews->client_city; ?>" name="client_city" id="client_city" /> <span class="required_field">*</span>
                        <input disabled="disabled" type="text" placeholder="Residence" class="date_of_meeting" value="<?php echo $your_reviews->client_residence; ?>" name="client_residence" id="client_residence" /> <span class="required_field">*</span>
                        
                    </div>
                </div>
                  <?php } ?>
                <?php  if(!empty($your_reviews->client_ter_handle)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> TER Handle? </span><br>                                         
                        <input disabled="disabled" type="text" placeholder="TER Handle" class="date_of_meeting" value="<?php echo $your_reviews->client_ter_handle; ?>" name="client_ter_handle" id="client_ter_handle" />
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->client_pf411_handle)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> PF411 Handle? </span><br>                                         
                        <input  disabled="disabled" type="text" placeholder="PF411 Handle" class="date_of_meeting" value="<?php echo $your_reviews->client_pf411_handle; ?>" name="client_pf411_handle" id="client_pf411_handle" />
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->client_datecheck_handle)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> DateCheck Handle? </span><br>                                         
                        <input disabled="disabled" type="text" placeholder="DateCheck Handle" class="date_of_meeting" value="<?php echo $your_reviews->client_datecheck_handle; ?>" name="client_datecheck_handle" id="client_datecheck_handle" />
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->client_eccie_handle)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> ECCIE Handle? </span><br>                                         
                        <input disabled="disabled" type="text" placeholder="ECCIE Handle" class="date_of_meeting" value="<?php echo $your_reviews->client_eccie_handle; ?>" name="client_eccie_handle" id="client_eccie_handle" />
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->client_member_of_rsk2)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Member of RSK2? </span><br>                                         
                        <input disabled="disabled" type="radio" name="client_member_of_rsk2" id="client_member_of_rsk2"  <?php echo set_radio('client_member_of_rsk2', 'y',(($your_reviews->client_member_of_rsk2=='y') ? true:false)); ?> value="y" >  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" name="client_member_of_rsk2" id="client_member_of_rsk2" <?php echo set_radio('client_member_of_rsk2', 'n',(($your_reviews->client_member_of_rsk2=='n') ? true:false)); ?> value="n" > <span class="normal_text">No</span>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->client_member_of_rsk2)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Other__? </span><br>                                         
                        <input disabled="disabled" type="text" placeholder="Other" class="date_of_meeting"  value="<?php echo $your_reviews->client_other_handle; ?>" name="client_other_handle" id="client_other_handle" />
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->how_client_prefer_to_be_contacted)){ ?>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">How does the client prefer to be contacted? </span><br>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '1',in_array(1,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">All - email/text/call </span> </li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '2',in_array(2,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email/text </span> </span></li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '3',in_array(3,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email anytime </span> </span></li>

                        </ul> 

                        <ul class="checkbox_line_group">

                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '4',in_array(4,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Email but, be discreet  </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '5',in_array(5,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">No not email  </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '6',in_array(6,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Phone anytime  </span> </li>

                        </ul>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '7',in_array(7,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Phone anytime, leave voice mail  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '8',in_array(8,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do Not Call  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '9',in_array(9,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime </span>  </li>

                        </ul>
                        <ul class="checkbox_line_group">

                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '10',in_array(10,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime but, be discreet </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '11',in_array(11,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text with time limitations </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="12" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '12',in_array(12,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Text anytime </span>  </li>

                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="13" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '13',in_array(13,explode(',',$your_reviews->how_client_prefer_to_be_contacted)) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do not text </span> </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->date_of_meeting)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Date of meeting? </span><br>
                        <?php echo form_error('date_of_meeting', '<div class="required_class">', '</div>'); ?>

                        <input disabled="disabled" type="text" placeholder="Enter date of meeting" class="date_of_meeting" value="<?php echo $your_reviews->date_of_meeting; ?>" name="date_of_meeting" id="date_of_meeting" />
                    </div>
                </div>  
                <?php } ?>
                <?php  if(!empty($your_reviews->meeting_country)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">City/State where you met client?</span><br> 
                        <?php echo form_error('meeting_country', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('meeting_state', '<div class="required_class">', '</div>'); ?>
                        <select disabled="disabled" id="meeting_country" class="post-review-dropdown dropdown-top-margin" name="meeting_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('meeting_country', $value->id , ($value->id === $your_reviews->meeting_country)? true:false); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <select disabled="disabled" id="meeting_state" data-stateid="<?php echo $your_reviews->meeting_state; ?>" class="post-review-dropdown dropdown-top-margin" name="meeting_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        <input disabled="disabled" type="text" placeholder="Meeting city" class="date_of_meeting dropdown-top-margin" value="<?php echo $your_reviews->meeting_city; ?>" name="meeting_city" id="meeting_city" />
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->incall_outcall)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Incall or Outcall? </span><br>
                        <select disabled="disabled" id="incall_outcall" class="post-review-dropdown" name="incall_outcall">
                            <option value="">Select &nbsp;Incall or Outcall </option>
                            <option <?php echo set_select('incall_outcall', '1',($your_reviews->incall_outcall==1)?true:false); ?> value="1">Outcall - Residence </option>
                            <option <?php echo set_select('incall_outcall', '2',($your_reviews->incall_outcall==2)?true:false); ?> value="2">Outcall Hotel </option>
                            <option <?php echo set_select('incall_outcall', '3',($your_reviews->incall_outcall==3)?true:false); ?> value="3">Incall – Residence </option>
                            <option <?php echo set_select('incall_outcall', '4',($your_reviews->incall_outcall==4)?true:false); ?> value="4">Incall – Hotel </option>
                            <option <?php echo set_select('incall_outcall', '5',($your_reviews->incall_outcall==5)?true:false); ?> value="5">Other </option>
                            <option <?php echo set_select('incall_outcall', '6',($your_reviews->incall_outcall==6)?true:false); ?> value="6">where?___</option>
                        </select>
                    </div>
                </div> 
                <?php } ?>
                <?php  if(!empty($your_reviews->regular_client)){ ?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Regular client? </span><br>
                    <div class="post_review_column_inner">                      
                        <input disabled="disabled" type="radio" name="regular_client" id="regular_client" value="y" <?php echo set_radio('regular_client', 'y',($your_reviews->regular_client=== 'y')?true:false); ?> >  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" name="regular_client" id="regular_client" value="n" <?php echo set_radio('regular_client', 'n',($your_reviews->regular_client=== 'n')?true:false); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 
                <?php } ?>
                <?php  if(!empty($your_reviews->rateing_experince)){ ?>
                <div class="post-reviw-column3">                 

                    <span class="normal_text_label">Rate the experience for clients? </span><br>
                    <?php echo form_error('rateing_experince', '<div class="required_class">', '</div>'); ?>
                    <div class="post_review_column_inner">
                        <div  class="basic" data-average="<?php echo $your_reviews->rateing_experince; ?>" data-id="1"></div>  
                        <input disabled="disabled" type="hidden" id="rateing_experince" value="<?php echo $your_reviews->rateing_experince; ?>" name="rateing_experince" />
                    </div>
                </div> 
                <?php } ?>
                <?php  if(!empty($your_reviews->meet_again_client)){ ?>
                <div class="post-reviw-column3">                   

                    <span class="normal_text_label">Would you meet with client again?</span><br>
                    <div class="post_review_column_inner">                      
                        <?php echo form_error('meet_again_client', '<div class="required_class">', '</div>'); ?>

                        <input disabled="disabled" type="radio" name="meet_again_client" id="meet_again_client" value="y" <?php echo set_radio('meet_again_client', 'y',($your_reviews->meet_again_client=== 'y')?true:false); ?> >  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" name="meet_again_client" id="meet_again_client" value="n" <?php echo set_radio('meet_again_client', 'n',($your_reviews->meet_again_client=== 'n')?true:false); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 
                <?php } ?>
                <?php  if(!empty($your_reviews->shedule)){ ?>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Schedule? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('shedule[]','1',in_array(1,explode(',',$your_reviews->shedule))?true:false); ?> name="shedule[]"><span class="normal_text">Early </span> </li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="2" <?php echo set_checkbox('shedule[]','2',in_array(2,explode(',',$your_reviews->shedule))?true:false); ?> class="post_review_checkbox" name="shedule[]"><span class="normal_text">On Time </span> </span></li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="3" <?php echo set_checkbox('shedule[]','3',in_array(3,explode(',',$your_reviews->shedule))?true:false); ?> class="post_review_checkbox" name="shedule[]"><span class="normal_text">Late with notice </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox"  class="post_review_checkbox" value="4" <?php echo set_checkbox('shedule[]','4',in_array(4,explode(',',$your_reviews->shedule))?true:false); ?> name="shedule[]"><span class="normal_text">Late with w/o notice </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('shedule[]', '5',in_array(5,explode(',',$your_reviews->shedule))?true:false); ?> name="shedule[]"><span class="normal_text"> Cancelled w/ notice </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('shedule[]', '6',in_array(6,explode(',',$your_reviews->shedule))?true:false); ?> name="shedule[]"><span class="normal_text">Rescheduled as promised </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('shedule[]','7',in_array(7,explode(',',$your_reviews->shedule))?true:false); ?> name="shedule[]"><span class="normal_text"> No Show/ No Call </span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->type_of_date)){ ?>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        
                        <span class="normal_text_label">Type of date? </span><br>
                        <select disabled="disabled" id="type_of_date" class="post-review-dropdown"  name="type_of_date">
                            <option value="">Select &nbsp; Type of date </option>
                            <option <?php echo set_select('type_of_date', '1',($your_reviews->type_of_date==1)?true:false); ?> value="1">Single </option>
                            <option <?php echo set_select('type_of_date', '2',($your_reviews->type_of_date==2)?true:false); ?> value="2">Single w/ Drinks in room </option>
                            <option <?php echo set_select('type_of_date', '3',($your_reviews->type_of_date==3)?true:false); ?> value="3">Single w/ Drinks in public </option>
                            <option <?php echo set_select('type_of_date', '4',($your_reviews->type_of_date==4)?true:false); ?> value="4">Single w/ Dinner in room </option>
                            <option <?php echo set_select('type_of_date', '5',($your_reviews->type_of_date==5)?true:false); ?> value="5">Single w/ Dinner in Public </option>
                            <option <?php echo set_select('type_of_date', '6',($your_reviews->type_of_date==6)?true:false); ?> value="6">Single - Fantasy (fetish) </option>
                            <option <?php echo set_select('type_of_date', '7',($your_reviews->type_of_date==7)?true:false); ?> value="7">Double </option>
                            <option <?php echo set_select('type_of_date', '8',($your_reviews->type_of_date==8)?true:false); ?> value="8">Double w/ Drinks in room </option>
                            <option <?php echo set_select('type_of_date', '9',($your_reviews->type_of_date==9)?true:false); ?> value="9">Double w/ Drinks in public </option>
                            <option <?php echo set_select('type_of_date', '10',($your_reviews->type_of_date==10)?true:false); ?> value="10">Double -  Fantasy (fetish) </option>
                            <option <?php echo set_select('type_of_date', '11',($your_reviews->type_of_date==11)?true:false); ?> value="11">Dom - light </option>
                            <option <?php echo set_select('type_of_date', '12',($your_reviews->type_of_date==12)?true:false); ?> value="12">Dom - heavy</option>
                        </select>
                        
                    </div>
                    
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->length_of_date)){ ?>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Length of date? </span><br>

                        <select disabled="disabled" id="length_of_date" class="post-review-dropdown" name="length_of_date">
                            <option value="">Select &nbsp;/Length of date </option>
                            <option <?php echo set_select('length_of_date','1',($your_reviews->length_of_date==1)?true:false); ?> value="1">1 hr </option>
                            <option <?php echo set_select('length_of_date','2',($your_reviews->length_of_date==2)?true:false); ?> value="2">90 mins </option>
                            <option <?php echo set_select('length_of_date','3',($your_reviews->length_of_date==3)?true:false); ?> value="3">2 hrs  </option>
                            <option <?php echo set_select('length_of_date','4',($your_reviews->length_of_date==4)?true:false); ?> value="4">3 hrs </option>
                            <option <?php echo set_select('length_of_date','5',($your_reviews->length_of_date==5)?true:false); ?> value="5">4 hrs </option>
                            <option <?php echo set_select('length_of_date','6',($your_reviews->length_of_date==6)?true:false); ?> value="6">5 hrs </option>
                            <option <?php echo set_select('length_of_date','7',($your_reviews->length_of_date==7)?true:false); ?> value="7">6 hrs or more  </option>
                            <option <?php echo set_select('length_of_date','8',($your_reviews->length_of_date==8)?true:false); ?> value="8">overnight </option>
                            <option <?php echo set_select('length_of_date','9',($your_reviews->length_of_date==9)?true:false); ?> value="9">weekend </option>
                            <option <?php echo set_select('length_of_date','10',($your_reviews->length_of_date==10)?true:false); ?> value="10">vacation - in state </option>
                            <option <?php echo set_select('length_of_date','11',($your_reviews->length_of_date==11)?true:false); ?> value="11">vacation - out of state </option>
                            <option <?php echo set_select('length_of_date','12',($your_reviews->length_of_date==12)?true:false); ?> value="12">vacation - out of country</option>
                        </select>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->did_he_tip)){ ?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Did he Tip?</span><br>
                    <div class="post_review_column_inner">                      
                        <input disabled="disabled" type="radio" name="did_he_tip" id="did_he_tip" value="y" <?php echo set_radio('did_he_tip', 'y',($your_reviews->did_he_tip=='y')?true:false); ?>>  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" name="did_he_tip" id="did_he_tip" value="n" <?php echo set_radio('did_he_tip', 'n',($your_reviews->did_he_tip=='n')?true:false); ?>> <span class="normal_text">No</span>
                    </div>
                </div> 
                 <?php } ?>
                <?php  if(!empty($your_reviews->your_date)){ ?>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Your Date? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('your_date[]','1',in_array(1,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Perfect Gentlemen </span> </li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="2" <?php echo set_checkbox('your_date[]','2',in_array(2,explode(',',$your_reviews->your_date))?true:false); ?>  class="post_review_checkbox" name="your_date[]"><span class="normal_text">Enjoyable & Fun  </span> </span></li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="3" <?php echo set_checkbox('your_date[]','3',in_array(3,explode(',',$your_reviews->your_date))?true:false); ?>  class="post_review_checkbox" name="your_date[]"><span class="normal_text">Respectful </span> </span></li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('your_date[]', '4',in_array(4,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Short & Sweet </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('your_date[]', '5',in_array(5,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Overstated his time w/o compensation </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('your_date[]', '6',in_array(6,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Extended time with compensation </span> </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('your_date[]', '7',in_array(7,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Would not see again but, safe </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('your_date[]', '8',in_array(8,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Didn’t have chemistry </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('your_date[]', '9',in_array(9,explode(',',$your_reviews->your_date))?true:false); ?>  name="your_date[]"><span class="normal_text">Difficult but, would see again </span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('your_date[]', '10',in_array(10,explode(',',$your_reviews->your_date))?true:false); ?> name="your_date[]"><span class="normal_text">Rough would recommend with strong boundaries </span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->personality)){ ?>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Personality? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('personality[]', '1',in_array(1,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Easy going  </span> </li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="2" <?php echo set_checkbox('personality[]', '2',in_array(2,explode(',',$your_reviews->personality))?true:false); ?> class="post_review_checkbox" name="personality[]"><span class="normal_text">Shy </span> </span></li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="3" <?php echo set_checkbox('personality[]', '3',in_array(3,explode(',',$your_reviews->personality))?true:false); ?> class="post_review_checkbox" name="personality[]"><span class="normal_text">Uptight </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('personality[]', '4',in_array(4,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Talkative </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('personality[]', '5',in_array(5,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Thoughtful </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('personality[]', '6',in_array(6,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Passionate </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('personality[]', '7',in_array(7,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Impatient </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('personality[]', '8',in_array(8,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Jerk </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('personality[]', '9',in_array(9,explode(',',$your_reviews->personality))?true:false); ?> name="personality[]"><span class="normal_text">Annoying </span>  </li>
                        </ul>

                        <div class="clear"></div>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->experience)){ ?>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Experience? </span><br>

                        <select disabled="disabled" id="experience" class="post-review-dropdown" name="experience">
                            <option value="">Select &nbsp;experience </option>
                            <option <?php echo set_select('experience', '1',($your_reviews->experience=='1')?true:false); ?> value="1 ">First Time  </option>
                            <option <?php echo set_select('experience', '2',($your_reviews->experience=='2')?true:false); ?> value="2">Newbie </option>
                            <option <?php echo set_select('experience', '3',($your_reviews->experience=='3')?true:false); ?> value="3">Once in awhile  </option>
                            <option <?php echo set_select('experience', '4',($your_reviews->experience=='4')?true:false); ?> value="4">Frequently </option>
                            <option <?php echo set_select('experience', '5',($your_reviews->experience=='5')?true:false); ?> value="5">Hobbyist </option>
                        </select>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->age)){ ?>
                <div class="post-reviw-column3">

                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Age? </span><br>

                        <select disabled="disabled" id="age" class="post-review-dropdown" name="age">
                            <option  value="">Select &nbsp;Age </option>
                            <option <?php echo set_select('age', '1',($your_reviews->age=='1')?true:false); ?> value="1">18-20 </option>
                            <option <?php echo set_select('age', '2',($your_reviews->age=='2')?true:false); ?> value="2">21-25 </option>
                            <option <?php echo set_select('age', '3',($your_reviews->age=='3')?true:false); ?> value="3">26-30 </option>
                            <option <?php echo set_select('age', '4',($your_reviews->age=='4')?true:false); ?> value="4">31-35 </option>
                            <option <?php echo set_select('age', '5',($your_reviews->age=='5')?true:false); ?> value="5">36-40 </option>
                            <option <?php echo set_select('age', '6',($your_reviews->age=='6')?true:false); ?> value="6">41-45 </option>
                            <option <?php echo set_select('age', '7',($your_reviews->age=='7')?true:false); ?> value="7">46-50 </option>
                            <option <?php echo set_select('age', '8',($your_reviews->age=='8')?true:false); ?> value="8">51-55 </option>
                            <option <?php echo set_select('age', '9',($your_reviews->age=='9')?true:false); ?> value="9">56-60 </option>
                            <option <?php echo set_select('age', '10',($your_reviews->age=='10')?true:false); ?> value="10">61-65 </option>
                            <option <?php echo set_select('age', '11',($your_reviews->age=='11')?true:false); ?> value="11">66-70 </option>
                            <option <?php echo set_select('age', '12',($your_reviews->age=='12')?true:false); ?> value="12">71-75 </option>
                            <option <?php echo set_select('age', '13',($your_reviews->age=='13')?true:false); ?> value="13">76-80 </option>
                            <option <?php echo set_select('age', '14',($your_reviews->age=='14')?true:false); ?> value="14">Over 81</option>
                        </select>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->appearance)){ ?>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Appearance? </span><br>

                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="1"  <?php echo set_checkbox('appearance[]', '1',in_array(1,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Handsome  </span> </li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="2" <?php echo set_checkbox('appearance[]', '2',in_array(2,explode(',',$your_reviews->appearance))?true:false); ?> class="post_review_checkbox" name="appearance[]"><span class="normal_text">Professional</span> </span></li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="3" <?php echo set_checkbox('appearance[]', '3',in_array(3,explode(',',$your_reviews->appearance))?true:false); ?> class="post_review_checkbox" name="appearance[]"><span class="normal_text">Athletic </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('appearance[]', '4',in_array(4,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Thin  </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('appearance[]', '5',in_array(5,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Tall  </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('appearance[]', '6',in_array(6,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Short </span> </li>
                        </ul>

                        <ul class="checkbox_line_group">                         
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('appearance[]', '7',in_array(7,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Regular  </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('appearance[]', '8',in_array(8,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Over weight </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('appearance[]', '9',in_array(9,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Skin issue</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('appearance[]', '10',in_array(10,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Bad odor/Smelly </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('appearance[]', '11',in_array(11,explode(',',$your_reviews->appearance))?true:false); ?> name="appearance[]"><span class="normal_text">Bad Hygiene</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php } ?>
                <?php  if(!empty($your_reviews->ethnicity)){ ?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Ethnicity?</span><br>
                    <div class="post_review_column_inner">                      
                        <input disabled="disabled" type="radio" <?php echo set_radio('ethnicity', '1',($your_reviews->ethnicity==1)?true:false); ?> name="ethnicity" id="ethnicity" value="1" >  <span class="normal_text">Caucasian </span>
                        <input disabled="disabled" type="radio" <?php echo set_radio('ethnicity', '2',($your_reviews->ethnicity==2)?true:false); ?> name="ethnicity" id="ethnicity" value="2" > <span class="normal_text">Asian</span>
                        <input disabled="disabled" type="radio" <?php echo set_radio('ethnicity', '3',($your_reviews->ethnicity==3)?true:false); ?> name="ethnicity" id="ethnicity" value="3" > <span class="normal_text">Indian </span>
                        <input disabled="disabled" type="radio" <?php echo set_radio('ethnicity', '4',($your_reviews->ethnicity==4)?true:false); ?> name="ethnicity" id="ethnicity" value="4" > <span class="normal_text">Pacific Islander </span>
                        <input disabled="disabled" type="radio" <?php echo set_radio('ethnicity', '5',($your_reviews->ethnicity==5)?true:false); ?> name="ethnicity" id="ethnicity" value="5" > <span class="normal_text">Hispanic </span>
                        <input disabled="disabled" type="radio" <?php echo set_radio('ethnicity', '6',($your_reviews->ethnicity==6)?true:false); ?> name="ethnicity" id="ethnicity" value="6" > <span class="normal_text">Middle Eastern </span>
                    </div>
                </div> 
                 <?php } ?>
                <?php  if(!empty($your_reviews->gfe)){ ?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">GFE?</span><br>
                    <div class="post_review_column_inner">                      
                        <input disabled="disabled" type="radio" name="gfe" id="gfe" value="y" <?php echo set_radio('gfe', 'y',($your_reviews->gfe=='y')?true:false); ?> >  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" name="gfe" id="gfe" value="n" <?php echo set_radio('gfe', 'n',($your_reviews->gfe=='n')?true:false); ?> > <span class="normal_text">No</span>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->performance)){ ?>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Performance? </span><br>
                        <select disabled="disabled" id="performance" class="post-review-dropdown" name="performance">
                            <option value="">Select &nbsp;performance </option>
                            <option <?php echo set_select('performance', '1',($your_reviews->performance=='1')?true:false); ?> value="1">High energy </option>
                            <option <?php echo set_select('performance', '2',($your_reviews->performance=='2')?true:false); ?> value="2">Difficult Performing (ED) </option>
                            <option <?php echo set_select('performance', '3',($your_reviews->performance=='3')?true:false); ?> value="3">Quick </option>
                            <option <?php echo set_select('performance', '4',($your_reviews->performance=='4')?true:false); ?> value="4">MSOG </option>
                            <option <?php echo set_select('performance', '5',($your_reviews->performance=='5')?true:false); ?> value="5">Normal pace </option>
                            <option <?php echo set_select('performance', '6',($your_reviews->performance=='6')?true:false); ?> value="6">Took forever </option>
                        </select>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->did_client_write_you_review)){ ?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Did the client write you a review?</span><br>
                    <div class="post_review_column_inner">                      
                       
                        <input disabled="disabled" type="radio" <?php echo set_radio('did_client_write_you_review', 'y',($your_reviews->did_client_write_you_review=='y')?true:false); ?> name="did_client_write_you_review" id="did_client_write_you_review" value="y" >  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" <?php echo set_radio('did_client_write_you_review', 'n',($your_reviews->did_client_write_you_review=='n')?true:false); ?> name="did_client_write_you_review" id="did_client_write_you_review" value="n" > <span class="normal_text">No</span>
                    
                    </div>
                </div> 
                 <?php } ?>
                <?php  if(!empty($your_reviews->which_review_website)){ ?>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Which review site? </span><br>
                    <div class="post_review_column_inner">
                        <input disabled="disabled" type="radio" name="which_review_website" class="which_review_website" value="1"  <?php echo set_radio('which_review_website', '1',($your_reviews->which_review_website=='1')?true:false); ?> > <span class="normal_text">TER </span>
                        <input disabled="disabled" type="radio" name="which_review_website" class="which_review_website" value="2"  <?php echo set_radio('which_review_website', '2',($your_reviews->which_review_website=='2')?true:false); ?> > <span class="normal_text">Adultfax </span>
                        <input disabled="disabled" type="radio" name="which_review_website" class="which_review_website" value="3"  <?php echo set_radio('which_review_website', '3',($your_reviews->which_review_website=='3')?true:false); ?> > <span class="normal_text">ECCIE </span>
                        <input  disabled="disabled" type="radio" name="which_review_website" class="which_review_website" value="4"  <?php echo set_radio('which_review_website', '4',($your_reviews->which_review_website=='4')?true:false); ?> > <span class="normal_text">TNA </span>
                        <input  disabled="disabled" type="radio" name="which_review_website" class="which_review_website other_review_text" value="5"  <?php echo set_radio('which_review_website', '5',($your_reviews->which_review_website=='5')?true:false); ?> > <span class="normal_text">Other</span>
                        <input disabled="disabled" type="text" placeholder="Other site" style="display:none;" name="which_review_website_other" id="which_review_website_other" value="<?php echo $your_reviews->which_review_website_other; ?>" > 
                    
                    </div>
                </div> 
                 <?php } ?>
                <?php  if(!empty($your_reviews->rate_review_client_provided)){ ?>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Rate the review client provided? </span><br>
                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('rate_review_client_provided[]', '1',in_array(1,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Great  </span> </li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="2"  <?php echo set_checkbox('rate_review_client_provided[]', '2',in_array(2,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> class="post_review_checkbox" name="rate_review_client_provided[]"><span class="normal_text">Good </span> </span></li>
                            <li><span class="label-checkbox-group"><input disabled="disabled" type="checkbox" value="3"  <?php echo set_checkbox('rate_review_client_provided[]', '3',in_array(3,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> class="post_review_checkbox" name="rate_review_client_provided[]"><span class="normal_text">Acceptable  </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="4"  <?php echo set_checkbox('rate_review_client_provided[]', '4',in_array(4,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Not good/Not Bad </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="5"  <?php echo set_checkbox('rate_review_client_provided[]', '5',in_array(5,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Unhappy w/ review,  low ratings  </span> </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="6"  <?php echo set_checkbox('rate_review_client_provided[]', '6',in_array(6,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Criticle  </span> </li>
                        </ul>
                        <ul class="checkbox_line_group">                         
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="7"  <?php echo set_checkbox('rate_review_client_provided[]', '7',in_array(7,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">False information  </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="8"  <?php echo set_checkbox('rate_review_client_provided[]', '8',in_array(8,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Did not see but, wrote a review </span>  </li>
                            <li><input disabled="disabled" type="checkbox" class="post_review_checkbox" value="9"  <?php echo set_checkbox('rate_review_client_provided[]', '9',in_array(9,explode(',',$your_reviews->rate_review_client_provided))?true:false); ?> name="rate_review_client_provided[]"><span class="normal_text">Bad review</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->blacklist_client)){ ?>
                 <div class="post-reviw-column3">
                    <span class="normal_text_label">Would you like to blacklist this client ?</span><br>
                    <div class="post_review_column_inner">                      
                        <input disabled="disabled" type="radio" name="blacklist_client" id="blacklist_client" value="y"  <?php echo set_radio('blacklist_client', 'y',($your_reviews->blacklist_client=='y')?true:false); ?>  >  <span class="normal_text">Yes</span>
                        <input disabled="disabled" type="radio" name="blacklist_client" id="blacklist_client" value="n"  <?php echo set_radio('blacklist_client', 'n',($your_reviews->blacklist_client=='n')?true:false); ?>  > <span class="normal_text">No</span>
                    </div>
                </div>
                 <?php } ?>
                <?php  if(!empty($your_reviews->review_desc)){ ?>
                <div class="post-reviw-column1">
                    <div class="column_inner">
                        <span class="normal_text_label">Comments(50 words or less) </span><br>
                        <?php echo form_error('review_desc','<div class="required_class">','</div>'); ?>
                        <textarea disabled="disabled" placeholder="Enter review text here" cols="3" rows="3" class="review_detail" name="review_desc"> <?php echo $your_reviews->review_desc; ?></textarea>
                    </div>
                </div>
                 <?php } ?>    
                <span class="submit_button_contact1">
                    <a class="submit_button_link" href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Back</a>
                </span>
                
            </form>
        </section>
    </div>  
    <div class="clear"></div>       
</section>
<link href="<?php echo base_url();?>theme/js/jquery-ui/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>theme/js/jquery-ui/external/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>theme/js/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.css" media="screen" />
<script >
$(".basic").jRating({
        bigStarsPath:baseUrl+"theme/js/jRating-master/jquery/icons/stars.png",
        phpPath : baseUrl+'theme/js/jRating-master/php/jRating.php',
        canRateAgain : true,
        nbRates : 100,
        isDisabled:true,
        decimalLength:0,
        onClick : function(element, rate,data){       
            $('#rateing_experince').val(rate);
        },
        onError : function(){
              jError('Error : please retry');
        }
    });
</script>