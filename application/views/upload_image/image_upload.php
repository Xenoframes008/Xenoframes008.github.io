<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload Property Images</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('imageupload/doupload'); ?>">        
                        <div class="box-body">




                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="inputEmail" class=" control-label">Upload Image </label>


                                    <input type="file" name="userfile[]" size="20" multiple="multiple" >
                                    <div class="text-danger"><?php if (isset($upload_error)) echo $upload_error ?></div>


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

