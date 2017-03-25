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
    
    

  <?php include 'photo_swipe_root.php' ?>

  </body>
</html>


<?php
  function showImage($image) {
    
    $desc = file_get_contents($image.".txt");
    $description = "<figcaption>".$desc."</figcaption>";
    list($width, $height) = getimagesize($image);
    $imgSize = $width . "x" . $height;
    
?>

      <figure class="imageBlock">
        <a href="<?php echo $image; ?>" data-size="<?php echo $imgSize; ?>">
            <img src="<?php echo $image; ?>"><br>
            <span class="desc"><?php echo substr($desc, 0, 20); ?>...</span>
        </a>
        <?php echo $description; ?>
      </figure>
      
<?php
  }
?>
