<?php get_header(); ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

    <div class="bottom-padded narrow-width container">
 
    <h1 class="page-title text-center"><?php printf( 'Search Results for: "%s"', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
      
		<?php if ( have_posts() ) : ?>

      <ol class="search-list"
        <?php if ( is_paged() ) { // If is paginated, correct list numbering
              $paged = get_query_var( 'paged', 1 );
              echo 'start="'.( ($paged - 1) * get_option( 'posts_per_page' ) + 1 ).'"'; 
        } ?>>
      
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

        <!-- Run the loop for the search to output the results. -->
        <li class="search-result-item">
          <?php the_title( sprintf( '<h2 class="search-result-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                the_excerpt(); ?>
        </li>
        
        <?php
        // End the loop.
        endwhile; ?>
        
      </ol>

      <!-- Previous/next page navigation. -->
      <div class="posts-view-pagination text-uppercase"><?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?></div>

		<?php else :
      // If no content:
      printf( '<p class="text-center search-result-if-none">There are no matching results. Sorry!</p>' );

		endif;
		?>
      
    <div class="search-result-form">
      <?php get_search_form(); ?>
    </div>

    </div> <!-- .container -->
<?php get_footer(); ?>