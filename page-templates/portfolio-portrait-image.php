<?php /*
Template Name: Right Column Wider
Template Post Type: portfolio
*/
?>

<?php get_header(); ?>

<?php $mysection = 'past'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

<?php get_template_part( 'nav-portfolio' ); // Portfolio nav ?>

<div class="bottom-padded container">

	<!-- Start the WordPress Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="portfolio-post">
			
			<h1 class="text-uppercase text-center hide-over-768"><?php the_title(); ?></h1>

			<div class="row">

				<?php if ( has_post_thumbnail() ) { ?>
				<!-- Set left box (featured image) width to 5/12 -->
				<div class="col-sm-5 featured-image">
					<?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
					<div class="featured-image-caption">
						<?php the_post_thumbnail_caption() ?>
					</div>
					<!-- Meta Box: Beneath featured image -->
					<div class="editor-content portfolio-meta-box">
						<?php echo do_shortcode( rwmb_meta( 'portfolio-customfield-left' ) ); ?>
					</div>
				</div><!-- .col-sm-5 -->
				<?php } ?>
				
				<?php if ( has_post_thumbnail() ) { ?>

					<!-- Set right box (content) width to 7/12 -->
					<div class="col-sm-7">

				<?php } else { ?>

					<!-- Set right box (content) width to full width -->
					<div class="col-sm-12"><!-- If no featured image -->

				<?php } ?>

					<div class="portfolio-content-area">

						<h1 class="text-uppercase"><?php the_title(); ?></h1>
						<span class="editor-content post-wrapper"><?php the_content('(Read more ...)'); ?></span>
						<p class="small text-right text-uppercase img-floats-fix"><br />
							<strong><?php edit_post_link( '[ Edit This ]' ); ?></strong>
						</p>

					</div>

					<!-- Meta Box: Beneath main content area -->
					<div class="editor-content portfolio-meta-box">
						<?php echo do_shortcode( rwmb_meta( 'portfolio-customfield-right' ) ); ?>
					</div>

					</div><!-- .col-sm-7 | .col-sm-12 when there is no featured image -->

			</div><!-- .row -->

		</div><!-- .portfolio-post -->

	<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	<!-- End the Loop -->
	
</div><!-- bottom-padded container -->

<?php get_footer(); ?>