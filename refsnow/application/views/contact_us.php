<script>
    $(document).ready(function () 
    {
        $("#contact_us_form").validate({
         rules: 
         {                
                name:
                {
                   required: true
                },                
                email: 
                {
                    required: true,
                    email: true,                    
                },                
                message: 
                {
                    required: true,                    
                },
         },
         messages: 
         {                
                username: "Please enter your name",                                               
                email: 
                {
                    email: "Please enter email",
                    required: "Please enter valid email",                   
                },
                message: "Please enter your message",                
         }
      });
  });

</script>
<section class="client-signup" id="main-container">
    <div id="content_left">
         <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000020978459_Full RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000024159767_Full-min.jpg"/>
    </div>

    <div id="content_right">
        <section class="form_container">
            
            <form class="contact_us_form" id="contact_us_form" method="post">

                <div class="form_title"> <h1>Contact Us </h1></div>
                <div class="separator separator_provider_signup"></div>
                
                <div class="<?php echo $this->session->flashdata('message_class');?>"><?php echo $this->session->flashdata('message');?></div>
                 <div class="column1">
                    <div class="column_inner">                        
                        <input type="text" placeholder="Enter your full name *" value="<?php echo set_value('name'); ?>" id="name" name="name" class=" placeholder"><span class="required_field">*</span>
                        <?php echo form_error('name', '<div class="required_class_1">', '</div>'); ?>                        
                    </div>
                </div>
                
                <div class="column1">
                    <div class="column_inner">                        
                        <input type="text" placeholder="Enter your email *" value="<?php echo set_value('email'); ?>" id="email" name="email" class=" placeholder"><span class="required_field">*</span>
                        <?php echo form_error('email', '<div class="required_class_1">', '</div>'); ?>
                        
                    </div>
                </div>
               <div class="column1">                   
                    <div class="column_inner">
                        <textarea style=" color: sienna;border: 1px solid sienna;height: 159px;width: 377px;" name="message" id="message" placeholder="Etner your message *"><?php echo set_value('message') ?></textarea><span class="required_field">*</span>
                        <?php echo form_error('message', '<div class="required_class_1">', '</div>'); ?>
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