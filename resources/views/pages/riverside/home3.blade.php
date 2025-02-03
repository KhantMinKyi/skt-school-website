@php
    use App\Models\Branch;
    $skt_riverside_campus = Branch::where('branch_short_name', 'SKT-RC')->first();
@endphp
@extends('layouts.riverside_layout')
@section('content')
    <style>
        #bouncing-text span {
            display: inline-block;
            animation: bounce 1s ease infinite;
            animation-delay: calc(var(--index) * 0.5s);
            /* Offset animation timing */
            opacity: 0;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
                opacity: 1;
            }

            50% {
                transform: translateY(-10px);
            }

            75% {
                opacity: 0.8;
            }
        }

        #fading-text span {
            display: inline-block;
            opacity: 0;
            /* Start invisible */
            animation: fade-in-out 4s ease-in-out infinite;
            animation-delay: calc(var(--index) * 0.5s);
            /* Stagger animations */
        }

        /* Updated fade-in and fade-out keyframes */
        @keyframes fade-in-out {
            0% {
                opacity: 0;
                /* Fully transparent */
            }

            20% {
                opacity: 1;
                /* Fade-in transition */
            }

            70% {
                opacity: 1;
                /* Stay fully visible */
            }

            85% {
                opacity: 0;
                /* Start fade-out */
            }

            100% {
                opacity: 0;
                /* Fully transparent */
            }
        }
    </style>
    <!-- START HOME -->
    <section id="home" class="home_bg"
        style="background-image: url(assets/images/banner/home.png);  background-size:cover; background-position: center center;">
        {{-- <video autoplay loop muted playsinline class="video-background">
				<source src="img/video_bg.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12">
                    <div class="home_content">
                        <h1 id="fading-text"> <span class="color-header-text "> INSPIRING </span>
                            <span class="color-header-text "> BRILLIANCE</span>
                            <span>BUILDING</span>
                            <span> BRIGHTER</span>
                            <span> FUTURES </span>
                        </h1>
                        {{-- <p>It is a long established fact that reader will be distracted readable content of a page when.</p>						 --}}
                    </div>
                    {{-- <div class="home_btn">
							<a href="#" class="cta"><span>Explore Courses</span>
							  <svg width="13px" height="10px" viewBox="0 0 13 10">
								<path d="M1,5 L11,5"></path>
								<polyline points="8 1 12 5 8 9"></polyline>
							  </svg>
							</a>
						</div>	 --}}
                    <div class="container mb-4">
                        <div class="row">
                            <div class="col-12 " style="cursor: pointer ">
                                <img src="{{ asset($skt_riverside_campus->branch_logo) }}" width="180" class="bounce-up"
                                    alt="">
                            </div>
                            {{-- <div class="col-6 " style="cursor: pointer " >
									<img src="img/skt_city_campus.png" width="180" class="bounce-up" alt="">
								</div> --}}
                        </div>
                    </div>
                </div><!-- END COL-->
                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="home_me_img">
                        {{-- <img src="assets/images/all-img/home-image.png" class="img-fluid" alt="" /> --}}
                        <img src="img/banner-hero.png" class="img-fluid home-banner-hero" alt="" />
                        <div class="home_ps">
                            <img src="assets/images/icon/student.svg" class="mt-1" alt="" />
                            <h2>700+</h2>
                            <span>Active student</span>
                        </div>
                        <div class="home_ps2">
                            <img src="assets/images/icon/teacher.svg" class="mt-1" alt="" />
                            <h2>200+</h2>
                            <span>Teachers</span>
                        </div>
                    </div>
                </div><!-- END COL-->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END  HOME -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Quality Education</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                            ut labore.</p>
                        <a href="#" class="cta"><span>Explore</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Experienced Teachers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                            ut labore.</p>
                        <a href="#" class="cta"><span>Explore</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.4s" data-wow-offset="0">
                    <div class="single_tp">
                        <h3>Delicious Food</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                            ut labore.</p>
                        <a href="#" class="cta"><span>Explore</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOP PROMO FEATURES -->

    <!-- START ABOUT US HOME ONE -->
    <section class="ab_one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        {{-- <img src="assets/images/all-img/about1.png" class="img-fluid" alt="image"> --}}
                        <img src="{{ asset($skt_riverside_campus->branch_logo) }}" class="img-fluid" alt="image">
                        <!-- <div class="wc_year">
                                                                                            <h3><span>6k+</span> <br />Happy Clients</h3>
                                                                                           </div> -->
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>Learn new skills to go <u><span>ahead for your </span></u> career.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                            ut labore et simply.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-medall"></span>
                        <h4>Our Mission</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                    <div class="abmv">
                        <span class="ti-wand"></span>
                        <h4>Our Vision</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                    <a class="btn_one" href="about.html">Discover More</a>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START COUNTER -->
    <section id="counts" class="counts section-padding">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Some Fun Fact</h2>
                <p>Our Great <span><u>Achievement</u></span></p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-face-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="8232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Enrolled Students</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-files" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Academic Programs</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-headphone-alt" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Winning Award</p>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="ti-user" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="93" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Certified Students</p>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COUNTER -->

    <!-- START COMPANY PARTNER LOGO  -->
    <div class="partner-logo section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner_title">
                        <h3>Sister Schools! </h3>
                    </div>
                    <div class="partner">
                        <a href="#"><img src="img/sister-schools/skt_riverside_campus.png" width="140px"
                                alt="image"></a>
                        <a href="#"><img src="img/sister-schools/skt_city_campus.png" width="140px"
                                alt="image"></a>
                        <a href="#"><img src="img/sister-schools/misa.png" width="140px" alt="image"></a>
                        <a href="#"><img src="img/sister-schools/nisa.png" width="140px" alt="image"></a>
                        <a href="#"><img src="img/sister-schools/bfi.png" width="140px" alt="image"></a>
                        {{-- <a href="#"><img src="assets/images/all-img/clients/2.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/3.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/4.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/5.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/2.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/1.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/3.png" alt="image"></a>
							<a href="#"><img src="assets/images/all-img/clients/4.png" alt="image"></a> --}}
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div>
    <!-- END COMPANY PARTNER LOGO -->

    <!-- START WHY CHOOSE US-->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Penn</h2>
                <p>Find the <span><u>best features</u></span> of Penn.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-book ss_one"></span>
                            <h2><a href="single-service.html" target="_blank">Learn More Anywhere</a></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-heart ss_two"></span>
                            <h2><a href="single-service.html" target="_blank">Expert <br />Instructor</a></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-user ss_three"></span>
                            <h2><a href="single-service.html" target="_blank">Team <br />Management</a></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-eye ss_four"></span>
                            <h2><a href="single-service.html" target="_blank">Course <br /> Planing</a></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-light-bulb ss_five"></span>
                            <h2><a href="single-service.html" target="_blank">Teacher Monitoring</a></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-email ss_six"></span>
                            <h2><a href="single-service.html" target="_blank">24/7 Strong Support</a></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END WHY CHOOSE US -->

    <!--START COURSE -->
    <div class="best-cpurse section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses</h2>
                <p>Choose Our <span><u>Top Courses</u></span></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="course-slide">
                        <div class="course-img">
                            <img src="assets/images/all-img/c1.png" alt="">
                            <div class="course-date">
                                <span class="month">$49</span>
                            </div>
                        </div>
                        <div class="course-content"><a class="c_btn" href="single_course.html">Arts & Design</a>
                            <h3><a href="single_course.html">Basic Fundamentals of Interior & Graphics Design</a></h3>
                            <span><i class="fa fa-calendar"></i>3 Lessons</span>
                            <span><i class="fa fa-clock-o"></i>3h 45m</span>
                            <span><i class="fa fa-star"></i>4.9</span>
                            <span><i class="fa fa-table"></i><strong>30 Seats Available</strong></span>

                        </div>
                    </div><!--END COURSE SLIDE -->
                </div><!--END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="course-slide">
                        <div class="course-img">
                            <img src="assets/images/all-img/c2.png" alt="">
                            <div class="course-date">
                                <span class="month">$39</span>
                            </div>
                        </div>
                        <div class="course-content"><a class="c_btn" href="single_course.html">Social</a>
                            <h3><a href="single_course.html">Increasing Engagement with Instagram & Facebook</a></h3>
                            <span><i class="fa fa-calendar"></i>5 Lessons</span>
                            <span><i class="fa fa-clock-o"></i>4h 15m</span>
                            <span><i class="fa fa-star"></i>4.7</span>
                            <span><i class="fa fa-table"></i><strong>21 Seats Available</strong></span>

                        </div>
                    </div><!--END COURSE SLIDE -->
                </div><!--END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="course-slide">
                        <div class="course-img">
                            <img src="assets/images/all-img/c3.png" alt="">
                            <div class="course-date">
                                <span class="month">$29</span>
                            </div>
                        </div>
                        <div class="course-content"><a class="c_btn" href="single_course.html">Design</a>
                            <h3><a href="single_course.html">Introduction to Color Theory & Basic UI/UX</a></h3>
                            <span><i class="fa fa-calendar"></i>4 Lessons</span>
                            <span><i class="fa fa-clock-o"></i>6h 25m</span>
                            <span><i class="fa fa-star"></i>4.8</span>
                            <span><i class="fa fa-table"></i><strong>33 Seats Available</strong></span>

                        </div>
                    </div><!--END COURSE SLIDE -->
                </div><!--END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="course-slide">
                        <div class="course-img">
                            <img src="assets/images/all-img/c4.png" alt="">
                            <div class="course-date">
                                <span class="month">$59</span>
                            </div>
                        </div>
                        <div class="course-content"><a class="c_btn" href="single_course.html">Technology</a>
                            <h3><a href="single_course.html">Financial Security Thinking and Principles Theory</a></h3>
                            <span><i class="fa fa-calendar"></i>7 Lessons</span>
                            <span><i class="fa fa-clock-o"></i>7h 45m</span>
                            <span><i class="fa fa-star"></i>4.7</span>
                            <span><i class="fa fa-table"></i><strong>11 Seats Available</strong></span>

                        </div>
                    </div><!--END COURSE SLIDE -->
                </div><!--END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="course-slide">
                        <div class="course-img">
                            <img src="assets/images/all-img/c5.png" alt="">
                            <div class="course-date">
                                <span class="month">$69</span>
                            </div>
                        </div>
                        <div class="course-content"><a class="c_btn" href="single_course.html">Data Science</a>
                            <h3><a href="single_course.html">Logo Design: From Concept to Presentation</a></h3>
                            <span><i class="fa fa-calendar"></i>5 Lessons</span>
                            <span><i class="fa fa-clock-o"></i>4h 55m</span>
                            <span><i class="fa fa-star"></i>4.9</span>
                            <span><i class="fa fa-table"></i><strong>41 Seats Available</strong></span>

                        </div>
                    </div><!--END COURSE SLIDE -->
                </div><!--END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="course-slide">
                        <div class="course-img">
                            <img src="assets/images/all-img/c6.png" alt="">
                            <div class="course-date">
                                <span class="month">$99</span>
                            </div>
                        </div>
                        <div class="course-content"><a class="c_btn" href="single_course.html">Development</a>
                            <h3><a href="single_course.html">Professional Ceramic Moulding for Beginners</a></h3>
                            <span><i class="fa fa-calendar"></i>3 Lessons</span>
                            <span><i class="fa fa-clock-o"></i>3h 10m</span>
                            <span><i class="fa fa-star"></i>4.9</span>
                            <span><i class="fa fa-table"></i><strong>37 Seats Available</strong></span>

                        </div>
                    </div><!--END COURSE SLIDE -->
                </div><!--END COL -->
                <div class="col-lg-12 text-center">
                    <div class="cc_btn">
                        <a class="btn_one" href="course.html">View All Course</a>
                    </div>
                </div><!--END COL -->
            </div><!--END ROW -->
        </div><!--END CONTAINER -->
    </div>
    <!--END COURSE -->

    <!-- START COURSE PROMOTION -->
    <section class="course_promo section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="cp_content">
                        <h4>Best Online Learning Platform</h4>
                        <h2>One Platfrom & Many <span><u>Courses</u></span> For You</h2>
                        <p>From blogs to emails to ad copies, auto-generate catchy, original, and high-converting copies in
                            popular tones languages.</p>
                        <ul>
                            <li><span class="ti-check"></span>9/10 Average Satisfaction Rate</li>
                            <li><span class="ti-check"></span>96% Completitation Rate</li>
                            <li><span class="ti-check"></span>Friendly Environment & Expert Teacher</li>
                        </ul>
                    </div>
                    <div class="cp_btn">
                        <a href="#" class="cta"><span>Explore Our Courses</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="cp_img">
                        <img src="assets/images/all-img/promo.png" class="img-fluid" alt="image">
                        <!-- <div class="wc_year">
                                                                                            <h3>20 Years of Experience <br />from 2002</h3>
                                                                                           </div> -->
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END COURSE PROMOTION -->

    <!-- START NEWSLETTER -->
    <section class="newsletter_area section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
                    <div class="subs_form">
                        <h3>Subscripbe to our newsletter, We don't make any spam.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim</p>
                        <form action="#" class="home_subs">
                            <input type="text" class="subscribe__input" placeholder="Enter your Email Address">
                            <button type="button" class="subscribe__btn"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END NEWSLETTER -->

    <!-- START TOPIC-->
    <section class="topic_content_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Start Learning </h2>
                <p>Popular <span><u>Topics To Learn</u></span> From Today.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca">
                        <img src="assets/images/icon/ct1.svg" alt="" />
                        <h2><a href="#">UI/UX Design</a></h2>
                        <span>71 Courses</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca">
                        <img src="assets/images/icon/ct2.svg" alt="" />
                        <h2><a href="#">Digital Program</a></h2>
                        <span>59 Courses</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca">
                        <img src="assets/images/icon/ct3.svg" alt="" />
                        <h2><a href="#">Finance</a></h2>
                        <span>68 Courses</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca">
                        <img src="assets/images/icon/ct4.svg" alt="" />
                        <h2><a href="#">Modern Physics</a></h2>
                        <span>83 Courses</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca">
                        <img src="assets/images/icon/ct5.svg" alt="" />
                        <h2><a href="#">Music Production</a></h2>
                        <span>37 Courses</span>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca">
                        <img src="assets/images/icon/ct6.svg" alt="" />
                        <h2><a href="#">Data Science</a></h2>
                        <span>51 Courses</span>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <!-- START EVENT -->
    <section class="our-event section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Upcoming Events</h2>
                <p>Join With Us <span><u>Our Events</u></span></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="event-slide">
                        <div class="event-img">
                            <img src="assets/images/event/e1.png" alt="">
                            <div class="event-date">
                                <span class="date">20</span>
                                <span class="month">Oct</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event.html">Electrical Engineering of Batparder new event</a></h3>
                            <span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
                            <span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
                            <p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
                        </div>
                    </div><!-- END EVENT -->
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="event-slide">
                        <div class="event-img">
                            <img src="assets/images/event/e2.png" alt="">
                            <div class="event-date">
                                <span class="date">22</span>
                                <span class="month">Oct</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event.html">Architecture Design of International Art Fair 2023</a></h3>
                            <span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
                            <span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
                            <p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
                        </div>
                    </div><!-- END EVENT -->
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="event-slide es">
                        <div class="ed_mb">
                            <span class="date">26</span>
                            <span class="month">Oct</span>
                        </div>
                        <div class="event-content ec_pd">
                            <h3><a href="event.html">Chiter astana event</a></h3>
                            <span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
                            <span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
                            <p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
                        </div>
                    </div><!-- END EVENT -->
                    <div class="event-slide es">
                        <div class="ed_mb">
                            <span class="date">29</span>
                            <span class="month">Oct</span>
                        </div>
                        <div class="event-content ec_pd">
                            <h3><a href="event.html">Dasel Bhai Program</a></h3>
                            <span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
                            <span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
                            <p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
                        </div>
                    </div><!-- END EVENT -->
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END EVENT -->

    <!-- START TESTIMONIALS-->
    <section class="testi_home_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Testimonial</h2>
                <p>What Says <span><u>Our Students</u></span></p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.
                                </p>
                            </div>
                            <div class="testi_pic_title tpt_one">
                                <div class="pic">
                                    <img src="assets/images/all-img/t1.png" alt="">
                                </div>
                                <h4>James Clayton</h4>
                                <small class="post">- Design Expert</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.
                                </p>
                            </div>
                            <div class="testi_pic_title tpt_two">
                                <div class="pic">
                                    <img src="assets/images/all-img/t2.png" alt="">
                                </div>
                                <h4>James Simmons</h4>
                                <small class="post">- Marketing Expert</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.
                                </p>
                            </div>
                            <div class="testi_pic_title tpt_three">
                                <div class="pic">
                                    <img src="assets/images/all-img/t3.png" alt="">
                                </div>
                                <h4>Alex feroundo</h4>
                                <small class="post">- Founder</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.
                                </p>
                            </div>
                            <div class="testi_pic_title tpt_one">
                                <div class="pic">
                                    <img src="assets/images/all-img/t4.png" alt="">
                                </div>
                                <h4>Kallu Mastan</h4>
                                <small class="post">- Mastan group</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                        <div class="testimonial">
                            <div class="testimonial_content">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor.
                                </p>
                            </div>
                            <div class="testi_pic_title tpt_two">
                                <div class="pic">
                                    <img src="assets/images/all-img/t1.png" alt="">
                                </div>
                                <h4>Devid max</h4>
                                <small class="post">- Max iNC</small>
                            </div>
                        </div><!-- END TESTIMONIAL -->
                    </div><!-- END TESTIMONIAL SLIDER -->
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TESTIMONIALS -->

    <!-- START TEAM-->
    <section class="team_home_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Team Member</h2>
                <p>Our Expert <span><u>Instructors</u></span></p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single-team-home">
                        <div class="img"><img src="assets/images/all-img/team1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-content-home">
                            <h3>Marina Mojo</h3>
                            <p>Developer</p>
                            <div class="sth_det">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>12 Student</u></span>
                            </div>
                            <ul class="social-home">
                                <li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single-team-home">
                        <div class="img"><img src="assets/images/all-img/team2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-content-home">
                            <h3>Ayoub Fennouni</h3>
                            <p>Logo Expert</p>
                            <div class="sth_det">
                                <span class="ti-file"> <u>5 Course</u></span>
                                <span class="ti-user"> <u>7 Student</u></span>
                            </div>
                            <ul class="social-home">
                                <li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single-team-home">
                        <div class="img"><img src="assets/images/all-img/team3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-content-home">
                            <h3>Mark Linomi</h3>
                            <p>Marketer</p>
                            <div class="sth_det">
                                <span class="ti-file"> <u>9 Course</u></span>
                                <span class="ti-user"> <u>17 Student</u></span>
                            </div>
                            <ul class="social-home">
                                <li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single-team-home">
                        <div class="img"><img src="assets/images/all-img/team4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="team-content-home">
                            <h3>Amira Yerden</h3>
                            <p>UI/UX Designer</p>
                            <div class="sth_det">
                                <span class="ti-file"> <u>15 Course</u></span>
                                <span class="ti-user"> <u>31 Student</u></span>
                            </div>
                            <ul class="social-home">
                                <li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- END COL -->
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>
    <!-- END TEAM -->

    <!-- START BLOG -->
    <section id="blog" class="blog_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>News</h2>
                <p>Our Latest <span><u>Blogs</u></span></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_blog">
                        <div class="content_box">
                            <span>August 25, 2023 | <a href="blog_single.html">Design</a></span>
                            <h2><a href="blog_single.html">Professional Mobile Painting and Sculpting</a></h2>
                            <a href="#" class="cta"><span>READ MORE</span>
                                <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="single_blog">
                        <div class="content_box">
                            <span>August 25, 2023 | <a href="blog_single.html">Design</a></span>
                            <h2><a href="blog_single.html">Professional Mobile Painting and Sculpting</a></h2>
                            <a href="#" class="cta"><span>READ MORE</span>
                                <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- END COL-->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_blog">
                        <img src="assets/images/blog/2.png" class="img-fluid" alt="image" />
                        <div class="content_box">
                            <span>August 26, 2023 | <a href="blog_single.html">Education</a></span>
                            <h2><a href="blog_single.html">Professional Ceramic Moulding for Beginner</a></h2>
                            <a href="#" class="cta"><span>READ MORE</span>
                                <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- END COL-->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_blog">
                        <img src="assets/images/blog/3.png" class="img-fluid" alt="image" />
                        <div class="content_box">
                            <span>August 28, 2023 | <a href="blog_single.html">Programing</a></span>
                            <h2><a href="blog_single.html">Education Is About Create Leaders For Tomorrow </a></h2>
                            <a href="#" class="cta"><span>READ MORE</span>
                                <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div><!-- END COL-->
            </div><!-- / END ROW -->
        </div><!-- END CONTAINER  -->
    </section>
    <!-- END BLOG -->


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const img = document.querySelector('.home-banner-hero');

            // Function to handle the scroll event
            const handleScroll = () => {
                // Get the scroll position of the page and the position of the image
                const scrollTop = window.scrollY || document.documentElement.scrollTop;
                const imgOffsetTop = img.offsetTop;
                const imgHeight = img.offsetHeight;
                const windowHeight = window.innerHeight;

                // Check if the image is within the viewport
                if (scrollTop + windowHeight > imgOffsetTop && scrollTop < imgOffsetTop + imgHeight) {
                    img.classList.remove('slide-out');
                    img.classList.add('slide-in');
                } else {
                    img.classList.remove('slide-in');
                    img.classList.add('slide-out');
                }
            };

            // Attach the scroll event listener
            window.addEventListener('scroll', handleScroll);

            // Trigger the scroll handler once to ensure the initial state is correct
            handleScroll();
        });
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const words = document.querySelectorAll('#bouncing-text span');

            words.forEach((word, index) => {
                word.style.setProperty('--index', index); // Set the index as a custom property
            });
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const words = document.querySelectorAll('#fading-text span');

            words.forEach((word, index) => {
                word.style.setProperty('--index', index); // Set custom index for animation delay
            });
        });
    </script>
@endsection
