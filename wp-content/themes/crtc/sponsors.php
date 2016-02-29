<?php /* Template Name: Sponsors Page */ ?>

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
	<div class="hero" style="background-color: #97c93c">
	  <div class="nodes"></div>
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	      	<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						get_template_part( 'template-parts/content', 'page' );

						// End of the loop.
					endwhile;
					?>
	      	<?php the_field('hero_content'); ?>
	      </div>
	    </div>
	  </div>
	  <svg viewBox="0 0 200 10" class="svg-bottom" preserveAspectRatio="xMaxYMax meet">
	    <polygon points="200,0 0,10 200,10" class="__white"></polygon>
	  </svg>
	</div>

<div class="section __white blog-posts">
  <div class="container">
    <div class="row">
	    <div class="col-sm-12 text-center">
	    	<?php include("_newsletter.php");?>
	    </div>
	  </div>
  </div>
</div>
<?php get_footer(); ?>
