<section id="main-container">
    <div class="content-container">
        <div class="page_heading">Your Reviews Listing</div>
         <div style="width: 100%;" class="<?php echo $this->session->flashdata('message_class'); ?>"><?php echo $this->session->flashdata('message'); ?></div>
        <div class="row_title">
            <ul class="row_title_heading">
                <li class="review_f_name">First Name</li>
                <li class="review_f_email">First Email</li>
                <li class="review_desccription">Review Description</li>
                <li class="review_view_detail">Edit Detail</li>
                <li class="review_view_detail">Last Updated</li>
                <li class="review_related">Related Reviews</li>
            </ul>
        </div>
        <?php if(isset($your_reviews) && !empty($your_reviews))
              {
                 foreach ($your_reviews as $key => $value)
                 {
                    ?>
                    <div class="row_data">
                       <ul class="row_data_detail">
                            <li class="review_f_name"><?php echo $value->first_name ?></li>
                            <li class="review_f_email"><?php echo $value->client_first_email ?></li>
                            <li class="review_desccription"><?php echo word_limiter($value->review_desc,4); ?></li>
                            <li class="review_view_detail"><a href="<?php echo base_url().'reviews/edit_review/'.encodeWithCodeigniter($value->review_id); ?>">Edit</a></li>
                            <li class="review_view_detail"><?php echo formatDateWithOption($value->last_updated,'d D,Y'); ?></li>
                            <li class="review_related"><a href="<?php echo base_url().'reviews/related_reviews_listing/'.encodeWithCodeigniter($value->review_id); ?>">Other Reviews</a></li>
                       </ul>
                   </div>
                 <?php
                }
             }  ?>
        <div class="add-space">&nbsp;</div>
    </div>
</section>
