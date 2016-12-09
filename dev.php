<?php
  $menuBarLinks = array (
    array("intro", "Etusivu"),
    array("prosessi", "Miten"),
    array("contact", "Ota yhteyttä")
  );
  
  $teaserUrl = "https://www.youtube.com/embed/1kLrc8al60Y?rel=0&amp;showinfo=0";
?>

<html>

  <head>
    <?php include 'head.php'; ?>
    
    <link rel='stylesheet prefetch' href='PhotoSwipe/css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='PhotoSwipe/default-skin/default-skin.css'>

        <link rel="stylesheet" href="PhotoSwipe/css/style.css">
  </head>

  <body>
    <?php
      include 'linkbar.php';
      include 'teaser.php';
      include 'DEVsitecontent.php';
      include 'bottombar.php';
      include 'popup.php';
    ?>
  </body>
  <script src='PhotoSwipe/js/photoswipe.js'></script>
  <script src='PhotoSwipe/js/photoswipe-ui-default.js'></script>
  <script src="PhotoSwipe/js/index.js"></script>

</html>
