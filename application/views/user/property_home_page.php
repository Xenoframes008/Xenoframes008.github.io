
<section class="">
     <div class="box">
        
                <div class="box-body">
                    <form method="post" action="<?php echo base_url('user/search_property_home');?>">
<div class="row">
    <div class="col-sm-3">
              <div class="form-group">
                
                <select class="form-control select2" disabled="disabled" name="city" style="width: 100%;">
                  <option selected="selected" >PUNE</option>
                  <option>PUNE</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
    </div>
    <div class="col-sm-3">
               <div class="form-group has-feedback">

                    <select class="form-control" name="location" id="usert">
                        <option  selected="selected"  name="city">Select Locality</option>

                        <option>Hinjewadi</option>
                        <option > Wagholi</option>
                        <option >  Hadapsar</option>
                        <option >  Lohgaon</option>
                        <option >  Nanded</option>

                    </select>

                </div>
    </div>
    <div class="col-sm-3">
               <div class="form-group has-feedback">

                   
<!--                    <select class="form-control" name="user_type" id="usert">
                        <option  selected="selected" >Select Budget</option>

                        <option >HR</option>
                        <option >Marketing_Person</option>
                        <option >Sales_Manager</option>
                        <option >Account</option>
                        <option >Marketing_Sels_Executive</option>
                        
                    </select>-->
                    <div class="form-group">
             
                        <input type="text" class="form-control" name="pries" placeholder="Enter Bugdet Lac/Crore" required="">
                </div>


                </div>
    </div>

    <div class="col-sm-3">
        <button type="submit"   class="btn btn-primary"> Search Requirement </button>
</div>
        </div>
</form>
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
                          <?php 
                          if(count($images)){
                          if(isset($images)){ 
                              //foreach ($images as $image) {
                               
                              ?>
              
                           <a href="<?php echo base_url('user/property_image_home') ;?>/<?php echo $show->id; ?>">
   
                                 <img class="gallery-item" data-lightbox="roadtrip" src="<?= $images[0]['name']?>" height="140px;" width="140px;" >
                                 <div class="bottom-left glyphicon glyphicon-camera" style=" left: 19px; position: absolute;bottom: 11px; top: 130px; color: white;"><?php echo count($images); ?>PHOTOS</div>
                           </a> 
                            
                          <?php } } else{ ?>
                      
                           <img  class="img-squre" src= "http://localhost/property/uploads/abc.jpg" alt="" style="width:100%;" >
                              <?php } ?>   </div>
                          <p>Ad Post By :<?= $show->post_date ?> </p>
                       </div>
             
                        <div class="col-md-2">
                          <p style="color: red;">₹ <?= $show->pries ?>  <?= $show->in_rupes ?></p>
                          <p>₹ <?= $show->price_per_sqr ?> per sqft</p>
 <a href="<?php echo base_url("Admin_dashbord/property_details/$show->id");?>">
                                     <span>See other Charges</span></a>
                          <p style="color: red;">In   <?= $show->location ?></p>
                        </div>

                        <div class="col-md-7">
                             <a href="<?php echo base_url("Admin_dashbord/property_details/$show->id");?>">
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
                 <a href="<?php echo base_url("Admin_dashbord/property_details/$show->id");?>" class="btn btn-danger ">View Details </a>
                <button type="button" class="btn btn-info btn-small" data-toggle="modal" data-target="#myModal">Time Schedule </button>
              
         <?php  if($show->property_Owner =='BUILDER') { ?>
                 
                 <p style="float: right;text-align: right "> <?= $show->property_Owner ?><br>
                 <?= $show->username ?></p>
               
                     <?php }?>
              </div>      
<div>
    
    
</div>
                           </div>

            </div>
               
           
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
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        <?php $user = $this->login_model->get_user_details(); ?>
<head>
    <title>view appointment details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/style.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#datepicker").datepicker({
                minDate: 0,
                dateFormat: 'yy-mm-dd'
            });

        });
    </script>
</head>

<body class="register-page">
    <div class="register-box">


        <div class="register-box-body">
            
            <p class="login-box-msg text-blue" ><b>Submit your visit time Schedule</b></p>
              
            <?php $id=$this->uri->segment(3);?>
            <form action="<?php echo base_url('home/time_shedul_without_log'); ?>" method="post">
                <div class="form-group has-feedback">
                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="username" value="<?php echo set_value('username'); ?>"/>
                    <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1"> Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="<?php echo set_value('mobile'); ?>"/>
                    <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1"> Email</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>"/>
                    <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Visit Date</label>
                    <input type="text" class="form-control" id="datepicker" placeholder="Pickup Date" name="datepicker" />
                    <div><?php echo form_error('datepicker', "<p class='text-danger'>", "</p>"); ?></div>
  <!--            <input type="text" id="datepicker" placeholder="Pickup Date" name="datepicker"/>-->
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Select Time</label>
                    <select class="form-control" name='visittime'>
                        <option>select time must</option>
                        <option>9:00AM </option>
                        <option>9:30AM </option>
                        <option>10:00AM</option>
                        <option>10:30AM</option>
                        <option>11:00AM</option>
                        <option>11:30AM</option>
                        <option>12:00PM</option>
                        <option>12:30PM</option>
                        <option>01:00PM</option>
                        <option>02:30PM</option>
                        <option>03:00PM</option>
                        <option>03:30PM</option>
                        <option>04:00PM</option>
                        <option>04:30PM</option>
                        <option>05:00PM</option>
                        <option>05:30PM</option>
                        <option>06:00PM</option>
                        <option>06:30PM</option>
                        <option>07:00PM</option>
                        <option>07:30PM</option>
                        <option>08:00PM</option>
                    </select>
                    <div><?php echo form_error('visittime', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div><input type="hidden" name="property_id" id="id" value="<?php echo $id ?>" /></div>
                <div class="row"> 
                    <div class="col-xs-8">    
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Please Check Details 
                            </label>
                        </div>                        
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div><!-- /.col -->
                </div>
            </form>        
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
</body>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>