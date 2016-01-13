<section class="browse_black_list_page" id="main-container">
    <div class="content-container">
        
        <div class="page_heading">Browse Blacklist Database</div>
        <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
        
        <div class="row_title">
            
            <ul class="row_title_heading">
                <li style="display:none;" class="black_search_id">ID</li>
                <li class="black_search_inc_date">Incident Date</li>
                <li class="black_search_city">City</li>                
                <li class="black_search_state">State</li>
                <li class="black_search_name">Name</li>
                <li class="black_search_phone">Phone</li>
                <li class="black_search_email">Email</li>
                <li class="black_search_handle">Handle</li>
                <li style="display:none;" class="black_search_category">Category</li>
                <li class="black_search_detail">Detail</li> 
            </ul>
            
        </div>
        
        <?php if(isset($listing) && !empty($listing))
              {
                 foreach ($listing as $key => $value) 
                 {
                    ?>
                        <div class="row_data">
                           <ul class="row_data_detail">
                                <li style="display:none;" class="black_search_id"><?php echo $value->review_id ?></li>
                                <li class="black_search_inc_date"><?php echo formatDate($value->review_creation) ?></li>
                                <li class="black_search_city"><?php echo $value->client_city; ?></li>
                                <li class="black_search_state"><?php echo $value->state; ?></li>
                                <li class="black_search_name"><?php  echo $value->first_name.' '.$value->last_name; ?></li>
                               
                                <li class="black_search_phone"><a href="<?php echo $value->client_phone.','.$value->client_cell_phone; ?>"></a></li>
                                <li class="black_search_email"><a href="<?php echo $value->client_email,$value->client_email2,$value->client_proffessional_email; ?>"></a></li>
                                <li class="black_search_handle"><?php  echo $value->client_ter_handle.','.$value->client_pf411_handle.','.$value->client_datecheck_handle; ?></li>
                                <li style="display:none;" class="black_search_category"><a href="<?php //echo $value->client_phone; ?>"></a></li>
                                <li class="black_search_detail"><a href="<?php echo base_url().'browse_black_list/black_list_review_detail/'. encodeWithCodeigniter($value->review_id); ?>">view</a></li>
                           </ul>
                       </div>
                    <?php
                }
                ?>
                    <div class="pagination"> <?php echo $pagination; ?> </div>
                <?php
              } else 
              { ?>
                    <div class="pagination"> No results </div>
                <?php 
              } ?>
        <div class="add-space">&nbsp;</div>
    </div>
</section>