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
Ensimmäinen oikea referenssiteksti tähän.;
Asiakkaamme saavat lisäarvoa kun automaatti hoitaa iltamyynnin, joten jotain ostettavaa on aina tarjolla.
Vuokralaitepaikka, yritys y, Tiina Titityy, esimies.;
Laitteen vuokraaminen on vapauttanut resursseja varsinaiseen myyntityöhön.
Vuokralaitepaikka, yritys x, Pertti Kettunen, yrittäjä.;
Laitteen vuokraaminen on vapauttanut resursseja varsinaiseen myyntityöhön.
Vuokralaitepaikka, yritys x, Pertti Kettunen, yrittäjä.
";

$referenceImageList = "
assets/images/references/img1.jpg;
assets/images/placeHolder_2.JPG;
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
