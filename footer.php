</div><!-- #page-content from Master Nav files -->

<?php if ( is_front_page() ) {
  // No footer
} else {
  // Include footer ?>

      <div class="container-fluid footer text-center small">

        <p>
          &copy;&nbsp;<?php echo date("Y") ?> Taylor Hammond
        </p>

      </div>

<?php } ?>

    </div><!-- .page-wrapper -->

    <?php wp_footer(); ?>

  </body>
</html>