<section id="main-container">

    <div id="content_left">
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000024716250_RN-min.jpg"/>
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/iStock_000058068876_Full RN-min.jpg" />
        <img class="client_login_image" src="<?php echo base_url(); ?>theme/images1/post_review_1.jpg"/>
    </div>

    <div id="content_right">

        <section class="form_container">
            <form enctype="multipart/form-data" name="suggestion_form" id="suggestion_form" method="post">

                <div class="form_title"><h1>Ref’sNow Subscription </h1></div>
                <div class="separator separator_provider_signup"></div>
                <div class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
                <div class="subsciption_container">


                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">$29.95</label>
                            <label for="message" class="normal_text_label">1 months</label>
                        </div>
                    </div>

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">$44.95</label>
                            <label for="message" class="normal_text_label">3 months</label>
                        </div>
                    </div>
                    
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">$70.95</label>
                            <label for="message" class="normal_text_label">6 months</label>
                        </div>
                    </div>

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">$129.95</label>
                            <label for="message" class="normal_text_label">12 months</label>
                        </div>
                    </div> <br><br>

                    <h3 class="subscription_h3">Payment</h3>
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">Visa / MC /AM EX /Discover </label>
                        </div>
                    </div>    
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label"> Paypal </label>
                        </div>
                    </div> 
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label"> Prepaid credit cards  </label>

                        </div>
                    </div> <br><br>

                    <h3 class="subscription_h3">Earn point toward a free subscription</h3>
                    <h4 style="color:#c83923;" class="subscription_h4_ttitle">Point Rewards: </h4>
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">Refer a provider - 2 pts ​ </label>
                        </div>
                    </div> 

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">Refer a provider with sign up additional - 3 pts ​</label>
                        </div>
                    </div> 

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">Post a Review - 5 pts </label>                      
                        </div>
                    </div>

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">Send Client invite - 2 pts ​ </label>                      
                        </div>
                    </div>

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">Suggestions: 1 pts </label>                      
                        </div>
                    </div> <br><br>

                    <h3 class="subscription_h3">Free Subscription if below conditions met</h3>

                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">35 points = 1 free monthly subscription </label>                      
                        </div>
                    </div>
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">3 months free subscription with referral of RefsNow provider or RefsNow client </label>                      
                        </div>
                    </div>
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <label for="message" class="normal_text_label">1 month free with signup of verifiable provider without invite </label>                      
                        </div>
                    </div>
                    <div class="post-reviw-column3">
                        <div class="post_review_column_inner">
                            <a class="submit_button_uni" href="<?php echo  base_url();?>subscription/payment">Apply for subscription</a>
                        </div>
                    </div>
                </div>  
            </form>
        </section>
    </div>
    <div class="clear"></div>
</section>