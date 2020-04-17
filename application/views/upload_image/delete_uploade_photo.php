<!-- Main content -->
<?php //print_r($result); ?>
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
                            <thead>  

                                <tr>
                                    <?php if (count($result)) { ?>
                                        <?php foreach ($result as $show) { ?>    

                                    <div class="display_img">
                                        <a href="<?php echo base_url("user/delete_uplosd_photo_user/$show->id"); ?>"><img src="<?php echo base_url('images/x.png') ?>" class="img img-responsive">  </a>
                                        <img  class="img-squre" width="180px"  style="border:3px solid #aaa;" src= " <?= $show->name ?>" alt=""  >

                                    </div>

                                <?php }
                            } ?>
                            </tr>
                            </thead>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->


                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="<?php echo base_url('admin_dashbord/imageupload'); ?>" class="btn btn-primary">Add More Images</a>
                        <a href="<?php echo base_url('user/property1');?>" class="btn btn-success">OK</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /.box -->
