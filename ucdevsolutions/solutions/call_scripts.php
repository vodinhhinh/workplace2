<!DOCTYPE html>
<html lang="en">
<?php include "../head_css.php"; ?>
<body>
<?php include "../alternate_multi_header.php"; ?>
<?php
$scriptType = '';
if(isset($_GET['type']))
{
	$scriptType = $_GET['type'];
}

?>
<script>
function openTab(evt, info,contentlink = false) {
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
	
	if(!contentlink){
		evt.currentTarget.className += " active";
	}
	else{
		document.getElementById(info + 'link').className += " active";
	}
}
</script>
<div style="heigth:400px">
<img class="img-responsive center-block" src="<?php echo $url ?>images/landscape1.png">
</div>
<!-- Circle Starts -->
<div id="features"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Contact us with your problem. We'll find the solution.</h2> 
<p class=" wowload fadeInUp">With UC Dev Solution's Custom Development, your needs can become your reality.
 Let us know what could make your day-to-day run more smoothly and we can work with you and your team to create the best application,
 gadget, tool, or any other SOLUTION you may need.</p>  
  <div class="row">
    <h3 class="text-center wowload fadeInUp">Call Center Scripting</h3> 
		<ul class="tab callscript">
		  <li><a  id="UCCElink" class="tablinks" onclick="openTab(event, 'UCCE')">UCCE/PCCE</a></li>
		  <li><a id="UCCXlink" class="tablinks" onclick="openTab(event, 'UCCX')">UCCX</a></li>
		  <li><a  id="CVPlink" class="tablinks" onclick="openTab(event, 'CVP')">CVP</a></li>
		   <li><a  id="IPIVRlink" class="tablinks" onclick="openTab(event, 'IPIVR')">IPIVR</a></li>
		</ul>

		<div id="UCCE" class="tabcontent">
		<h3>UCCE/PCCE</h3>
		  <div class="col-sm-8 fadeInLeft">
		  
		  <p>
		    Our developers are certified and experienced in UCCE/PCCE call scripting. We can develop and modify existing routing and admin scripts to 
		   further enhance your call flow. We also provide troubleshooting and assistance to any problems found within your UCCE or PCCE system.
		   <br><br>
		   For more information about custom call scripting see our <a onclick="openTab(event, 'CVP', true);" >CVP</a> and <a onclick="openTab(event, 'IPIVR', true);">IPIVR</a> pages.
		   <br><br>
		   <a href="<?php echo $url ?>contact.php">Contact</a> us with your UCCE/PCCE request and we'll provide your custom solution.
		 
		  </p>
		  </div>
		  <div class="col-sm-4 fadeInRight">
		    <br>
			<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/routescript.gif">
		  </div>
		  
		</div>

		<div id="UCCX" class="tabcontent">
		  <h3>UCCX</h3>
		  <div class="col-sm-8 fadeInLeft">
		
		   <p>
		   	We have extensive experience in UCCX call scripting. Our UCCX scripting solutions include development and modification of existing call scripts
		   	as well as troubleshooting and assistance to any problems within your UCCX system.
		   	We can manage uploaded files, modify queue triggers, associate scripts to queues, and make any requested change to your system.
		   	<br><br>
		   	For more information about custom call scripting see our <a onclick="openTab(event, 'CVP', true);">CVP</a> page.
		   	<br><br>
		   	<a href="<?php echo $url ?>contact.php">Contact</a> us with your UCCX request and we'll provide your custom solution.
		   </p>
		   </div>
		   <div class="col-sm-4 fadeInRight">
		   	<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/uccxscript.jpg">
		   </div> 
		</div>

		<div id="CVP" class="tabcontent">
		  <h3>CVP</h3>
		  <div class="col-sm-8 fadeInLeft">
		
		    <p>
			  Our developers are highly skilled in CVP scripting. We can develop and modify existing call studio scripts at your request.
			  We also develop elements to perform customized actions within the call script.
			  Our elements have included operations such as datetime conversion and string manipulation as well as actions allowing audio files to be saved to a specified database and database query failover options. 

			  <br><br>
			  <a href="<?php echo $url ?>contact.php">Contact</a> us with your CVP request and we'll provide your custom solution.
		    </p>
		  </div>
		  <div class="col-sm-4 fadeInRight">
			<img class="img-responsive center-block img-features" src="<?php echo $url ?>images/cvpelements.png">
		  </div>
		</div>
		
		<div id="IPIVR" class="tabcontent">
		  <h3>IPIVR</h3>
		  <div class="col-sm-8 fadeInLeft">		
		  <p>
			  Our team has aquired extensive knowledge in IPIVR call scripting and will work with you to create scripts to your specifications.
			  We also provide troubleshooting and assistance to any IPIVR specific problems within the UCCE system.
			
			  <br><br>
			  For more information about custom call scripting see our <a onclick="openTab(event, 'CVP', true);">CVP</a> page.
			  <br><br>
			  <a href="<?php echo $url ?>contact.php">Contact</a> us with your IPIVR request and we'll provide your custom solution.
		  </p>
		  </div>
		  <div class="col-sm-4 fadeInRight">
		      <img class="img-responsive center-block img-features" src="<?php echo $url ?>images/ipivrscript.jpg">
		  </div>
		</div>

  </div>

  <br><br>
</div>
<script>
 $(document).ready(function() {
	//Display current script as passed by GET token
	document.getElementById('<?php echo $scriptType;?>').style.display = "block";	
    document.getElementById('<?php echo $scriptType;?>' + 'link').className += " active";

 });
</script>

<!-- #Circle Ends -->

<?php include "../footer.php"; ?>
<?php include "../javascript.php"; ?>
</body>
</html>