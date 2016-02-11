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
<div class="container">
	<div class="row">
		<div class="col-sm-6 text-center">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		?>
		<a href="<?php the_field("application_form_url");?>" class="btn btn-default">APPLY HERE</a> <a target="_blank" href="https://youtu.be/OEegBZNU7Jk" class="btn btn-default">WATCH VIDEO</a>
		</div>
	</div>
	
	<hr>
	
	<?php include("_social_block.php");?>
	<hr>
	<!-- end Seciotn 2-->
	<!-- SPEAKERS : MODERATOR/KEYNOTE -->
	<div class="row">
		<div class="col-sm-6 text-center">
				<?php $post_object = get_field('moderator');
				if( $post_object ): 
					$post = $post_object;
					setup_postdata( $post ); 
					?>
				    <div>
							<?php the_post_thumbnail(array(150, 150));?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    	<p><?php the_content(); ?></p>
							<a href="<?php the_permalink(); ?>">View more about this speaker</a>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
		<div class="col-sm-6 text-center">
				<?php $post_object = get_field('keynote');
				if( $post_object ): 
					$post = $post_object;
					setup_postdata( $post ); 
					?>
				    <div>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    	<p><?php the_content(); ?></p>
							<a href="<?php the_permalink(); ?>">View more about this speaker</a>
				    </div>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
		</div>
	</div>
	
	<hr>
	<!-- loop through all the speakers here just like in Presto with the cards -->
	<div class="row">
		<?php
		
			foreach (get_field('speakers') as $post) : setup_postdata($post); 
			?>
		    <div class="col-md-3 col-sm-6 mini">
		      <div class="featurette text-center">
		        <div class="featurette-text">
							<?php the_post_thumbnail(array(100, 100));?>
		          <h5><?php the_title();?></h5>
		          
		          <p><em><?php the_field("title");?></em></p>
		          <p><?php the_field("about");?></p>
							
		        </div>
		        <div class="arrow-container"><a href="<?php the_permalink();?>" title="<?php the_title();?>" class="arrow-button">Read the full bio here</a></div>
		      </div>
		    </div>
		  <?php endforeach; 
		
		wp_reset_postdata();		?>
	</div>
	<hr>
	

	<!-- End speakers-->
	
	<!-- begin Schedule - move me to content-->
	<table class="table table-hover">
		
		<tr>
		<th>TIME SLOT</th>
		<th>TITLE OF SEESION</th>
		<th></th>
		<th></th>
	
	</tr>
	<tr>
		<td>8:30-9:00</td>
		<td colspan="3">ARRIVAL BREAKFAST BUFFET
			<br><small>Served in the main dining room</small>
		</td>
	</tr>
	<tr>
		<td>9:00-9:30</td>
		<td>TITLE OF DISCUSSION
			<br><small>Nora Yonng/Spark</small>
		</td>
		<td>TITLE OF DISCUSSION 2
			<br><small>Nora Yonng/Spark</small>
		</td>
		<td>TITLE OF DISCUSSION 3
			<br><small>Nora Yonng/Spark</small>
		</td>
	</tr>
	<tr>
		<td>9:30-10:30</td>
		<td colspan="3">TITLE OF DISCUSSION
			<br><small>Nora Yonng/Spark</small>
		</td>
	</tr>
	<tr>
		<td>9:00-9:30</td>
		<td>TITLE OF DISCUSSION
			<br><small>Nora Yonng/Spark</small>
		</td>
		<td>TITLE OF DISCUSSION 2
			<br><small>Nora Yonng/Spark</small>
		</td>
		<td>TITLE OF DISCUSSION 3
			<br><small>Nora Yonng/Spark</small>
		</td>
	</tr>
	<tr>
		<td>9:30-10:30</td>
		<td colspan="3">TITLE OF DISCUSSION
			<br><small>Nora Yonng/Spark</small>
		</td>
	</tr>
	
		
	</table>
	
	
	<!-- end schedule-->
	

	
	
</div><!-- .content-area -->




<?php get_footer(); ?>
