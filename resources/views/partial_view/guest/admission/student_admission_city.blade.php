@extends('layouts.city_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/student_admission.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/pre_school_river.jpg') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-2xl md:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Student Admission </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START TOPIC-->
    <section class="topic_content_area section-padding" style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    Student <span class="text-emerald-500">Admission</span>
                </p>
            </div>
            {{-- <div class=" text-lg p-4">
                We are excited that you are considering SKT International School Riverside Campus for your child. We will
                support you throughout the admissions process and look forward to welcoming you to the SKT International
                School Riverside Campus.
            </div> --}}
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <!-- START SCHOOL HISTORY -->
    <section class="school_history ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div class="flex justify-center items-center">
                <img src="{{ asset($branch->branch_logo) }}" style="max-height: 420px" alt="" />
            </div>
            <div class=" max-w-2xl p-10">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
                        Welcome to Our
                        <span class="text-emerald-400">Learning Community</span>
                    </h2>
                    <p class=" text-gray-500 mt-2">
                        Choosing the right school for your child is an important step in shaping their future. At SKT
                        International School Riverside Campus, we are committed to providing a nurturing and dynamic
                        learning
                        environment that fosters academic excellence, creativity, and personal growth.
                        Our admissions process is designed to help families understand what makes our school unique. We
                        encourage you to visit our campus, meet our dedicated educators, and experience firsthand the
                        engaging and supportive atmosphere that defines our community. Let us guide you through each step to
                        ensure a smooth and informed enrollment journey for your child.
                    </p>
                    <a href="{{ route('admission-process.home', $branch->branch_short_name) }}"
                        class="relative inline-block mx-auto py-4 px-6 overflow-hidden group mt-4">
                        <span
                            class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                            <!-- Background animation -->
                            <span class="absolute inset-0 flex items-center">
                                <span
                                    class="w-8 h-8 bg-teal-400 rounded-full transition-all duration-300 origin-left transform scale-100 group-hover:w-full group-hover:h-full group-hover:scale-x-100"></span>
                            </span>
                            <span class="relative z-10">Admission Process</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- START SCHOOL HISTORY -->
@endsection
