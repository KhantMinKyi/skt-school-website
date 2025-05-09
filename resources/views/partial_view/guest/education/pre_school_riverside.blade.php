@extends('layouts.riverside_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/pre_school.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out  hidden sm:flex"
            id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/pre_school/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10  mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Pre School </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START TOPIC-->
    <section class="topic_content_area section-padding mt-[89px] sm:mt-0" style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    Pre School <span class="text-emerald-500">Age 3 - 6</span>
                </p>
            </div>
            <div class=" text-sm md:text-lg p-4">
                At SKT International Preschool, we believe in nurturing the whole child through a playful and engaging
                learning approach. We're a Candidate School for the IB PYP Early Years Programme, meaning our curriculum is
                designed to foster your child's natural curiosity and love of learning. Our play-based, inquiry-driven
                program focuses on holistic development, covering:

            </div>
            <!-- END ROW -->

        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->
    <div class="py-10  bg-emerald-50">
        <div class="grid md:grid-cols-2 gap-10 container mx-auto">
            <div class="group   [perspective:1000px]">
                <div
                    class=" will-change-transform duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-white p-6 text-gray-800 shadow-lg [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start">
                                <div class="text-lg md:text-3xl font-extrabold">Creative Exploration</div>
                                <img src="{{ asset('assets/images/icon/music.svg') }}" class=" w-20" alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-xs md:text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-white  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-lg md:text-3xl font-extrabold mb-4 ">Creative Exploration</div>
                            <div class="flex-grow">
                                <p class="text-xs md:text-lg ">
                                    We provide a rich environment filled with stimulating activities like art, music,
                                    dramatic play, building blocks, sand and water play, and more! Children explore their
                                    world hands-on, developing their creativity and problem-solving skills.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/music.svg') }}" class=" w-16" alt="" />
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
                                <div class="text-lg md:text-3xl font-extrabold">Academic Foundations</div>
                                <img src="{{ asset('assets/images/icon/literacy.svg') }}" class=" w-20" alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-xs md:text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-white  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-lg md:text-3xl font-extrabold mb-4 ">Academic Foundations</div>
                            <div class="flex-grow">
                                <p class="text-xs md:text-lg ">
                                    Through play and inquiry, your child will build a strong foundation in literacy, math,
                                    and science. Our engaging lessons are tailored to their age and developmental stage,
                                    incorporating storytelling, music, and movement to make learning fun. We also introduce
                                    important life skills, such as etiquette and safety.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/literacy.svg') }}" class=" w-16" alt="" />
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
                                <div class="text-lg md:text-3xl font-extrabold">Physical Development</div>
                                <img src="{{ asset('assets/images/icon/sport_player.svg') }}" class=" w-20"
                                    alt="" />
                            </div>

                            <div class="mt-auto">
                                <p class="text-xs md:text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-white  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-lg md:text-3xl font-extrabold mb-4 ">Physical Development</div>
                            <div class="flex-grow">
                                <p class="text-xs md:text-lg ">
                                    We believe in the importance of physical activity for healthy development. Your child
                                    will enjoy exciting physical education classes, gymnastics, and swimming lessons.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/sport_player.svg') }}" class=" w-16"
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
                                <div class="text-lg md:text-3xl font-extrabold">Social-Emotional Growth</div>
                                <img src="{{ asset('assets/images/icon/social_studies.svg') }}" class=" w-20"
                                    alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-xs md:text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-white  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-lg md:text-3xl font-extrabold mb-4 ">Social-Emotional Growth</div>
                            <div class="flex-grow">
                                <p class="text-xs md:text-lg ">
                                    We nurture your child's social and emotional well-being through positive reinforcement,
                                    engaging activities, and strong parent involvement. Your child will learn to cooperate,
                                    share, and express themselves confidently.
                                </p>
                            </div>
                            <div class="flex justify-end items-center mt-auto">
                                <img src="{{ asset('assets/images/icon/social_studies.svg') }}" class=" w-16"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="group   [perspective:1000px]">
                <div
                    class=" duration-1000 w-full h-full [transform-style:preserve-3d] group-hover:[transform:rotateX(180deg)]">
                    <div
                        class="absolute w-full h-full rounded-xl bg-gradient-to-br from-violet-400 to-indigo-600 p-6 text-white [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="flex justify-between items-start">
                                <div class="text-3xl font-bold">Card Title</div>
                                <div class="text-5xl">🌟</div>
                            </div>
                            <div class="mt-4">
                                <p class="text-lg">
                                    Front content goes here. This is visible before hovering.
                                </p>
                            </div>
                            <div class="mt-auto">
                                <p class="text-sm opacity-75">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-gradient-to-br from-pink-400 to-purple-600 p-6 text-white [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-2xl font-bold mb-4">Back Side</div>
                            <div class="flex-grow">
                                <p class="text-lg">
                                    Through play and inquiry, your child will build a strong foundation in literacy,
                                    math,
                                    and science. Our engaging lessons are tailored to their age and developmental stage,
                                    incorporating storytelling, music, and movement to make learning fun. We also
                                    introduce
                                    important life skills, such as etiquette and safety.
                                </p>
                            </div>
                            <div class="flex justify-between items-center mt-auto">
                                <button
                                    class="px-4 py-2 bg-white text-purple-600 rounded-lg font-semibold hover:bg-opacity-90 transition-colors">
                                    Action
                                </button>
                                <span class="text-3xl">✨</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>


    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text:xl md:text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            Our Program Includes:
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Inquiry-Based <span class="text-emerald-500">Learning</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg">Children explore their interests and
                        questions through
                        hands-on activities
                        and open-ended projects.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Play-Based <span class="text-emerald-500">Learning</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Learning happens through play! We use
                        age-appropriate
                        materials and activities to make learning fun and engaging.
                    </p>
                </div>

            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Music and <span class="text-emerald-500">Movement</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg">Singing, dancing, and musical activities
                        enhance your
                        child's creativity and coordination.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Literacy and <span class="text-emerald-500">Math</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> We lay a strong foundation in reading,
                        writing and number
                        skills.
                    </p>
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
        <div class="text-center mb-10 text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
        </div>
        <div class="container mx-auto p-4">
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Science and <span class="text-emerald-500">Nature</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Hands-on exploration and discoveries
                        spark a lifelong
                        curiosity about the world.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Art and <span class="text-emerald-500">Craft</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Self-expression through painting,
                        drawing, and various
                        craft projects.
                    </p>
                </div>
            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Technology</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg">Age-appropriate introduction to
                        technology and digital
                        literacy.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Social Skills and <span class="text-emerald-500">Etiquette</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Learning to interact positively with
                        peers and adults.
                    </p>
                </div>
            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Physical Education, Gymnastics and <span class="text-emerald-500">Swimming</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> Building strength, coordination and
                        confidence.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg md:text-xl font-extrabold uppercase">
                        Field <span class="text-emerald-500">trips</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-lg"> (if applicable) Exciting excursions to
                        expand learning
                        experiences.

                    </p>
                </div>
            </div>
            {{-- Seperate Line --}}
            <div class="inline-flex items-center justify-center w-full">
                <hr class="w-64 h-1 mb-4 bg-emerald-200 border-0 rounded-sm ">
                <div class="absolute px-4 -translate-x-1/2 -translate-y-1/3 bg-green-50 left-1/2 ">
                    <img src="{{ asset('assets/images/icon/double_quotes.svg') }}" class="w-8 text-emerald-200"
                        alt="">
                </div>
            </div>
        </div>

    </div>
@endsection
