<?php $user=$this->login_model->get_user_details(); ?>
<body class="register-page">
    <div class="register-box">
        <div class="register-box-body">
        <p class="login-box-msg text-blue" ><b> UPDATE YOUR BANK DETAILS</b></p>
        <form action="<?php echo base_url('home/update_bank_details');?>" method="post">
         <div class="form-group has-feedback">
            <label for="exampleInputEmail1">Bank User Name</label>
            <input type="text" class="form-control" placeholder="Enter user Name" name="username" value="<?php echo set_value('username',$recored->username);?>"/>
            <div><?php echo  form_error('username',"<p class='text-danger'>","</p>");?></div>
            </div>
            <div class="form-group has-feedback">
            <label for="exampleInputPassword1">Bank Name</label>
            <input type="text" class="form-control" placeholder="Enter Bank Name" name="bank_name" value="<?php echo set_value('bank_name',$recored->bank_name);?>"/>
            <div><?php echo form_error('bank_name',"<p class='text-danger'>","</p>");?></div>
            </div>
            <div class="form-group has-feedback">
            <label for="exampleInputPassword1">Account Number</label>
            <input type="text" class="form-control" placeholder="Enter Account Number " name="Account_Number" value="<?php echo set_value('Account_Number',$recored->Account_Number);?>"/>
            <div><?php echo form_error('Account_Number',"<p class='text-danger'>","</p>");?></div>
            </div>
            <div class="form-group has-feedback">
            <label for="exampleInputPassword1">Branch_Name</label>
            <input type="text" class="form-control" placeholder="Enter Branch Name" name="Branch_Name" value="<?php echo set_value('Branch_Name',$recored->Branch_Name);?>"/>
            <div><?php echo form_error('Branch_Name',"<p class='text-danger'>","</p>");?></div>
            </div>
            <div class="form-group has-feedback">
            <label for="exampleInputPassword1">IFSC Code</label>
            <input type="text" class="form-control" placeholder="Enter IFSC Code" name="ifsc_code" value="<?php echo set_value('ifsc_code',$recored->ifsc_code);?>"/>
            <div><?php echo form_error('ifsc_code',"<p class='text-danger'>","</p>");?></div>
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