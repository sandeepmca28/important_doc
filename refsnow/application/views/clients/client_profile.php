<section class="client-profile-page1" id="main-container">
        
        <div id="content_left">
            <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000024159767_Full-min.jpg"/>
            <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000020978459_Full RN-min.jpg" />
            <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000021989227_Large-min.jpg"/>
            <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000013785728XLarge-min.jpg"/>
        </div>

       <div id="content_right">
         <section  class="form_container">
             <form  enctype="multipart/form-data"  name="client_profile_form" id="client_profile_form" method="post">
                <div class="form_title"> <h1>Client Profile</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <label for="client_first_name" class="normal_text_label">First Name? </label><br> 
                        <input type="text" placeholder="First Name" class="date_of_meeting" value="<?php echo set_value('client_first_name', $client->client_first_name); ?>" name="client_first_name" id="client_first_name" />
                        <span class="required_field">*</span>
                         <?php echo form_error('client_first_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">                         
                        <label for="client_first_name" class="normal_text_label">Last Name? </label><br> 
                        <input type="text" placeholder="Last Name" class="date_of_meeting" value="<?php echo set_value('client_last_name', $client->client_last_name); ?>" name="client_last_name" id="client_last_name" />
                      
                        <?php echo form_error('client_last_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">                         
                        <label for="client_nic_name" class="normal_text_label">Nic name? </label><br> 
                        <input type="text" placeholder="Last Name" class="date_of_meeting" value="<?php echo set_value('client_nic_name', $client->client_nic_name); ?>" name="client_nic_name" id="client_nic_name" />
                        <?php echo form_error('client_nic_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
               
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">                         
                        <span class="normal_text_label">Email 2? </span><br>
                        <input type="text" placeholder="Email" class="date_of_meeting" value="<?php echo set_value('client_email2',$client->client_email2); ?>" name="client_email2" id="client_email2" />
                       
                        <?php echo form_error('client_email2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">                         
                        <span class="normal_text_label">Professional Email ? </span><br>
                        <input type="text" placeholder="Email" class="date_of_meeting" value="<?php echo set_value('client_proffessional_email',$client->client_proffessional_email); ?>" name="client_proffessional_email" id="client_proffessional_email" />
                      
                        <?php echo form_error('client_proffessional_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Phone? </span><br>                        
                        <?php 
                        if($client->client_phone==0)
                        {
                            $client_phone='';
                        }
                        else 
                        {
                            $client_phone= $client->client_phone;
                        }
                        ?>
                        <input type="text" placeholder="Phone" class="date_of_meeting" value="<?php echo set_value('client_phone',$client_phone); ?>" name="client_phone" id="client_phone" />
                        <?php echo form_error('client_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">                         
                        <span class="normal_text_label">Cell Phone? </span><br>                         
                        <input type="text" placeholder="Phone" class="date_of_meeting" value="<?php echo set_value('client_cell_phone', $client->client_cell_phone); ?>" name="client_cell_phone" id="client_cell_phone" />
                        <?php echo form_error('client_cell_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>  
                
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Country ? </span><br>                                         
                        <select id="client_residence_country" class="post-review-dropdown dropdown-top-margin" name="client_residence_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('client_residence_country', $value->id ,(($value->id == $client->client_residence_country) ? true:false)); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                         <?php echo form_error('client_residence_country','<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label"> State ? </span><br>                                         
                        <select data-stateid="<?php echo $client->client_residence_state; ?>" id="client_residence_state" class="post-review-dropdown dropdown-top-margin" name="client_residence_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                                         
                        <?php echo form_error('client_residence_state','<div class="required_class_1">', '</div>'); ?>
                        <input type="hidden" name="state_post_value"  id="state_post_value" value="<?php echo $this->input->post('client_residence_state'); ?>" />                                           
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label"> City ? </span><br>                                         
                        <input type="text" placeholder="City" class="date_of_meeting dropdown-top-margin" value="<?php echo set_value('client_residence_city',$client->client_residence_city); ?>" name="client_residence_city" id="client_residence_city" /> 
                        <?php echo form_error('client_residence_city','<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">TER Handle? </span><br>                         
                        <input type="text" placeholder="TER Handle" class="date_of_meeting" value="<?php echo set_value('client_ter_handle', $client->client_ter_handle); ?>" name="client_ter_handle" id="client_ter_handle" />
                        
                        <?php echo form_error('client_ter_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">                         
                        <span class="normal_text_label">DateCheck Handle? </span><br> 
                        <input type="text" placeholder="Date check Handle" class="date_of_meeting" value="<?php echo set_value('client_datecheck_handle',$client->client_datecheck_handle); ?>" name="client_datecheck_handle" id="client_datecheck_handle" />
                    
                        <?php echo form_error('client_datecheck_handle', '<div class="required_class_1">', '</div>'); ?> 
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">PF411 ID? </span><br>                        
                        <input type="text" placeholder="PF411 ID" class="date_of_meeting" value="<?php echo set_value('client_pf411_id',$client->client_pf411_id); ?>" name="client_pf411_id" id="client_pf411_id" />
                        <?php echo form_error('client_pf411_id', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">ECCIE Handle? </span><br> 
                        <input type="text" placeholder="ECCIE Handle" class="date_of_meeting" value="<?php echo set_value('client_eccie_handle',$client->client_eccie_handle); ?>" name="client_eccie_handle" id="client_eccie_handle" />
                        <?php echo form_error('client_eccie_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Other Handle? </span><br> 
                        <input type="text" placeholder="Other Handle" class="date_of_meeting" value="<?php echo set_value('client_other_handle',$client->client_other_handle); ?>" name="client_other_handle" id="client_other_handle" />
                        <?php echo form_error('client_other_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                 <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">How would you prefer to be contacted? </span>
                        <span class="required_field">*</span> <br>    
                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('how_would_prefer_contacted[]', '1',in_array(1,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">All - email/text/call </span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('how_would_prefer_contacted[]', '2',in_array(2,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Email/text </span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('how_would_prefer_contacted[]', '3',in_array(3,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Email/call </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('how_would_prefer_contacted[]', '4',in_array(4,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Email anytime</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('how_would_prefer_contacted[]', '5',in_array(5,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Email but, be discreet  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('how_would_prefer_contacted[]', '6',in_array(6,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Text with time limitations </span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                             <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('how_would_prefer_contacted[]', '7',in_array(7,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Phone Only </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('how_would_prefer_contacted[]', '8',in_array(8,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Phone anytime  </span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('how_would_prefer_contacted[]', '9',in_array(9,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Phone anytime, leave voice mail  </span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">                                                    
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('how_would_prefer_contacted[]', '10',in_array(10,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Phone anytime, do not leave voice mail  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11" <?php echo set_checkbox('how_would_prefer_contacted[]', '11',in_array(11,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Phone with limitations  </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="12" <?php echo set_checkbox('how_would_prefer_contacted[]', '12',in_array(12,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Do Not Call  </span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">                                                    
                            <li><input type="checkbox" class="post_review_checkbox" value="13" <?php echo set_checkbox('how_would_prefer_contacted[]', '13',in_array(13,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Text anytime </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="14" <?php echo set_checkbox('how_would_prefer_contacted[]', '14',in_array(14,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Text anytime but, be discreet </span>  </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="15" <?php echo set_checkbox('how_would_prefer_contacted[]', '15',in_array(15,$client->how_would_prefer_contacted) ? true :false); ?> name="how_would_prefer_contacted[]"><span class="normal_text">Text with time limitations </span>  </li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="16" <?php echo set_checkbox('how_client_prefer_to_be_contacted[]', '16',in_array(16,$client->how_would_prefer_contacted) ? true :false); ?> name="how_client_prefer_to_be_contacted[]"><span class="normal_text">Do not text </span> </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Special Instructions? </span><br> 
                        <input type="text" placeholder="Special instructions" class="date_of_meeting" value="<?php echo set_value('client_special_instructions',$client->client_special_instructions); ?>" name="client_special_instructions" id="client_special_instructions" />
                        <?php echo form_error('client_special_instructions', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Level of discretion ?</span><br> 
                        <select id="client_level_of_discretion" class="post-review-dropdown" name="client_level_of_discretion">
                            <option value="">Select &nbsp; </option>
                            <option <?php echo set_select('client_level_of_discretion', '1', ((1 == $client->client_level_of_discretion)? true:false)); ?> value="1">Very discreet </option>
                            <option <?php echo set_select('client_level_of_discretion', '2', ((2 == $client->client_level_of_discretion)? true:false)); ?> value="2">Moderate (with limitation)</option>
                            <option <?php echo set_select('client_level_of_discretion', '3', ((3 == $client->client_level_of_discretion)? true:false)); ?> value="3">No discretion needed</option>
                        </select>
                        <?php echo form_error('client_level_of_discretion', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Age? </span><br> 
                        <input type="text" placeholder="Age" class="date_of_meeting" value="<?php echo set_value('client_age',$client->client_age); ?>" name="client_age" id="client_age" />
                        <?php echo form_error('client_age', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Height? </span><br> 
                        <input type="text" placeholder="Height" class="date_of_meeting" value="<?php echo set_value('client_height',$client->client_height); ?>" name="client_height" id="client_height" />
                        <?php echo form_error('client_height', '<div class="required_class_1">','</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Weight? </span><br> 
                        <input type="text" placeholder="Weight" class="date_of_meeting" value="<?php echo set_value('client_weight',$client->client_weight); ?>" name="client_weight" id="client_weight" />
                        <?php echo form_error('client_weight','<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Ethnicity? </span><br> 
                        <select id="client_ethnicity" class="post-review-dropdown" name="client_ethnicity">
                            <option value="">Select &nbsp; </option>
                            <option <?php echo set_select('client_ethnicity', '1', ((1 == $client->client_ethnicity)? true:false)); ?> value="1">Caucasian</option>
                            <option <?php echo set_select('client_ethnicity', '2', ((2 == $client->client_ethnicity)? true:false)); ?> value="2">Asian</option>
                            <option <?php echo set_select('client_ethnicity', '3', ((3 == $client->client_ethnicity)? true:false)); ?> value="3">Pacific Islander</option>
                            <option <?php echo set_select('client_ethnicity', '4', ((4 == $client->client_ethnicity)? true:false)); ?> value="4">Hispanic</option>
                            <option <?php echo set_select('client_ethnicity', '5', ((5 == $client->client_ethnicity)? true:false)); ?> value="5">Middle Eastern</option>
                            <option <?php echo set_select('client_ethnicity', '6', ((6 == $client->client_ethnicity)? true:false)); ?> value="6">Mixed Race</option>
                            <option <?php echo set_select('client_ethnicity', '7', ((7 == $client->client_ethnicity)? true:false)); ?> value="7">African American</option>                            
                        </select>
                        <?php echo form_error('client_ethnicity', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>     
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Profession? </span><br> 
                        <select id="client_proffession" class="post-review-dropdown" name="client_proffession">
                            <option value="">Select &nbsp; </option>
                            <option <?php echo set_select('client_proffession', '1', (1 == $client->client_proffession)? true:false); ?> value="1">Finance/Accounting</option>
                            <option <?php echo set_select('client_proffession', '2', (2 == $client->client_proffession)? true:false); ?> value="2">Business/Management</option>
                            <option <?php echo set_select('client_proffession', '3', (3 == $client->client_proffession)? true:false); ?> value="3">Technology</option>
                            <option <?php echo set_select('client_proffession', '4', (4 == $client->client_proffession)? true:false); ?> value="4">Health Care </option>
                            <option <?php echo set_select('client_proffession', '5', (5 == $client->client_proffession)? true:false); ?> value="5">Legal</option>
                            <option <?php echo set_select('client_proffession', '6', (6 == $client->client_proffession)? true:false); ?> value="6">Engineering</option>
                            <option <?php echo set_select('client_proffession', '7', (7 == $client->client_proffession)? true:false); ?> value="7">Real Estate</option>                            
                            <option <?php echo set_select('client_proffession', '8', (8 == $client->client_proffession)? true:false); ?> value="8">Skilled Trade</option>                            
                            <option <?php echo set_select('client_proffession', '9', (9 == $client->client_proffession)? true:false); ?> value="9">BioTech</option>                            
                            <option <?php echo set_select('client_proffession', '10', (10 == $client->client_proffession)? true:false); ?> value="10">Goverment</option>                            
                            <option <?php echo set_select('client_proffession', '11', (11== $client->client_proffession)? true:false); ?> value="11">Entertainment</option>    
                            <option <?php echo set_select('client_proffession', '12', (12== $client->client_proffession)? true:false); ?> value="12">Retired</option>  
                            <option <?php echo set_select('client_proffession', '13', (13== $client->client_proffession)? true:false); ?> value="13">Sales/Marketing</option>  
                            
                        </select>
                        <?php echo form_error('client_proffession', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>     
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Other Profession? </span><br> 
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo set_value('client_proffession_other',$client->client_proffession_other); ?>" name="client_proffession_other" id="client_proffession_other" />
                        <?php echo form_error('client_proffession_other', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Do you prefer Incall or Outcall ? </span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('client_prefer_incall_outcall[]', '1',in_array(1,$client->client_prefer_incall_outcall) ? true :false); ?> name="client_prefer_incall_outcall[]"><span class="normal_text">Incall</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('client_prefer_incall_outcall[]', '2',in_array(2,$client->client_prefer_incall_outcall) ? true :false); ?> name="client_prefer_incall_outcall[]"><span class="normal_text">Incall or Outcall</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('client_prefer_incall_outcall[]', '3',in_array(3,$client->client_prefer_incall_outcall) ? true :false); ?> name="client_prefer_incall_outcall[]"><span class="normal_text">Outcall to Hotel</span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('client_prefer_incall_outcall[]', '4',in_array(4,$client->client_prefer_incall_outcall) ? true :false); ?> name="client_prefer_incall_outcall[]"><span class="normal_text">Outcall to Residence </span> </li>
                        </ul>                      
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Other Comment ? </span><br> 
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo set_value('client_prefer_incall_outcall_other',$client->client_prefer_incall_outcall_other); ?>" name="client_prefer_incall_outcall_other" id="client_prefer_incall_outcall_other" />
                        <?php echo form_error('client_prefer_incall_outcall_other', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Clothing preference for Providers?</span><br> 
                        <select id="client_clothing_preference" class="post-review-dropdown" name="client_clothing_preference">
                            <option value="">Select &nbsp; </option>
                            <option <?php echo set_select('client_clothing_preference', '1',($client->client_clothing_preference==1)?true:false); ?> value="1">Sexy Classy</option>
                            <option <?php echo set_select('client_clothing_preference', '2',($client->client_clothing_preference==2)?true:false); ?> value="2">Sexy (short skirt or dress)</option>
                            <option <?php echo set_select('client_clothing_preference', '3',($client->client_clothing_preference==3)?true:false); ?> value="3">Sexy underneath (Long coat over dress/skirt)</option>
                            <option <?php echo set_select('client_clothing_preference', '4',($client->client_clothing_preference==4)?true:false); ?> value="4">Business attire (classy/professional)</option>
                            <option <?php echo set_select('client_clothing_preference', '5',($client->client_clothing_preference==5)?true:false); ?> value="5">Business attire  (discreet)</option>
                            <option <?php echo set_select('client_clothing_preference', '6',($client->client_clothing_preference==6)?true:false); ?> value="6">Causal (jeans)</option>
                            <option <?php echo set_select('client_clothing_preference', '7',($client->client_clothing_preference==7)?true:false); ?> value="7">Girl next door</option>    
                            <option <?php echo set_select('client_clothing_preference', '8',($client->client_clothing_preference==8)?true:false); ?> value="8">No preference</option>                           
                        </select>
                        <?php echo form_error('client_clothing_preference', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>                
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Special instructions? </span><br> 
                        <input type="text" placeholder="Special instructions" class="date_of_meeting" value="<?php echo set_value('client_clothing_preference_instruction',$client->client_clothing_preference_instruction); ?>" name="client_clothing_preference_instruction" id="client_clothing_preference_instruction" />
                        <?php echo form_error('client_clothing_preference', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">What type of footwear do you prefer?</span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('client_what_type_of_footwear_prefer[]', '1',in_array(1,$client->client_what_type_of_footwear_prefer) ? true :false); ?> name="client_what_type_of_footwear_prefer[]"><span class="normal_text">Classy professional high heels</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('client_what_type_of_footwear_prefer[]', '2',in_array(2,$client->client_what_type_of_footwear_prefer) ? true :false); ?> name="client_what_type_of_footwear_prefer[]"><span class="normal_text">Sexy high heels</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('client_what_type_of_footwear_prefer[]', '3',in_array(3,$client->client_what_type_of_footwear_prefer) ? true :false); ?> name="client_what_type_of_footwear_prefer[]"><span class="normal_text">Boots </span> </span></li>
                        </ul> 
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('client_what_type_of_footwear_prefer[]', '4',in_array(4,$client->client_what_type_of_footwear_prefer) ? true :false); ?> name="client_what_type_of_footwear_prefer[]"><span class="normal_text">Low heels</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('client_what_type_of_footwear_prefer[]', '5',in_array(5,$client->client_what_type_of_footwear_prefer) ? true :false); ?> name="client_what_type_of_footwear_prefer[]"><span class="normal_text">Flats</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('client_what_type_of_footwear_prefer[]', '6',in_array(6,$client->client_what_type_of_footwear_prefer) ? true :false); ?> name="client_what_type_of_footwear_prefer[]"><span class="normal_text">No preference</span>  </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <span class="normal_text_label">Would you like for the provider to wear scented lotions or perfumes?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="client_cented_lotion_perfume" id="client_cented_lotion_perfume" value="y" <?php echo set_radio('client_cented_lotion_perfume', 'y',(($client->client_cented_lotion_perfume== 'y')?true:false)); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="client_cented_lotion_perfume" id="client_cented_lotion_perfume" value="n" <?php echo set_radio('client_cented_lotion_perfume', 'n',(($client->client_cented_lotion_perfume== 'n')?true:false)); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Fetishes? </span><br> 
                        <input type="text" placeholder="Fetishes" class="date_of_meeting" value="<?php echo set_value('client_fetishes',$client->client_fetishes); ?>" name="client_fetishes" id="client_fetishes" />
                        <?php echo form_error('client_fetishes', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <span class="normal_text_label">Do you smoke?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="client_smoke" id="client_smoke" value="y" <?php echo set_radio('client_smoke','y',(($client->client_smoke=== 'y')?true:false)); ?> ><span class="normal_text">Yes</span>
                        <input type="radio" name="client_smoke" id="client_smoke" value="n" <?php echo set_radio('client_smoke','n',(($client->client_smoke=== 'n')?true:false)); ?> ><span class="normal_text">No</span>
                    </div>
                </div> 
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">                        
                        <span class="normal_text_label">How do you feel about the provider smoking?</span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('client_feel_about_provider_smoking[]', '1',in_array(1,$client->client_feel_about_provider_smoking) ? true :false); ?> name="client_feel_about_provider_smoking[]"><span class="normal_text">Dislike</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('client_feel_about_provider_smoking[]', '2',in_array(2,$client->client_feel_about_provider_smoking) ? true :false); ?> name="client_feel_about_provider_smoking[]"><span class="normal_text">Prefer only non­smokers</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('client_feel_about_provider_smoking[]', '3',in_array(3,$client->client_feel_about_provider_smoking) ? true :false); ?> name="client_feel_about_provider_smoking[]"><span class="normal_text">It’s fine if provider doesn’t smoke during session </span> </span></li>
                        </ul>                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('client_feel_about_provider_smoking[]', '4',in_array(4,$client->client_feel_about_provider_smoking) ? true :false); ?> name="client_feel_about_provider_smoking[]"><span class="normal_text">Smoking is fine</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('client_feel_about_provider_smoking[]', '5',in_array(5,$client->client_feel_about_provider_smoking) ? true :false); ?> name="client_feel_about_provider_smoking[]"><span class="normal_text">420 friendly</span> </li>
                        </ul>                        
                        <div class="clear"></div>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Do you drink alcohol?</span><br> 
                        <select id="client_do_you_drink_alcohol" class="post-review-dropdown" name="client_do_you_drink_alcohol">
                            <option value="">Select &nbsp; </option>
                            <option <?php echo set_select('client_do_you_drink_alcohol', '1',(($client->client_do_you_drink_alcohol==1)?true:false)); ?> value="1">Frequently</option>
                            <option <?php echo set_select('client_do_you_drink_alcohol', '2',(($client->client_do_you_drink_alcohol==2)?true:false)); ?> value="2">Socially</option>
                            <option <?php echo set_select('client_do_you_drink_alcohol', '3',(($client->client_do_you_drink_alcohol==3)?true:false)); ?> value="3">Moderately</option>
                            <option <?php echo set_select('client_do_you_drink_alcohol', '4',(($client->client_do_you_drink_alcohol==4)?true:false)); ?> value="4">Non­drinker</option>
                        </select>
                        <?php echo form_error('client_do_you_drink_alcohol', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">                        
                        <span class="normal_text_label">Preferences?</span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('client_alcohol_preference[]', '1',in_array(1,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Champange</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('client_alcohol_preference[]', '2',in_array(2,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Red wine</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('client_alcohol_preference[]', '3',in_array(3,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">White wine </span> </span></li>
                        </ul>                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('client_alcohol_preference[]', '4',in_array(4,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Cocktail</span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('client_alcohol_preference[]', '5',in_array(5,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Hard alcohol</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('client_alcohol_preference[]', '6',in_array(6,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Coffee</span></li>
                        </ul>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('client_alcohol_preference[]', '7',in_array(7,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Tea</span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('client_alcohol_preference[]', '8',in_array(8,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Soda</span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('client_alcohol_preference[]', '9',in_array(9,$client->client_alcohol_preference) ? true :false); ?> name="client_alcohol_preference[]"><span class="normal_text">Other</span></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <span class="normal_text_label">Do you have any Health problems?</span><br>
                    <div class="post_review_column_inner">                      
                        <input type="radio" name="client_health_problem" id="client_health_problem" value="y" <?php echo set_radio('client_health_problem', 'y',(($client->client_health_problem=='y')? true: false)); ?> >  <span class="normal_text">Yes</span>
                        <input type="radio" name="client_health_problem" id="client_health_problem" value="n" <?php echo set_radio('client_health_problem', 'n',(($client->client_health_problem=='n')? true: false)); ?> > <span class="normal_text">No</span>
                    </div>
                </div> 
                 <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Other? </span><br> 
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo set_value('client_health_problem_other',$client->client_health_problem_other); ?>" name="client_health_problem_other" id="client_health_problem_other" />
                        <?php echo form_error('client_health_problem_other', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column2">
                    <div class="post_review_column_inner">                        
                        <span class="normal_text_label">Your Personality?</span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('client_personality[]', '1',in_array(1,$client->client_personality) ? true :false); ?> name="client_personality[]"><span class="normal_text">Easy Going</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('client_personality[]', '2',in_array(2,$client->client_personality) ? true :false); ?> name="client_personality[]"><span class="normal_text">Fun & Playful</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('client_personality[]', '3',in_array(3,$client->client_personality) ? true :false); ?> name="client_personality[]"><span class="normal_text">Shy</span> </span></li>
                        </ul>                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('client_personality[]', '4',in_array(4,$client->client_personality) ? true :false); ?> name="client_personality[]"><span class="normal_text">Intellectual</span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('client_personality[]', '5',in_array(5,$client->client_personality) ? true :false); ?> name="client_personality[]"><span class="normal_text">Quiet</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('client_personality[]', '6',in_array(6,$client->client_personality) ? true :false); ?> name="client_personality[]"><span class="normal_text">Talkative</span></li>
                        </ul>                        
                        <div class="clear"></div>
                    </div>
                </div>                
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Other? </span><br> 
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo set_value('client_personality_other',$client->client_personality_other); ?>" name="client_personality_other" id="client_personality_other" />
                        <?php echo form_error('client_personality_other', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>                
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Experience?</span><br> 
                        <select id="client_experience" class="post-review-dropdown" name="client_experience">
                            <option value="">Select &nbsp; </option>
                            <option <?php echo set_select('client_experience', '1',($client->client_experience==1)?true:false); ?> value="1">First time</option>
                            <option <?php echo set_select('client_experience', '2',($client->client_experience==2)?true:false); ?> value="2">Newbie</option>
                            <option <?php echo set_select('client_experience', '3',($client->client_experience==3)?true:false); ?> value="3">Once in awhile</option>
                            <option <?php echo set_select('client_experience', '4',($client->client_experience==4)?true:false); ?> value="4">Frequently</option>
                            <option <?php echo set_select('client_experience', '5',($client->client_experience==5)?true:false); ?> value="5">Hobbyist </option>                            
                        </select>
                        <?php echo form_error('client_experience', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Comments? </span><br> 
                        <input type="text" placeholder="Comments" class="date_of_meeting" value="<?php echo set_value('client_experience_comment',$client->client_experience_comment); ?>" name="client_experience_comment" id="client_experience_comment" />
                        <?php echo form_error('client_experience_comment', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                 <div class="post-reviw-column2">
                    <div class="post_review_column_inner">                        
                        <span class="normal_text_label">Session preferences?</span><br>
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="1" <?php echo set_checkbox('client_session_preferences[]', '1',in_array(1,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">FS</span> </li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="2" <?php echo set_checkbox('client_session_preferences[]', '2',in_array(2,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">FBSM</span> </span></li>
                            <li><span class="label-checkbox-group"><input type="checkbox" class="post_review_checkbox" value="3" <?php echo set_checkbox('client_session_preferences[]', '3',in_array(3,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">Safe practices</span> </span></li>
                        </ul>                        
                        <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="4" <?php echo set_checkbox('client_session_preferences[]', '4',in_array(4,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">Dinner companion </span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="5" <?php echo set_checkbox('client_session_preferences[]', '5',in_array(5,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">Dirty talk</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="6" <?php echo set_checkbox('client_session_preferences[]', '6',in_array(6,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">MSOG</span></li>
                        </ul> 
                         <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="7" <?php echo set_checkbox('client_session_preferences[]', '7',in_array(7,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">LFK </span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="8" <?php echo set_checkbox('client_session_preferences[]', '8',in_array(8,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">DFK</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="9" <?php echo set_checkbox('client_session_preferences[]', '9',in_array(9,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">BBBJ</span></li>
                        </ul>
                         <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="10" <?php echo set_checkbox('client_session_preferences[]', '10',in_array(10,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">CBJ </span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="11 <?php echo set_checkbox('client_session_preferences[]', '11',in_array(11,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">GFE</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="12" <?php echo set_checkbox('client_session_preferences[]', '12',in_array(12,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">DATY</span></li>
                        </ul> 
                         <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="13" <?php echo set_checkbox('client_session_preferences[]', '13',in_array(13,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">PSE</span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="14" <?php echo set_checkbox('client_session_preferences[]', '14',in_array(14,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">GREEK</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="15" <?php echo set_checkbox('client_session_preferences[]', '15',in_array(15,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">Foot fetish</span></li>
                        </ul> 
                         <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="16" <?php echo set_checkbox('client_session_preferences[]', '15',in_array(16,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">Russian </span></li>
                            <li><input type="checkbox" class="post_review_checkbox" value="17" <?php echo set_checkbox('client_session_preferences[]', '16',in_array(17,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">CIM</span> </li>
                            <li><input type="checkbox" class="post_review_checkbox" value="18" <?php echo set_checkbox('client_session_preferences[]', '17',in_array(18,$client->client_session_preferences) ? true :false); ?> name="client_session_preferences[]"><span class="normal_text">Doubles</span></li>
                        </ul>
                         <ul class="checkbox_line_group">
                            <li><input type="checkbox" class="post_review_checkbox" value="19" <?php echo set_checkbox('client_session_preferences[]', '18',in_array(19,$client->client_session_preferences)? true :false); ?> name="client_session_preferences[]"><span class="normal_text">BDSM </span></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>                                
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Other? </span><br> 
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo set_value('client_session_preferences_other',$client->client_session_preferences_other); ?>" name="client_session_preferences_other" id="client_session_preferences_other" />
                        <?php echo form_error('client_session_preferences_other', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Hobbies/interest? </span><br> 
                        <input type="text" placeholder="Hobbies" class="date_of_meeting" value="<?php echo set_value('client_hobbies_interest',$client->client_hobbies_interest); ?>" name="client_hobbies_interest" id="client_hobbies_interest" />
                        <?php echo form_error('client_hobbies_interest', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">More about you? </span><br> 
                        <input type="text" placeholder="More about you" class="date_of_meeting" value="<?php echo set_value('client_more_about_you',$client->client_more_about_you); ?>" name="client_more_about_you" id="client_more_about_you" />
                        <?php echo form_error('client_more_about_you', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>  
                 <div class="post-reviw-column3">
                     <div class="post_review_column_inner">
                        <span class="normal_text_label">Upload Profile Pic? </span><br> 
                        <input type="file"  class="date_of_meeting"  name="client_profile_pic" id="client_profile_pic" /><img style="" class="img-circle" width="30%"  src="<?php echo base_url(); ?>uploads/clients/profile/<?php echo $client->client_profile_pic.$client->client_pic_ext; ?>" />
                        <?php echo form_error('client_profile_pic', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>  
                <div class="clear"></div>
                <span class="submit_button_contact">                    
                    <input type="submit" id="submit" name="submit" value="Submit" class="submit_button" />                
                </span>
                
            </form>
        </section>
    </div>  
    <div class="clear"></div>       
</section>
<script src="<?php echo base_url(); ?>theme/js/client_profile.js"></script>