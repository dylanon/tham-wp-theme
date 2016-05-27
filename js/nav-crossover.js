jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */

  $("#nav-crossover-trigger").mouseenter(function(){
    $("#nav-crossover").fadeIn();
  });
  
  $("#nav-crossover").mouseleave(function(){
    $("#nav-crossover").fadeOut();
  });

});