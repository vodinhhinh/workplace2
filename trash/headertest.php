<html lang="en">
<head>
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>">
<?php
// If canonical URL is specified, include canonical link element
if($pageCanonical)
{
echo '<link rel="canonical" href="' . $pageCanonical . '">';
}
// If meta robots content is specified, include robots meta tag
if($pageRobots)
{
echo '<meta name="robots" content="' . $pageRobots . '">';
}
?>

<link rel="stylesheet" href="style.css">
</head>
<body>
