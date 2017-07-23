<div id="siteContent">
  
  <div class="contentElement" id="intro">
    <h2><?php echo $shortDescriptionSubject; ?></h2>
    <div class="content"><?php echo $shortDescription; ?></div>
  </div>
  
  <div class="contentElement" id="automaatit"> <!-- Automaatit -->
    <h2>Automaatit</h2>
  </div>
  <div class="contentElement" id="imagesElement">
    <?php showImages($images3); ?>
  </div>
  
  <div class="contentElement automaatitBullets">
    <div id="bullets" class="content"><ul>
      <?php foreach ($bullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
  </div>
  
  <div class="contentElement" id="kenelle"> <!-- Etsin laitetta ensisijaisesti:  -->
    <h2>Etsin laitetta ensisijaisesti:</h2>
  </div>
  
  
  <div class="buttonGrid">
    <a target="_self" class="button ripplelink" href="packets.php">Yritykselle</a>
    <a class="button ripplelink" href="http://automaattikouluun.fi">Oppilaitokseen</a>
    <a class="button ripplelink">Julkishallintoon</a>
    <a class="button ripplelink" href="#contact">Muualle</a>
  </div>
  
  
  <div class="contentElement" id="mainTextBox"> <!-- Tuotteet -->
    <h2><?php echo $longContentSubject2; ?></h2>
    <div class="content"><?php echo $longContent2; ?></div>
  </div>
  
  <div class="contentElement" id="imagesElement">
    <?php showImages($images4); ?>
  </div>
  
  
  <div class="contentElement" id="referenssit"> <!-- Referenssit -->
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
