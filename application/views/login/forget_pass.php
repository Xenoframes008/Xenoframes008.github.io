
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Forget Password</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link href="<?php echo base_url('adminLTE'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('adminLTE'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('adminLTE'); ?>/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />


        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index.php"><b></b></a>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg">Forget Password</p>
                <form method="post" action="<?php base_url('login/forget_password'); ?>">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="email" placeholder="Email"  name="email" value="<?php echo set_value('email'); ?>"/>
                        <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?> </div>

                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-primary btn-block btn-flat">Back to Login</a>
            </div>
        </div>
    </form>

    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>

    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
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
