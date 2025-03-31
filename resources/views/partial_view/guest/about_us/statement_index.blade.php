@extends($layout)
@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/our_statement.css') }}" />
    <section id="home" class="relative  lg:min-h-screen flex items-center justify-center  ">
        <!-- Background Video -->
        <div class="absolute inset-0 w-full h-full">
            <video autoplay loop muted playsinline class="lg:absolute block top-0 left-0 w-full lg:h-full object-cover">
                @if ($our_statement->branch->branch_short_name == 'SKT-RC')
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
                <span class="text-emerald-400">{{ $our_statement->branch->branch_name }}</span>
                <br>
                <span class="text-white hidden sm:block">Our Statement</span>
            </h1>
            {{-- <div class="flex justify-center" style="cursor: pointer">
                <img src="{{ asset($our_statement->branch->branch_logo) }}" width="240" class="bounce-up" alt="">
            </div> --}}
        </div>
    </section>


    <!-- START SCHOOL Statement -->
    <section class="statement mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div class="flex justify-center items-center">
                <img src="{{ asset($our_statement->branch->branch_logo) }}" style="max-height: 420px" alt="" />
            </div>
            <div class=" max-w-2xl p-10 flex justify-center items-center">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Vision</span>
                    </h2>
                    <p class=" text-gray-500 mt-4">
                        {!! $our_statement->statement_vision !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 mt-10">
            <div class=" max-w-2xl p-10 flex justify-center items-center mx-auto">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Mission</span>
                    </h2>
                    <p class=" text-gray-500 mt-4">
                        {!! $our_statement->statement_mission !!}
                    </p>
                </div>
            </div>
            <div class=" max-w-2xl p-10 flex justify-center items-center">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
                        Our
                        <span class="text-emerald-400">Philosophy</span>
                    </h2>
                    <p class=" text-gray-500 mt-4">
                        {!! $our_statement->statement_philosophy !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="  container mx-auto ">
            <div class=" max-w-2xl p-10 flex justify-center items-center">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
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
        </div>
    </section>
    <!-- START SCHOOL Statement -->

    <hr class=" w-1/2 mx-auto">

    <!-- START SCHOOL INFO COUNTER -->
    <section id="" class=" m-6">
        <div class="container  mx-auto">
            <div class="section-title text-4xl mb-6 font-bold">
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
        <!--- END CONTAINER -->
    </section>
    <!-- END SCHOOL INFO COUNTER -->
    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
