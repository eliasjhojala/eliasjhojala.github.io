<?php
  $js = array("jquery", "index", "app", "analytics");
  $touchIconSizes = array(76, 120, 152, 250);
  $iconSizes = array(16, 32, 96, 192);
?>

<title>Snacktime</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#F44336">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:image" content="assets/icons/icon-bg.png">

<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel='stylesheet prefetch' href='<?php echo $photoSwipePath ?>photoSwipe.css'>

<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
<link rel="apple-touch-startup-image" href="assets/images/logo.png">
<link rel="apple-touch-icon" href="assets/icons/icon-60.png">
<link rel="icon" type="image/png" href="assets/icon-60.png">

<?php
  foreach ($js as $j) {
    ?><script src="assets/js/<?php echo $j.".js"; ?>"></script>
<?php } ?>
<?php
foreach ($touchIconSizes as $s) {
  ?><link rel="apple-touch-icon" sizes="<?php echo $s."x".$s; ?>" href="assets/icons/icon-<?php echo $s; ?>.png">
<?php }
foreach ($iconSizes as $s) {
  ?><link rel="icon" sizes="<?php echo $s."x".$s; ?>" type="image/png" href="assets/icons/icon-<?php echo $s; ?>.png">
<?php } ?>

<base target="_blank">
