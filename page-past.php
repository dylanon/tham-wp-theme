<?php get_header(); ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded page-width container">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="text-center"><?php the_title(); ?> Projects</h1>
      
        <?php if ( has_post_thumbnail() ) { ?>

          <div class="featured-image">
            <?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
            <div class="featured-image-caption">
              <?php the_post_thumbnail_caption() ?>
            </div>
          </div>

        <?php } ?>
      
        <div class="row">
          
          <div class="col-sm-6 square-size">
            
            <div class="square border-yellow border-rounded">
              
              <div class="square-content">
                
                <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/actor">
                  <h2>
                    Actor
                  </h2>
                </a>
                
             </div>
              
            </div>
            
          </div>
          
          <div class="col-sm-6 square-size">
            
            <div class="square border-yellow border-rounded">
              
              <div class="square-content">
            
                <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/creator">
                  <h2>
                    Creator
                  </h2>
                </a>
                
             </div>
              
            </div>
            
          </div>
          
        </div>

        <div class="row">
          
          <div class="col-sm-6 square-size">
            
            <div class="square border-yellow border-rounded">
              
              <div class="square-content">
            
                <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/director">
                  <h2>
                    Director
                  </h2>
                </a>
                
             </div>
              
            </div>
            
          </div>
          
          <div class="col-sm-6 square-size">
            
            <div class="square border-yellow border-rounded">
              
              <div class="square-content">
            
                <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/teacher">
                  <h2>
                    Teacher
                  </h2>
                </a>
                
             </div>
              
            </div>
            
          </div>
          
        </div>
      
        <div class="top-margin"><?php the_content(); ?></div>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>  

    </div> <!-- .container -->
<?php get_footer(); ?>