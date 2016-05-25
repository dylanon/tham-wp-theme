<?php get_header(); ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

<div class="bottom-padded container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="portfolio-post">

		<div class="row">
			
			<div class="col-md-7 portfolio-image">
				<?php the_post_thumbnail() ?>
				<div class="portfolio-caption">
					<?php the_post_thumbnail_caption() ?>
				</div>
			</div>
			
			<div class="col-md-5">
			
				<div class="portfolio-content-area">

					<h1 class="text-uppercase"><?php the_title(); ?></h1>
					<span class="post-wrapper"><?php the_content('(Read more ...)'); ?></span>
					<p class="small text-right text-uppercase img-floats-fix"><br />
						<strong><?php edit_post_link( '[ Edit This ]' ); ?></strong>
					</p>

				</div>
				
			</div>
		
		</div>

	</div> <!-- .portfolio-post -->

	<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>