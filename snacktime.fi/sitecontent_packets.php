<?php
  $commonBullets1 = "
  Pussi-, snack-, makeat ja suolaiset tuotteet, sekä juomat
  Kolikko-, kortti- ja matkapuhelinmaksu
  Ilmainen laitehuolto Snacktimeltä
  Ilmainen poishaku
  Reaaliaikainen etävalvonta";
  
  $basicBullets1 = "
  Asennus 129€
  Sopimus 24kk
  rtisanominen 3kk
  Personointi 99€";
  
  $premiumBullets1 = "
  Asennus 0€
  Sopimus 12kk
  Irtisanominen 1kk
  Personointi 0€
  Ruokaisat tuotteet
  Tuoteinfotaulu";
?>

<?php
  $commonBullets = explode("\n", $commonBullets1);
  $basicBullets = explode("\n", $basicBullets1);
  $premiumBullets = explode("\n", $premiumBullets1);
?>

<div id="siteContent">

  <div class="contentElement" id="yritysPaketit"> <!-- Paketit yrityksille -->
    <h2>Paketit yrityksille</h2>
  </div>
  
  <div class="contentElement palveluImages" id="imagesElement">
    <?php showImages($images2); ?>
  </div>
  

  <div class="contentElement palveluBulletsLarge">
    <h2 style="font-size: 40px; text-align: left;">Molempiin paketteihin kuuluvat</h2>
    <div class="content" id="bullets">
      <ul>
        <?php foreach ($commonBullets as $bullet)
                if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
      </ul>
    </div>
  </div>
  
  <div class="contentElement palveluBullets">
    <div id="bullets" class="content"><ul>
      <?php foreach ($basicBullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
    <div id="bullets" class="content"><ul>
      <?php foreach ($premiumBullets as $bullet)
              if($bullet != "") { echo"<li>".$bullet."</li>"; } ?>
    </ul></div>
  </div>
   
   <div class="contentElement" id="contact">
     <h2>Ota yhteyttä</h2>
     <div class="content"><?php include 'email.html'; ?></div>
   </div>
   

  
</div>
