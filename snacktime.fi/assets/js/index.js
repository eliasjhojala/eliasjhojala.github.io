var linkBarAlpha;
var popup;
var menuBox;



function smallDisplay() {
  return $(window).width() < 888;
}




function swipeRight() {
  if($('.pswp').css("display") == "none") {
    $('#linkbar').toggleClass('open');
    $('#popupBackground').toggleClass('open');
  }
}
function swipeLeft() {
  if($('.pswp').css("display") == "none") {
    $('#linkbar').removeClass('open');
    $('#popupBackground').removeClass('open');
  }
}
function swipeUp() {
}
function swipeDown() {
}


$(function() {
  
  $('#form').html($('#form-template').html());
  
  $('#form').submit(function(e) {
    $.post( "email.php", $( "#form" ).serialize() )
    .done(function() {
      $('#form').html($('#form-template').html());
      $('#form .notification').remove();
      $('#form #submit').before($('#success-template').html());
      setTimeout(function() { $('#form .notification').addClass('hideSlow'); }, 3000);
    })
    .fail(function() {
      $('#form .notification').remove();
      $('#form #submit').before($('#error-template').html());
      setTimeout(function() { $('#form .notification').addClass('hideSlow'); }, 3000);
    });

    e.preventDefault();
    
  });


	var ink, d, x, y;
	$(".ripplelink").click(function(e){
    if($(this).find(".ink").length === 0){
        $(this).prepend("<span class='ink'></span>");
    }
         
    ink = $(this).find(".ink");
    ink.removeClass("animate");
     
    if(!ink.height() && !ink.width()){
        d = Math.max($(this).outerWidth(), $(this).outerHeight());
        ink.css({height: d, width: d});
    }
     
    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;
     
    ink.css({top: y+'px', left: x+'px'}).addClass("animate");
  });
  

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
    
    if($(window).scrollTop() > 20) {
      $('#contactFloatingButton').addClass('hidden');
    }
    if($(window).scrollTop() < 20) {
      $('#contactFloatingButton').removeClass('hidden');
    }
    
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
    $('#contact').addClass('highlight');
    setTimeout(function () {
      $('#contact').removeClass('highlight');
    }, 750);
  });


  function linkBarFlow() {
    if (smallDisplay()) {
      $('.black').css('padding-top', $('#linkbar').outerHeight() + "px");
    } else {
      $('.black').css('padding-top', '0');
    }
  }

  linkBarFlow();
  $(window).resize(function() {
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
