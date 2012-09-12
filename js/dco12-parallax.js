(function ($) {
  
  function resizeMap() {
    if ($(window).width() / $(window).height() < 1.267 ) {
      scrollHeight = "150%";
      scrollWidth = "auto";
    }
    else {
      scrollHeight = "auto";
      scrollWidth = "100%";
    }

    $.scrollingParallax(Drupal.settings.pathToTheme + '/css/images/map-test-1.png', {
      bgHeight:scrollHeight,
      bgWidth:scrollWidth,
      enableVertical:true,
    });
  }

  $(document).ready(function () {
    resizeMap();
  });
  
  $(window).resize(function() {
    $("body > img").first().remove();
    resizeMap();
  });
  
})(jQuery);

