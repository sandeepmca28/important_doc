<script>
$(document).ready(function()
{    
    $("#provider_profile_form").validate({
        rules:
        { 
            pu_user_fname: "required",
            /*
            pu_user_email:{
                email:true,
                required: true,
                remote:{
                        url: site_url+'provider/check_duplicate_email',
                        type: "post",
                }
            }
            , 
            */    
        },
        messages: 
        {
            pu_user_fname: "Please your name",
            /* pu_user_email:"Pealse enter valid email", */
        }
    });
});

</script>

<section class="provider-profile-page1" id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - iStock_000047770164_Full-min.jpg"/>       
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000051214632_Full RN-min.jpg"/>
        </div>
    <div id="content_right">
        
         <section  class="form_container">
             <form  enctype="multipart/form-data" name="provider_profile_form" id="provider_profile_form" method="post">

                <div class="form_title"> <h1>Provider Profile</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <label for="pu_user_fname" class="normal_text_label">Name? </label><br> 
                       
                        <input type="text" placeholder="Name" class="date_of_meeting" value="<?php echo set_value('pu_user_fname', $provider->pu_user_fname); ?>" name="pu_user_fname" id="pu_user_fname" />
                        <span class="required_field">*</span>
                         <?php echo form_error('pu_user_fname', '<div class="required_class">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Email 1? </span><br> 
                        
                        <input type="text" disabled="" placeholder="Email" class="date_of_meeting" value="<?php echo set_value('pu_user_email',$provider->pu_user_email); ?>" name="pu_user_email" id="pu_user_email" />
                        <span class="required_field">*</span>
                        <?php echo form_error('pu_user_email', '<div class="required_class_1">', '</div>'); ?>

                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Email 2? </span><br> 
                       
                        <input type="text" disabled="" placeholder="Email" class="date_of_meeting" value="<?php echo set_value('pu_user_email2',$provider->pu_user_email2); ?>" name="pu_user_email2" id="pu_user_email2" />
                         <?php echo form_error('pu_user_email2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Phone? </span><br> 
                        <?php echo form_error('pu_user_phone', '<div class="required_class">', '</div>'); ?>
                        <?php 
                        if($provider->pu_user_phone==0)
                        {
                             $pu_user_phone='';
                        }
                        else {
                             $pu_user_phone= $provider->pu_user_phone;
                        }
                        ?>
                        <input type="text" placeholder="Phone" class="date_of_meeting" value="<?php echo set_value('pu_user_phone',$pu_user_phone); ?>" name="pu_user_phone" id="pu_user_phone" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">                         
                        <span class="normal_text_label">Cell? </span><br> 
                        <?php echo form_error('pu_user_phone2', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="Cell number" class="date_of_meeting" value="<?php echo set_value('pu_user_phone2', $provider->pu_user_phone2); ?>" name="pu_user_phone2" id="pu_user_phone2" />
                    </div>
                </div>
                
                 <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Country? </span><br> 
                        <?php echo form_error('pu_user_country', '<div class="required_class">', '</div>'); ?>
                        <select id="pu_user_country" class="post-review-dropdown dropdown-top-margin" name="pu_user_country">
                            <option value="">Select &nbsp; Country </option>
                            <?php
                            foreach ($countries as $key => $value)
                            {
                                ?>
                                <option <?php echo set_select('pu_user_country', $value->id, ($provider->pu_user_country == $value->id)? true:false); ?> value="<?php echo $value->id; ?>"> <?php echo $value->country; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <span class="required_field">*</span>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">State? </span><br> 
                        <?php echo form_error('pu_user_state', '<div class="required_class">', '</div>'); ?>
                        <select id="pu_user_state" data-stateid="<?php if($this->input->post('pu_user_state')){ echo $this->input->post('pu_user_state'); }else { echo $provider->pu_user_state; } ?>" class="post-review-dropdown dropdown-top-margin" name="pu_user_state">
                            <option value="">Select &nbsp; State </option>
                        </select>
                        <span class="required_field">*</span>
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">City? </span><br> 
                        <?php echo form_error('pu_user_city','<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="City" class="date_of_meeting" value="<?php echo set_value('pu_user_city', $provider->pu_user_city); ?>" name="pu_user_city" id="pu_user_city" />
                        <span class="required_field">*</span>
                    </div>
                </div>                                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Website? </span><br> 
                        <?php echo form_error('pu_user_website','<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="Website" class="date_of_meeting" value="<?php echo set_value('pu_user_website',$provider->pu_user_website); ?>" name="pu_user_website" id="pu_user_website" />                        
                    </div>
                </div>                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">TER ID? </span><br> 
                        <?php echo form_error('pu_user_terID', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="TER ID" class="date_of_meeting" value="<?php echo set_value('pu_user_terID',$provider->pu_user_terID); ?>" name="pu_user_terID" id="pu_user_terID" />                        
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">TER ID Link? </span><br> 
                        <?php echo form_error('pu_user_tr_id_link', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="TER ID Link" class="date_of_meeting" value="<?php echo set_value('pu_user_tr_id_link',$provider->pu_user_tr_id_link); ?>" name="pu_user_tr_id_link" id="pu_user_tr_id_link" />                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">PF411 ID? </span><br> 
                        <?php echo form_error('pu_user_pf11ID', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="PF411 ID" class="date_of_meeting" value="<?php echo set_value('pu_user_pf11ID',$provider->pu_user_pf11ID); ?>" name="pu_user_pf11ID" id="pu_user_pf11ID" />
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">PF411 ID Link? </span><br> 
                        <?php echo form_error('pu_user_pf11ID_link', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="PF411 ID Link" class="date_of_meeting" value="<?php echo set_value('pu_user_pf11ID_link',$provider->pu_user_pf11ID_link); ?>" name="pu_user_pf11ID_link" id="pu_user_pf11ID_link" />
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">DateCheck ID? </span><br> 
                        <?php echo form_error('pu_user_datecheckID', '<div class="required_class">', '</div>'); ?>

                        <input type="text" placeholder="DateCheck ID" class="date_of_meeting" value="<?php echo set_value('pu_user_datecheckID',$provider->pu_user_datecheckID); ?>" name="pu_user_datecheckID" id="pu_user_datecheckID" />
                        
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">AF ID? </span><br> 
                        <?php echo form_error('pu_af_id', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="AF ID" class="date_of_meeting" value="<?php echo set_value('pu_af_id',$provider->pu_af_id); ?>" name="pu_af_id" id="pu_af_id" />
                    </div>
                </div>
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">AF Profile Link? </span><br> 
                        <?php echo form_error('pu_af_id_link', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="AF ID Link" class="date_of_meeting" value="<?php echo set_value('pu_af_id_link',$provider->pu_af_id_link); ?>" name="pu_af_id_link" id="pu_af_id_link" />                        
                    </div>
                </div>
                
                <?php /* <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">RS2K Advertiser? </span><br> 
                        <?php echo form_error('pu_user_RS2K_advertiser', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="RS2K Advertiser" class="date_of_meeting" value="<?php echo set_value('pu_user_RS2K_advertiser',$provider->pu_user_RS2K_advertiser); ?>" name="pu_user_RS2K_advertiser" id="pu_user_RS2K_advertiser" />
                    </div>
                </div>  
                 * <?php */ ?>                 
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Other? </span><br> 
                        <?php echo form_error('pu_user_other', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="Other" class="date_of_meeting" value="<?php echo set_value('pu_user_other',$provider->pu_user_other); ?>" name="pu_user_other" id="pu_user_other" />                        
                    </div>
                </div>
                             
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Post a photo ( upload  jpg, png, gif )? </span><br>
                        <input  type="file" placeholder="Upload photo" class="date_of_meeting" name="pu_user_photo" id="pu_user_photo" />
                        <?php 
                        if(!empty($provider->pu_user_photo)){
                        ?>
                        <img class="profile_pic img-circle" width="130" height="130" src="<?php echo $p_images_path.$provider->pu_user_photo.$provider->pu_user_ext; ?>" />
                        <?php } else {?>
                        <img class="profile_pic img-circle" width="130" height="130" src="<?php echo $images_path; ?>no.jpg" />
                        <?php }?>
                    </div>
                </div>
                
                <span class="submit_button_contact">
                    <input type="submit" id="submit" name="submit" value="Submit" class="submit_button" />
                </span>
                
            </form>
        </section>
    </div>  
    <div class="clear"></div>       
</section>
<script src="<?php echo base_url(); ?>theme/js/provider_profile.js"></script>