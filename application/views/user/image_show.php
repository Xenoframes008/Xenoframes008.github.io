
 <!-- Main content -->
 <?php $user=$this->login_model->get_user_details(); ?>
<?php  $records=$this->user_model->fetch_property(); 
  echo '<pre>';
print_r($records); ?>
    <section class="content">
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
              <?php foreach ($result as $show) {?>
      <div class="row">
        <div class="">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
               
            <div class="box-header with-border">
 
                       <div class="col-md-3">
                          <?php if(! is_null($user['image_path'])){ ?>
              
                          <img  class="img-squre" src= " <?= $user['image_path'] ?>" alt="" style="width:100%;" >

                               <?php }?>
                          <p>Ad Post By :<?= $show->post_date ?> </p>
                       </div>
             
                        <div class="col-md-2">
                          <p>₹ 2.5 Lac</p>
                          <p>₹ <?= $show->price_per_sqr ?> per sqft</p>
 <a href="#">
                                     <span>See other Charges</span></a>
<!--                          <p>See other Charges</p>-->
                        </div>

                        <div class="col-md-7">
                             <a href="#">
                                     <span><?= $show->Flat ?> Flat/Apartment in PUNE <?= $show->address ?> </span></a>
<!--                          <h1 class="box-title"> Property Image</h1><br><br>-->
                           <div class="box box-default collapsed-box">
                               <div class="box-header with-border" style="    padding: 1px 0px 1px 6px;">
                               <div class="row">
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 10px">
                                      <span class="description-text">CARPET AREA</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->plot_area ?></h5>
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
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $show->Furnished_Status ?></h5>
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
                 
                <button type="submit" class="btn btn-primary">Submit</button>
                <?= anchor("admin/delete_user_property/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this article')")) ?>

              </div>        
                          </div>

            </div>
               
             
            <!-- /.box-header -->
            <!-- form start -->
            
            


                    
    

          </div>
            </div>
          </div>
              </div>
         <?php } } ?>
    </section>
        
          <!-- /.box -->

          
