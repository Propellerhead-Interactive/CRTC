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
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">
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
  <!-- Google Tag Manager -->
  	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MDT8XD"
  	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  	})(window,document,'script','dataLayer','GTM-MDT8XD');</script>
  	<!-- End Google Tag Manager -->
  
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
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
            
						<img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            
          <?php else: ?>
            <img src="/wp-content/uploads/2016/03/disc_summit_logo_fr.png"  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <?php endif; ?>
					</a>
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
					?><a href="<?php echo wp_logout_url( home_url() ); ?>"><?php _e("Logout");?></a>
         
					<div class="clearfix"></div> 
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