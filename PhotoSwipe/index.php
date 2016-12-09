<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Multiple PhotoSwipe galleries on pagea</title>
  
  
  <link rel='stylesheet prefetch' href='css/photoswipe.css'>
  <link rel='stylesheet prefetch' href='default-skin/default-skin.css'>

      <link rel="stylesheet" href="css/style.css">
      
    

  
</head>

<body>

  <div id="images" class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
    
    <?php
    
      $dirname = $externalPath . "media/";
      $images = glob($dirname."*.jpg");

      foreach($images as $image) {
        
        $description = file_get_contents($image.".txt");
        list($width, $height) = getimagesize($image);
        $imgSize = $width . "x" . $height;
        
    ?>

        <figure class="imageBlock" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
          <a href="<?php echo $image; ?>" itemprop="contentUrl" data-size="<?php echo $imgSize; ?>">
              <img src="<?php echo $image; ?>" itemprop="thumbnail" alt="Image description" />
          </a>
          <figcaption itemprop="caption description"><?php echo $description; ?></figcaption>
        </figure>

    <?php } ?>
    
  </div>
  

<?php include 'photo_swipe_root.php' ?>

  <script src='js/photoswipe.js'></script>
  <script src='js/photoswipe-ui-default.js'></script>
  <script src="js/index.js"></script>

</body>
</html>
