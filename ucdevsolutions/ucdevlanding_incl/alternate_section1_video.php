<?php 
if (!isset($_COOKIE['firsttime_index']))
{
?>
<div id="video-section">
	<div id="background-video landing">
		<img src="<?php echo $url;?>images/homeheader.png" class="wowload bounceInDown" data-wow-delay= "0.7s" width="100%" height="100%"/>
		<!--
		<div  data-wow-delay= "2s" class="carousel-overlay wowload fadeInLeft">
			<h1>WE ARE CUSTOM DEVELOPMENT</h1>
			<h2>HERE'S WHAT WE CAN DO FOR YOU</h2>
			
		 </div>
		 -->
	  </div>
	</div>
</div>
<?php } else{ ?>
<div id="video-section">
	<div id="background-video landing" class="wowload fadeIn">
		<img src="<?php echo $url;?>images/homeheader.png" width="100%" height="100%"/>
		<!--
		<div class="carousel-overlay landing">
			<h1>WE ARE CUSTOM DEVELOPMENT</h1>
			<h2>HERE'S WHAT WE CAN DO FOR YOU</h2>
			
		 </div>
		 -->
	  </div>
	</div>
</div>	

<?php } ?>

