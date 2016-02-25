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

<div class="hero mini-hero" style="background-color: #00a59b">
  <div class="nodes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
				<?php the_title( '<h1>', '</h1>' ); ?>        
      </div>
    </div>
  </div>
  <svg viewBox="0 0 100 10" class="svg-bottom">
    <polygon points="0,5 0,10 50,10" class="__pink"></polygon>
    <polygon points="100,0 0,10 100,10" class="__gray"></polygon>
  </svg>
</div>

<div class="section __gray main-speakers">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
       <?php
				// Start the loop.
				while ( have_posts() ) : the_post();?>

				
				<div class="row">
					<div class="col-sm-3 text-center">
						<p><?php the_post_thumbnail(array(265, 265));?></p>
						<p><em><?php the_field("title");?></em></p>
		    		<p><?php the_field("about");?></p>
					</div>
					<div class="col-sm-9">
						<?php the_content(); ?>
					</div>
				</div>
				<?php 
				endwhile;
				?>
       </div>
     </div>
    </div>
  </div>
</div>
	
<?php get_footer(); ?>
