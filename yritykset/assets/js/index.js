var linkBarAlpha;
var popup;
var menuBox;



function smallDisplay() {
  return $(window).width() < 888;
}

var contactFormButtonSize = 20;
var contactFormButtonFinalSize = 20;
var contactFormButtonPaddingDirection = 0;

function myMove() {
  var contactFormButtonFinalSize = (150-Math.sin(contactFormButtonSize/100)*100) / 10;
  if(contactFormButtonSize < 20) {
    contactFormButtonPaddingDirection = 1;
  }
  else if(contactFormButtonSize > 150) {
    contactFormButtonPaddingDirection = 0;
  }
  if(contactFormButtonPaddingDirection == 1) {
    contactFormButtonSize+=0.5;
  }
  else if(contactFormButtonPaddingDirection == 0) {
    contactFormButtonSize-=0.5;
  }
  $('.contactFormButton').css("padding", String(contactFormButtonFinalSize + 17));
  $('.contactFormButton').css("margin", String(-contactFormButtonFinalSize + 17));
  $('.contactFormButton').css("margin-left", String(-contactFormButtonFinalSize + 5));
}

  // setInterval(myMove, 1);


function swipeRight() {
  $('#linkbar').removeClass('open');
  $('#popupBackground').removeClass('open');
}
function swipeLeft() {
  $('#linkbar').toggleClass('open');
  $('#popupBackground').toggleClass('open');
}
function swipeUp() {
}
function swipeDown() {
}



$(function() {

  $('#popupBackground').on('click touchstart', function(e) {
    $('#linkbar').removeClass('open');
    $('#popupBackground').removeClass('open');
  });

  $('#siteContent').on('click touchstart', function(e) {
    $('#linkbar').removeClass('open');
    $('#popupBackground').removeClass('open');
  });

  $(window).on('scroll', function(e) {
    $('#linkbar').removeClass('open');
    $('#popupBackground').removeClass('open');
  });

  $('#linkBarLinks').on('swipe', function(e) {
    $('#linkbar').removeClass('open');
    $('#popupBackground').removeClass('open');
  });


  document.addEventListener('touchstart', handleTouchStart, false);
  document.addEventListener('touchmove', handleTouchMove, false);



  if ($(window).width() > 800) {
      $('#teaserVideo').html('<source src="/assets/media/teasers/teaser.mp4" type="video/mp4">');
  } else if ($(window).width() > 600) {
      $('#teaserVideo').html('<source src="/assets/media/teasers/teaser_LowRes.mp4" type="video/mp4">');
  } else {
      $('#teaserVideo').html('<source src="/assets/media/teasers/teaser_LowRes2.mp4" type="video/mp4">');
  }

  linkBarAlpha.init();
  popup.init();
  menuBox.init();


  $('.contactFormButton').on('click', function(e) {
    e.preventDefault();
    $('#contact .content').addClass('activateContactForm');
    setTimeout(function () {
      $('#contact .content').removeClass('activateContactForm');
    }, 4000);
  });


  $('video').bind("timeupdate", function() {
    if(this.currentTime >= 11) {
      this.pause();
      $(document).off('touchstart click');
      $('video, playbutton').off('touchstart click');
    }
  });

  function playVideo() {
    $('video').get(0).play();
  }
  $('video, playButton').click(playVideo);

  $(document).on('touchstart click', playVideo);

  $('video').on('play', function () {
    $('.playButton').css("display", "none")
  });
  function playButtonLocation() {
    var value = $('#teaser').height() / 2 - 35;
    if (smallDisplay()) value += $('#linkbar').outerHeight();
    $('.playButton').css("top", value + "px");
  }
  function linkBarFlow() {
    if (smallDisplay()) {
      $('.black').css('padding-top', $('#linkbar').outerHeight() + "px");
    } else {
      $('.black').css('padding-top', '0');
    }
  }

  playButtonLocation();
  linkBarFlow();
  $(window).resize(function() {
    playButtonLocation();
    linkBarFlow();
  });
});

var xDown = null; var yDown = null;

function handleTouchStart(evt) {
    xDown = evt.touches[0].clientX;
    yDown = evt.touches[0].clientY;
};

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) { return; }
    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;
    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if (Math.abs(xDiff) > Math.abs(yDiff*2)) {/*most significant*/
        if (xDiff > 0) { swipeLeft();  }
        else { swipeRight(); }
    } else if(Math.abs(yDiff) > Math.abs(xDiff*2)) {
        if (yDiff > 0) { swipeUp(); }
        else { swipeDown(); }
    }

    xDown = null; yDown = null;
};

function clamp(val, min, max) {
  return Math.min(Math.max(val, min), max);
}

linkBarAlpha = {
  linkbar: null,
  teaser: null,
  top: null,
  bottom: 1,
  originalColor: null,
  init: function() {
    var self = linkBarAlpha;
    self.linkbar = $('#linkbar');
    self.teaser = $('#teaser');
    self.top = self.linkbar.css("background-color");
    self.originalColor = self.top.replace(/rgba\((.+),.+\)/, '$1');
    self.top = Number(self.top.replace(/^.*,(.+)\)/,'$1'));
    $( window ).on('scroll resize', self.set);
    self.set();
  },
  set: function() {
    var self = linkBarAlpha;
    var color = "rgba(" + self.originalColor + ", " + self.getAlpha() + ")";
    self.linkbar.css("background-color", color);
  },
  getAlpha: function() {
    var self = linkBarAlpha;
    if (smallDisplay()) return 1;
    var end = self.teaser.height() - self.linkbar.outerHeight();
    var start = end * 0.6;
    var current = $(window).scrollTop();
    end -= start;
    current -= start;
    return clamp(current / end, 0, 1) * (self.bottom - self.top) + self.top;
  }
};

popup = {
  element: null,
  backgroundElement: null,
  contentElement: null,
  titleElement: null,
  init: function() {
    var self = popup;
    self.element = $('#popup');
    self.backgroundElement = $('#popupBackground');
    self.contentElement = $('#popupContent');
    self.titleElement = $('#popup-title');
    $('.open-popup').click(function(e) {
      e.preventDefault();
      var me = $(this);
      self.show(me.data('popup-url'), me.data('title'));
    });
    $('.close-popup').click(function(e) {
      e.preventDefault();
      self.hide();
    });
  },
  show: function(contentUrl, title) {
    var self = popup;
    self.contentElement.load(contentUrl);
    self.titleElement.html(title);
    self.backgroundElement.addClass('open');
    self.element.addClass('open');
    $(document).keyup(function (e) {
      if (e.keyCode == 27) self.hide(); // ESC
    });
  },
  hide: function() {
    var self = popup;
    self.backgroundElement.removeClass('open');
    self.element.removeClass('open');
    self.contentElement.html("");
    $(document).off('keyup');
  }

};

menuBox = {
  element: null,
  init: function() {
    var self = menuBox;
    self.element = $('#linkbar');
    $('.toggle-menubox').click(function(e) {
      e.preventDefault();
      self.toggle();
    });
    $('.close-menubox').click(function(e) {
      e.preventDefault();
      self.close();
    });
  },
  toggle: function() {
    var self = menuBox;
    self.element.toggleClass('open');
    $('#popupBackground').toggleClass('open');
  },
  close: function() {
    var self = menuBox;
    self.element.removeClass('open');
    $('#popupBackground').removeClass('open');
  }
};
