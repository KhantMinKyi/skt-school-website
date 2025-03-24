@extends('layouts.city_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/primary.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/primary/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-2xl lg:text-5xl xl:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Primary</div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START TOPIC-->
    <section class="topic_content_area section-padding" style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    Primary <span class="text-emerald-500">Year 2 - 6 </span>
                </p>
            </div>
            <div class=" text-lg p-4">
                At SKT-City Campus, we are committed to developing inquisitive, knowledgeable, and caring learners. As
                a candidate school for the International Baccalaureate (IB) Primary Years Programme (PYP), we provide a
                globally recognized inquiry-based approach to education that nurtures critical thinking, creativity, and
                international-mindedness. We're a Candidate School for the IB Primary Years Programme.
                <br><br>
                We are committed to developing inquisitive, knowledgeable, and caring learners. As a candidate school for
                the International Baccalaureate (IB) Primary Years Programme (PYP), we provide a globally recognized
                inquiry-based approach to education that nurtures critical thinking, creativity, and
                international-mindedness.
                <br><br>
                The IB PYP curriculum for Years 2-6 fosters a concept-driven and inquiry-led learning experience, empowering
                students to take ownership of their learning.
            </div>
            <!-- END ROW -->

        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->
    <div class="py-10  bg-emerald-50">
        <h2 class=" text-2xl text-center mb-8 font-bold text-gray-700">
            Key Features:
        </h2>
        <div class="grid md:grid-cols-2 gap-10 container mx-auto">
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between flex-col sm:flex-row items-start">
                                <div class="text-3xl font-extrabold">Transdisciplinary Approach</div>
                                <img src="{{ asset('assets/images/icon/transdisciplinary.svg') }}" class=" w-20"
                                    alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-extrabold mb-4 ">Transdisciplinary Approach</div>
                            <div class="flex-grow">
                                <p class="text-lg ">
                                    Connecting subjects for meaningful learning experiences.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto ">
                                <img src="{{ asset('assets/images/icon/transdisciplinary.svg') }}" class=" w-16"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start">
                                <div class="text-3xl font-extrabold">Student Agency</div>
                                <img src="{{ asset('assets/images/icon/asking.svg') }}" class=" w-20" alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-extrabold mb-4 ">Student Agency</div>
                            <div class="flex-grow">
                                <p class="text-lg ">
                                    Encouraging students to ask questions and drive their own learning.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/asking.svg') }}" class=" w-16" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start">
                                <div class="text-3xl font-extrabold">Assessment for Learning</div>
                                <img src="{{ asset('assets/images/icon/assessment.svg') }}" class=" w-20" alt="" />
                            </div>

                            <div class="mt-auto">
                                <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-extrabold mb-4 ">Assessment for Learning</div>
                            <div class="flex-grow">
                                <p class="text-lg ">
                                    Ongoing feedback and reflection to support growth.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/assessment.svg') }}" class=" w-16"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start">
                                <div class="text-3xl font-extrabold">Action & Community Engagement</div>
                                <img src="{{ asset('assets/images/icon/community.svg') }}" class=" w-20" alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-extrabold mb-4 ">Action & Community Engagement</div>
                            <div class="flex-grow">
                                <p class="text-lg ">
                                    Inspiring students to make a difference in the world.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/community.svg') }}" class=" w-16"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between flex-col sm:flex-row items-start">
                                <div class="text-3xl font-extrabold">Language & Communication</div>
                                <img src="{{ asset('assets/images/icon/language.svg') }}" class=" w-20"
                                    alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-extrabold mb-4 ">Language & Communication</div>
                            <div class="flex-grow">
                                <p class="text-lg ">
                                    Strong English literacy program with opportunities for multilingual development.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/language.svg') }}" class=" w-16"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start">
                                <div class="text-3xl font-extrabold">STEM & Digital Literacy</div>
                                <img src="{{ asset('assets/images/icon/problem_solving.svg') }}" class=" w-20"
                                    alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-teal-200 to-teal-400  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-extrabold mb-4 ">STEM & Digital Literacy</div>
                            <div class="flex-grow">
                                <p class="text-lg ">
                                    Integrating technology and hands-on problem-solving.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/problem_solving.svg') }}" class=" w-16"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            What makes us unique?
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        ✔ IB-Driven <span class="text-emerald-500">Philosophy</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Aligning with global best practices in education.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        ✔ Experienced & <span class="text-emerald-500"> Passionate Educators</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Dedicated to student-centered learning.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        ✔ Supportive <span class="text-emerald-500">Learning Environment</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800">Small class sizes for personalized attention.
                    </p>
                </div>

            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        ✔ Focus on <span class="text-emerald-500">Holistic Growth</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Beyond academics, we nurture creativity, collaboration, and
                        resilience.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        ✔ Diverse & <span class="text-emerald-500">Inclusive Community</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> WEncouraging intercultural understanding and respect.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        ✔ Rigorous Academic Program Aligned with <span class="text-emerald-500">the Cambridge
                            Curriculum</span>
                        {{-- <hr class="w-28 text-center my-2 border-emerald-500 "> --}}
                    </p>
                    {{-- <p class="p-1 font-semibold text-gray-800"> WEncouraging intercultural understanding and respect.
                    </p> --}}
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
    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-green-700">
            What can you expect to see in the SKT Inquiry classroom?
        </div>
        {{-- <div class="container mx-auto p-4">
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        Science and <span class="text-emerald-500">Nature</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Hands-on exploration and discoveries spark a lifelong
                        curiosity about the world.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        Art and <span class="text-emerald-500">Craft</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Self-expression through painting, drawing, and various
                        craft projects.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Technology</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800">Age-appropriate introduction to technology and digital
                        literacy.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        Social Skills and <span class="text-emerald-500">Etiquette</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Learning to interact positively with peers and adults.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        Physical Education, Gymnastics and <span class="text-emerald-500">Swimming</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Building strength, coordination and confidence.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        Field <span class="text-emerald-500">trips</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> (if applicable) Exciting excursions to expand learning
                        experiences.

                    </p>
                </div>
            </div>
            <div class="inline-flex items-center justify-center w-full">
                <hr class="w-64 h-1 mb-4 bg-emerald-200 border-0 rounded-sm ">
                <div class="absolute px-4 -translate-x-1/2 -translate-y-1/3 bg-green-50 left-1/2 ">
                    <img src="{{ asset('assets/images/icon/double_quotes.svg') }}" class="w-8 text-emerald-200"
                        alt="">
                </div>
            </div>
        </div> --}}
        <div class=" container mx-auto">
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-10 ">
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/1.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 sm:w-96 sm:h-96 bg-green-500  font-extrabold text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        hands-on activities and concrete materials
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/2.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 sm:w-96 sm:h-96 bg-green-500  font-extrabold text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Collaboration
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/3.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 sm:w-96 sm:h-96 bg-green-500  font-extrabold text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Discussions and conversations
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/4.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 sm:w-96 sm:h-96 bg-green-500  font-extrabold text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Real-world experiences
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/5.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 sm:w-96 sm:h-96 bg-green-500  font-extrabold text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Presentations and taking actions
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/6.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 sm:w-96 sm:h-96 bg-green-500  font-extrabold text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Using ICT tools
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center  text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            We aim our students to embody the IB PYP Learners Profile
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="section-title p-4">
                <h2>What is the PYP Learner Profile?</h2>
                <h6 class="font-extrabold text-xl ">
                    The PYP Learner Profile embodies the attributes that help students become responsible,
                    internationally-minded individuals. <span class="text-emerald-500">Our students develop as: </span>
                </h6>
            </div>
            <div class="grid md:grid-cols-2 gap-10">
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Inquirers </span> - <span class="text-lg"> Cultivating curiosity
                            and lifelong learning.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Thinkers </span> - <span class="text-lg"> Developing critical and
                            creative problem-solving
                            skills.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Communicators </span> - <span class="text-lg"> Expressing ideas
                            confidently in multiple
                            languages and forms.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Principled </span> - <span class="text-lg"> Acting with integrity,
                            honesty, and fairness.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Open-Minded </span> - <span class="text-lg"> Appreciating diverse
                            perspectives and
                            cultures.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Caring </span> - <span class="text-lg"> Showing empathy and
                            commitment to community
                            service.</span>

                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Risk-Takers </span> - <span class="text-lg"> Embracing challenges
                            and uncertainty with
                            confidence.</span>

                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Balanced </span> - <span class="text-lg"> Understanding the
                            importance of intellectual,
                            physical, and emotional well-being.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Reflective </span> - <span class="text-lg"> Thoughtfully
                            considering experiences to grow as
                            learners.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="p-4">
            <h2 class="text-xl font-bold my-4">
                Join Our Learning Community
            </h2>
            <p class=" font-semibold text-lg text-gray-700">
                <span class=" text-teal-500 font-extrabold">SKT-City</span> is dedicated to fostering an environment
                where students excel academically and develop into
                compassionate, global citizens.
            </p>
        </div>
    </div>
@endsection
