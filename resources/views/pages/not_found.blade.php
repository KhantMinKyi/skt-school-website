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
  @import url('https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap');
  </style>
</head>
	<!-- START PRELOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
	<!-- END PRELOADER -->
			<!-- START SECTION TOP -->
            <section class="section-top">
                <div class="container">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                            <h1>Page Not Found</h1>
                        </div><!-- //.HERO-TEXT -->
                    </div><!--- END COL -->
                </div><!--- END CONTAINER -->
            </section>	
            <!-- END SECTION TOP -->
        
            <!-- START 404 -->
            <section class="zero_area section-padding">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                            <div class="error_page">
                                <img src="{{asset('assets/images/all-img/404.svg')}}" class="img-fluid" alt="404 error" />
                                <h2>Oops! Page not found</h2>
                                <p>Hmm. We’re having trouble finding that site. Try again later or Check your network connection.</p>
                                <div class="home_btn">
                                    <a href="/" class="btn_one">Back to Home</a>
                                </div>	
                            </div>
                      </div><!--- END COL -->				  
                    </div><!--- END ROW -->
                </div><!--- END CONTAINER -->
            </section>
            <!-- END 404 -->
<body>
	{{-- {{Auth::user() ?? 'No User '}} --}}
    	
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