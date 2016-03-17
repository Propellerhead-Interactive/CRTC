	<div class="col-sm-6 text-center">
		<?php 
			$post_object = get_field('moderator');
			if( $post_object ): 
				$post = $post_object;
				setup_postdata( $post ); 
		?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <h3><?php  _e("MODERATOR");?></h3>
        <p><?php the_post_thumbnail(array(265, 265));?></p>
        <p class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <p class="muted"><?php the_field("title");?></p>
         <?php the_field("about"); ?>
        <p><a href="<?php the_permalink(); ?>"><?php
           if(ICL_LANGUAGE_CODE=='en'){
             echo "Read ".the_title()."’s biography";
           }else{
             echo "Lire la biographie complète de ".the_title();
           }
            ?></a></p>
      </div>
    </div>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
  </div>
  <div class="col-sm-6 text-center">
  	<?php 
			$post_object = get_field('keynote');
			if( $post_object ): 
				$post = $post_object;
				setup_postdata( $post ); 
		?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <h3><?php  _e("KEYNOTE SPEAKER");?></h3>
        <p><?php the_post_thumbnail(array(265,265));?></p>
        <p class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <p class="muted"><?php the_field("title");?></p>
        <?php the_field("about"); ?>
        <p><a href="<?php the_permalink(); ?>"><?php
           if(ICL_LANGUAGE_CODE=='en'){
             echo "Read ".the_title()."’s biography";
           }else{
             echo "Lire la biographie complète de ".the_title();
           }
            ?></a></p>
      </div>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
  </div>