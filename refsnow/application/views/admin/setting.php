<?php
$this->load->view('admin/vwHeader');
?>
<script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>tinymce/tinymce.min.js"></script>
<script>

    tinymce.init({selector: 'textarea',
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        relative_urls: false,
        height: "500",
        width: 900
    });
</script>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1> <small> Setting</small></h1>
            <ol class="breadcrumb">
                
                <li ><i class="icon-file-alt"></i> Edit </li>        

            </ol>
        </div>
    </div><!-- /.row -->

    <div class="row">
        <div class="col-sm-6 ">
            <div class="fld">
                <?php if($this->session->flashdata('msg')){ ?>
                <div class="alert <?php echo $this->session->flashdata('msg_class');  ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('msg');  ?>
                </div>
                <?php } ?>
                <?php //echo form_error('password', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>', '</div>'); ?>
                <form method="post"  class="form-horizontal">
                    <div class="form-group ">
                        <label for="password" class="col-sm-4  control-label">Username</label>
                        <div class="col-sm-8">
                            <input required="" type="username" min="4" maxlength="15" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input required type="email"  maxlength="50" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <?php //pre($this->session->all_userdata()); ?> <button type="submit" class="btn btn-primary btn-md">Save</button>
                        </div>
                    </div>
                </form>
            </div>      
        </div>
    </div>
</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>