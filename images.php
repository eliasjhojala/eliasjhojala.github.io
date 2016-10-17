<?php

$numberOfImages = 4;
$images = array(
  array("otsikko1", "/assets/images/teaser_placeholder.JPG", "teksti"),
  array("otsikko2", "/assets/images/teaser_placeholder.JPG", "teksti")
);

?>


<?php

foreach($images as $imageData) {
  ?>
  
  <div class="imageBlock">
    <h3><?php echo $imageData[0] ?> </h3>
    <img src="<?php echo $imageData[1] ?>">
    <div class="imageText"><?php echo $imageData[2] ?></div>
  </div>
  
  <?php
}

?>
