		<div class="row">
		<?php
		  $i = 1;
			foreach (get_field('speakers') as $post) : setup_postdata($post); 
			?>
			
				<div class="col-sm-3 col-xs-12 text-center">
	        <p><?php the_post_thumbnail(array(200, 200));?></p>
	        <p class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	        <p class="muted"><?php the_field("title");?></p>
	        <p><?php the_field("about");?></p>
	        <p><a href="<?php the_permalink();?>" title="<?php the_title();?>" class="arrow-button">Read the full bio here</a></p>
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
				
		  <?php endforeach; 
		
		wp_reset_postdata();		?>
		</div>
