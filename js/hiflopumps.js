jQuery(document).ready(function ( $ ) {	
	$('.carousel').carousel();

	$('.page-numbers').addClass('pagination').addClass('pagination-lg');
	// $('.page-numbers').addClass('pager');
	$('.page-numbers .current').parent().addClass('active');


});