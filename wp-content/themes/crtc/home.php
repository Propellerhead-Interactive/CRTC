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

<div class="hero" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>')">
  <div class="nodes"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-1 text-center">
        <?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'other' );
					endwhile;
					?>
					<a href="<?php the_field("application_form_url");?>" class="btn btn-default">APPLY HERE</a> <a target="_blank" href="https://youtu.be/OEegBZNU7Jk" class="btn btn-default">WATCH VIDEO</a>
      </div>
    </div>
  </div>
  <svg viewBox="0 0 100 10" class="svg-bottom">
    <polygon points="0,0 0,10 100,10" class="__gray"></polygon>
  </svg>
</div>

<!-- SPEAKERS : MODERATOR/KEYNOTE -->
<div class="section __gray main-speakers">
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
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>AGENDA</h1>
        <div class="day-toggle">
          <a href="#" class="btn btn-default active">DAY ONE</a> 
          <a href="#" class="btn btn-default">DAY TWO</a> 
        </div>
      </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
    		<?php include("_session_schedule.php");?>
    	</div>
    </div>
  </div>
</div>

<div class="section __green">
  <svg viewBox="0 0 100 10" class="svg-top">
    <polygon points="0,0 100,0 0,10" class="__blue"></polygon>
  </svg>
  <div class="container">
    <div class="row">
      <?php include("_social_block.php");?>
    </div>
  </div>
</div>	
	
<div class="section __white blog-posts">
  <svg viewBox="0 0 100 10" class="svg-top">
    <polygon points="0,0 50,0 0,5" class="__teal"></polygon>
    <polygon points="-1,0 100,-1 100,10" class="__green"></polygon>
  </svg>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-center">
        <h3>EDITOR'S PICK</h3>
				<?php $post = get_field("featured_post"); 
					global $post;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post'); 
				?>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="card">
              <div class="card-image" style="background-image: url('<?php echo $thumb[0];?>');"></div>
              <div class="card-content">
                <p class="small"><?php echo mysql2date('j M Y',$post->post_date); ?></p>
                <p class="post-title"><a href="<?php echo get_permalink($post); ?>"><?php echo $post->post_title; ?></a></p>
                <p class="post-excerpt"><?php echo $post->post_excerpt; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 text-center">
        <h3>RECENT POSTS</h3>
        <div class="row">
        	<div class="col-sm-8 col-sm-offset-2">
        	<?php 
						$args = array( 'numberposts' => '3' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){ 
					?>
								<div class="blog-post text-left">
		              <p class="small"><?php echo mysql2date('j M Y', $recent["post_date"]); ?></p>
		              <p class="post-title"><a href="<?php get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></p>
		              <p><a href="<?php get_permalink($recent["ID"]) ?>" class="btn btn-default btn-pink btn-sm">READ MORE</a></p>
		            </div>
					<?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div><br />&nbsp;<br /><br />&nbsp;<br /></div>
    <div class="col-sm-12 text-center">
    	<?php include("_newsletter.php");?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
