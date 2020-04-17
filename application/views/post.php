<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>digital marketing</title>

        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/css.css"> 
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/carouseller.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/smart_wizard.min.css">
        <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url(); ?>css/smart_wizard_theme_arrows.min.css">             


        <script type = 'text/javascript' src = "<?php echo base_url();
?>js/jquery-3.1.1.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
?>js/bootstrap.min.js"></script>   
        <script type = 'text/javascript' src = "<?php echo base_url();
?>js/carouseller.min.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
?>js/jquery.easing.1.3.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url();
?>js/jquery.smartWizard.min.js"></script>   

    </head>
    <body style="background-color: #d8d8ef;">

        <?php include 'include/header1.php' ?>

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

                            <form name="step1_form" id="post_property_form" method="POST" action="#" data-toggle="validator" role="form">
                                <div class="container">               	
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
                                                        <input type="radio" name="Owner" id="Owner" class="radio_btn" onclick="show1();" />
                                                        <label class="radio_txt" for="Owner">Owner</label>

                                                        <input type="radio" name="Owner" id="Builder" class="radio_btn" onclick="show2();" />
                                                        <label class="radio_txt" for="Builder">Builder</label>    
                                                    </div>
                                                </div>							

                                                <div  id="owner_info_show" class="owner_info_hide" >
                                                    <div class="form-group">
                                                        <label for="inputName" class="control-label">Name</label>
                                                        <input type="text" class="form-control owner_ip" id="inputName" placeholder="Enter Your Name" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="mobile_no" class="control-label">Mobile No</label>
                                                        <input type="tel" class="form-control owner_ip" id="mobile_no" max="10" placeholder="Enter Your Mobile Number" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail" class="control-label">Email</label>
                                                        <input type="email" class="form-control owner_ip" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                                        <div class="help-block with-errors"></div>
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
                                                <h2>Property Info</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	

                                                <div class="form-group submit_pro_radio_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Property For</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <input type="radio" id="Sale" class="radio_btn" name="Rent" />
                                                        <label for="Sale" class="radio_txt"> Sale </label>

                                                        <input type="radio" id="Rent" class="radio_btn" name="Rent" />
                                                        <label for="Rent" class="radio_txt"> Rent </label>
                                                    </div>	
                                                </div>							

                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Property Type </p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <label class="checkbox-inline"> 
                                                            <input type="checkbox" name="Flat" required> 
                                                            Flat  
                                                        </label>

                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="House/Villa" required>
                                                            House/Villa 
                                                        </label>

                                                        <label class="checkbox-inline"> 
                                                            <input type="checkbox" name="Plot/Land" required> 
                                                            Plot/Land  
                                                        </label>
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
                                                                <input type="text" class="submit_pro_plot_area" name="cover_area_size" placeholder="Enter Your Property Name">		
                                                            </label>								   
                                                        </div>
                                                    </div>		
                                                </div>  	
                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Select Location</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <div class="form-group">								
                                                            <select class="step1_location_select" name='location'>
                                                                <option >Location</option>
                                                                <option >Hinjewadi</option>
                                                                <option > Wagholi</option>
                                                                <option >  Hadapsar</option>
                                                                <option >  Lohgaon</option>
                                                            </select>								   
                                                        </div>
                                                    </div>		
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Enter Address</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <div class="form-group">								
                                                            <textarea rows="2" cols="40" placeholder="Enter Your Address"></textarea>							   
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
                            <form name="step2_form" id="post_property_form" method="POST" action="#" data-toggle="validator" role="form">
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
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">4</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">5</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">6</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">7</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">8</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">9</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>
                                                    <!-- <div class="submit_pro_select_Total_Floor">	    		
                                                            <div class="form-group">								
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-default dropdown-toggle" type="button" id="property_type" data-toggle="dropdown">Bedroom Size
                                                                        <span class="caret"></span></button>
                                                                        <ul class="dropdown-menu bedroom_dropdown" role="menu" aria-labelledby="property_type"> 		
                                                                            <li onclick="show_1_bedroom();">1</li>
                                                                            <li onclick="show_2_bedroom();">2</li>
                                                                            <li onclick="show_3_bedroom();">3</li>
                                                                            <li onclick="show_4_bedroom();">4</li>
                                                                            <li onclick="show_5_bedroom();">5</li>					
                                                                        </ul>
                                                                    </div>
                                                            </div>
                                                    </div> -->

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Balconies</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">4</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">5</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">6</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">7</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">8</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">9</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hide_bedroom col-md-12" id="show_1_bedroom_on_radio_click">		    		
                                                    <div class="form-group bedroom_width">								
                                                        <label class="bedroom_width"> Bedroom 1 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								   
                                                    </div>		  
                                                </div>
                                                <div class="hide_bedroom col-md-12"  id="show_2_bedroom_on_radio_click">
                                                    <div class="form-group bedroom_width">								
                                                        <label class="bedroom_width"> Bedroom 1 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								
                                                        <label class="bedroom_width"> Bedroom 2 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								   										   
                                                    </div>
                                                </div>
                                                <div class="hide_bedroom col-md-12"  id="show_3_bedroom_on_radio_click">
                                                    <div class="form-group bedroom_width">								
                                                        <label class="bedroom_width"> Bedroom 1 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								
                                                        <label class="bedroom_width"> Bedroom 2 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>
                                                        <label class="bedroom_width"> Bedroom 3 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								   										   
                                                    </div>			  
                                                </div>
                                                <div class="hide_bedroom col-md-12"  id="show_4_bedroom_on_radio_click">
                                                    <div class="form-group bedroom_width">								
                                                        <label class="bedroom_width"> Bedroom 1 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								
                                                        <label class="bedroom_width"> Bedroom 2 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>
                                                        <label class="bedroom_width"> Bedroom 3 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>
                                                        <label class="bedroom_width"> Bedroom 4 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								   										   
                                                    </div>			  
                                                </div>
                                                <div class="hide_bedroom col-md-12"  id="show_5_bedroom_on_radio_click">
                                                    <div class="form-group bedroom_width">								
                                                        <label class="bedroom_width"> Bedroom 1 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								
                                                        <label class="bedroom_width"> Bedroom 2 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>
                                                        <label class="bedroom_width"> Bedroom 3 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>
                                                        <label class="bedroom_width"> Bedroom 4 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>
                                                        <label class="bedroom_width"> Bedroom 5 :
                                                            <input type="text" class="key_facilities_ip" name="Length"  placeholder="Length" required> X 
                                                            <input type="text" class="key_facilities_ip" name="Breadth"  placeholder="Breadth" required>	Sqft	
                                                        </label>								   										   
                                                    </div>			  
                                                </div>


                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Floor No</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">4</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">5</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">6</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">7</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">8</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">9</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Total Floor</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">4</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">5</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">6</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">7</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">8</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">9</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Furnished Status</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">Select</option>
                                                                <option value="volvo" class="floor_select_margin">Furnished</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">Unfurnished</option>
                                                                <option value=" Wagholi" class="floor_select_margin">Semi-Furnished</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Bathrooms</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">4</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">5</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">6</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">7</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">8</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">9</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Floors Allowed <br>for construction</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">Total Floor</option>
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Wagholi" class="floor_select_margin">4</option>
                                                                <option value=" Wagholi" class="floor_select_margin">5</option>
                                                                <option value=" Wagholi" class="floor_select_margin">6</option>
                                                                <option value=" Wagholi" class="floor_select_margin">7</option>
                                                                <option value=" Wagholi" class="floor_select_margin">8</option>
                                                                <option value=" Wagholi" class="floor_select_margin">9</option>
                                                                <option value=" Wagholi" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">No of open sides</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">Select</option>
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">4</option>				  
                                                            </select>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col_padding">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Width of road <br>facing the plot</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_Road_Width" name="House/Villa" placeholder="Road Width In Meter" required>		
                                                            </label>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Distance from Key Facilities : </p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">	    		
                                                        <div class="form-group">								
                                                            <label class="key_facilities_label"> Hospital :
                                                                <input type="text" class="key_facilities_ip" name="Hospital"  required>	Km	
                                                            </label>
                                                            <label class="key_facilities_label"> School :
                                                                <input type="text" class="key_facilities_ip" name="Hospital"  required>	Km	
                                                            </label>
                                                            <label class="key_facilities_label"> Airport :
                                                                <input type="text" class="key_facilities_ip" name="Hospital"  required>	Km	
                                                            </label>
                                                            <label class="key_facilities_label_2"> City Center :
                                                                <input type="text" class="key_facilities_ip" name="Hospital"  required>	Km	
                                                            </label>
                                                            <label class="key_facilities_label_2"> Railway Station :
                                                                <input type="text" class="key_facilities_ip" name="Hospital"  required>	Km	
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
                                                            <input type="radio" id="None" class="radio_btn" name="Parking" onclick="show_no_parking();" />
                                                            <label class="radio_txt" for="None">None</label>

                                                            <input type="radio" id="Covered" class="radio_btn" name="Parking" onclick="show_Covered_parking();" />
                                                            <label class="radio_txt" for="Covered">Covered</label>		

                                                            <input type="radio" id="Open" class="radio_btn" name="Parking" onclick="show_Open_parking();" />
                                                            <label class="radio_txt" for="Open">Open</label>								   
                                                        </div>
                                                    </div>		
                                                </div>

                                                <div class="step1_floor_no_select hide_parking" id="show_covered_parking_on_radio_click">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">No. of covered parkings:</p>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Wagholi" class="floor_select_margin">4</option>
                                                                <option value=" Wagholi" class="floor_select_margin">5</option>
                                                                <option value=" Wagholi" class="floor_select_margin">6</option>
                                                                <option value=" Wagholi" class="floor_select_margin">7</option>
                                                                <option value=" Wagholi" class="floor_select_margin">8</option>
                                                                <option value=" Wagholi" class="floor_select_margin">9</option>
                                                                <option value=" Wagholi" class="floor_select_margin">10</option>
                                                            </select>								   
                                                        </div>
                                                    </div>			  
                                                </div>
                                                <div class="step1_floor_no_select hide_parking" id="show_open_parking_on_radio_click">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">No. of open parkings:</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">1</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">2</option>
                                                                <option value=" Wagholi" class="floor_select_margin">3</option>
                                                                <option value=" Wagholi" class="floor_select_margin">4</option>
                                                                <option value=" Wagholi" class="floor_select_margin">5</option>
                                                                <option value=" Wagholi" class="floor_select_margin">6</option>
                                                                <option value=" Wagholi" class="floor_select_margin">7</option>
                                                                <option value=" Wagholi" class="floor_select_margin">8</option>
                                                                <option value=" Wagholi" class="floor_select_margin">9</option>
                                                                <option value=" Wagholi" class="floor_select_margin">10</option>
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
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">Sq-ft</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">Sq-yrd</option>
                                                                <option value=" Wagholi" class="floor_select_margin">Sq-m</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">Acre</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="House/Villa" placeholder="Covered Area" required>		
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
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">Sq-ft</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">Sq-yrd</option>
                                                                <option value=" Wagholi" class="floor_select_margin">Sq-m</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">Acre</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="House/Villa" placeholder="Plot Area" required>		
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
                                                                <input type="text" class="submit_pro_plot_area" name="House/Villa" placeholder="Plot Length In Ft" required>		
                                                            </label>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Plot Breadth</p>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="House/Villa" placeholder="Plot Breadth In Ft" required>		
                                                            </label>								   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">
                                                    <div class="submit_pro_Floor_txt">
                                                        <p class="I_am_txt">Carpet Area</p>
                                                    </div>
                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <select class="step1_floor_no_select">
                                                                <option value="volvo" class="floor_select_margin">Sq-ft</option>
                                                                <option value="Hinjewadi" class="floor_select_margin">Sq-yrd</option>
                                                                <option value=" Wagholi" class="floor_select_margin">Sq-m</option>
                                                                <option value=" Hadapsar" class="floor_select_margin">Acre</option>
                                                            </select>								   
                                                        </div>
                                                    </div>

                                                    <div class="submit_pro_select_Total_Floor">	    		
                                                        <div class="form-group">								
                                                            <label >
                                                                <input type="text" class="submit_pro_plot_area" name="House/Villa" placeholder="Carpet Area" required>		
                                                            </label>								   
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
                            <form name="step3_form" id="post_property_form" method="POST" action="#" data-toggle="validator" role="form">
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
                                                        <input type="radio" id="New Property" class="radio_btn" name="Resale" />
                                                        <label class="radio_txt" for="New Property">New Property</label>

                                                        <input type="radio" id="Resale" class="radio_btn" name="Resale" />
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
                                                                <input type="radio" id="Select Date" class="radio_btn" name="Select Date" onclick="show_date();" />
                                                                <label class="radio_txt" for="Select Date">Under Construction</label>
                                                                <div class="step1_floor_no_select hide_date" id="show_date_on_radio_click">
                                                                    <input type="date" id="bday" name="bday">
                                                                </div>	
                                                            </div>

                                                            <input type="radio" id="Immediately" class="radio_btn" name="Select Date" onclick="hide_date();" />
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
                                                                <select class="step1_floor_no_select">
                                                                    <option value="volvo" class="floor_select_margin">Month</option>
                                                                    <option value="Hinjewadi" class="floor_select_margin">Month</option>
                                                                    <option value=" Wagholi" class="floor_select_margin">January</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">February</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">March</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">April</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">May</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">June</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">Jully</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">August</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">September</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">October</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">November</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">December</option>
                                                                </select>								   
                                                            </div>
                                                        </div>
                                                        <div class="submit_pro_select_Total_Floor">	    		
                                                            <div class="form-group">								
                                                                <select class="step1_floor_no_select">
                                                                    <option value="volvo" class="floor_select_margin">Year</option>
                                                                    <option value="Hinjewadi" class="floor_select_margin">Year</option>
                                                                    <option value=" Wagholi" class="floor_select_margin">2018</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2019</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2020</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2021</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2022</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2023</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2024</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2025</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2026</option>
                                                                    <option value=" Hadapsar" class="floor_select_margin">2027</option>
                                                                </select>								   
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
                                                            <select class="step1_location_select">
                                                                <option value="volvo">Age of Construction</option>
                                                                <option value="Hinjewadi">New Construction</option>
                                                                <option value=" Wagholi">Less than 5 years</option>
                                                                <option value=" Hadapsar">5 to 10 years</option>
                                                                <option value=" Lohgaon">10 to 15 years</option>
                                                                <option value=" Lohgaon">15 to 20 years</option>
                                                                <option value=" Lohgaon">Above 20 years</option>
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
                                                <h2>Price Details</h2>
                                            </div>

                                            <div class="col-md-10 col-md-offset-1">	

                                                <div class="form-group">
                                                    <div class="row row_margin">
                                                        <div class="col-md-2 col_padding">
                                                            <p class="I_am_txt">Expected Price</p>
                                                        </div>

                                                        <div class="col-md-10 col_padding">    		
                                                            <div class="form-group">	     									
                                                                <select class="submit_pro_expected_price_checkbox">
                                                                    <option value="volvo">Crore</option>
                                                                    <option value="Hinjewadi">0</option>
                                                                    <option value=" Wagholi">1</option>
                                                                    <option value=" Hadapsar">2</option>
                                                                    <option value=" Lohgaon">3</option>
                                                                    <option value=" Lohgaon">4</option>
                                                                    <option value=" Lohgaon">5</option>
                                                                    <option value=" Lohgaon">6</option>
                                                                    <option value=" Lohgaon">7</option>
                                                                    <option value=" Lohgaon">8</option>
                                                                    <option value=" Lohgaon">9</option>
                                                                    <option value=" Lohgaon">10</option>
                                                                </select>
                                                                <select class="submit_pro_expected_price_checkbox">
                                                                    <option value="volvo">Lac</option>
                                                                    <option value="Hinjewadi">0</option>
                                                                    <option value=" Wagholi">1</option>
                                                                    <option value=" Hadapsar">2</option>
                                                                    <option value=" Lohgaon">3</option>
                                                                    <option value=" Lohgaon">4</option>
                                                                    <option value=" Lohgaon">5</option>
                                                                    <option value=" Lohgaon">6</option>
                                                                    <option value=" Lohgaon">7</option>
                                                                    <option value=" Lohgaon">8</option>
                                                                    <option value=" Lohgaon">9</option>
                                                                    <option value=" Lohgaon">10</option>
                                                                </select>
                                                                <select class="submit_pro_expected_price_checkbox">
                                                                    <option value="volvo">Thousand</option>
                                                                    <option value="Hinjewadi">0</option>
                                                                    <option value=" Wagholi">1</option>
                                                                    <option value=" Hadapsar">2</option>
                                                                    <option value=" Lohgaon">3</option>
                                                                    <option value=" Lohgaon">4</option>
                                                                    <option value=" Lohgaon">5</option>
                                                                    <option value=" Lohgaon">6</option>
                                                                    <option value=" Lohgaon">7</option>
                                                                    <option value=" Lohgaon">8</option>
                                                                    <option value=" Lohgaon">9</option>
                                                                    <option value=" Lohgaon">10</option>
                                                                </select>
                                                            </div>							   
                                                        </div>
                                                    </div>	    

                                                    <div class="row row_margin">	
                                                        <div class="col-md-offset-1">
                                                            <div class="form-group">		      										
                                                                <label class="submit_pro_price_detail_enter_price"> <span >Or &nbsp;</span>
                                                                    <input type="text" class="submit_pro_price_detail_txt" name="House/Villa" placeholder="Enter Total Price" required>		
                                                                </label>								   
                                                            </div>
                                                        </div>
                                                    </div>		

                                                </div>

                                                <div class="form-group submit_req_ip_margin">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Price per Sq-ft</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">    		
                                                        <div class="form-group">	     									
                                                            <label> 
                                                                <input type="text" class="submit_pro_price_detail_txt" name="House/Villa" placeholder="" required>		
                                                            </label>
                                                        </div>							   
                                                    </div>	    	 					
                                                </div>							

                                                <div class="form-group submit_req_ip_margin">
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Price Includes </p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">		    
                                                        <label class="I_am_txt"> 
                                                            <input type="checkbox" name="PLC" required> 
                                                            PLC  
                                                        </label>

                                                        <label class="I_am_txt">
                                                            <input type="checkbox" name="Car Parking" required>
                                                            Car Parking 
                                                        </label>

                                                        <label class="I_am_txt"> 
                                                            <input type="checkbox" name="Club Membership" required> 
                                                            Club Membership 
                                                        </label>
                                                    </div>		
                                                </div>	

                                                <div class="form-group">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Other Charges</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">    			     									
                                                        <label> 
                                                            <input type="text" class="submit_pro_price_detail_txt" name="House/Villa" placeholder="Other Charges" required>		
                                                        </label>							   
                                                    </div>	    	 					
                                                </div>

                                                <div class="form-group submit_req_ip_margin_checkbox">	 	
                                                    <div class="col-md-10 col-md-offset-1 col_padding">    		
                                                        <div class="form-group">	     									
                                                            <label class="I_am_txt"> 
                                                                <input type="checkbox" name="Club Membership" required> 
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
                                                                <input type="text" class="submit_pro_price_detail_txt" name="House/Villa" placeholder="Booking/Token Amount" required>		
                                                            </label>
                                                        </div>								   
                                                    </div>	    	 					
                                                </div>

                                                <div class="form-group">	 	
                                                    <div class="col-md-2 col_padding">
                                                        <p class="I_am_txt">Maintenance Charges</p>
                                                    </div>

                                                    <div class="col-md-10 col_padding">
                                                        <div class="form-group">    			     									
                                                            <label class="radio_inline"> 
                                                                <input type="text" class="submit_pro_price_detail_txt" name="House/Villa" placeholder="Maintenance Charges" required>		
                                                            </label> <span class="submit_pro_Maintenance_Charges_span">Per</span>
                                                            <select class="submit_pro_expected_price_checkbox">
                                                                <option value="volvo">Monthly</option>
                                                                <option value="Hinjewadi">Quarterly</option>
                                                                <option value=" Wagholi">Yearly</option>
                                                                <option value=" Hadapsar">One-Time</option>
                                                                <option value=" Lohgaon">Per Sq.unit Monthly</option>
                                                            </select>
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
                                                                <input type="checkbox" name="Club Membership" required> 
                                                                I agree to the Terms of Services & Privacy Policy.
                                                            </label>
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
                            <form name="step4_form" id="post_property_form" method="POST" action="#" data-toggle="validator" role="form">
                                <div class="container">
                                    <div class="propertyform_sec_padding">
                                        <div class="row row_margin">
                                            <div class="col-md-12">
                                                <h2>Photos</h2>
                                            </div>

                                            <div class="col-md-11 col-md-offset-1">	

                                                <div id="upload_img_main_div text-center">
                                                    <div id="upload_img_form_div">
                                                        <h3>Upload Exterior View, Living Room, Bedrooms, Kitchen Images</h3>
                                                        <form enctype="multipart/form-data" action="" method="post">
                                                            <!-- First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB. <br> -->
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

                                                        </form>
                                                        <!------- Including PHP Script here ------>
                                                        <!-- <?php //include "upload.php";  ?> -->
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
                            $(document).ready(function () {
                                $(".ttt").click(function () {
                                    $(".kkk").toggle();
                                });
                                // $(window).click(function(){
                                //     $(".kkk").hide();
                                // });
                            });
        </script>

        <script type="text/javascript">
            function show_director() {
                document.getElementById('add_director').style.display = 'block';
            }
            ;
            function hide_director() {
                document.getElementById('add_director').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                var maxField = 10; //Input fields increment limitation
                var addButton = $('.add_contact_person_img'); //Add button selector
                var wrapper = $('.append_contact_person'); //Input field wrapper
                var fieldHTML = '<div><input type="text" class="director_add_ip" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_contact_person_img" title="Remove field"><img src="images/remove-icon.png"/></a></div>'; //New input field html 
                var x = 1; //Initial field counter is 1
                $(addButton).click(function () { //Once add button is clicked
                    if (x < maxField) { //Check maximum number of input fields
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); // Add field html
                    }
                });
                $(wrapper).on('click', '.remove_contact_person_img', function (e) { //Once remove button is clicked
                    e.preventDefault();
                    $(this).parent('div').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });
        </script>

        <script type="text/javascript">
            function contact_person_show() {
                document.getElementById('contact_person_info_show').style.display = 'block';
            }
            function contact_person_hide() {
                document.getElementById('contact_person_info_show').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function show1() {
                document.getElementById('owner_info_show').style.display = 'block';
            }
            function show2() {
                document.getElementById('owner_info_show').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function show_date() {
                document.getElementById('show_date_on_radio_click').style.display = 'block';
            }
            function hide_date() {
                document.getElementById('show_date_on_radio_click').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function show_1_bedroom() {
                document.getElementById('show_1_bedroom_on_radio_click').style.display = 'block';
                document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
            }
            function show_2_bedroom() {
                document.getElementById('show_2_bedroom_on_radio_click').style.display = 'block';
                document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
            }
            function show_3_bedroom() {
                document.getElementById('show_3_bedroom_on_radio_click').style.display = 'block';
                document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
            }
            function show_4_bedroom() {
                document.getElementById('show_4_bedroom_on_radio_click').style.display = 'block';
                document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_5_bedroom_on_radio_click').style.display = 'none';
            }
            function show_5_bedroom() {
                document.getElementById('show_5_bedroom_on_radio_click').style.display = 'block';
                document.getElementById('show_1_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_2_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_3_bedroom_on_radio_click').style.display = 'none';
                document.getElementById('show_4_bedroom_on_radio_click').style.display = 'none';
            }
        </script>

        <script type="text/javascript">
            function show_no_parking() {
                document.getElementById('show_covered_parking_on_radio_click').style.display = 'none';
                document.getElementById('show_open_parking_on_radio_click').style.display = 'none';
            }
            function show_Covered_parking() {
                document.getElementById('show_covered_parking_on_radio_click').style.display = 'block';
                document.getElementById('show_open_parking_on_radio_click').style.display = 'none';
            }
            function show_Open_parking() {
                document.getElementById('show_open_parking_on_radio_click').style.display = 'block';
                document.getElementById('show_covered_parking_on_radio_click').style.display = 'none';
            }
        </script>



        <!-- onClick="$('#loginbox').hide(); $('.user_reg_form_ref').show(); $('.modal_dialog_user_reg_margin').css('margin-top', '14%') " -->
        <script type="text/javascript">
            var abc = 0;      // Declaring and defining global increment variable.
            $(document).ready(function () {
        //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
                $('#add_more').click(function () {
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
                $('body').on('change', '#img_file', function () {
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

                        }).click(function () {
                            $(this).parent().parent().remove();
                        }));
                    }
                });
        // To Preview Image
                function imageIsLoaded(e) {
                    $('#previewimg' + abc).attr('src', e.target.result);
                }
                ;
                $('#upload').click(function (e) {
                    var name = $(":file").val();
                    if (!name) {
                        alert("First Image Must Be Selected");
                        e.preventDefault();
                    }
                });
            });
        </script>

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
            $(document).ready(function () {

                // Toolbar extra buttons
                var btnFinish = $('<button></button>').text('Finish')
                        .addClass('btn btn-info')
                        .on('click', function () {
                            alert('Finish Clicked');
                        });

                var btnCancel = $('<button></button>').text('Cancel')
                        .addClass('btn btn-danger')
                        .on('click', function () {
                            $('#smartwizard').smartWizard("reset");
                        });

                // Smart Wizard
                $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect: 'fade',
                    toolbarSettings: {toolbarPosition: 'bottom', }
                });
            });
        </script>  


        <script type="text/javascript">
            $(function () {
                $('#third_scroll').carouseller({
                    scrollSpeed: 500,
                    autoScrollDelay: 2600,
                    easing: 'linear'
                });
            });

            $(function () {
                $('#third').carouseller({
                    scrollSpeed: 800,
                    // autoScrollDelay: 1600,
                    easing: 'linear'
                });
            });
        </script>

        <script>$('.pjt_1_img').smoove({offset: '20%'});</script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


    </body>
</html>