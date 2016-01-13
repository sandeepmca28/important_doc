<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>RefsNow admin panel</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo HTTP_CSS_PATH; ?>signin.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
          <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
        <![endif]-->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script>
            $(function () {

                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#username').val(localStorage.usrname);
                    $('#pass').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#username').val('');
                    $('#pass').val('');
                }

                $('#remember_me').click(function () {

                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#username').val();
                        localStorage.pass = $('#pass').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });

        </script>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <?php
                    if (isset($error) && $error != '')
                    {
                        ?>
                         <div class="alert alert-danger">
                                 <?php echo $error; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <form class="form-horizontal panel " method="post" action="<?php echo base_url(); ?>admin/home/do_login">
                        <h2 class="text-center form-signin-heading">Please sign in</h2>
                        <div class="form-group form-group-sm">
                            <label for="username" class="col-sm-4  control-label">Username</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control " placeholder="Username" name="username" id="username" autofocus>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="pass" class="col-sm-4  control-label">Username</label>
                            <div class="col-sm-5">
                                <input type="password" id="pass"  class="form-control input-md"  placeholder="Password" name="password">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="remember_me" class="col-sm-4  control-label"></label>
                            <div class="col-sm-5">
                                <input type="checkbox"   value="remember-me" id="remember_me">Remember me
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="submit" class="col-sm-4  control-label"></label>
                            <div class="col-sm-5">
                                <button id="submit" class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>