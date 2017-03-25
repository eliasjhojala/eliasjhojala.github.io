<?php include 'begin.php' ?>

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet prefetch' href='photoSwipe.css'>
  </head>

  <body>

    <div id="images" class="my-gallery">

     <?php

        $dirname = "../media/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
          showImage($image);
       }
     ?>


    </div>

    <?php include 'end.php' ?>





  </body>
</html>
