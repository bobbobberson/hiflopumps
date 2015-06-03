// Masonary settings to organise footer widgets
jQuery(document).ready(function($){
	$('#people').masonry({
		"containerStyle": null,
		"columnWidth": '.col-sm-4',
		"itemSelector": '.col-sm-4',
		"isAnimated": true,
		"isResizeBound": true
	});
	// $('.col-sm-4').css({'outline': '1px dotted pink'});
});