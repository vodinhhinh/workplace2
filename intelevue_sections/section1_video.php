<?php
$detect = new Mobile_Detect;
if(  !$detect->isMobile() && !$detect->isTablet() ){?>
	<div id="video-section">
		<div id="youtube-video">
		</div>
	</div>
<?php }else{?>
	<div id="video-section">
		<center>
			<div style="overflow:hidden;height:270px;width:480px;max-width:100%;max-height:100%;">
				<div id="youtube_canvas" style="height:100%;width:100%;max-width:100%">
				<iframe id="mobileYoutube" style="height:100%;width:100%;max-width:100%;border:0;" frameborder="0" src="https://www.youtube.com/embed/RwA3JAeST5E"></iframe>
				</div><style>#youtube_canvas img{max-width:none!important;background:none!important}</style>
			</div>
		</center>
	</div>
<?php }
?>



<div id="testimonials" class="container spacer">
	<h2 class="text-center  wowload fadeInUp">Client Comments</h2>
	
		<div class="col-sm-6  wowload fadeInLeft">
			<p>"Before we found [Intelevue], we were not able to provide management and staff our current hold time and total calls answered throughout the day without sending an email to all. Now, it is a simple matter of looking at the wallboards to know our status. It has truly made a difference by providing a real time look at the day's productivity." - Tana Perry, Louisiana Workforce Commission</p>
		</div>
		<div class="col-sm-6 wowload fadeInRight">
			<p>"Intelevue allows me to quickly respond to explosions in call volume by knowing exactly which areas need to be addressed, it doesn't take a PhD in mathematics to get straight to the needed information." - Theodore Zanick, UniSky</p>
		</div>
	</div>
</div>