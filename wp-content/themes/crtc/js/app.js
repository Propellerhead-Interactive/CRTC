(function(){
	$(document).ready(function(){
		var classList = $('#slant-footer').prev()[0].className.split(/\s+/);
		
		for (var i = 0; i < classList.length; i++) {
	    if (classList[i].indexOf('__') !== -1) {
	      $('#slant-footer').find('polygon').addClass(classList[i]);
	    }
		}

		if($('#countdown-to-event')){
			$('#countdown-to-event').countdown('2016/05/10', function(event) {
			  $(this).html(event.strftime('%D %H:%M:%S'));

			  $(this).html("<div><p class='h1'>" + event.strftime('%D') + "</p><small>DAYS</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%H') + "</p><small>HOURS</small></div>" +
			               "<div><p class='h1'> : </p><small>&nbsp;</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%M') + "</p><small>MINS</small></div>" +
			               "<div><p class='h1'> : </p><small>&nbsp;</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%S') + "</p><small>SECS</small></div>"
			    );
			});
		}
	});
})();