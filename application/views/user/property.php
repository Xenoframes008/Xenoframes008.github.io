<!-- Main content -->
<?php echo '<pre>'; print_r($result);  //exit;?>
<style>
    .display_img{
        width: 200px;
        position: relative;
        float: left;
    }

</style>
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload  Images </h3
                        </p>
                        <div class="">
                            <?php if (!is_null($result['name'])) { ?>

                                <img  class="img-circle" src= " <?= $result['name'] ?>" alt="" style="width:30%" >

                            <?php } ?></div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="<?php echo base_url('admin_dashbord/imageupload'); ?>" class="btn btn-primary">Add More Images</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                        <a href="#" class="btn btn-success">Delete</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /.box -->
