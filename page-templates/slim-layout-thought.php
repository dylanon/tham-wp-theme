<?php /* Template Name: Slim Layout (Thought Section) */ ?>

<?php get_header(); ?>

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

    <div class="bottom-padded narrow-width container">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
      
        <?php if ( has_post_thumbnail() ) { ?>

        <div class="featured-image">
          <?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
          <div class="featured-image-caption">
            <?php the_post_thumbnail_caption() ?>
          </div>
        </div>

        <?php } ?>
      
        <?php the_content(); ?>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </div> <!-- .container -->
<?php get_footer(); ?>