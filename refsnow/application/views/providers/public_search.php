<script>
var j = $.noConflict();   
j(document).ready(function(){
    
    j('#country').change(function(){
    
    var id = j(this).val();
    var request = j.ajax({
        url: baseUrl+"reviews/get_state_ajax",
        type: "POST",
        data: { id : id },
        dataType: "html"
    });
    
    request.done(function( msg ) {
            j( "#state" ).html( msg );
    });
    
    request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
    });
    
    request.error(function( xhr,status,error ) {
            alert( "Request failed: " + error );
    });

});
    
     j('#country').trigger('change');
});

</script>
<section id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/stock-photo-50980866-sensual-mature-woman-posing-in-black-lingerie-min.jpg" />      
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - iStock_000047770164_Full-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000029615742- RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000003253313_RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-28972460-woman-in-bed-with-laptop-min.jpg"/>
    </div>
    <div id="content_right">
         <section  class="form_container">
             <form id="create_review_form" action="<?php echo base_url(); ?>public_search/public_search_results" name="create_review_form" method="get">

                <div class="form_title"> <h1>Public Search</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                <div class="post-reviw-column">

                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 

                        <span class="normal_text_label">First Name? </span><br> 
                        
                        <input type="text" placeholder="First name" class="date_of_meeting" value="<?php echo set_value('first_name'); ?>" name="first_name" id="first_name" />
                       
                        <?php echo form_error('first_name', '<div class="required_class_1">', '</div>'); ?>
                        
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Last Name? </span><br>
                        <input type="text" placeholder="Last name" class="date_of_meeting" value="<?php echo set_value('last_name'); ?>" name="last_name" id="last_name" />
                         
                        <?php echo form_error('last_name', '<div class="required_class_1">', '</div>'); ?>
                         
                    </div>
                </div>

                <div class="post-reviw-column3">
                    <div class="post_review_column_inner"> 
                        <span class="normal_text_label">Email's? </span><br>
                        <input type="text" placeholder="First email" class="date_of_meeting" value="<?php echo set_value('client_first_email'); ?>" name="client_first_email" id="client_first_email" />
                        <?php echo form_error('client_first_email', '<div class="required_class_1">', '</div>'); ?>
                    </div>
                </div>
               
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Phone number? </span><br>                        
                        <input type="text" placeholder="First phone number" class="date_of_meeting"  value="<?php echo set_value('client_first_phone'); ?>" name="client_first_phone" id="client_first_phone" />                       
                        <?php echo form_error('client_first_phone', '<div class="required_class_1">', '</div>'); ?>                       
                    </div>
                </div>   
                                
                <div class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Usernames/Handles? </span><br>                        
                        <input type="text" placeholder="Usernames/Handles" class="date_of_meeting"  value="<?php echo set_value('client_handle'); ?>" name="client_handle" id="client_handle" />                       
                        <?php echo form_error('client_handle', '<div class="required_class_1">', '</div>'); ?>                       
                    </div>
                </div>   
                
                <div style="display:none;" class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">Country</span><br>                        
                        <select name="country" id="country" >
                            <option value="">Select Country</option>
                            <?php 
                             foreach($countries as $key=>$country )
                             {
                                 ?>
                                 <option <?php  if($country->id==840) { echo "selected" ;} ?> value="<?php echo $country->id;?>"><?php echo $country->country;?></option>
                             <?php
                             }
                             ?>
                    </select> 
                    </div>
                </div>
                 <div style="display:none;"  class="post-reviw-column3">
                    <div class="post_review_column_inner">
                        <span class="normal_text_label">State</span><br>                        
                        <select name="state" id="state" >
                            <option value="">Select State</option>
                            <?php                     
                             foreach($states as $key=>$state )
                             {
                                 ?>
                                 <option value="<?php echo $state->id;?>"><?php echo $state->name;?></option>
                             <?php
                             }
                             ?>
                    </select> 
                    </div>
                </div>
                <span class="submit_button_contact">
                    <input id="search" name="search" type="submit" value="Search Now" class="submit_button" />
                </span>
            </form>
        </section>
    </div>  
    <div class="clear"></div>       
</section>

