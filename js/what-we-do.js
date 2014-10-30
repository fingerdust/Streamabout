$(document).foundation();

window.onload = function() {
	var width = $( window ).width(); 
	$('.scroll-box').css('height', width*0.15);
	$('.scroll-box').perfectScrollbar({
		suppressScrollX: true,
		minScrollbarLength: 30
	}); 


};

$(window).resize(function() {
  var width = $( window ).width(); 
  $('.scroll-box').css('height', width*0.15);
	$('.scroll-box').perfectScrollbar({
		suppressScrollX: true,
		minScrollbarLength: 30
	}); 
}); 