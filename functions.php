<?php

function taylorhammond_enqueue_style() {
	wp_enqueue_style( 'core', get_stylesheet_uri() );
}

function taylorhammond_enqueue_script() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'touchswipe-js', get_template_directory_uri() . '/js/jquery.touchSwipe.min.js', array( 'jquery' ), true ); // TouchSwipe
	wp_enqueue_script( 'nav-crossover-js', get_template_directory_uri() . '/js/nav-crossover.js', array( 'jquery' ), true );
	wp_enqueue_script( 'front-page-js', get_template_directory_uri() . '/js/front-page.js', array( 'jquery' ), true );
}

add_action( 'wp_enqueue_scripts', 'taylorhammond_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'taylorhammond_enqueue_script' );

function custom_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'custom_theme_setup' );

// Add custom nav menu support
function register_custom_nav_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_custom_nav_menu' );

/**
 * Registers an editor stylesheet for the theme.
 * Previews custom editor themes in TinyMCE editor.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style();
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

function get_custom_cat_template($single_template) { /* Register custom single post template for Reviews */
     global $post;
 
       if ( in_category( 'reviews' )) {
          $single_template = dirname( __FILE__ ) . '/single-reviews.php';
     }
     return $single_template;
}
add_filter( "single_template", "get_custom_cat_template" ) ;

/* Meta Box plugin demo */
add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Add Additional Content', 'textdomain' ),
        'post_types' => array ( 'portfolio' ), /* Portfolio post type only */
        'fields'     => array(
						array( /* Left box */
								'id' => 'portfolio-customfield-left',
								'name' => __( 'Add beneath featured image (left box)', 'textdomain' ),
								'type' => 'wysiwyg',
						),
							array( /* Right box */
								'id' => 'portfolio-customfield-right',
								'name' => __( 'Add beneath main text content (right box)', 'textdomain' ),
								'type' => 'wysiwyg',
						),
        ),
    );
    return $meta_boxes;
}

function bootstrap_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<li class="media">
			<div class="media-left">
				<?php echo get_avatar( $comment, 52 ); // Set avatar size here ?>
			</div>
			<div class="media-body">
				<p class="media-heading"><em><?php comment_author_link(); ?></em>&nbsp;-
				<time><a href="#comment-<?php comment_ID(); ?>" pubdate><?php comment_date(); ?> at <?php comment_time(); ?></a></time></p>
				<div class="comment-paragraph"><?php comment_text(); ?></div>
			</div>
		<?php endif;
	}

function custom_rewrite_rule() {
	add_rewrite_rule('^past/([^/]*)/page/(\d*)$', 'index.php?portfolio_category=$matches[1]&paged=$matches[2]', 'top'); // Rewrite URLs for Portfolio Category Listings to follow .../past/%portfolio_category%/
	add_rewrite_rule('^past/([^/]*)$', 'index.php?portfolio_category=$matches[1]', 'top'); // Pagination - Portfolio Categories
	add_rewrite_rule('^(blog|analysis)$', 'index.php?category_name=$matches[1]', 'top'); // Post Category Listings (Blog & Analysis)
	add_rewrite_rule('^(blog|analysis)/page/(\d*)$', 'index.php?category_name=$matches[1]&paged=$matches[2]', 'top'); // Pagination - Blog & Analysis 
}
add_action('init', 'custom_rewrite_rule');

// Portfolio Nav - Light up for applicable portfolio categories in posts view and single view
function activePortfolioNav( $portfolio_archive_section, $portfolio_taxonomy_template ) {
	if ( is_archive() ) {
		if ( $portfolio_archive_section === $portfolio_taxonomy_template ) {
			return TRUE;
		}
	} elseif ( has_term ( $portfolio_archive_section, 'portfolio_category' ) ) {
		return TRUE;
	} else {
		return FALSE;
	}
}

?>