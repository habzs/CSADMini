  <?php

  $topic_id ='topic_id';
  $topic_title =$_POST['topic_title'];
 //check for required fields from the form
   if ((!$_POST['topic_owner']) || (!$_POST['topic_title'])
       || (!$_POST['post_text'])) {
       header("Location: addtopic.html");
       exit;
   }
   
   //connect to server and select database
  $dbc = @mysqli_connect ('localhost:8889', 'root', 'root', 'animaroo') OR die ('Could not connect to MySQL:' . mysqli_connect_error());
  //mysqli_select_db($dbc"animaroo") or die(mysqli_connect_error());
  
  //create and issue the first query
  $add_topic = "insert into forum_topics values ('', '$_POST[topic_title]',
      now(), '$_POST[topic_owner]')";
  mysqli_query($dbc, $add_topic) or die(mysqli_connect_error());
  
  //get the id of the last query 
  $topic_id = mysqli_insert_id($dbc);
  //$topic_id = mysqli_insert_id();
  //create and issue the second query
  $add_post = "insert into forum_posts values ('', '$topic_id',
      '$_POST[post_text]', now(), '$_POST[topic_owner]')";
  mysqli_query($dbc, $add_post) or die(mysqli_connect_error());
  
  //create nice message for user
  $msg = "<P>The <strong>$topic_title</strong> topic has been created.</p>";
  ?>

  <html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>animaroo. &mdash; we groom.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

	<link rel"stylesheet" href="css/add_style.css">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 text-left">
					<div id="fh5co-logo"><a href="index.html">animaroo<span>.</span></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
									<li><a href="services.html#test">Bath</a></li>
									<li><a href="services.html#test">Grooming</a></li>
									<li><a href="services.html#test">Walk</a></li>
									<li><a href="services.html#rate">Rates</a></li>
							</ul>
						</li>

						<li><a href="products.html">Products</a></li>
						<li><a href="about.html">About</a></li>
						<li class="active"><a href="blog.html">Feedback</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="#">Login</a></li>
						

					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/shibainu.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Your Feedback</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
				<div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
					<span>Thoughts &amp; Ideas</span>
					<h2>New Topic Added</h2>
					<!--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>-->
				</div>
			</div>
			<div class="row col-md-13">  
                <div class="text-center"> 
				<?php print $msg; ?>
				<a href="showtopic.php" class="btn btn-primary">Go to Forum Page</a>
            </div>
				<!--<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 12th</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 23rd</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 24th</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>

				<div class="clearfix visible-md-block"></div>

				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 12th</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 23rd</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 24th</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				
				<div class="clearfix visible-md-block"></div>-->


			</div>
		</div>
	</div>



	
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Let's work together</span>
					<h2>Try this template for free</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p><button type="submit" class="btn btn-default">Get In Touch</button></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
						<h3>animaroo<span>.</span></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
							<li><a href="index.html">Home</a></li>
							<li><a href="services.html">Services</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
							<li><a href="products.html">Shop</a></li>
							<li><a href="about.html">About Us</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
							<li><a href="blog.html">Testimonials</a></li>
							<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
							<small class="block">&copy; 2018 Animaroo Pte Ltd </small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

