@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/our_history.css') }}" />
    @isset($our_history->branch)
        {{-- <section id="home" class="relative  lg:min-h-screen flex items-center justify-center  ">
            <!-- Background Video -->
            <div class="absolute inset-0 w-full h-full">
                <video autoplay loop muted playsinline class="lg:absolute block top-0 left-0 w-full lg:h-full object-cover">
                    @if ($our_history->branch->branch_short_name == 'SKT-RC')
                        <source src="{{ asset('videos/skt_riverside_campus.mp4') }}" type="video/mp4">
                    @else
                        <source src="{{ asset('videos/skt_city_campus.mp4') }}" type="video/mp4">
                    @endif
                    Your browser does not support the video tag.
                </video>

                <div class="absolute inset-0 bg-black opacity-80 fade-in-out-background "></div>
            </div>
            <div id=""
                class="home_content fade-in-out container mx-auto flex flex-col justify-center items-center will_hide_div">
                <h1 id="fading-text" class=" text-center  ml-10">
                    <span class="text-emerald-400">{{ $our_history->branch->branch_name }}</span>
                    <br>
                    <span class="text-white hidden sm:block">Our History</span>
                </h1>
            </div>
        </section> --}}

        <div id="kenburns_061"
            class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
            data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
                <!-- First Slide -->
                <div class="carousel-item active w-full flex-shrink-0">
                    <img src="{{ asset('img/banner/contact_banners/' . $our_history->branch->branch_short_name . '.jpg') }}"
                        alt="slider-image" class="w-full h-auto object-cover" />
                    <div
                        class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div  ">
                        <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                            <span class="text-emerald-400">{{ $our_history->branch->branch_name }}</span>
                            <br>
                            <div class="text-white mt-4 hidden sm:block">Our History </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- START SCHOOL HISTORY -->
        <section class="school_history mb-10 mt-[89px] sm:mt-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
                <div class="flex justify-center items-center">
                    <img src="{{ asset($our_history->branch->branch_logo) }}" class=" max-h-[200px] md:max-h-[360px]"
                        alt="" />
                </div>
                <div class=" max-w-2xl p-10">
                    <div class="ab_content">
                        <h2 class=" text-xl md:text-3xl  xl:text-4xl font-bold">
                            History of
                            <span class="text-emerald-400">{{ $our_history->branch->branch_name }}</span>
                        </h2>
                        <p class=" text-gray-500">

                        </p>
                    </div>
                    <div class="abmv mt-4 flex flex-col">
                        <span class="ti-medall"></span>
                        <h4>History</h4>
                        <div class="prose max-w-none">
                            <p>
                                @isset($our_history)
                                    {!! $our_history->history_body !!}
                                @endisset
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START SCHOOL HISTORY -->
    @endisset
    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
