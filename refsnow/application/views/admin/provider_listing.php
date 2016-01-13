<?php
$this->load->view('admin/vwHeader');
?>
<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Providers <small>Manage Provider Module</small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo HTTP_ADMIN_BASE_URL; ?>providers"><i class="icon-dashboard"></i> Provider Listing</a></li>
                <li class="active"><i class="icon-file-alt"></i> Users</li>

                <button class=" hide btn btn-primary" type="button" style="float:right;">Add New User</button>
                <div style="clear: both;"></div>
            </ol>
        </div>

    </div><!-- /.row -->

    <div class="row">           
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover tablesorter">
                    <thead>
                        <tr>
                            <th class="header">UserName <i class="fa fa-sort"></i></th>
                            <th class="header">Email <i class="fa fa-sort"></i></th>
                            <th class="header">Name <i class="fa fa-sort"></i></th>
                            <th class="header">Points<i class="fa fa-sort"></i></th>
                            <th class="header">Sign up date<i class="fa fa-sort"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                            if(isset($listing) && !empty($listing))
                            { 
                                 foreach($listing as $row)
                                 {
                                    ?>
                                    <tr>
                                        <td><a href="<?php HTTP_ADMIN_BASE_URL; ?>providers/detail/<?php echo $row->pu_user_id;?>"><?php echo $row->username ?></a></td>
                                        <td><?php echo $row->pu_user_email ?></td>
                                        <td><?php echo ucwords($row->pu_user_fname); ?></td>
                                        <td><a href="<?php HTTP_ADMIN_BASE_URL; ?>providers/point_received/<?php echo $row->pu_user_id;?>">view</a></td>
                                        <td><?php echo formatDate($row->pu_user_created); ?></td>
                                    </tr>
                                     <?php 

                                     }
                                 }
                                 else 
                                { ?>
                                    <tr>
                                        <td colspan="4">No records found</td>
                                    </tr>
                                    <?php 
                                } ?>
                    </tbody>
                </table>
            </div>
            <div clas="pagination pagination-sm"> <?php echo $pagination; ?></div>
        </div>            
    </div>

</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>