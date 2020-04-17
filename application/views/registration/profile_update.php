<!-- Main content -->
<?php $user = $this->login_model->get_user_details(); ?>   
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update your profile</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('home/user_register_update'); ?>">        

                        <div class="box-body">

                            <div class="form-group" >
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">User Name :</label>

                                    <input type="text" class="form-control" name="username" placeholder="Enter Name" value="<?php echo set_value('username', $user['username']); ?>">
                                    <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">Email :</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo set_value('email', $user['email']); ?>">
                                    <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">Mobile :</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" value="<?php echo set_value('mobile', $user['mobile']); ?>">
                                    <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">  
                                    <label for="exampleInputEmail1"> Occupation :</label>

                                    <input type="text" class="form-control" name="Occupation" placeholder="Occupation" value="<?php echo set_value('Occupation', $user['Occupation']); ?>">
                                    <div><?php echo form_error('Occupation', "<p class='text-danger'>", "</p>"); ?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label>Select Religion</label>
                                    <select class="form-control" name="Religion" <?php echo set_value('Religion', $user['Religion']); ?>>
                                        <option  selected="selected">Select Religion</option>

                                        <option>Hindu </option>
                                        <option>Sikh </option>
                                        <option>Christon </option>
                                        <option>Buddha </option>
                                        <option>Muslim </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                        <label for="exampleInputPassword1">Cast :</label>
                                        <input type="text" class="form-control" name="Cast" placeholder="Enter Cast" value="<?php echo set_value('Cast', $user['Cast']); ?>">
                                        <div><?php echo form_error('Cast', "<p class='text-danger'>", "</p>"); ?> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                        <label>Select City</label>
                                        <select class="form-control" name="City" value="<?php echo set_value('City', $user['City']); ?>">
                                            <option  selected="selected" >Select City</option>
                                            <option >Pune</option>
                                            <option >Solapur</option>
                                            <option >Kolhapur</option>
                                            <option >Nagpur</option>
                                            <option >Sangali</option>
                                            <option >Latur</option>
                                            <option >Mumbai</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label>Select State</label>
                                            <select class="form-control" name="State" value="<?php echo set_value('State', $user['State']); ?>">
                                                <option  selected="selected" >Select State</option>

                                                <option >Maharashtra</option>
                                                <option >Goa</option>
                                                <option >UP</option>
                                                <option >MP</option>
                                                <option >Karnataka</option>
                                                <option >Punjab</option>       
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                                <label>Address</label>
                                                <?php //echo form_textarea(['name'=>'address','class'=>'form-control', 'placeholder'=>'address','value'=>  set_value('address',$user['address'])]);?>

                                                <textarea class="form-control" rows="3" placeholder="Enter Your Address " name="address" value="<?php echo set_value('State', $user['address']); ?>"></textarea>
                                                <div><?php echo form_error('address', "<p class='text-danger'>", "</p>"); ?> </div>
                                            </div></div> 
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <div class="col-md-10 col-md-offset-1">

                                                <label class=" control-label" for="IsSmallBusiness">Gender :</label>
                                                <div class="">
                                                    <label class="radio-inline">
                                                        <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="Gender" type="radio" value="Male">
                                                        Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="IsSmallBusiness" name="Gender" type="radio" value="Female">
                                                        Female
                                                    </label>
                                                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 15px;">
                                            <div class="col-md-10 col-md-offset-1">

                                                <label class=" control-label" for="IsSmallBusiness">Marital Status : </label>
                                                <div class="">
                                                    <label class="radio-inline">
                                                        <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="Marital_Status" type="radio" value="Married">
                                                        Married
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="IsSmallBusiness" name="Marital_Status" type="radio" value="Unmarried">
                                                        Unmarried
                                                    </label>
                                                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                                <label for="exampleInputPassword1">Age :</label>
                                                <input type="text" class="form-control" name="age" placeholder="Enter Age" value="<?php echo set_value('age', $user['age']); ?>">
                                                <div><?php echo form_error('age', "<p class='text-danger'>", "</p>"); ?> </div>

                                            </div>
                                        </div>




                                        <div class="checkbox">
                                            <div class="col-md-10 col-md-offset-1">
                                                <label>
                                                    <input type="checkbox"> Check me out
                                                </label>
                                            </div>  
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.box -->

