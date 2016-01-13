<script>
$(document).ready(function(){
    $("#request_a_reference").validate({
        rules: {              
                 name_of_provider:{
                     required: true
                 }
                ,
                 provider_email1:{
                     email:true,
                     required: true
                 }
                ,
                 provider_email2:{
                     email:true,                    
                 }
                ,
                 client_name:{
                     
                     required: true
                 }
                ,                
                 client_email:{
                     email:true,
                     required: true
                 }
                ,               
                client_message_for_provider:{                   
                    required: true,
                }
        },
        messages: {
                name_of_provider: "Please enter name of the provider",
                provider_email1: "Please enter provider email 1",
                provider_email2: "Please enter provider email 2",
                client_name: "Please enter your name",
                client_email: "Please enter your email",
                client_message_for_provider: "Please enter your message for provider",               
            }
    });
    
    $( "#client_date_of_meeting" ).datepicker({
        dateFormat: "mm-dd-yy"
    });
});
</script>
<section id="main-container" class="request_a_client_reference">
    
    <div id="content_left">
        <img class="provider_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000021989227_Large-min.jpg"/>
    </div>
    
    <div id="content_right">
        <section class="form_container">
            <form id="request_a_reference" class="request_a_reference"  method="post">               
                <div class="form_title"> <h1>Request a Reference</h1></div> 
                <div class="separator separator_provider_forgot "></div>             
                
               <div class="<?php echo $this->session->flashdata('message_class');?>"><?php echo $this->session->flashdata('message');?></div>
               <div class="post-reviw-column3">
                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="name_of_provider">Provider Name</label><span class="required_field"> *</span>
                         <br>
                         <input type="text" name="name_of_provider" placeholder="Enter Name of provider* " class="name_of_provider" id="name_of_provider" value="<?php echo set_value('name_of_provider');?>" />
                       
                        <?php echo form_error('name_of_provider', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="post-reviw-column3">
                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="provider_email1">Email 1</label><span class="required_field"> *</span>
                         <br>
                         <input type="text" name="provider_email1" placeholder="Enter provider email 1* " class="provider_email" id="provider_email1" value="<?php echo set_value('provider_email1');?>" />
                        
                        <?php echo form_error('provider_email1', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                    
                </div>
                <div class="post-reviw-column3">
                    
                     <div class="post_review_column_inner">
                        <label class="normal_text_label" for="provider_email2">Email 2</label> 
                         <br>
                         <input type="text" name="provider_email2" placeholder="Enter provider email 2 * " class="client_name" id="provider_email2" value="<?php echo set_value('provider_email2');?>" />
                       
                        <?php echo form_error('provider_email2', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                    
                </div>
                
                <div class="post-reviw-column3">
                     <br><br>
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_name">Your Name</label><span class="required_field"> *</span>
                         <br>
                         <input type="text" name="client_name" placeholder=" Enter your name* " class="client_name" id="client_name" value="<?php echo set_value('client_name');?>" />
                         <?php echo form_error('client_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_date_of_meeting">Date of Meeting</label>
                         <br>
                         <input type="text" name="client_date_of_meeting" placeholder="Enter date of meeting " class="client_date_of_meeting" id="client_date_of_meeting" value="<?php echo set_value('client_date_of_meeting');?>" />
                         <?php echo form_error('client_date_of_meeting', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_email">Email</label><span class="required_field"> *</span>
                         <br>
                         <input type="text" name="client_email" placeholder="Enter your email* " class="client_email" id="client_email" value="<?php echo set_value('client_email');?>" />
                         <?php echo form_error('client_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_phone">Phone</label>
                         <br>
                         <input type="text" name="client_phone" placeholder="Client phone " class="client_phone" id="client_phone" value="<?php echo set_value('client_phone');?>" />                        
                        <?php echo form_error('client_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                 <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">                       
                        <label class="normal_text_label" for="client_message_for_provider">Message</label> <span class="required_field">*</span>
                        <br>
                        <textarea id="client_message_for_provider" name="client_message_for_provider" placeholder="Personal message to provider:" class="text_format textarea_contact" ></textarea>
                        <?php echo form_error('client_message_for_provider', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>                
                
                <span class="submit_button_contact">  
                    <input type="submit" id="Submit" name="Submit" value="Request a Reference" class="submit_button">
                </span>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <h3 class="text_format">In order to receive a reference, the provider must be a active verifiable provider.</h3>
                    </div>                    
                </div>
            </form>
        </section>
    </div>  
    <div class="clear"></div> 
</section>
