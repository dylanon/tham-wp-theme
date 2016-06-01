jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */

  var isClicked = false;
  
  $("#nav-crossover-trigger").mouseenter(function(){
    if ( isClicked === false ) {
      $("#nav-crossover").fadeIn(300);
    }
  });
  
  $("#page-content").mouseenter(function(){
    $("#nav-crossover").fadeOut(300);
    isClicked = false;
  });
  
  $("#nav-crossback-trigger").click(function(){
    isClicked = true;
    $("#nav-crossover").fadeOut(300);
  });
  
  $("#nav-crossover-trigger").click(function(){
      $("#nav-crossover").fadeIn(300);
  });

});