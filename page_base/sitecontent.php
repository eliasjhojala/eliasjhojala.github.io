<?php

  $bulletList = "
  a
  b
  c
  ";
  
  $shortDescriptionSubject = "otsikko";
  
  $shortDescription = "
  lorem ipsum
  ";
  
  $longContentSubject = "Otsikko";
  
  $longContent = "
  lorem ipsum dolor sit amet
  ";
  
    
  $referenceTextList = "
  Lorem ipsum;
  Dolor sit amet
  ";
  
  $referenceImageList = "
  assets/images/placeHolder_2.JPG;
  assets/images/placeHolder_2.JPG
  ";


  $referenceTexts = explode(";\n", $referenceTextList);
  $referenceImages = explode(";\n", $referenceImageList);
  $bullets = preg_split("/\\r\\n|\\r|\\n/", $bulletList);
      
?>


<div id="siteContent">
  
  <div class="contentElement" id="intro">
    <h2><?php echo $shortDescriptionSubject; ?></h2>
    <div class="content">
      <div id="descAndBen">
        <div id="description">
          <?php echo $shortDescription; ?>
        </div>
      </div>

    </div>
  </div>
  
  
  <div class="contentElement" id="imagesElement">
    <img src="assets/images/placeHolder_2.JPG">
    <img src="assets/images/placeHolder_2.JPG">
  </div>
  
  
  <div class="contentElement">
    <div id="bullets">
      <ul>
        <?php
          foreach ($bullets as $bullet)
            if($bullet != "") { echo"<li>".$bullet."</li>"; }
         ?>
      </ul>
    </div>
  </div>
  
  
  <div class="contentElement" id="mainTextBox">
    <h2><?php echo $longContentSubject; ?></h2>
    <div class="content">
      <?php echo $longContent; ?>
    </div>
  </div>
  
  
  <div class="contentElement" id="referenssit">
    <h2>Referenssit</h2>
    <div class="content">
      <div id="references">
        
        <?php
          for ($i = 0; $i < sizeof($referenceTexts); $i++) {
            $txt = $referenceTexts[$i];
            $img = $referenceImages[$i];
        ?>
            <div class="block imageLeft">
              <div class="imageBg"><img src="<?php echo $img; ?>"></div>
              <div class="text"><?php echo $txt; ?>
              </div>
            </div>
        <?php
          }
        ?>

      </div>
    </div>
  </div>

  
  <div class="contentElement" id="contact">
    <h2>Ota yhteyttä</h2>
    <div class="content">
      <?php include 'email.html' ?>
    </div>
  </div>
  
</div>
