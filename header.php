<!DOCTYPE html>
<html <?php language_attributes(); ?><?php if ( is_front_page() ) { ?>id="front-page-html"<?php } ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php if ( is_page_template( array( 'page-templates/image-background-thought.php', 
                                            'page-templates/image-background-performance.php' ) ) ) { ?>
          style="color:#e5e5e5;" <?php // Off-white font for pages with shaded full image background. ?>
        <?php } ?>
        <?php if ( is_front_page() ) { ?>
          id="front-page-body">
        <?php } else { ?>>
    
          <!-- Full page background image for page templates -->
          <?php if ( is_page_template( array( 'page-templates/image-background-thought.php', 
                                            'page-templates/image-background-performance.php' ) ) ) { ?>
            <div class="full-image-background" style="
            <?php if ( has_post_thumbnail() ) {?>
              background:url(<?php the_post_thumbnail_url( 'large' ); ?>) center center/cover no-repeat fixed;
              -webkit-background-size:cover;
              -moz-background-size:cover;
              -o-background-size:cover;
              -webkit-filter: brightness(0.65);
              filter: brightness(0.65);
              content: ' ';
              position: fixed;
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              z-index: -1;
            <?php } ?>">
            </div>
          <?php } ?>
    
          <div class="page-wrapper"><!-- for sticky footer - contains navbar & page content (not footer) -->
        <?php } ?>