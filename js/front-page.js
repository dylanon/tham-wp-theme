jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */

  $("#front-page-performance, #front-page-thought").mouseenter(function(){
      $("#front-page-moutheyes").css("opacity", "1");
  });
  
  $("#front-page-performance, #front-page-thought").mouseleave(function(){
      $("#front-page-moutheyes").css("opacity", "0");
  });

  $("#front-page-rest").on("swipeleft",function(){
      $("#front-page-performance h1").css("opacity", "1");
      $(".outer").css("width", "100%");
      $("#front-page-performance").css("right", "0");
  });
  
  $("#front-page-performance").on("swiperight",function(){
      $("#front-page-performance").css("right", "-100%");
      setTimeout(function(){
        $(".outer").css("width", "0");
      }, 500);
      $("#front-page-performance h1").css("opacity", "0");
  });
});
