@php
    use App\Models\Branch;
    $skt_riverside_campus = Branch::where('branch_short_name', 'SKT-RC')->first();
@endphp
@extends('layouts.riverside_layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/style.css') }}" />
    <!-- START HOME -->
    <!-- START HOME BANNER -->
    <section id="home" class=" min-h-screen flex items-center justify-center pt-64 md:pt-28 "
        style="background-image: url(assets/images/banner/home.png); background-size:cover; background-position: center center;">
        <div class="grid md:grid-cols-2  ">
            <div class="home_content flex flex-col justify-center items-center">
                <h1 id="fading-text" class=" text-start ml-10">
                    <span class="text-emerald-400">INSPIRING</span>
                    <span class="text-emerald-400">BRILLIANCE</span>
                    <span>BUILDING</span>
                    <span>BRIGHTER</span>
                    <span>FUTURES</span>
                </h1>
                <div class="flex justify-center" style="cursor: pointer">
                    <img src="{{ asset($skt_riverside_campus->branch_logo) }}" width="240" class="bounce-up"
                        alt="">
                </div>
            </div>

            <div class="">
                <div class="home_me_img relative">
                    <img src="{{ asset('img/banner-hero.png') }}" class=" home-banner-hero" alt="" />
                    <div
                        class="home_ps absolute top-1/2 left-0 transform -translate-y-1/2 bg-white w-48 p-5 rounded-2xl shadow-lg">
                        <img src="{{ asset('assets/images/icon/student.svg') }}" class="mt-1 w-10 float-left mr-2"
                            alt="" />
                        <h2 class="font-extrabold overflow-hidden">700+</h2>
                        <span class="text-sm">Active student</span>
                    </div>
                    <div class="home_ps2 absolute top-10 right-0 bg-white w-48 p-5 rounded-2xl shadow-lg">
                        <img src="{{ asset('assets/images/icon/teacher.svg') }}" class="mt-1 w-10 float-left mr-2"
                            alt="" />
                        <h2 class="font-extrabold overflow-hidden">200+</h2>
                        <span class="text-sm">Teachers</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END HOME BANNER -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature">
        <div class="grid md:grid-cols-1 lg:grid-cols-3">
            <!-- Quality Education -->
            <div class="  bg-white ">
                <div class=" bg-white p-16 mb-8  shadow border-r border-gray-50 ">
                    <h3 class="text-xl mb-4">Quality Education</h3>
                    <p class="mb-10 font-light text-gray-500">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                        elit sed do
                        eiusmod
                        tempor incididunt ut labore.</p>
                    <a href="#" class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <!-- Background animation -->
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
            <div class="  bg-white ">
                <div class=" bg-white p-16 mb-8  shadow border-r border-gray-50 ">
                    <h3 class="text-xl mb-4">Experienced Teachers</h3>
                    <p class="mb-10 font-light text-gray-500">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                        elit sed do
                        eiusmod
                        tempor incididunt ut labore.</p>
                    <a href="#" class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <!-- Background animation -->
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
            <div class="  bg-white ">
                <div class=" bg-white p-16 mb-8  shadow border-r border-gray-50 ">
                    <h3 class="text-xl mb-4">Delicious Food</h3>
                    <p class="mb-10 font-light text-gray-500">Lorem ipsum dolor sit amet, consectetur notted adipisicing
                        elit sed do
                        eiusmod
                        tempor incididunt ut labore.</p>
                    <a href="#" class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <!-- Background animation -->
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
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/skt_riverside_campus.png') }}" style="max-height: 420px" alt="" />
            </div>
            <div class=" max-w-2xl p-10">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
                        History of
                        <span class="text-emerald-400">SKT International School</span>
                    </h2>
                    <p class=" text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur notted adipisicing elit
                        sed do eiusmod tempor incididunt ut labore et simply.
                    </p>
                </div>
                <div class="abmv mt-4">
                    <span class="ti-medall"></span>
                    <h4>Our Mission</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                        eiusmod tempor ut labore.
                    </p>
                </div>
                <div class="abmv">
                    <span class="ti-wand"></span>
                    <h4>Our Vision</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                        eiusmod tempor ut labore.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- START SCHOOL HISTORY -->
    <hr class=" w-1/2 mx-auto">
    <!-- START SCHOOL INFO COUNTER -->
    <section id="" class=" mt-10 mb-10">
        <div class="container  mx-auto">
            <div class="section-title text-4xl mb-6 font-bold">
                <h2>Explore Our <span class="text-teal-500">School</span></h2>


            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 text-center mt-4">
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="ti-face-smile"></i> --}}
                        <i class="fa-solid fa-chalkboard-user"></i>
                        {{-- <span id="counter" class="text-3xl font-bold text-gray-800 mx-4">0</span> --}}
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Teachers</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        <i class="fa fa-bank" style="color: #ee6c20"></i>
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
                        <i class="fa fa-trophy" style="color: #15be56"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="163" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Winning Award</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        <i class="fa fa-graduation-cap text-red-500" style="color: #bb0852"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="356" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p> Students</p>
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

    <!-- END  HOME -->
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
            const words = document.querySelectorAll('#fading-text span');

            words.forEach((word, index) => {
                word.style.setProperty('--index', index); // Set custom index for animation delay
            });
        });
    </script>
@endsection
