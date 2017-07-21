<?php
  function showImage($image, $desc = null, $class = null) {

    $description = "<figcaption>".$desc."</figcaption>";
    list($width, $height) = getimagesize($image);
    if($width < 500 && $height < 500) {
      $width = $width * 500;
      $height = $height * 500;
    }
    $imgSize = $width . "x" . $height;

?>

      <figure class="imageBlock">
        <a href="<?php echo $image; ?>" data-size="<?php echo $imgSize; ?>">
            <img src="<?php echo $image; ?>">
            <?php if($desc) { ?><div class="desc"><?php echo $desc; ?></div><?php } ?>
        </a>
        <?php if($desc) { echo $description; } ?>
      </figure>

<?php
  }
?>


<?php function showImages($images) {?>
  <div class="my-gallery">
    <?php
      if(is_array($images)) {
        foreach ($images as $image) {
          if(is_array($image)) {
            showImage($image[0], $image[1], $image[2]);
          }
          else {
            if($image != "") { showImage($image); }
          }
        }
      }
      else {
        $image = $images;
        showImage($image);
      }
    ?>
  </div>
<?php } ?>
