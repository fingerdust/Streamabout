// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function() {
  var width = $( window ).width(); 
  var height = (width * 9 * 0.8) / 16;  
  $( ".banner" ).css('height',  height);
  $( ".banner" ).css('width',  width);
  // $( ".banner-video" ).css('height',  height);
  $( ".banner-link" ).css('margin-top',  height/1.6);
  $(".swiper-container").css('height',  height);


});

$( window ).resize(function() {
  var width = $( window ).width(); 
  var height = (width * 9 *0.8) / 16;  
  $( ".banner" ).css('height',  height);
  $( ".banner" ).css('width',  width);
  // $( ".banner-video" ).css('height',  height);
  $( ".banner-link" ).css('margin-top',  height/1.6);
  $(".swiper-container").css('height',  height);

});

