<script>
$(document).ready(function(){
    
    $("#provider_forgot_form").validate({
        rules: {                
                email:{
                    email:true,
                    required: true
                }               
        },
        messages: {                
                email:"Pealse enter valid email",
        }
    });
});

</script>
<section id="main-container">

    <div id="content_left">
        <img class="provider_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-5414503-young-woman-in-lingerie-with-cleavage-laptop-comjjjputer-min.jpg"/>
    </div>

    <div id="content_right">

        <section class="form_container">

            <form id="provider_forgot_form" name="provider_forgot_form"  method="post">
                
               
                <div class="form_title"> <h1>Provider Forgot Password </h1></div> 
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
                    <input type="submit" id="submit" name="submit" value="Reset Password" class="submit_button">
                </span>

            </form>

        </section>

    </div>  

    <div class="clear"></div>   

</section>


</body>
</html>