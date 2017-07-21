<div id="siteContent">
  
  <div class="contentElement" id="intro">
    <h2><?php echo $shortDescriptionSubject; ?></h2>
    <div class="content"><?php echo $shortDescription; ?></div>
  </div>
  
  <div class="contentElement" id="imagesElement">
    <?php showImages($images2); ?>
  </div>

  <div class="contentElement" style="display: flex; justify-content: space-between; flex-wrap: wrap; background: none; box-shadow: none; font-size: 20px; padding: 0px;">
    <div id="bullets" class="content" style="display: block; width: 45%; background: white; padding: 1.5vw; margin: 0; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);"><ul style="padding: 30px;">
      <?php foreach ($bullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
    <div id="bullets" class="content" style="display: block; width: 45%; background: white; padding: 1.5vw; margin: 0; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);"><ul style="padding: 30px;">
      <?php foreach ($bullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
  </div>
  
  <div class="contentElement" id="referenssit">
    <h2>Referenssit</h2>
    <div id="references" class="content my-gallery">
  <?php for ($i = 0; $i < sizeof($referenceTexts); $i++) {
          showImage($referenceImages[$i], $referenceTexts[$i]); } ?>
    </div>
  </div>
  
  <div class="contentElement">
    <h2>Automaatit</h2>
  </div>
  <div class="contentElement" id="imagesElement">
    <?php showImages($images3); ?>
  </div>
  
  <div class="contentElement" style="width: 50%; margin-left: auto; margin-right: auto;">
    <div id="bullets" class="content"><ul>
      <?php foreach ($bullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
  </div>
  
  
  <div class="contentElement" id="mainTextBox">
    <h2><?php echo $longContentSubject2; ?></h2>
    <div class="content"><?php echo $longContent2; ?></div>
  </div>
  
  <div class="contentElement" id="imagesElement">
    <?php showImages($images3); ?>
  </div>
  
  <div class="contentElement" id="mainTextBox">
    <h2><?php echo $longContentSubject3; ?></h2>
    <div class="content"><?php echo $longContent3; ?></div>
  </div>

  <div class="contentElement" id="contact">
    <h2>Ota yhteyttä</h2>
    <div class="content"><?php include 'email.html'; ?></div>
  </div>
  
</div>
