<section class="client_search_listing_page" id="main-container">
    <div class="content-container">
        
        <div class="page_heading"> Search Results </div>
        <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
        
        <div class="row_title">
            <ul class="row_title_heading">
                <li class="client_search_name">First Name</li>
                <li class="client_last_name">Last Name</li>
                <li class="client_search_nic">Nic Name</li>                
                <li class="client_search_email">Email 1</li>
                <li class="client_search_phone1">Phone 1</li>
                <li class="client_search_detail">Detail</li>
            </ul>
        </div>
        
        <?php if(isset($listing) && !empty($listing))
              {
                 foreach ($listing as $key => $value)
                 {
                    ?>
                        <div class="row_data">
                           <ul class="row_data_detail">
                                <li class="client_search_name"><?php echo $value->client_first_name ?></li>
                                <li class="client_last_name"><?php echo $value->client_last_name ?></li>
                                <li class="client_search_nic"><?php echo $value->client_nic_name ?></li>
                                <li class="client_search_email"><?php echo $value->client_email; ?></li>
                                <li class="client_search_phone1"><a href="<?php echo $value->client_phone; ?>"></a></li>
                                <li class="client_search_detail"><a href="<?php echo base_url().'provider/client_detail/'.  encodeWithCodeigniter($value->client_id); ?>">view</a></li>
                           </ul>
                       </div>
                    <?php
                }
                ?>
                    <div class="pagination"> <?php //echo $pagination; ?> </div>
                <?php
              } else 
              { ?>
                    <div class="pagination"> No results </div>
                <?php 
              } ?>
        <div class="add-space">&nbsp;</div>
    </div>
</section>