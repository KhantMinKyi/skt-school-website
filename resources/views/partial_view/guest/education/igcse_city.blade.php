@extends('layouts.city_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/igcse.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-[89px] sm:mt-0"
            id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/igcse/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">IGCSE</div>
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
                    IGCSE <span class="text-emerald-500">Year 10 - 11 </span>
                </p>
            </div>
            <div class="text-base md:text-lg p-4">
                Our IGCSE program offers a diverse and comprehensive curriculum designed to prepare students for academic
                success and future opportunities.
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <!-- START SISTER SCHOOL  -->
    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-lg md:text-xl lg:text-2xl  font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            Following the Cambridge IGCSE framework, students study core subjects such
            as
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid grid-cols-3 ">
                        <div
                            class="single_tca  shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/letter.svg') }}"
                                class=" w-10 sm:w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">English</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/math.svg') }}"
                                class=" w-10 sm:w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">Mathematics</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/add_math.svg') }}"
                                class=" w-10 sm:w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">Additional Mathematics</a></h2>
                        </div>
                    </div>
                    <div class=" grid grid-cols-2">
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/science.svg') }}"
                                class=" w-10 sm:w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">All Science</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/computer_science.svg') }}"
                                class=" w-10 sm:w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">Computer Science</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10  bg-blue-50">
        <div class="text-center mb-10 text-lg md:text-xl lg:text-2xl  font-bold font-serif text-blue-700">
            {{-- Sister Schools --}}
            They also choose from a
            wide range of electives, including
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid grid-cols-3">
                        <div
                            class="single_tca  shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/gp.svg') }}" class=" w-14 lg:w-20  md:mr-2 mb-2 md:mb-0"
                                alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">Global perspectives (GP)</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/business.svg') }}"
                                class=" w-14 lg:w-20  md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">Business</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/economy.svg') }}"
                                class=" w-14 lg:w-20  md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-xs sm:text-sm lg:text-lg"><a href="#">Economics</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text-lg md:text-xl lg:text-2xl  font-bold font-serif text-yellow-700">
            {{-- Sister Schools --}}
            Foreign languages like
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid grid-cols-2 ">
                        <div
                            class="single_tca  shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-yellow-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/germany.svg') }}"
                                class=" w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-sm lg:text-lg"><a href="#">German</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-yellow-400 flex justify-center items-center flex-col md:flex-row">
                            <img src="{{ asset('assets/images/icon/china.svg') }}"
                                class=" w-14 lg:w-20 md:mr-2 mb-2 md:mb-0" alt="" />
                            <h2 class="text-sm lg:text-lg"><a href="#">Chinese</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10">

        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/art.svg') }}" class=" w-14 lg:w-20" alt="" />
                            <h2 class="text-sm lg:text-lg"><a href="#">Art</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/music.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class="text-sm lg:text-lg"><a href="#">Music</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/sport_player.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class="text-sm lg:text-lg"><a href="#">PE</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/writing.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class="text-sm lg:text-lg"><a href="#">Myanmar language</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div>
    <div class="container mx-auto my-8">
        <div class="text-base md:text-lg p-4">
            To ensure students are fully prepared for their IGCSE exams, we provide a rigorous preparation period,
            including study camps, mock exams, and ongoing revision support.
        </div>
        <div class="flex justify-center">
            <hr class="my-10 w-60 ">
        </div>
        <div class="grid md:grid-cols-2">
            <div class=" text-base md:text-lg p-4 flex justify-center items-center">
                Assessment is conducted through exams and
                coursework, offering a well-rounded evaluation of student progress. Beyond academics, students participate
                in extracurricular activities, inter-school competitions, and community service, fostering leadership,
                collaboration, and social responsibility. Our IGCSE program equips students with the critical thinking,
                problem-solving, and practical skills necessary to thrive in a globalized world.
            </div>
            <div class="flex justify-center items-center">
                {{-- <img src="{{ asset('img/banner/pre_school_river.jpg') }}" class="rounded-lg hover:shadow-md w-2/3"
                    alt=""> --}}
                <img src="{{ asset($branch->branch_logo) }}" class=" max-h-[200px] md:max-h-[360px]" alt="" />
            </div>
        </div>
        <!-- END ROW -->
    </div>
    <!-- END SISTER SCHOOL  -->
@endsection
