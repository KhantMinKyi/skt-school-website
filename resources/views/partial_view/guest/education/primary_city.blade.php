@extends('layouts.city_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/primary.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-[89px] sm:mt-0"
            id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/primary/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Primary</div>
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
                    Primary <span class="text-emerald-500">Year 3 - 6 </span>
                </p>
            </div>
            <div class=" text-sm md:text-base lg:text-lg p-4">
                The primary school curriculum is engineered for the holistic development of all of its students. The school
                provides the highest standard of individualized education by fostering love of learning in children.
                Teachers aim to enhance each child's self-confidence and self-esteem while, at the same time, challenging
                them academically. This is achieved by...
                Internationally recognized Cambridge Primary Curriculum and assessments which includes Cambridge
                International Primary Checkpoint and yearly progression tests from Year 3 to Year 6.
                <ul class="list-disc list-inside text-gray-800 text-sm md:text-base lg:text-lg mt-2">
                    <li>Aiming to produce competent learners, who are able to communicate effectively.</li>
                    <li>Excursions and field trips that broaden the students' experiences.</li>
                    <li>Projects and activities that encourage students to explore, inquire, question and apply what they
                        know.</li>
                    <li>Working in an environment marked by encouragement.</li>
                    <li>Encouraging students to read a wide range of books</li>
                    <li>Teachers create a stimulating learning environment by displaying students' work.</li>

                </ul>
            </div>
            <!-- END ROW -->

        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <div class="partner-logo py-10  bg-green-50">
        <div class="text-center mb-10 text-xl md:text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            Developing students’ 21st Century skills such as
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class=" grid md:grid-cols-3">
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/problem_solving.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class=" text-sm lg:text-lg"><a href="#">Critical Thinking</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/language.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class=" text-sm lg:text-lg"><a href="#">Communication</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/community.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class=" text-sm lg:text-lg"><a href="#">Collaboration</a></h2>
                        </div>
                    </div>
                    <div class=" grid md:grid-cols-2">
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/add_math.svg') }}" class=" w-14 lg:w-20"
                                alt="" />
                            <h2 class=" text-sm lg:text-lg"><a href="#">Problem Solving</a></h2>
                        </div>
                        <div
                            class="single_tca shadow-md p-6 lg:p-8 border m-2 min-h-28 max-h-40 hover:shadow-lg flex justify-center items-center">
                            <img src="{{ asset('assets/images/icon/leader.svg') }}" class=" w-14 lg:w-20" alt="" />
                            <h2 class=" text-sm lg:text-lg"><a href="#">Leadership</a></h2>
                        </div>
                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div>
    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            {{-- What makes us unique? --}}
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        English <span class="text-emerald-500">Language</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Develops confident
                        communication,
                        critical thinking, and
                        writing skills. Opportunities include research papers, speech contests, essay competitions, debates,
                        and Spelling Bee contests.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500"> Mathematics</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Provides a strong foundation
                        through six
                        key
                        concepts—number, algebra, geometry, measure, data handling, and problem-solving—encouraging
                        collaboration and real-world application.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Science</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg">Covers scientific inquiry,
                        biology,
                        chemistry, and physics,
                        with hands-on experiments in well-equipped labs and an emphasis on environmental awareness.
                    </p>
                </div>

            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        Physical <span class="text-emerald-500">Education</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Enhances agility,
                        coordination, and
                        flexibility through
                        various sports, gymnastics, and tournaments, encouraging active participation in school
                        competitions.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">ICT</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Focuses on modern
                        technology, integrating
                        smart tools,
                        robotics, and extracurricular activities to keep students updated with advancements in computing.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        Social <span class="text-emerald-500">Studies</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Encourages critical thinking
                        and
                        independent learning by
                        focusing on historical lessons rather than rote memorization. Explores global and regional issues,
                        focusing on population, settlements, natural environments, and socio-economic development.
                    </p>
                </div>
            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Art</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Inspires creativity and
                        critical
                        thinking through drawing,
                        painting, and design projects.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        Myanmar <span class="text-emerald-500">Language</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Helps students, both local
                        and
                        non-local, understand
                        Myanmar language and culture for better integration and communication.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Music</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> The primary school music
                        curriculum
                        fosters an
                        understanding and appreciation of music through aural perception, singing, and recognizing different
                        instruments.
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
@endsection
