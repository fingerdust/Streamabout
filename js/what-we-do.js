$(document).foundation();

window.onload = function() {
	var width = $( window ).width(); 
	$('.scroll-box').css('height', width*0.15);
	$('.scroll-box').perfectScrollbar({
		suppressScrollX: true,
		minScrollbarLength: 30
	}); 
	var height = $('.banner-side-text').parent().height(); 
	if($('.banner-side-text').height() > height){
		$('.banner-side-text').css('height', height); 
		$('.banner-side-text').perfectScrollbar({
			suppressScrollX: true,
			minScrollbarLength: 30,
			maxScrollbarLength: 70,
			includePadding: true
		}); 
	}

};

$(window).resize(function() {
  var width = $( window ).width(); 
  $('.scroll-box').css('height', width*0.15);
	$('.scroll-box').perfectScrollbar({
		suppressScrollX: true,
		minScrollbarLength: 30
	}); 
	var height = $('.banner-side-text').parent().height(); 
	if($('.banner-side-text').height() > height){
		$('.banner-side-text').css('height', height); 
		$('.banner-side-text').perfectScrollbar({
			suppressScrollX: true,
			minScrollbarLength: 30,
			maxScrollbarLength: 70
		}); 
	}

}); 