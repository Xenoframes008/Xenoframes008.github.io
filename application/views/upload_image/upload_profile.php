<!-- Main content -->
<?php $user = $this->login_model->get_user_details(); ?>
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload Profile Image</h3
                        </p>
                        <div>
                            <?php if (!is_null($user['image_path'])) { ?>

                                <img  class="img-circle" src= " <?= $user['image_path'] ?>" alt="" style="width:30%" >

                            <?php } ?></div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('imageupload/upload_profile_image'); ?>">        
                        <div class="box-body">




                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="inputEmail" class=" control-label">Upload Image </label>


                                    <input type="file" name="userfile" size="20" multiple="multiple" >
                                    <div class="text-danger"><?php if (isset($upload_error)) echo $upload_error ?></div>


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


