
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('adminLTE'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('adminLTE'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page">
        <div class="login-box">

            <div class="login-logo">
                <a href="../../index2.html"><b>Xeno_Registration</b></a>
            </div><!-- /.login-logo -->

            <div class="login-box-body">
                <form action="<?php echo base_url('login/login_user'); ?>" method="post">

                    <?php if ($register = $this->session->flashdata('login_failed')) {
; ?>

                        <div claas="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dismissible alert-danger" style="margin-bottom: 15px;">


    <?= $register ?>

                                </div>
                            </div>
                        </div>
                    <?php } ?>

<?php if ($success = $this->session->flashdata('success')) {
; ?>

                        <div claas="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dismissible alert-success" style="margin-bottom: 15px;">


    <?= $success ?>

                                </div>
                            </div>
                        </div>
<?php } ?>

                    <p class="login-box-msg">Sign in to start your session</p>


                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Enter register Email Or Mobile Number" name="username" value="<?php echo set_value('username'); ?>"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?> </div>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>

                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <div><?php echo form_error('password', "<p class='text-danger'>", "</p>"); ?> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" >Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                </div><!-- /.social-auth-links -->

                <a href="<?php echo base_url('login/forget_password'); ?>">I forgot my password</a><br>
                <a href="<?php echo base_url('login/sign_up'); ?>" class="text-center">Register a new membership</a>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('adminLTE'); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>