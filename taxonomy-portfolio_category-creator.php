<?php get_header(); ?>

    <nav class="navbar navbar-default text-uppercase">
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
          <ul class="nav navbar-nav nav-links navbar-right">
            <li><a href="#">Past</a></li>
            <li class="active"><a href="#">Present</a></li>
            <li><a href="#" class="hide-crossover">Thought</a></li>
          </ul>
           <h1 class="section-heading navbar-right">Performance</h1>
        </div>

      </div>
    </nav>

    <div class="container-fluid title-block">
      <h1 class="text-uppercase text-center">
        Performance
      </h1>
    </div>

    <div class="container">
      
      <h1 class="text-center">
        Projects as Creator
      </h1>
      
      <?php $i=0; // counter (for row display) ?>
      <?php $j=0; // counter (for alternating colours) ?>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ($i%3==0) { // if counter is multiple of 3 ?>
          <div class="row">
        <?php } ?>
          
        <div class="col-md-4">
          <div class="blog-post-preview blog-post<?php if ($j%2==0) { ?> yellow-border<?php } ?>">
            <h1><a class="text-uppercase" href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
            <div><?php the_excerpt('(Read more ...)'); ?></div>
            <div class="small text-right text-uppercase img-floats-fix">
              <?php edit_post_link( '[ Edit This ]' ); ?>
            </div>
          </div>
        </div>

        <?php $i++; ?>
        <?php $j++; ?>
            
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