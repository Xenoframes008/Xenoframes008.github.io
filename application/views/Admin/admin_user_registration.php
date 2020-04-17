<body class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>ADMIN DASHBORD</b></a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">Admin User Register</p>
            <form action="<?php echo base_url('login/admin_sign_up'); ?>" method="post">
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
                <div class="form-group has-feedback">

                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <select class="form-control" name="user_type" id="usert">
                        <option  selected="selected" >User_Type</option>

                        <option >HR</option>
                        <option >Marketing_Person</option>
                        <option >Sales_Manager</option>
                        <option >Account</option>
                        <option >Marketing_Sels_Executive</option>
                        
                    </select>

                </div>
                <div class="col-md-12 col-md-offset-1" style="margin-bottom: 15px;">

                </div>
                <div class="row"> 
                    <div class="col-xs-8">    
                        <div class="checkbox icheck">
                        </div>                        
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div><!-- /.col -->
                </div>
            </form>        

            <a href="<?php echo base_url('admin_dashbord/show_upload_img'); ?>" class="text-center">I don't want to create account</a>
       
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
    <script>
    $(document).ready()
    
    </script>