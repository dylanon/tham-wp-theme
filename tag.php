<?php get_header(); ?>


<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

    <div class="bottom-padded container">
      
      <h1 class="text-center"><?php the_archive_title(); ?></h1>

      <?php get_template_part( 'master_posts-view' ); // Posts View master code for category, archive,
                                                      // and portfolio category pages ?>

<?php get_footer(); ?>