
var g = {
  isSp:function(){ return ( g.winW() <= g.point )? true : false ; },// SP or PC
  winW:function(){ return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; },
  winH:function(){ return jQuery( window ).height(); },
  winT:function(){ return jQuery( window ).scrollTop(); },
  point: 767
}

var _ua = (function(u) {
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
    || u.indexOf("ipad") != -1
    || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
    || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
    || u.indexOf("kindle") != -1
    || u.indexOf("silk") != -1
    || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
    || u.indexOf("iphone") != -1
    || u.indexOf("ipod") != -1
    || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
    || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
    || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

var Common = function() {};
var About = function() {};

Common = {

  //スムーススクロール
  smoothScroll : function() {

    jQuery('a[href^="#"]').click(function() {
      var _this = jQuery(this);
      jQuery('.js-navigation').removeClass('is-opened');
      if(g.isSp()) {
        var navH = 55;
      } else {
        var navH = 80;
      }
      jQuery('html,body').animate({ scrollTop:
      jQuery(jQuery(this).attr('href')).offset().top - navH }, 500,'easeInCubic');
      if(jQuery(this).hasClass('c-about__nav__link')){
        window.location.hash = _this.attr('href');
        About.navCurrent()
      }
      return false;
    });

  },

  inView : function() {
    jQuery('.js-fadeInAnimate').on('inview', function(event, isInView) {　　　　　
      if (isInView) {
        // element is now visible in the viewport
        jQuery(this).addClass('js-fadeInAnimateOn');
      } else {
        // element has gone out of viewport
      }
    });
  },

  headerBg : function () {
    var _this = jQuery('.js-header');

    jQuery(window).on('load resize scroll', function () {
      if(jQuery(window).scrollTop() > jQuery('.js-hero').innerHeight()) {
        _this.addClass('is-bgActive');
      } else {
        _this.removeClass('is-bgActive');
      }
    });
  },

  drawerMenu : function () {
    jQuery(window).on('load resize', function () {
      var btn = jQuery('.js-navBtn');
      var nav = jQuery('.js-navigation');

      btn.on('click', function () {
        nav.toggleClass('is-opened');
      });

    });
  },
  rowheight : function (elem) {
    elem.matchHeight()
  }

}

About = {
  navCurrent : function () {
    var hash = window.location.hash
    if(hash !== '') {
      jQuery('.js-aboutNavLink').parent().removeClass('is-current');
      jQuery('.js-aboutNavLink').parent().siblings().removeClass('is-current');
      jQuery('[href="' + hash + '"]').parent().addClass('is-current');
    }
  },

  currentScroll : function () {
    var hash = window.location.hash
    if(hash !== '') {
      jQuery('html,body').animate({
        scrollTop: jQuery(jQuery(hash)).offset().top - 80
      }, 500, 'easeInCubic');
    }
  },

  fixedNav : function () {
    var _this = jQuery('.js-aboutNav--fixed');

    jQuery(window).on('scroll resize load', function () {
      var scroll = jQuery(window).scrollTop();
      var offset = jQuery('.js-affsetTarget').offset().top;
      var thisH = _this.height(); // 追従範囲
      var h = jQuery('.js-affsetTarget').height(); // 追従範囲
      var winH = jQuery(window).height();
      var offsetIntroduction = jQuery('#introduction').offset().top;
      var offsetBusiness = jQuery('#business').offset().top;
      var offsetCompensation = jQuery('#compensation').offset().top;

      if(scroll + thisH > h + offset - (90+80)){
        _this.removeClass('is-fixed');
        if(g.isSp()) {
          _this.css({'top': h - thisH - jQuery('.js-header').height() + 'px'});
        } else {
          _this.css({'top': h - thisH - jQuery('.js-header').height() + 'px'});
        }
      } else if(scroll + 80-48 > offset) {
        _this.css({'top': '90px'});
        _this.addClass('is-fixed');
      } else {
        _this.removeClass('is-fixed');
        _this.css({'top': '58px'});
      }

      // scroll時current
      if (scroll + winH / 2 > offsetCompensation) {
        jQuery('a[href="#compensation"]').parent().siblings().removeClass('is-current');
        jQuery('a[href="#compensation"]').parent().addClass('is-current');
      } else if(scroll + winH / 2 > offsetBusiness) {
        jQuery('a[href="#business"]').parent().siblings().removeClass('is-current');
        jQuery('a[href="#business"]').parent().addClass('is-current');
      }  else if(scroll + winH / 2 > offsetIntroduction) {
        jQuery('a[href="#introduction"]').parent().siblings().removeClass('is-current');
        jQuery('a[href="#introduction"]').parent().addClass('is-current');
      }


    });
  }
}


jQuery(function() {
  Common.smoothScroll();
  Common.inView();
  Common.headerBg();
  Common.drawerMenu();
  Common.rowheight(jQuery('.c-feature__desc'));
});

jQuery(window).on('load', function () {
  if(jQuery('body').hasClass('page-about')) {
    About.navCurrent();
    About.currentScroll();
    About.fixedNav();
  }
});


function initMap() {
  // Create a map object and specify the DOM element for display.
  var myLatlng = new google.maps.LatLng(35.713506,139.706515);

  map = new google.maps.Map(document.getElementById('js-mapWrap'), {
    center: myLatlng,
    zoom: 14,
    styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#c9c9c9"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      }
    ]
  });
  var marker = new google.maps.Marker({
    position: myLatlng,
    animation: google.maps.Animation.DROP,
    icon: '/wp-content/themes/lawyer_naota/assets/images/map_icon.png'
  });
  marker.setMap(map);
}

