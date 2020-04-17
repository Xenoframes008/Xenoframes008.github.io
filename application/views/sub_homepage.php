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



        <div class="row_house_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>New Properties Updates</h1>
                    </div>
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
                                        <img src="<?php echo base_url('images/row_house_img1.png') ?>" class="img img-responsive">
                                        <div class="row_house_txt">
                                            <h3>Luxuries Properties</h3>
                                            <p> Rs. 32 Lac Onwards</p>
                                        </div>
                                    </div>
                                    <div class="car__4">
                                        <img src="<?php echo base_url('images/row_house_img2.png') ?>" class="img img-responsive">
                                        <div class="row_house_txt">
                                            <h3>Luxuries Properties</h3>
                                            <p> Rs. 32 Lac Onwards</p>
                                        </div>
                                    </div>
                                    <div class="car__4">
                                        <img src="<?php echo base_url('images/row_house_img3.png') ?>" class="img img-responsive">
                                        <div class="row_house_txt">
                                            <h3>Luxuries Properties</h3>
                                            <p> Rs. 32 Lac Onwards</p>
                                        </div>
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img1.png" class="img img-responsive">
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img2.png" class="img img-responsive">
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img3.png" class="img img-responsive">
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
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img2.png" class="img img-responsive">
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img3.png" class="img img-responsive">
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img1.png" class="img img-responsive">
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img2.png" class="img img-responsive">
                                    </div>
                                    <div class="car__4">
                                        <img src="images/row_house_img3.png" class="img img-responsive">
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="carouseller__right">›</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


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

<!--  <script type="text/javascript" src="js/jquery.smartWizard.min.js"></script> -->



        <script>
            $(document).ready(function () {
                $(".banner_property_type_btn").click(function () {
                    $(".banner_property_type_dropdown").toggle();
                });
                // $(".banner").click(function(){
                //     $(".kkk").hide();
                // });
            });
        </script>

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
                    toolbarSettings: {toolbarPosition: 'bottom',
                        toolbarExtraButtons: [btnFinish, btnCancel]
                    }
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