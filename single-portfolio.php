<?php get_header(); ?>

<?php $mysection = 'past'; ?>

<?php get_template_part( 'nav-performance' ); // Navigation bar ?>

<div class="bottom-padded container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Check which post layout to use -->
	<?php $portfoliolayout = get_post_meta($post->ID, 'Featured Image Orientation', true); ?>
	<?php if ( $portfoliolayout === 'portrait' ) { ?>

<!-- Layout 2: Right featured image -->
	
	<div class="portfolio-post">

		<div class="row">
			
			<?php if ( has_post_thumbnail() ) { ?>
			
			<div class="col-md-5 featured-image">
				<?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
				<div class="featured-image-caption">
					<?php the_post_thumbnail_caption() ?>
				</div>
				<!-- Meta Box: Beneath featured image -->
				<div class="portfolio-meta-box">
					<?php echo do_shortcode( rwmb_meta( 'portfolio-customfield-left' ) ); ?>
				</div>
			</div>
			
			<div class="col-md-7">
				
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
				
				<!-- Meta Box: Beneath main content area -->
				<div class="portfolio-meta-box">
					<?php echo do_shortcode( rwmb_meta( 'portfolio-customfield-right' ) ); ?>
				</div>
				
			</div>
		
		</div>

	</div> <!-- .portfolio-post -->

<!-- End Layout 2: Right featured image -->

	<?php } else { ?>

<!-- Layout 1: Left featured image	 -->
	
	<div class="portfolio-post">

		<div class="row">
			
			<?php if ( has_post_thumbnail() ) { ?>
			
			<div class="col-md-7 featured-image">
				<?php the_post_thumbnail( 'full', array( 'class' => 'border-red' ) ) ?>
				<div class="featured-image-caption">
					<?php the_post_thumbnail_caption() ?>
				</div>
				<!-- Meta Box: Beneath featured image -->
				<div class="portfolio-meta-box">
					<?php echo do_shortcode( rwmb_meta( 'portfolio-customfield-left' ) ); ?>
				</div>
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
				
				<!-- Meta Box: Beneath main content area -->
				<div class="portfolio-meta-box">
					<?php echo do_shortcode( rwmb_meta( 'portfolio-customfield-right' ) ); ?>
				</div>
				
			</div>
		
		</div>

	</div> <!-- .portfolio-post -->

<!-- End Layout 1: Left featured image -->

<?php } ?> <!-- End post layout picker -->

	<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>