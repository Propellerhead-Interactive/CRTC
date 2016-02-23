<?php /* Template Name: Other Cities */ ?>

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
	
	
	
	

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			
			the_content();
			
		endwhile;
		?>
	

	
		<hr>
	<div class="row">
		<div class="text-center">
	
	
		<?php the_field("video_message");?>
	
		</div>
	</div>
	<hr>
	<!-- end Seciotn 2-->
	<!-- SPEAKERS : MODERATOR/KEYNOTE -->

	
	<?php include("_social_block.php");?>
	
	
	<hr>
	
	<?php include("_headline_speakers.php");?>
	
	
	<hr>
	<!-- loop through all the speakers here just like in Presto with the cards -->
	<?php include("_all_speakers.php");?>
	<hr>

	<!-- End speakers-->
	
	<!-- begin Schedule - move me to content-->

	<?php include("_session_schedule.php");?>
	
	<hr>

	
	
	
</div><!-- .content-area -->

<?php include("_newsletter.php");?>


<?php get_footer(); ?>
