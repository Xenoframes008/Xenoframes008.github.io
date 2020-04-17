<?php $user = $this->login_model->get_user_details(); ?>
<body class="register-page">
    <div class="register-box">


        <div class="register-box-body">
            <p class="login-box-msg">Change your password</p>
            <form action="<?php echo base_url('login/change_passw'); ?>" method="post">
                <div class="form-group has-feedback">
                    <label> Old Password :</label>
                    <input type="text" class="form-control" placeholder="oldPassword" name="password" value="<?php echo set_value('oldPassword', $user['password']); ?>"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                </div>

                <div class="form-group has-feedback">
                    <label> New Password :</label>
                    <input type="password" class="form-control" placeholder="Eenter New Password" name="password"  value="<?php echo set_value('password'); ?>"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <div><?php echo form_error('password', "<p class='text-danger'>", "</p>"); ?> </div>
                </div>
                <div class="form-group has-feedback">
                    <label> Confirm Password :</label>
                    <input type="password" class="form-control" placeholder="Retype password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <div><?php echo form_error('confirm_password', "<p class='text-danger'>", "</p>"); ?> </div>
                </div>

                <div class="row"> 
                    <div class="col-xs-8">    
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Strong Password 
                            </label>
                        </div>                        
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div><!-- /.col -->
                </div>
            </form>        




        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
</body>