@extends('layouts.riverside_layout')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Smooch+Sans:wght@100..900&display=swap');

        .principal-message {
            font-family: "Roboto Slab", serif;
            font-weight: 400;
            /* font-size: 48px; */
            font-style: normal;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ asset('guests/css/style.css') }}" />
    <!-- START HOME -->
    <!-- START HOME BANNER -->
    <section id="home-desktop" class="relative min-h-[80vh] md:min-h-[80vh] lg:min-h-screen flex items-center justify-center">
        <!-- Background Video -->
        <div class="absolute inset-0 w-full h-full">
            <video id="desktopVideo" autoplay loop muted playsinline preload="metadata"
                class="absolute top-0 left-0 w-full h-full object-cover">
            </video>
        </div>

        <!-- Title Overlay -->
        <div class="absolute inset-0 flex items-center justify-center z-10 text-center px-4 sm:hidden">
            <h1 class="text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold drop-shadow-lg">
                <span class=" ">
                    Inspiring Brilliance,
                </span>
                <span class=" text-emerald-500">Building Brighter Futures.</span>
            </h1>
        </div>
    </section>

    {{-- <section id="home-mobile" class="relative lg:hidden h-96 flex items-center justify-center">
        <!-- Fallback Image for Mobile -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('img/banner/contact_banners/SKT-RC.jpg') }}" alt="Background"
                class="w-full h-full object-cover blur-[1px]" />
        </div>

        <!-- Centered Text -->
        <div class="z-10 text-black text-center px-4">
            <h1 class="text-2xl font-extrabold">Welcome to <span class="text-emerald-600">SKT Riverside Campus</span></h1>
            <p class="text-md font-bold mt-2">Experience innovation and learning</p>
        </div>
    </section> --}}
    <!-- END HOME BANNER -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature">
        <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Quality Education -->
            <div class="h-full flex">
                <div class="bg-white p-8 md:p-16 mb-8 shadow border-r border-gray-50 w-full">
                    <h3 class="text-xl mb-4">Quality Education</h3>
                    <p class="mb-10 font-light text-gray-500">
                        Empowering students with a well-rounded curriculum, hands-on learning, and a passion for lifelong
                        growth
                    </p>
                    <a href="{{ route('pre-school.home', $branch->branch_short_name) }}"
                        class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <span class="absolute inset-0 flex items-center">
                                <span
                                    class="w-8 h-8 bg-teal-400 rounded-full transition-all duration-300 origin-left transform scale-100 group-hover:w-full group-hover:h-full group-hover:scale-x-100"></span>
                            </span>
                            <span class="relative z-10">Explore</span>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Experienced Teachers -->
            <div class="h-full flex">
                <div class="bg-white p-8 md:p-16 mb-8 shadow border-r border-gray-50 w-full">
                    <h3 class="text-xl mb-4">Experienced Teachers</h3>
                    <p class="mb-10 font-light text-gray-500">
                        Learn from dedicated educators who bring years of expertise, guiding every student toward success.
                    </p>
                    <a href="{{ route('our-teachers.home', $branch->branch_short_name) }}"
                        class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <span class="absolute inset-0 flex items-center">
                                <span
                                    class="w-8 h-8 bg-teal-400 rounded-full transition-all duration-300 origin-left transform scale-100 group-hover:w-full group-hover:h-full group-hover:scale-x-100"></span>
                            </span>
                            <span class="relative z-10">Explore</span>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Delicious Food -->
            <div class="h-full flex">
                <div class="bg-white p-8 md:p-16 mb-8 shadow border-r border-gray-50 w-full">
                    <h3 class="text-xl mb-4">Delicious Food</h3>
                    <p class="mb-10 font-light text-gray-500">
                        Nutritious, tasty meals prepared with care, ensuring students enjoy a healthy and happy dining
                        experience.
                    </p>
                    <a href="{{ route('gallery.home', $branch->branch_short_name) }}"
                        class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <span class="absolute inset-0 flex items-center">
                                <span
                                    class="w-8 h-8 bg-teal-400 rounded-full transition-all duration-300 origin-left transform scale-100 group-hover:w-full group-hover:h-full group-hover:scale-x-100"></span>
                            </span>
                            <span class="relative z-10">Explore</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- END TOP PROMO FEATURES -->

    <!-- START SCHOOL HISTORY -->
    <section class="school_history mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div x-data="{ show: false }" x-init="IntersectionObserver = new IntersectionObserver(([entry]) => {
                if (entry.isIntersecting) show = true
            }, { threshold: 0.5 });
            IntersectionObserver.observe($el);"
                x-bind:class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-10'"
                class="flex justify-center items-center transition-all duration-1000 ease-out transform">
                <img src="{{ asset($branch->branch_logo) }}" class="max-h-[240px] lg:max-h-[420px]" alt="" />
            </div>
            <div class=" max-w-2xl p-10">
                <div class="ab_content">
                    <h2 class=" text-xl lg:text-4xl font-semibold">
                        History of
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                    </h2>
                    <p class=" text-gray-500">
                        @isset($branch->history)
                            {{ \Illuminate\Support\Str::words($branch->history->history_body, 20, '...') }}
                            <a href="{{ route('our-history.home', $branch->branch_short_name) }}"
                                class="text-teal-500 hover:text-teal-700">See More</a>
                        @endisset
                    </p>
                </div>
                <div class="abmv mt-4 hidden lg:block">
                    <span class="ti-medall"></span>
                    <h4>Our Mission</h4>
                    <div class="prose max-w-none">
                        <p>
                            {!! $branch->statement->statement_mission !!}
                        </p>
                    </div>
                </div>
                <div class="abmv hidden lg:block">
                    <span class="ti-wand"></span>
                    <h4>Our Vision</h4>
                    <div class="prose max-w-none">
                        <p>
                            {!! $branch->statement->statement_vision !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- START SCHOOL HISTORY -->

    <hr class=" w-1/2 mx-auto">

    <!-- START SCHOOL INFO COUNTER -->
    <section id="" class=" mt-10 mb-10">
        <div class="container  mx-auto p-4">
            <div class="section-title text-4xl mb-6 font-bold">
                <h2>Explore Our <span class="text-teal-500">School</span></h2>


            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 text-center mt-4">
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="ti-face-smile"></i> --}}
                        <img src="{{ asset('assets/images/icon/teacher2.svg') }}" class="mr-4" alt="" />
                        {{-- <i class="fa-solid fa-chalkboard-user"></i> --}}
                        {{-- <span id="counter" class="text-3xl font-bold text-gray-800 mx-4">0</span> --}}
                        <div>
                            <div class="flex justify-center">
                                <span data-purecounter-start="0" data-purecounter-end="92" data-purecounter-duration="1"
                                    class="purecounter"></span> <span>%</span>
                            </div>
                            <p>Foreign Teachers</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="fa fa-bank" style="color: #ee6c20"></i> --}}
                        <img src="{{ asset('assets/images/icon/program.svg') }}" class="mr-4" alt="" />
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="58" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Academic Programs</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="fa fa-trophy" style="color: #15be56"></i> --}}
                        <img src="{{ asset('assets/images/icon/award.svg') }}" class="mr-4" alt="" />
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Winning Awards</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="fa fa-graduation-cap text-red-500" style="color: #bb0852"></i> --}}
                        <img src="{{ asset('assets/images/icon/student2.svg') }}" class="mr-4" alt="" />
                        <div>
                            <div class="flex justify-center">
                                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                                    class="purecounter"></span> <span>+</span>
                            </div>
                            <p> Alumni Worldwide </p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SCHOOL INFO COUNTER -->
    <hr class=" w-1/2 mx-auto md:mt-20">
    <!-- START SCHOOL Facilities -->
    <section id="" class=" mt-10  mb-10">
        <div class="container  mx-auto">
            <div class="section-title text-4xl mb-6 font-bold text-center">
                <h2>Our <span class="text-teal-500">Facilities</span></h2>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 text-center mt-4">
                {{-- card --}}
                @foreach ($branch->galleries as $gallery)
                    <div class="mx-2 mb-2">
                        <div class="relative group rounded-md overflow-hidden">
                            <!-- Image -->
                            <img src="{{ asset($gallery->gallery_photo) }}"
                                class="w-full min-h-40 md:min-h-60 lg:min-h-80 object-cover" alt="Team Member" />

                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h3 class="text-lg font-bold">{{ $gallery->gallery_title }}</h3>
                                {{-- <p class="text-sm">Developer</p> --}}
                            </div>
                        </div>

                    </div>
                @endforeach
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SCHOOL Facilities -->
    {{-- <hr class=" w-1/2 mx-auto md:my-20"> --}}


    <!-- START SISTER SCHOOL  -->
    <div class="partner-logo py-10  bg-gray-950">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-white">
            Our
            <span class=" text-emerald-400"> Sister Schools </span>
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
                        <a href="https://www.bfi.edu.mm/" target="__blank"><img
                                src="{{ asset('img/carousel-logos/bfi.png') }}" alt="image" class=" max-h-48"></a>
                        <a href="https://misa.edu.mm/" target="__blank"><img
                                src="{{ asset('img/carousel-logos/misa_b.png') }}" alt="image" class=" max-h-48"></a>
                        <a href="https://nisa.edu.mm/" target="__blank"><img
                                src="{{ asset('img/carousel-logos/nisa_b.png') }}" alt="image" class=" max-h-48"></a>
                        <a href="{{ route('city.home') }}"><img
                                src="{{ asset('img/carousel-logos/skt_city_campus_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="{{ route('river.home') }}"><img
                                src="{{ asset('img/carousel-logos/skt_riverside_campus_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="https://www.bfi.edu.mm/" target="__blank"><img
                                src="{{ asset('img/carousel-logos/bfi.png') }}" alt="image" class=" max-h-48"></a>
                        <a href="https://misa.edu.mm/" target="__blank"><img
                                src="{{ asset('img/carousel-logos/misa_b.png') }}" alt="image" class=" max-h-48"></a>
                        <a href="https://nisa.edu.mm/" target="__blank"><img
                                src="{{ asset('img/carousel-logos/nisa_b.png') }}" alt="image" class=" max-h-48"></a>
                        <a href="{{ route('city.home') }}"><img
                                src="{{ asset('img/carousel-logos/skt_city_campus_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="{{ route('river.home') }}"><img
                                src="{{ asset('img/carousel-logos/skt_riverside_campus_b.png') }}" alt="image"
                                class=" max-h-48"></a>

                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div>
    <!-- END SISTER SCHOOL  -->
    <hr class=" w-1/2 mx-auto md:my-20">

    <!-- START PRINCIPAL MESSAGE -->
    <section class="principal_message mt-10 container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 ">
            <div class=" lg:col-span-2  mx-auto p-4">
                <div class="ab_content">
                    <h2 class=" text-md md:text-xl font-light text-gray-500">
                        Our
                    </h2>
                    <h2 class="text-xl md:text-2xl xl:text-4xl  font-semibold">
                        <span class="text-emerald-400"> Head of School's Message</span>
                    </h2>
                    <p class=" text-gray-500">

                    </p>
                </div>
                <div class="abmv mt-4 principal-message ">
                    <p class="text-sm md:text-base xl:text-xl italic">
                        {{ \Illuminate\Support\Str::words($branch->principal_message->principal_message, 100, '...') }}
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center ">
                <img class=" w-[240px] h-[240px] md:w-[300px] md:h-[300px] xl:w-[420px] xl:h-[420px] object-cover rounded-full"
                    src="{{ asset($branch->principal_message->principal_photo) }}" alt="" />
                <p class="mt-4 bold text-lg md:text-2xl italic">{{ $branch->principal_message->principal_name }}</p>
            </div>
        </div>
    </section>
    <!-- START PRINCIPAL MESSAGE-->
    <hr class=" w-1/2 mx-auto md:my-20">

    <!-- START TOPIC-->
    <section class="topic_content_area section-padding" style="background-image: url(assets/images/banner/topic.png);"
        id="topic_content_area">
        <div class="container mx-auto p-4">
            <div class="section-title">
                <h2>What We Provide</h2>
                <p>
                    Discover <span class="text-emerald-500">Our Campus & Services</span> Today
                </p>
            </div>
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-2">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div
                        class="single_tca shadow-md p-6 sm:p-12 border m-2 h-56 grid grid-cols-1 sm:grid-cols-2 sm:gap-2 ">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/icon/ct3.svg') }}" alt="" />
                        </div>
                        <div class="text-center">
                            <h2><a href="#">Cambridge Curriculum</a></h2>
                            <span>Year 2 to IB</span>
                        </div>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca shadow-md p-6 sm:p-12 border m-2 h-56 grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/icon/campus.svg') }}" alt="" />
                        </div>
                        <div class="text-center">
                            <h2><a href="#">Modern Campus</a></h2>
                            <span> Joyful environment</span>
                        </div>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca shadow-md p-6 sm:p-12 border m-2 h-56 grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/icon/lab.svg') }}" alt="" />
                        </div>
                        <div class="text-center">
                            <h2><a href="#">Science labs</a></h2>
                            <span>Full Lab Equipment</span>
                        </div>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca shadow-md p-6 sm:p-12 border m-2 h-56 grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
                        <div class="flex justify-center">

                            <img src="{{ asset('assets/images/icon/ct6.svg') }}" alt="" />
                        </div>
                        <div class="text-center">
                            <h2><a href="#">Playgounds & Stadiums</a></h2>
                            <span>Over 10 sports</span>
                        </div>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca shadow-md p-6 sm:p-12 border m-2 h-56 grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/icon/facility.svg') }}" alt="" />
                        </div>
                        <div class="text-center">
                            <h2><a href="#">The Best Facilities</a></h2>
                            <span>Smart Teaching Equipment </span>
                        </div>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca shadow-md p-6 sm:p-12 border m-2 h-56 grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/images/icon/safe.svg') }}" alt="" />
                        </div>
                        <div class="text-center">
                            <h2><a href="#">24hr Safety</a></h2>
                            <span>100% Safety Enviroment</span>
                        </div>
                    </div>
                </div>
                <!-- END COL -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <!-- START EVENT-->
    <section class=" section_event section-padding">
        <div class="container mx-auto p-4">
            <div class="section-title">
                <h2>Upcoming Events</h2>
                <p>
                    Join Us With <a href="#" class="text-emerald-500 ">Our Events</a>
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-3 gap-5">
                @foreach ($branch->events as $event)
                    <div class="event-slide  hover:shadow-md rounded-md ">
                        <a href="{{ route('event-detail.home', $event->id) }}"> {{-- need tobe replaced --}}
                            <div class="event-img rounded-t-md">
                                <img src="{{ asset($event->event_banner) }}" style="height: 354px; object-fit: cover;"
                                    alt="" />
                                <div class="event-date">
                                    <span class="date">{{ $event->event_start_date }}</span>
                                    <span class="month">{{ $event->event_end_date }}</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <h3 class="hover:text-teal-500">
                                    <a href="{{ route('event-detail.home', $event->id) }}">{{ $event->event_title }}</a>
                                </h3>
                                <span><i class="fa fa-clock-o"></i>{{ $event->event_time }}</span>
                                <span><i class="fa fa-table"></i><strong>{{ $event->event_location }}</strong></span>
                                <p>
                                    {{-- {!! \Illuminate\Support\Str::words($event->event_body, 10, '...') !!} --}}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END EVENT -->

    <!-- START POST -->
    <section id="post" class="blog_area section-padding">
        <div class="container mx-auto p-4">
            <div class="section-title">
                <h2>News</h2>
                <p>
                    Our Latest <span class="text-emerald-500">Posts</span>
                </p>
            </div>
            <div class=" grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-3 gap-5">
                @foreach ($branch->posts as $post)
                    <div class="">
                        <div class="single_blog ">
                            <img src="{{ asset($post->post_banner) }}" class="img-fluid" style="max-height: 354px;"
                                alt="image" />
                            <div class="content_box">
                                <span>{{ \Carbon\Carbon::parse($post->post_created_date)->format('F d, Y') }} |
                                    <a href="#">{{ $post->category->category_title }}</a></span>
                                <h2>
                                    <a href="{{ route('news-detail.home', $post->id) }}">{{ $post->post_title }}
                                    </a>
                                </h2>

                                <a href="{{ route('news-detail.home', $post->id) }}" {{-- need tobe replaced --}}
                                    class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                                    <span
                                        class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                                        <!-- Background animation -->
                                        <span class="absolute inset-0 flex items-center">
                                            <span
                                                class="w-8 h-8 bg-teal-400 rounded-full transition-all duration-300 origin-left transform scale-100 group-hover:w-full group-hover:h-full group-hover:scale-x-100"></span>
                                        </span>
                                        <span class="relative z-10">READ MORE <i class="fa-solid fa-caret-right ml-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- / END ROW -->
        </div>
        <!-- END CONTAINER  -->
    </section>
    <!-- END POST -->
    <section class="relative bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="relative h-[500px] shadow-md">
                <!-- Right Image -->
                <div class="absolute  w-full md:w-[100%] h-[100%]">
                    <img src="{{ asset('img/banner/student_life_banners/news/SKT-RC.jpg') }}" alt="School Campus"
                        class="w-full h-full object-cover rounded-lg ">
                </div>

                <!-- Left Red Box (Smaller Height than image) -->
                <div
                    class="absolute top-0 left-0 bg-gray-900 bg-opacity-95 text-white p-4 sm:p-16 w-full sm:w-[60%] h-[70%] flex flex-col justify-center z-10 rounded-tl-lg">
                    <h2 class="text-2xl lg:text-4xl font-semibold mb-6">What would you like to do?</h2>
                    <div class="flex space-x-4 md:space-x-20">
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-pencil-alt text-sm lg:text-lg "></i>
                            <a href="{{ route('student-admission.home', $branch->branch_short_name) }}"
                                class="uppercase text-xs sm:text-sm  font-semibold mt-2">Apply Now</a>
                            <div class="w-5 sm:w-8 h-1 bg-white mt-1"></div>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-eye text-sm lg:text-lg"></i>
                            <a href="{{ route('contact_us.home', $branch->branch_short_name) }}"
                                class="uppercase text-xs sm:text-sm font-semibold mt-2">Book a Tour</a>
                            <div class="w-5 sm:w-8 h-1 bg-white mt-1"></div>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <i class="fa-solid fa-book text-sm lg:text-lg"></i>
                            <a href="{{ route('contact_us.home', $branch->branch_short_name) }}"
                                class="uppercase text-xs sm:text-sm font-semibold mt-2">Request a Prospectus</a>
                            <div class="w-5 sm:w-8 h-1 bg-white mt-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END  HOME -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Handle fading text index setup
            const words = document.querySelectorAll('#fading-text span');
            words.forEach((word, index) => word.style.setProperty('--index', index));

            // Load appropriate video based on screen width
            const video = document.getElementById('desktopVideo');
            if (video && !video.querySelector('source')) {
                const source = document.createElement('source');
                const isMobile = window.innerWidth <= 1000;
                source.src = isMobile ?
                    "{{ asset('videos/skt_riverside_campus.mp4') }}" :
                    "{{ asset('videos/skt_riverside_campus.mp4') }}";
                source.type = "video/mp4";
                video.appendChild(source);
            }
        });
    </script>

    <!-- External JS loaded last for performance -->
    <script src="{{ asset('guests/js/general.js') }}"></script>
@endsection
