<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
    <div class="wrapper"> 
      <?php include 'partials/header.php' ?>
      <div>
        <video class="banner-video" poster="videos/advertising.png" autoplay loop muted id="bgvid">
         <source src="videos/advertising.mp4" type="video/mp4">
         <source src="videos/advertising.webm" type="video/webm">
          
          <source src="videos/advertising.ogv" type="video/ogg">
        </video>
      </div>




      <?php include 'partials/footer.php' ?>
    </div> 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
