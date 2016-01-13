
<section class="provider-profile-page1" id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_1.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_2.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/post_review_1.jpg"/>
        </div>
    <div id="content_right">
        
         <section  class="form_container">
            
                <div class="form_title"><h1>Provider Profile</h1></div> 
                <div class="separator separator_provider_signup"></div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <label for="pu_user_fname" class="normal_text_label">First Name ? </label><br> 
                        <input type="text" placeholder="Name" class="date_of_meeting" value="<?php echo $provider->pu_user_fname; ?>" name="pu_user_fname" id="pu_user_fname" />
                                           
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Email 1 ? </span><br> 
                        
                        <input type="text" disabled="" placeholder="Email" class="date_of_meeting" value="<?php echo $provider->pu_user_email; ?>" name="pu_user_email" id="pu_user_email" />
                        
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Email 2 ? </span><br>                        
                        <input type="text" disabled="" placeholder="Email" class="date_of_meeting" value="<?php echo $provider->pu_user_email2; ?>" name="pu_user_email2" id="pu_user_email2" />
                         
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Phone 1 ? </span><br> 
                     
                        <?php 
                        if($provider->pu_user_phone==0)
                        {
                             $pu_user_phone='';
                        }
                        else 
                        {
                             $pu_user_phone= $provider->pu_user_phone;
                        }
                        ?>
                        <input type="text" placeholder="Phone" class="date_of_meeting" value="<?php echo $pu_user_phone; ?>" name="pu_user_phone" id="pu_user_phone" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">                         
                        <span class="normal_text_label">Phone 2 ? </span><br> 
                      
                        <input type="text" placeholder="Phone" class="date_of_meeting" value="<?php echo $provider->pu_user_phone2; ?>" name="pu_user_phone2" id="pu_user_phone2" />
                    </div>
                </div>
                
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">Country ? </span><br> 
                       
                        <select id="pu_user_country" class="post-review-dropdown dropdown-top-margin" name="pu_user_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php if($provider->pu_user_country == $value->id){ echo 'selected'; } ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                       
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">State ? </span><br> 
                        
                        <select id="pu_user_state" data-stateid="<?php  echo $provider->pu_user_state;  ?>" class="post-review-dropdown dropdown-top-margin" name="pu_user_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">City ? </span><br> 
                       
                        <input type="text" placeholder="City" class="date_of_meeting" value="<?php echo $provider->pu_user_city; ?>" name="pu_user_city" id="pu_user_city" />
                       
                    </div>
                </div>
                
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">Website? </span><br> 
                       
                        <input type="text" placeholder="Website" class="date_of_meeting" value="<?php echo $provider->pu_user_website ?>" name="pu_user_website" id="pu_user_website" />
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">TER Handle? </span><br> 
                        
                        <input type="text" placeholder="TER Handle" class="date_of_meeting" value="<?php echo $provider->pu_user_terID ?>" name="pu_user_terID" id="pu_user_terID" />
                        
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">TER Handle Link? </span><br> 
                        
                        <input type="text" placeholder="TER Handle Link" class="date_of_meeting" value="<?php echo $provider->pu_user_tr_id_link ?>" name="pu_user_tr_id_link" id="pu_user_tr_id_link" />
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">PF411 ID? </span><br> 
                       
                        <input type="text" placeholder="PF411 ID" class="date_of_meeting" value="<?php echo $provider->pu_user_pf11ID; ?>" name="pu_user_pf11ID" id="pu_user_pf11ID" />
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">PF411 ID Link? </span><br> 
                        
                        <input type="text" placeholder="PF411 ID Link" class="date_of_meeting" value="<?php echo $provider->pu_user_pf11ID_link ?>" name="pu_user_pf11ID_link" id="pu_user_pf11ID_link" />
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">DateCheck ID? </span><br> 
                       
                        <input type="text" placeholder="DateCheck Handle" class="date_of_meeting" value="<?php echo $provider->pu_user_datecheckID ?>" name="pu_user_datecheckID" id="pu_user_datecheckID" />
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">AF Handle? </span><br> 
                      
                        <input type="text" placeholder="AF Handle" class="date_of_meeting" value="<?php echo $provider->pu_af_id ?>" name="pu_af_id" id="pu_af_id" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">AF Handle Link? </span><br> 
                        <input type="text" placeholder="AF ID Link" class="date_of_meeting" value="<?php echo $provider->pu_af_id_link ?>" name="pu_af_id_link" id="pu_af_id_link" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">Other? </span><br> 
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo $provider->pu_user_other; ?>" name="pu_user_other" id="pu_user_other" />
                    </div>
                </div>
                             
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Profile Photo</span><br>
                        <img class="img-rounded" src="<?php echo $p_images_path.$provider->pu_user_photo.$provider->pu_user_ext; ?>" height="70"  width="100" />
                    </div>
                </div>
                
        </section>
    </div>  
    <div class="clear"></div>       
</section>
<script src="<?php echo base_url(); ?>theme/js/provider_profile.js"></script>