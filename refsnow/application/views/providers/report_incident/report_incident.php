
<section id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_2.jpg"/>
         <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
         <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
          
    </div>

    <div id="content_right">

        <section <?php if ($this->session->flashdata('message_class') == 'success')
                {
                   ?>  style="display:none;" <?php } ?> class="form_container">
            <form method="post">

                <div class="form_title"> <h1>Report An Incident</h1></div> 
                <div class="separator separator_provider_report_incident"></div>
                <p class="txt">Offender’s Information</p>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">

                        <span class="normal_text_label">Incident date? </span><br> 
                        <input type="text" placeholder="Enter incident date" class="date_of_meeting" value="<?php echo set_value('report_incident_date'); ?>" name="report_incident_date" id="report_incident_date" />
                        <span class="required_field">*</span>
                        <?php echo form_error('report_incident_date', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Incident country, state, city? </span><br> 
                        
                        
                        <select id="report_incident_country" class="post-review-dropdown dropdown-top-margin" name="report_incident_country">
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php
                                if ($report_incident_country == $value->id)
                                {
                                    echo "selected";
                                }
                                ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                    <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('report_incident_country', '<div class="required_class_1">', '</div>'); ?>
                      
                        <select id="report_incident_state" data-stateid="<?php echo $report_incident_state; ?>" class="post-review-dropdown dropdown-top-margin" name="report_incident_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                          <?php echo form_error('report_incident_state', '<div class="required_class_1">', '</div>'); ?>
                       
                        <input type="text" placeholder="Incident city" class="date_of_meeting dropdown-top-margin" value="<?php echo $report_incident_city; ?>" name="report_incident_city" id="report_incident_city" />
                         <?php echo form_error('report_incident_city', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">First Name? </span><br>
                        <input type="text" placeholder="First name" class="date_of_meeting" value="<?php echo $report_first_name; ?>" name="report_first_name" id="report_first_name" />
                        <span class="required_field">*</span>
                        <?php echo form_error('report_first_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Last Name? </span><br>
                        <input type="text" placeholder="Last name" class="date_of_meeting" value="<?php echo $report_last_name; ?>" name="report_last_name" id="report_last_name" />
                        <?php echo form_error('report_last_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Email's? </span><br> 
                        <input type="text" placeholder="First email" class="date_of_meeting" value="<?php echo $report_first_email; ?>" name="report_first_email" id="report_first_email" /> 
                        <span class="required_field">*</span>
                         <?php echo form_error('report_first_email', '<div class="required_class_1">', '</div>'); ?>
                         
                        <input type="text" placeholder="Second email" class="date_of_meeting" value="<?php echo $report_second_email; ?>" name="report_second_email" id="report_second_email" />
                        <?php echo form_error('report_second_email', '<div class="required_class_1">', '</div>'); ?>
                        
                        <input type="text" placeholder="Third email" class="date_of_meeting" value="<?php echo $report_third_email; ?>" name="report_third_email" id="report_third_email" />
                         <?php echo form_error('report_third_email', '<div class="required_class_1">', '</div>'); ?>
                       
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">

                        <span class="normal_text_label">Cell Phone? </span><br>
                        
                        <input type="text" placeholder="First phone number"  class="date_of_meeting"  value="<?php echo $report_first_phone; ?>" name="report_first_phone" id="report_first_phone" />
                        <?php echo form_error('report_first_phone', '<div class="required_class_1">', '</div>'); ?>
                        
                        <input type="text" placeholder="Second phone number" class="date_of_meeting"  value="<?php echo $report_second_phone; ?>" name="report_second_phone" id="report_second_phone" />
                        <?php echo form_error('report_second_phone', '<div class="required_class_1">', '</div>'); ?>
                        
                        <input type="text" placeholder="Third phone number"  class="date_of_meeting"  value="<?php echo $report_third_phone; ?>" name="report_third_phone" id="report_third_phone" />
                        <?php echo form_error('report_third_phone', '<div class="required_class_1">', '</div>'); ?>
                        
                    </div>
                </div>

                <div class="post-reviw-column3">

                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Residence Country, State, City ? </span><br>                                         
                        
                        <select id="report_residence_country"  class="post-review-dropdown dropdown-top-margin" name="report_residence_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                           
                            foreach ($countries as $key1 => $value1)
                            {
                                ?>
                                <option <?php
                                if($report_residence_country === $value1->id) { echo "selected"; }
                                ?>  value="<?php echo $value1->id; ?>" > <?php echo $value1->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('report_residence_country', '<div class="required_class_1">', '</div>'); ?>
                       
                        <select id="report_residence_state" data-stateid="<?php echo $report_residence_state; ?>"  class="post-review-dropdown dropdown-top-margin" name="report_residence_state">
                            <option value="">Select &nbsp; State </option>
                        </select><br>
                         <?php echo form_error('report_residence_state', '<div class="required_class_1">', '</div>'); ?>
                        
                        <input type="text" placeholder="Residence City" class="date_of_meeting dropdown-top-margin" value="<?php echo $report_residence_city; ?>" name="report_residence_city" id="report_residence_city" /> <span class="required_field">*</span>
                        <?php echo form_error('report_residence_city', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> TER Handle? </span><br>                                         
                        
                        <input type="text" placeholder="TER Handle" class="date_of_meeting" value="<?php echo $report_client_ter_handle; ?>" name="report_client_ter_handle" id="report_client_ter_handle" />
                         <?php echo form_error('report_client_ter_handle', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> PF411 ID? </span><br> 
                         
                        <input type="text" placeholder="PF411 Handle" class="date_of_meeting" value="<?php echo $report_client_pf411_handle; ?>" name="report_client_pf411_handle" id="report_client_pf411_handle" />
                        <?php echo form_error('report_client_pf411_handle', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> DateCheck Handle? </span><br>
                        <?php echo form_error('report_client_datecheck_handle', '<div class="required_class_1">', '</div>'); ?>
                        <input type="text" placeholder="DateCheck Handle" class="date_of_meeting" value="<?php echo $report_client_datecheck_handle; ?>" name="report_client_datecheck_handle" id="report_client_datecheck_handle" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Member of RSK2? </span><br>
                        
                        <input type="radio" name="report_client_member_of_rsk2" id="report_client_member_of_rsk2"  <?php
                        if ($report_client_member_of_rsk2 == 'y')
                        {
                            echo "checked";
                        }
                        ?> value="y" >  <span class="normal_text">Yes</span>
                        <input type="radio" name="report_client_member_of_rsk2" id="report_client_member_of_rsk2"  <?php
                        if ($report_client_member_of_rsk2 == 'n')
                        {
                            echo "checked";
                        }
                        ?> value="n" > <span class="normal_text">No</span>
                        <?php echo form_error('report_client_member_of_rsk2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> ECCIE Handle? </span><br> 
                         
                        <input type="text" placeholder="ECCIE Handle" class="date_of_meeting" value="<?php echo $report_client_eccie_handle; ?>" name="report_client_eccie_handle" id="report_client_eccie_handle" />
                    <?php echo form_error('report_client_eccie_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label"> Other__? </span><br>     
                        
                        <input type="text" placeholder="Other" class="date_of_meeting"  value="<?php echo $report_client_other_handle; ?>" name="report_client_other_handle" id="report_client_other_handle" />
                         <?php echo form_error('report_client_other_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div><br><br>

                <p class="txt">Reasons ?</p>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span style="color:#FF0000" class="normal_text_label">Level III (Severe) </span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('level3[]', '1'); ?> name="level3[]"><span class="normal_text">Dangerous </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('level3[]', '2'); ?> name="level3[]"><span class="normal_text">Rob </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('level3[]', '3'); ?> name="level3[]"><span class="normal_text">Rape </span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('level3[]', '4'); ?> name="level3[]"><span class="normal_text">Physical abuse</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('level3[]', '5'); ?> name="level3[]"><span class="normal_text">Stalker</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('level3[]', '6'); ?> name="level3[]"><span class="normal_text">Rough wouldn’t recommend</span> </li>
                        </ul>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('level3[]', '7'); ?> name="level3[]"><span class="normal_text">Law enforcement</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('level3[]', '8'); ?> name="level3[]"><span class="normal_text">Aggressive</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('level3[]', '9'); ?> name="level3[]"><span class="normal_text">Rip off</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('level3[]', '10'); ?> name="level3[]"><span class="normal_text">Play, No Pay</span>  </li>
                        </ul>
                       
                        <div class="clear"></div>
                    </div>
                </div>
                 <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span style="color:#FF9900" class="normal_text_label">Level II (High)</span><br>

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('level2[]', '1'); ?> name="level2[]"><span class="normal_text">Threatens You </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('level2[]', '2'); ?> name="level2[]"><span class="normal_text">Not to be trusted </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('level2[]', '3'); ?> name="level2[]"><span class="normal_text">No Show </span> </span></li>

                        </ul> 

                        <ul class="checkbox_line_group">

                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('level2[]', '4'); ?> name="level2[]"><span class="normal_text">Unsafe Practices</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('level2[]', '5'); ?> name="level2[]"><span class="normal_text">Boundary Crosser</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('level2[]', '6'); ?> name="level2[]"><span class="normal_text">Difficult wouldn’t not see again</span> </li>

                        </ul>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('level2[]', '7'); ?> name="level2[]"><span class="normal_text">Filmed or Photographed w/o permission</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('level2[]', '8'); ?> name="level2[]"><span class="normal_text">Substance abuse (alcohol)</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('level2[]', '9'); ?> name="level2[]"><span class="normal_text">Rip off</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('level2[]', '10'); ?> name="level2[]"><span class="normal_text">Substance abuse (drugs)</span>  </li>
                        </ul>
                       
                        <div class="clear"></div>
                    </div>
                </div>
                    <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span style="color:#FFFF00" class="normal_text_label">Level I (Caution)</span><br>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('level1[]', '1'); ?> name="level1[]"><span class="normal_text">Flake</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('level1[]', '2'); ?> name="level1[]"><span class="normal_text">Creepy</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('level1[]', '3'); ?> name="level1[]"><span class="normal_text">Pimp</span> </span></li>
                        </ul> 

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('level1[]', '4'); ?> name="level1[]"><span class="normal_text">Emotionally Unstable</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('level1[]', '5'); ?> name="level1[]"><span class="normal_text">Doesn’t understand NO!</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('level1[]', '6'); ?> name="level1[]"><span class="normal_text">Uncooperative with Screening</span> </li>
                         </ul>

                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('level1[]', '7'); ?> name="level1[]"><span class="normal_text">Prank Caller</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('level1[]', '8'); ?> name="level1[]"><span class="normal_text">False References</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('level1[]', '9'); ?> name="level1[]"><span class="normal_text">Short Pay</span>  </li>
                        </ul>
                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('level1[]', '10'); ?> name="level1[]"><span class="normal_text">Cancels last minute</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('level1[]', '11'); ?> name="level1[]"><span class="normal_text">Practical Joker</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="12" <?php echo set_checkbox('level1[]', '12'); ?> name="level1[]"><span class="normal_text">Cheap-Haggler</span>  </li>
                        </ul>
                       <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="13" <?php echo set_checkbox('level1[]', '13'); ?> name="level1[]"><span class="normal_text">Harassment</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="14" <?php echo set_checkbox('level1[]', '14'); ?> name="level1[]"><span class="normal_text">Nuisance</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="15" <?php echo set_checkbox('level1[]', '15'); ?> name="level1[]"><span class="normal_text">Scammer</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="16" <?php echo set_checkbox('level1[]', '16'); ?> name="level1[]"><span class="normal_text">Rude-Disrespectful</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="17" <?php echo set_checkbox('level1[]', '17'); ?> name="level1[]"><span class="normal_text">Suspicious</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="18" <?php echo set_checkbox('level1[]', '18'); ?> name="level1[]"><span class="normal_text">Time Waster</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="19" <?php echo set_checkbox('level1[]', '19'); ?> name="level1[]"><span class="normal_text">Late without notice</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="20" <?php echo set_checkbox('level1[]', '20'); ?> name="level1[]"><span class="normal_text">Cancelled last minute</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="21" <?php echo set_checkbox('level1[]', '21'); ?> name="level1[]"><span class="normal_text">Difficult to schedule</span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="22" <?php echo set_checkbox('level1[]', '22'); ?> name="level1[]"><span class="normal_text">Bad hygiene</span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="23" <?php echo set_checkbox('level1[]', '23'); ?> name="level1[]"><span class="normal_text">Weird</span>  </li>

                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="post-reviw-column1">
                    <div class="column_inner">
                        <span class="normal_text_label">Details(approx 3 paragraphs) </span><br>
                        <textarea placeholder="Enter review text here" cols="3" rows="3" class="review_detail" name="report_details"> <?php echo set_value("report_details"); ?></textarea>
                        <?php echo form_error('report_details','<div class="required_class_1">','</div>'); ?>
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
<script src="<?php echo base_url(); ?>theme/js/report_incident.js"></script>