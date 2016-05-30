<?php get_header(); ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded page-width container">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="text-center"><?php the_title(); ?> Projects</h1>
      
        <?php if ( has_post_thumbnail() ) { ?>

          <div class="featured-image border-red">
            <?php the_post_thumbnail() ?>
            <div class="featured-image-caption">
              <?php the_post_thumbnail_caption() ?>
            </div>
          </div>

        <?php } ?>
      
        <div class="row">
          
          <div class="col-sm-6 text-center">
            
            <div class="square">
              
              <div class="square-content">
            
                <h2>
                  Actor
                </h2>
                
             </div>
              
            </div>
            
          </div>
          
          <div class="col-sm-6 text-center">
            
            <div class="square">
              
              <div class="square-content">
            
                <h2>
                  Actor
                </h2>
                
             </div>
              
            </div>
            
          </div>
          
        </div>

        <div class="row">
          
          <div class="col-sm-6 text-center">
            
            <div class="square">
              
              <div class="square-content">
            
                <h2>
                  Actor
                </h2>
                
             </div>
              
            </div>
            
          </div>
          
          <div class="col-sm-6 text-center">
            
            <div class="square">
              
              <div class="square-content">
            
                <h2>
                  Actor
                </h2>
                
             </div>
              
            </div>
            
          </div>
          
        </div>
      
        <?php the_content(); ?>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>  

    </div> <!-- .container -->
<?php get_footer(); ?>