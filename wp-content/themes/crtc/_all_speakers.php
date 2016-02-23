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