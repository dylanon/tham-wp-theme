<?php get_header(); ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded page-width container">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="text-center no-bottom-margin"><?php the_title(); ?> Projects</h1>
      
        <div class="top-margin"><?php the_content(); ?></div>
        <div class="text-right"><?php edit_post_link(); ?></div>
      
          <div class="row">

            <div class="col-md-3 square-size">

              <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/actor">

                <div class="square border-yellow border-rounded">

                  <div class="square-content square-background" style="background: url('<?php echo get_post_meta($post->ID, 'Section Image - Actor', true); ?>'); 	background-size: cover; background-repeat: no-repeat;">

                    <h2 class="h1">
                      Actor
                    </h2>

                  </div>

                </div>

              </a>

            </div>

            <div class="col-md-3 square-size">

              <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/creator">

                <div class="square border-yellow border-rounded">

                  <div class="square-content square-background" style="background: url('<?php echo get_post_meta($post->ID, 'Section Image - Creator', true); ?>'); 	background-size: cover; background-repeat: no-repeat;">

                    <h2 class="h1">
                      Creator
                    </h2>

                  </div>

                </div>

              </a>

            </div>

            <div class="col-md-3 square-size">

              <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/director">

                <div class="square border-yellow border-rounded">

                  <div class="square-content square-background" style="background: url('<?php echo get_post_meta($post->ID, 'Section Image - Director', true); ?>'); 	background-size: cover; background-repeat: no-repeat;">

                    <h2 class="h1">
                      Director
                    </h2>

                  </div>

                </div>

              </a>

            </div>

            <div class="col-md-3 square-size">

              <a href="<?php get_bloginfo( ‘template_url’ ); ?>/portfolio_category/teacher">

                <div class="square border-yellow border-rounded">

                  <div class="square-content square-background" style="background: url('<?php echo get_post_meta($post->ID, 'Section Image - Teacher', true); ?>'); 	background-size: cover; background-repeat: no-repeat;">

                    <h2 class="h1">
                      Teacher
                    </h2>

                  </div>

                </div>

              </a>

            </div>

          </div><!-- .row -->
      
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="top-margin">
          <div class="featured-image">
            <?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
            <div class="featured-image-caption">
              <?php the_post_thumbnail_caption() ?>
            </div>
          </div>
        </div>

        <?php } ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>  

    </div> <!-- .container -->
<?php get_footer(); ?>