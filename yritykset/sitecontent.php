<div id="siteContent">
  
  <div class="contentElement" id="intro">
    <h2><?php echo $shortDescriptionSubject; ?></h2>
    <div class="content"><?php echo $shortDescription; ?></div>
  </div>

  <div class="contentElement" id="imagesElement">
    <?php showImages($images); ?>
  </div>

  <div class="contentElement">
    <div id="bullets" class="content"><ul>
      <?php foreach ($bullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
  </div>

  <div class="contentElement" id="mainTextBox">
    <h2><?php echo $longContentSubject; ?></h2>
    <div class="content"><?php echo $longContent; ?></div>
  </div>

  <div class="contentElement" id="referenssit">
    <h2>Referenssit</h2>
    <div id="references" class="content my-gallery">
  <?php for ($i = 0; $i < sizeof($referenceTexts); $i++) {
          showImage($referenceImages[$i], $referenceTexts[$i]); } ?>
    </div>
  </div>

  <div class="contentElement" id="contact">
    <h2>Ota yhteyttä</h2>
    <div class="content"><?php include 'email.html'; ?></div>
  </div>
  
</div>
