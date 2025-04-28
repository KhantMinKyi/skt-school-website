@extends($layout)

@section('content')
    <style>

    </style>

    <link rel="stylesheet" href="{{ asset('guests/css/principal_message.css') }}" />


    {{-- <section id="home" class="relative  lg:min-h-screen flex items-center justify-center  ">
        <!-- Background Video -->
        <div class="absolute inset-0 w-full h-full ">
            <video autoplay loop muted playsinline class="lg:absolute block top-0 left-0 w-full lg:h-full object-cover ">
                @if ($principal_message->branch->branch_short_name == 'SKT-RC')
                    <source src="{{ asset('videos/skt_riverside_campus.mp4') }}" type="video/mp4">
                @else
                    <source src="{{ asset('videos/skt_city_campus.mp4') }}" type="video/mp4">
                @endif
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black opacity-80 fade-in-out-background  "></div>
        </div>
        <div id=""
            class="home_content fade-in-out container mx-auto flex flex-col justify-center items-center will_hide_div">
            <h1 id="fading-text" class=" text-center  ml-10">
                <span class="text-emerald-400">{{ $principal_message->branch->branch_name }}</span>
                <br>
                <span class="text-white hidden sm:block">Our Head of School's Message</span>
            </h1>
        </div>
    </section> --}}
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-[89px] sm:mt-0" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset($principal_message->principal_photo) }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
                <div
                    class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $principal_message->branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Our Head of School's Message </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START PRINCIPAL MESSAGE -->
    <section class="principal_message mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 ">
            <div class=" lg:col-span-2  mx-auto p-10">
                <div class="ab_content">
                    <h2 class=" text-lg md:text-xl lg:text-2xl font-light text-gray-500 mb-2">
                        {{ $principal_message->branch->branch_name }}
                    </h2>
                    <h2 class=" text-xl md:text-2xl lg:text-4xl font-semibold">
                        <span class="text-emerald-400">Our Head of School's Message</span>
                    </h2>
                    <p class=" text-gray-500">

                    </p>
                </div>
                <div class="abmv mt-4 principal-message ">
                    <p class=" text-sm md:text-xl italic">
                        {{ $principal_message->principal_message }}
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center flex-col">
                <img class="w-[200px] h-[200px] md:w-[382px] md:h-[382px] lg:w-[420px] lg:h-[420px] object-cover rounded-full"
                    src="{{ asset($principal_message->principal_photo) }}" alt="" />
                <p class="mt-4 bold text-lg md:text-xl lg:text-2xl italic">{{ $principal_message->principal_name }}</p>
            </div>
        </div>
    </section>
    <!-- START PRINCIPAL MESSAGE-->
    {{-- {{ $principal_message }} --}}
    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
