<!-- Portfolio nav -->
<nav class="nav-portfolio">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 col-sm-4">
        <p>
          View more projects:
        </p>
      </div>
<!--       <div class="col-sm-2"></div> -->
      <div class="col-xs-6 col-sm-2<?php if ( has_term ( 'actor', 'portfolio_category' ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/actor">
          Actor
        </a>
      </div>
      <div class="col-xs-6 col-sm-2<?php if ( has_term ( 'creator', 'portfolio_category' ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/creator">
          Creator
        </a>
      </div>
      <div class="col-xs-6 col-sm-2<?php if ( has_term ( 'director', 'portfolio_category' ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/director">
          Director
        </a>
      </div>
      <div class="col-xs-6 col-sm-2<?php if ( has_term ( 'teacher', 'portfolio_category' ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/teacher">
          Teacher
        </a>
      </div>
    </div>
  </div>
</nav>