<!DOCTYPE html>
<html lang="en">
<?php include "../head_css.php"; ?>
<body>
<?php include "../alternate_multi_header.php"; ?>
<?php
$devType = $_GET['type'];
?>
<script>
function openTab(evt, info) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(info).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>
<div style="heigth:400px">
<img class="img-responsive center-block" src="<?php echo $url ?>images/bgtest.jpg">
</div>
<!-- Circle Starts -->
<div id="features"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Contact us with your problem. We'll find the solution.</h2> 
<p class=" wowload fadeInUp">With UC Dev Solution's Custom Development, your needs can become your reality.
 Let us know what could make your day-to-day run more smoothly and we can work with you and your team to create the best application,
 gadget, tool, or any other SOLUTION you may need.</p>  
  <div class="row">
    <h3 class="text-center wowload fadeInUp">Custom Development</h3> 
		<ul class="tab">
		  <li><a  id="applink" class="tablinks" onclick="openTab(event, 'app')">Applications</a></li>
		  <li><a id="gadgetlink" class="tablinks" onclick="openTab(event, 'gadget')">Gadgets</a></li>
		  <li><a  id="servicelink" class="tablinks" onclick="openTab(event, 'service')">Services</a></li>
		  <li><a  id="databaselink" class="tablinks" onclick="openTab(event, 'database')">Database</a></li>
		  <li><a  id="sharepointlink" class="tablinks" onclick="openTab(event, 'sharepoint')">SharePoint</a></li>
		  <li><a  id="weblink" class="tablinks" onclick="openTab(event, 'web')">Web</a></li>
		</ul>

		<div id="app" class="tabcontent">
		<h3>Custom Applications</h3>
		  <div class="col-sm-8 wowload fadeInLeft">
		
		   <p>			
			Our applications are developed to run with efficiency and accuracy.				
			See what we've developed to visualize what we can for you on our <a href="<?php echo $url ?>/products/applications.php">Applications</a> page where our expertise is highlighted within our available applications.
			The possibilties are endless, whether you want an application to accompany an existing application or you want a whole system built from the ground up, we can make it happen.						
			We've made multiple web based and windows applications and we have experience working with databases such as Cisco, ConnectWise, etc. 
			We'll work with any platform and any environment that's best fitted for your company.
			
			<br><br>
			To make your custom application request visit our <a href="<?php echo $url ?>contact.php">Contact</a> page and we will work with you to achieve your custom solution. 
		   </p>
		  </div>
		  <div class="col-sm-4 wowload fadeInRight">
		  	<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		  </div>
		  
		</div>

		<div id="gadget" class="tabcontent">
		  <h3>Custom Gadgets</h3>
		  <div class="col-sm-8 wowload fadeInLeft">
		
		    <p>		
			  Our custom gadgets can be developed for Finesse or any other environments suited best for your specification.			
			  See what we've done to envision what we can do for you by visiting our <a href="<?php echo $url ?>products/finesse.php">Gadgets</a> page.
			  We'll create the gadget that accomodates the system of your choosing to ensure growth in your company's productivity.
			
			  <br><br>
			  To make your custom gadget request visit our <a href="<?php echo $url ?>contact.php">Contact</a> page and we will work with you to achieve your custom solution. 
		    </p>
			</div>
			<div class="col-sm-4 wowload fadeInRight">
				<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
			</div> 
		</div>

		<div id="service" class="tabcontent">
		  <h3>Custom Services</h3>
		  <div class="col-sm-8 wowload fadeInLeft">		
		   <p>
			Our custom services can import data from specific resources or perform basic operations.			
			We'll create databases within the service installation, process files and directories, import data from the resource of your choosing, and so much more. 
			Provide us with the request and we'll develop a service to perform any necessary function to benefit your company.
			
			<br><br>
			To make your custom service request visit our <a href="<?php echo $url ?>contact.php">Contact</a> page and we will work with you to achieve your custom solution.
		   </p>
		  </div>
		  <div class="col-sm-4 wowload fadeInRight">
		  	<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		  </div>
		  </div>
		
		<div id="database" class="tabcontent">
		  <h3>Custom Database</h3>
		  <div class="col-sm-8 wowload fadeInLeft">
		
		  <p>
			We also provide assistance for custom database solutions.
			
			We'll work with you to ensure your databasing is as efficient as possible to skillfully manage your company's data.
			
			Our custom database services include customized queries, assistance, and maintenance.			
			We'll help you query your databases with speed and efficiency as well as provide assistance and maintainence on your systems.
			Our team is willing to help with multiple database systems and will provide one on one support as needed.
			
			<br><br>
			To make your custom database request visit our <a href="<?php echo $url ?>contact.php">Contact</a> page and we will work with you to achieve your custom solution.
		   </p>
		  </div>
		  <div class="col-sm-4 wowload fadeInRight">
		  	<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		  </div>
		</div>
		
		<div id="sharepoint" class="tabcontent">
		  <h3>Custom SharePoint</h3>
		  <div class="col-sm-8 wowload fadeInLeft">		
		    <p>			
			  We provide multiple development options for custom SharePoint solutions. 		
			  We have the expertise to create SharePoint plugins tailored to your needs as well as the ability to manage workflows as needed.
			  If you're just getting started with SharePoint we offer assistance in configuration as well as any other SharePoint specific support.		
			  <br><br>
				
			  To make your custom SharePoint request visit our <a href="<?php echo $url ?>contact.php">Contact</a> page and we will work with you to achieve your custom solution. 
		   </p>
		  </div>
		  <div class="col-sm-4 wowload fadeInRight">
		  	<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		  </div>
		</div>
		
		<div id="web" class="tabcontent">
		  <h3>Custom Web</h3>
		  <div class="col-sm-8 wowload fadeInLeft">		
		   <p>
			  Our developers are proficient in multiple web based languages and will work with you to create any website or web based application imaginable.
			  Some of our web applications can be found on our <a href="<?php echo $url ?>products/applications.php">Application</a> page to see what we're capable of providing you.
			  We're willing to work with various APIs, integrate new or existing databases, we'll even troubleshoot or enhance a pre-existing website or web application, and so much more.		
		
			  <br><br>
			  To make your custom web request visit our <a href="<?php echo $url ?>contact.php">Contact</a> page and we will work with you to achieve your custom solution.
		   </p>
		  </div>
		  <div class="col-sm-4 wowload fadeInRight">
		  	<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/placeholder.jpg">
		  </div>
		</div>

  </div>

  <br><br>
</div>
<script>
 $(document).ready(function() {
	//Display current script as passed by GET token
	document.getElementById('<?php echo $devType;?>').style.display = "block";	
    document.getElementById('<?php echo $devType;?>' + 'link').className += " active";

 });
</script>

<!-- #Circle Ends -->

<?php include "../footer.php"; ?>
<?php include "../javascript.php"; ?>
</body>
</html>