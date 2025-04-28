@extends($layout)
@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/our_statement.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-[89px]sm:mt-0" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/contact_banners/' . $our_statement->branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div
                    class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $our_statement->branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Our Statement </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <!-- START SCHOOL Statement -->
    <section class="statement "
        style="background-image: url({{ asset('assets/images/banner/course-bg.png') }}); background-size:cover; background-position: center center;">
        <div class="flex justify-center items-center">
            <img src="{{ asset($our_statement->branch->branch_logo) }}" class=" max-h-[200px] md:max-h-[360px]"
                alt="" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mt-10">
            <div class=" max-w-2xl p-10 flex justify-center items-center mx-auto">
                <div class="ab_content">
                    <h2 class=" text-2xl md:text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Vision</span>
                    </h2>
                    <p class=" text-gray-500 mt-4">
                        {!! $our_statement->statement_vision !!}
                    </p>
                </div>
            </div>
            <div class=" max-w-2xl p-10 flex justify-center items-center">
                <div class="ab_content">
                    <h2 class=" text-2xl md:text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Mission</span>
                    </h2>
                    <p class=" text-gray-500 mt-4">
                        {!! $our_statement->statement_mission !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mt-10">
            <div class=" max-w-2xl p-10 flex justify-center items-center mx-auto">
                <div class="ab_content">
                    <h2 class=" text-2xl md:text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Value</span>
                    </h2>
                    <p class="mt-4">
                        <span class="text-xl font-bold ">Respect</span>
                    <p class="pb-2 pt-4">We place great value on the importance of having honour and regard for the worth of
                        oneself and
                        others.</p>
                    <span class="text-xl font-bold ">Responsibility</span>
                    <p class="pb-2 pt-4">We hold in high esteem the notion of individual and collective responsibility
                        towards ourselves, the
                        wider community, and the environment.</p>
                    <span class="text-xl font-bold ">
                        Integrity
                    </span>
                    <p class="pb-2 pt-4">We focus on the state of being whole and undivided; having the strength of
                        character
                        and conscience.
                    </p>
                    <span class="text-xl font-bold ">Compassion</span>
                    <p class="pb-2 pt-4">We encourage and uphold the sense of having concern for the sufferings or
                        misfortunes of others and
                        using this to strive towards selﬂessness.</p>
                    <span class="text-xl font-bold ">Excellence</span>
                    <p class="pb-2 pt-4"> We value the process of striving for excellence, for individual and collective
                        achievement in all
                        aspects of schooling and community action.</p>
                    </p>
                </div>
            </div>
            <div class=" max-w-2xl p-10 flex justify-center items-center">
                <div class="ab_content">
                    <h2 class=" text-2xl md:text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Philosophy</span>
                    </h2>
                    <p class=" text-gray-500 mt-4">
                        {!! $our_statement->statement_philosophy !!}
                    </p>
                </div>
            </div>
        </div>
        {{-- <hr class=" w-1/2 mx-auto py-6 border-emerald-500"> --}}
        <div class="text-center pb-10 ">
            <span class="inline-block w-1 h-1 rounded-full bg-emerald-500 ml-1"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-emerald-500 ml-1"></span>
            <span class="inline-block w-40 h-1 rounded-full bg-emerald-500"></span>
            <span class="inline-block w-3 h-1 rounded-full bg-emerald-500 ml-1"></span>
            <span class="inline-block w-1 h-1 rounded-full bg-emerald-500 ml-1"></span>
        </div>
        <div class="container  mx-auto p-4">
            <div class="section-title text-2xl md:text-4xl mb-6 font-bold">
                <h2>Explore Our <span class="text-teal-500">School</span></h2>


            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 text-center mt-4">
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="ti-face-smile"></i> --}}
                        <img src="{{ asset('assets/images/icon/teacher2.svg') }}" class="mr-4" alt="" />
                        {{-- <i class="fa-solid fa-chalkboard-user"></i> --}}
                        {{-- <span id="counter" class="text-3xl font-bold text-gray-800 mx-4">0</span> --}}
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="152" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Teachers</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
                <div class="mx-2 mb-2">
                    <div class="count-box rounded-lg flex justify-center">
                        {{-- <i class="fa fa-bank" style="color: #ee6c20"></i> --}}
                        <img src="{{ asset('assets/images/icon/program.svg') }}" class="mr-4" alt="" />
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
                        {{-- <i class="fa fa-trophy" style="color: #15be56"></i> --}}
                        <img src="{{ asset('assets/images/icon/award.svg') }}" class="mr-4" alt="" />
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
                        {{-- <i class="fa fa-graduation-cap text-red-500" style="color: #bb0852"></i> --}}
                        <img src="{{ asset('assets/images/icon/student2.svg') }}" class="mr-4" alt="" />
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="645" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p> Students</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
    </section>
    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
