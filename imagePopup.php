<?php

$id = $_GET["id"];

$images = array(
  array("otsikko1", "/assets/images/teaser_placeholder", "teksti"),
  array("otsikko2", "/assets/images/teaser_placeholder", "teksti")
);

$imageData = $images[$id];

?>

<div class="imagePopup">
  <img src="<?php echo $imageData[1] ?>.JPG">
  <div class="imageText"><?php echo $imageData[2] ?></div>
</div>

<?php

?>
