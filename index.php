<?php
  $photoSwipePath = "PhotoSwipe/";
  $menuBarLinks = array (
    array("intro", "Etusivu"),
    array("tuotteet", "Tuotteet"),
    array("prosessi", "Miten"),
    array("contact", "Ota yhteyttä")
  );

  $teaserUrl = "https://www.youtube.com/embed/1kLrc8al60Y?rel=0&amp;showinfo=0";
?>

<html>

  <head>
    <?php include 'head.php'; ?>
  </head>

  <body>
    <?php
      include 'linkbar.php';
      include 'teaser.php';
      include 'sitecontent.php';
      include 'bottombar.php';
      include 'popup.php';
    ?>
  </body>

</html>
