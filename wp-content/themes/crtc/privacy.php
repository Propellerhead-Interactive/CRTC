<?php /* Template Name: Privacy */ ?>

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

<div class="hero mini-hero" style="background-color: #97c93c">
  <div class="nodes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
				<?php the_title( '<h1>', '</h1>' ); ?>        
      </div>
    </div>
  </div>
  <svg viewBox="0 0 200 10" class="svg-bottom" preserveAspectRatio="xMaxYMax meet">
    <polygon points="0,5 0,10 100,10" class="__pink"></polygon>
    <polygon points="200,0 0,10 200,10" class="__gray"></polygon>
  </svg>
</div>

<div class="section __gray">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>
			</div>
		</div>
	</div>
</div>
	


<?php get_footer(); ?>
