@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/our_history.css') }}" />
    @isset($our_history->branch)
        <section id="home" class="relative  lg:min-h-screen flex items-center justify-center  ">
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
            {{-- <div class="home_content container mx-auto flex flex-col justify-center items-center  "> --}}
            <div id=""
                class="home_content fade-in-out container mx-auto flex flex-col justify-center items-center will_hide_div">
                <h1 id="fading-text" class=" text-center  ml-10">
                    <span class="text-emerald-400">{{ $our_history->branch->branch_name }}</span>
                    <br>
                    <span class="text-white hidden sm:block">Our History</span>
                </h1>
            </div>
        </section>
        <!-- START SCHOOL HISTORY -->
        <section class="school_history mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
                <div class="flex justify-center items-center">
                    <img src="{{ asset($our_history->branch->branch_logo) }}" style="max-height: 420px" alt="" />
                </div>
                <div class=" max-w-2xl p-10">
                    <div class="ab_content">
                        <h2 class=" text-2xl xl:text-4xl font-semibold">
                            History of
                            <span class="text-emerald-400">{{ $our_history->branch->branch_name }}</span>
                        </h2>
                        <p class=" text-gray-500">

                        </p>
                    </div>
                    <div class="abmv mt-4 flex flex-col">
                        <span class="ti-medall"></span>
                        <h4>History</h4>
                        <p>
                            @isset($our_history)
                                {!! $our_history->history_body !!}
                            @endisset
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- START SCHOOL HISTORY -->
    @endisset
    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
