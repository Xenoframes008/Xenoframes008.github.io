<!-- Main content -->
<?php //$user = $this->login_model->get_user_details(); 
$result = $this->user_model->notification_all();
$q = array_reverse($result);
?>
<section class="content">
    <div class="">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">ALL NOTIFICATION </h3
                        </p>
                        <div>
                            <?php //if (!is_null($user['image_path'])) { ?>

                                <!--<img  class="img-circle" src= " <?= $user['image_path'] ?>" alt="" style="width:30%" >-->

                            <?php //} ?></div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        <div class="box-body">



    
      <?php if (count($q)) { ?>
                                                <?php foreach ($q as $show) { ?>
                                           
                                                    <!-- start message -->
                                                        
                                                            <div class="pull-left">
                                                                <img src="<?= $show['image_path']; ?>" class="img-circle" width="100" height="100" alt="User Image"/>
                                                            </div>
                                                    </br>  </br>  </br>  </br>  </br>  
                                                    
                                                            <h4>

                                                                <?= $show['username']; ?>(<?= $show['user_type']; ?>)
<!--                                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>-->
                                                            </h4>
                                                            <p><?= $show['feedback']; ?></p>
                                                        <hr>
                                                    <!-- end message -->
                                                <?php }
                                            }
                                            ?>
                                                   </br> 


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
 
                   
                </div>
            </div>
        </div>
    </div>
    <!-- /.box -->


