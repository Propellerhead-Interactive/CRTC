<?php /* Template Name: Index Page */ ?>

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
		<div class="col-sm-12">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );
 wp_reset_query();
		endwhile;
		?>
	</div>
</div>
<hr>
	<div class="row">
		<div class="col-sm-12">
				<?php the_field("section_2")?>
			
	</div>
</div>

<hr>
<!-- -->



  <div class="row">
    <div class="col-md-12 index-page-content-main">

   
        
        </p>
        <br /><br />
        <div class="row">
        <?php
						
				
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args=array(
              'post_type' => 'post',
              'showposts'=>6,
              'paged' => $paged
            );
            $my_query = new WP_Query($args);
						
         ?>
          <?php if( $my_query->have_posts() ) {
             while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="col-md-4">
                  <div <?php post_class( 'index-item' ); ?>>

                      <div class="index-img">
                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'medium' );
                      } ?>
                      </div>
                      <div class="index-content">
                      <h3 class="medium"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                      <span class="index-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                      
                      <p class="index-excerpt"><?php the_excerpt(); ?></p>
                      <span class="editors"><i class="fa fa-star"></i> <?php echo  _e('Editor\'s Pick', 'theme-text-domain'); ?></span>

                    </div>
                  </div>
                </div>
               <?php
              endwhile;
							 wp_reset_query();
						
  
            } //if ($my_query)
         // Restore global post data stomped by the_post().

        ?>


     </div>
		  <?php wpbeginner_numeric_posts_nav(); ?>
     
  </div>
  </div>

<!-- -->

	<hr>
	
	<?php include("_social_block.php");?>
	<hr>



</div>


<?php get_footer(); ?>
