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
         href = "<?php echo base_url('css'); ?>font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url('css'); ?>/carouseller.css">     
         
      <script type="text/javascript" src="<?php echo base_url('js');
      ?>/jquery.smartWizard.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url('js'); 
         ?>/jquery-3.1.1.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url('js'); 
         ?>/bootstrap.min.js"></script>   
      <script type = 'text/javascript' src = "<?php echo base_url('js'); 
         ?>/carouseller.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url('js'); 
         ?>/jquery.easing.1.3.js"></script>


</head>
<body>

<?php //include 'include/header1.php' ?>

<!--<div class="banner2"></div>-->
<div class="row_house_sec">
<div class="container">
	<div class="row box-header">
		<div class="col-md-12">
			<h1>Submit Your Requirement</h1>
		</div>
	</div>
</div>
</div>
<div class="box">

       <form method="POST" action="#" class="" data-toggle="validator" role="form">
       	
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
			      <input type="radio" name="Buy" id="Buy" class="radio_btn" onclick="show1();" />
	            	<label class="radio_txt" for="Buy">Buy</label>
	 
	        	  <input type="radio" name="Buy" id="Rent_1" class="radio_btn" onclick="show2();" />
        			<label class="radio_txt" for="Rent_1">Rent</label> 
		      	</div>
		 	</div>

	<div class="form-group submit_req_ip_margin">
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

	<div class="form-group submit_req_ip_margin_checkbox">	
		<div class="col-md-2 col_padding">
			<p class="I_am_txt">Budget </p>
		</div>

		<div class="col-md-10 col_padding">							
		<div class="budget_select">
		    <div class="selectBox" onclick="show_Flat_rate()">
		      <select>
		        <option>Select an option</option>
		      </select>
		      <div class="overSelect"></div>
		    </div>
		    <div id="flatrate_checkboxes">
		      <label for="one">
		        <input type="checkbox" id="one" />Rs. 10-20 Lac </label>
		      <label for="two">
		        <input type="checkbox" id="two" />Rs. 20-30 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 30-40 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 40-50 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 50-60 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 60-70 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 70-80 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 80-90 Lac </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 90-1 Cr </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 1-2 Cr </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 2-3 Cr </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 3-4 Cr </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. 4-5 Cr </label>
		      <label for="three">
		        <input type="checkbox" id="three" />Rs. >5 Cr </label>                    
		    </div>
  		</div>
  		</div>
	</div>

	<div class="form-group submit_req_ip_margin_checkbox">	
		<div class="col-md-2 col_padding">
			<p class="I_am_txt">Bedroom </p>
		</div>

		<div class="col-md-10 col_padding">							
		<div class="budget_select">
		    <div class="selectBox" onclick="show_Bedroom()">
		      <select>
		        <option>Select Bedroom</option>
		      </select>
		      <div class="overSelect"></div>
		    </div>
		    <div id="bedroom_checkboxes">
		      <label for="one">
		        <input type="checkbox" id="one" />1 </label>
		      <label for="two">
		        <input type="checkbox" id="two" />2 </label>
		      <label for="three">
		        <input type="checkbox" id="three" />3 </label>
		      <label for="four">
		        <input type="checkbox" id="four" />4 </label>
		      <label for="five">
		        <input type="checkbox" id="five" />5 </label>		      
		      <label for="greater_than_five">
		        <input type="checkbox" id="greater_than_five" />>5 </label>                    
		    </div>
  		</div>
  		</div>
	</div>

	<div class="form-group submit_req_ip_margin">
		<div class="col-md-2 col_padding">
		    <p class="I_am_txt">Construction Status</p>
		</div>
		    <div class="col-md-10 col_padding">
			    <label class="checkbox-inline">
			        <input type="checkbox" name="Buy"/>
			        Under Construction
			    </label>
		  
			    <label class="checkbox-inline">
			        <input type="checkbox" name="Rent"/>
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
				<select class="step1_location_select">
				  <option value="volvo">Any floor</option>
				  <option value="Hinjewadi">Below 10th Floor</option>
				  <option value=" Wagholi"> 10th Floor & Above</option>
				  <option value=" Hadapsar">  Ground Floor Only</option>
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
				  <option value="volvo" class="floor_select_margin">Sq-ft</option>
				  <option value="Hinjewadi" class="floor_select_margin">Sq-yrd</option>
				  <option value=" Wagholi" class="floor_select_margin">Sq-m</option>
				  <option value=" Hadapsar" class="floor_select_margin">Acre</option>
				</select>								   
			</div>
		</div>
		<div class="col-md-3 col_padding">    		
      		<div class="form-group ">								
				<label name="area_txt" >
			        <input type="text" class="submit_req_area_txt" name="area_txt" id="area_txt" placeholder="Min_area - Max_area" />
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
				        <input type="text" class="submit_req_location_txt" name="area_txt" id="area_txt" placeholder="Enter City" />
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
				        <input type="text" class="submit_req_location_txt" name="area_txt" id="area_txt" placeholder="Enter Locality & Project" />
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
			      <input type="radio" name="Agent" id="Individual" class="radio_btn" onclick="show1();" />
	            	<label class="radio_txt" for="Individual">Individual</label>
	 
	        	  <input type="radio" name="Agent" id="Agent" class="radio_btn" onclick="show2();" />
        			<label class="radio_txt" for="Agent">Agent</label>
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
				        <input type="text" class="submit_req_location_txt" name="area_txt" id="area_txt" placeholder="Enter Your Name" />
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
				        <input type="text" class="submit_req_location_txt" name="mail_txt" id="mail_txt" placeholder="Enter Your E-mail" />
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
				        <input type="tel" class="submit_req_location_txt" name="tel_txt" id="tel_txt" placeholder="Enter Your Mobile Numbar" required pattern="[0-9]{10}"/>
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
			        <input type="checkbox" name="Projects"/>
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
				<input type="radio" name="Daily" id="Daily" class="radio_btn" onclick="show1();" />
	            	<label class="radio_txt" for="Daily">Daily</label>
	 
	        	  <input type="radio" name="Daily" id="Thrice a week" class="radio_btn" onclick="show2();" />
        			<label class="radio_txt" for="Thrice a week">Thrice a week</label>

        		  <input type="radio" name="Daily" id="weekly" class="radio_btn" onclick="show2();" />
        			<label class="radio_txt" for="weekly">weekly</label>
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
</div>>
<?php// include 'include/footer.php' ?>

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