<script>
$(document).ready(function()
{
    $("#payment_subscrptrion_form").validate(
    {   
        rules: 
        {   subscription :
            {
                required: true
            }
        },
        messages: 
        {
            subscription: "Please choose subscription duration"
        }
    });
});
</script>
<section id="main-container">

    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000024716250_RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000058068876_Full RN-min.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
    </div>

    <div id="content_right">
        <section class="form_container">
            
            <form enctype="multipart/form-data" name="payment_subscrptrion_form" id="payment_subscrptrion_form" method="post">
                
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="no_note" value="1" />
                <input type="hidden" name="lc" value="US" />
                <input type="hidden" name="no_shipping" value="1" />
                <input type="hidden" name="rm" value="2" />
                <input type="hidden" name="currency_code" value="USD" />
                <input type="hidden" name="bn" value="BuyNow" /> 
                
                <?php /*<input type="hidden" name="first_name" value="<?php echo $provider_detail->pu_user_fname ?>" />*/?>
                <?php /* <input type="hidden" name="last_name" value="Customer's Last Name" /> */?>
               
                <input type="hidden" name="payer_email" value="<?php echo $provider_detail->pu_user_email ?>" />
                <input type="hidden" name="item_number" value="<?php echo $this->session->userdata('provider_id'); ?>" />
                           
                <div class="form_title"><h1>Ref’sNow Subscription Payment </h1></div>
                <div class="separator separator_provider_signup"></div>
                <div class="<?php //echo $this->session->flashdata('message_class'); ?>"><?php // echo $this->session->flashdata('message'); ?></div>
                <div class="subsciption_container">
                    
                     <div class="post-reviw-column3">
                        <div class="post_review_column_inner">                            
                            <label for="subscription" class="error"></label>
                        </div>
                    </div>
                     <div class="post-reviw-column3">
                        <div class="post_review_column_inner">                            
                            <input type="radio" value="1" required name="subscription" id="subscription" />                            
                            <label for="message"  class="normal_text_label">($29.95)  1 months</label>
                        </div>
                    </div>
                     <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <input type="radio" value="2" required name="subscription" id="subscription" />                            
                            <label for="message" class="normal_text_label">($44.95) 3 months</label>
                        </div>
                    </div>
                                       
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <input type="radio" value=3 required name="subscription" id="subscription" />                            
                            <label for="message" class="normal_text_label">($70.95)  6months</label>
                        </div>
                    </div>
                    
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <input type="radio" value="4" name="subscription" id="subscription" />                            
                            <label for="message" class="normal_text_label">($129.95) 12 months</label>
                        </div>
                    </div>
                    
                    
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">                            
                            <input class="submit_button_uni" type="submit" value="Payment" name="Payment" id="Payment" />                                                        
                        </div>
                    </div>
                    
                </div>  
            </form>
        </section>
    </div>
    <div class="clear"></div>
</section>