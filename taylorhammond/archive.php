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

    <div class="container">
      
      <?php $i=0; // counter ?>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ($i%3==0) { // if counter is multiple of 3 ?>
          <div class="row">
        <?php } ?>
          
        <div class="col-md-4">
          <div class="blog-post-preview">
            <h1><a class="text-uppercase" href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
            <div class="text-uppercase post-date"><?php the_time('F j, Y'); ?></div>
            <div><?php the_excerpt('(Read more ...)'); ?></div>
            <div class="small text-right text-uppercase img-floats-fix">
              <?php edit_post_link( '[ Edit This ]' ); ?>
            </div>
          </div>
        </div>

        <?php $i++; ?>
            
        <?php if($i%3==0) { // if counter is multiple of 3 ?>
          </div>
        <?php } ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      
      <?php if($i%3!=0) { // put closing div if loop is not exactly a multiple of 3 ?>
        </div>
      <?php } ?>

  </div>
<?php get_footer(); ?>