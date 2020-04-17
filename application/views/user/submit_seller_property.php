<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>digital marketing</title>
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/css.css"> 
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/bootstrap-theme.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/carouseller.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/smart_wizard.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/smart_wizard_theme_arrows.min.css">             

        <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/jquery-3.1.1.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/bootstrap.min.js"></script>   
        <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/carouseller.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/jquery.easing.1.3.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/jquery.smartWizard.min.js"></script>   
<!-- <script src="<?php //echo base_url('js');?>/jquery.error.val.js"></script>   
 <script src="<?php //echo base_url('js');?>/jquery.validate.js"></script>   
 <script src="<?php //echo base_url('js');?>/jquery.validate.min.js"></script> -->
 <script src="<?php echo base_url('js');?>/validations.js"></script> 

    </head>
    <body style="background-color:#d8d8ef;">

        <?php include 'header.php' ?>

        <div class="banner1"></div>

        <div class="row_house_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Sell or Rent your Property</h1>
                        <hr class="text-center">
                        <p class="">" We've over 15 Lac buyers and tenants for you! <br>
                            It's Easy...It's Simple.. & Yes It's FREE* "</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- SmartWizard html -->
                <div id="smartwizard">
                    <ul>
                        <!-- <li><a href="#step1">Step 1<br /><small>Basic Details</small></a></li>
                        <li><a href="#step2">Step 2<br /><small>Additional Details</small></a></li> -->
                        <li><a href="#step1">Step 1<br /><small>Property Info</small></a></li>
                        <li><a href="#step2">Step 2<br /><small>Property Features</small></a></li>
                        <li><a href="#step3">Step 3<br /><small>Price Details</small></a></li>
                        <li><a href="#step4">Step 4<br /><small>Upload Photo</small></a></li>
                    </ul>           

                    <div>
                        <div id="step1" class="">

                            <form  method="POST" action="<?php echo base_url('user/submit_property'); ?>" data-toggle="validator" role="form">
                                          	
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>User Info</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	

                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">I am</p>
                                                    </div>
                                                    <div class="col-md-10 col_padding">  
                                                        <input type="radio" name="property_Owner" value="Owner" onclick="show2();"/>
                                                        <label class="radio_txt" for="Owner">Owner</label>

                                                        <input type="radio" name="property_Owner"  value="BUILDER"  onclick="show1();" />
                                                        <label class="radio_txt" for="Builder">Builder</label>    
                                                    </div>
                                                    <div class="textdanger1"><?php echo form_error('property_Owner'); ?> </div>

                                                </div>							

                                                <div id="owner_info_show" class="owner_info_hide" >
                                                    <div class="form-group">
                                                        <label for="inputName" class="control-label">Builder Company Name</label>
                                                        <input type="text" class="form-control owner_ip" name="username" placeholder="Enter Your Name" value="<?php echo set_value('username'); ?>" >
                                                    </div>
                                                    <div class="textdanger1"><?php echo form_error('username'); ?> </div>

                                                    <div class="form-group">
                                                        <label for="mobile_no" class="control-label">Mobile No</label>
                                                        <input type="tel" class="form-control owner_ip" name="mobile" max="10" placeholder="Enter Your Mobile Number" value="<?php echo set_value('mobile'); ?>">
                                                    </div>
                                                    <div class="textdanger1"><?php echo form_error('mobile'); ?> </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail" class="control-label">Email</label>
                                                        <input type="text" class="form-control owner_ip" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" value="<?php echo set_value('email'); ?>">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="textdanger1"><?php echo form_error('email'); ?> </div>

                                                </div>

                                            </div>
                                        </div>  
                                </div>

                                <div class="container">
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Property Info</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	

                                                <div class="form-group submit_pro_radio_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Property For</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">

                                                        <label class="radio-inline">
                                                            <input checked="checked" data-val="true" data-val-="The IsSmallBusiness field is ." id="IsSmallBusiness" name="property_for" type="radio" value="Sale">
                                                            Sale
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="IsSmallBusiness" name="property_for" type="radio" value="Rent">
                                                            Rent
                                                        </label>
                                                        <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>

                                                        <div class="textdanger1"><?php echo form_error('property_for'); ?> </div>
                                                    </div>	
                                                </div>	


                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Property Type </p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <label class="checkbox-inline"> 

                                                            <input id="IsSmallBusiness" name="property_type" type="radio" value="Flat">
                                                            Flat  
                                                        </label>

                                                        <label class="checkbox-inline">

                                                            <input id="IsSmallBusiness" name="property_type" type="radio" value="House/Villa">
                                                            House/Villa 
                                                        </label>

                                                        <label class="checkbox-inline"> 

                                                            <input id="IsSmallBusiness" name="property_type" type="radio" value="Plot/Land ">
                                                            Plot/Land  
                                                        </label>
                                                    </div>		
                                                </div>
                                                  <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Flat </p>
                                                    </div>
              	
                                    </div>
                                                    <div class="col-md-10 col_padding">		    
                                                        <label class="checkbox-inline"> 

                                                            <input id="IsSmallBusiness" name="Flat" type="radio" value=" 1 BHK  ">
                                                            1BHK  
                                                        </label>

                                                        <label class="checkbox-inline">

                                                            <input id="IsSmallBusiness" name="Flat" type="radio" value="2 BHK">
                                                            2BHK
                                                        </label>

                                                        <label class="checkbox-inline"> 

                                                            <input id="IsSmallBusiness" name="Flat" type="radio" value="3 BHK">
                                                            3BHK 
                                                        </label>
                                                          <label class="checkbox-inline"> 

                                                            <input id="IsSmallBusiness" name="Flat" type="radio" value=" 4 BHK ">
                                                            4BHK 
                                                        </label>
                                                          <label class="checkbox-inline"> 

                                                            <input id="IsSmallBusiness" name="Flat" type="radio" value="5 BHK ">
                                                            5BHK 
                                                        </label>
                                                    </div>		
                                                </div>
                                                
                                        <!--		             <div class="textdanger1"><?php //echo form_error('property_Owner');  ?> </div>-->

                                            </div>
                                        </div>                  	
                                    </div>
                                

                                <div class="container">
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Location</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	    		
                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Property Name</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="property_name" placeholder="Enter Your Property Name" value="<?php echo set_value('username'); ?>">		
                                                            </label>								   
                                                        </div>
                                                        <div class="textdanger1"><?php echo form_error('property_name'); ?> </div>

                                                    </div>		
                                                </div>  	
                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Select Location</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <div class="form-group">								
                                                            <select class="step1_location_select" name='location' value="location">
                                                                <option selected="selected">Location</option>
                                                                <option>Hinjewadi</option>
                                                                <option > Wagholi</option>
                                                                <option >  Hadapsar</option>
                                                                <option >  Lohgaon</option>
                                                            </select>								   
                                                        </div>
                                                        <div class="textdanger1"><?php echo form_error('location'); ?> </div>

                                                    </div>		
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Enter Address</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <div class="form-group">								
                                                            <textarea rows="2" cols="40" placeholder="Enter Your Address" name="address" value="<?php echo set_value('address'); ?>"></textarea>							   
                                                        </div>
                                                        <div class="textdanger1"> <?php echo form_error('address'); ?> </div>

                                                        <div class="box-footer">

                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>

                                                    </div>		
                                                </div>

                                            </div>	

                                        </div>
                                    </div>
                                </div>

                                <!-- xxx -->





                            </form>                 	
                        </div>




                        <div id="step2" class="">
                            <form name="step2_form" id="post_property_form" method="POST" action="<?php echo base_url('user/submit_property2'); ?>" data-toggle="validator" role="form" onsubmit="return validate_step2()">
                                <div class="container">
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Property Features</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	 
                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Bedrooms</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Bedrooms" id="Bedrooms">
                                                                <option  value="" >Select_Bedrooms</option>
                                                                <option value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>    
                                                        </div>
                                                        <div id="bedroom_error"></div>
                                                        <div class="textdanger1"><?php echo form_error('Bedrooms'); ?> </div>

                                                    </div>


                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Balconies</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Balconies" id="Balconies">
                                                                <option  value="">Select_Balconies</option>
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
                                                                                                                <div id="bedroom_error"></div>
                                                        <div id="balconies_error"></div>

                                                    </div>
                                                </div>






                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Floor No</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Floor_No" id="Floor_No"> 
                                                                <option  value="">Select_Floor_No</option>
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
                                                        <div id="floor_No_error"></div>
                                                            
                                                    </div>

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Total Floor</p>
                                                    </div> 
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Total_Floor" id="Total_Floor">
                                                                <option  value="">Select_Total_Floor</option>
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
                                                        <div id="total_Floor_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Furnished Status</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Furnished_Status" id="Furnished_Status">
                                                                <option  value="">Select</option>
                                                                <option  value="Furnished">Furnished</option>
                                                                <option  value="Unfurnished">Unfurnished</option>
                                                                <option  value="Furnished">Semi-Furnished</option>
                                                            </select>								   
                                                        </div>
                                                        <div id="furnished_Status_error"></div>
                                                    </div>

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Bathrooms</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Bathrooms" id="Bathrooms" >
                                                                <option  value="" value="">Select_Bathrooms</option>
                                                                <option  value="1" value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
                                                        <div id="bathrooms_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Floors Allowed <br>for construction</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">	

                                                            <select class="step1_floor_no_select" name="Floors_Allowed" id="Floors_Allowed">
                                                                <option  value="">Total Floor</option>
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
                                                        <div id="floors_Allowed_error"></div>
                                                    </div>

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">No of open sides</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="no_open_side" id="no_open_side">
                                                                <option  value="">Select</option>
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>				  
                                                            </select>								   
                                                        </div>
                                                        <div id="No_open_side_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Width of road <br>facing the plot</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_Road_Width" name="road_width" placeholder="Road Width In Meter" id="road_width">		
                                                            </label>								   
                                                        </div>
                                                        <div id="Road_width_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Distance from Key Facilities : </p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">	    		
                                                        <div class="form-group">	
                                                            <div id="hospital_distance_error"></div>
                                                            <label class="key_facilities_label"> Hospital :
                                                                <input type="text" class="key_facilities_ip" name="Hospital_distance" id="Hospital_distance" >	Km	
                                                            </label>
                                                            <label class="key_facilities_label"> School :
                                                                <input type="text" class="key_facilities_ip" name="School_distance" id="School_distance" >	Km	
                                                                   <div id="school_distance_error"></div>
                                                            </label>
                                                            <label class="key_facilities_label"> Airport :
                                                                <input type="text" class="key_facilities_ip" name="Airport_distance" id="Airport_distance" >	Km	
                                                              <div id="airport_distance_error"></div>
                                                            </label>
                                                            <label class="key_facilities_label_2"> City Center :
                                                                <input type="text" class="key_facilities_ip" name="City_distance"  id="City_distance">	Km	
                                                               <div id="city_distance_error"></div>
                                                            </label>
                                                            <label class="key_facilities_label_2"> Railway_Station :
                                                                <input type="text" class="key_facilities_ip" name="Railway_Station_distance" id="Railway_Station_distance"  >	Km	
                                                                <div id="railway_Station_distance_error"></div>
                                                            </label>	
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Reserved Parking</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <div class="form-group">           									
                                                            <input type="radio" id="None" class="radio_btn" name="Parking" value="None" onclick="show_no_parking();" />
                                                            <label class="radio_txt" value="None">None</label>

                                                            <input type="radio" id="Covered" class="radio_btn" name="Parking" value="Covered" onclick="show_Covered_parking();" />
                                                            <label class="radio_txt" value="Covered">Covered</label>		

                                                            <input type="radio" id="Open" class="radio_btn" name="Parking" value="Open" onclick="show_Open_parking();" />
                                                            <label class="radio_txt" value="Open">Open</label>								   
                                                        </div>
                                                    </div>		
                                                </div>

                                                <div class="step1_floor_no_select hide_parking" id="show_covered_parking_on_radio_click">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">No. of covered parkings:</p>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="cover_parkings"  >
                                                                <option  value="">Select</option>
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
<!--                                                        <div id="Cover_parkings_error"></div>-->
                                                    </div>			  
                                                </div>
                                                <div class="step1_floor_no_select hide_parking" id="show_open_parking_on_radio_click">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">No. of open parkings:</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="open_parkings" >
                                                                <option  value="1">1</option>
                                                                <option  value="2">2</option>
                                                                <option  value="3">3</option>
                                                                <option  value="4">4</option>
                                                                <option  value="5">5</option>
                                                                <option  value="6">6</option>
                                                                <option  value="7">7</option>
                                                                <option  value="8">8</option>
                                                                <option  value="9">9</option>
                                                                <option  value="10">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>		  
                                                </div>

                                            </div>	

                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Area</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	    										
                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Covered Area</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">
                                                            <div id="Area_per_sq_error"></div>
                                                            <select class="step1_floor_no_select" name="area_per_sq" id="area_per_sq">
                                                                <option  value="">Select</option>

                                                                <option  value="Sq-ft">Sq-ft</option>
                                                                <option  value="Sq-yrd">Sq-yrd</option>
                                                                <option  value="Sq-m">Sq-m</option>
                                                                <option  value="Acre">Acre</option>
                                                            </select>	
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">
                                                            <div id="covered_Area_error"></div>
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="Covered_Area" placeholder="Covered Area"  id="Covered_Area">		
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Plot Area</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">
                                                            <div id="Plot_area_sq_error"></div>
                                                            <select class="step1_floor_no_select" name="plot_area_sq" id="plot_area_sq">
                                                                <option  value="">Select</option>	  
                                                                <option value="Sq-ft">Sq-ft</option>
                                                                <option  value="Sq-yrd">Sq-yrd</option>
                                                                <option value="Sq-m">Sq-m</option>
                                                                <option value="Acre">Acre</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">	
                                                        <div id="Plot_area_error"></div>
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="plot_area" placeholder="Plot Area" id="plot_area">		
                                                            </label>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Plot Length</p>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="plot_Length" placeholder="Plot Length In Ft" id="plot_Length" >		
                                                            </label>								   
                                                        </div>
                                                        <div id="Plot_Length_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Plot Breadth</p>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="Plot_Breadth" placeholder="Plot Breadth In Ft" id="Plot_Breadth">		
                                                            </label>								   
                                                        </div>
                                                        <div id="plot_Breadth_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Carpet Area</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select" name="Carpet_Area_sq" id="Carpet_Area_sq">	
                                                                <option  value="">Select</option>
                                                                <option  value="Sq-ft">Sq-ft</option>
                                                                <option  value="Sq-yrd">Sq-yrd</option>
                                                                <option  value="Sq-m">Sq-m</option>
                                                                <option  value="Acre">Acre</option>
                                                            </select>								   
                                                        </div>
                                                        <div id="carpet_Area_sq_error"></div>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="Carpet_Area" placeholder="Carpet Area" id="Carpet_Area" >		
                                                            </label>	
                                                            <div id="carpet_Area_error"></div> 
                                                        </div>
                                                        <div class="box-footer">

                                                            <input type="submit" class="btn btn-primary"value="Submit">
                                                        </div>
                                                    </div>
                                                </div>	

                                            </div>	

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="step3" class="">
                            <form name="step3_form" id="post_property_form2" method="POST" action="<?php echo base_url('user/submit_property3'); ?>" data-toggle="validator" role="form"  onsubmit="return validate_step3()">
                                <div class="container">
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Transaction Type, Property Availability</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	

                                                <div class="form-group submit_pro_radio_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Transaction Type</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">     
                                                        <input type="radio" id="New Property" class="radio_btn" name="Transaction_Type" value="New Property"/>
                                                        <label class="radio_txt" for="New Property">New Property</label>

                                                        <input type="radio" id="Resale" class="radio_btn" name="Transaction_Type" value="Resale" />
                                                        <label class="radio_txt" for="Resale">Resale</label>     
                                                    </div>	
                                                </div>	

                                                <div class="form-group submit_req_ip_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Possession Status</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <div class="form-group">
                                                            <div class="submit_pro_select_date">								
                                                                <input type="radio" id="Select Date" class="radio_btn" name="Possession_Status" value="Under Construction" onclick="show_date();" />
                                                                <label class="radio_txt" for="Select Date">Under Construction</label>
                                                                <div class="step1_floor_no_select hide_date" id="show_date_on_radio_click">
                                                                    <input type="date" id="bday" name="possession_date">
                                                                </div>	
                                                            </div>

                                                            <input type="radio" id="Immediately" class="radio_btn" name="Possession_Status" value="Immediately" onclick="hide_date();" />
                                                            <label class="radio_txt" for="Immediately">Immediately</label>								   
                                                        </div>
                                                    </div>	
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Available From</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">     
                                                        <div class="submit_pro_select_Total_Floor">	    		
                                                            <div class="form-group">								
                                                                <select class="step1_floor_no_select" name="Available_month"id="Available_month">

                                                                    <option  value="">Month</option>
                                                                    <option  value="January">January</option>
                                                                    <option  value="February">February</option>
                                                                    <option  value="March">March</option>
                                                                    <option  value="April">April</option>
                                                                    <option  value="May">May</option>
                                                                    <option  value="June">June</option>
                                                                    <option  value="Jully">Jully</option>
                                                                    <option  value="August">August</option>
                                                                    <option  value="September">September</option>
                                                                    <option  value="October">October</option>
                                                                    <option  value="November">November</option>
                                                                    <option  value="December">December</option>
                                                                </select>
                                                                <div id="available_month_error"></div>
                                                            </div>
                                                        </div>
                                                        <div class="submit_pro_select_Total_Floor">	    		
                                                            <div class="form-group">								
                                                                <select class="step1_floor_no_select" name="Available_Year" id="Available_Year">
                                                                    <option  value="">Year</option>
                                                                    <option  value="2018">2018</option>
                                                                    <option  value="2019">2019</option>
                                                                    <option  value="2020">2020</option>
                                                                    <option  value="2021">2021</option>
                                                                    <option  value="2022">2022</option>
                                                                    <option  value="2023">2023</option>
                                                                    <option  value="2024">2024</option>
                                                                    <option  value="2025">2025</option>
                                                                    <option  value="2026">2026</option>
                                                                    <option  value="2027">2027</option>
                                                                </select>	
                                                                <div id="available_Year_error"></div>
                                                            </div>
                                                        </div>     
                                                    </div>	
                                                </div>						

                                                <div class="form-group submit_req_ip_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Age of Construction</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <div class="form-group">								
                                                            <select class="step1_location_select" name="age_of_Construction" id="age_of_Construction">
                                                                <option value="">Age of Construction</option>
                                                                <option value="New Construction ">New Construction</option>
                                                                <option value="Less than 5 years">Less than 5 years</option>
                                                                <option value="5 to 10 years">5 to 10 years</option>
                                                                <option value=" 10 to 15 years">10 to 15 years</option>
                                                                <option value=" 15 to 20 years">15 to 20 years</option>
                                                                <option value=" Above 20 years">Above 20 years</option>
                                                            </select>	
                                                            <div id="Age_of_Construction_error"></div>
                                                        </div>
                                                    </div>	
                                                </div>	

                                            </div>
                                        </div>                  	
                                    </div>
                                </div>
                                

                                <div class="container">
                                    <div class="propertyform_sec_padding propertyform_border">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Price Details</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	

                                                <div class="form-group">
                                                    <div class="row row_margin">
                                                        <div class="col-md-2 col_padding">
                                                            <p class="I_am_txt">Expected Price </p>
                                                        </div>

                                                        <div class="col-md-10 col_padding">    		
                                                            <div class="form-group">	     									
                                                                <select class="submit_pro_expected_price_checkbox"name="in_rupes" id="in_rupes">
                                                                    <option value="">Select</option>
                                                                    <option value="Lac" > Lac</option>
                                                                    <option value="Crore">Crore</option>
                                                                     
                                                                </select>
                                                               <div id="In_rupes_error"></div>
                                                              
                                                            </div>							   
                                                        </div>
                                                    </div>	    
      </div>
                                                    <div class="row row_margin">	
                                                        <div class="col-md-offset-1">
                                                            <div class="form-group">Enter total Price
                                                                <label class="submit_pro_price_detail_enter_price"> <span >&nbsp;</span>
                                                                    <input type="text" id="pries" name="pries" placeholder="Enter Total Price" >		
                                                                </label>								   
                                                            </div>
                                                            <div id="Pries_error"></div>
                                                        </div>
                                                    </div>		

                                          

                                                <div class="form-group submit_req_ip_margin">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Price per Sq-ft</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">    		
                                                        <div class="form-group">	     									
                                                            <label> 
                                                                <input type="text" class="submit_pro_price_detail_txt" name="price_per_sqr" placeholder="" id="price_per_sqr" >		
                                                            </label>
                                                            <div id="Price_per_sqr_error"></div>
                                                        </div>							   
                                                    </div>	    	 					
                                                </div>							

                                                <div class="form-group submit_req_ip_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Price Includes </p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <label class="I_am_txt"> 
                                                            <input type="checkbox" name="PLC" > 
                                                            PLC  
                                                        </label>

                                                        <label class="I_am_txt">
                                                            <input type="checkbox" name="Car Parking" >
                                                            Car Parking 
                                                        </label>

                                                        <label class="I_am_txt"> 
                                                            <input type="checkbox" name="Club Membership" > 
                                                            Club Membership 
                                                        </label>
                                                    </div>		
                                                </div>	

                                                <div class="form-group">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Other_Charges</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">    			     									
                                                        <label> 
                                                            <input type="text" class="submit_pro_price_detail_txt" name="Other_Charges" placeholder="Other Charges" id="Other_Charges">		
                                                        </label>
                                                        <div id="other_Charges_error"></div>
                                                    </div>	    	 					
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">	 	
                                                    <div class="col-md-10 col-md-offset-1 col_padding">    		
                                                        <div class="form-group">	     									
                                                            <label class="I_am_txt"> 
                                                                <input type="checkbox" name="Club Membership" > 
                                                                Stamp Duty & Registration charges excluded. 
                                                            </label>
                                                        </div>							   
                                                    </div>	    	 					
                                                </div>

                                                <div class="form-group submit_pro_mainteinance_charges_padding">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Booking/Token Amount</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <div class="form-group">    			     									
                                                            <label> 
                                                                <input type="text" class="submit_pro_price_detail_txt" name="Booking_Token" placeholder="Booking/Token Amount" id="Booking_Token">		
                                                            </label>
                                                            <div id="booking_Token_error"></div>
                                                        </div>								   
                                                    </div>	    	 					
                                                </div>

                                                <div class="form-group">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Maintenance_Charges</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <div class="form-group">    			     									
                                                            <label class="radio_inline"> 
                                                                <input type="text" class="submit_pro_price_detail_txt" name="Maintenance_Charges" placeholder="Maintenance Charges" id="Maintenance_Charges" >		
                                                                <div id="maintenance_Charges_error"></div>
                                                            </label> <span class="submit_pro_Maintenance_Charges_span">Per</span>
                                                            <select class="submit_pro_expected_price_checkbox" name="Charges_per_month" id="Charges_per_month">
                                                                <option value="">Select By</option>                                                              
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Quarterly">Quarterly</option>
                                                                <option value="Yearly">Yearly</option>
                                                                <option value="One-Time">One-Time</option>
                                                                <option value=" >Per Sq.unit Monthly">Per Sq.unit Monthly</option>
                                                            </select>
                                                                              <div id="charges_per_month_error"></div>
                                                        </div>	
                                                    </div>	    	 					
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt"></p>
                                                    </div>	
                                                    <div class="col-md-10 col_padding">    		
                                                        <div class="form-group">	     									
                                                            <label class="I_am_txt"> 
                                                                <input type="checkbox" name="Club Membership" > 
                                                                I agree to the Terms of Services & Privacy Policy.
                                                            </label>
                                                        </div>	
                                                        <div class="box-footer">

                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>	    	 					
                                                </div>


                                            </div>
                                        </div>                  	
                                    </div>
                                </div>
                            </form>
                        </div>	

                        <div id="step4" class="">
                            <!--            		<form name="step4_form" id="post_property_form" method="POST" action="#" data-toggle="validator" role="form">
                            <div class="container">
                            <div class="propertyform_sec_padding">
                                <div class="row row_margin">
                                    <div class="col-md-1">
                                    <h2>Photos</h2>
                                </div>
                                                                             
                                    <div class="col-md-11 col-md-offset-1">	
                            
                                    <div id="upload_img_main_div text-center">
                                            <div id="upload_img_form_div">
                                                    <h3>Upload Exterior View, Living Room, Bedrooms, Kitchen Images</h3>
                                                    <form enctype="multipart/form-data" action="" method="post">
                                                     First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB. <br> 
                                                    <p class="upload_img_para"> Upload photo and get upto 5X response <br>
                                                    86% of home seekers get attracted to properties with photos! </p>
                            
                                                    <div id="filediv" class="filediv1">
                                                            <input name="file[]" type="file" id="img_file" class="select_upload_img_ip"/> 
                                                    </div>
                            
                                                    <div class="col-md-12">
                                                    <div class="upload_more_img_btn text-center">
                                                            <input type="button" id="add_more" class="upload" value="Add More Images"/>
                                                            <input type="submit" value="Upload Images" name="submit" id="upload" class="upload"/>
                                                    </div>
                                                    </div>
                            
                                                    </form>-->
                            <!------- Including PHP Script here ------>
                            <!-- <?php include "upload.php"; ?> -->
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

                                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('imageupload/douploads'); ?>">        
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


                        </div>
                    </div>

                </div>
            </div>                  	
        </div>
    </div>            			
</form>
</div>		

</div>

</div>
</div>
</div>

<?php include 'include/footer.php' ?>


<!-- https://codepen.io/mikeair/pen/Kfyin -->
<!-- <div class="container">
<div class="row">
  <div class="col-xs-12">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
                                <li><a href="osumare.html">home</a></li>
                                <li><a href="about-osumare.html#pageload_link">about us</a></li>
                                <li><a href="service_mainpage.html#pageload_link">services</a></li>
                                <li><a href="http://osumare.com/blog/" target="blank">blogs</a></li>
                                <li><a href="our-clients.html">clients</a></li>
                                <li><a href="career-at-osumare.html#pageload_link">Career</a></li>
                                <li><a href="contact-us-osumare.html#pageload_link">contact us</a></li>      
          </ul>
        </div>
      </div>
    </div>
  </div>
 

</div>
</div> -->







<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/particle_app.js"></script>
<script type="text/javascript" src="js/carouseller.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.smartWizard.min.js"></script>



<script>
                                                                $(document).ready(function(){
                                                                $(".ttt").click(function(){
                                                                $(".kkk").toggle();
                                                                });
                                                                // $(window).click(function(){
                                                                //     $(".kkk").hide();
                                                                // });
                                                                });</script>

<script type="text/javascript">
    function show_director(){
    document.getElementById('add_director').style.display = 'block';
    };
    function hide_director(){
    document.getElementById('add_director').style.display = 'none';
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_contact_person_img'); //Add button selector
    var wrapper = $('.append_contact_person'); //Input field wrapper
    var fieldHTML = '<div><input type="text" class="director_add_ip" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_contact_person_img" title="Remove field"><img src="images/remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
    if (x < maxField){ //Check maximum number of input fields
    x++; //Increment field counter
    $(wrapper).append(fieldHTML); // Add field html
    }
    });
    $(wrapper).on('click', '.remove_contact_person_img', function(e){ //Once remove button is clicked
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
    });
    });</script>

<script type="text/javascript">
    function contact_person_show(){
    document.getElementById('contact_person_info_show').style.display = 'block';
    }
    function contact_person_hide(){
    document.getElementById('contact_person_info_show').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function show1(){
    document.getElementById('owner_info_show').style.display = 'block';
    }
    function show2(){
    document.getElementById('owner_info_show').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function show_date(){
    document.getElementById('show_date_on_radio_click').style.display = 'block';
    }
    function hide_date(){
    document.getElementById('show_date_on_radio_click').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function show_1_bedroom(){
    document.getElementById('show_1_bedroom_on_radio_click').style.display = 'block';
    document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
    }
    function show_2_bedroom(){
    document.getElementById('show_2_bedroom_on_radio_click').style.display = 'block';
    document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
    }
    function show_3_bedroom(){
    document.getElementById('show_3_bedroom_on_radio_click').style.display = 'block';
    document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
    }
    function show_4_bedroom(){
    document.getElementById('show_4_bedroom_on_radio_click').style.display = 'block';
    document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
    }
    function show_5_bedroom(){
    document.getElementById('show_5_bedroom_on_radio_click').style.display = 'block';
    document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
    document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function show_no_parking(){
    document.getElementById('show_covered_parking_on_radio_click').style.display = 'none';
    document.getElementById('show_open_parking_on_radio_click').style.display = 'none';
    }
    function show_Covered_parking(){
    document.getElementById('show_covered_parking_on_radio_click').style.display = 'block';
    document.getElementById('show_open_parking_on_radio_click').style.display = 'none';
    }
    function show_Open_parking(){
    document.getElementById('show_open_parking_on_radio_click').style.display = 'block';
    document.getElementById('show_covered_parking_on_radio_click').style.display = 'none';
    }
</script>



<!-- onClick="$('#loginbox').hide(); $('.user_reg_form_ref').show(); $('.modal_dialog_user_reg_margin').css('margin-top', '14%') " -->
<script type="text/javascript">
    var abc = 0; // Declaring and defining global increment variable.
    $(document).ready(function() {
//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
    $('#add_more').click(function() {
    $(this).before($("<div/>", {
    id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
    name: 'file[]',
            type: 'file',
            id: 'img_file',
            class: 'select_upload_img_ip'
            })));
    });
// Following function will executes on change event of file input to select different file.
    $('body').on('change', '#img_file', function() {
    if (this.files && this.files[0]) {
    abc += 1; // Incrementing global variable by 1.
    var z = abc - 1;
    var x = $(this).parent().find('#previewimg' + z).remove();
    $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
    var reader = new FileReader();
    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[0]);
    $(this).hide();
    $("#abcd" + abc).append($("<img/>", {
    id: 'img',
            src: 'images/x.png',
            alt: 'delete',
            }).click(function() {
    $(this).parent().parent().remove();
    }));
    }
    });
// To Preview Image
    function imageIsLoaded(e) {
    $('#previewimg' + abc).attr('src', e.target.result);
    };
    $('#upload').click(function(e) {
    var name = $(":file").val();
    if (!name) {
    alert("First Image Must Be Selected");
    e.preventDefault();
    }
    });
    });</script>

<!--  <script type="text/javascript">
        $(document).ready(function(){

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });

            // Please note enabling option "showStepURLhash" will make navigation conflict for multiple wizard in a page.
            // so that option is disabling => showStepURLhash: false

            // Smart Wizard 1
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect:'fade',
                    showStepURLhash: false,
                    toolbarSettings: {toolbarPosition: 'both',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
            });

        });
    </script> -->

<script type="text/javascript">
    $(document).ready(function(){

    // Toolbar extra buttons
    var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function(){ alert('Finish Clicked'); });
    var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function(){ $('#smartwizard').smartWizard("reset"); });
    // Smart Wizard
    $('#smartwizard').smartWizard({
    selected: 0,
            theme: 'arrows',
            transitionEffect:'fade',
            toolbarSettings: {toolbarPosition: 'bottom', }
    });
    });</script>  


<script type="text/javascript">
    $(function() {
    $('#third_scroll').carouseller({
    scrollSpeed: 500,
            autoScrollDelay: 2600,
            easing: 'linear'
    });
    });
    $(function() {
    $('#third').carouseller({
    scrollSpeed: 800,
            // autoScrollDelay: 1600,
            easing: 'linear'
    });
    });</script>

<script>$('.pjt_1_img').smoove({offset:'20%'});</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--<script>
   $("#step2").validate({
       alert('sanjay');
   });
</script>-->
</body>
</html>