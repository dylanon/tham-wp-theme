<?php get_header(); ?>

<?php $mysection = 'past'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

  <?php get_template_part( 'nav-portfolio' ); // Portfolio nav ?>

  <div class="bottom-padded container">
      
<!--       <h1 class="text-center">
        Projects as Actor
      </h1> -->
      
      <?php get_template_part( 'master_posts-view' ); // Posts View master code for category, archive,
                                                      // and portfolio category pages ?>
      
<?php get_footer(); ?>