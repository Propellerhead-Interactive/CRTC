<div class="col-sm-9">
  <h1>
<?php _e("WHAT DOES <br />#DISCOVERABILITY <br />MEAN TO YOU?");?>    </h1>
  <?php echo do_shortcode(get_field("instagram"));?>
</div>
<div class="col-sm-3">
	<a class="twitter-timeline" href="https://twitter.com/hashtag/<?php echo do_shortcode(get_field("twitter_hashtag"));?>" 
    data-widget-id="<?php if(ICL_LANGUAGE_CODE=="en"){echo "658720264046252036";}else{echo "659809250638585857";}?>"><?php _e("Tweet #discoverability");?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>