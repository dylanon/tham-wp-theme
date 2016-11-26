<?php

function taylorhammond_enqueue_style() {
	wp_enqueue_style( 'core', get_stylesheet_uri() );
}

function taylorhammond_enqueue_script() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), true );
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

// function the_post_thumbnail_caption() {
//   global $post;

//   $thumbnail_id    = get_post_thumbnail_id($post->ID);
//   $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

//   if ($thumbnail_image && isset($thumbnail_image[0])) {
//     echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
//   }
// }

// Add Styleselect functionality to visual post editor
// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Register custom styles in visual post editor
// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Project Info',
			'inline' => 'span',
			'classes' => 'portfolio-info',
		),  
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

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

?>