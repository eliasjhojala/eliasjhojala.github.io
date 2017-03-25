<html>
  <head>
    <meta charset="UTF-8">
    <link rel='stylesheet prefetch' href='photoswipe.css'>
  </head>

  <body>

    <div id="images" class="my-gallery">

     <?php

        $dirname = $externalPath . "media/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
          showImage($image);
       }
     ?>

    </div>



  <?php include 'end.php' ?>

  </body>
</html>
