<script>
$(document).ready(function(){

    $("#client-login-form").validate({
        rules: {
                password: "required",
                username:{                   
                    required: true,
                }
        },
        messages: {
                username: "Please enter your username",
                password: "Please enter your password",
        }
    });
});

</script>

<section id="main-container">

    <div id="content_left">

        <img class="client_login_image"  src="<?php echo base_url(); ?>theme/images/iStock_000013785728XLarge-min.jpg"/>

    </div>

    <div id="content_right">

        <section class="form_container">

            <form name="client-login-form" id="client-login-form" method="post">


                <div class="form_title"> <h1>Client Login </h1></div>
                <div class="separator separator_client_login"></div>

                <div class="<?php echo $this->session->flashdata('message_class');?>"><?php echo $this->session->flashdata('message');?></div>

                <div class="column1">

                    <div class="column_inner">
                        <input type="text" placeholder="Username *" value="" id="username" name="username" class="placeholder">
                           <span class="required_field">*</span>
                            <?php echo form_error('username','<div class="required_class_1">','</div>'); ?>
                    </div>

                </div>
                <div class="column1">

                    <div class="column_inner">
                        <input id="password" name="password" type="password" placeholder="Password *" value=""  class=" placeholder">
                        <span class="required_field">*</span>
                        <?php echo form_error('password','<div class="required_class_1">','</div>'); ?>
                    </div>
                </div>

                <span class="submit_button_contact">
                    <input type="submit" name="Submit" value="Login" class="submit_button">
                </span>

                <div class="submit_button_contact">

                    <a href="<?php echo base_url(); ?>client/forgot" class="forgot_password" >Forgot Password? Click here</a>
                    <a href="<?php echo base_url(); ?>client/signup" class="sign_up_user">New Client? Sign up here</a>

                </div>
            </form>

        </section>

    </div>
    <div class="clear"></div>
</section>