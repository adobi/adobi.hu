(function($) {
	
	$.notify = function(options) {
		
		options = $.extend({}, $.notify.defaults, options);
		
		var flash;
		
		if(!$('.flash-message').length) {
			
			flash = build(options);
			
		}
		else {
			flash = $('.flash-message');
		}
		
		flash
			.showFlashMessage(options.slideTime, options.showTime);
			
		if(options.hideOnClick)
			flash.hideOnClick(options.slideTime);

	};
	
	var build = function (options) {
		
		flash = $('<div class = "flash-message"></div>');
		
		var flashCss = {
			position: 'fixed',
			top: '0px',
			left: '0px',
			width: '100%',
			zIndex: 10000,
			margin: '0px',
			borderBottom: '3px solid #cfcfcf',
			color: '#444444',
			backgroundColor: '#ffffff',
			textAlign: 'center',
			padding: '10px 0',
			fontSize: '1.6em',
			cursor: 'pointer',
			display: 'none'
		};
		
		flashCss = $.extend({}, flashCss, options.outerStyle);
		
		var message = $('<div></div>');
		
		var messageCss = {};
		messageCss = $.extend({}, messageCss, options.innerStyle);
		message.css(messageCss).html(options.message);
		
		flash.css(flashCss).html(message);
		
		$('body').prepend(flash);
		
		return flash;		
	};
	
	var resetTimeout = function () {
		
		if($.notify.timeoutId !== undefined) {
			
				clearTimeout($.notify.timeoutId);
				$.notify.timeoutId = undefined;
		}
	};
	
	$.fn.showFlashMessage = function(slideTime, showTime) {
		
		return this.each(function() {
			
			var self = $(this);
			
			var callback = function() { self.hideFlashMessage(slideTime); };
			
			if(self.is(':hidden')) {
				
				self.slideDown(slideTime, function() { $.notify.timeoutId = setTimeout(callback, showTime); });
			}	
		});
	};
	
	$.fn.hideFlashMessage = function(slideTime) {
		
		return this.each(function() {
			
			$(this)
				.slideUp(slideTime);
				
			resetTimeout();	
		});
	};
	
	$.fn.hideOnClick = function(slideTime) {
		
		return this.each(function() {
			
			var self = $(this);
			
			self.bind('click', function() {
				
				resetTimeout();	

				$(this).slideUp(slideTime);
	
				return false;
			});
		});
	};
	
	$.notify.defaults = {
		slideTime: 300,
		showTime: 3000,
		hideOnClick: true,
		message: '',
		outerStyle: {},
		innerStyle: {}
	};
	
}) (jQuery); 