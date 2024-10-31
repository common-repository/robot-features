jQuery(function( $ ){
	$(rbtsliderfunction);
	$(window).on('resize',rbtsliderfunction);
	function rbtsliderfunction() {
		var mediaWidth = $('#rbt-page-holder').width();
		$('.robot-fullwidth-slider .robot-slider-holder').css({ 'width': mediaWidth+'px' });
	}
	$("#rbt-slider-section").css("display", "block");
});