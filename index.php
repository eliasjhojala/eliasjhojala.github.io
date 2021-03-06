<?php
  $photoSwipePath = "PhotoSwipe/";
  $menuBarLinks = array (
    array("intro", "Etusivu"),
    array("tuotteet", "Tuotteet"),
    array("prosessi", "Miten?"),
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
      include $photoSwipePath.'begin.php';
      include 'common/functions.php';
      include 'linkbar.php';
      include 'teaser.php';
      include 'contentText.php';
      include 'sitecontent.php';
      include 'bottombar.php';
      include 'popup.php';
      include $photoSwipePath.'end.php';
    ?>
  </body>

</html>
