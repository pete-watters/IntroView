<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Introview - The Social Video Recruitment Platform for Job Seekers and Recruiters' />

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
        <title>Introview - The Social Video Recruitment Platform for Job Seekers and Recruiters</title>		
		<!-- Meta Description -->
        <meta name="description" content="Introview - The Social Video Recruitment Platform for Job Seekers and Recruiters">
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
                        <li><a href="#customers">Customers</a></li>
                        <li><a href="#features">Features</a></li>
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
								<h3>Welcome To Introview</h3>
								<div id="works">
									<div class="work-item">
									<iframe width="400" height="250" src="https://www.youtube.com/embed/GzwlG_YYO0E" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Essential Video Recruiting Software</h3>								
						     	 <div class="message-body">
								<img src="img/gavin_teehan.jpg" class="pull-left" alt="member">
								<cms:editable name='welcome_statement' type='richtext'>
						       		<p>
						       			Introview is the leading social video recruiting platform to find and fill roles. Across the world companies and job seekers use our video job pitches, video applicant and social video recruiting software to bring motion to the recruitment process.
						       		
									<b>The video jobs platform where recruiters and jobseekers meet in motion</b> <br />
                                    <b>“Connect – Search – Network” </b> <br />
										Introview is a video powered jobs platform that connects job seekers and employers through video resumes, jobs boards, video pitches and online interviews.										
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
			<section id="customers">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Customers</h2>
							<p class="wow animated bounceInRight">
								Discover how Introview makes video the platform to hire, source and interview talent.  
								Job seeks and Recruiters use our Social Video Recruitment Platform to Connect, Search, Network and Interview.  
							</p>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>

								<cms:editable name='service_1' type='richtext'>
									<h3>CANDIDATES</h3>
									 <ul>
									 	<li>Promote yourself with video</li>
									 	<li>Reach more recruiters</li>
									 	<li>Put your best face forward</li>
									 	<li>Save time in getting that job</li>
									 </ul>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>

								<cms:editable name='service_2' type='richtext'>
									<h3>TALENT ACQUISITION SPECIALISTS</h3>
									<ul>
									 	<li>Invite candidates to video pitches</li>
									 	<li>Set questions and schedules</li>
									 	<li>View how candidates present themselves</li>
									 	<li>Schedule live video Introviews</li>
									 	<li>Find the right candidates faster</li>
									 </ul>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>

								<cms:editable name='service_3' type='richtext'>
									<h3>RECRUITMENT AND STAFFING FIRMS</h3>
									<ul>
									 	<li>Speed up the recruitment process</li>
									 	<li>Meet job seekers in motion</li>
									 	<li>Save on recruitment and travel costs</li>
									 	<li>Review video resumes and video pitches</li>
									 	<li>Reduce time and resources to fill roles</li>
									 	<li>Set specific video interview questions to selected candidates</li>
									</ul>
								</cms:editable>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			

			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
					<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Use Video to View and Review Candidates  </h2>
							</div>
					</div>
						<div class="row">
						
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<div class="clearfix">

									<cms:editable name='customer_testimonial' type='richtext'>
										<p>Why interview when you can Introview?</p>
									</cms:editable>
									</div>
								</div>
							</div>
						
						</div>
						<div class="row">
								If a picture paints a thousand words imagine how much impact video brings to the recruitment process. Video job pitches allows a recruiter to view candidates side by side to reduce time for all concerned. Introview allows recruiters to maximize their staffing efforts. It's time to see the entire talent picture with Cornerstone and make recruiting a core function of your talent management strategy. 

								Introview is the video recruitment platform to connect candidates with prospective employers and recruiters.
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
			
			<!-- portfolio section -->
			<section id="features_1">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<cms:editable name='features' type='richtext'>
								<h2>FEATURES - ???? needed?</h2>	
							</cms:editable>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>

								<cms:editable name='feature_1' type='richtext'>
									<h3>BEST FACE FORWARD</h3>
									<p>Introview video recruitment gives recruiters a real insight into a candidates verbal and presentation skills. It allows job seekers to put their best face forward in impressing potential employers. </p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>

								<cms:editable name='feature_2' type='richtext'>
									<h3>SET UP VIDEO JOB PITCHES</h3>
									<p>Create a series of questions and invite candidates to do a video pitch then watch, compare and score at your leisure.</p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>

								<cms:editable name='feature_3' type='richtext'>
									<h3>SHARE VIDEOS WITH TEAM</h3>
									<p>Introview makes it easy to share the applicant’s video with any member of the recruitment team to review when it suits.</p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<cms:editable name='feature_4' type='richtext'>
									<h3>SAVE TIME AND TRAVEL </h3>
									<p>Pre-collect personal information, skill levels and profiles about the candidates on video prior to live video or face-to-face interview. The Introview social video recruitment solution is the easier way to make the right recruiting decisions.</p>		
								</cms:editable>					
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end portfolio section -->

			<!-- portfolio section -->
			<section id="features">
				<div class="container">
					<div class="row">


					
						<div class="sec-title text-center wow animated fadeInDown">
							<cms:editable name='features' type='richtext'>
								<h2>KEY FEATURES</h2>	
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</cms:editable>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>

								<cms:editable name='feature_1' type='richtext'>
									<h3>IntroLive </h3>
									<p>Our live screen interview system for both 1-1 or live panel (up to 5 interviewers on multiple devices consecutively) 
										Invite by forwarding link to the “Introview Room"
									</p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>

								<cms:editable name='feature_2' type='richtext'>
									<h3>Online Resume </h3>
									<p>Candidates fill out a one page online Resume with 60 sec video pitch attached</p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>

								<cms:editable name='feature_3' type='richtext'>
									<h3>Social platform </h3>
									<p>Review positions advertised, review new Schedules, post pitches, positions avail automatically from our Jobs Board, News etc</p>
								</cms:editable>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<cms:editable name='feature_4' type='richtext'>
									<h3>Jobs Board</h3>
									<p>Our jobs board for both Recruiters and Candidates, easier, more efficient and faster recruitment process for all. Follow candidates , Companies and top choice positions tag</p>		
								</cms:editable>					
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			
			
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
							<form id="contact-form" action="#" method="post"  novalidate="novalidate">
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
						<p>Funded by <a href="https://www.localenterprise.ie/Fingal/" target="_blank"> <br> <img src="img/LEO-logo-NEW.jpg"></a></p>
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

			<!-- jQuery Form validation -->
	        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
			<script>
				(function($,W,D)
					{
					    var JQUERY4U = {};
					 
					    JQUERY4U.UTIL =
					    {
					        setupFormValidation: function()
					        {
					            //form validation rules
					            $("#contact-form").validate({
					                rules: {
					                    name: "required",
					                    email: {
					                        required: true,
					                        email: true
					                    },
					                    subject: {
					                        required: true,
					                        minlength: 5
					                    },
					                    message: "required"
					                },
					                messages: {
					                    name: "Please enter your firstname",
					                    subject: {
					                        required: "Please provide a password",
					                        minlength: "Your password must be at least 5 characters long"
					                    },
					                    email: "Please enter a valid email address",
					                    message: "Please enter a message"
					                },
					                submitHandler: function(form) {
					                    form.submit();
					                }
					            });
					        }
					    }
					 
					    //when the dom has loaded setup form validation rules
					    $(D).ready(function($) {
					        JQUERY4U.UTIL.setupFormValidation();
					    });
					 
					})(jQuery, window, document);
			</script>

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