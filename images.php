<?php include 'imageSources.php'; ?>

<?php

  for($id = 0; $id < $numberOfImages; $id++) {
    
    $imageData = $images[$id];
    
  ?>
    
    <div class="imageBlock">
      <a
        class="open-popup" href
        data-popup-url="imagePopup.php?id=<?php echo $id ?>"
        data-title="<?php echo $imageData[0] ?>">
        
        <h3><?php echo $imageData[0] ?> </h3>
        <img src="<?php echo $imageData[1] ?>.JPG">
        <div class="imageText"><?php echo $imageData[2] ?></div>
      </a>
    </div>
    
    <?php
  }

?>
