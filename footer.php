<?php if ( is_front_page() ) {
  // No footer
} else {
  // Include footer ?>

<!-- #page-content from nav-thought.php and nav-performance.php - for navbar javascript -->
</div>

<!-- push sticky footer down by its height just in case -->
<div class="push-footer"></div>

<!-- .page-wrapper for sticky footer -->
</div>

<!-- the actual footer -->
<div class="container-fluid footer text-center small">
  <p>
    site by <a href="http://dylanon.com">dylanon</a>&nbsp;&nbsp;/&nbsp;&nbsp;&copy;&nbsp;<?php echo date("Y") ?> Taylor Hammond
    <?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
      &nbsp;/
    <?php } ?>
  </p>
  <?php wp_nav_menu( array( 'theme_location' => 'footer-menu',
                            'fallback_cb'    => 'false',
                            'container'      => 'false',
                            'menu_class'     => 'footer-menu-ul'
                      ) 
               ); ?>
</div>

<?php } ?>

<?php wp_footer(); ?>

</body>
</html>