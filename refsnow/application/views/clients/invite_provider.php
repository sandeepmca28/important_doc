<script>
$(document).ready(function(){
    $("#invite_provider").validate({
        rules: {              
                 name_of_provider:{
                     required: true
                 }
                ,
                 provider_email:{
                     email:true,
                     required: true
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
                name_of_provider: "Please name of the provider",
                provider_email: "Please provider email",
                client_name: "Please your name",
                client_email: "Please your email",
                client_message_for_provider: "Please enter your message for provider",               
            }
    });
});
</script>
<section id="main-container" class="request_a_client_reference">
    
    <div id="content_left">
        <img class="provider_login_image" src="<?php echo base_url(); ?>theme/images/iStock_000021989227_Large-min.jpg"/>
    </div>
    
    <div id="content_right">
        <section class="form_container">
            <form id="invite_provider" class="invite_provider"  method="post">               
                <div class="form_title"> <h1>Invite a provider</h1></div> 
                <div class="separator separator_provider_forgot "></div>                
                
                <div class="<?php echo $this->session->flashdata('message_class');?>"><?php echo $this->session->flashdata('message');?></div>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <h3 class="text_format">Do you know a provider who would benefit from RefsNow?</h3>
                        <p class="text_format">Please enter providers name and email with a personalized invitation to join RefsNow. </p>
                    </div>
               </div>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="name_of_provider">Name of Provider</label><span class="required_field">*</span>
                         <br>
                         <input type="text" name="name_of_provider" placeholder="Enter Name of provider* " class="name_of_provider" id="name_of_provider" value="<?php echo set_value('name_of_provider');?>" />
                        <?php echo form_error('name_of_provider', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="provider_email">Provider Email</label> <span class="required_field">*</span>
                         <br>
                         <input type="text" name="provider_email" placeholder="Enter provider email* " class="provider_email" id="provider_email" value="<?php echo set_value('provider_email');?>" />
                        <?php echo form_error('provider_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                
                <div class="post-reviw-column3">
                     <br> <br>
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_name">Client Name</label><span class="required_field">*</span>
                        <br>
                        <input type="text" name="client_name" placeholder="Client name* " class="client_name" id="client_name" value="<?php echo set_value('client_name');?>" />
                        <?php echo form_error('client_name', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                
                <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_email">Client Email</label>      <span class="required_field">*</span>
                         <br>
                         <input type="text" name="client_email" placeholder="Client email* " class="client_email" id="client_email" value="<?php echo set_value('client_email');?>" />
                         <?php echo form_error('client_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                
                <div class="post-reviw-column3">
                    
                    <div class="post_review_column_inner">
                        <label class="normal_text_label" for="client_phone">Client Phone</label> 
                         <br>
                         <input type="text" name="client_phone" placeholder="Client phone " class="client_phone" id="client_phone" value="<?php echo set_value('client_phone');?>" />
                        <?php echo form_error('client_phone', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                    
                </div>
                
                 <div class="post-reviw-column3">                    
                    <div class="post_review_column_inner">                       
                        <input type="checkbox" name="client_request_for_reference" class="client_request_for_reference" id="client_request_for_reference" value="1"/> <span class="text_format">Request a References from Provider</span>                         
                        <?php echo form_error('client_request_for_reference', '<div class="required_class_1">', '</div>'); ?>
                    </div>                    
                </div>
                                 
                <div class="post-reviw-column3">
                    
                    <div class="post_review_column_inner">                       
                        <label class="normal_text_label" for="client_message_for_provider">Personal message to provider</label> <span class="required_field">*</span>
                        <br>
                        <textarea id="client_message_for_provider" name="client_message_for_provider" placeholder="Personal message to provider:" class="text_format textarea_contact" ></textarea>
                        <?php echo form_error('client_message_for_provider', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                    
                </div>
                
                <span class="submit_button_contact">  
                    <input type="submit" id="Submit" name="Submit" value="Send Invitation" class="submit_button">
                </span>
            </form>
        </section>
    </div>  
    <div class="clear"></div> 
</section>
