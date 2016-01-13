<section id="main-container">
    
    <div id="content_left">
         <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000002477442Large-min.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - iStock_000047770164_Full-min.jpg"/>
       
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
    </div>
    
    <div id="content_right">

         <section  class="form_container">
             <form  enctype="multipart/form-data" name="suggestion_form" id="suggestion_form" method="post">
                <div class="form_title"><h1>Send a Suggestion</h1></div>
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                <p class="provider_invite_text">Please provide feedback that will help us improved the site and we will credit 1 point to your account each time you have a valuable suggestion.
                </p>
                <p class="provider_invite_text"> Thank you,</p>
                <p class="provider_invite_text"> RefsNow</p>    
               
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <label for="message" class="normal_text_label">Suggestions</label><br>
                        <?php echo form_error('message', '<div class="required_class">', '</div>'); ?>
                        <textarea style="height: 144px;width: 545px;" id="message" placeholder="  Enter your valuable suggestions.." class="invite_message" name="message"><?php echo set_value('message');?></textarea>
                    </div>
                </div>
                
                <span class="submit_button_contact">
                    <input type="submit"  id="provider_suggestion_submit" name="submit" value="Submit" class="submit_button" />
                </span>                
               </form>
        </section>
    </div>
    <div class="clear"></div>
</section>

<script>
$(document).ready(function(){

    $("#suggestion_form").validate({
        rules: {
                    message:{                   
                    required: true
                },
        },
        messages: {
                message: {
                        required: "Please write some suggestions",
                },  
        }
    });
});

</script>