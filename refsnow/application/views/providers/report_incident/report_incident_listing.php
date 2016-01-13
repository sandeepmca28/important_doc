<section id="main-container">
    <div class="content-container">
        <div class="page_heading">Your Incident Report Listing</div>
        <div class="row_title">
            <ul class="row_title_heading">
                <li class="inc_date">Incident Date</li>
                <li class="inc_city">Incident City</li>
                <li class="inc_email">Client Email</li>
                <li class="inc_phone">Client Phone</li>
                <li class="inc_view_detail">View Detail</li>
            </ul>

        </div>
        <?php
        if (isset($your_incident_data) && !empty($your_incident_data))
        {
            foreach ($your_incident_data as $key => $value)
            {
                ?>
                <div class="row_data">
                    <ul class="row_data_detail">
                        <li class="inc_date"><?php echo formatDate($value->report_incident_date); ?></li>
                        <li class="inc_city"><?php echo $value->report_incident_city; ?></li>
                        <li class="inc_email"><?php echo $value->report_first_email; ?></li>
                        <li class="inc_phone"><?php echo $value->report_first_phone; ?></li>
                        <li class="inc_view_detail"><a href="<?php echo base_url() . 'report_incident/edit_incident_report/' . $value->report_incident_id; ?>">View Detail</a></li>
                    </ul>
                </div>
                <?php
            }
        }
        ?>
        <div class="add-space">&nbsp;</div>   
    </div>
</section>