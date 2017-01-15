jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */

  // Desktop hover events
  
  $("#front-page-performance, #front-page-thought").mouseenter(function(){
    $("#front-page-moutheyes").css("opacity", "1");
  });
  
  $("#front-page-performance").mouseenter(function(){
    setTimeout(function(){
      $("#swipe-wrapper-performance a").attr("href", "/present");
    }, 200);
    $("#swipe-wrapper-thought a").attr("href", "#");
  });
  
  $("#front-page-thought").mouseenter(function(){
    setTimeout(function(){
      $("#swipe-wrapper-thought a").attr("href", "/blog");
    }, 200);
    $("#swipe-wrapper-performance a").attr("href", "#");
  });
  
  $("#front-page-performance, #front-page-thought").mouseleave(function(){
      $("#front-page-moutheyes").css("opacity", "0");
  });
  
  // Touch swipe events

  $("#front-page-rest").swipe({
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
    $("#front-page-performance h1").css("opacity", "1");
    $("#swipe-wrapper-performance").css("width", "100%");
    $("#front-page-performance").css("right", "0");
    $("#swipe-wrapper-performance a").attr("href", "/present");
  }
  });
  
  $("#front-page-performance").swipe({
  swipeRight:function(event, direction, distance, duration, fingerCount) {
    $("#front-page-performance").css("right", "-100%");
    setTimeout(function(){
      $("#swipe-wrapper-performance").css("width", "0");
    }, 500);
    $("#front-page-performance h1").css("opacity", "0");
  }
  });
  
  $("#front-page-rest").swipe({
  swipeRight:function(event, direction, distance, duration, fingerCount) {
    $("#front-page-thought h1").css("opacity", "1");
    $("#swipe-wrapper-thought").css("width", "100%");
    $("#front-page-thought").css("left", "0");
    $("#swipe-wrapper-thought a").attr("href", "/blog");
  }
  });
  
  $("#front-page-thought").swipe({
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
    $("#front-page-thought").css("left", "-100%");
    setTimeout(function(){
      $("#swipe-wrapper-thought").css("width", "0");
    }, 500);
    $("#front-page-thought h1").css("opacity", "0");
  }
  });

});
