<?php include 'begin.php' ?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel='stylesheet prefetch' href='photoSwipe.css'>
  </head>
  <body>
    <div id="images">
       <?php
          $dirname = "../media/";
          $images = glob($dirname."*.jpg");
          showImages($images);
       ?>
    </div>
    <?php include 'end.php' ?>
  </body>
</html>
