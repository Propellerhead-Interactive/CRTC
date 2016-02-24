	<div class="col-sm-6 text-center">
		<?php 
			$post_object = get_field('moderator');
			if( $post_object ): 
				$post = $post_object;
				setup_postdata( $post ); 
		?>
    <h3>MODERATOR</h3>
    <p><?php the_post_thumbnail(array(265, 265));?></p>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <p class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <?php the_content(); ?>
        <p><a href="<?php the_permalink(); ?>">View more about this speaker</a></p>
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
    <h3>KEYNOTE SPEAKER</h3>
    <p><?php the_post_thumbnail(array(265,265));?></p>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <p class="speaker-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        <?php the_content(); ?>
        <p><a href="<?php the_permalink(); ?>">View more about this speaker</a></p>
      </div>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
  </div>