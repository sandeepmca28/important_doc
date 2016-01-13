<section class="provider_search_listing_page" id="main-container">
    <div class="content-container">
        
        <div class="page_heading"> Search Results </div>
        <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
        
        <div class="row_title">
            <ul class="row_title_heading">
                <li class="provider_name">First Name</li>
                <li class="provider_email1">Email 1</li>
                <li class="provider_email2">Email 2</li>                
                <li class="provider_phone1">Phone 1</li>
                <li class="provider_phone2">Phone 2</li>
                <li class="provider_search_detail">Detail</li>
            </ul>
        </div>
        
        <?php if(isset($listing) && !empty($listing))
              {
                 foreach ($listing as $key => $value)
                 {
                    ?>
                        <div class="row_data">
                           <ul class="row_data_detail">
                                <li class="provider_name"><?php echo $value->pu_user_fname; ?></li>
                                <li class="provider_email1"><?php echo $value->pu_user_email; ?></li>
                                <li class="provider_email2"><?php echo $value->pu_user_email2; ?></li>
                                <li class="provider_phone1"><?php echo $value->pu_user_phone; ?></li>
                                <li class="provider_phone2"><a href="<?php echo $value->pu_user_phone2; ?>"></a></li>
                                <li class="provider_search_detail"><a href="<?php echo base_url().'provider/provider_detail/'.  encodeWithCodeigniter($value->pu_user_id); ?>">view</a></li>
                           </ul>
                       </div>
                    <?php
                }
                ?>
                    <div class="pagination"> <?php //echo $pagination; ?> </div>
                <?php
              } else 
              { ?>
                    <div class="pagination">No results </div>
                <?php 
              } ?>
        <div class="add-space">&nbsp;</div>
    </div>
</section>