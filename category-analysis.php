<?php get_header(); ?>

<?php $mysection = 'analysis'; ?>

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

    <div class="bottom-padded container">
      
      <h1 class="text-center mobile-tablet-only">Analysis</h1>
      
      <div class="text-center text-byte mobile-tablet-only">
        <hr />
        <p><?php echo get_the_excerpt( '265' ); ?></p> <!-- Change this ID to match the 'Why Analysis' post on install. -->
        <hr />      
      </div>
      
      <?php get_template_part( 'master_posts-view' ); // Posts View master code for category, archive,
                                                      // and portfolio category pages ?>

<?php get_footer(); ?>