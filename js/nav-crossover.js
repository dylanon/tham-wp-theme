jQuery(document).ready(function($){ /* WordPress loads jQuery in no conflict mode. $ is passed back in here for use within the script. */
  
  var crossClicked = false;
  
  $("#nav-crossover-trigger").mouseenter(function(){
    if (crossClicked === false) {
      $("#nav-crossover").fadeIn(300);
    }
  });
  
  $("#nav-crossover").mouseleave(function(){
    $("#nav-crossover").fadeOut(300);
  });
  
  $("#nav-crossover").click(function(){
    $("#nav-crossover").fadeOut(300);
    crossClicked = true;
  });

});