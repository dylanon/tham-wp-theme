jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */
  
  var isTripped = false;
  
  $("#nav-crossover-trigger").mouseenter(function(){
    if ( isTripped === false ) {
      $("#nav-crossover").fadeIn(300);
    } else {
      isTripped = false;
    }
  });
  
  $("#nav-crossover").mouseleave(function(){
    $("#nav-crossover").fadeOut(300);
  });
  
  $("#nav-crossback-trigger").click(function(){
    isTripped = true;
    $("#nav-crossover").fadeOut(300);
  });

});