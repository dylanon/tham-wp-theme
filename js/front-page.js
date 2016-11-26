jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */

  $("#front-page-performance, #front-page-thought").mouseenter(function(){
      $("#front-page-moutheyes").css("opacity", "1");
  });
  
  $("#front-page-performance, #front-page-thought").mouseleave(function(){
      $("#front-page-moutheyes").css("opacity", "0");
  });

});