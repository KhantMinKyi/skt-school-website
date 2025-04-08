@extends('layouts.riverside_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/ib.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out  mt-20 sm:mt-0" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/ib/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10  mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">IB Diploma Programme (IB DP)</div>
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
                    IGCSE <span class="text-emerald-500">Year 13 </span>
                </p>
            </div>
            <div class=" text-lg p-4">
                Our IB Diploma Programme (IB DP) offers a rigorous and globally recognized education, designed to prepare
                students for higher education and beyond.
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <!-- START SISTER SCHOOL  -->
    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            Following the International Baccalaureate framework, students
            select from a broad range of subjects, including core disciplines such as
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid xl:grid-cols-3 lg:grid-cols-2">
                        <div
                            class="single_tca  shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/letter.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">English</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/math.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Mathematics</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/science.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Science</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10  bg-blue-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-blue-700">
            {{-- Sister Schools --}}
            Such as
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid lg:grid-cols-4 md:grid-cols-2">
                        {{-- <div
                            class="single_tca  shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/gp.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Global perspectives (GP)</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/business.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Business</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/economy.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Economics</a></h2>
                        </div> --}}
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/physics.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Phyiscs</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/chemistry.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">chemistry</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/bio.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Biology</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-green-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/computer_science.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Computer Science</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-green-700">
            They also have the opportunity to study
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid md:grid-cols-2">
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/business.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Business</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-blue-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/economy.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Economics</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-yellow-700">
            {{-- Sister Schools --}}
            Foreign languages like
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid lg:grid-cols-3 ">
                        <div
                            class="single_tca  shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-yellow-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/germany.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">German</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-yellow-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/china.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Chinese</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg hover:shadow-yellow-400 flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/writing.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Myanmar language</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="container mx-auto my-8">
        <div class="text-lg md:text-xl">
            {{-- To ensure students are fully prepared for their IGCSE exams, we provide a rigorous preparation period,
            including study camps, mock exams, and ongoing revision support. --}}
        </div>
        <div class="flex justify-center">
            <hr class="my-10 w-60 ">
        </div>
        <div class="grid md:grid-cols-2">
            <div class=" text-lg md:text-xl p-4 flex justify-center items-center">
                The IB DP is known for its emphasis on developing critical thinking, research skills, and an understanding
                of global issues. Students engage in a challenging academic curriculum, complemented by a focus on community
                service, the Theory of Knowledge (TOK), and the Extended Essay (EE). A rigorous assessment system, including
                exams and internal assessments, ensures a comprehensive evaluation of student progress. The program is
                designed to foster intellectual curiosity, personal growth, and global citizenship.
            </div>
            <div class="flex justify-center items-center">
                {{-- <img src="{{ asset('img/banner/pre_school_river.jpg') }}" class="rounded-lg hover:shadow-md w-2/3"
                    alt=""> --}}
                <img src="{{ asset($branch->branch_logo) }}" style="max-height: 420px" alt="" />
            </div>
        </div>
        <!-- END ROW -->
    </div>
    <!-- END SISTER SCHOOL  -->
@endsection
