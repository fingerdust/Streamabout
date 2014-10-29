<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Streamabout</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="stylesheets/app.css" />

    <link rel="stylesheet" href="stylesheets/idangerous.swiper.css">
    <script defer src="js/idangerous.swiper.js"></script>
    <script type="text/javascript">
      var mySwiper; 
      window.onload = function() {
        mySwiper = new Swiper('.swiper-container',{
          mode:'horizontal',
          loop: true,
          speed: 1600
        });  
        var vid = document.getElementById("myVideo1"); 
        var vid2 = document.getElementById("myVideo2"); 
        vid.addEventListener("ended", function(){
          mySwiper.swipeNext();
          setTimeout(vid2.play(),1600); 
        });
      }; 
    </script>
  </head>
  <body>
    <div class="wrapper"> 
      <?php include 'partials/header.php' ?>

      <div class="swiper-container" data-loop="true"  data-arrows="true" data-bullets="true" data-desktop-swipe="true" data-settings="">
        <div class="swiper-wrapper">
          <!--First Slide-->
          <div class="swiper-slide"> 
            <div class="banner-container">
             <div class="banner">
              <div class="banner-link">
                <h2><a href="#">Interactive Mazazines</a></h2>
                <a href="#"><img src="images/go.png"></a>
              </div>
            </div>
              <video  id="myVideo1" width="100%" class="banner-video" poster="videos/advertising.png" preload="auto" muted autoplay>
                <source src="videos/advertising.mp4" type="video/mp4">
                <source src="videos/advertising.webm" type="video/webm">
                <source src="videos/advertising.ogv" type="video/ogg">
              </video>
            </div>
          </div>
      
          <!--Second Slide-->
          <div class="swiper-slide">
            <div class="banner-container">

            <video id="myVideo2" width="100%" class="banner-video slider-video" poster="videos/advertising.png" preload="auto" muted >
              <source src="videos/advertising.mp4" type="video/mp4">
              <source src="videos/advertising.webm" type="video/webm">
              <source src="videos/advertising.ogv" type="video/ogg">
            </video>
            <div class="banner">
              <div class="banner-link">
                <h2><a href="#">Interactive Mazazines</a></h2>
                <a href="#"><img src="images/go.png"></a>
              </div>
            </div>
          </div>
          </div>
      
          <!--Third Slide-->
          <div class="swiper-slide"> 
            <!-- Any HTML content of the third slide goes here -->
          </div>
          <!--Etc..-->
            </div>
      </div>


      <div class="row text-banner">
        <h2>Developing Video Content that's Effective</h2>
        <p>After 3 years in business we dominate the online digital video market. With an impressive list of blue chip clients we deliver, from strategy to concept to script to develop a video or campaign that delivers results and reaches your target audience like no other medium.
              The staggering growth of online video is impressive. But it has to be really great online video! We can do that for you. You are in good company.</p>
      </div>

      <?php include 'partials/footer.php' ?>
      </div> 


      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script src="bower_components/foundation/js/foundation.min.js"></script>
      <!-- Anything Slider --> 

      <script src="bower_components/modernizr/modernizr.js"></script>
      <script src="js/app.js"></script>

    
  </body>
</html>
