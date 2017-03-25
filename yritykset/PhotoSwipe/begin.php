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
