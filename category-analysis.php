<?php get_header(); ?>

<?php $mysection = 'analysis'; 
      $excerptid = 265; ?><!-- Change this ID to match the 'Why Analysis' post on install. -->

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

<div class="bottom-padded container">
      
  <h1 class="text-center mobile-tablet-only">Analysis</h1>
      
  <div class="text-center text-byte mobile-tablet-only">
    <hr />
    <p><?php echo get_the_excerpt( $excerptid ); ?></p>
    <hr />      
  </div>

<?php $i=0; // counter (for row display) ?>
<?php $j=0; // counter (for alternating colours) ?>

  <div class="row">      

    <div class="col-md-8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php if ($i%2==0) { // Start .row if counter is multiple of 2 ?>
        <div class="row">
      <?php } ?>

      <div class="col-md-6">
        <div class="blog-post-preview<?php if ($j%2==0) { ?> yellow-border<?php } ?>">

          <a href="<?php the_permalink()?>">

            <div class="posts-view-featured-image" style="
              <?php if ( has_post_thumbnail() ) {?>
                background:url(<?php the_post_thumbnail_url( 'large' ); ?>) no-repeat center center/cover;
                -webkit-background-size:cover;
                -moz-background-size:cover;
                -o-background-size:cover;
              <?php } else { ?>
                background:#434d69;
              <?php } ?>">

              <p class="h1 posts-view-post-title">                                                                                         
                <?php the_title(); ?>                                                                                                      
              </p>

              <?php if ( has_term( '', 'portfolio_category' ) === FALSE ) { ?>
                <p class="text-uppercase post-date posts-view-post-date"><?php the_time('F j, Y'); ?></p>
              <?php } ?>

              <p class="posts-view-read-more h4">
                <?php if ( has_term( '', 'portfolio_category' ) ) { ?>
                View<?php } else { ?>Read<?php } ?>&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
              </p>

            </div>

          </a>

          <div class="posts-view-pre-hover-text">
            <h1><a class="text-uppercase" href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
            <?php if ( has_term( '', 'portfolio_category' ) ) { ?>
              <br />
            <?php } else { ?>
              <div class="text-uppercase post-date"><?php the_time('F j, Y'); ?></div>
            <?php } ?>
            <div><?php the_excerpt('(Read more ...)'); ?></div>
            <div class="small text-right text-uppercase img-floats-fix">
              <?php edit_post_link( '[ Edit This ]' ); ?>
            </div>
          </div>

        </div><!-- .blog-post-preview -->
      </div><!-- .col-md-6 -->

      <?php $i++; ?>
      <?php $j++; ?>

      <?php if($i%2==0) { // Close .row if counter is multiple of 2 ?>
        </div>
      <?php } ?>

    <?php endwhile; ?>

      <!-- Close Bootstrap row if necessary-->
      <?php if ( $i%2==1 ) { ?>
          <div class="col-md-6"></div>      
        </div>
      <?php } ?>

      <!-- Pagination -->
      <div class="posts-view-pagination text-uppercase"><?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?></div>

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    </div><!-- .col-md-8 -->

    <!-- For the excerpt on desktop -->
    <div class="col-md-4">
      <div class="text-center text-byte desktop-only">
        <hr />
        <h1>Analysis</h1>
        <hr />
        <p><?php echo get_the_excerpt( $excerptid ); ?></p>
      </div>
    </div>

  </div><!-- .row -->

</div><!-- .bottom-padded.container -->

<?php get_footer(); ?>