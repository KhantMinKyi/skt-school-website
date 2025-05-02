@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/news_detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <!-- START POST -->
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-[89px] sm:mt-0"
            id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/sister_school/bfi.webp') }}" alt="slider-image" loading="lazy"
                    class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-2xl md:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">{{ $job->career_job_title }} </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mx-auto my-10">
            <div class="bg-white shadow-lg p-4 md:p-10 rounded-md">

                <h2 class=" font-bold text-lg md:text-xl lg:text-2xl">{{ $job->career_job_title }}</h2>

                <div class="grid grid-cols-2 lg:grid-cols-4 mt-6">
                    <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-gears text-xl"></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-base md:text-lg lg:text-xl font-bold">Experience level</p>
                            <p class=" text-xs md:text-base text-stone-950">
                                {{ $job->career_job_experience_level }}
                            </p>
                        </div>
                    </div>
                    <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-bars-progress text-xl"></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-base md:text-lg lg:text-xl font-bold">Job Function</p>
                            <p class=" text-xs md:text-base text-stone-950">
                                {{ $job->career_job_function }}
                            </p>
                        </div>
                    </div>
                    <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-user-plus text-xl"></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-base md:text-lg lg:text-xl font-bold">Number of Position</p>
                            <p class=" text-xs md:text-base text-stone-950">
                                {{ $job->career_job_number_of_post }}
                            </p>
                        </div>
                    </div>
                    <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-clock text-xl"></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-base md:text-lg lg:text-xl font-bold">Job Type</p>
                            <p class=" text-xs md:text-base text-stone-950">
                                {{ $job->career_job_type }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 text-teal-800">
                    @if ($job->career_job_is_hide_salary)
                        <div>
                            <i class="fa-solid fa-dollar-sign mr-4"></i>
                            Negotiable
                        </div>
                    @else
                        <i class="fa-solid fa-dollar-sign mr-4"></i>
                        <p>{{ $job->career_job_maximun_salary }}</p>
                    @endif
                </div>
                <div class="mt-10">
                    <p class="text-base md:text-lg lg:text-xl  my-2">Open To</p>
                    <div class=" flex align-middle justify-start">
                        <i class="fa-solid fa-check text-lg lg:text-xl  mr-4 text-teal-400"></i>
                        <p class="text-base md:text-lg lg:text-xl  ">
                            {{ $job->career_job_gender == 'Both' ? 'Male/Famale' : $job->career_job_gender }}
                        </p>
                    </div>
                    <p class="text-base md:text-lg lg:text-xl  my-2">Employee Type</p>
                    <div class=" flex align-middle justify-start">
                        <i class="fa-solid fa-check text-lg lg:text-xl  mr-4 text-teal-400"></i>
                        <p class="text-base md:text-lg lg:text-xl  ">
                            {{ $job->career_job_employee_type == 'Both' ? 'Local/Foreign' : $job->career_job_employee_type }}
                        </p>
                    </div>
                    <hr class="my-4 border-gray-400 opacity-60">
                </div>
                <div class="mt-4">
                    <div class="text-lg md:text-xl lg:text-2xl font-bold mb-4">
                        Job Description
                    </div>
                    <div class="prose max-w-none">
                        {!! $job->career_job_description !!}
                    </div>
                    <hr class="my-4 border-gray-400 opacity-60">
                </div>
                <div class="mt-10">
                    <div class="text-lg md:text-xl lg:text-2xl font-bold mb-4">
                        Job Requirement
                    </div>
                    <div class="prose max-w-none">
                        {!! $job->career_job_requirement !!}
                    </div>
                    <hr class="my-4 border-gray-400 opacity-60">
                </div>

                <h2 class=" font-bold text-lg md:text-xl lg:text-2xl">{{ $job->branch->branch_name }} Offers You</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 mt-6 gap-10">
                    <div class="my-1  flex align-middle  justify-items-start shadow-xl p-4 rounded-2xl">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-check text-lg md:text-xl lg:text-2xl mr-4 text-teal-400 "></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-lg md:text-xl font-bold text-teal-600 ">Other Benefits</p>
                            <p class=" text-sm md:text-lg text-black mt-4">
                            <div class="prose max-w-none">
                                {!! $job->career_job_benefits !!}
                            </div>
                            <hr class="my-2">
                            <div class="prose max-w-none">
                                {!! $job->career_job_highlights !!}
                            </div>
                            <hr class="my-2">
                            <div class="prose max-w-none">
                                {!! $job->career_job_career_growth !!}
                            </div>
                            </p>
                        </div>
                    </div>
                    {{-- <div class="my-1  flex align-middle  justify-items-start shadow-xl p-4 rounded-2xl">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-check text-lg md:text-xl lg:text-2xl mr-4 text-teal-400 "></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-lg md:text-xl font-bold text-teal-600 ">Highlights</p>
                            <p class=" text-sm md:text-lg text-black mt-4">
                            <div class="prose max-w-none">
                                {!! $job->career_job_highlights !!}
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="my-1  flex align-middle  justify-items-start shadow-xl p-4 rounded-2xl">
                        <div class="hidden sm:block">
                            <i class="fa-solid fa-check text-lg md:text-xl lg:text-2xl mr-4 text-teal-400 "></i>
                        </div>
                        <div class="ml-4  ">
                            <p class="text-lg md:text-xl font-bold text-teal-600 ">Career Growth</p>
                            <p class=" text-sm md:text-lg text-black mt-4">
                            <div class="prose max-w-none">
                                {!! $job->career_job_career_growth !!}
                            </div>
                            </p>
                        </div>
                    </div> --}}
                </div>
                <div class="mt-10 font-bold text-sm md:text-lg">
                    Interested candidates can send their CV and other necessary documents to <span
                        class="text-teal-400">{{ $job->career_job_email }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- END BLOG -->
@endsection
