var j = jQuery;


j(document).ready(function(){
	
	Modernizr.flexbox;


	if( j('html').hasClass('no-flexbox') || j('html').hasClass('no-flexboxlegacy') ) {

		j('body').css({
			'display'		: 'block',
			'min-height'	: j(window).height()

		});

		j('footer#colophon').css({
			'position'	: 'absolute',
			'bottom'	: 0
		});

		j('#page').css({
			'flex'		: 'none'
		});
	}

});

