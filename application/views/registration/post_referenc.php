<?php $user = $this->login_model->get_user_details(); ?>
<body class="register-page">
    <div class="register-box">


        <div class="register-box-body">
            <p class="login-box-msg text-blue" ><b>Reference Person Details</b></p>
            <form action="<?php echo base_url('home/post_refer'); ?>" method="post">
                <div class="form-group has-feedback">
                    <label for="exampleInputEmail1">Reference Person Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="username" value="<?php echo set_value('username'); ?>"/>
                    <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?></div>

                </div>

                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Reference Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="<?php echo set_value('mobile'); ?>"/>
                    <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?></div>

                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Reference Email</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>"/>
                    <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?></div>

                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Reference Person Occupation</label>
                    <input type="text" class="form-control" placeholder="oldPassword" name="Occupation" value="<?php echo set_value('Occupation'); ?>"/>
                    <div><?php echo form_error('Occupation', "<p class='text-danger'>", "</p>"); ?></div>

                </div>


                <div class="row"> 
                    <div class="col-xs-8">    
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Please Check Details 
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