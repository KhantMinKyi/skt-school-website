@extends('layouts.riverside_layout')

@section('content')
    @php
        use App\Models\CareerJob;
        $jobs = CareerJob::where('career_job_is_active', 1)->orderBy('created_at', 'desc')->get();
    @endphp
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/pre_school.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/sister_school/bfi.webp') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Career</div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START TOPIC-->
    <section class="topic_content_area section-padding mt-[89px] sm:mt-0"
        style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    Join <span class="text-emerald-500">Our Team</span>
                </p>
            </div>
            <div class="text-base md:text-lg p-4">
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
                <div class="group   [perspective:1000px] job-card">
                    <div
                        class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)] cursor-pointer">
                        <div
                            class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                            <div class="flex flex-col h-full">
                                <div class="flex justify-between items-start">
                                    <div class="text-xl md:text-2xl lg:text-3xl font-extrabold">{{ $job->career_job_title }}
                                    </div>
                                    {{-- <img src="{{ asset('assets/images/icon/music.svg') }}" class=" w-20" alt="" /> --}}
                                </div>
                                <div>
                                    <div class="my-1 text-teal-600 text-sm sm:text-base">
                                        <i class="fa-solid fa-school"></i>
                                        {{ $job->branch->branch_name }}
                                    </div>
                                    <div class="my-1 text-gray-700 text-sm sm:text-base">
                                        <i class="fa fa-location-pin"></i>
                                        {{ $job->branch->branch_location }}
                                    </div>
                                </div>
                                <div class="mt-auto">
                                    <p class="text-xs sm:text-base opacity-75 font-semibold">Hover to flip!</p>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('career-detail.home', $job->id) }}">
                            <div
                                class=" w-full h-full rounded-xl bg-white shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                                <div class="flex flex-col h-full">
                                    <div class="text-lg md:text-xl lg:text-2xl font-extrabold mb-4 ">
                                        {{ $job->career_job_title }}</div>
                                    <div class="flex-grow">
                                        <div class="grid grid-cols-2">
                                            <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                                <div class="hidden sm:block">
                                                    <i class="fa-solid fa-gears text-lg lg:text-xl"></i>
                                                </div>
                                                <div class="ml-4  ">
                                                    <p class="text-sm sm:text-base md:text-lg font-bold">Experience level
                                                    </p>
                                                    <p class=" text-xs sm:text-sm md:text-base text-stone-950">
                                                        {{ $job->career_job_experience_level }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                                <div class="hidden sm:block">
                                                    <i class="fa-solid fa-bars-progress text-lg lg:text-xl"></i>
                                                </div>
                                                <div class="ml-4  ">
                                                    <p class="text-sm sm:text-base md:text-lg font-bold">Job Function</p>
                                                    <p class=" text-xs sm:text-sm md:text-base text-stone-950">
                                                        {{ $job->career_job_function }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                                <div class="hidden sm:block">
                                                    <i class="fa-solid fa-user-plus text-lg lg:text-xl"></i>
                                                </div>
                                                <div class="ml-4  ">
                                                    <p class="text-sm sm:text-base md:text-lg font-bold">Number of Position
                                                    </p>
                                                    <p class=" text-xs sm:text-sm md:text-base text-stone-950">
                                                        {{ $job->career_job_number_of_post }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="my-1  flex align-middle text-gray-800 justify-items-start">
                                                <div class="hidden sm:block">
                                                    <i class="fa-solid fa-clock text-lg lg:text-xl"></i>
                                                </div>
                                                <div class="ml-4  ">
                                                    <p class="text-sm sm:text-base md:text-lg font-bold">Job Type</p>
                                                    <p class=" text-xs sm:text-sm md:text-base text-stone-950">
                                                        {{ $job->career_job_type }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <a href="{{ route('career-detail.home', $job->id) }}"
                                                class="p-3 bg-gray-900 rounded-lg font-bold hover:bg-teal-500 text-white hover:shadow-lg text-xs sm:text-sm md:text-base lg:text-lg">See
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- Pagination Controls -->
        <div class="mt-6 flex justify-between items-center">
            <button id="prevPage"
                class=" px-2 py-1 md:px-4  md:py-2 m-2 bg-gray-900 text-white rounded-md cursor-pointer">Prev</button>
            <span id="paginationInfo" class="text-sm md:text-lg m-4"></span>
            <button id="nextPage"
                class=" px-2 py-1 md:px-4  md:py-2 m-2 bg-gray-900 text-white rounded-md cursor-pointer">Next</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const perPage = 4;
            let currentPage = 1;

            const $jobCards = $(".job-card");
            const allJobs = $jobCards.toArray();
            let filteredJobs = [...allJobs];

            const $paginationInfo = $("#paginationInfo");
            const $prevPage = $("#prevPage");
            const $nextPage = $("#nextPage");

            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            const modalTitle = document.getElementById("modalTitle");
            const closeModal = document.getElementById("closeModal");

            function showPage(page) {
                const start = (page - 1) * perPage;
                const end = start + perPage;

                $jobCards.hide();
                $(filteredJobs.slice(start, end)).show();

                const totalItems = filteredJobs.length;
                const totalPages = Math.max(1, Math.ceil(totalItems / perPage));

                $paginationInfo.text(
                    `Page ${page} of ${totalPages} | Showing ${start + 1}-${Math.min(end, totalItems)} of ${totalItems} items`
                );

                $prevPage.prop("disabled", page === 1);
                $nextPage.prop("disabled", page >= totalPages);
            }
            // Pagination
            $prevPage.on("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            $nextPage.on("click", () => {
                if (currentPage * perPage < filteredJobs.length) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Filters
            $(".filter-btn").on("click", function() {
                applyFilter(this.dataset.filter);
            });

            // Initial render
            showPage(currentPage);
        });
    </script>
@endsection
