<section id="main-container">
    <div id="content_left">
        
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_2.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_1.jpg"/>
     
    </div>

    <div id="content_right">
        
        <section  class="form_container">
            <form method="post">
                <div class="form_title"> <h1>Post  Related Review (additional) </h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
               
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Email's? </span><br> 
                        <?php echo form_error('client_first_email', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_second_email', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_third_email', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="First email" class="date_of_meeting" value="<?php echo set_value('client_first_email'); ?>" name="client_first_email" id="client_first_email"/>
                        <input type="text" placeholder="Second email" class="date_of_meeting" value="<?php echo set_value('client_second_email'); ?>" name="client_second_email" id="client_second_email"/>
                        <input type="text" placeholder="Third email" class="date_of_meeting" value="<?php echo set_value('client_third_email'); ?>" name="client_third_email" id="client_third_email"/>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Phone number? </span><br>
                        <?php echo form_error('client_first_phone', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_second_phone', '<div class="required_class">', '</div>'); ?>
                        <?php echo form_error('client_third_phone', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="First phone number" class="date_of_meeting"  value="<?php echo set_value('client_first_phone'); ?>" name="client_first_phone" id="client_first_phone" />
                        <input type="text" placeholder="Second phone number" class="date_of_meeting" value="<?php echo set_value('client_second_phone'); ?>" name="client_second_phone" id="client_second_phone" />
                        <input type="text" placeholder="Third phone number" class="date_of_meeting"  value="<?php echo set_value('client_third_phone'); ?>" name="client_third_phone" id="client_third_phone" />
                    </div>
                </div>
               

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Date of meeting? </span><br>
                        <?php echo form_error('date_of_meeting', '<div class="required_class">', '</div>'); ?>

                        <input type="text" placeholder="Enter date of meeting" class="date_of_meeting" value="<?php echo set_value('date_of_meeting'); ?>" name="date_of_meeting" id="date_of_meeting" />
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
                                <option <?php echo set_select('meeting_country', $value->id ); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <select id="meeting_state" class="post-review-dropdown dropdown-top-margin" name="meeting_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
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

                    <span class="normal_text_label">Rate the experience for clients? </span><span class="required_class">*</span><br>
                    <?php echo form_error('rateing_experince', '<div class="required_class">', '</div>'); ?>
                    <div class="post_review_column_inner">
                        <div class="basic" data-average="0" data-id="1"></div>  
                        <input type="hidden" id="rateing_experince" value="<?php echo set_value('rateing_experince'); ?>" name="rateing_experince" />
                    </div>
                </div> 

                <div class="post-reviw-column3">                   

                    <span class="normal_text_label">Would you meet with client again?</span><span class="required_class">*</span><br>
                    <div class="post_review_column_inner">                      
                        <?php echo form_error('meet_again_client', '<div class="required_class">', '</div>'); ?>

                        <input type="radio" name="meet_again_client" id="meet_again_client" value="y" <?php echo set_radio('meet_again_client', 'y'); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="meet_again_client" id="meet_again_client" value="n" <?php echo set_radio('meet_again_client', 'n'); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
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

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
                        <span class="normal_text_label">Your Date? </span><span class="required_class">*</span><br>

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
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
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

                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">

                        <?php // echo form_error('review_detail', '<div class="required_class">', '</div>');  ?>
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
                        <?php echo form_error('review_desc','<div class="required_class">','</div>'); ?>
                        <textarea placeholder="Enter review text here" cols="3" rows="3" class="review_detail" name="review_desc"> <?php echo set_value("review_desc"); ?></textarea>
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
<link href="<?php echo base_url();?>theme/js/jquery-ui/jquery-ui.css" rel="stylesheet">
<script src="<?php echo base_url();?>theme/js/jquery-ui/external/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>theme/js/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme/js/jRating-master/jquery/jRating.jquery.css" media="screen" />
<script src="<?php echo base_url(); ?>theme/js/post_review.js"></script>