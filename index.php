<html>

  <head>
    <title>Snacktime</title>
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
    
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link rel="apple-touch-startup-image" href="assets/images/logo.png">
    
    <link rel="apple-touch-icon" href="touch-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-152.png">
    <link rel="apple-touch-icon" sizes="250x250" href="touch-icon-250.png">
    
    <base target="_blank">
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-86297425-1', 'auto');
      ga('require', 'linkid');
      ga('send', 'pageview');

    </script>
    
  </head>
  
  <body>
    <div id="linkbar">
      
      <a href="#teaser">
        <img src="assets/images/logo.png" id="logo">
      </a>
      
      <div id="linkBarLinks">
        <a id="introLink" onClick=”ga('send', 'event', 'navbar', 'Intro', '2');” href="#intro" class="close-menubox">Etusivu</a>
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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Bm7LyfGE-tI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <a id="whiteBar"  class="material-icons" href="#intro"><span>keyboard_arrow_down</span></a>
    
    <div id="siteContent">
      
      <div class="contentElement" id="intro">
        <h2>Välipalaa koululle - helposti ja halvalla</h2>
        <div class="content">
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
        <a onClick=”ga('send', 'event', 'bottombar', 'email', '2');” href="mailto:elias@snacktime.fi">elias@snacktime.fi</a><br>
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
