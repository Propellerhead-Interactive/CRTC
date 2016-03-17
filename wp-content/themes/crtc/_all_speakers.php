		<?php
		  $i = 1;
     
			foreach (get_field('speakers') as $post) : setup_postdata($post); 
			?>
				<div class="col-sm-3 col-xs-12 text-center">
	        <p><?php the_post_thumbnail(array(200, 200));?></p>
	        <p class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	        <p class="muted"><?php the_field("title");?></p>
	        <p><?php the_field("about");?></p>
	        <p><a href="<?php the_permalink();?>" title="<?php the_title();?>" class="arrow-button"> <?php
           if(ICL_LANGUAGE_CODE=='en'){
             echo "Read ".get_the_title()."’s biography";
           }else{
             echo "Lire la biographie complète de ".get_the_title();
           }
            ?> </a></p>
	      </div>
	              <?php
	              if($i == 4  ){
	                echo '</div><div class="row">';
	              } 
	            $i++;
	      ?>
		  <?php endforeach; 
			wp_reset_postdata();		?>
