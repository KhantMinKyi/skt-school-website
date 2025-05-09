@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/college_counseling_service.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/admission_banners/college_counseling_service/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">College Counseling Service </div>
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
                    College Counseling <span class="text-emerald-500">Service</span>
                </p>
            </div>
            <div class=" p-4">
                <h2 class="text-lg md:text-xl lg:text-2xl font-bold py-4"> College Counseling Services</h2>
                <p class=" text-sm md:text-lg">
                    Empowering Students for Their Next Steps at SKT, we understand that choosing a college or university is
                    one of the most important decisions a student will make. Our College Counseling Department is here to
                    guide students through this journey with personalized support, helping them to identify the best-fit
                    institutions based on their individual academic, social, and career goals.
                </p>
            </div>
            <div class=" p-4">
                <h2 class="text-lg md:text-xl lg:text-2xl font-bold py-4"> Our Approach</h2>
                <p class="text-sm md:text-lg">

                    We take a student-centered approach, recognizing the unique strengths, interests, and aspirations of
                    each student. Our counselors work closely with students and their families to develop a strategic and
                    realistic plan for the application process.
                </p>
            </div>
            <!-- END ROW -->

        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->
    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text-lg md:text-xl lg:text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            Services We Provide
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        One-on-One <span class="text-emerald-500">Counseling</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg">Personalized sessions with our experienced
                        counselors to
                        discuss academic interests, career goals, and college options.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        College <span class="text-emerald-500">Exploration</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Guidance on researching and identifying
                        colleges and
                        universities that match the student’s academic profile, interests, and values.
                    </p>
                </div>

            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Application <span class="text-emerald-500">Support</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg">Assistance with every step of the college
                        application
                        process, including selecting schools, filling out applications, and meeting deadlines.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Essay <span class="text-emerald-500">Guidance</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Expert advice on crafting compelling
                        personal statements and
                        essays that reflect the student’s unique experiences and perspectives.
                    </p>
                </div>
            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Standardized <span class="text-emerald-500">Testing Strategy</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg">Counseling on the best approach to
                        standardized tests (SAT,
                        ACT, etc.) and support in scheduling and preparing for them.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Interview <span class="text-emerald-500">Preparation</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Mock interviews and coaching to help
                        students feel confident
                        and articulate during college admission interviews.
                    </p>
                </div>
            </div>
            {{-- Seperate Line --}}
            <div class="inline-flex items-center justify-center w-full">
                <hr class="w-64 h-1 mb-4 bg-emerald-200 border-0 rounded-sm ">
                <div class="absolute px-4 -translate-x-1/2 -translate-y-1/3 bg-yellow-50 left-1/2 ">
                    <img src="{{ asset('assets/images/icon/double_quotes.svg') }}" class="w-8 text-emerald-200"
                        alt="">
                </div>
            </div>
        </div>

    </div>
    <div class="container mx-auto">
        <div class="section-title p-4 mt-10">
            <p>
                Comprehensive <span class="text-emerald-500">Resources</span>
            </p>
            <h2>We provide access to a wealth of resources, including:</h2>
        </div>
        <div class=" p-4">
            <p class="text-sm md:text-lg">
                College guidence software platform (Cidentify) <br>
                Scholarship search tools <br>
                Workshops and webinars on college admissions trends <br>
                Alumni networks for mentorship and advice <br>
                A Global Perspective <br>
                Our counselors have extensive experience working with international students, helping them navigate the
                nuances of applying to colleges around the world, including the U.S., U.K., Canada, Australia, and Europe.
                We understand the intricacies of each system and ensure that students are well-prepared to meet the
                requirements of their target institutions.
            </p>
        </div>
        <div class=" p-4">
            <h2 class="text-base md:text-xl font-bold py-4"> Building Futures, Together</h2>
            <p class="text-sm md:text-lg">
                At SKT, we are committed to helping our students pursue their dreams. With personalized attention and expert
                guidance, we help each student find the right path to success in higher education and beyond.
            </p>
        </div>
        <!-- END ROW -->

    </div>
@endsection
