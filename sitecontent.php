<div id="siteContent">

  <div class="contentElement" id="intro">
    <h2>Välipalaa koululle - helposti ja halvalla</h2>
    <div class="content">
      <div id="descAndBen">
        <div id="description">
          Välipala-automaatista voi ostaa terveellisiä välipaloja kun nälkä yllättää.
          Vaikka tuotteet eivät olekaan täysiä aterioita, pelastavat ne monesti kiireisen koulupäivän,
          sillä pienikin välipala auttaa tehokkaasti nälkään ja sen avulla jaksaa opiskella oppituntien loppuun asti!
        </div>
        
        <div id="benefits">
        
        <?php
          foreach($benefitBlocks as $block) { ?>
            <div class="block">
              <div class="bg"><img src="assets/images/benefits_icons/<?php echo $block[1]; ?>"></div>
              <h3><?php echo $block[0]; ?></h3>
            </div>
        <?php  } ?>
        
        </div>

      </div>
      <div id="moreDescription">
        <div class="block">
          <div class="text" id="profitText">
            <div id="profit">
              <div class="bg"><img src="assets/images/profit.png"></div>
            </div>
            Laitteen saa kouluihin veloituksetta, sillä SnackTime haluaa tukea suomalaista koulutusyhteiskuntaa.
            Tämän lisäksi oppilaskunnalle maksetaan provisio laitteen myynnin mukaan. Mitä enemmän laitetta siis käytetään,
            sitä enemmän oppilaskunta tienaa! SnackTime hoitaa myös laitteen huollon ja täytön - täysin ilmaiseksi.
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="contentElement" id="images">

  </div>


  <div class="contentElement" id="prosessi">
    <h2>Näin hankit välipala-automaatin koulullesi</h2>
    <div class="content">
      <div id="progress">
      <?php
        for($i = 0; $i < sizeof($progressBlocks); $i++) {
          $class = ifEven($i, "imageLeft", "imageRight");
          $title = $i + 1 . ". " . $progressBlocks[$i][0];
          $content = $progressBlocks[$i][1];
          $img = "assets/images/progress_icons/".$progressBlocks[$i][2];
      ?>
      
        <div class="block <?php echo $class; ?>">
          <div class="imageBg">
            <img src="<?php echo $img; ?>">
          </div>
          <div class="text">
            <h3><?php echo $title; ?></h3>
            <?php echo $content; ?>
          </div>
        </div>
          
      <?php } ?>
      </div>
    </div>
  </div>


  <div class="contentElement" id="contact">
    <h2>Ota yhteyttä</h2>
    <div class="content">
      Jos kiinnostuit, voit ottaa yhteyttä sähköpostilla, tekstarilla, tai somessa.
      Langan toisesta päästä löytyy lukion toisen vuosikurssin opiskelija,
      joten osaan kertoa nuorekkaalla näkökulmalla kaiken välipala-automaatin hankinnasta ja siihen liittyvästä.

      <p>
          Puh: 050 574 7762 (SMS, WhatsApp)<br>
          Mail: <a href="mailto:elias@snacktime.fi">elias@snacktime.fi</a><br>
          Instagram: @eliasojala1<br>
      </p>

    </div>
  </div>


</div>
