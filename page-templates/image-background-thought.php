<?php /* Template Name: Image Background (Thought Section) */ ?>

<?php get_header(); ?>

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

  <div class="full-image-background" style="
  <?php if ( has_post_thumbnail() ) {?>
    background:url(<?php the_post_thumbnail_url( 'large' ); ?>) center center/cover no-repeat fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    -webkit-filter: brightness(0.65);
    filter: brightness(0.65);
    content: ' ';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 1;
  <?php } ?>">
  </div>

    <div class="bottom-padded narrow-width container page-content-padding">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
      
        <?php the_content(); ?>
        <?php edit_post_link(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </div> <!-- .container -->
<?php get_footer(); ?>