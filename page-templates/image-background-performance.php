<?php /* Template Name: Image Background (Performance Section) */ ?>

<?php get_header(); ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded narrow-width container page-content-padding">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="text-center"><?php the_title(); ?></h1>
      
        <?php the_content(); ?>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </div> <!-- .container -->
<?php get_footer(); ?>