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