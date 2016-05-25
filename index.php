<?php get_header(); ?>

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

    <div class="container">
      
      <?php $i=0; // counter ?>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ($i%3==0) { // if counter is multiple of 3 ?>
          <div class="row">
        <?php } ?>
          
        <div class="col-md-4">
          <h1><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
          <div><?php the_content('(Read more ...)'); ?></div>
          <p class="small text-right text-uppercase img-floats-fix"><br />
            <?php edit_post_link( '[ Edit This ]' ); ?>
          </p>
          <hr />
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