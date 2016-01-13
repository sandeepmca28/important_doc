<?php
$this->load->view('admin/vwHeader');
?>


<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Providers <small>Manage Points Module</small></h1>
            
            <ol class="breadcrumb">
                <li><a href="<?php echo HTTP_ADMIN_BASE_URL; ?>providers"><i class="icon-dashboard"></i> Provider Listing</a></li>
                <li class="active"><i class="icon-file-alt"></i> Detail</li>
                
                <button class=" hide btn btn-primary" type="button" style="float:right;">Add New User</button>
                <div style="clear: both;"></div>
                
            </ol>
            
        </div>

    </div><!-- /.row -->

    <div class="row">
        <div class="col-sm-12 ">

            <h3>Provider points Detail</h3>
            <hr>
            <form class="form-horizontal ">
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">UserName:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->username ?></p>
                       
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Name:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static text-capitalize"><?php echo $detail->pu_user_fname ?></p>
                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Primary Email:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_email ?></p>
                        
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Second Email:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_email2; ?></p>
                        
                    </div>
                </div><hr>
                 <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Phone 1:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_phone ?></p>
                        
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Phone 2:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_phone2 ?></p>
                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Website url:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_website ?></p>
                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">city:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_city; ?></p>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">State:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->state; ?></p>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Country:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->country; ?></p>                        
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">TER ID:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_terID; ?></p>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">TER Link:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_tr_id_link; ?></p>                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">PF11 ID:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_pf11ID; ?></p>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">PF11 Link:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_pf11ID_link; ?></p>                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">AF ID:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_af_id; ?></p>                        
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label label_left">AF Link:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_af_id_link; ?></p>                        
                    </div>
                </div><hr>
                 <div class="form-group">
                    <label class="col-sm-2 control-label label_left">DateCheck ID:</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_datecheckID; ?></p>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Other :</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_other; ?></p>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">RS2K advertise :</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo ($detail->pu_user_RS2K_advertise=='y')?'Yes':'No'; ?></p>                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Created on :</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_created; ?></p>                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">RefsNow ID :</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo $detail->pu_user_rfn_p_id; ?></p>                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left ">Status :</label>
                    <div class="col-sm-10">
                        <p class="form-control-static"><?php echo ($detail->pu_user_activated==1)?'Active':'De-active'; ?></p>                        
                    </div>
                </div><hr>
                <div class="form-group">
                    <label class="col-sm-2 control-label label_left">Profile Pic :</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <img width="30%" class="img-rounded" src="<?php echo HTTP_PROVIDER_IMAGES_PATH.$detail->pu_user_photo.$detail->pu_user_ext;  ?>" />
                        </p>                        
                    </div>
                </div>
            </form>



        </div>
    </div>
</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>