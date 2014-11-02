$(document).foundation();

window.onload = function() {
	$('.banner-side-text').fadeIn(1500);
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
	$('.thumb-slider').slick({
		slidesToShow: 5,
		centerMode: true,
		centerPadding: 10,
		variableWidth: true,
		nextArrow: '<img class="slick-next" src="./images/next-arrow.png" />',
		prevArrow: '<img class="slick-prev" src="./images/next-arrow.png" />'
	});
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
function urlChange(id) {
    var site = '//www.youtube.com/embed/' + id + '?autoplay=1&playsinline=1&rel=0&showinfo=0&theme=light&autohide=1';
    document.getElementById('player').src = site;
}