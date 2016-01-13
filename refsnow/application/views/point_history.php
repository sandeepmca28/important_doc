
<section class="page-point-history" >
    <div class="content-container">
        <section>
                <div class="page_heading">Points History</div>
                <h2>Total Points Earned</h2>
                <h2>Earn 35 points for free monthly subscription</h2>
                <div class="add-space">&nbsp;</div>
        </section>
        <div class="row_title">
            <ul class="row_title_heading">
                <li class="date">Date</li>
                <li class="description">Description</li>
                <li class="type">Type</li>
                <li class="earned">Earned Deducted</li>
                <li style="display: none;" class="points">Total Pts</li>
            </ul>
        </div>

        <div class="row_data">
            <ul class="row_data_detail">
             <?php

             //pre($points_listing);
              if(!empty($points_listing))
              {
                  $total=0;
                  foreach ($points_listing as $key => $value)
                  {
                       if($value->type!='dedecuted')
                       {
                          $array[]=$value->points;
                          $total= $total + end($array);
                       }
                        ?>
                        <li class="date"><?php echo formatDateWithOption($value->created_date,'m/d/y'); ?></li>
                        <li class="description">
                        <?php
                            if($value->approved_status == 'pending')
                            {
                                echo "Pending (" . ucfirst($value->pu_user_fname). ')';
                            }else
                            {
                                 echo  ucfirst($value->pu_user_fname);
                            }
                            ?>
                        </li>
                        <li class="type"><?php echo pointType($value->type); ?></li>
                        <li class="earned">
                        <?php
                             if($value->type!='dedecuted')
                             {
                                 echo "&nbsp;&nbsp;". $value->points;
                             }
                             else
                             {
                                 echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $value->points;
                             }
                        ?></li>
                        <li style="display: none;" class="points"><?php //echo $total; ?></li>
                        <?php
                  }
             }
             ?>
           </ul>
       </div>
        <div class="add-space">&nbsp;</div>
    </div>
</section>