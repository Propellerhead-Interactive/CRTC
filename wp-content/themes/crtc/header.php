<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage CRTC
 * @since CRTC 2.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<!-- Bootstrap core CSS -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/libs/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/theme.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/disc_summit_logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu'              => 'Social',
              'depth'             => 2,
              'container'         => '',
              'container_id' 			=> '',
              'container_class'   => '',
              'menu_class'        => 'nav navbar-nav navbar-nav-small navbar-right',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker()
						 ) );
					?>
        	<?php
						wp_nav_menu( array(
							'menu'              => 'Top',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => '',
              'container_id' 			=> '',
              'container_class'   => '',
              'menu_class'        => 'nav navbar-nav navbar-right',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker()
						 ) );
					?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>