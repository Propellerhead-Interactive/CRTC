<h1><?php  _e("SIGN UP FOR <br /> OUR MAILING LIST");?></h1>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
		<form style="margin-bottom: 40px" method='get' accept-charset='UTF-8' name='oi_form' action="<?php if(ICL_LANGUAGE_CODE=='en'){echo "https://fb-subscribe-form.com/oi/1132/42034d257db5ed20ecaf7c9a6994b178";
      }else{
      echo "https://fb-subscribe-form.com/oi/1132/42034d257db5ed207f69b6e7512f50c3";
      }
      
      ?>">
			<input type="hidden" name="mailingList" value="yes"/>
			<div class="input-group">
			  <input type="text" class="form-control __placeholder-pink" name="email" placeholder="<?php  _e("EMAIL ADDRESS");?>">
			  <span class="input-group-btn">
			    <button class="btn btn-default btn-pink" type="submit"><?php  _e("SUBMIT");?></button>
			  </span>
			</div><!-- /input-group -->
		</form>
	</div>
</div>

