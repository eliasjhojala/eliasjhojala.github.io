<?php
  $photoSwipePath = "PhotoSwipe/";
  $menuBarLinks = array (
    array("intro", "Etusivu"),
    array("imagesElement", "Laite", "info"),
    array("bullets", "Miksi", "format-list-bulleted"),
    array("contact", "Ota yhteyttä", "email")
  );

  $teaserUrl = "https://www.youtube.com/embed/1kLrc8al60Y?rel=0&amp;showinfo=0";
  $hideWhiteBar = true;
?>

<html>

  <head>
    <?php include 'head.php'; ?>
  </head>

  <body>
    <?php
      include $photoSwipePath.'begin.php';
      include 'linkbar_subpage.php'; //Vähän content edittii?>
      <a id="whiteBar"  class="material-icons" href="#intro"><span>keyboard_arrow_down</span></a><?php
      include 'contentText.php'; //Tekstit
      include 'sitecontent_packets.php'; //Sisältö muuttuu erityisesti tässä!
      include 'bottombar_subpage.php'; //Tää pysyy aika samana
      include 'popup.php'; //Ei tarvitse muuttaa
      include $photoSwipePath.'end.php';
    ?>
  </body>
</html>
