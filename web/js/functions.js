(function() {
	
	ADobi = {
		
		APP_URL:'http://localhost/adobi.hu/web/',
		//APP_URL:'http://adobi.hu/',
		
		FormSetup: function() {
			
			//$('input:first').focus();
			var $firstInput = $('.adobi-form input:first');
			
			$firstInput.parents('tr').addClass('focus');
			$firstInput.focus();
		
			$('.adobi-form input, .adobi-form textarea').bind('focus', function(){

				$(this).parents('tr').addClass('focus');
			});

			$('.adobi-form input, .adobi-form textarea').bind('blur', function() {
				$(this).parents('tr').removeClass('focus');
			});		
		},
		
		Portfolio: function() {
			
			$('.portfolio-item-images').each(function() {
				var self = $(this);
				var lis = self.find('.image ul li');
				var left = self.find('.left-arrow');
				var right = self.find('.right-arrow');
				
				if(lis.size() == 1) {
					left.hide(); right.hide();
				}
				
				self.parents('.portfolio-item').hide();
			});
			
			$('.pi-6').find('.left-arrow').addClass('prev');
			$('.pi-6').find('.right-arrow').addClass('next');
			$('.pi-6').find('.image').addClass('my-carousal');
			$('.pi-6').show();

			$('#header-menu a, #footer-content a').bind('click', function() {
				
				var self = $(this);
				var menu = $('#header-menu');
				
				var current = eval('('+self.attr('data')+')').id;
				var old = eval('('+menu.find('.selected').find('a').attr('data')+')').id;
				
				
				$('.pi-'+old).find('.left-arrow').removeClass('prev');
				$('.pi-'+old).find('.right-arrow').removeClass('next');
				$('.pi-'+old).find('.image').removeClass('my-carousal');
				$('.pi-'+old).hide();
				
				$('.pi-'+current).find('.left-arrow').addClass('prev');
				$('.pi-'+current).find('.right-arrow').addClass('next');
				$('.pi-'+current).find('.image').addClass('my-carousal');
				$('.pi-'+current).show();
				
				ADobi.ImageCarousel();

				menu.find('li').each(function() {
					$(this).removeClass('selected');
				});
				//self.parents('li').addClass('selected');
				menu.find('a[data={id:'+current+'}]').parents('li').addClass('selected');
				
				return false;
			});
		},
		
		ImageCarousel: function() {
			
			if($('.my-carousal').length) {
				
				$(".my-carousal").jCarouselLite({
					btnNext: ".next",
					btnPrev: ".prev",
					mouseWheel: false,
					visible: 1,
					speed: 600,
					easing: "backout"
				});	
			}
		},
		
		Tipsy: function() {

			if(document.getElementById('adobi-resume')) {
				$('#adobi-resume').tipsy({
					gravity: 's',
					fallback: 'See my resume',
					fade: true
				});
			}
			
			if(document.getElementById('adobi-portfolio')) {
				$('#adobi-portfolio').tipsy({
					gravity: 'n',
					fallback: 'See my portfolio',
					fade: true
				});
			}

		}
	};
	
}) ();


$('document').ready(function() {
	
	ADobi.FormSetup();
	ADobi.Portfolio();
	ADobi.ImageCarousel();
	
	ADobi.Tipsy();

});