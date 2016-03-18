<?php /* Template Name: Community Page */ ?>

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
      <div class="col-md-5 col-md-offset-1">
        <?php the_field('hero_content'); ?>
      </div>
    </div>
  </div>
  <svg viewBox="0 0 200 10" class="svg-bottom" preserveAspectRatio="xMaxYMax meet">
    <polygon points="0,0 0,10 200,10" class="__gray"></polygon>
    <polygon points="-1,-0.1 -1,7 80,4" class="__green"></polygon>
  </svg>
</div>

<div class="section __gray">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <?php the_field("section_2")?>
      </div>
    </div>
    <hr />
    <div class="row">

        <?php
          
      
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args=array(
            'post_type' => 'post',
            'showposts'=>6,
            'paged' => $paged
          );
          $wp_query = new WP_Query($args);
          
       ?>
        <?php if( $wp_query->have_posts() ) {
          $i = 1;
           while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              <div class="col-sm-4">
                <div class="card">
                  <div class="card-image" style="background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"medium")[0];?>')"></div>
                  <div class="card-content">
                    <p class="small"><?php echo mysql2date('j M Y',$post->post_date); ?></p>
                    <p class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                    <p class="post-excerpt">
                      <?php echo apply_filters('the_excerpt',get_the_excerpt().'<a href="'.get_permalink().'" class="read-more"> '._e( 'Read more').' "</a>'); ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php
              if($i == 3 || $i == 6 ){
                echo '</div><div class="row">';
              } ?>
         <?php
            $i++;
            endwhile;
          }
      ?> 

     <?php wpbeginner_numeric_posts_nav($wp_query); 
    
     wp_reset_query();

    ?>
    </div>
  </div>
</div>
<div class="section __green">
  <svg viewBox="0 0 200 10" class="svg-top" preserveAspectRatio="xMinYMin slice">
    <polygon points="0,0 200,0 0,10" class="__gray"></polygon>
  </svg>
  <div class="container">
    <div class="row">
      <?php include("_social_block.php");?>
    </div>
  </div>
</div>  

<div class="section __white blog-posts">
  <svg viewBox="0 0 200 10" class="svg-top" preserveAspectRatio="xMinYMin slice">
    <polygon points="200,0 200,7 100,0" class="__teal"></polygon>
    <polygon points="-1,0 200,-0.02 -1,10" class="__green"></polygon>
  </svg>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <?php include("_newsletter.php");?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
