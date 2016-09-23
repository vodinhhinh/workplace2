<!DOCTYPE html>
<html lang="en">
<?php include "head_css.php"; 
//Set cookie for first time visit
if (!isset($_COOKIE['firsttime_index']))
{
   setcookie("firsttime_index", "no");  
}
?>
<body>
<?php include "alternate_multi_header.php"; ?>
<?php include "ucdevlanding_incl\alternate_section1_video.php"; ?>
<?php include "ucdevlanding_incl\section2_features.php"; ?>
<?php include "footer.php"; ?>
<?php include "javascript.php"; ?>
</body>
</html>