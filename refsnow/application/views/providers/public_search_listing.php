<section class="public_search_page" id="main-container">
    <div class="content-container">
        
        <div class="page_heading">Public Search Results</div>
        <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
        
        <div class="row_title">
            
            <ul class="row_title_heading">
               
                <li class="first_name">First Name</li>
                <li class="last_name">Last Name</li>                
                <li class="email">Email</li>               
                <li class="phone">Phone</li>             
                <li class="handle">Handle</li>
                <li class="category">Category</li>
                
            </ul>
            
        </div>
        
        <?php if(isset($listing) && !empty($listing))
              {
                 foreach ($listing as $key => $value) 
                 {
                    ?>
                        <div class="row_data">
                           <ul class="row_data_detail">
                                <li  class="first_name"><?php echo $value->client_first_name ?></li>
                                <li  class="last_name"><?php echo $value->client_last_name ?></li>
                                <li  class="email"><?php echo $value->client_email; echo !empty($value->client_email2)? ', '.$value->client_email2:''; echo  !empty($value->client_proffessional_email)? ', '.$value->client_proffessional_email:''; ?></li>
                                <li  class="phone"><?php echo $value->client_phone; echo !empty($value->client_cell_phone)? ', '.$value->client_cell_phone:'';', '.$value->client_cell_phone ?></li>
                                <li  class="handle"><?php echo $value->client_ter_handle.', '.$value->client_datecheck_handle.', '.$value->client_pf411_id.', '.$value->client_eccie_handle.', '.$value->client_other_handle; ?></li>
                                <li  class="category"><?php //echo $value->review_id ?></li>
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