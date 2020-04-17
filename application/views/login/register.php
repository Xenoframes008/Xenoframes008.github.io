<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Registration Page</title>
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
    <body class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../../index2.html"><b>XENO ADMIN</b></a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="<?php echo base_url('login/sign_up'); ?>" method="post">
                    <div class="form-group has-feedback">

                        <input type="text" class="form-control" placeholder="Full name" name="username" value="<?php echo set_value('username'); ?>"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?> </div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?> </div>
                        <div class="text-danger"><?php //echo $error;  ?></div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <div><?php echo form_error('password', "<p class='text-danger'>", "</p>"); ?> </div>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Retype password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        <div><?php echo form_error('confirm_password', "<p class='text-danger'>", "</p>"); ?> </div>
                    </div>
                    <div class="form-group has-feedback">

                        <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" value="<?php echo set_value('mobile'); ?>"/>
                        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                        <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?> </div>
                    </div>
                    <div class="form-group" >
                        <div class="col-md-12">
                            <div class="" style="margin-bottom: 10px;" >
                                <label for="inputEmail3" class="">
                                    <input id="IsSmallBusiness" name="user_type" type="radio" value="Builder" <?= set_radio('user_type', 'Builder') ?> >
                                    Builders</label>
                                <label>
                                    <input id="IsSmallBusiness" name="user_type" type="radio" value="Reference" <?= set_radio('user_type', 'refferens') ?> >
                                    Reference 
                                </label>
                                <label>
                                    <input id="IsSmallBusiness" name="user_type" type="radio" value="Seller_Buyer" <?= set_radio('user_type', 'Seller/Buyer   ') ?> >
                                    Seller/Buyer
                                </label>

                                <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                <div><?php echo form_error('user_type', "<p class='text-danger'>", "</p>"); ?> </div>

                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                    </div>
                </form>        

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
                </div>
                <a href="<?php echo base_url('login'); ?>" class="text-center">I already have a membership</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
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