<script>
$(document).ready(function(){
    
    $("#provider_login_form").validate({
        rules: {
                username:{                   
                    required: true
                }
                , 
                password:{
                   required: true
                },
        },
        messages: {
                username: "Please enter your username",
                password:"please enter your password"
        }
    });
});

</script>
<section id="main-container">
    
    <div id="content_left">
        <img class="provider_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000002477442Large-min.jpg"/>
    </div>

    <div id="content_right">

        <section class="form_container">
            
            <form id="provider_login_form" name="provider_login_form" method="post">
                <div class="form_title"> <h1>Provider Login Here</h1></div> 
                <div class="separator separator_provider_login"></div>
                <div class="<?php echo $this->session->flashdata('message_class');?>"><?php echo $this->session->flashdata('message');?></div>
                <div class="column1">

                    <div class="column_inner">
                        
                        <input type="text" placeholder="Username *" value="" id="username" name="username" class=" placeholder">
                        <?php echo form_error('username', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">

                    <div class="column_inner">  
                        
                        <input type="password" placeholder="Password *" value="" id="password" name="password" class=" placeholder">                      
                        <?php echo form_error('password', '<div class="required_class_1">', '</div>'); ?>
                       
                    </div>
                    
                </div>

                <span class="submit_button_contact"> 
                    <input id="submit" name="submit" type="submit" value="Login" class="submit_button">
                </span>

                <div class="submit_button_contact">

                    <a href="<?php echo base_url(); ?>provider/forgot" class="forgot_password" >Forgot Password? Click here</a>
                    <a href="<?php echo base_url(); ?>provider/signup" class="sign_up_user">New Provider? Sign up here</a>
                
                </div>

            </form>

        </section>

    </div>  

    <div class="clear"></div>   

</section>