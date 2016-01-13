<script>
$(document).ready(function(){
    $("#client-forgot-form").validate({
        rules: {               
                email:{
                    email:true,
                    required: true,
                }
        },
        messages: {
                email: "Please your valid email"
            }
    });
});
</script>
<section id="main-container">
    
    <div id="content_left">
        <img class="provider_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000021989227_Large-min.jpg"/>
    </div>
    
    <div id="content_right">
        <section class="form_container">
            <form id="client-forgot-form" class="client-forgot-form"  method="post">               
                <div class="form_title"> <h1>Forgot Password </h1></div> 
                <div class="separator separator_provider_forgot "></div>
                <div class="<?php echo $this->session->flashdata('message_class');?>"><?php echo $this->session->flashdata('message');?></div>
                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="email" placeholder="Email *" class="email" id="email" value="<?php echo set_value('email');?>" />
                         <span class="required_field">*</span>
                        <?php echo form_error('email', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <span class="submit_button_contact">  
                    <input type="submit" id="Submit" name="Submit" value="Reset Password" class="submit_button">
                </span>
            </form>
        </section>
    </div>  
    <div class="clear"></div> 
</section>
