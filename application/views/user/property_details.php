<section class="">
    
    <div class="box">
        
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th> New Property's</th>
                        

                    </tr>
                </thead>
                <tbody>
                    
 <!-- Main content -->
 <?php $user=$this->login_model->get_user_details(); ?>
<?php //print_r($result);?>
    <?php if ($register = $this->session->flashdata('Delete')) {  ?>

            <div claas="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-danger" style="margin-bottom: 15px;">


    <?= $register ?>

                    </div>
                </div>
            </div>
<?php } ?>
         <?php if(count($result)) {?>
              <?php foreach ($result as $show) {     
                  
//     echo $show->id;
                  
                   $images = $this->user_model->get_images($show->id);
                //print_r($images);
                   //echo count($images);
                   //exit;
                  ?>
      <div class="row">
        <div class="">
        <!-- left column -->
        
                            <tr>
                                <td>
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
               
            <div class="box-header with-border">
 
                       <div class="col-md-3">
                            <div class="gallery">
                          <?php if(isset($images)){ 
                              //foreach ($images as $image) {
                               
                              ?>
              
                           <a href="<?php echo base_url('user/property_image') ;?>/<?php echo $show->id; ?>">
   
                                 <img class="gallery-item" data-lightbox="roadtrip" src="<?= $images[0]['name']?>" height="150px;" width="150px;" >
                                 <div class="bottom-left glyphicon glyphicon-camera" style=" left: 19px; position: absolute;bottom: 11px; top: 130px; color: white;"><?php echo count($images); ?>PHOTOS</div>
                           </a> 
                            
                              <?php }  else{ ?>
                      
                           <img  class="img-squre" src= "" alt="" style="width:100%;" >
                              <?php } ?>   </div>
                          <p>Ad Post By :<?= $show->post_date ?> </p>
                       </div>
             
                        <div class="col-md-2">
                          <p>₹ <?= $show->pries ?>  <?= $show->in_rupes ?></p>
                          <p>₹ <?= $show->price_per_sqr ?> per sqft</p>
 <a href="<?php echo base_url("user/property_details/$show->id");?>">
                                     <span>See other Charges</span></a>
<!--                          <p>See other Charges</p>-->
                        </div>

                        <div class="col-md-7">
                             <a href="<?php echo base_url("user/property_details/$show->id");?>">
                                     <span><?= $show->Flat ?> Flat/Apartment in PUNE <?= $show->address ?> </span></a>
<!--                          <h1 class="box-title"> Property Image</h1><br><br>-->
                           <div class="box box-default collapsed-box">
                               <div class="box-header with-border" style="    padding: 1px 0px 1px 6px;">
                               <div class="row">
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text">CARPET AREA</span>
                                      <h5 class="description-header"  style=" font-size: 11px;"><?= $show->plot_area ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text">STATUS</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->Possession_Status ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                     <span class="description-text">FLOOR</span>
                                      <h1 class="description-header" style=" font-size: 11px;"><?= $show->Floor_No ?> out of <?= $show->Total_Floor ?> floors</h1>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                     <span class="description-text">Transaction</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->Transaction_Type ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                </div>

                                   <div class="box-tools pull-right" style="right: 3px; top: 0px;">
                                       <button type="button" class="btn btn-box-tool" data-widget="collapse" style="    padding: 0px;"><i class="fa fa-plus"></i>
                                  </button>
                                </div>
                                <!-- /.box-tools -->
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body" style="    padding: 1px 7px;">
                                  <div class="row" >
                                <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text"> Furnishing </span>
                                      <h5 class="description-header" style=" font-size: 11px;" ><?= $show->Furnished_Status ?></h5>
                                    </div>  
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text">Bedrooms</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->Bedrooms ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text">CAR PARKING</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->Parking ?>  <?= $show->cover_parkings ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 "> 
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text">Socity</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->property_name ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  </div>
                              </div>
                              <!-- /.box-body -->
                            </div>

Residential plot is available for sale. It has a plot area of 1000 sq-ft. Please contact for more details.
 <div class="box-footer">
                 <a href="<?php echo base_url("user/property_details/$show->id");?>" class="btn btn-danger ">View Details </a>
                 <a href="<?php echo base_url("home/time_shedul/$show->id");?>" class="btn btn-primary ">Time Schedule </a>
                 <?= anchor("admin/delete_user_property/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this article')")) ?>
         <?php  if($show->property_Owner =='BUILDER') { ?>
                 
                 <p style="float: right;text-align: right "> <?= $show->property_Owner ?><br>
                 <?= $show->username ?></p>
               
                     <?php }?>
              </div>      
<div>
    
    
</div>
                           </div>

            </div>
               
             
            <!-- /.box-header -->
            <!-- form start -->
            
            


                    
    

          </div>
            </div>
        </td>
                              
                               


                            </tr>

          </div>
              </div>
         <?php } } ?>
    
        
          <!-- /.box -->

          

 

                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>