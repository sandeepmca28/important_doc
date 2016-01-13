<script>
$(document).ready(function(){
    $("#client_onctact_form").validate({
        rules: {  
                textarea_contact:{                    
                    required: true,
                },
                /*provider_email:{
                    email:true,
                    required: true,
                },*/
        },
        messages: {
                textarea_contact: "Please enter your message",
                /*persoanl_message_text: "Please enter your personal message to proivder" */
            }
    });
});
</script>
<section class="client_contact_page" id="main-container">
    <div class="content-container">
        
       
        <form action="" method="post" name="client_onctact_form" id="client_onctact_form"  >
        <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
        <div class="contact_us">
            
            <div class="contact_us_fields">
                
                <textarea style="height: 111px; width: 918px;" cols="" rows="" class="textarea_contact" id="textarea_contact" placeholder="enter your message here" name="textarea_contact"> </textarea>
            
            </div>
            
            <div class="contact_us_button">
                
               <input type="submit" class="submit_button" value="Send Message" name="Submit" id="Submit">               
               
            </div>
            
            <?php  if(!empty($list_messages)){ 
                
                //pre($list_messages);
                foreach($list_messages as $k=>$v)
                { 
                    
                    if($v['message_by']==1){
                    ?>
                        <div class="listing_messages">
                            <p class="messages_writer"><?php echo 'Admin: '. mysql_date_m_d_y($v['created_date']); ?></p>
                            <p class="messages"> <?php echo  $v['message']; ?> </p>
                        </div>
                    <?php 
                   }else
                   { ?>
                        <div class="listing_messages">
                            <p class="messages_writer"><?php echo ucfirst($v['pu_user_fname']).': ('.mysql_date_m_d_y($v['created_date']); ?>)</p>
                            <p class="messages"> <?php echo $v['message']; ?> </p>
                        </div>
                   
                    <?php
                   }
                } 
            
                } else { ?>
            
            <?php } ?>
        </div>
        </form>
        <div class="add-space">&nbsp;</div>
    </div>
</section>