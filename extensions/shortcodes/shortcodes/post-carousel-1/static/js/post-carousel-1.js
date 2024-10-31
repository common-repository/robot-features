/**
 * ROBOT FULLWIDTH
 *
 */
jQuery(function( $ ){
	$(rbtfwfunction);
	$(window).on('resize',rbtfwfunction);
	
	function rbtfwfunction() {
		var mediaWidth = $('#rbt-page-holder').width();
		
		$('.rbt-fullwidth').css({ 'width': mediaWidth+'px' });
	}
});
