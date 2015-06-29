var j = jQuery;


j(document).ready(function(){
	
	Modernizr.flexbox;


	if( j('html').hasClass('no-flexbox') || j('html').hasClass('no-flexboxlegacy') ) {

		j('body').css({
			'display'		: 'block',
			'min-height'	: j(window).height()

		});

		j('footer#colophon').css({
			'bottom'	: 0
		});

		j('#page').css({
			'flex'		: 'none'
		});
	}

	j('#mobile-nav ul').slicknav();

	j('.rwd').each(function(){
		var w = j(this).get(0).naturalWidth;
		j(this).css('max-width', w);
	})

});

