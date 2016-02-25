<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CRTC
 * @since CRTC 2.0
 */

get_header(); ?>
<div class="hero mini-hero" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>')">
  <div class="nodes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
				<?php the_title( '<h1>', '</h1>' ); ?>        
      </div>
    </div>
  </div>
  <svg viewBox="0 0 100 10" class="svg-bottom">
    <polygon points="0,5 0,10 50,10" class="__pink"></polygon>
    <polygon points="100,0 0,10 100,10" class="__white"></polygon>
  </svg>
</div>

<div class="section __white">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the single post content template.
					get_template_part( 'template-parts/content', 'single' );

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
