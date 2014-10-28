// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function() {
  var width = $( window ).width(); 
  var height = (width * 9) / 19.5;  
  $( ".banner" ).css('height',  height);
  $( ".banner-video" ).css('height',  height);
  $( ".banner-link" ).css('margin-top',  height/1.6);
  $(".swiper-container").css('height',  height);


});

$( window ).resize(function() {
  var width = $( window ).width(); 
  var height = (width * 9) / 19.5;  
  $( ".banner" ).css('height',  height);
  $( ".banner-video" ).css('height',  height);
  $( ".banner-link" ).css('margin-top',  height/1.6);
  $(".swiper-container").css('height',  height);

});

