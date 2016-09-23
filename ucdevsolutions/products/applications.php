<!DOCTYPE html>
<html lang="en">
<?php include "../head_css.php"; ?>
<body>
<?php include "../alternate_multi_header.php"; ?>


<!-- Circle Starts -->
<div id="features"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Applications</h2> 
<p class=" wowload fadeInUp">
	We provide a variety of applications for efficiency and productiviy in the workplace. View our available applications and see what we can do for you. 
	<br>
	Can't find what you're looking for? We'll develop it for you! For more information on custom applications click <a href="../solutions/custom_applications.php">here</a>.
</p>  
  <div class="row">
   <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Intelevue</h4>
		<a href="intelevue.php"><img class="img-responsive center-block img-features" src="<?php echo $url ?>images/inteleVue_logo.png"></a>
		<p class="description">
			The Intelevue application lets you display useful call center information and statistics
			in a simple way. Intelevue takes any number of pages and cycles through them;
			providing constant, real time information on your Cisco phone system in an easily
			accessible manner.
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>
  <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Hours of Operation Management Interface (HOMI)</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/UCDS_HOMI.png" style="width:85%;height:auto;">
		<p class="description">
			Allows users to easily change the hours of operation including daily schedule with breaks as well as holidays from a web interface and not having to modify any files on the server or update any scripting.
            It also allows them to close the entire call center(s) with the a single click in case of emergency.
            It has multiple permission levels as well as audit reporting to determine who and when changes were made.
            It can also be leveraged to provide a dial in solution for managing hours or emergency closing the call center(s).
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>
  
  <br>
  </div>
   <div class="row">
   <div class="col-sm-6 wowload fadeInRight">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>LDAP Search and Update</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			A web based search engine that allows users to search through Active Directory to view, manage, and update available records as needed.
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
   </div>
  
  <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Receiving/Inventory/Purchasing (RIP)</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			RIP is a web based shipping and receiving system that 
			allows users to create and edit purchase orders, receive and track items, as well as search through already received and inventory items.
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>
  <br>
  </div>
 
  <div class="row">
  <div class="col-sm-6 wowload fadeInRight">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Career Management</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			Career Management allows end users (applicants) to view and apply to open positions. Administrators have the ability to review and update applicant information, as well as manage the current job postings available to applicants.
			Administrators can search applicants by: their status(if the application has been reviewed, applicant was interviewed, ect...), their code (if they've been hired, or the amount of interest in the applicant), and applied position.
			Administrators view of each application returns it's current status and code as well as applicant information including: certifications, skills, and resume which can be easily downloaded for review. 			
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
   </div>
  <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>CVP Log Explorer</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			Allows techs to easily trace a call through multiple CVP log files via ANI, GUID, or other caller entered information.
			It places all of the individual call’s information from each of the application log files into a single file in chronological order so that the technician can easily see where any problems might have occurred. 
			It allows for this file to be exported, in case it would need to be delivered to an escalation engineer.
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>   
  </div>
  
  <br>
  <div class="row">
  <div class="col-sm-6 wowload fadeInRight">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Dial Peer Assistant</h4>
		<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		<p class="description">
			The Dial Peer Assistant makes it easy to create a full local dialing plan for simplifying configuration of your voice gateway. The application accepts input from the user such as area code, port information, 
			preference order, etc. The application creates a file with all of the local dial peers based on the information entered, allowing large dial plans to be entered quickly and accurately. This is extremely useful 
			when upgrading to a 7 or 10 digit dial plan.
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
   </div>
  <div class="col-sm-6 wowload fadeInLeft">
	<div class="well clearfix">
		<h4 class="text-center"><i class="fa fa-th-large"></i>Custom Applications</h4>
		<a href="../solutions/custom_applications.php"><img class="img-responsive center-block img-features" src="<?php echo $url ?>images/cube.png"></a>
		<p class="description">
			Don't have what you're looking for? We make custom applications too!
		</p>
		<button type="button" class="btn btn-info pull-right btn-more"></button>
	</div>
  </div>   
  </div>
</div>

<!-- #Circle Ends -->

<?php include "../footer.php"; ?>
<?php include "../javascript.php"; ?>
</body>
</html>