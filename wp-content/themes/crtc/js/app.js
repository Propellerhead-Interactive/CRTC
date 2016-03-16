(function(){
	$(document).ready(function(){
		var classList = $('#slant-footer').prev()[0].className.split(/\s+/);

		$('nav [title]').each( function() {
	    var $this = $(this);
	    $this.data('title',$this.attr('title'));
	    $this.removeAttr('title');
		});

		$('.canada-logo').removeAttr('href').css({"cursor": "default"});
		
		for (var i = 0; i < classList.length; i++) {
	    if (classList[i].indexOf('__') !== -1) {
	      $('#slant-footer').find('polygon').addClass(classList[i]);
	    }
		}
		if($('#countdown-to-event-fr')){
			$('#countdown-to-event-fr').countdown('2016/05/10', function(event) {
			  $(this).html(event.strftime('%D %H:%M:%S'));

			  $(this).html("<div><p class='h1'>" + event.strftime('%D') + "</p><small>JOURS</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%H') + "</p><small>HEURES</small></div>" +
			               "<div><p class='h1'> &nbsp;:&nbsp; </p><small>&nbsp;</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%M') + "</p><small>MINS</small></div>" +
			               "<div><p class='h1'> &nbsp;:&nbsp; </p><small>&nbsp;</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%S') + "</p><small>SECS</small></div>"
			    );
			});
    }
		if($('#countdown-to-event')){
			$('#countdown-to-event').countdown('2016/05/10', function(event) {
			  $(this).html(event.strftime('%D %H:%M:%S'));

			  $(this).html("<div><p class='h1'>" + event.strftime('%D') + "</p><small>DAYS</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%H') + "</p><small>HOURS</small></div>" +
			               "<div><p class='h1'> &nbsp;:&nbsp; </p><small>&nbsp;</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%M') + "</p><small>MINS</small></div>" +
			               "<div><p class='h1'> &nbsp;:&nbsp; </p><small>&nbsp;</small></div>" +
			               "<div><p class='h1'>" + event.strftime('%S') + "</p><small>SECS</small></div>"
			    );
			});
		}

		if($('.day-toggle')){
			$('.day-toggle').on('click', 'a', function(e){
				e.preventDefault();
				$('.agenda-table').addClass('hide');
				$($(this).data('target')).removeClass('hide');
				$('.day-toggle a').removeClass('active');
				$(this).addClass('active');

			});
		}
	});
})();