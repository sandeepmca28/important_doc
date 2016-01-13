<script>
$(document).ready(function(){
    
    $("#provider_profile_form").validate({
        rules: {
                pu_user_fname: "required",
                pu_user_email:{
                    email:true,
                    required: true
                }
                , 
                pu_user_email2:{
                    email:true,
                   
                },
                pu_user_country :{
                    
                    required:true
                },
                 pu_user_city :{
                    
                    required:true
                },
                 pu_user_state :{
                    
                    required:true
                },
        },
        messages: {
                pu_user_fname: "Please your name",
                pu_user_email:"Pealse enter valid email"
        }
    });
});

</script>
<section id="main-container">
    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/Z - iStock_000047151940Large-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-24508071-sexy-woman-lying-on-bed-using-cell-phone-min.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/z - stock-photo-28972460-woman-in-bed-with-laptop-min.jpg"/>
        </div>
    <div id="content_right">
        
         <section  class="form_container">
             <form  enctype="multipart/form-data" name="provider_profile_form" id="provider_profile_form" method="post">

                <div class="form_title"> <h1>Become A Member</h1></div> 
                <div class="separator separator_provider_signup"></div>
                <div >
                <p class="become_member_txt">
                    
                      <b>Become a Member</b><br>

                      <b>Terms & Conditions of this site:</b><br><br>

                        <p> Must be an active verifiable provider in order to become member of this site.

                        We preferred our members to be invited by other providers members.

                        Members are encouraged you to invite other verifiable provider to become part of this community.

                        This is a exclusive community of verifiable providers who value their safety and the safety of other providers.

                        If anyone violates the terms of this site we will revoke their membership.

                        Please report abuse of this site to support@refsnow.com

                        Under no circumstances are clients allowed to see the providers confidential reviews.

                        Clients may use this site to invite providers to post references.

                        Clients will only be able to views the # of reviews and their star ratings.

                        Providers information is completely confidential.<br><br>

                        <a class="sign_up_become_member" href="<?php echo base_url().'provider/signup' ?>"> Sign Up </a> 

                        
                 </p>
                </div>
                
        </section>
    </div>  
    <div class="clear"></div>       
</section>
<script src="<?php echo base_url(); ?>theme/js/provider_profile.js"></script>