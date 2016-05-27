<div class="bottom-padded slim-width container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog-post">

		<h1 class="text-uppercase"><?php the_title(); ?></h1>
		<span class="post-wrapper"><?php the_content('(Read more ...)'); ?></span>
		<p class="small text-right text-uppercase img-floats-fix"><br />
			<?php the_tags( 'Tagged in: ' ); ?><br />
			<?php the_time('l F j, Y'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_time() ?><br /><br />
			<strong><?php edit_post_link( '[ Edit This ]' ); ?></strong>
		</p>
		<hr />

	</div> <!-- .blog-post -->

	<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<div class="text-center"><strong><?php next_post_link( '%link', '&#8592; %title (newer)' ); ?>&nbsp;&nbsp;//&nbsp;&nbsp;<?php previous_post_link(  '%link', '%title (older) &#8594;' ); ?></strong></div>
	<hr />
	
</div>