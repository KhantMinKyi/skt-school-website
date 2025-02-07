@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/principal_message.css') }}" />


    <section id="home" class="relative  lg:min-h-screen flex items-center justify-center  ">
        <!-- Background Video -->
        <video autoplay loop muted playsinline class="lg:absolute block top-0 left-0 w-full lg:h-full object-cover">
            @if ($principal_message->branch->branch_short_name == 'SKT-RC')
                <source src="{{ asset('videos/skt_riverside_campus.mp4') }}" type="video/mp4">
            @else
                <source src="{{ asset('videos/skt_city_campus.mp4') }}" type="video/mp4">
            @endif
            Your browser does not support the video tag.
        </video>
        {{-- <div class=" "> --}}
        <div class="home_content container mx-auto flex flex-col justify-center items-center  ">
            <h1 id="fading-text" class=" text-center  ml-10">
                <span class="text-emerald-400">{{ $principal_message->branch->branch_name }}</span>
                <br>
                <span class="text-white">Principal's Message</span>
            </h1>
            <div class="flex justify-center" style="cursor: pointer">
                <img src="{{ asset($principal_message->branch->branch_logo) }}" width="240" class="bounce-up"
                    alt="">
            </div>
        </div>

        {{-- </div> --}}
    </section>
    <!-- START PRINCIPAL MESSAGE -->
    <section class="principal_message my-20">
        <div class="grid grid-cols-1 lg:grid-cols-3 ">
            <div class=" lg:col-span-2  mx-auto p-10">
                <div class="ab_content">
                    <h2 class=" text-xl font-light text-gray-500">
                        {{ $principal_message->branch->branch_name }}
                    </h2>
                    <h2 class=" text-4xl font-semibold">
                        <span class="text-emerald-400">Principal's Message</span>
                    </h2>
                    <p class=" text-gray-500">

                    </p>
                </div>
                <div class="abmv mt-4 principal-message ">
                    <p class="text-xl italic">
                        {{ $principal_message->principal_message }}
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center ">
                <img class="w-[420px] h-[420px] object-cover rounded-full"
                    src="{{ asset($principal_message->principal_photo) }}" alt="" />
            </div>
        </div>
    </section>
    <!-- START PRINCIPAL MESSAGE-->
    {{-- {{ $principal_message }} --}}
@endsection
