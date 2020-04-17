
<?php//print_r($records); ?>
<body class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>ADMIN DASHBORD</b></a>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">Admin User Update</p>
            <form action="<?php echo base_url('admin/admin_user_update/' . $this->uri->segment(3)); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="username" value="<?= $records->username ?>"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?> </div>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $records->email ?>"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?> </div>
                    <div class="text-danger"><?php //echo $error;  ?></div>
                </div>

                <div class="form-group has-feedback">

                    <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" value="<?= $records->mobile ?>"/>
                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                    <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?> </div>
                </div>
                <div class="form-group has-feedback">

                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <select class="form-control" name="user_type" value="<?= $records->user_type ?>">
                        <option  selected="selected" >User_Type</option>

                        <option >HR</option>
                        <option >Marketing_Person</option>
                        <option >Sales_Manager</option>
                        <option >Account</option>
                        <option >Marketing Sels Executive</option>

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
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                    </div><!-- /.col -->
                </div>
            </form>        

            <a href="<?php echo base_url('Xeno_admin_dashbord/admin_mangement_table'); ?>" class="text-center">I don't want to update</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
