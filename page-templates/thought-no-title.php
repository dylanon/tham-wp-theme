<?php /* Template Name: Thought (No Title) */ ?>

<?php get_header(); ?>

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

    <div class="page-width container">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>  

    </div> <!-- .container -->
<?php get_footer(); ?>