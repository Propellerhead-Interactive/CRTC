<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage CRTC
 * @since CRTC 2.0
 */

get_header(); ?>
<div class="container">
<div class="row">
  <div class="col-sm-12">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e("404 Error");?></h1>
            <h3><?php _e( 'Unfortunately the page you were looking for does not exist', 'twentysixteen' ); ?></h3>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Don\'t worry! You can always: <A href="http://discoverability.ca">go to homepage</a>', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

</div></div></div>
<?php get_footer(); ?>
