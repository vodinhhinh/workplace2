<?php include "intelevue_incl/Mobile_Detect.php"; ?>
<?php
//Set cookie for first time visit
if (!isset($_COOKIE['firsttime_index']))
{
   setcookie("firsttime_index", "no");  
}
if (!isset($_COOKIE['firsttime_intelevue']))
{
   setcookie("firsttime_intelevue", "no");  
}


// find out http or https
$protocol  = "";
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
	$protocol = "https://"; } 
else { 
	$protocol = "http://"; 
}
// find out the domain:
$domain = $_SERVER['HTTP_HOST'];
// find out the path to the current file:
$path = $_SERVER['SCRIPT_NAME'];
// find out the root folder:
$home = basename(__DIR__);
// find out the QueryString:
$queryString = $_SERVER['QUERY_STRING'];
// put it all together:

$rootfolder = strstr($path, $home, true);
$url = $protocol."".$domain.$rootfolder.$home."/";
?>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>UC Dev Solutions</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo $url ?>assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo $url ?>assets/animate/animate.css" />
<link rel="stylesheet" href="<?php echo $url ?>assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?php echo $url ?>assets/gallery/blueimp-gallery.min.css">

<!-- youtubegallerywall -->
<link rel="stylesheet" href="<?php echo $url ?>assets/youtubegallerywall/youtubegallerywallredo.css">

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo $url ?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo $url ?>images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="<?php echo $url ?>assets/style.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>