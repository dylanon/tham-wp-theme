<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

				$post_categories = get_the_category();

				foreach ( $post_categories as $value ) {
					if ( $value->slug == 'blog' ) {
						$postcat_blog = true;
					} elseif ( $value->slug == 'analysis' ) {
						$postcat_analysis = true;
					}
				}

			endwhile;
			endif; ?>

<?php get_template_part( 'nav-thought' ); // Navigation bar ?>

<div class="bottom-padded slim-width container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="blog-post">

			<h1 class="text-uppercase"><?php the_title(); ?></h1>

			<?php if ( has_post_thumbnail() ) { ?>

				<div class="featured-image featured-image-blog-larger-devices">
					<?php the_post_thumbnail( 'full', array( 'class' => 'border-yellow' ) ) ?>
					<div class="featured-image-caption">
						<?php the_post_thumbnail_caption() ?>
					</div>
				</div>

			<?php } ?>

			<span class="post-wrapper"><?php the_content('(Read more ...)'); ?></span>
			<p class="small text-right text-uppercase img-floats-fix"><br />
				<?php the_tags( 'Tagged in: ' ); ?><br />
				<?php the_time('l F j, Y'); ?><br /><br />
				<strong><?php edit_post_link( '[ Edit This ]' ); ?></strong>
			</p>
			<hr />
			<?php comments_template(); ?>

		</div> <!-- .blog-post -->

	<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<div class="text-center"><strong><?php next_post_link( '%link', '&#8592; %title (newer)' ); ?>&nbsp;&nbsp;//&nbsp;&nbsp;<?php previous_post_link(  '%link', '%title (older) &#8594;' ); ?></strong></div>
	<hr />
	
</div>

<?php get_footer(); ?>