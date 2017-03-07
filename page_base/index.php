<?php
  $menuBarLinks = array (
    array("intro", "Etusivu"),
    array("imagesElement", "Laite"),
    array("bullets", "Miksi"),
    array("contact", "Haluan laitteen")
  );
  
  $teaserUrl = "assets/images/placeHolder.JPG";
?>

<html>

  <head>
    <?php include 'head.php'; ?>
  </head>

  <body>
    <?php
      include 'linkbar.php'; //Vähän content edittii
      include 'teaser.php'; //Vähän content edittii
      include 'sitecontent.php'; //Sisältö muuttuu erityisesti tässä!
      include 'bottombar.php'; //Tää pysyy aika samana
      include 'popup.php'; //Ei tarvitse muuttaa
    ?>
  </body>
  
</html>
