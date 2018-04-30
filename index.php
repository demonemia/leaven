<!DOCTYPE html>
<html lang="en">
<!-- ############
Rev 1.0 - 4/13: initial
	1.1 - 4/14: Fixed iPhone scroll issue, cleaned up HTML
	1.2 - 4/15: Fixed phone issues, updating stying in about
	1.3 - 4/16: Added analtyics
############ -->
<head>
	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3474776-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-3474776-4');
	</script>
  <meta charset="utf-8">
  <title>Leaven Brewing</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="brewery, leaven brewing, riverview brewery, florida brewery" name="keywords">
  <meta content="Leaven Brewing - Transforming Grain for the Better" name="description">

  <!-- Facebook Opengraph -->
  <meta property="og:title" content="Leaven Brewing - Transforming Grain for the Better">
  <meta property="og:image" content="http://keyboarddevil.com/leaven/img/LeavenLogoTrans.png">
  <meta property="og:url" content="http://keyboarddevil.com/leaven/">
  <meta property="og:site_name" content="Leaven Brewing - Transforming Grain for the Better">
  <meta property="og:description" content="Leaven Brewing - Riverview Florida's first brewery">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@LeavenBrewing">
  <meta name="twitter:title" content="Leaven Brewing - Transforming Grain for the Better">
  <meta name="twitter:description" content="Riverview Florida's first brewery">
  <meta name="twitter:image" content="http://keyboarddevil.com/leaven/img/LeavenLogoTrans.png">

  <link href="http://www.keyboarddevil.com/leaven/favicon.ico" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <?php
	  // Random bg image for hero
	  $heroNumber = rand(1,7);
	  echo '<style>#hero { background: url(img/hero-bg'.$heroNumber.'.jpg) top center fixed;}</style>';
  ?>
</head>

<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=371493729928919&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

  <div id="preloader"></div>

  <!--  Hero Section-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/LeavenLogoTrans.png" alt="Leaven Brewing">
        </div>
        <h1>Riverview's first brewery!</h1>
        <div class="actions">
          <a href="#beer" class="btn-get-started">Go Straight to the Beer</a>
        </div>
      </div>
    </div>
  </section>

  <!--  Header Section-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="Leaven Logo" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Our Story</a></li>
          <li><a href="#brewery">The Brewery</a></li>
		  <li><a href="#beer">Our Beer</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#contact">Contact Us</a></li>
		  <li><a href="https://www.facebook.com/leavenbrewing/"><img alt="Facebook" class="linkIcon" src="img/facebook.svg"></a></li>
		  <li><a href="https://www.instagram.com/leavenbrewing/"><img alt="Instagram" class="linkIcon" src="img/instagram.svg"></a></li>
		  <li><a href="https://twitter.com/LeavenBrewing"><img alt="Twitter" class="linkIcon" src="img/twitter.svg"></a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--  About Us-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Who is Leaven Brewing?</h3>
          <div class="section-title-divider"></div>
          <!--<p class="section-description"></p>-->
		  <h2>We are KJ and Jillian and we make beer!</h2>
		  <div id="LeavenVideo">
			<iframe width="350" src="https://www.youtube.com/embed/Ao3Nl5mHc0k?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		  <p class="about-text">It was pointed out to me the other night that what we're creating is something truly unique, and individual to us. Now, I am the first person to admit that a opening a brewery is not novel, brewing a citra-hopped pale ale is nothing extraordinary (although it is very delicious), and our concrete bar tops are nothing you haven't seen before.</p>
		  <p class="about-text"><strong>However</strong>, the makeup of who is behind Leaven Brewing is what makes this place, our place (soon to be your place) a really neat, individual, independent of other projects kind of place. </p>
		 </div>
		 <div class="col-md-8">
			  <p class="about-text">KJ has brewing experience that is unlike most others. Not to say it's better in any way - but it is different. KJ started at Fort Myers Brewing Co. and learned the process from Rob, the owner there. KJ quickly became the head brewer of Fort Myers, which went on to receive respectable awards at Best Florida Beer, and collect accolades on RateBeer. </p>
			  <p class="about-text">After FMB, KJ became the senior brewer at Brew Hub, ultimately helping other local brands to grow their beers. Brewhub, unlike FMB, was a 100bbl system (#nbd) and produced roughly around 98,000 barrels of beer a year. </p>
			  <p class="about-text">KJ is a brewer, who's learned under some super unique circumstances, but he's also now the owner of a brewery. A brewery that was built with his own hands, beer recipes written by him and brewed by him. At Leaven Brewing you are experiencing the absolute heart and soul of everything KJ has ever worked for. We are a husband and wife team who has taken everything we've had (and all of our sleep) to build a place where people can connect while drinking some dang delicious stuff. We grew this. No frills, no venture capitalists, no investment group, just us and our long list of friends that we are absolutely the most grateful for. </p>
	  </div>
		<div class="col-md-4">
			<img class="inlineAlt" src="img/aboutQuad.jpg" alt="photos"/>
		</div>
		<div class="col-md-12 signature"><br />
		  <h2>We are Leaven Brewing.</h2>
		  (and we're super excited to meet you)
		  </div>
        </div>
      </div>
  </section>

  <!--  Brewery Section-->
  <section id="brewery">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Brewery</h3>
          <div class="section-title-divider"></div>
			<h2>Here's where we make the beer!  Come on in and try a sip!</h2>
		 </div>
		<div class="col-md-8">
		  <p class="about-text">Meet <span class="brewface">Brewhouse Mc Brewface</span>, a big hunk of 304 stainless steel construction with glass manways, American made Baldor SS washdown pumps, and an available production of 5bbls. He likes long rinse cycles of brewer's no. 5 and can't resist a good caustic cycle. Most brewhouses his size don't come with automatic rakes and plows, but Brewhouse McBrewface does.</p>
		</div>
		 <div class="col-md-4">
			<img src="img/brew.jpg" class="inlineAlt" alt="Brewhouse McBrewface" />
		</div>
		<div class="col-md-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4988.62079217155!2d-82.31784807280489!3d27.856288575925834!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88007e466424b17d!2sLeaven+Brewing+Co.!5e0!3m2!1sen!2sus!4v1515555022902" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-7">
		  <p class="about-text call-out">So come on in and join us for a pint!  You can find us right in the heart of Riverview at:</p>
		  <p class="about-text call-out big-address"><i class="fa fa-map-marker"></i>11238 Boyette Rd, Riverview, FL 33569</p>
		 </div>
      </div>
	</div>
  </section>

  <!--  Our Beer-->
  <section id="beer">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Beer</h3>
          <div class="section-title-divider"></div>
		<h2 class="about-title">We make beer we like to drink, but don't worry... We'll make beer you like to drink too.</h2>
		<p class="about-text">We make beer we like to drink, but don't worry...  We'll make beer you like to drink too. We always thought it was a fun process brewing new beers, trading different styles in and out to create a set of flagships. The goal here at Leaven is to become a neighborhood brewery with a hyper-local mindset. At this time we have no intention of distribution (KJ did enough of that at previous locations.) We're here to make beer for you, Riverview! Join us at the bar, tell us the styles you like. Let's start a great conversation about beer and figure out our core beers <strong>together</strong>. </p>
		<p class="about-text">We aim to have 5 flagships which will be on at all times, and 5 rotational beers that will lend themselves to a more seasonal flair.</p>
		
		<!-- let's render some beers -->
		<?php
			// DB connection
			require 'beersDB.php';
			// Get the current list
			//$sql = 'SELECT image, name, abv, description FROM beers';
			$sql = 'SELECT * FROM beers';
			$dbOutput = $conn->query($sql);
			if ($dbOutput -> num_rows > 0) {
				while($row = $dbOutput ->fetch_assoc()) {
					$dbImage = $row["image"];
					$dbName = $row["name"];
					$dbAbv = $row["abv"];
					$dbDesc = $row["description"];
					echo "<div class=\"row\">";
					echo"<div class=\"col-md-2 beerList\">";
					echo "<img src=\"img/beers$dbImage.png\" alt=\"glass\"/>";
					echo "</div>";
					echo "<div class=\"col-md-10\">";
					echo "<h3>$dbName</h3>";
					echo "<h4>$dbAbv</h4>";
					echo "<p class=\"beerDescription\">$dbDesc</p>";
					echo "</div>";
					echo "</div>";
				}
			}
		?>
				
<!--		<div class="row">
			<div class="col-md-2 beerList">
				<img src="img/beersSnifter.png" alt="Snifter glass"/>
			</div>
			<div class="col-md-10">
				<h3>G'Boy Bailey IPA</h3>
				<h4>7.7% ABV-16oz.</h4>
				<p class="beerDescription">Heavily hopped Amarillo, Mosaic, and Citra east coast</p>
			</div>
		</div> -->

		<!--<p class="section-description"><img src="img/barley.png" alt="" width="100"><img src="img/stout.png" alt="" width="100"><img src="img/ipa.png" alt="" width="100"><img src="img/brown.png" alt="" width="100"><img src="img/creamAle.png" alt="" width="100"><img src="img/barley.png" alt="" width="100"><img src="img/stout.png" alt="" width="100"><img src="img/ipa.png" alt="" width="100"><img src="img/brown.png" alt="" width="100"></p> -->
		</div>
		</div>
	</div>
  </section>

 <!--  Events Section-->
  <section id="events">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
			<h3 class="section-title">Events</h3>
		</div>
		<div class="col-md-4">
			<!--<p class="section-description">Come and join us for a cold beer!</p>-->
			<!-- FB events -->
			<div class="fb-page" data-href="https://www.facebook.com/leavenbrewing/" data-tabs="events" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/leavenbrewing/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/leavenbrewing/">Leaven Brewing Co.</a></blockquote></div>
		</div>
		<div class="col-md-8">
			<p class="about-text">There's a lot going on over here, <strong>come and join us</strong> for special brewery events!</p>
		</div>
	</div>
	</div>
</section>

<!--
<script>
function fbResize() {
	// Javascript is awesome - Adrian sucks
	$(.fb-page).css.width('1000px');
}
</script>
-->

  <!--  Contact Section-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
			<!-- Instagram-->
			<!--<a href="https://instawidget.net/v/user/LeavenBrewing" id="link-4d744d72d5b30229f93df3ef7dfc42e95af9ae11169e950145cba328c4195a73">@LeavenBrewing</a>
			<script src="https://instawidget.net/js/instawidget.js?u=4d744d72d5b30229f93df3ef7dfc42e95af9ae11169e950145cba328c4195a73&width=400px"></script> -->
			 <div id="ContactBump">
				 <p class="about-text"><img class="linkIcon" src="img/facebook.svg" alt="Facebook">Find us on <a class="bodyLink" href="https://www.facebook.com/leavenbrewing/">Facebook!</a></p>
				 <p class="about-text"><img class="linkIcon" src="img/instagram.svg" alt="Instagram">Stalk us on <a class="bodyLink" href="https://www.instagram.com/leavenbrewing/">Instagram</a></p>
				 <p class="about-text"><img class="linkIcon" src="img/twitter.svg" alt="Twitter">Watch us on <a class="bodyLink" href="https://twitter.com/LeavenBrewing">Twitter</a></p>
				 <p class="about-text"><img class="linkIcon" src="img/email.svg" alt="Email">Go "old school" and <a href="mailto:hello@leavebrewing.com" class="bodyLink">send us an email</a></p>
			  </div>
        </div>
      </div>
<!--      <div class="row">
        <div class="col-md-3 col-md-push-2">
            <div>
              <i class="fa fa-envelope"></i>
              <p>info@leavenbrewing.com</p>
            </div>
            <div>
              <i class="fa fa-phone"></i>
              <p>813.555.1234</p>
            </div>
          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>-->
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


</body>

</html>