<?php get_header(); ?>

<?php $mysection = 'past'; $portfoliosection = 'director'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

  <?php get_template_part( 'nav-portfolio' ); // Portfolio nav ?>

  <div class="bottom-padded container">
      
      <?php get_template_part( 'master_posts-view' ); // Posts View master code for category, archive,
                                                      // and portfolio category pages ?>
      
<?php get_footer(); ?>