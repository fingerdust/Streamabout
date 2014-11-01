<!doctype html>
<html class="no-js" lang="en">
  <?php include 'partials/head.php' ?>
  <body id="home">
    <div class="wrapper"> 

      <!-- Header -->
      <?php include 'partials/header.php' ?>


      <!-- Slider --> 
      <div class="swiper-container" >
        <div class="swiper-wrapper">
          
          <!--First Slide-->
          <div class="swiper-slide">
            <div class="banner-container">
             <div class="banner">
              <div class="banner-link" >
                <h2><a href="#">Interactive Magazines</a></h2>
                  <a href="#"><img class="go-image" src="images/go.png" onmouseover="this.src='images/go-hover.png';" onmouseout="this.src='images/go.png';"></a>
              </div>
            </div>
            <video id="myVideo1" width="100%" poster="images/magazines.jpg" class="banner-video slider-video" preload="auto" muted >
              <source src="videos/magazines.mp4" type="video/mp4">
              <source src="videos/magazines.webm" type="video/webm">
              <source src="videos/magazines.ogv" type="video/ogg">
              <img class="fallback" id="img1" src="images/magazines.jpg" alt="no-playback" >
            </video>
          </div>
          </div>

          <!--Second Slide-->
          <div class="swiper-slide">
            <div class="banner-container">
             <div class="banner">
              <div class="banner-link">
                <h2><a href="#">PR Video News Releases</a></h2>
                <a href="#"><img src="images/go.png" onmouseover="this.src='images/go-hover.png';" onmouseout="this.src='images/go.png';"></a>
              </div>
            </div>
            <video id="myVideo2" width="100%" poster="images/pr.jpg" class="banner-video slider-video" preload="auto" muted >
              <source src="videos/pr.mp4" type="video/mp4">
              <source src="videos/pr.webm" type="video/webm">
              <source src="videos/pr.ogv" type="video/ogg">
              <img class="fallback" id="img2" src="images/pr.jpg" alt="no-playback">
            </video>
          </div>
          </div>

          <!--Third Slide..-->
          <div class="swiper-slide">
            <div class="banner-container">
             <div class="banner">
              <div class="banner-link">
                <h2><a href="#">Website / Social Media Video</a></h2>
                <a href="#"><img src="images/go.png" onmouseover="this.src='images/go-hover.png';" onmouseout="this.src='images/go.png';"></a>
              </div>
            </div>
            <video id="myVideo3" width="100%" poster="images/website.jpg" class="banner-video slider-video" preload="auto" muted >
              <source src="videos/website.mp4" type="video/mp4">
              <source src="videos/website.webm" type="video/webm">
              <source src="videos/website.ogv" type="video/ogg">
              <img class="fallback" id="img3" src="images/website.jpg" alt="no-playback">
            </video>
            </div>
          </div>

          <!--Fourth Slide..-->
          <div class="swiper-slide">
            <div class="banner-container">
             <div class="banner">
              <div class="banner-link">
                <h2><a href="#">Programming</a></h2>
                <a href="#"><img src="images/go.png" onmouseover="this.src='images/go-hover.png';" onmouseout="this.src='images/go.png';"></a>
              </div>
            </div>
            <video id="myVideo4" width="100%" poster="images/program.jpg" class="banner-video slider-video" preload="auto" muted >
              <source src="videos/program.mp4" type="video/mp4">
              <source src="videos/program.webm" type="video/webm">
              <source src="videos/program.ogv" type="video/ogg">
              <img class="fallback" id="img4" src="images/program.jpg" alt="no-playback">
            </video>
            </div>
          </div>


          <!--Fifth Slide-->
          <div class="swiper-slide"> 
            <div class="banner-container">
             <div class="banner">
              <div class="banner-link">
                <h2><a href="#">Advertising</a></h2>
                <div class="go-image">
                  <a href="#"><img src="images/go.png" onmouseover="this.src='images/go-hover.png';" onmouseout="this.src='images/go.png';"></a>
                </div>
              </div>
            </div>
              <video id="myVideo5" width="100%"  poster="images/advertising.jpg" class="banner-video" preload="auto" muted>
                <source src="videos/advertising.mp4" type="video/mp4">
                <source src="videos/advertising.webm" type="video/webm">
                <source src="videos/advertising.ogv" type="video/ogg">
                <img class="fallback" id="img5" src="images/advertising.jpg" alt="no-playback" title="advertising">
              </video>
            </div>
          </div>
          <
        </div>
      </div>

      





      <!-- End of Slider --> 

        <!-- Text banner --> 
       <div class="row text-banner">
          <h2>Developing Video Content that's Effective</h2>
          <p>After 3 years in business we dominate the online digital video market. With an impressive list of blue chip clients we deliver, from strategy to concept to script to develop a video or campaign that delivers results and reaches your target audience like no other medium.
                The staggering growth of online video is impressive. But it has to be really great online video! We can do that for you. You are in good company.</p>
        </div>

        <!-- Footer --> 
        <?php include 'partials/footer.php' ?>
      </div> 


      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script src="bower_components/foundation/js/foundation.min.js"></script>
      <script src="bower_components/modernizr/modernizr.js"></script>
      <script src="js/app.js"></script>
      <script src="js/perfect-scrollbar.js"></script>
  </body>
</html>
