<footer>					
		<div class="ft_bg_width">
		<div class="container">			
			<div class="row">
				
				<div class="col-md-3 col-sm-6 ft_col_1">
					<h6>Services provided</h6>				
					<ul>
						<li><a href="#"><i class="fa fa-hand-o-right"></i>Marketing strategy</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i> social media</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i>search engine marketing</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i>search engine optimization</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i>mobile marketing</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i>online reputation management</a></li>
						<li><a href="#"><i class="fa fa-hand-o-right"></i>content marketing</a></li>
					</ul>
				</div>

				
				<div class="col-md-3 col-sm-6 ft_col_2 fb_992">

						<h6>Follow Us On</h6>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FOsumare.Solutions&tabs=timeline&width=230&height=210&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="230" height="210" style="border:none;overflow:hidden; margin-top:7px; " scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					
				</div>

				<div class="col-md-3 col-sm-6 ft_col_3">

						<h6>Tweets</h6>
					<a class="twitter-timeline" data-width="250" data-height="210" href="https://twitter.com/Osumare_Sol?ref_src=twsrc%5Etfw">Tweets by Osumare_Sol</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>

				<div class="col-md-3 col-sm-6 ft_col_4">
					<h6>Contact Us</h6>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-2">
							<i class="fa fa-map-marker"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 post_pad">
							<p class="address">Dublin 1<br>
								 parnel street <br>
								 loftus court apartment 420<br>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-2">
							<i class="fa fa-phone"></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 post_pad">
							<p>Tel : +353 123456789<br>
										+353 123456789</p>
						</div>
					</div>

					<div class="row">	
						<div class="col-md-2 col-sm-2 col-xs-2">
							<i class="fa fa-envelope-o "></i>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 post_pad">
							<p class="ft_mail_margin"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-2">
							<i class="fa fa-clock-o"></i>
						</div> 
						<div class="col-md-10 col-sm-10 col-xs-10 post_pad">
							<p>Mon - Sat :-  9.30am to 10.00pm<br>Sunday Closed</p>
						</div>
					</div>
					
				</div>
			</div>
			</div>
		</div>	
</footer>

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
function show_director(){
  document.getElementById('add_director').style.display ='block';
};
function hide_director(){
  document.getElementById('add_director').style.display ='none';
}
</script>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_contact_person_img'); //Add button selector
    var wrapper = $('.append_contact_person'); //Input field wrapper
    var fieldHTML =  '<div><input type="text" class="director_add_ip" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_contact_person_img" title="Remove field"><img src="images/remove-icon.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_contact_person_img', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>

<script type="text/javascript">
function contact_person_show(){
  document.getElementById('contact_person_info_show').style.display ='block';
}
function contact_person_hide(){
  document.getElementById('contact_person_info_show').style.display ='none';
}
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