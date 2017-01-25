<?php global $portfoliosection; // Access global variable from taxonomy-portfolio_category-*.php ?>

<?php
  function activePortfolioNav( $portfolio_archive_section, $portfolio_taxonomy_template ) {
    if ( is_archive() ) {
      if ( $portfolio_archive_section === $portfolio_taxonomy_template ) {
        echo " portfolio-active";
      }
    } elseif ( has_term ( $portfolio_archive_section, 'portfolio_category' ) ) {
      echo " portfolio-active";
    }
  }
?>

<!-- Portfolio nav -->
<nav class="nav-portfolio">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 col-sm-4">
        <p>
          View projects as:
        </p>
      </div>
<!--       <div class="col-sm-2"></div> -->
      <div class="col-xs-6 col-sm-2<?php activePortfolioNav( 'actor', $portfoliosection ); ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/actor">
          Actor<?php if ( has_term ( 'actor', 'portfolio_category' ) === FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
      <div class="col-xs-6 col-sm-2<?php activePortfolioNav( 'creator', $portfoliosection ); ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/creator">
          Creator<?php if ( has_term ( 'creator', 'portfolio_category' ) === FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
      <div class="col-xs-6 col-sm-2<?php activePortfolioNav( 'director', $portfoliosection ); ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/director">
          Director<?php if ( has_term ( 'director', 'portfolio_category' ) === FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
      <div class="col-xs-6 col-sm-2<?php activePortfolioNav( 'teacher', $portfoliosection ); ?>">
        <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/teacher">
          Teacher<?php if ( has_term ( 'teacher', 'portfolio_category' ) === FALSE ) { ?> <span class="portfolio-arrow-fix">&#8594;</span><?php } ?>
        </a>
      </div>
    </div>
  </div>
</nav>