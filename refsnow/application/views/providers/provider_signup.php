<script>
$(document).ready(function(){
    
    $("#provider_signup_form").validate({
        rules: 
        {
                username: 
                {
                    required: true,
                    remote: 
                    {
                        url: site_url+'provider/check_duplicate_username',
                        type: "post",
                    }
                },
                fname: {
                    required: true
                },
                 pu_user_email: 
                 {
                        required: true,
                        email: true,
                         remote: {
                                url: site_url+'provider/check_duplicate_email_signup',
                                type: "post",
                        }
                }
                ,
                 pu_user_email2: {
                        email: true,
                         remote: {
                                url: site_url+'provider/check_duplicate_email_signup',
                                type: "post",
                        }
                }
                ,
                trID: {
                         remote: {
                                url: site_url+'provider/check_duplicate_terid_provider',
                                type: "post",
                        }
                }
                ,
                pf11ID: {
                         remote: {
                                url: site_url+'provider/check_duplicate_pf11ID_provider',
                                type: "post",
                        }
                }
                ,
                afID: {
                         remote: {
                                url: site_url+'provider/check_duplicate_afID_provider',
                                type: "post",
                        }
                }
                ,
                datecheckID: {
                         remote: {
                                url: site_url+'provider/check_duplicate_datecheckID_provider',
                                type: "post",
                        }
                }
                ,
                
                password :{
                    required:true
                },

                cpassword:{
                   required:true,
                   equalTo: "#password"
                },
                 phone :{
                    required:true
                },
                 terms :{
                    required:true
                },
        },
        messages: 
        {
            username:{
                required: 'Please enter unique username',
                remote: "Please enter unique username"

            },
            fname: "Please enter your name",
            pu_user_email:{
               required:"Please enter valid  email",
               email:  "Please enter valid email",
               remote: "This email already used by somebody"
            },
           
            pu_user_email2:
            {
               email:  "Please enter valid email",
               remote: "This email already used by somebody"
            },
            
            trID:
            {     
               remote: "This Ter ID already used by somebody"
            },
            pf11ID:
            {   
               remote: "This PF ID already used by somebody"
            },
            afID:{     
               remote: "This AF ID already used by somebody"
            },
            datecheckID:{     
               remote: "This DateCheck ID already used by somebody"
            },
            password :"Please enter password",
            cpassword :"Please enter confirm password",
            phone : "Please enter Phone",
            terms :"Please check terms and conditions"
        }
    });
});

</script>

<section class="provider-signup-page" id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/client_login (2).jpg"/>
 </div>

    <div id="content_right">
        <section class="form_container">
            <form method="post" id="provider_signup_form" name="provider_signup_form">

                <div class="form_title"> <h1>Become a Member of RefsNow</h1></div>
                <div class="separator separator_provider_signup"></div>

               
                 <div class="column1">

                    <div class="column_inner">

                        <input type="text" placeholder="Username For Login *" value="<?php echo set_value('username'); ?>" id="username" name="username" class=" placeholder">  <span class="required_field">*</span>
                        <?php echo form_error('username', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="column1">

                    <div class="column_inner">
                        <input type="password" placeholder="Password *" value="<?php echo set_value('password'); ?>" id="password" name="password" class=" placeholder"> <span class="required_field">*</span>
                        <?php echo form_error('password', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">

                    <div class="column_inner">
                        <input type="password" placeholder="Confirm Password *" value="<?php echo set_value('cpassword'); ?>" id="cpassword" name="cpassword" class=" placeholder">  <span class="required_field">*</span>
                        <?php echo form_error('cpassword','<div class="required_class_1">','</div>'); ?>
                    </div>
                </div>
                
                 <div class="column1">

                    <div class="column_inner">

                        <input type="text" placeholder="Name *" value="<?php echo set_value('fname'); ?>" id="fname" name="fname" class=" placeholder">  <span class="required_field">*</span>
                        <?php echo form_error('fname', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="column1">

                    <div class="column_inner">
                        <input type="text" placeholder="Email *" value="<?php echo set_value('pu_user_email'); ?>" id="pu_user_email" name="pu_user_email" class=" placeholder"> <span class="required_field">*</span>
                         <?php echo form_error('pu_user_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                 <div class="column1">

                    <div class="column_inner">
                        <input type="text" placeholder="Email 2 (Optional)" value="<?php echo set_value('pu_user_email2'); ?>" id="pu_user_email2" name="pu_user_email2" class=" placeholder">
                        <?php echo form_error('pu_user_email2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>


                <div class="column1">

                    <div class="column_inner">

                        <input type="text" name="pu_user_phone" placeholder="Phone (Optional)" class="phone" id="pu_user_phone" value="<?php echo set_value('pu_user_phone'); ?>" class=" placeholder">
                        <?php echo form_error('pu_user_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="pu_user_phone2" placeholder="Cell Number (Optional)"  id="pu_user_phone2" value="<?php echo set_value('pu_user_phone2'); ?>" class=" placeholder">
                         <?php echo form_error('pu_user_phone2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="website" placeholder="Website Address" class="website" id="website" value="<?php echo set_value('website'); ?>" />
                        <?php echo form_error('website', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="trID" placeholder="TER Handle " class="trID" id="trID" value="<?php echo @$_POST['trID'] ?>" />
                        <?php echo form_error('trID','<div class="required_class_1">','</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">                       
                        <input type="text" name="trID_link" placeholder="TER Handle Link " class="trID_link" id="trID_link" value="<?php echo set_value('trID_link'); ?>" />
                         <?php echo form_error('trID_link','<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="pf11ID" placeholder="PF11 ID " class="pf11ID" id="pf11ID" value="<?php echo set_value('pf11ID'); ?>" />
                         <?php echo form_error('pf11ID','<div class="required_class_1">','</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="pf11ID_link" placeholder="PF11ID Link " class="pf11ID_link" id="pf11ID_link" value="<?php echo set_value('pf11ID_link'); ?>" />
                        <?php echo form_error('pf11ID_link', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">

                    <div class="column_inner">
                        <input type="text" name="afID" placeholder="AF Handle" class="afID" id="afID" value="<?php echo @$_POST['afID']; ?>" />
                        <?php echo form_error('afID','<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="afID_link" placeholder="AF Handle Link " class="afID_link" id="afID_link" value="<?php echo @$_POST['afID_link']; ?>" />
                        <?php echo form_error('afID_link','<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="datecheckID" placeholder="Datecheck Handle" class="datecheckID" id="datecheckID" value="<?php echo set_value('datecheckID'); ?>" />
                        <?php echo form_error('datecheckID', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">

                    <div class="column_inner">
                        <select name="RS2K_advertiser" id="RS2K_advertiser">
                            <option selected="">Select RS2K Advertiser Option</option>
                            <option <?php echo set_select('RS2K_advertiser', 'y' ); ?>  value="y">Yes</option>
                            <option <?php echo set_select('RS2K_advertiser', 'n'); ?>  value="n">No</option>
                        </select>
                    </div>

                </div>
                <br>
                <div class="column1">

                <div class="column_inner">
                    <input type="checkbox" name="terms"  class="datecheckID " id="terms"  /> <span class="checkbox_class">Agree to Terms & Conditions</span><span class="required_field">*</span>
                    <?php echo form_error('terms', '<div class="required_class_1">', '</div>'); ?>
                </div>
                <span class="submit_button_contact">
                    <input type="submit" name="submit" value="Submit" class="submit_button" />
                </span>
                    
                </div>
                 <div class="signup_bottom_content">
                    <p class="signup_bottom_first_p">Please fill out the following information as completely as possible to expedite
                        your request for membership.</p>
                    <p class="signup_bottom_first_p">We look forward receiving your requests and welcoming you into the RefsNow
                        community.</p>
                    <p class="signup_bottom_last_p">Thank you,</p>
                     <p>RefsNow</p>
                </div>
            </form>

        </section>

    </div>
    <div class="clear"></div>
</section>