	<div class="row">
		<?php
		
			foreach (get_field('speakers') as $post) : setup_postdata($post); 
			?>
				<div class="col-sm-3 text-center">
	        <p><?php the_post_thumbnail(array(200, 200));?></p>
	        <p class="speaker-name"><?php the_title();?></p>
	        <p class="muted"><?php the_field("title");?></p>
	        <p><?php the_field("about");?></p>
	        <p><a href="<?php the_permalink();?>" title="<?php the_title();?>" class="arrow-button">Read the full bio here</a></p>
	      </div>
		  <?php endforeach; 
		
		wp_reset_postdata();		?>
	</div>