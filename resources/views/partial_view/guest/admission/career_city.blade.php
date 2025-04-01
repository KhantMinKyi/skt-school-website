@extends('layouts.city_layout')

@section('content')
    @php
        use App\Models\CareerJob;
        $jobs = CareerJob::where('career_job_is_active', 1)->orderBy('created_at', 'desc')->limit(3)->get();
    @endphp
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/pre_school.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/sister_school/bfi.jpg') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Career</div>
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
                    Join <span class="text-emerald-500">Our Team</span>
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
    <div class="py-10  bg-emerald-50">
        <div class="grid md:grid-cols-2 gap-10 container mx-auto">
            @foreach ($jobs as $job)
                <div class="group   [perspective:1000px]">
                    <div
                        class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)] cursor-pointer">
                        <div
                            class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                            <div class="flex flex-col h-full">
                                <div class="flex justify-between items-start">
                                    <div class="text-3xl font-extrabold">{{ $job->career_job_title }}</div>
                                    {{-- <img src="{{ asset('assets/images/icon/music.svg') }}" class=" w-20" alt="" /> --}}
                                </div>
                                <div>
                                    <div class="my-1 text-teal-600">
                                        <i class="fa-solid fa-school"></i>
                                        {{ $job->branch->branch_name }}
                                    </div>
                                    <div class="my-1 text-gray-700">
                                        <i class="fa fa-location-pin"></i>
                                        {{ $job->branch->branch_location }}
                                    </div>
                                </div>
                                <div class="mt-auto">
                                    <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                            <div class="flex flex-col h-full">
                                <div class="text-2xl font-extrabold mb-4 ">{{ $job->career_job_title }}</div>
                                <div class="flex-grow">
                                    <div class="grid grid-cols-2">
                                        <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                            <div class="hidden sm:block">
                                                <i class="fa-solid fa-gears text-2xl"></i>
                                            </div>
                                            <div class="ml-4  ">
                                                <p class="text-lg md:text-xl font-bold">Experience level</p>
                                                <p class=" text-sm md:text-lg text-stone-950">
                                                    {{ $job->career_job_experience_level }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                            <div class="hidden sm:block">
                                                <i class="fa-solid fa-bars-progress text-2xl"></i>
                                            </div>
                                            <div class="ml-4  ">
                                                <p class="text-lg md:text-xl font-bold">Job Function</p>
                                                <p class=" text-sm md:text-lg text-stone-950">
                                                    {{ $job->career_job_function }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                            <div class="hidden sm:block">
                                                <i class="fa-solid fa-user-plus text-2xl"></i>
                                            </div>
                                            <div class="ml-4  ">
                                                <p class="text-lg md:text-xl font-bold">Number of Position</p>
                                                <p class=" text-sm md:text-lg text-stone-950">
                                                    {{ $job->career_job_number_of_post }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                            <div class="hidden sm:block">
                                                <i class="fa-solid fa-clock text-2xl"></i>
                                            </div>
                                            <div class="ml-4  ">
                                                <p class="text-lg md:text-xl font-bold">Job Type</p>
                                                <p class=" text-sm md:text-lg text-stone-950">
                                                    {{ $job->career_job_type }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end">
                                        <a href="{{ route('career-detail.home', $job->id) }}"
                                            class="p-3 bg-white rounded-lg font-bold hover:bg-teal-500 hover:text-white hover:shadow-lg">See
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
