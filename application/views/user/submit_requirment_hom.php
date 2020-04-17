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
         
                 
      <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/jquery-3.1.1.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/bootstrap.min.js"></script>   
      <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/carouseller.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/jquery.easing.1.3.js"></script>


</head>
<body>

<?php include 'header.php' ?>

<div class="banner2"></div>
<div class="row_house_sec">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Submit Your Requirement</h1>
		</div>
	</div>
</div>
</div>

<form method="POST" action="<?php echo base_url('user/submit_requirment');?>" class="" data-toggle="validator" role="form">
       	
       		<div class="container">
       			<div class="row">
       			<div class="sub_req_form">
       		
    <div class="container">   	
    <div class="propertyform_sec_padding propertyform_border">   	
    	<div class="row row_margin">

			<div class="col-md-12">
		        <h2>Property I'am looking for</h2>
		    </div>

		    <div class="col-md-10 col-md-offset-2">
		    <div class="form-group submit_req_ip_margin">
			 	<div class="col-md-2 col_padding">
		    		<p class="I_am_txt">I want to</p>
		    	</div>
                         
		    	<div class="col-md-10 col_padding">
                            
                                 <div class="">
                                                <label class="radio-inline">
                                                    <input checked="checked" class="radio_btn"  id="IsSmallBusiness" name="Buy" type="radio" value="Buy">
                                                    Buy
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="IsSmallBusiness" name="Buy" class="radio_btn" type="radio" value="Rent">
                                                    Rent
                                                </label>
                                               
                                            </div>
		      	</div>
		 	</div>

	<div class="form-group submit_req_ip_margin">
	  	<div class="col-md-2 col_padding">
			<p class="I_am_txt">Property Type </p>
		</div>

		<div class="col-md-10 col_padding">		    
			<label class="checkbox-inline"> 
                            <input type="checkbox" name="Flat" value="Flat"> 
					Flat  
			</label>

			<label class="checkbox-inline">
                            <input type="checkbox" name="House/Villa" value="House/Villa ">
					House/Villa 
			</label>

			<label class="checkbox-inline"> 
                            <input type="checkbox" name="Plot/Land" value="Plot/Land " > 
					Plot/Land  
			</label>
		</div>		
	</div>
                        
<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Flat</p>
		</div>
	<div class="col-md-10 col_padding">	    		
      			<div class="budget_select">
		    
		     <select class="step1_location_select" name="Flat_bhk" id="Bathrooms" >
                                                                <option  value="" value="">Select_Flat</option>
                                                                <option  value="1 BHK" value="1">1 BHK</option>
                                                                <option  value="2 BHK">2 BHK</option>
                                                                <option  value="3 BHK">3 BHK</option>
                                                                <option  value="4 BHK">4 BHK</option>
                                                                <option  value="5 BHK">5 BHK</option>
                                                                <option  value="6 BHK">6 BHK</option>
                                                                <option  value="7 BHK">7 BHK</option>
                                                                <option  value="8 BHK">8 BHK</option>
                                                                <option  value="9 BHK">9 BHK</option>
                                                                <option  value="10 BHK">10 BHK</option>
                                                            </select>	 
  		</div>
	</div>
	</div>
	

	<div class="form-group submit_req_ip_margin_checkbox">	
		<div class="col-md-2 col_padding">
			<p class="I_am_txt">Bedroom </p>
		</div>

		<div class="col-md-10 col_padding">							
		<div class="budget_select">
		    
		     <select class="step1_location_select" name="Bathrooms" id="Bathrooms" >
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
  		</div>
	</div>

	<div class="form-group submit_req_ip_margin">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Construction Status</p>
		</div>
		    <div class="col-md-10 col_padding">
			    <label class="checkbox-inline">
                                <input type="checkbox" name=" Under_Construction" value="Under Construction"/>
			        Under Construction
			    </label>
		  
			    <label class="checkbox-inline">
                                <input type="checkbox" name=" Ready_To_Move" value=" Ready To Move"/>
			        Ready To Move
			    </label>
		    </div>
	</div>

	<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Floor Preference</p>
		</div>
	<div class="col-md-10 col_padding">	    		
      		<div class="form-group">								
                    <select class="step1_location_select" name="Floor">
				  <option >Any floor</option>
				  <option >Below 10th Floor</option>
				  <option > 10th Floor & Above</option>
				  <option >  Ground Floor Only</option>
				</select>								   
			</div>
	</div>
	</div>

	<div class="form-group">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Area</p>
		</div>
	<div class="col-md-10 col_padding">	
		<div class="col-md-2 col_padding">    		
      		<div class="form-group">								
				<select class="submit_req_area_select">
				  <option  class="floor_select_margin">Sq-ft</option>
				  <option  class="floor_select_margin">Sq-yrd</option>
				  <option  class="floor_select_margin">Sq-m</option>
				  <option  class="floor_select_margin">Acre</option>
				</select>								   
			</div>
		</div>
		<div class="col-md-3 col_padding">    		
      		<div class="form-group ">								
				<label name="area_txt" >
			        <input type="text" class="submit_req_area_txt" name="area_sq" id="area_txt" placeholder="Min_area - Max_area" />
			    </label>								   
			</div>
		</div>	
	</div>
	</div>
                        <div class="form-group">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Budget</p>
		</div>
	<div class="col-md-10 col_padding">	
		<div class="col-md-2 col_padding">    		
      		<div class="form-group">								
				<select class="submit_req_area_select">
				  <option  class="floor_select_margin">Select</option>
				  <option  class="floor_select_margin">Lac</option>
				  <option  class="floor_select_margin">Coror</option>
				  
				</select>								   
			</div>
		</div>
		<div class="col-md-3 col_padding">    		
      		<div class="form-group ">								
				<label name="area_txt" >
			        <input type="text" class="submit_req_area_txt" name="Budget" id="area_txt" placeholder="Plse Enter" />
			    </label>								   
			</div>
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
	        <h2>Location</h2>
	    </div>
 
<div class="col-md-10 col-md-offset-2">	 
<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">City</p>
		</div>                   		                 			
		<div class="col-md-10 col_padding">
				<div class="form-group">																
					<label name="area_txt" >
				        <input type="text" class="submit_req_location_txt" name="City" id="area_txt" placeholder="Enter City" />
				    </label>								   							   
				</div>				
		</div> 
</div>

<div class="form-group">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Locality / Project</p>
		</div>                   		                			
		<div class="col-md-10 col_padding">
				<div class="form-group">																
					<label name="area_txt" >
				        <input type="text" class="submit_req_location_txt" name="Locality" id="area_txt" placeholder="Enter Locality & Project" />
				    </label>								   							   
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
	        <h2>My Info</h2>
	    </div>
 
<div class="col-md-10 col-md-offset-2">	 
<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="radio_txt">I am an</p>
		</div>                  		                 			
		<div class="col-md-10 col_padding">
			<div class="form-group">			 	
		    	<div class="col-md-10 col_padding">
                            
		          <div class="">
                                                <label class="radio-inline">
                                                    <input checked="checked" class="radio_btn"  id="IsSmallBusiness" name="Agent" type="radio" value="Individual">
                                                    Individual
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="IsSmallBusiness" name="Agent" class="radio_btn" type="radio" value="Agent">
                                                    Agent
                                                </label>
                                               
                                            </div>
                        </div>
                            
		 	</div>				
		</div> 
</div>

<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Name</p>
		</div>                   		                 			
		<div class="col-md-10 col_padding">
				<div class="form-group">																
					<label name="area_txt" >
				        <input type="text" class="submit_req_location_txt" name="name" id="area_txt" placeholder="Enter Your Name" />
				    </label>								   							   
				</div>				
		</div> 
</div>

<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Email</p>
		</div>                   		                			
		<div class="col-md-10 col_padding">
				<div class="form-group">																
					<label name="mail_txt" >
				        <input type="text" class="submit_req_location_txt" name="mail" id="mail_txt" placeholder="Enter Your E-mail" />
				    </label>								   							   
				</div>
		</div>   		      		
</div>

<div class="form-group submit_req_ip_margin_checkbox">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Mobile No</p>
		</div>                   		                			
		<div class="col-md-10 col_padding">
				<div class="form-group">																
					<label name="tel_txt" >
				        <input type="text" class="submit_req_location_txt" name="mobile" id="tel_txt" placeholder="Enter Your Mobile Numbar"  pattern="[0-9]{10}"/>
				    </label>								   							   
				</div>
		</div>   		      		
</div>	

</div>
</div>	
</div>
</div>

<div class="container">
<div class="propertyform_sec_padding">
    <div class="row row_margin">
 
<div class="col-md-10 col-md-offset-2">	 
<div class="form-group submit_req_ip_margin">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Receive Alerts For</p>
		</div>                  		                 			
		<div class="col-md-10 col_padding">
			<div class="form-group">			 			    	
			      <label class="checkbox-inline">
			        <input type="checkbox" name="Property"/>
			        Property
			      </label>		  
			      <label class="checkbox-inline">
			        <input type="checkbox" name="Projects" />
			        Projects
			      </label>
			      <label class="checkbox-inline">
			        <input type="checkbox" name="Agents"/>
			        Agents
			      </label>
		 	</div>				
		</div> 
</div>

<div class="form-group">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Alerts Frequency</p>
		</div>                  		                 			
		<div class="col-md-10 col_padding">
			<div class="form-group">
                            
                                 <div class="">
                                                <label class="radio-inline">
                                                    <input checked="checked" class="radio_btn"  id="IsSmallBusiness" name="Alerts_Frequency" type="radio" value="Daily">
                                                    Daily
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="IsSmallBusiness" name="Alerts_Frequency" class="radio_btn" type="radio" value="Thrice a week">
                                                    Thrice a week
                                                </label>
                                               <label class="radio-inline">
                                                    <input id="IsSmallBusiness" name="Alerts_Frequency" class="radio_btn" type="radio" value="weekly">
                                                    weekly
                                                </label>
                                            </div>
		 	</div>	
                    
		</div> 
</div>

<p class="sub_req_i_agree"><a href="#">I agree to Osumare's T & C</a></p>
<button class="sub_req_alert_btn">Submit</button>
</div>
</div>	
</div>
</div>

</div>
</div>
       	</div>
</form>

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
});
</script>

<script type="text/javascript">

function show1(){
  document.getElementById('owner_info_show').style.display ='block';
}
function show2(){
  document.getElementById('owner_info_show').style.display ='none';
}

</script>

<script type="text/javascript">
	var expanded = false;

function show_Flat_rate() {
  var flat_rate_checkboxes = document.getElementById("flatrate_checkboxes");
  if (!expanded) {
    flat_rate_checkboxes.style.display = "block";
    expanded = true;
  } else {
    flat_rate_checkboxes.style.display = "none";
    expanded = false;
  }
};

function show_Bedroom() {
  var bedroom_checkboxes = document.getElementById("bedroom_checkboxes");
  if (!expanded) {
    bedroom_checkboxes.style.display = "block";
    expanded = true;
  } else {
    bedroom_checkboxes.style.display = "none";
    expanded = false;
  }
};

</script>



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
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      
                                    }
                 });
        });   
    </script>  

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
			});
		</script>

	<script>$('.pjt_1_img').smoove({offset:'20%'});</script>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</body>
</html>