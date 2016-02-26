<div class="row">
  <div class="col-xs-12 text-center">
    <h1>AGENDA</h1>
    	<?php 
		    if (have_rows('agenda') && have_rows('agenda_day2')):
		  ?>
				<div class="day-toggle">
		      <a href="#" class="btn btn-default active" data-target="#dayone">DAY ONE</a> 
		      <a href="#" class="btn btn-default" data-target="#daytwo">DAY TWO</a> 
		    </div>
		  <?php endif; ?>
  </div>
</div>
<div class="row">
	<div class="col-sm-12">

	    <?php 
		    if (have_rows('agenda')):
		  ?>

				<table id="dayone" class="table agenda-table">
			    <thead>
			      <tr>
			        <th width="20%">TIME SLOT</th>
			        <th></th>
			        <th>TITLE OF SESSION</th>
			      </tr>
			    </thead>
			    <tbody>
		  <?php 
		    	while (have_rows('agenda')) : the_row();
		  ?>
		    		<tr>
              <td><?php echo the_sub_field('time_slot'); ?></td>
              <td><img src="<?php echo the_sub_field('icon'); ?>"></td>
          		<td>
          			<div>
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                  	<?php 
			              	if (have_rows('sessions')):
			              		$index = 0;
					    					while (have_rows('sessions')) : the_row();
					    			?>
                    	<li role="presentation"<?php if($index == 0){ echo ' class="active"';} ?>>
                    		<a href="#section<?php echo $index; ?>" id="section<?php echo $index; ?>-tab" role="tab" data-toggle="tab" aria-controls="section<?php echo $index; ?>" aria-expanded="true">
                    			<p><?php echo the_sub_field('session_title'); ?></p>
                    			<p class="small"><?php echo the_sub_field('speaker_company'); ?></p>
                    		</a>
                    	</li>
                  	<?php
                  			$index++;
	              				endwhile;
	              			else:
	              				// no rows found
	            				endif;
	          				?>
                  </ul>
                  <div class="tab-content">
                  	<?php 
			              	if (have_rows('sessions')):
			              		$index = 0;
					    					while (have_rows('sessions')) : the_row();
					    			?>
						    			<div role="tabpanel" class="tab-pane fade in<?php if($index == 0){ echo ' active';} ?>" id="section<?php echo $index; ?>" aria-labelledby="section<?php echo $index; ?>-tab">
						    				<p><?php echo the_sub_field('session_info'); ?></p>
						          </div>
                  	<?php
	              				$index++;
	              				endwhile;
	              			else:
	              				// no rows found
	            				endif;
	          				?>
                    
                  </div>
                </div>
          		</td>
            </tr>
		  <?php 
	    		endwhile;
	    ?>
	    	  </tbody>		
				</table>
			<?php
	    	else:
		    		// no rows found
		    endif;
	    ?>

	    <?php 
		    if (have_rows('agenda_day2')):
		  ?>

				<table id="daytwo" class="table hide agenda-table">
			    <thead>
			      <tr>
			        <th width="20%">TIME SLOT</th>
			        <th></th>
			        <th>TITLE OF SESSION</th>
			      </tr>
			    </thead>
			    <tbody>
		  <?php 
		    	while (have_rows('agenda_day2')) : the_row();
		  ?>
		    		<tr>
              <td><?php echo the_sub_field('time_slot'); ?></td>
              <td><img src="<?php echo the_sub_field('icon'); ?>"></td>
          		<td>
          			<div>
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                  	<?php 
			              	if (have_rows('sessions')):
			              		$index = 0;
					    					while (have_rows('sessions')) : the_row();
					    			?>
                    	<li role="presentation"<?php if($index == 0){ echo ' class="active"';} ?>>
                    		<a href="#section<?php echo $index; ?>" id="section<?php echo $index; ?>-tab" role="tab" data-toggle="tab" aria-controls="section<?php echo $index; ?>" aria-expanded="true">
                    			<p><?php echo the_sub_field('session_title'); ?></p>
                    			<p class="small"><?php echo the_sub_field('speaker_company'); ?></p>
                    		</a>
                    	</li>
                  	<?php
                  			$index++;
	              				endwhile;
	              			else:
	              				// no rows found
	            				endif;
	          				?>
                  </ul>
                  <div class="tab-content">
                  	<?php 
			              	if (have_rows('sessions')):
			              		$index = 0;
					    					while (have_rows('sessions')) : the_row();
					    			?>
						    			<div role="tabpanel" class="tab-pane fade in<?php if($index == 0){ echo ' active';} ?>" id="section<?php echo $index; ?>" aria-labelledby="section<?php echo $index; ?>-tab">
						    				<p><?php echo the_sub_field('session_info'); ?></p>
						          </div>
                  	<?php
	              				$index++;
	              				endwhile;
	              			else:
	              				// no rows found
	            				endif;
	          				?>
                    
                  </div>
                </div>
          		</td>
            </tr>
		  <?php 
	    		endwhile;
	    ?>
	    	  </tbody>		
				</table>
			<?php
	    	else:
		    		// no rows found
		    endif;
	    ?>
    		
    	</div>
    </div>
  </div>