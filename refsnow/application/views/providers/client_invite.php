<section id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000003253313_RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - iStock_000047770164_Full-min.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000029615742- RN-min.jpg"/>
        </div>
    <div id="content_right">

         <section  class="form_container">
             <form  enctype="multipart/form-data" name="client_invite_form" id="client_invite_form" method="post">

                <div class="form_title"> <h1>Invite a client</h1></div>
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                <p class="provider_invite_text">Do you know providers who can benefit from RefsNow?
                Please enter email and send personalized invitation to join RefsNow
                </p>
                <p class="provider_invite_text"> <b class="provider_invite_text_b">Earn Point</b>
                (Credit points to Provider member for each invitation)</p>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <label for="email" class="normal_text_label">Email (Required)? </label><br>
                        <?php echo form_error('email', '<div class="required_class">', '</div>'); ?>
                        <input type="text" placeholder="Email (Required) *" class="date_of_meeting" value="<?php echo set_value('email'); ?>" name="email" id="email" />
                        <span class="required_field">*</span>
                    </div>
                </div>
                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <label for="message" class="normal_text_label">Personal message to client (Optional) </label><br>
                        <?php echo form_error('message', '<div class="required_class">', '</div>'); ?>
                        <textarea id="message" class="invite_message" name="message"><?php echo set_value('message');?></textarea>
                        
                    </div>
                </div>
                
                <span class="submit_button_contact">
                    <input type="submit" id="provider_invite_submit" name="submit" value="Submit" class="submit_button" />
                </span>
                 <p class="provider_invite_text">RefsNow will be sending a personal Invitation from you to join our Site
                     (<a href="">view sample</a>)
                </p>
                <p class="provider_invite_text">There will not be a fee for any Providers to sign up for a Membership however we do require that each Provider pass our screening process before becoming a member of RefsNow.</p>

                <p class="provider_invite_text">If you have any questions about this please email us at support@refsnow.com</p>
            </form>
        </section>
    </div>
    <div class="clear"></div>
</section>

<script>
$(document).ready(function(){

    $("#client_invite_form").validate({
        rules: {
                email:{
                    email:true,
                    required: true
                },
        },
        messages: {
                email: {
                        required: "Please enter email",
                        email: "Please enter valid email"
                },  
        }
    });
});

</script>