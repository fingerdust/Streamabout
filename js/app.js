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

// Slide function
var mySwiper; 

    window.onload = function() {
      mySwiper = new Swiper('.swiper-container',{
        mode:'horizontal',
        loop: true,
        speed: 1600,
        autoplay: 5000,
        initialSlide: 0,
        onlyExternal: true,
        loopAdditionalSlides: -1
    });  
    mySwiper.stopAutoplay();
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     mySwiper.startAutoplay();
    }
    var vid1 = document.getElementById("myVideo1"); 
    var vid2 = document.getElementById("myVideo2"); 
    var vid3 = document.getElementById("myVideo3"); 
    var vid4 = document.getElementById("myVideo4"); 
    var vid5 = document.getElementById("myVideo5"); 
    vid1.play();
    vid1.addEventListener("ended", function(){
      mySwiper.swipeNext();
      setTimeout(vid2.play(),1600); 
    });

    vid2.addEventListener("ended", function(){
      mySwiper.swipeNext();
      setTimeout(vid3.play(),1600); 
    });
    vid3.addEventListener("ended", function(){
      mySwiper.swipeNext();
      setTimeout(vid4.play(),1600); 
    });
    vid4.addEventListener("ended", function(){
      mySwiper.swipeNext();
      setTimeout(vid5.play(),1600); 
    });
    vid5.addEventListener("ended", function(){
      mySwiper.swipeTo(0);
      setTimeout(vid1.play(),1600); 
    });
  
  }; 

