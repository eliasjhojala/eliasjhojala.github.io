<?php
  $photoSwipePath = "PhotoSwipe/";
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
  </head>

  <body>
    <?php
      include $photoSwipePath.'begin.php';
      include 'linkbar.php';
      include 'teaser.php';
      include 'DEVsitecontent.php';
      include 'bottombar.php';
      include 'popup.php';
      include $photoSwipePath.'end.php';
    ?>
  </body>
</html>
