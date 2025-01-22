<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Penn - Education HTML Template">
		<meta name="keywords" content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
		<meta name="author" content="theme_ocean">
		<!-- SITE TITLE -->
        <title>SKT International School</title>			
        <link rel="icon" href="{{ asset('assets/images/icon/icon.png') }}" type="image/png">		
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css')}}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css')}}">				
		<!--slicknav Css-->
        <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css')}}">		
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">	
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">			
		<!-- Style CSS -->					
		<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />				
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>
            .bounce-up {
      display: inline-block;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .bounce-up:hover {
      transform: translateY(-10px); /* Move up by 10px */
      /* box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); Optional shadow for visual effect */
  }
  </style>
</head>
<body>
	{{-- {{Auth::user() ?? 'No User '}} --}}
    	<!-- START NAVBAR -->  
	<div id="navigation" class="fixed-top  bg-faded site-navigation">
		<div class="">
			<div class="row">
				<div class="col-lg-4 col-md-3 col-sm-4 text-center">
					<div class="site-logo">
						{{-- <a href="index.html"><img src="assets/images/all-img/logo.png" alt=""></a>          			        				 --}}
						<a href="/"><img src="{{asset('img/skt_logo2.png')}}" alt=""></a>	        				
					</div>
				</div><!--- END Col -->
				
				<div class="col-lg-8 col-md-9 col-sm-8 ">
					<div class="header_right ">
						<nav id="main-menu" class="ms-auto">
							<ul>
							  <li><a class="nav-link" href="/">Home <span class="ti-angle-down"></span></a>
								<ul>
									<li><a class="nav-link" href="/">Home 01</a></li>
									<li><a class="nav-link" href="index_2.html">Home 02</a></li>
									<li><a class="nav-link" href="index_3.html">Home 03</a></li>
								</ul>
							   </li>
							    <li><a class="nav-link" href="#">About <span class="ti-angle-down"></span></a>
									<ul>
										<li><a class="nav-link" href="about.html">About Us</a></li>										
										<li><a class="nav-link" href="team.html">Instructor</a></li>
										<li><a class="nav-link" href="team-details.html">Instructor Details</a></li>
										<li><a class="nav-link" href="faq.html">FAQ's</a></li>
										<li><a class="nav-link" href="event.html">Event</a></li>
										<li><a class="nav-link" href="event_single.html">Event Single</a></li>
										<li><a class="nav-link" href="error.html">404 Page</a></li>										
										<li><a class="nav-link" href="login.html">Login</a></li>
										<li><a class="nav-link" href="register.html">Register</a></li>
									</ul>
								</li>
								<li><a class="nav-link" href="course.html">Student Life <span class="ti-angle-down"></span></a>
									<ul>
										<li><a class="nav-link" href="course.html">Event & News</a></li>
										<li><a class="nav-link" href="course2.html">Courses 02</a></li>
										<li><a class="nav-link" href="course3.html">Courses 03</a></li>
										<li><a class="nav-link" href="course-sidebar.html">Course Sidebar</a></li>
										<li><a class="nav-link" href="single_course.html">Course details</a></li>
									</ul>
								</li>
								<li><a class="nav-link" href="shop.html">Education <span class="ti-angle-down"></span></a>
									<ul>
										<li><a class="nav-link" href="shop.html">Shop</a></li>
										<li><a class="nav-link" href="single_shop.html">Single Shop</a></li>
										<li><a class="nav-link" href="cart.html">Cart Page</a></li>
										<li><a class="nav-link" href="checkout.html">Checkout page</a></li>
									</ul>
								</li>
								<li><a class="nav-link" href="blog.html">Admission <span class="ti-angle-down"></span></a>
									<ul>
										<li><a class="nav-link" href="blog.html">Blog List</a></li>
										<li><a class="nav-link" href="blog_single.html">Single Blog</a></li>
									</ul>
								</li>
							    <li><a class="nav-link" href="contact.html">Contacts</a></li>
							</ul>
						</nav>
						<div id="mobile_menu"></div>
					</div>
				</div><!--- END Col -->
				{{-- <div class="col-lg-2 col-md-3 col-sm-8">
					<div class="home_lc">
						<a href="#" class="hlc">
						  <i class="ti-heart"></i>
						  <span class="gactive">0</span>
					   </a>
						<a href="#" class="hlc">
						  <i class="ti-shopping-cart-full"></i>
						  <span class="gactive">2</span>
					   </a>
                      
					</div>
					<div class="call_to_action">
						<a class="btn_one" href="login.html">Login</a>
						<a class="btn_two" href="register.html">Sign Up</a>
					</div>				
				</div> --}}
			</div>
		</div><!--- END CONTAINER -->
	</div> 	  
	<!-- END NAVBAR -->
    
@yield('content')
	<!-- START FOOTER -->
	<div class="footer section-padding">
		<div class="container">				
			<div class="row">						
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<a href="index.html"><img src="assets/images/all-img/logo2.png" alt=""></a>         
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.</p>
					</div>
					<div class="foot_social">
						<ul>
							<li><a href="#">TW</a></li>
							<li><a href="#">FB</a></li>
							<li><a href="#">INS</a></li>
							<li><a href="#">YT</a></li>
						</ul>						
					</div>				
				</div><!--- END COL -->						
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>Courses</h4>
						<ul>
							<li><a href="#">Creative Writing</a></li>
							<li><a href="#">Digital Marketing</a></li>
							<li><a href="#">SEO Business</a></li>
							<li><a href="#">Social Marketing</a></li>
							<li><a href="#">Graphic Design</a></li>
							<li><a href="#">Website Development</a></li>
						</ul>
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>Company</h4>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Affiliate Program</a></li>
							<li><a href="#">Community</a></li>
							<li><a href="#">Market API</a></li>						
							<li><a href="#">Support team</a></li>						
						</ul>
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>Contact Info</h4>
						<div class="sf_contact">
							<span class="ti-mobile"></span>
							<h3>Phone number</h3>
							<p>+88 457 845 695</p>
						</div>
						<div class="sf_contact">
							<span class="ti-email"></span>
							<h3>Email Address</h3>
							<p>example#yourmail.com</p>
						</div>
						<div class="sf_contact">
							<span class="ti-map"></span>
							<h3>Office Address</h3>
							<p>California, USA</p>
						</div>
					</div>
				</div><!--- END COL -->	
			</div><!--- END ROW -->		
			<div class="row fc">
				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="footer_copyright">
						<p>&copy; 2023. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="footer_menu">
						<ul>
							<li><a href="#">Terms of use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Cookie Policy</a></li>
						</ul>
					</div>
				</div><!-- END COL -->
			</div>				
		</div><!--- END CONTAINER -->
	</div>
	<!-- END FOOTER -->		
    	<!-- Latest jQuery -->
		<script src="{{ asset('assets/js/jquery-1.12.4.min.js')}}"></script>
        <!-- Latest compiled and minified Bootstrap -->
            <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>			
        <!-- owl-carousel min js  -->
            <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>	
        <!-- jquery.slicknav -->
            <script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>			
        <!-- magnific-popup js -->               
            <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>		
        <!-- scrolltopcontrol js -->
            <script src="{{ asset('assets/js/scrolltopcontrol.js')}}"></script>	
        <!-- jquery purecounter vanilla js -->
            <script src="{{ asset('assets/js/purecounter_vanilla.js')}}"></script>			
        <!-- WOW - Reveal Animations When You Scroll -->
            <script src="{{ asset('assets/js/wow.min.js')}}"></script>				
        <!-- scripts js -->	
            <script src="{{ asset('assets/js/scripts.js')}}"></script>				
    </body>
    </html>