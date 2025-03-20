@extends('layouts.riverside_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/pre_school.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/pre_school/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-2xl lg:text-5xl xl:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Pre School </div>
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
                    Pre School <span class="text-emerald-500">Age 3 - 6</span>
                </p>
            </div>
            <div class=" text-lg p-4">
                Our International curriculum addresses social-emotional development via engaging activities and positive
                reinforcement and by actively involving parents in our lessons and extra-curricular programs. We follow an
                age-appropriate curriculum based on the latest research on early childhood learning. Children are free to
                explore their world using classroom toys, sand, water, paint, life-sized blocks and out playground
                equipment. BFI Kindergarten Programs
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
            A theme-based approach links the topics to different subjects such as:
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/music.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Music and Movement</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/story.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Story & Music</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/letter.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">English Phonics: Letter & Sound</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/writing.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">English Writing</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/literacy.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">English Language & Literacy</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/social_studies.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Social Studies</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/field_trip.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Environmental Awareness – Field Trips</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
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
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/art.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Fine Arts, Drawing & Painting</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/computer.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Computer</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/sand_and_water.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Physical development: Large motor skills, sand and
                                    water</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/blocks.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Blocks</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/sport_player.svg') }}" class=" w-20"
                                alt="" />
                            <h2 class=""><a href="#">Gymnastics / Swimming & Various Sports</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-12 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/health.svg') }}" class=" w-20" alt="" />
                            <h2 class=""><a href="#">Health & Safety, and Drama</a></h2>
                        </div>

                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->

    </div>
    <div class="container mx-auto my-8">
        <div class="grid md:grid-cols-2">
            <div class=" text-lg md:text-xl p-4 flex justify-center items-center">
                We also encourage children’s creativity and independence by allowing them to direct their own learning via
                guided play periods. During these periods, children are free to explore their world using classroom toys,
                sand,
                water, paint, life-sized blocks and out playground equipment. Field trips, performances and family programs
                are
                other key components of our holistic approach designed to educate, stimulate and challenge our students.
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/banner/pre_school_river.jpg') }}" class="rounded-lg hover:shadow-md w-2/3"
                    alt="">
            </div>
        </div>
        <!-- END ROW -->
    </div>
    <!-- END SISTER SCHOOL  -->
@endsection
