<?php
  include 'imageSources.php';
  $id = $_GET["id"];
  $imageData = $images[$id];
?>

<div class="imagePopup">
  <img src="<?php echo $imageData[1] ?>.JPG">
  <div class="imageText"><?php echo $imageData[2] ?></div>
</div>
