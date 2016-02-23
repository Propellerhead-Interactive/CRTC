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
	<!-- end Seciotn 2-->
	<!-- SPEAKERS : MODERATOR/KEYNOTE -->
	<?php include("_headline_speakers.php");?>
	
	
	<hr>
	<!-- loop through all the speakers here just like in Presto with the cards -->
	<?php include("_all_speakers.php");?>
	<hr>
	
	<?php include("_social_block.php");?>
	
	
	<hr>
	
	

	<!-- End speakers-->
	
	<!-- begin Schedule - move me to content-->

	<?php include("_session_schedule.php");?>
	
	<hr>
	<!-- end schedule-->
	<div class="row">
		<div class="col-sm-6 text-center">
			<h3>* EDITOR'S PICK</h3>
				<div style="min-height:300px;border-radius:30px;border:solid 1px #ccc;">
				<?php $post = get_field("featured_post"); ?>
					<?php
						
					global $post;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post'); 
					
					?>
					
					<img style="width:100%" src="<?php echo $thumb[0];?>"/>
					
						<div style="padding:10px">
						<?php echo $post->post_date;  ?>
						<h4><A href="<?php echo get_permalink($post);  ?>"><?php echo $post->post_title;  ?></a></h4>
			
							<?php echo $post->post_excerpt;  ?>
						</div>
				</div>
		</div>
		<div class="col-sm-6 text-center">
				<h3>RECENT POSTS</h3>
				<div class="text-left">
					
					<?php echo do_shortcode('[rpwe limit="3"]');?>
				</div>
		</div>
	</div>
		
<hr>
	
	
	
</div><!-- .content-area -->

<?php include("_newsletter.php");?>


<?php get_footer(); ?>
