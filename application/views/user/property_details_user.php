
 <!-- Main content -->
 <?php $user=$this->login_model->get_user_details(); ?>
<?php //print_r($result);

$id= $this->uri->segment(3);
      $result= $this->user_model->property_details($id);
?>
 <?php 
$id= $this->uri->segment(3);
 $images = $this->user_model->get_images($id); ?>
    <section class="content">
        
      <div class="row">
        <div class="">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
               
            <div class="box-header with-border">
 
                       <div class="col-md-3">
                             <?php if(isset($images)){ 
                              //foreach ($images as $image) {
                               
                              ?>
              
                           <a href="<?php echo base_url('user/property_image') ;?>/<?php echo $this->uri->segment(3); ?>">
   
                                 <img class="gallery-item" data-lightbox="roadtrip" src="<?= $images[0]['name']?>" height="150px;" width="150px;" >
                           </a>
                            
                              <?php   }else{?>
                      
                         <img  class="img-squre" src="http://localhost/property/uploads/abc.jpg" alt="" style="width:100%;" >
                              <?php } ?>   
                          <p>₹ 2.5 Lac</p>
                          <p>₹ <?= $result->price_per_sqr ?> per sqft</p>
            </div>

                       
             
                          

                        <div class="col-md-9">
                            <a href="#">
                                     <span><?= $result->Flat ?> Flat/Apartment in PUNE <?= $result->address ?> </span></a>
<!--                          <h1 class="box-title"> Property Image</h1><br><br>-->
                          
    <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">PROPERTY DETAILS</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
              <div class="row">
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">	
                                      <span class="description-text">CARPET AREA</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->plot_area ?>  <?= $result->Carpet_Area_sq ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">	
                                      <span class="description-text">PLOT AREA</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->plot_area ?>  <?= $result->plot_area_sq ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                     <span class="description-text">FLOOR</span>
                                      <h1 class="description-header" style=" font-size: 11px;"><?= $result->Floor_No ?> out of <?= $result->Total_Floor ?> floors</h1>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                     <span class="description-text">Transaction</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Transaction_Type ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <!-- /.col -->
                                </div>
                <div class="box-body" style="    padding: 1px 7px;">
                                  <div class="row" >
                                <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text"> Furnishing </span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Furnished_Status ?></h5>
                                    </div>	
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">Bedrooms</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Bedrooms ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">CAR PARKING</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Parking ?>  <?= $result->cover_parkings ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 ">	
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">Socity</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->property_name ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                         <div class="col-md-3">
      
          <!-- /.box -->
        </div>
                                  </div>
                                  </div>
                              </div>
                <div class="box-body" style="    padding: 1px 7px;">
                                  <div class="row" >
                                <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text"> STATUS </span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Possession_Status ?></h5>
                                    </div>	
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">BALCONIES</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Balconies ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text"> POSSESSION </span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Possession_Status ?>  <?= $result->	possession_date ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 ">	
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">	AGE OF CONSTRACTION </span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->age_of_Construction ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                         <div class="col-md-3">
      
          <!-- /.box -->
        </div>
                                  </div>
                                  </div>
                              </div>
                <div class="box-body" style="    padding: 1px 7px;">
                                  <div class="row" >
                                <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text"> 	Hospital distance </span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Hospital_distance ?> km</h5>
                                    </div>	
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">School distance</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->School_distance ?> km</h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">Airport distance</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Airport_distance ?> km </h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 ">	
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">City distance</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->City_distance ?> km</h5>
                                    </div>
                                    <!-- /.description-block -->
                                         <div class="col-md-3">
      
          <!-- /.box -->
        </div>
                                  </div>
                                  </div>
                              </div>
                <div class="box-body" style="    padding: 1px 7px;">
                                  <div class="row" >
                                <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text"> Railway Station </span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Railway_Station_distance ?> km</h5>
                                    </div>	
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">Maintenance Charges</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Maintenance_Charges ?> PER <?= $result->Charges_per_month ?></h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 border-right">
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text"> Booking Token</span>
                                      <h5 class="description-header" style=" font-size: 11px;"><?= $result->Booking_Token ?> </h5>
                                    </div>
                                    <!-- /.description-block -->
                                  </div>
                                  <div class="col-sm-3 ">	
                                    <div class="description-block" style="text-align:left; font-size: 15px">
                                      <span class="description-text">Water Availability</span>
                                      <h5 class="description-header" style=" font-size: 11px;"> 24 Hours Available</h5>
                                    </div>
                                    <!-- /.description-block -->
                                         <div class="col-md-3">
      
          <!-- /.box -->
        </div>
                                  </div>
                                  </div>
                              </div>
                    
            <div class="box-body">                
                <b>DESCRIPTION </b> :            
              <br>
            it is  <?= $result->Flat ?> very big flat all modern amenities in the society all needs are society
             <br> <br>
              <?php  if($result->property_Owner =='BUILDER')  { ?>
                 
                 <p> <b> <?= $result->property_Owner ?> </b>  : <?= $result->username ?></p>
                                    <?php }?>
                 <b>LOCALITY </b>:     <?= $result->location ?>
            
              <br> <br>
              <b>  ADDRESS </b>:     <?= $result->address ?>
          <br><br>
            
            
            <b>  LOAN OFFERED  BY </b> :  <img  class="img-squre" src= "http://localhost/property/uploads/download8.jpg" alt="" style="width:10%;" >
              <img  class="img-squre" src= "http://localhost/property/uploads/0_30-reduction-in-home-loan-rates-by-Axis-Bank-775×410-750x410.png" alt="" style="width:11%;" >
              <img  class="img-squre" src= "http://localhost/property/uploads/download.png" alt="" style="width:15%;" >

            
            <!-- /.box-body -->
          </div>
            <?php $user=$this->session->userdata('user_type');

            if ($user=="Seller_Buyer") {    ;?>     
             <div class="box-footer">
          
        <a href="<?php echo base_url("home/time_shedul/$result->id");?>" class="btn btn-primary ">Time Schedule </a>
         
              </div>  
               <?php } ?>
                          </div>

            </div>
               
             
            <!-- /.box-header -->
            <!-- form start -->
            
            


                    
    

          </div>
            </div>
          </div>
              </div>
         
    </section>
        
          <!-- /.box -->

          

