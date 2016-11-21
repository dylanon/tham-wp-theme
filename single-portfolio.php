<?php get_header(); ?>

<?php $mysection = 'past'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

<div class="bottom-padded container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="portfolio-post">

		<div class="row">
			
			<?php if ( has_post_thumbnail() ) { ?>
			
			<div class="col-md-7 featured-image">
				<?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
				<div class="featured-image-caption">
					<?php the_post_thumbnail_caption() ?>
				</div>
				<!-- Meta Box: Editor -->
				<?php echo rwmb_meta( 'editor' ); ?>
			</div>
			
			<div class="col-md-5">
				
			<?php } else { ?>
			
			<div class="col-md-12">
			
			<?php } ?>
			
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