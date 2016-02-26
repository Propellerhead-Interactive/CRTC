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

<div class="hero front-page" style="background-color: #d81c5c">
  <div class="nodes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
      	<?php the_field('hero_content'); ?>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
		
		the_content();
		
	endwhile;
	?>

      </div>
    </div>
  </div>
  <svg viewBox="0 0 100 10" class="svg-bottom">
    <polygon points="0,0 0,10 100,10" class="__white"></polygon>
    <polygon points="-1,-0.1 -1,7 40,4" class="__green"></polygon>
  </svg>
</div>

<div class="section __white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <?php the_field("video_message");?>
      </div>
    </div>
  </div>
</div>

<div class="section __green">
  <svg viewBox="0 0 100 10" class="svg-top">
    <polygon points="0,0 100,0 100,10" class="__white"></polygon>
  </svg>
  <div class="container">
    <div class="row">
      <?php include("_social_block.php");?>
    </div>
  </div>
</div>	

<!-- SPEAKERS : MODERATOR/KEYNOTE -->
<div class="section __gray main-speakers">
	<svg viewBox="0 0 100 10" class="svg-top">
    <polygon points="100,0 100,7 50,0" class="__teal"></polygon>
    <polygon points="-1,0 100,-0.02 -1,10" class="__green"></polygon>
  </svg>
  <div class="container">
    <div class="row">
    	<?php include("_headline_speakers.php");?>  
    </div>
  </div>
</div>
	
<div class="section __white the-experts">
  <svg viewBox="0 0 100 10" class="svg-top">
    <polygon points="0,0 100,0 100,10" class="__gray"></polygon>
  </svg>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>THE EXPERTS</h1>
      </div>
    </div>
    <div class="row">
    	<?php include("_all_speakers.php");?>
    </div>
  </div>
</div>
	
<div class="section __blue agenda">
  <svg viewBox="0 0 100 10" class="svg-top">
    <polygon points="0,0 100,0 100,10" class="__white"></polygon>
    <polygon points="100,5 100,10 50,10" class="__pink"></polygon>
    <polygon points="0,0 0,11 100,10" class="__blue"></polygon>
  </svg>
  <div class="container">
    <?php include("_session_schedule.php");?>
  </div>
</div>	

<?php get_footer(); ?>
