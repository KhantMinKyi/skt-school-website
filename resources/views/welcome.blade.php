<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Penn - Education HTML Template">
    <meta name="keywords"
        content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
    <meta name="author" content="theme_ocean">
    <!-- SITE TITLE -->
    <title>SKT International School</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('assets/images/icon/icon.png') }}" type="image/png">
    <!-- Latest Bootstrap min CSS -->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/home_slider.css') }}" />
    <style>
        /* .bounce-up {
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bounce-up:hover {
            transform: translateY(-10px);
        } */
        /* Move up by 10px */
        /* box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); Optional shadow for visual effect */

        @keyframes slideInLeftScale {
            0% {
                transform: translateX(-100%) scale(0.6);
                opacity: 0;
            }

            100% {
                transform: translateX(0) scale(1);
                opacity: 1;
            }
        }

        @keyframes slideInRightScale {
            0% {
                transform: translateX(100%) scale(0.6);
                opacity: 0;
            }

            100% {
                transform: translateX(0) scale(1);
                opacity: 1;
            }
        }

        /* Apply animations */
        .left-animate {
            animation: slideInLeftScale 1.5s ease-out forwards;
        }

        .right-animate {
            animation: slideInRightScale 1.5s ease-out forwards;
        }

        /* Smooth zoom-in effect */
        .zoom-click {
            width: 600px;
            transition: width 1s;
        }

        /* Fullscreen zoom effect */
        .image-zoomed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: 50;
            transform: scale(1.1);
        }

        .zoom-click:hover {
            width: 1200px;
        }

        @media (max-width: 1024px) {
            .zoom-click {
                width: 300px;
                transition: width 1s;
            }

            .zoom-click:hover {
                width: 500px;
            }
        }

        @media (max-width: 768px) {
            .zoom-click {
                width: 250px;
                transition: width 1s;
            }

            .zoom-click:hover {
                width: 450px;
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap');
    </style>
</head>

<body>
    <!-- START PRELOADER -->

    <!-- END PRELOADER -->
    <!-- START HOME -->
    {{-- <section id="home" class="home_bg"
        style="background-image: url(assets/images/banner/home.png);  background-size:cover; background-position: center center; height:100vh"> --}}
    {{-- <video autoplay loop muted playsinline class="video-background">
				<source src="img/video_bg.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video> --}}
    {{-- <div class="text-center home-banner-text">
            <h3 class="pt-4">
                Select a Campus to View!
            </h3>
        </div>
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-6 col-sm-6 col-xs-12 d-flex justify-content-center align-items-center">
                    <div style="cursor: pointer;">
                        <a href="{{ route('river.home') }}">
                            <img src="{{ asset('img/skt_riverside_campus.png') }}" class="img-fluid bounce-up"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 d-flex justify-content-center align-items-center">
                    <div style="cursor: pointer;">
                        <a href="{{ route('city.home') }}">
                            <img src="{{ asset('img/skt_city_campus.png') }}" class="img-fluid bounce-up"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END  HOME -->

    {{-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> --}}

    <body>

        <!-- START POST -->
        <div id="kenburns_061"
            class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
            data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
                <!-- First Slide -->
                <div class="carousel-item active w-full flex-shrink-0">
                    {{-- <img src="{{ asset('assets/images/banner/home.png') }}" alt="slider-image" --}}
                    <img src="{{ asset('img/banner/home_banner.jpg') }}" alt="slider-image"
                        class="w-full min-h-lvh object-cover" />
                    <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                        <h1 id="fading-text" class=" text-2xl md:text-7xl text-center ">
                            {{-- <div class="text-center home-banner-text ">
                                <h3 class="pt-4 text-3xl text-gray-800">
                                    Select a Campus to View!
                                </h3>
                            </div> --}}
                            <div class="container h-100">
                                <div class="row align-items-center h-100 grid sm:grid-cols-2">
                                    <div class="col-lg-6 col-sm-6 col-xs-12   flex justify-center align-center">
                                        <div style="cursor: pointer;">
                                            <a href="{{ route('river.home') }}">
                                                {{-- <a href="#"> --}}
                                                <img src="{{ asset('img/skt_riverside_campus.png') }}"
                                                    class="img-fluid left-animate bounce-up zoom-click" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-sm-6 col-xs-12 d-flex justify-content-center align-items-center">
                                        <div style="cursor: pointer;">
                                            <a href="{{ route('city.home') }}">
                                                <img src="{{ asset('img/skt_city_campus.png') }}"
                                                    class="img-fluid right-animate bounce-up zoom-click" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest jQuery -->
        <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
        <!-- scripts js -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        {{-- <script>
            document.querySelectorAll('.zoom-click').forEach(image => {
                image.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetUrl = image.closest('a').href;

                    // Apply zoom effect to the clicked image
                    image.classList.add('image-zoomed');

                    // Wait for animation to finish, then navigate
                    setTimeout(() => {
                        window.location.href = targetUrl;
                    }, 800); // Matches the CSS transition time
                });
            });
        </script> --}}



    </body>

</html>
