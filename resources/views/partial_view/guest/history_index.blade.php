@extends($layout)

@isset($our_history->branch)
    <link rel="stylesheet" href="{{ asset('guests/css/our_history.css') }}" />
    @section('content')
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

                <div class="absolute inset-0 bg-black opacity-80"></div>
            </div>
            <div class="home_content container mx-auto flex flex-col justify-center items-center  ">
                <h1 id="fading-text" class=" text-center  ml-10">
                    <span class="text-emerald-400">{{ $our_history->branch->branch_name }}</span>
                    <br>
                    <span class="text-white">Our History</span>
                </h1>
                <div class="flex justify-center" style="cursor: pointer">
                    <img src="{{ asset($our_history->branch->branch_logo) }}" width="240" class="bounce-up" alt="">
                </div>
            </div>
        </section>
        {{ $our_history }}
    @endsection
@endisset
