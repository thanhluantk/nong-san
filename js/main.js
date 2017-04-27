(function( document, $ ){
 'use strict';

 window.Starter = window.Starter || {};

 var Extra = {
  initExtra: function() {
   this.getSlick();
  },

  // Slick slider
  getSlick: function() {
   $('[data-init="slick"]').each(function (){
    var el = $(this);

    var breakpointsWidth = {tn: 319, xs: 479, ss: 519, sm: 767, md: 991, lg: 1199};

    var slickDefault = {
     // fade: true,
     infinite: true,
     autoplay: true,
     pauseOnHover: true,
     speed: 1000,
     adaptiveHeight: true,

     slidesToShow: 2,
     slidesToScroll: 2,

     mobileFirst: true
    };

    // Merge settings.
    // console.log( el.data() );
    var settings = $.extend(slickDefault, el.data());

    delete settings.init;

    // Build breakpoints.
    if (settings.breakpoints) {
     var _responsive = [];
     var _breakpoints = settings.breakpoints;

     var buildBreakpoints = function (key, show, scroll) {
      _responsive.push({
       breakpoint: breakpointsWidth[key],
       settings: {
        slidesToShow: parseInt(show),
        slidesToScroll: 1
       }
      });
     };

     if (typeof _breakpoints === "object") {
      $.each(_breakpoints, buildBreakpoints);
     }

     delete settings.breakpoints;
     settings.responsive = _responsive;
    };
    el.slick(settings);
    });

  },

 };

 $(document).ready(function(){
  // Extend Starter method.
  $.extend(true, Starter, Extra);

  // Run.
  Starter.initExtra();
 }); 
})( document, jQuery );


