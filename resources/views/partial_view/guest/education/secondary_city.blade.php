@extends('layouts.city_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/secondary.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/secondary/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Secondary</div>
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
                    Secondary <span class="text-emerald-500">Year 7 - 9</span>
                </p>
            </div>
            <div class=" text-lg p-4">
                Secondary School Programme is designed according to Cambridge International Secondary 1 curriculum.
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-teal-700">
            Students build on the solid foundations laid in the earlier years in the core subjects of
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid md:grid-cols-3">
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/letter.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">English</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/math.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Mathematics</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/science.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Science</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-blue-700">
            In addition, they enjoy the more specialized subjects of
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/writing.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Myanmar language</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/history.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">History</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/geo.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Geography</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/art.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Art</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/computer.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">ICT</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/sport_player.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">PE</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div>
    <div class="container mx-auto my-8">
        <div class="text-lg md:text-xl p-2">
            This curriculum provides them with the knowledge, skills and values needed in a fast changing world.
        </div>
        <div class="flex justify-center">
            <hr class="my-10 w-60 ">
        </div>
        <div class="grid md:grid-cols-2">
            <div class=" text-lg md:text-xl p-4 flex justify-center items-center">
                Students are assessed through two rigorous testing options: Cambridge International Secondary 1 Checkpoint
                and yearly progression tests.
                A variety of teaching techniques are employed to ensure that instruction is meaningful, effective and
                relevant to the diversity of the developmental needs of this age group.
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset($branch->branch_logo) }}" style="max-height: 420px" alt="" />
            </div>
        </div>
        <!-- END ROW -->
    </div>

    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-green-700">
            Students are involved in more structured activities like
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/project.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Projects</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/presentation.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Presentations</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/experiment.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Experiments</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/writing.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Essays</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/social_studies.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Debates</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/olympiad_studies.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Olympiad Studies</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/research.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Research papers</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/competition.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Inter-school competitions</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
            <div class="text-lg md:text-xl">
                in various fields such as math, science, sports, English language and art.Students are encouraged to take
                part in community service activities such as visiting homes for the elderly and/or orphanages.
            </div>
        </div><!-- END CONTAINER  -->
    </div>
@endsection
