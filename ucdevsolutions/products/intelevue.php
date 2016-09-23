<!DOCTYPE html>
<html lang="en">
<?php include "../head_css.php"; 
//Set cookie for first time visit

if (!isset($_COOKIE['firsttime_intelevue']))
{
   setcookie("firsttime_intelevue", "no");  
}


?>
<body>
<?php include "../alternate_multi_header.php"; ?>


<?php include "../intelevue_sections/alternate_section1_video.php"; ?>
<?php include "../intelevue_sections/section2_features.php"; ?>
<?php include "../intelevue_sections/section3_demos.php"; ?>





<?php include "../footer.php"; ?>
<?php include "../javascript.php"; ?>
</body>
</html>