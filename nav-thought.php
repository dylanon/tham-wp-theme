     <nav class="navbar navbar-default text-uppercase nav-thought">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img class="taylor-brand" src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="Taylor Hammond" /></a>
          
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="navbar-right">
            <ul class="nav navbar-nav nav-links">
              <li class="active"><a href="<?php get_bloginfo( ‘template_url’ ); ?>/category/blog">Blog</a></li>
              <li <?php if ( $pagename == 'research' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/research">Research</a></li>
            </ul>
            <ul class="nav navbar-nav nav-links navbar-right">
              <li><a href="<?php get_bloginfo( ‘template_url’ ); ?>/category/reviews">Reviews</a></li>
              <li <?php if ( $pagename == 'cv' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/cv">CV</a></li>
              <li <?php if ( $pagename == 'about' ) { ?>class="active"<?php } ?>><a href="<?php get_bloginfo( ‘template_url’ ); ?>/about">About</a></li>
              <li><a href="<?php get_bloginfo( ‘template_url’ ); ?>/present" class="hide-crossover">Performance</a></li>
            </ul>
          </div>
           <h1 class="section-heading navbar-right">Thought</h1>
        </div>

      </div>
    </nav>
    
    <div class="container-fluid title-block nav-thought">
      <h1 class="text-uppercase text-center">
        Thought
      </h1>
    </div>