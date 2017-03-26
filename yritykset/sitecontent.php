<?php

$imageList = "
assets/images/placeHolder_2.JPG
assets/images/placeHolder_2.JPG
";

$bulletList = "
Pienikokoinen, 66x180x23 (LxKxS cm)
Hyväksyy kaikki eurokolikot, 5snt - 2€
Mobiili- ja luottokorttimaksu
Helppo asennus ja käyttöönotto
Vapaa hinnoittelu
Etävalvonta ja kattava raportointi
Asiakas voi ostaa myytävät tuotte itse mistä haluaa
Myös tuotetoimitukset lisäpalveluna
Yksi hinta, kaikki palvelut";

$shortDescriptionSubject = "Yrityksen lisämyynnin uusi ulottuvuus";

$shortDescription = "
Olemme tuoneet markkinoille uuden pienikokoisen myyntiautomaatin
jolla jokainen yritys voi lisätä myyntiä helposti.
Varsinkin silloin kun henkilökuntaa ei ole saatavissa.
";

$longContentSubject = "Vuokra-automaatti, miksi?";

$longContent = "
Snacktime on tuonut markkinoille uuden mullistavan myyntiautomaatin. Automaatti on suunniteltu suoraan yrityksille,
joilla on halua lisätä myyntiä aikana jolloin se muutoin ei ole mahdollista. Lisämyynnin saaminen automaatin
kautta ei sido henkilökuntaa vaan vapauttaa sitä yrityksessä oleellisempana ja tuottavampaa työhön.

<br><br>

Esim. Kuntosaleilla lisämyynnin saaminen kannattavasti silloin kun henkilökuntaa ei ole on ollut haastavaa.
Nyt tämä on voitu toteuttaa uuden mallisen myyntiautomaatin kanssa. Laite täytetään esim.
Aamulla kun henkilökunta saapuu työhön ja palveluja käyttävät asiakkaat voidaan ohjata myyjän sijaan
automaatille ostamaan haluamansa tuotteen. Myyjän aika vapautuu lisämyynnin tekemiseen ja jonotus vähenee.

<br><br>

Yritys täyttää automaatin juuri niillä tuotteilla kuin haluaa ja saa tietenkin kaiken myyntitulon itselleen.
Yritys tekee vain yhden sopimuksen SnackTimen kanssa ja saa samalla mobiilimaksu ja luottokorttisopimukset.

<br><br>

Voimme tarjota yritykselle myös kattavan tuotetoimituspalvelun jolloin yritys tilaa laitteessa myytävät tuotteet meiltä,
tukkuhinnoin, jolloin edes uusien tuotteiden tilaamisen vaivaa ei ole.
Asennamme laitteen ja koulutamme henkilökunnan käyttämään sitä.
Vastaamme kaikesta laitteen toiminnasta pois lukien ilkivalta, jota vastaan meiltä saa myös vakuutuksen.
Ota rohkeasti yhteyttä niin kerromme lisää.
";


$referenceTextList = "
Laitteen vuokraaminen on vapauttanut resursseja varsinaiseen myyntityöhön.
Vuokralaitepaikka, yritys x, Pertti Kettunen, yrittäjä.;
Asiakkaamme saavat lisäarvoa kun automaatti hoitaa iltamyynnin, joten jotain ostettavaa on aina tarjolla.
Vuokralaitepaikka, yritys y, Tiina Titityy, esimies.
";

$referenceImageList = "
assets/images/placeHolder_2.JPG;
assets/images/placeHolder_2.JPG
";


$referenceTexts = explode(";\n", $referenceTextList);
$referenceImages = explode(";\n", $referenceImageList);
$referenceImages = array_map(trim, $referenceImages);
$images = explode("\n", $imageList);
$images = array_map(trim, $images);
$bullets = explode("\n", $bulletList);

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
    <!-- <?php
      foreach ($images as $image)
        if($image != "") { echo "<img src='".$image."'>"; }
     ?> -->

    <?php   showImages($images); ?>


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
              <img src="<?php echo $img; ?>">
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
