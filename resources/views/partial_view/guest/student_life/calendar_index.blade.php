@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/calendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target  kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/student_life_banners/calendar/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                {{-- <div class=" absolute inset-0 flex flex-col items-center justify-center p-8 text-white"
            data-animation="animated fadeInRight">
            <h2 class=" md:text-4xl font-semibold text-teal-500 uppercase">Alumni</h2>
        </div> --}}
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10  mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Calendar </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section id="post" class="blog_area section-padding mt-[89px] sm:mt-0"
        style="background-image: url({{ asset('assets/images/banner/course-bg.png') }}); background-size:cover; background-position: center center;">
        <div class="container mx-auto p-4">
            <div class="section-title">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    School <span class="text-emerald-500">Calendar</span>
                </p>
            </div>
            <!-- / END ROW -->
            <div class=" flex justify-center items-center">
                <!-- END COL-->
                <img src="{{ asset($calendar->calendar_photo) }}" class="w-2/3" alt="">

            </div>
        </div>
        <!-- END CONTAINER  -->
    </section>
@endsection
