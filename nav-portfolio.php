<?php global $portfoliosection; // Access global variable from taxonomy-portfolio_category-*.php ?>

<!-- Portfolio nav -->
<nav class="nav-portfolio">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-6 col-sm-3<?php if ( activePortfolioNav( 'actor', $portfoliosection ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/actor">
          Actor<?php if ( activePortfolioNav( 'actor', $portfoliosection ) == FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
      <div class="col-xs-6 col-sm-3<?php if ( activePortfolioNav( 'creator', $portfoliosection ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/creator">
          Creator<?php if ( activePortfolioNav( 'creator', $portfoliosection ) == FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
      <div class="col-xs-6 col-sm-3<?php if ( activePortfolioNav( 'director', $portfoliosection ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/director">
          Director<?php if ( activePortfolioNav( 'director', $portfoliosection ) == FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
      <div class="col-xs-6 col-sm-3<?php if ( activePortfolioNav( 'teacher', $portfoliosection ) ) { ?> portfolio-active<?php } ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/teacher">
          Teacher<?php if ( activePortfolioNav( 'teacher', $portfoliosection ) == FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
    </div>
  </div>
</nav>