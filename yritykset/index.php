<?php
  $photoSwipePath = "PhotoSwipe/";
  $menuBarLinks = array (
    array("intro", "Etusivu"),
    array("imagesElement", "Laite", "info"),
    array("bullets", "Miksi", "format-list-bulleted"),
    array("contact", "Ota yhteyttä", "email")
  );

  $teaserUrl = "assets/images/header.png";
  $hideWhiteBar = true;
?>

<html>

  <head>
    <?php include 'head.php'; ?>
  </head>

  <body>
    <?php
      include $photoSwipePath.'begin.php';
      include 'linkbar.php'; //Vähän content edittii
      include 'teaser.php'; //Vähän content edittii
      include 'contentText.php'; //Tekstit
      include 'sitecontent.php'; //Sisältö muuttuu erityisesti tässä!
      include 'bottombar.php'; //Tää pysyy aika samana
      include 'popup.php'; //Ei tarvitse muuttaa
      include $photoSwipePath.'end.php';
    ?>
  </body>
</html>
