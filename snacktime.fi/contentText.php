<?php

$imageList1 = "
assets/images/placeHolder_2.JPG
";

$imageList2 = "
assets/images/placeHolder_2.JPG
assets/images/placeHolder_2.JPG
";

$imageList3 = "
assets/images/img_for_box1.jpg
assets/images/img_for_box2.jpg
";

$imageList4 = "
assets/images/placeHolder_2.JPG
assets/images/placeHolder_2.JPG
";

$bulletList = "
esgssdfdsfdsfg  löijk h ukhkjlhlkjdsg
sgsssfdsfdsfdgdg egs g  sdgdsg  edsgds
dfgdfdsfdsfdsg sglösjgksdg dfgdgdf gdsg
fdgfddsfd fdgdsf dsgds  ölsdgdg dsg
sd fdsffsfsdsdf gdsg dg dgdgds hsf
";

$shortDescriptionSubject = "SnackTime - Pala Parempaa Päivää";

$shortDescription = "
Snacktime välipala-automaatilla voit lisätä yrityksesi viihtyvyyttä ja halutessasi hankkia yrityksellesi myös lisätienestiä!<br><br>
Automaatti on pienikokoinen ja siihen on mahdollista saada lähes mitä vaan lämpimässä säilyviä tuotteita.
Meiltä löydät varmasti itsellesi sopivan paketin, tarjoamme palveluita sekä yrityksille ja yhdistyksille, että kouluille ja julkishallinnolle.
<br><br>
Alempaa voit tutustua tarkemmin automaattiin ja tuotteisiin ja valita sitten parhaiten sinun tarpeitasi vastaavan organisaation.
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

$longContentSubject2 = "Tuotteet";

$longContent2 = "
Tuotteet sitä, tuotteet tätä ja tuotteet vielä totakin
<br><br>
Suklaatia löytyy ja protskupatukkaa, terveellistäki on valikoimassa!
<br><br>
Kaikille siis kaikkea!
";

$longContentSubject3 = "Vuokralaite";

$longContent3 = "
Vuokralaite on hyvä ja halpa ja ties mitä
<br><br>
rgrdgsgdsgdgdg dähöodlfh lkihj aiou gdkhkdzb
fdfdhfhfghgfhfhfghdlrglshjnarkldgzjdheh
<br><br>
sdhdsgjd jigl ödhihdgu dg  hdfh
d dfsh h dh sdlkö jd gjnoön fdkh
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
assets/images/placeHolder_2.JPG;
assets/images/placeHolder_2.JPG;
assets/images/placeHolder_2.JPG;
assets/images/placeHolder_2.JPG
";


$referenceTexts = explode(";\n", $referenceTextList);
$referenceImages = explode(";\n", $referenceImageList);
$referenceImages = array_map(trim, $referenceImages);
$images1 = explode("\n", $imageList1);
$images1 = array_map(trim, $images1);
$images2 = explode("\n", $imageList2);
$images2 = array_map(trim, $images2);
$images3 = explode("\n", $imageList3);
$images3 = array_map(trim, $images3);
$images4 = explode("\n", $imageList4);
$images4 = array_map(trim, $images4);
$bullets = explode("\n", $bulletList);


$images2 = array(
  
  array("assets/images/wide.png",
  "<h2>Basic-paketti 19,90€/kk</h2>
  <br>
  Snacktime Wide palvelee kattavasti asiakkaita, työntekijöitä ja vieraita tarjoamalla heille laadukkaan välipalapalvelun.
  Palvelu sopii yrityksille, jotka haluavat laajemman tuotevalikoiman tai useamman maksutavan.
  Kaikki palvelumaksut tässä palvelupaketissa 0 euroa!", ""),
  
  array("assets/images/deal.png",
  "<h2>Premium-paketti 69,90€/kk</h2>
  <br>
  Snacktime Deal sisältää kattavan valikoiman laadukkaita perustuotteita, jotka voit hinnoitella oman mielesi mukaan.
  Tämä palvelu sopii yrityksille, joiden painopiste on korostaa henkilökunnan työviihtyvyyttä.
  Laite personoidaan asiakkaan yritysilmeen mukaisesti. Huoltopalveluiden vasteaikatakuu 24 h!", "")
  
);

?>
