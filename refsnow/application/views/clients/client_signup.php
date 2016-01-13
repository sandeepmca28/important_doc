<script>
    $(document).ready(function () {

        $("#client-signup-form").validate({
            rules: 
             {                
                 username: {
                    required: true,
                    remote: 
                    {
                        url: site_url+'client/check_duplicate_username',
                        type: "post",
                    }
                },
                
                 client_password: {
                    required: true
                },
                cpassword: {
                    required: true,
                    equalTo: "#client_password"
                },
                
                client_first_name: {
                    required: true
                },
                client_last_name: {
                    required: true
                },
               
                client_email: {
                    required: true,
                    email: true,
                    remote: {
                        url: site_url + 'client/check_duplicate_email',
                        type: "post",
                    }
                },
                client_email2: {
                    email: true,
                    remote: {
                        url: site_url + 'client/check_duplicate_email',
                        type: "post",
                    }
                },
                client_proffessional_email: {
                    email: true,
                    remote: {
                        url: site_url + 'client/check_duplicate_email',
                        type: "post",
                    }
                },
            },
            
            messages: 
            {
                username: 
                {                    
                    required:"Please enter username",
                    remote: "This is already used."
                },               
                client_password: "Please enter password",
                cpassword: "Please enter confirm password",
                client_first_name: "Please enter first name",
                client_last_name: "Please enter last name",
                client_email: 
                {
                    email: "Please enter email",
                    required: "Please enter valid email",
                    remote: "This email already exist."
                },
                client_email2: 
                {
                    email: "Please enter email",
                    remote: "This email already exist."
                },
                client_proffessional_email: 
                {
                    email: "Please enter email",
                    remote: "This email already exist."
                }
            }
        });
    });

</script>
<section class="client-signup" id="main-container">
    
    <div id="content_left">
         <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000020978459_Full RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000024159767_Full-min.jpg"/>       
    </div>

    <div id="content_right">
        <section class="form_container">
            <form class="client-signup-form" name="client-signup-form" id="client-signup-form" method="post">

                <div class="form_title"> <h1>Client Sign Up </h1></div>
                <div class="separator separator_provider_signup"></div>
                
                 <div class="column1">
                     
                    <div class="column_inner">
                        <input type="text" placeholder="Username For Login *" value="<?php echo set_value('username'); ?>" id="username" name="username" class=" placeholder"><span class="required_field">*</span>
                        <?php echo form_error('username', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                
                <div class="column1">
                    <div class="column_inner">
                        <input type="password" placeholder="Password *" value="<?php echo set_value('client_password'); ?>" id="client_password" name="client_password" class=" placeholder"><span class="required_field">*</span>
                        <?php echo form_error('client_password', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="password" placeholder="Confirm Password *" value="<?php echo set_value('cpassword'); ?>" id="cpassword" name="cpassword" class=" placeholder"><span class="required_field">*</span>
                        <?php echo form_error('cpassword', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
                <div class="column1">
                    <div class="column_inner">
                        <input type="text" placeholder="First Name *" value="<?php echo set_value('client_first_name'); ?>" id="client_first_name" name="client_first_name" class=" placeholder">
                        <span class="required_field">*</span>
                        <?php echo form_error('client_first_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" placeholder="Last Name(Optional) " value="<?php echo set_value('client_last_name'); ?>" id="client_last_name" name="client_last_name" class=" placeholder">
                        <?php echo form_error('client_last_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" placeholder="Primary Email *" value="<?php echo set_value('client_email'); ?>" id="client_email" name="client_email" class=" placeholder">
                        <span class="required_field">*</span>
                        <?php echo form_error('client_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_email2" placeholder="Email(Optional) " class="client_email2" id="client_email2" value="<?php echo set_value('client_email2'); ?>" class=" placeholder">
                        <?php echo form_error('client_email2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_proffessional_email" placeholder="Email(Optional) " class="client_proffessional_email" id="client_proffessional_email" value="<?php echo set_value('client_proffessional_email'); ?>" class=" placeholder">
                        <?php echo form_error('client_proffessional_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_phone" placeholder="Phone(Optional) " class="client_phone" id="client_phone" value="<?php echo set_value('client_phone'); ?>" class=" placeholder">
                        <?php echo form_error('client_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_cell_phone" placeholder="Phone(Optional) " class="client_cell_phone" id="client_cell_phone" value="<?php echo set_value('client_cell_phone'); ?>" class=" placeholder">
                        <?php echo form_error('client_cell_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_ter_handle" placeholder="TER Handle(Optional) " class="client_ter_handle" id="client_ter_handle" value="<?php echo @$_POST['client_ter_handle']; ?>" />
                        <?php echo form_error('client_ter_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_pf411_id" placeholder="PF411 ID(Optional)" class="client_pf411_id" id="client_pf411_id" value="<?php echo set_value('client_pf411_id'); ?>" />
                        <?php echo form_error('client_pf411_id', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_eccie_handle" placeholder="ECCIE Handle(Optional)" class="client_eccie_handle" id="client_eccie_handle" value="<?php echo @$_POST['client_eccie_handle']; ?>" />
                        <?php echo form_error('client_eccie_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <div class="column1">
                    <div class="column_inner">
                        <input type="text" name="client_datecheck_handle" placeholder="DateCheck Handle(Optional)" class="client_datecheck_handle" id="client_datecheck_handle" value="<?php echo set_value('client_datecheck_handle'); ?>" />
                        <?php echo form_error('client_datecheck_handle', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>

                <span class="submit_button_contact">
                    <input type="submit" name="submit" value="Submit" class="submit_button" />
                </span>
            </form>
        </section>
    </div>
    <div class="clear"></div>
</section>