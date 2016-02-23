<?php /* Template Name: Home page - Pre conference */ ?>

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
		<div class="col-sm-6 text-center">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		?>
		<a href="<?php the_field("application_form_url");?>" class="btn btn-default">APPLY HERE</a> <a target="_blank" href="https://youtu.be/OEegBZNU7Jk" class="btn btn-default">WATCH VIDEO</a>
		</div>
	</div>
	
	<hr>
	
	<?php include("_social_block.php");?>
	<hr>
	<!-- end Seciotn 2-->
	<!-- SPEAKERS : MODERATOR/KEYNOTE -->
	<?php include("_headline_speakers.php");?>
	
	
	<hr>
	<!-- loop through all the speakers here just like in Presto with the cards -->
	<?php include("_all_speakers.php");?>
	
	<hr>
	

	<!-- End speakers-->
	
	<!-- begin Schedule - move me to content-->

	<?php include("_session_schedule.php");?>
	
	<!-- end schedule-->
	

	
	
</div><!-- .content-area -->

<?php include("_newsletter.php");?>


<?php get_footer(); ?>
