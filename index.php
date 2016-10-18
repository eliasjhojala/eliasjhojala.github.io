<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css">
    <link rel="stylesheet" type="text/css" href="assets/css/images.css">
    <link rel="stylesheet" type="text/css" href="assets/css/imagePopup.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/app.js"></script>
    
    <base target="_blank">
    
  </head>
  
  <body>
    <div id="linkbar">
      
      <a href="#teaser">
        <img src="assets/images/logo.png" id="logo">
      </a>
      
      <div id="linkBarLinks">
        <a href="#intro" class="close-menubox">Etusivu</a>
        <a href="#prosessi" class="close-menubox">Miten</a>
        <a href="#contact" class="close-menubox">Ota yhteyttä</a>
      </div>
      <span id="menuBoxIcon">
        <a href class="toggle-menubox material-icons"></a>
      </span>
    </div>
    
    
    
    <div id="teaser">
      <div id="blackBar"></div>
      <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/wItPWYRCRqI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <a id="whiteBar"  class="material-icons" href="#intro"><span>keyboard_arrow_down</span></a>
    
    <div id="siteContent">
      
      <div class="contentElement" id="intro">
        <h2>Välipalaa koululle - helposti ja halvalla</h2>
        <div class="content">
          <!-- Tässä voitaisiin sitten kertoa lyhykäisesti mutta ytimekkäästi koko jutun idea.
          Miten ja miksi tällainen välipalaautomaatti hankitaan ja ehkä mitä hyötyä siitä on ja toisaalta mitä haasteita.
          Miksi juuri Snacktimen välipala-automaatti on paras vaihtoehto ja miten sellaisen saa hankittua. -->
          <div id="descAndBen">
            <div id="description">
              Välipala-automaatista voi ostaa terveellisiä välipaloja milloin vain.
              Vaikka tuotteet eivät olekkaan kovin suuria, pelastavat ne monesti koulupäivän,
              sillä pienikin välipala auttaa useasti nälkään ja sen avulla jaksaa lisää.
            </div>
            
            <div id="benefits">
              <div class="block">
                <div class="bg"><img src="assets/images/benefits_icons/easy.png"></div>
                <h3>Helppoa</h3>
              </div>
              
              <div class="block">
                <div class="bg"><img src="assets/images/benefits_icons/cheap.png"></div>
                <h3>Halpaa</h3>
              </div>
              
              <div class="block">
                <div class="bg"><img src="assets/images/benefits_icons/ecological.png"></div>
                <h3>Ekologista</h3>
              </div>
            </div>
          
          </div>
          <div id="moreDescription">
            <div class="block">
              <div class="text" id="profitText">
                <div id="profit">
                  <div class="bg"><img src="assets/images/profit.png"></div>
                </div>
                Laitteen saa <b>pääkaupunkiseudulla</b> kouluihin ilmaiseksi. Tämän lisäksi oppilaskunnalle maksettaan
                provisio laitteen myynnin mukaan. Eli mitä enemmän laitetta käytettään sitä enemmän
                oppilaskunta tienaa. Alueet jonne voimme toimittaa ilmaisen automaatin näet <a href="suomenkartta.pdf">tästä</a>
              </div>
            </div>
            
            <div class="block">
              <div class="text" id="mapText">
                <div id="map">
                  <div class="bg"><img src="assets/images/finland.png"></div>
                </div>
                Muualla asuville meillä on hyviä uutisia!! Voimme tarjota automaatin vuokrasopimuksella mille
                paikkakunnalle tahansa. Vuokraaja (yleensä oppilaskunta) maksaa laitteesta vain vuokraan ja saa
                kaiken myyntituoton itselle. Vuokraajalle sisältyy vastuu täyttää ja huoltaa laite itse. Annamme teille
                täyden koulutuksen ja tuen laitteen käytössä. Kysy lisää

                <a class="open-popup" href
                  data-popup-url="contactForm.html"
                  data-title="Yhteydenotto">
                  tästä
                </a>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      
      <div class="contentElement" id="images">

      </div>
      
      
      <div class="contentElement" id="prosessi">
        <h2>Näin hankit välipalakoneen koulullesi</h2>
        <div class="content">
  
          <div id="progress">
            <div class="block imageLeft">
              
              <div class="imageBg">
                <img src="assets/images/progress_icons/contact.png">
              </div>
              
              <div class="text">
                <h3>1. Ota yhteyttä</h3>
                Laita viestiä ja kerro mitä haluaisit.
                Katsotaan yhdessä miten voimme auttaa.
              </div>
              
              
            </div>
            
            <div class="block imageRight">
              
              <div class="imageBg">
                <img src="assets/images/progress_icons/list.png">
              </div>
              
              <div class="text">
                <h3>2. Tuotteiden valinta</h3>
                Räätälöidään juuri tarpeisiinne sopiva kahdentoista tuotteen tuotepaketti valmiiksi.
                Valikoimasta löytyy paljon terveellisiä pieniä välipaloja, joita voit valita.
               Tuote-esitteen löydät <a href="esite.pdf">täältä</a>.
              </div>
              
              
            </div>
            
            <div class="block imageLeft">
              
              <div class="imageBg">
                <img src="assets/images/progress_icons/rector.png">
              </div>
              
              <div class="text">
                <h3>3. Rehtorin puheille</h3>
                Ollaan yhteydessä rehtoriin ja esitellään välipala-automaatti-idea,
                sekä siihen mahdollisesti tuleva tuotevalikoima. Jos ekalla kerralla
                ei tärppää, muutetaan valikoimaa ja yritetään uudestaan.

              </div>
              
              
            </div>
            
            <div class="block imageRight">
              
              <div class="imageBg">
                <img src="assets/images/progress_icons/pen.png">
              </div>
              
              <div class="text">
                <h3>4. Nimet paperiin</h3>
                Tehdään kirjallinen sopimus välipala-automaatista, jonka
                jälkeen Snacktime asentaa automaatin paikoilleen ja
                koko koulu voi alkaa nauttia terveellisistä välipaloista.
              </div>
              
              
            </div>
            
            
          </div>
          
        </div>
      </div>
      
      
      <div class="contentElement" id="contact">
        <h2>Ota yhteyttä</h2>
        <div class="content">
          Jos kiinnostuit voit ottaa yhteyttä sähköpostilla, tekstarilla, tai somessa.
           Langan toisesta päästä löytyy
          lukion toisen vuosikurssin opiskelija, joten osaan kertoa juuri lukio-ikäisen näkökulmasta
          välipala-automaatin hankinnasta ja kaikesta siihen liittyvästä.
          
          <p>
              Puh: 050 574 7762 (SMS, WhatsApp)<br>
              Mail: <a href="mailto:elias@snacktime.fi">elias@snacktime.fi</a><br>
              Instagram: @eliasojala1<br>
          </p>

        </div>
      </div>
      
      
    </div>
    
    <div id="bottomBar">
      <div id="contacts">
        <a style="font-size: 20px;" class="contactFormButton open-popup desktop"  href
          data-popup-url="contactForm.html"
          data-title="Yhteydenotto">
          Ota yhteyttä
        </a>
        
        <h2 style="font-size: 28px; margin-bottom: 5px;">Yhteystiedot</h2>
        <a href="mailto:elias@snacktime.fi">elias@snacktime.fi</a><br>
        050 574 7762
        <div class="mobile" id="beforeContactFormButton"></div>
        <a style="font-size: 20px;" class="contactFormButton open-popup mobile" href
          data-popup-url="contactForm.html"
          data-title="Yhteydenotto">
          Ota yhteyttä
        </a>
        
      </div>
    </div>
    
    
    <div id="popupBackground" class="close-popup"></div>
    <div id="popup">
      <h3 class="title">
        <span id="popup-title"></span>
        <a class="close-popup material-icons" href>close</a>
      </h3>
      <div id="popupContent"></div>
    </div>

    
  </body>
  
</html>
