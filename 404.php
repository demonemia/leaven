<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Site by Frank - www.KeyboardDevil.com -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="brewery, leaven brewing, riverview brewery, florida brewery" name="keywords">
  <meta content="Leaven Brewing - Transforming Grain for the Better" name="description">
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3474776-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-3474776-4');
  </script>
  <title>Leaven Brewing: Oh Noes!</title>  
  <link href="http://www.leavenbrewing.com/favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
  
<body>

  <!--  Header Section-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo.png" alt="Leaven Logo" title="" /></a>
      </div>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  
  <!-- Oh NOES -->
  <section id="OhNoes">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title">Oh Noes!</h2>
          <div class="section-title-divider"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <h3>What did you do?!</h3>
          <p class="about-text">Well, you broke it.  This is why we don't have nice things... Like beer.  OK beer is nice.  In fact, it's delicious! Well, OK. We have some nice things, but you still manged to break <strong>something</strong>.</p>
          <blockquote>This kind of technical failure can't go unanswered.  And that means...</blockquote>
          <h3>One of our geeks is getting <span class="fired">FIRED</span>... And <span class="you">you</span> get to choose who gets the ax!</h3>
        </div>
        <div class="col-md-2">
          <img src="img/bigPint.png" alt="Beer Pint" class="imgFloater">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="FireThem">
            <span class="fireChoice" id="adrian">FIRE Adrian!<img src="img/arrowAdrian.gif"></span>
            <a href="index.php"><img class="fireHim" name="adrian" src="img/adrian.jpg"></a>
            <a href="index.php"><img class="fireHim" name="frank" src="img/frank.jpg"></a>
            <span class="fireChoice" id="frank">FIRE Frank!<img src="img/arrowFrank.gif"></span>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--  Footer-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Leaven Brewing</strong>. All Rights Reserved
          </div>
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script>
    $('.fireHim').hover(function() {
      $(this).css( "opacity","1" );
      strID = "#"+this.name;
      $(strID).css("visibility","visible");
    },function(){
      $(this).css( "opacity",".5" );
      $(".fireChoice").css("visibility","hidden");
    });
  </script>

</body>

</html>