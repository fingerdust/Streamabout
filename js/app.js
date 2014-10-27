// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(function() {
  var width = $( window ).width(); 
  var height = (width * 864) / 1920;  
  $( ".banner" ).css('height',  height);
});

$( window ).resize(function() {
  var width = $( window ).width(); 
  var height = (width * 864) / 1920;  
  $( ".banner" ).css('height',  height);
});