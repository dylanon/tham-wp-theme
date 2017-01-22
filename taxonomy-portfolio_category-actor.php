<?php get_header(); ?>

<?php $mysection = 'past'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded container">
      
      <!-- Portfolio nav -->
      <div class="row text-center">
        <div class="col-xs-12 col-sm-2">
          <p>
            Projects as:
          </p>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-xs-6 col-sm-2">
          <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/actor">Actor</a>
        </div>
        <div class="col-xs-6 col-sm-2">
          <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/creator">Creator</a>
        </div>
        <div class="col-xs-6 col-sm-2">
          <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/director">Director</a>
        </div>
        <div class="col-xs-6 col-sm-2">
          <a href="<?php get_bloginfo( ‘template_url’ ); ?>/past/teacher">Teacher</a>
        </div>
      </div>
      
<!--       <h1 class="text-center">
        Projects as Actor
      </h1> -->
      
      <?php get_template_part( 'master_posts-view' ); // Posts View master code for category, archive,
                                                      // and portfolio category pages ?>
      
<?php get_footer(); ?>