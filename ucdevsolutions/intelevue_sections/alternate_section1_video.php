<!--
<?php
if (!isset($_COOKIE['firsttime_intelevue'])) {
  
  $bgVideoWowOptions = 'class="wowload bounceInDown" data-wow-delay="0.7s"';
  $bgVideoDIVOptions = 'class="carousel-overlay wowload fadeInLeft" data-wow-delay="2s"';
}
else {
  $bgVideoWowOptions = '';
  $bgVideoDIVOptions = 'class="carousel-overlay" data-wow-delay="0s" data-wow-duration="0s"';
}
?>
<div id="video-section">
  <div id="background-video">
    <img src="images/backgroundvideo.png" alt="" <?php echo $bgVideoWowOptions; ?> style="width:100%;height:100%" />
    <div <?php echo $bgVideoDIVOptions; ?>>
      <h1>Manage your call center better with Intelevue</h1>
      <a class="btn btn-lg btn-custom1" href="alternate_multi_features.php">Explore</a>
    </div>
  </div>
</div>
<div id="testimonials" class="container spacer">
  <h2 class="text-center  wowload fadeInUp">Client Comments</h2>
	<div class="col-sm-6  wowload fadeInLeft">
		<p>"Before we found [Intelevue], we were not able to provide management and staff our current hold time and total calls answered throughout the day without sending an email to all. Now, it is a simple matter of looking at the wallboards to know our status. It has truly made a difference by providing a real time look at the day's productivity." - Tana Perry, Louisiana Workforce Commission</p>
	</div>
	<div class="col-sm-6 wowload fadeInRight">
		<p>"Intelevue allows me to quickly respond to explosions in call volume by knowing exactly which areas need to be addressed, it doesn't take a PhD in mathematics to get straight to the needed information." - Theodore Zanick, UniSky</p>
	</div>
</div>  -->

<style>
.btn1 {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  font-family: Arial;
  color: #ffffff;
  font-size: 19px;
  background: #4cff00;
  padding: 20px 35px 20px 35px;
  text-decoration: none !important;
}

.btn1:hover {
  background: #2d6aff;
  text-decoration: none;
  color: #ffffff;
}
.btnxs {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  background: #4cff00;
  padding: 15px 20px 15px 20px;
  text-decoration: none !important;
}

.btnxs:hover {
  background: #2d6aff;
  text-decoration: none;
  color: #ffffff;
}
</style>
<?php 
if (!isset($_COOKIE['firsttime_intelevue']))
{
?>
<div id="video-section">
	<div id="background-video">
		<img src="<?php echo $url ?>images/backgroundvideo.png" class="wowload bounceInDown" data-wow-delay= "0.7s" width="100%" height="100%"/>
		<!--
		<div  data-wow-delay= "2s" class="carousel-overlay landing wowload fadeInLeft">
			<h1>Manage your call center better with Intelevue</h1>
			<br>
			<p><a class="btn1" href="alternate_multi_features.php">Explore</a></p>
			
		</div>
		-->
	</div>
</div>
<?php } else{ ?>
<div id="video-section">
	<div id="background-video" >
		<img src="<?php echo $url ?>images/backgroundvideo.png"   width="100%" height="100%"/>
		<!--<div class="carousel-overlay landing">
			<h1>Manage your call center better with Intelevue</h1>
			<br>
			<p><a id="specialButton" class="btn1" href="alternate_multi_features.php">Explore</a></p>
		</div>-->
	</div>
</div>

<?php } ?>
<div id="testimonials" class="container spacer">
	<h2 class="text-center  wowload fadeInUp">Client Comments</h2>
	
		<div class="col-sm-6  wowload fadeInLeft">
			<p>"Before we found [Intelevue], we were not able to provide management and staff our current hold time and total calls answered throughout the day without sending an email to all. Now, it is a simple matter of looking at the wallboards to know our status. It has truly made a difference by providing a real time look at the day's productivity." - Tana Perry, Louisiana Workforce Commission</p>
		</div>
		<div class="col-sm-6 wowload fadeInRight">
			<p>""</p>
		</div>
	</div>
</div>