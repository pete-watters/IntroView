<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page' />

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Introview - The Future of Video Recruitment</title>		
		<!-- Meta Description -->
        <meta name="description" content="Introview - The Future of Video Recruitment">
        <meta name="keywords" content="introview , video , recruitment">
        <meta name="author" content="Peter Watters">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
	        <link rel="stylesheet" href="css/font-awesome.min.css">
			<!-- bootstrap.min -->
	        <link rel="stylesheet" href="css/jquery.fancybox.css">
			<!-- bootstrap.min -->
	        <link rel="stylesheet" href="css/bootstrap.min.css">
			<!-- bootstrap.min -->
	        <link rel="stylesheet" href="css/slit-slider.css">
			<!-- bootstrap.min -->
	        <link rel="stylesheet" href="css/animate.css">
			<!-- Main Stylesheet -->
	        <link rel="stylesheet" href="css/main.css">

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body"><img src="img/logo.jpg" /></a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#features">features</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#price">price</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!-- End Fixed Navigation  ==================================== -->
		
		<main class="site-content" role="main">
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h3>About Us</h3>
								<div id="works">
									<div class="work-item">
									<iframe width="400" height="250" src="https://www.youtube.com/embed/GzwlG_YYO0E" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Welcome To Introview</h3>								
						     	 <div class="message-body">
								<img src="img/gavin_teehan.jpg" class="pull-left" alt="member">
								<cms:editable name='welcome_statement' type='richtext'>
						       		<p>Our mission is to make a change for the better, for a much easier and more efficient recruitment process.
						       		   <b>Connect</b> candidates to recruiters and vice versa, using creative ways for candidates to stand out and be found in a <b>Search</b>. Using the power of the internet for the most important part of recruitment..... <b>Networking</b>.
						       		</p>
						       	</cms:editable>	
						     	 </div>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Service</h2>
							<p class="wow animated bounceInRight">The Key Features of Introview</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>

								<cms:editable name='service_1' type='richtext'>
									<h3>Support</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>

								<cms:editable name='service_2' type='richtext'>
									<h3>Well Documented</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>

								<cms:editable name='service_3' type='richtext'>
									<h3>Design UI/UX</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<cms:editable name='service_4' type='richtext'>
									<h3>Web Security</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>		
								</cms:editable>					
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			<!-- portfolio section -->
			<section id="features">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<cms:editable name='features' type='richtext'>
								<h2>FEATURES</h2>	
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</cms:editable>
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">							
								<img src="img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
								<figcaption class="mask">
									<cms:editable name='feature_1' type='richtext'>
										<h3>Wall street</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
									</cms:editable>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">									
									<cms:editable name='feature_2' type='richtext'>
										<h3>Wall street</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
									</cms:editable>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street" href="img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">									
									<cms:editable name='feature_3' type='richtext'>
										<h3>Wall street</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
									</cms:editable>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
								<figcaption class="mask">									
									<cms:editable name='feature_4' type='richtext'>
										<h3>Wall street</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
									</cms:editable>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">									
									<cms:editable name='feature_5' type='richtext'>
										<h3>Wall street</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
									</cms:editable>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
								<figcaption class="mask">									
									<cms:editable name='feature_6' type='richtext'>
										<h3>Wall street</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
									</cms:editable>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>What our customers say</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="img/member-1.jpg" alt="Our Clients">
									<div class="clearfix">

									<cms:editable name='customer_testimonial' type='richtext'>
										<span>Katty Flower</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</cms:editable>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			<!-- Price section -->
			<section id="price">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Price</h2>
							<p>Our price for your company</p>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Silver</span>
								<div class="value">
									<span>$</span>
									<span>24,35</span><br>
									<span>month</span>
								</div>
								<ul>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="price-table featured text-center">
								<span>Gold</span>
								<div class="value">
									<span>$</span>
									<span>50,00</span><br>
									<span>month</span>
								</div>
								<ul>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
							<div class="price-table text-center">
								<span>Diamond</span>
								<div class="value">
									<span>$</span>
									<span>123,12</span><br>
									<span>month</span>
								</div>
								<ul>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
		
					</div>
				</div>
			</section>
			<!-- end Price section -->
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>FOLLOW US</h2>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn">
									<a href="https://www.facebook.com/pages/Introview/619607721518504" target="_blank">
									<i class="fa fa-thumbs-up fa-2x"></i></a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s">
									<a href="https://twitter.com/Introviewltd" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s">
									<a href="https://www.linkedin.com/company/introview" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
								</li>			
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contact</h2>
							<p>Leave a Message</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Your Name...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Your Email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Subject...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>						
								<p><i class="fa fa-pencil"></i>Introview <span>Ormond Quay</span> <span>Dublin </span><span>Ireland</span></p><br>
								<p><i class="fa fa-phone"></i>Phone: (00353) 1-123-4567 </p>
								<p><i class="fa fa-envelope"></i>contact@introview.co</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>newsletter signup</p>
							<p>Get Cool Stuff! We hate spam!</p>
						</div>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form>
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn">
								    <a href="https://www.facebook.com/pages/Introview/619607721518504" target="_blank">
									<i class="fa fa-thumbs-up fa-3x"></i>
								    </a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s">
									<a href="https://twitter.com/Introviewltd" target="_blank">
									<i class="fa fa-twitter fa-3x"></i>
									</a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s">
									<a href="https://www.linkedin.com/company/introview" target="_blank">
									<i class="fa fa-linkedin fa-3x"></i></a>
								</li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s">
									<a href="https://www.youtube.com/channel/UCAHO0Qk8eyGJAUd0jNhRFlg" target="_blank">
									<i class="fa fa-youtube fa-3x"></i></a>
								</li>
							</ul>
						</div>
						
						<p>Copyright &copy; 2014-2015 Design By <a href="http://www.themefisher.com" target="_blank">Themefisher</a>. </p>
						<p>Developed by <a href="http://comhairleteicneolaiochta.ie/" target="_blank">Comhairle Teicneolaiochta</a></p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		

		<!-- Modernizer Script for old Browsers -->
        	<script src="js/modernizr-2.6.2.min.js"></script>
        	
		<!-- Main jQuery -->
	        <script src="js/jquery-1.11.1.min.js"></script>
			<!-- Twitter Bootstrap -->
	        <script src="js/bootstrap.min.js"></script>
			<!-- Single Page Nav -->
	        <script src="js/jquery.singlePageNav.min.js"></script>
			<!-- jquery.fancybox.pack -->
	        <script src="js/jquery.fancybox.pack.js"></script>
			<!-- Google Map API -->
			<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	        <!-- jquery easing -->
	        <script src="js/jquery.easing.min.js"></script>
	        <!-- Fullscreen slider -->
	        <script src="js/jquery.slitslider.js"></script>
	        <script src="js/jquery.ba-cond.min.js"></script>
			<!-- onscroll animation -->
	        <script src="js/wow.min.js"></script>
			<!-- Custom Functions -->
	        <script src="js/main.js"></script>

		<!-- Google analytics  -->	        
	        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-43416559-5', 'auto');
		  ga('send', 'pageview');
		
		</script>
    </body>
</html>
<?php COUCH::invoke(); ?>