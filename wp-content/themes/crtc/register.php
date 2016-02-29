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
	<div class="hero" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>')">
	  <div class="nodes"></div>
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	      	<?php the_field('hero_content'); ?>
	      </div>
	    </div>
	  </div>
	  <svg viewBox="0 0 100 10" class="svg-bottom" preserveAspectRatio="xMaxYMax meet">
	    <polygon points="0,0 0,10 100,10" class="__blue"></polygon>
	    <polygon points="-1,-0.1 -1,7 40,4" class="__pink"></polygon>
	  </svg>
	</div>
	<div class="section __blue agenda">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'template-parts/content', 'page' );

						// End of the loop.
					endwhile;
					?>
				</div>
			</div>

		</div>
	</div>
<?php get_footer(); ?>
