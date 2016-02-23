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
		while ( have_posts() ) : the_post();?>

		
		
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php twentysixteen_post_thumbnail(); ?>
    	<p><em><?php the_field("title");?></em></p>
    	<p><?php the_field("about");?></p>
		
			<div class="entry-content">
				<?php the_content();
		endwhile;
		?>
	</div>
</div>
</div>
<?php include("newsletter.php");?>

	<?php get_footer(); ?>
