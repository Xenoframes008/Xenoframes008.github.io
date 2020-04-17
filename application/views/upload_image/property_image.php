<?php //  echo '<pre>'; print_r($result); exit;?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  
<link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/sampslider.css"> 
  <body>

  <div id="slida-container">	
    <div id="slida-1" class="samp-slider samp-slider-mask">    
      <ul class="samp-container-horizontal">
          <?php// if(count($result)){ ?>
          <?php foreach ($result as $show){ ?>
          
          <div class=" samp-container " style="border: 4px solid;     color: black;  "> <img src=" <?= $show['name']; ?>" style="width: 100%; height: 100%;"></div>

              <?php } //} ?>
      </ul>
    </div>
  </div>
      
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	 <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/sampslider.js"></script>
	<script type="text/javascript">
  
    var slida = jQuery('#slida-1').sampSlider({
      aspectratio:1.8,
      autosize: true,
      autoplay: 4000,
      slidespeed: 500,
      dragonbar: true,
      startslide: 1
    });
  
  </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>