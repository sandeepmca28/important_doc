<?php
$this->load->view('admin/vwHeader');
?>

<script>
    $(document).ready(function () {
        $('.approvePoint').click(function () 
        {
            var provider_id = $(this).data('providerid');
            var point_id = $(this).data('pointid');
            var request = $.ajax({
                url: base_url+"providers/approve_action",
                method: "POST",
                data: {pid: provider_id,point_id:point_id},
                dataType: "html"
            });

            request.done(function (msg) {
                $("#log").html(msg);
            });

            request.fail(function (jqXHR, textStatus) {
                alert("Request failed: " + textStatus);
            });

        });

    });

</script>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Providers <small>Manage Provider Module</small></h1>

            <ol class="breadcrumb">
                <li><a href="<?php echo HTTP_ADMIN_BASE_URL; ?>providers"><i class="icon-dashboard"></i> Provider Listing</a></li>
                <li class="active"><i class="icon-file-alt"></i>Points Detail</li>

                <button class=" hide btn btn-primary" type="button" style="float:right;">Add New User</button>
                <div style="clear: both;"></div>

            </ol>

        </div>

    </div><!-- /.row -->

    <div class="row">
        <div class="col-sm-12 ">

            <h3>Provider points detail</h3>
            <hr>
            <table class="table  table-hover">
                <thead>
                    <tr>

                        <th>Point Type</th>
                        <th>Points </th>
                        <th>Approved Status</th>
                        <th>Approved Date</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($points) && !empty($points))
                    {

                        foreach ($points as $key => $value)
                        {
                            ?>
                            <tr>
                                <td><?php echo pointType($value->type) ?></td>
                                <td><?php echo $value->points ?></td>
                                <td class=""><?php echo approvedStatus($value->approved_status) ?> &nbsp;<button  type="button"  data-providerid="<?php echo $value->pid; ?>" data-pointid="<?php echo $value->iddd; ?>" class="approvePoint  btn  btn-primary btn-xs" >Approve Now </button></td>
                                <td><?php echo formatDate($value->approved_date) ?></td>
                                <td><?php echo formatDate($value->created_date) ?></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>



        </div>
    </div>
</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>