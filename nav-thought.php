<?php get_header(); ?>

     <nav class="navbar navbar-default text-uppercase nav-thought">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="taylor-brand" src="<?php bloginfo('template_directory'); ?>/img/logo-white.png" alt="Taylor Hammond" /></a>
          
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="navbar-right">
            <ul class="nav navbar-nav nav-links">
              <li class="active"><a href="#">Blog</a></li>
              <li><a href="#">Research</a></li>
            </ul>
            <ul class="nav navbar-nav nav-links navbar-right">
              <li><a href="#">Reviews</a></li>
              <li><a href="#">CV</a></li>
              <li><a href="#">About</a></li>
              <li><a href="index-performance.html" class="hide-crossover">Performance</a></li>
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

    <div class="page-width container">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>  

    </div> <!-- .container -->
<?php get_footer(); ?>