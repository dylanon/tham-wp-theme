<?php global $postcat_blog, $postcat_analysis, $mysection; ?><!-- Access global variables from single.php, category-blog.php, category-analysis.php -->

<nav class="navbar navbar-default text-uppercase nav-thought">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php get_bloginfo( ‘template_url’ ); ?>/blog">
        <img class="taylor-brand" src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="Taylor Hammond" />
        <img class="taylor-brand-horiz" src="<?php bloginfo('template_directory'); ?>/img/logo-white-horiz.png" alt="Taylor Hammond" />
      </a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-right">
        <ul class="nav navbar-nav nav-links">
          <li <?php if ( $postcat_blog or $mysection == 'blog' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/blog">Blog</a></li>
          <li <?php if ( $pagename == 'research' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/research">Research</a></li>
        </ul>
        <ul class="nav navbar-nav nav-links navbar-right">
          <li <?php if ( $postcat_analysis or $mysection == 'analysis' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/analysis">Analysis</a></li>
          <li <?php if ( $pagename == 'cv' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/cv">CV</a></li>
          <li <?php if ( $pagename == 'about' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/about">About</a></li>
          <li><a href="<?php get_bloginfo( ‘template_url’ ); ?>/present" class="hide-crossover">Performance</a></li>
        </ul>
      </div>
       <h1 class="section-heading navbar-right" id="nav-crossover-trigger">Thought</h1>
    </div>

  </div>
</nav>

<div class="container-fluid title-block nav-thought">
  <h1 class="text-uppercase text-center">
    Thought
  </h1>
</div>

<div id="nav-crossover">
  
   <nav class="navbar navbar-default text-uppercase">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php get_bloginfo( ‘template_url’ ); ?>/present"><img class="taylor-brand" src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="Taylor Hammond" /></a>

      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav nav-links navbar-right">
          <!-- Make 'Past' page and all portfolio items light up 'Past' in the nav bar. -->
          <li <?php if ( $pagename == 'past' or $mysection == 'past' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/past">Past</a></li>
          <li <?php if ( $pagename == 'present' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/present">Present</a></li>
          <li><a href="<?php get_bloginfo( ‘template_url’ ); ?>/blog" class="hide-crossover">Thought</a></li>
        </ul>
         <h1 class="section-heading navbar-right" id="nav-crossback-trigger">Performance</h1>
      </div>

    </div>
  </nav>
  
</div>

<!-- for navbar javascript - change when mouse enters #page-content
     - closed in footer.php -->
<div id="page-content">