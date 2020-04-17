<!-- Main content -->

<?php $result=$this->property_model->update_builder_info(); ?>
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> UPDATE BUILDER INFO</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('home/update_builder_register'); ?>">
                        <?php //echo form_open_multipart('home/builder_register',['class'=>'form-horizontal']);?>
                        <div class="box-body">

                            <div class="form-group" >
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">Company Name :</label>

                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name" name="Company_name" value="<?php echo set_value('Company_name',$result->Company_name ); ?>">
                                    <div><?php echo form_error('Company_name', "<p class='text-danger'>", "</p>"); ?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">Company Ongoing Project :</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Ongoing Project Name" name="Ongoing_Project" value="<?php echo set_value('Ongoing_Project',$result->Ongoing_Project); ?>">
                                    <div><?php echo form_error('Ongoing_Project', "<p class='text-danger'>", "</p>"); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1"> Company Completed Project :</label>

                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Company Completed Project Name" name="Completed_Project" value="<?php echo set_value('Completed_Project',$result->Completed_Project); ?>">
                                    <div><?php echo form_error('Completed_Project', "<p class='text-danger'>", "</p>"); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">Name Of Director :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name Of Director" name="director_name" value="<?php echo set_value('director_name',$result->director_name); ?>">
                                    <div><?php echo form_error('director_name', "<p class='text-danger'>", "</p>"); ?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1"> Director Contact No :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter  Contact No" name="director_mobile" value="<?php echo set_value('director_mobile',$result->director_mobile); ?>"> 
                                    <div><?php echo form_error('director_mobile', "<p class='text-danger'>", "</p>"); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">   Director Email ID :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Email" name="director_email" value="<?php echo set_value('director_email',$result->director_email); ?>">
                                    <div><?php echo form_error('director_email', "<p class='text-danger'>", "</p>"); ?></div>
                                    <h3 class="help-block">Company Contact Person</h3>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1"> Contact Person Name :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter  Contact Person Name " name="Contact_Person" value="<?php echo set_value('Contact_Person',$result->Contact_Person); ?>">
                                    <div><?php echo form_error('Contact_Person', "<p class='text-danger'>", "</p>"); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">Contact Person Email :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact Person email" name="Contact_Person_email" value="<?php echo set_value('Contact_Person_email',$result->Contact_Person_Email); ?>">
                                    <div><?php echo form_error('Contact_Person_email', "<p class='text-danger'>", "</p>"); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">Contact Person Mobile No :</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact Person Mobile No" name="Contact_Person_mobile" value="<?php echo set_value('Contact_Person_mobile',$result->Contact_Person_mobile); ?>">
                                    <div><?php echo form_error('Contact_Person_mobile', "<p class='text-danger'>", "</p>"); ?></div>
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

