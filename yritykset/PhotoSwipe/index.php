<div id="images" class="my-gallery">
     <?php
        $dirname = "../media/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
          showImage($image);
       }
     ?>
</div>
