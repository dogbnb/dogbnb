<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rover Sleepover</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="theme/css/bootstrap.min.css">
        <link rel="stylesheet" href="theme/css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="theme/css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="theme/css/main.css">

        <script src="theme/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<!-- <div class="extras">
						<ul>
							<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/gb.png" alt="Great Britain"> UK</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
									</ul>
								</div>
							</li>
			        		<li><a href="page-login.html">Login</a></li>
			        	</ul>
					</div> -->
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.html"><img src="theme/img/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li class="active">
							<a href="/index">Home</a>
						</li>
						<li>
							<a href="/search">Browse Hosts</a>
						</li>
						<li>
							<a href="/users/create-rover">Sign Up Rover</a>
						</li>
						<li>
							<a href="/users/create-host">Become a Host</a>
						</li>
						 @if (Auth::check())
		                <li>
		                  <a href="/logout"> Logout</a>
		                </li>
		              @else
		                <li>
		                  <a href="/login"> Login</a>
		                </li>
		              @endif
					</ul>
				</nav>
			</div>
		</div>

        <!-- Used to be Homepage Slider -->
        <div class="dog-banner">
        	
        </div>
        <!-- End Homepage Slider -->


		<!-- Services -->
        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="fa fa-calendar fa-3x"></i>
		        			<h3>Easy Communication</h3>
		        			<p>All you need is a simple profile for your Rover to schedule a sleepover with a host. You can change dates if you need to and have access to the hosts contact information.</p>		        			
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="fa fa-map-marker fa-3x"></i>
		        			<h3>User Experience</h3>
		        			<p>Browsing hosts near you that are excited to take care of your Rover is quick and simple. Once you provide your address after signing up Rover Sleepover will show you host results based on your area.</p>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<i class="fa fa-paw fa-3x"></i>
		        			<h3>Peace of Mind</h3>
		        			<p>Pictures of the host's home are required so that one can make sure their Rover will be safe and comfy. One can have peace of mind knowing their loved one won't be sitting in a kennel all day waiting for their owner.</p>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->

		<!-- Call to Action Bar -->
	   <!--  <div class="section section-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>It's a free multipurpose Bootstrap 3 template!</h3> <a href="http://www.dragdropsite.com" class="btn btn-orange">Download here!</a>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- End Call to Action Bar -->

		<!-- Testimonials -->
        <div class="section">
	    	<div class="container">
	    		<h2>Testimonials</h2>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="in-press ">
							<a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae.<br> - Sandra Collins<br> San Antonio, TX</a>

						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="in-press ">
							<a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae.<br> - Ken Caples<br> New Braunfels, TX</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="in-press ">
							<a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae.<br> - Alejandro Hernandez<br> Kerrville, TX</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials -->

		<!-- About Us -->
	    <div class="section">
			<div class="container">
				<h2>About Us</h2>
				<div class="row">
					<!-- Testimonial -->
					<div class="testimonial col-md-4 col-sm-6">
						<!-- Author Photo -->
						<div class="author-photo">
							<img src="theme/img/user1.jpg" alt="Author 1">
						</div>
						<div class="testimonial-bubble">
							<blockquote>
								<!-- Quote -->
								<p class="quote">
		                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut."
                        		</p>
                        		<!-- Author Info -->
                        		<cite class="author-info">
                        			Michael Gudowski
                        		</cite>
                        	</blockquote>
                        	<div class="sprite arrow-speech-bubble"></div>
                        </div>
                    </div>
                    <!-- End Testimonial -->
                    <div class="testimonial col-md-4 col-sm-6">
						<div class="author-photo">
							<img src="theme/img/user5.jpg" alt="Author 2">
						</div>
						<div class="testimonial-bubble">
							<blockquote>
								<p class="quote">
		                            "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
                        		</p>
                        		<cite class="author-info">
                        			Stephanie Riera
                        		</cite>
                        	</blockquote>
                        	<div class="sprite arrow-speech-bubble"></div>
                        </div>
                    </div>
					<div class="testimonial col-md-4 col-sm-6">
						<div class="author-photo">
							<img src="theme/img/user2.jpg" alt="Author 3">
						</div>
						<div class="testimonial-bubble">
							<blockquote>
								<p class="quote">
		                            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                        		</p>
                        		<cite class="author-info">
                        			Calvin Glover
                        		</cite>
                        	</blockquote>
                        	<div class="sprite arrow-speech-bubble"></div>
                        </div>
                    </div>
				</div>
			</div>
	    </div>
	    <!-- About Us -->

		<!-- Pricing Table -->
	   <!--  <div class="section">
	    	<div class="container">
	    		<h2>Pricing</h2>
	        	<div class="row"> -->
	        		<!-- Pricing Plans Wrapper -->
	        		<!-- <div class="pricing-wrapper col-md-12"> -->
        				<!-- Pricing Plan -->
						<!-- <div class="pricing-plan"> -->
							<!-- Pricing Plan Ribbon -->
							<!-- <div class="ribbon-wrapper">
								<div class="price-ribbon ribbon-red">Popular</div>
							</div>
							<h2 class="pricing-plan-title">Starter</h2>
							<p class="pricing-plan-price">FREE</p> -->
							<!-- Pricing Plan Features -->
							<!-- <ul class="pricing-plan-features">
								<li><strong>1</strong> user</li>
								<li><strong>Unlimited</strong> projects</li>
								<li><strong>2GB</strong> storage</li>
							</ul>
							<a href="index.html" class="btn">Order Now</a>
						</div> -->
						<!-- End Pricing Plan -->
					    <!-- <div class="pricing-plan">
							<h2 class="pricing-plan-title">Advanced</h2>
							<p class="pricing-plan-price">$49<span>/mo</span></p>
								<ul class="pricing-plan-features">
									<li><strong>10</strong> users</li>
									<li><strong>Unlimited</strong> projects</li>
									<li><strong>20GB</strong> storage</li>
								</ul>
							<a href="index.html" class="btn">Order Now</a>
					    </div> -->
					    <!-- Promoted Pricing Plan -->
					   <!--  <div class="pricing-plan pricing-plan-promote">
								<h2 class="pricing-plan-title">Premium</h2>
								<p class="pricing-plan-price">$99<span>/mo</span></p>
								<ul class="pricing-plan-features">
									<li><strong>Unlimited</strong> users</li>
									<li><strong>Unlimited</strong> projects</li>
									<li><strong>100GB</strong> storage</li>
								</ul>
							<a href="index.html" class="btn">Order Now</a>
					    </div>
					    <div class="pricing-plan"> -->
					    	<!-- Pricing Plan Ribbon -->
							<!-- <div class="ribbon-wrapper">
								<div class="price-ribbon ribbon-green">New</div>
							</div>
							<h2 class="pricing-plan-title">Mega</h2>
							<p class="pricing-plan-price">$199<span>/mo</span></p>
								<ul class="pricing-plan-features">
									<li><strong>Unlimited</strong> users</li>
									<li><strong>Unlimited</strong> projects</li>
									<li><strong>100GB</strong> storage</li>
								</ul>
							<a href="index.html" class="btn">Order Now</a>
					    </div>
	        		</div> -->
	        		<!-- End Pricing Plans Wrapper -->
	        	<!-- </div>
	    	</div>
	    </div> -->
	    <!-- End Pricing Table -->


		<!-- Our Clients -->
	   <!--  <div class="section">
	    	<div class="container">
	    		<h2>Our Clients</h2>
				<div class="clients-logo-wrapper text-center row">
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/canon.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/cisco.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/dell.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ea.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/ebay.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/facebook.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/google.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/hp.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/microsoft.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/mysql.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/sony.png" alt="Client Name"></a></div>
					<div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/yahoo.png" alt="Client Name"></a></div>
				</div>
			</div>
	    </div> -->
	    <!-- End Our Clients -->

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
<!-- 		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="page-blog-posts.html">Blog</a></li>
		    				<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
		    				<li><a href="page-products-3-columns.html">eShop</a></li>
		    				<li><a href="page-services-3-columns.html">Services</a></li>
		    				<li><a href="page-pricing.html">Pricing</a></li>
		    				<li><a href="page-faq.html">FAQ</a></li>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
	        			</p>
		    		</div> -->
		    		<!-- <div class="col-footer col-md-2 col-xs-6">
		    			<h3>Stay Connected</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="#" class="facebook"></a></li>
		    				<li><a href="#" class="twitter"></a></li>
		    				<li><a href="#" class="googleplus"></a></li>
		    			</ul>
		    		</div> -->
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2015 Rover Sleepover. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="theme/js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="theme/js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="theme/js/jquery.fitvids.js"></script>
        <script src="theme/js/jquery.sequence-min.js"></script>
        <script src="theme/js/jquery.bxslider.js"></script>
        <script src="theme/js/main-menu.js"></script>
        <script src="theme/js/template.js"></script>

    </body>
</html>