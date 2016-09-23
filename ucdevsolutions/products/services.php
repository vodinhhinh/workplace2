<!DOCTYPE html>
<html lang="en">
<?php include "../head_css.php"; ?>
<body>
<?php include "../alternate_multi_header.php"; ?>


<!-- Cirlce Starts -->
<div id="features"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Services</h2> 
<p class=" wowload fadeInUp">
	We provide a variety of services for efficiency and productiviy in the workplace. View our available services and see what we can do for you.
	<br>
	Can't find what you're looking for? We'll develop it for you! For more information on custom services click <a href="../solutions/custom_services.php">here</a>.
</p>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Directory Maintainer</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			The Directory Maintainer Service maintains any given file directory, deleting all files that are older than the configurable file age.
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>
  <div class="col-sm-6 wowload fadeInRight">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>SBC Import Service</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			The SBC Import Service was developed to be used in conjunction with Sonus Session Border Controllers (SBCs).
			The service's purpose is to provide call reporting information aquired from the CDR records that SBCs generate. All information is imported into a database allowing the calculations of 
			both standard and custom reports.
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
   </div>
  </div>

  <br>
  
   <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Nuance Report Service</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			The Nuance Report service automatically runs Nuance reports and saves output into a log file. 
			These log files track port information on a daily basis, providing information of port usage down to the hour each day. 
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>
  <div class="col-sm-6 wowload fadeInRight">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Custom Services</h4>
		 <a href="../solutions/custom_services.php"><img class="img-responsive center-block img-features" src="<?php echo $url ?>images/cube.png"></a>
		<p class="description">
			Don't have what you're looking for? We make custom services too!
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
   </div>
  </div>
  

</div>

<!-- #Cirlce Ends -->



<?php include "../footer.php"; ?>
<?php include "../javascript.php"; ?>
</body>
</html>