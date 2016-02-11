<?php /* Template Name: Registration Form */ ?>

<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage CRTC
 * @since CRTC 2.0
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
		

			// End of the loop.
		endwhile;
		?>
			</div>
		</div>
		<form>
		<div class="row">
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="YOUR NAME*">
				<br>
				<input type="text" class="form-control" placeholder="JOB TITLE*">
				<br>
				<input type="text" class="form-control" placeholder="PHONE NUMBER*">
				<br>
				<input type="text" class="form-control" placeholder="FOOD RESTRICTIONS*">
				<br>
				<h3>SOCiAL MEDIA ACCOUNTS</h3>
				<input type="text" class="form-control" placeholder="FACEBOOK">
			</div>
			<div class="col-sm-6">
				<input type="text" class="form-control" placeholder="COMPANY NAME*">
				<br>
				<input type="text" class="form-control" placeholder="EMAIL ADDRESS*">
				<br>
				<input type="submit" class="btn btn-primary" >
				<br>
				
				
			</div>
		</div>
		<form>

	</div>
<?php get_footer(); ?>
