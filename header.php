<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: August 15, 2012
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );

  ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-57-precomposed.png">

  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--script and css added for flex slider -->

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_url' );?>/js/jquery.flexslider-min.js"></script>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/flexslider.css" type="text/css" media="screen" />  

     <!-- Target both sliders with the same properties -->
    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider({animation: 'slide', controlNav: false, directionNav: true,});
        $('.flexslider2').flexslider({animation: 'slide', controlNav: false, directionNav: true});
      });
    </script>
<!--script and css added for flex slider -->
<!--initialize tabs-->
      <script language="text/javascript">
      $(window).load(function () {
      $('#myTab a:last').tab('show');
      });
      </script>
  <!--initialize tabs-->

    <?php wp_head(); ?>
  </head>
  
    <!-- End Header -->
              <!-- Begin Template Content -->
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">                
