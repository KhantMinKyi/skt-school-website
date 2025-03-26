@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/alumni.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />

    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/student_life_banners/alumini/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                {{-- <div class=" absolute inset-0 flex flex-col items-center justify-center p-8 text-white"
                    data-animation="animated fadeInRight">
                    <h2 class=" md:text-4xl font-semibold text-teal-500 uppercase">Alumni</h2>
                </div> --}}
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl  text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <span class="text-white">Alumni </span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="grid grid-cols-1 md:grid-cols-2 py-2 md:py-20"
            style="background-image: url({{ asset('assets/images/banner/course-bg.png') }}); background-size:cover; background-position: center center;">
            <div class="flex items-center justify-center p-20 italic font-semibold">
                Today's BFI represents an evolving community bred from four
                distinct institutions – SKT, BISA,NISA and
                MISA. These schools, each with rich histories and cultures of their own, have evolved into a cohesive
                community that embraces the diverse traditions and values of its founding institutions. There is no better
                representation of the important history that makes up the fabric of today’s BFI than our alumni community.
                As you value the memories and mission of your own alma mater, take the time to visit our campus, read Quest
                magazine, and connect with your favourite faculty members who are still at BFI – you’ll see these values
                reflected and celebrated in our current culture.
                Please join us at an event, consider volunteering and contact our Development Office to learn more about the
                many ways you can get involved! For more information please contact the Development Office at
                alumni@bfi-edu.com
            </div>
            <div class="flex items-center justify-center gap-10">
                {{-- <img src="{{ asset('img/banner-hero.png') }}" class=" home-banner-hero" alt="" /> --}}
                <img src="{{ asset($branch->branch_logo) }}" style="max-height: 420px" class=" home-banner-hero"
                    alt="" />
            </div>
        </div>
    </section>

    <div class="bg-gradient-to-b from-gray-100 to-white py-16 px-6 md:px-16">
        <!-- Heading -->
        <h2 class="text-center text-3xl md:text-4xl font-semibold text-blue-900 uppercase">
            Students' Nationalities
        </h2>

        <div class="mt-12 flex flex-col md:flex-row items-center justify-center gap-10">
            <!-- Nationalities Box -->
            <div
                class="border-2 border-green-300 rounded-xl p-10 text-center shadow-lg w-72 hover:bg-green-300 cursor-pointer hover:shadow-xl">
                <p class="text-gray-600 uppercase text-xl">Over</p>
                <p class="text-green-600 text-6xl font-bold"><span data-purecounter-start="0" data-purecounter-end="25"
                        data-purecounter-duration="1" class="purecounter"></span></p>
                <p class="text-gray-600 uppercase text-xl">Nationalities</p>
            </div>

            <!-- Progress Bar Section -->
            <div class="w-full md:w-2/3">
                <!-- Labels above progress bar segments -->
                <div class="flex justify-between">
                    <div class="w-2/3 text-center">
                        <span class="text-xl font-bold text-blue-900">Local</span>
                    </div>
                    <div class="w-1/6 text-center">
                        <span class="text-xl font-bold text-green-400">Asia</span>
                    </div>
                    <div class="w-1/6 text-center">
                        <span class="text-xl font-bold text-blue-500">Western</span>
                    </div>
                </div>
                <!-- Progress Bar -->
                <div class="w-full bg-gray-200 h-6 rounded-full flex mt-2">
                    <div class="bg-blue-900 h-6 rounded-l-full w-2/3"></div>
                    <div class="bg-green-400 h-6 w-1/6"></div>
                    <div class="bg-blue-500 h-6 rounded-r-full w-1/6"></div>
                </div>
                <!-- Description Text -->
                <p class="mt-6 text-gray-600 text-lg">
                    We are a diverse community. We embrace people of all nations, cultures, and
                    backgrounds. We teach and care for our students in every way. At SKT, everyone
                    is welcome and treated with respect and dignity.
                </p>
            </div>
        </div>
    </div>
@endsection
