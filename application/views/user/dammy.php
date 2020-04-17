

<!-- Main content -->
<?php //print_r($result); ?>

<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Upload  Images </h3
                        </p>
                        <div class="">
                                <thead>  
                              
                                    <tr>
                            <?php if (count($result)) { ?>
                            <?php foreach($result as $show){?>    
                                       <div class="profile-pic">
		<a class="" href="<?php echo base_url("user/delete_uplosd_photo_user/$show->id"); ?>"> <img  class=" img-squre"  style="border:3px solid #aaa; width:20%" src= " <?= $show->name ?>" alt=""  > </a>
		<div class="edit"><a href="#"><i class="fa fa-pencil fa-lg"></i></a></div> 
                                
                            <?php } } ?>
                                </tr>
                            </thead>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <a href="<?php echo base_url('admin_dashbord/imageupload');?>" class="btn btn-primary">Add More Images</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-success">Delete</a>
                        </div>
                        

                </div>
            </div>
        </div>
    </div>
    <!-- /.box -->
    <style>
        .profile-pic {
	position: relative;
	display: inline-block;
}

.profile-pic:hover .edit {
	display: block;
}

.edit {
	padding-top: 7px;	
	padding-right: 7px;
	position: absolute;
	right: 0;
	top: 0;
	display: none;
}

.edit a {
	color: #000;
}
        </style>

