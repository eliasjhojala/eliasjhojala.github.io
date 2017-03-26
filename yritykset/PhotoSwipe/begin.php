<?php
  function showImage($image) {

    $desc = "";
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
            <img src="<?php echo $image; ?>"><br>
        </a>
        <?php echo $description; ?>
      </figure>

<?php
  }
?>


<?php function showImages($images) {?>
  <div class="my-gallery">
    <?php
      if(is_array($images)) {
        foreach ($images as $image) {
          if($image != "") { showImage($image); }
        }
      }
      else {
        $image = $images;
        showImage($image);
      }
    ?>
  </div>
<?php } ?>
