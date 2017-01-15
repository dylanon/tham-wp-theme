jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */

  // Desktop hover events
  
  $("#front-page-performance, #front-page-thought").mouseenter(function(){
      $("#front-page-moutheyes").css("opacity", "1");
  });
  
  $("#front-page-performance, #front-page-thought").mouseleave(function(){
      $("#front-page-moutheyes").css("opacity", "0");
  });
  
  // Touch swipe events

  $("#front-page-rest").swipe({
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
    //This only fires when the user swipes left
    $("#front-page-performance h1").css("opacity", "1");
    $(".outer").css("width", "100%");
    $("#front-page-performance").css("right", "0");
  }
  });
  
  $("#front-page-performance").swipe({
  swipeRight:function(event, direction, distance, duration, fingerCount) {
    //This only fires when the user swipes right
    $("#front-page-performance").css("right", "-100%");
    setTimeout(function(){
      $(".outer").css("width", "0");
    }, 500);
    $("#front-page-performance h1").css("opacity", "0");
  }
  });

});
