<?php get_header(); ?>

<?php $mysection = 'past'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded container">
      
      <h1 class="text-center">
        Projects as Actor
      </h1>
      
      <?php $i=0; // counter (for row display) ?>
      <?php $j=0; // counter (for alternating colours) ?>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ($i%3==0) { // if counter is multiple of 3 ?>
          <div class="row">
        <?php } ?>
        
        <div class="col-md-4">
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
                
                <p class="text-uppercase post-date posts-view-post-date"><?php the_time('F j, Y'); ?></p>
                
                <p class="posts-view-read-more h4">
                  Read&nbsp;<span class="glyphicon glyphicon-arrow-right"></span>
                </p>
              
              </div>
            
            </a>
            
            <div class="posts-view-pre-hover-text">
              <h1><a class="text-uppercase" href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
              <div class="text-uppercase post-date"><?php the_time('F j, Y'); ?></div>
              <div><?php the_excerpt('(Read more ...)'); ?></div>
              <div class="small text-right text-uppercase img-floats-fix">
                <?php edit_post_link( '[ Edit This ]' ); ?>
              </div>
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