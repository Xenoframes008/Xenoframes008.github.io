<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>digital marketing</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/smart_wizard.min.css">
	<link rel="stylesheet" type="text/css" href="css/smart_wizard_theme_arrows.min.css">
	<link rel="stylesheet" type="text/css" href="css/carouseller.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css"> -->

	<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/css.css"> 
         <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/bootstrap_multiple_selection.min.css"> 
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/bootstrap-theme.min.css">
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/carouseller.css">  
         <link rel="stylesheet" href="/code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
         <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css">   
         
                 
      <script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery-3.1.1.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url();?>js/bootstrap.min.js"></script>   
      <script type = 'text/javascript' src = "<?php echo base_url(); 
         ?>js/carouseller.min.js"></script>
      <script type = 'text/javascript' src = "<?php echo base_url();?>js/jquery.easing.1.3.js"></script>


</head>
<body>

<?php include 'include/header1.php' ?>

<div class="banner">
	<div class="col-md-12 col_padding">
		<img src="<?php echo base_url('images/login_bg.png'); ?>">
	

	<div class="banner_form col_padding text-center">
		<h2>search your property</h2>

			
                <form method="post" action="<?php echo base_url('user/home_search');?>" autocomplete="on" >
				<!-- div class="form-group">		
					<label class="control-label col-sm-3" for="user">Name : </label>
					<div class="col-sm-9">
						<input type="text" id="user" class="form-control ip_focus" required>
					</div>				
    			</div>

				<div class="form-group">
					<label class="control-label col-sm-3" for="tel">Contact No : </label>
					<div class="col-sm-9">
						<input type="tel" id="tel" class="form-control ip_focus" maxlength="10" required>
					</div>
				</div> -->

				<div class="form-group">		
					<label class="control-label bannerinput_width" for="user">
                                                                      
                                            <input type="text" placeholder="SEARCH IN PUNE PROPERTY" id="user" class="form-control  ip_focus" disabled >
					</label> 
				</div>
<!--                                <div class="form-group">		
					<label class="control-label bannerinput_width" for="user">
                                                                        <input type="text" placeholder="Enter Budget" id="user" class="form-control  ip_focus">
					</label> 
				</div>-->
                                <div class="form-group" style="width: 68%; margin-left: 20%;">
                                      <select class="form-control" name="location" id="usert">
                        <option  selected="selected">Select locality </option>
                        <option>Hinjewadi</option>
                        <option > Wagholi</option>
                        <option >  Hadapsar</option>
                        <option >  Lohgaon</option>
                        <option >  Nanded</option>

                    </select>

                                </div>

			
			

				<div class="form-group bannerinput_width">
					<label class="control-label Min_Budget" for="Budget">
						<input type="text" id="Budget" name="plot_size" placeholder="Enter Plot Size" class="form-control ip_focus" >
					 </label>
					<label class="control-label Max_Budget" for="Budget">
                                            <input type="text" id="Budget" name="corpet_area" placeholder="Enter Carpet Area" class="form-control ip_focus" >
					 </label>
					 
				</div>


<div class="bannerinput_width">
  <!-- <h2>Price Range - Dual input box with drop down

</h2> -->
  <div class="span2 investRange">
    <div class="">

      <button id="min-max-price-range banneer_select_budget" class="form-control banner_hide_budget selectpicker select-btn  dropdown-toggle searchParams" href="#" data-toggle="dropdown" tabindex="6" onclick="show_budget();">
        <div class="filter-option pull-left span_price">
          <span id="price_range1"> </span>  <span id="price_range2">Select Budget</span> </div>
        <span class="bs-caret" style="float: right;"><span class="caret"></span></span>
      </button>

      <div class="dropdown-menu ddRange banner_show_budget" role="menu" 
      aria-labelledby="banneer_select_budget" style="">
        <div class="rangemenu">
          <div class="freeformPrice">
            <div class="col-md-5">
              <input name="min_price" type="text" class="min_input form-control" placeholder="Min Price">
            </div>
            <div class="col-md-2 "><span class="arrow"></span></div>
            <div class="col-md-5">
              <input name="max_price" type="text" class="max_input form-control" placeholder="Max Price">
            </div>
          </div>

          <div class="price_Ranges rangesMin col-md-5">
            <a class="min_value" value="" href="javascript:void(0)">Any Min</a>
           <!--  <a class="min_value" value="1000000" href="javascript:void(0)">10 lakhs</a> -->
            <a class="min_value" value="2500000" href="javascript:void(0)">25 lakhs</a>
            <a class="min_value" value="5000000" href="javascript:void(0)">50 lakhs</a>
            <a class="min_value" value="10000000" href="javascript:void(0)">1 cr</a>
            <a class="min_value" value="50000000" href="javascript:void(0)">5 cr</a>
            <a class="min_value" value="100000000" href="javascript:void(0)">10 cr</a>
            <a class="min_value" value="500000000" href="javascript:void(0)">50 cr</a>
            <!-- <a class="min_value" value="1000000000" href="javascript:void(0)">100 cr</a>
            <a class="min_value" value="2000000000" href="javascript:void(0)">200 cr</a>
            <a class="min_value" value="5000000000" href="javascript:void(0)">500 cr</a> -->
          </div>	
          <div class="col-md-2"> </div>
           <div class="price_Ranges rangesMax col-md-5">
            <a class="max_value" value="" href="javascript:void(0)">Any Max</a>
           <!--  <a class="max_value" value="1000000" href="javascript:void(0)">10 lakhs</a> -->
            <a class="max_value" value="5000000" href="javascript:void(0)">50 lakhs</a>
            <a class="max_value" value="10000000" href="javascript:void(0)">1 cr</a>
            <a class="max_value" value="50000000" href="javascript:void(0)">5 cr</a>
            <a class="max_value" value="100000000" href="javascript:void(0)">10 cr</a>
            <a class="max_value" value="500000000" href="javascript:void(0)">50 cr</a>
            <a class="max_value" value="1500000000" href="javascript:void(0)">100 cr</a>
            <!-- <a class="max_value" value="1000000000" href="javascript:void(0)">100 cr</a>
            <a class="max_value" value="2000000000" href="javascript:void(0)">200 cr</a>
            <a class="max_value" value="5000000000" href="javascript:void(0)">500 cr</a> -->
          </div>
          
        </div>

        <div class="btnClear">
          <a href="javascript:void(0)" class="btn btn-link" style="margin-top: -5px;">Clear</a>
        </div>
      </div>

    </div>
  </div>

</div>



	<!-- 			<div class="form-group">
				<p class="text-center">
  <label for="amount">Select Budget:
  <input type="text" id="amount" class="form-control" readonly style="border:0; color:red; font-weight:bold;"></label>
</p>
 
<div id="slider-range"></div>
</div> -->
				
				<div class="form-group">
					<input type="submit" value="SEARCH" class="banner_submit_btn" > 
				</div>
			</form>

		</div>
	</div>
	</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="homepage_sec1_title">New Properties Updates</h1>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="works_item alignleft clear">
		<div id="third" class="carouseller"> 
			<a href="javascript:void(0)" class="carouseller__left">‹</a> 
			<div class="carouseller__wrap"> 
				<div class="carouseller__list"> 
					<div class="car__4">
						<img src="images/row_house_img1.png" class="img img-responsive">
						<div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img2.png" class="img img-responsive">
						<div class="row_house_txt">
							<!-- <h3>Luxuries Properties</h3>
							<p> Rs. 32 Lac Onwards</p> -->
							<div class="row_house_txt_left">
								<h3>Shimga Architecture</h3>
								<p>Wagholi</p>
								<p>1, 2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 22 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img3.png" class="img img-responsive">
						<div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>RK Infrastructures</h3>
								<p>Mundwa</p>
								<p>2 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 28 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img1.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>RK Infrastructures</h3>
								<p>Mundwa</p>
								<p>2 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 28 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img2.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>RK Infrastructures</h3>
								<p>Mundwa</p>
								<p>2 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 28 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img3.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>RK Infrastructures</h3>
								<p>Mundwa</p>
								<p>2 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 28 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="carouseller__right">›</a>
		</div>

		
	</div>
	</div>
	</div>
	</div>


<div class="row_house_sec">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Row houses & Villas</h1>
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="works_item alignleft clear">
		<div id="third_scroll" class="carouseller"> 
			<a href="javascript:void(0)" class="carouseller__left">‹</a> 
			<div class="carouseller__wrap"> 
				<div class="carouseller__list"> 
					<div class="car__4">
						<img src="images/row_house_img1.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img2.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img3.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img1.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img2.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
					<div class="car__4">
						<img src="images/row_house_img3.png" class="img img-responsive">
                                                <div class="row_house_txt">
							<div class="row_house_txt_left">
								<h3>Aria Construction</h3>
								<p>Hadapsar</p>
								<p>2 & 3 BHK Flats</p>
							</div>
							<div class="row_house_txt_right">
								<p>Rs. 32 Lac<br>Onwards</p>
								<input type="button" name="see details" value="See Details" class="see_details_btn">
							</div>
						</div>
					</div>
				</div>
			</div>
			<a href="javascript:void(0)" class="carouseller__right">›</a>
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






<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/particles.min.js"></script>
 <script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/particle_app.js"></script>
<script type="text/javascript" src="js/carouseller.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!--  <script type="text/javascript" src="js/jquery.smartWizard.min.js"></script> -->


<!-- start banner_select_budget -->
<script type="text/javascript">
	      $('.dropdown-menu.ddRange')
        .click(function(e) {
          e.stopPropagation();
        });

      function disableDropDownRangeOptions(max_values, minValue) {
        if (max_values) {
          max_values.each(function() {
            var maxValue = $(this).attr("value");

            if (parseInt(maxValue) < parseInt(minValue)) {
              $(this).addClass('disabled');
            } else {
              $(this).removeClass('disabled');
            }
          });
        }
      }

      function setuinvestRangeDropDownList(min_values, max_values, min_input, max_input, clearLink, dropDownControl) {
        min_values.click(function() {
          var minValue = $(this).attr('value');
          min_input.val(minValue);
          document.getElementById('price_range1').innerHTML = minValue;

          disableDropDownRangeOptions(max_values, minValue);

          validateDropDownInputs();
        });

        max_values.click(function() {
          var maxValue = $(this).attr('value');
          max_input.val(maxValue);
          document.getElementById('price_range2').innerHTML = maxValue;

          toggleDropDown();
        });

        clearLink.click(function() {
          min_input.val('');
          max_input.val('');

          disableDropDownRangeOptions(max_values);

          validateDropDownInputs();
        });

        min_input.on('input',
          function() {
            var minValue = min_input.val();

            disableDropDownRangeOptions(max_values, minValue);
            validateDropDownInputs();
          });

        max_input.on('input', validateDropDownInputs);

        max_input.blur('input',
          function() {
            toggleDropDown();
          });

        function validateDropDownInputs() {
          var minValue = parseInt(min_input.val());
          var maxValue = parseInt(max_input.val());

          if (maxValue > 0 && minValue > 0 && maxValue < minValue) {
            min_input.addClass('inputError');
            max_input.addClass('inputError');

            return false;
          } else {
            min_input.removeClass('inputError');
            max_input.removeClass('inputError');

            return true;
          }
        }

        function toggleDropDown() {
          if (validateDropDownInputs() &&
            parseInt(min_input.val()) > 0 &&
            parseInt(max_input.val()) > 0) {

            // auto close if two values are valid
            dropDownControl.dropdown('toggle');
          }
        }
      }

      setuinvestRangeDropDownList(
        $('.investRange .min_value'),
        $('.investRange .max_value'),
        $('.investRange .freeformPrice .min_input'),
        $('.investRange .freeformPrice .max_input'),
        $('.investRange .btnClear'),
        $('.investRange .dropdown-toggle'));

</script>
<!-- end banner_select_budget -->

<script>
$(document).ready(function(){
    $(".ttt").click(function(){
        $(".kkk").toggle();
    });
    $(".banner_localities_btn").click(function(){
        $(".banner_localities_dropdown").toggle();
    });

     $(".banner_hide_budget").click(function(){
        $(".banner_show_budget").toggle();
    });
    // $(window).click(function(){
    //     $(".kkk").hide();
    // });
});
</script> 

	<script type="text/javascript">
			$(function() {
				$('#third_scroll').carouseller({ 
					// scrollSpeed: 500,
					// autoScrollDelay: 2600,
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