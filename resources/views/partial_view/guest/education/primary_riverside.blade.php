@extends('layouts.riverside_layout')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/primary.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/education_banners/primary/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div">
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
    <section class="topic_content_area section-padding mt-[89px] sm:mt-0"
        style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    Primary <span class="text-emerald-500">Year 2 - 6 </span>
                </p>
            </div>
            <div class=" text-sm md:text-base lg:text-lg p-4">
                At SKT-Riverside Campus, we are committed to developing inquisitive, knowledgeable, and caring learners. As
                a candidate school for the International Baccalaureate (IB) Primary Years Programme (PYP), we provide a
                globally recognized inquiry-based approach to education that nurtures critical thinking, creativity, and
                international-mindedness.
                <br><br>
                The IB PYP curriculum for Years 2-6 fosters a concept-driven and inquiry-led learning experience, empowering
                students to take ownership of their learning.
            </div>
            <!-- END ROW -->
            <hr>
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->


    {{-- PYP Tab --}}
    <section class="container mx-auto p-4">
        <div>
            <h2 class=" text-xl lg:text-2xl  mb-8 font-bold text-emerald-500">
                Primary Years Programme (PYP) at SKT Riverside Campus
            </h2>
            <h3 class=" text-lg lg:text-xl  my-8 font-bold text-gray-700">
                Inspiring Young Minds, Nurturing Global Citizens
            </h3>
            <p>
                At SKT Riverside Campus, we are proud to implement the International Baccalaureate (IB) Primary Years
                Programme (PYP) — a world-renowned curriculum framework designed for students aged 3 to 12.
                The PYP nurtures and challenges young learners to become inquirers, thinkers, and communicators who are
                empowered to take ownership of their learning and make a positive difference in the world around them.

            </p>
        </div>

        <div class="w-full  mx-auto px-4 py-6">
            <!-- Tab Navigation -->
            <div class="flex border-b border-gray-200 space-x-4 overflow-x-auto" id="pypTabs">
                <button data-tab="unique"
                    class="pyp-tab py-2 px-4 font-semibold  whitespace-nowrap border-b-2 border-transparent text-sm sm:text-base">What
                    Makes PYP Unique</button>
                <button data-tab="components"
                    class="pyp-tab py-2 px-4 font-semibold  whitespace-nowrap border-b-2 border-transparent text-sm sm:text-base">Key
                    PYP Components</button>
                <button data-tab="environment"
                    class="pyp-tab py-2 px-4 font-semibold  whitespace-nowrap border-b-2 border-transparent text-sm sm:text-base">Learning
                    at Riverside</button>
            </div>

            <!-- Tab Content -->
            <div class="mt-6 space-y-4 text-gray-700">
                <!-- Tab 1 -->
                <div id="tab-unique" class="pyp-content">
                    <h2 class="text-xl font-bold mb-2">What Makes the PYP Unique at SKT Riverside?</h2>
                    <ul class="list-disc ml-6 space-y-2">
                        <li><strong>Inquiry-Based Learning:</strong> Learning is driven by students’ natural curiosity. Our
                            classrooms are dynamic spaces where students ask meaningful questions, explore concepts deeply,
                            and reflect on their learning journeys.</li>
                        <li><strong>Concept-Driven Curriculum:</strong> The PYP focuses on big ideas that go across subject
                            boundaries. Through transdisciplinary themes, students learn to make connections between local
                            and global contexts.</li>
                        <li><strong>Student Agency:</strong>At SKT Riverside, students have voice, choice, and ownership.
                            They are actively involved in planning, goal-setting, and assessing their own learning.</li>
                        <li><strong>Whole-Child Development:</strong> We focus on academic excellence while nurturing
                            social-emotional well-being, international-mindedness, and lifelong learning habits.</li>
                        <li><strong>Action-Oriented Learning:</strong> We encourage students to take action based on what
                            they’ve learned — whether it’s helping their peers, initiating a community project, or spreading
                            awareness about global issue.</li>
                    </ul>
                </div>

                <!-- Tab 2 -->
                <div id="tab-components" class="pyp-content hidden">
                    <h2 class="text-xl font-bold mb-2">Key Components of the PYP</h2>
                    <p class="font-semibold mt-4">Transdisciplinary Themes:</p>
                    <p class=" my-4">Learning is framed around six engaging themes that cross subject areas and promote
                        global understanding.</p>
                    <ul class="list-disc ml-6 space-y-1">
                        <li>Who We Are</li>
                        <li>Where We Are in Place and Time</li>
                        <li>How We Express Ourselves</li>
                        <li>How the World Works</li>
                        <li>How We Organize Ourselves</li>
                        <li>Sharing the Planet</li>
                    </ul>

                    <p class="font-semibold mt-4">The Learner Profile:</p>
                    <p class="ml-4"><em>The IB Learner Profile is at the heart of all we do. We strive to develop students
                            who are:</em></p>
                    <ul class="list-disc ml-6 space-y-1">
                        <li>Inquirers, Knowledgeable, Thinkers, Communicators, Principled, Open-minded, Caring, Risk-takers,
                            Balanced, and Reflective.</li>
                    </ul>
                    <p class="font-semibold mt-4">Assessment for Learning:</p>
                    <p class="ml-4">Ongoing assessments are used to inform teaching and guide students in understanding
                        their progress. We emphasize growth, reflection, and goal setting over one-time test scores.</p>
                </div>

                <!-- Tab 3 -->
                <div id="tab-environment" class="pyp-content hidden">
                    <h2 class="text-xl font-bold mb-2">A Learning Environment Like No Other</h2>
                    <p>Our Riverside Campus provides a safe, stimulating, and inclusive environment where learning is
                        personalized and meaningful. Classrooms are rich with student voice, collaborative inquiry, and
                        hands-on exploration.
                    </p>
                    <p class="mt-2">Whether in the classroom, on the playground, or in the community, SKT learners are
                        constantly growing — not just academically, but as responsible, compassionate individuals prepared
                        for the future.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="py-10  bg-emerald-50">
        <h2 class=" text-xl lg:text-2xl text-center mb-8 font-bold text-gray-700">
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
                                <div class="text-lg lg:text-2xl font-extrabold">Transdisciplinary Approach</div>
                                <img src="{{ asset('assets/images/icon/transdisciplinary.svg') }}" class=" w-20"
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
                            <div class="text-lg lg:text-2xl font-extrabold mb-4 ">Transdisciplinary Approach</div>
                            <div class="flex-grow">
                                <p class="text-xs sm:text-sm md:text-base lg:text-lg ">
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
                                <div class="text-lg lg:text-2xl font-extrabold">Student Agency</div>
                                <img src="{{ asset('assets/images/icon/asking.svg') }}" class=" w-20" alt="" />
                            </div>
                            <div class="mt-auto">
                                <p class="text-xs md:text-sm opacity-75 font-semibold">Hover to flip!</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class=" w-full h-full rounded-xl bg-white  shadow-lg  p-6 text-black [transform:rotateX(180deg)] [backface-visibility:hidden]">
                        <div class="flex flex-col h-full">
                            <div class="text-lg lg:text-2xl font-extrabold mb-4 ">Student Agency</div>
                            <div class="flex-grow">
                                <p class="text-xs sm:text-sm md:text-base lg:text-lg ">
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
                                <div class="text-lg lg:text-2xl font-extrabold">Assessment for Learning</div>
                                <img src="{{ asset('assets/images/icon/assessment.svg') }}" class=" w-20"
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
                            <div class="text-lg lg:text-2xl font-extrabold mb-4 ">Assessment for Learning</div>
                            <div class="flex-grow">
                                <p class="text-xs sm:text-sm md:text-base lg:text-lg ">
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
                                <div class="text-lg lg:text-2xl font-extrabold">Action & Community Engagement
                                </div>
                                <img src="{{ asset('assets/images/icon/community.svg') }}" class=" w-20"
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
                            <div class="text-lg lg:text-2xl font-extrabold mb-4 ">Action & Community Engagement</div>
                            <div class="flex-grow">
                                <p class="text-xs sm:text-sm md:text-base lg:text-lg ">
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
                                <div class="text-lg lg:text-2xl font-extrabold">Language & Communication</div>
                                <img src="{{ asset('assets/images/icon/language.svg') }}" class=" w-20"
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
                            <div class="text-lg lg:text-2xl font-extrabold mb-4 ">Language & Communication</div>
                            <div class="flex-grow">
                                <p class="text-xs sm:text-sm md:text-base lg:text-lg ">
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
                                <div class="text-lg lg:text-2xl font-extrabold">STEM & Digital Literacy</div>
                                <img src="{{ asset('assets/images/icon/problem_solving.svg') }}" class=" w-20"
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
                            <div class="text-lg lg:text-2xl font-extrabold mb-4 ">STEM & Digital Literacy</div>
                            <div class="flex-grow">
                                <p class="text-xs sm:text-sm md:text-base lg:text-lg ">
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
        <div class="text-center mb-10 text-xl lg:text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            What makes us unique?
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        ✔ IB-Driven <span class="text-emerald-500">Philosophy</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Aligning with global best
                        practices in
                        education.We aim our students to embody the IB PYP Learner Profile
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        ✔ Experienced & <span class="text-emerald-500"> Passionate Educators</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Dedicated to
                        student-centered learning.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        ✔ Supportive <span class="text-emerald-500">Learning Environment</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg">Small class sizes for
                        personalized
                        attention.
                    </p>
                </div>

            </div>
            {{-- New Row --}}
            <div class="grid md:grid-cols-3 my-5 gap-10">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        ✔ Focus on <span class="text-emerald-500">Holistic Growth</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Beyond academics, we
                        nurture creativity,
                        collaboration, and
                        resilience.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        ✔ Diverse & <span class="text-emerald-500">Inclusive Community</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800 text-sm md:text-base lg:text-lg"> Encouraging intercultural
                        understanding
                        and respect.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
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
        <div class="text-center mb-10 text-xl lg:text-2xl font-bold font-serif text-green-700">
            What can you expect to see in the SKT Inquiry classroom?
        </div>
        {{-- <div class="container mx-auto p-4">
            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        Science and <span class="text-emerald-500">Nature</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Hands-on exploration and discoveries spark a lifelong
                        curiosity about the world.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
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
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Technology</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800">Age-appropriate introduction to technology and digital
                        literacy.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        Social Skills and <span class="text-emerald-500">Etiquette</span>
                        <hr class="w-28 text-center my-2 border-emerald-500 ">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Learning to interact positively with peers and adults.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 my-5">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        Physical Education, Gymnastics and <span class="text-emerald-500">Swimming</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                    <p class="p-1 font-semibold text-gray-800"> Building strength, coordination and confidence.
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
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
            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-10 ">
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/1.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-green-500  font-extrabold text-xl lg:text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 text-sm md:text-base lg:text-lg z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        hands-on activities and concrete materials
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/2.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-green-500  font-extrabold text-xl lg:text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 text-sm md:text-base lg:text-lg z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Collaboration
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/3.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-green-500  font-extrabold text-xl lg:text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 text-sm md:text-base lg:text-lg z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Discussions and conversations
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/4.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-green-500  font-extrabold text-xl lg:text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 text-sm md:text-base lg:text-lg z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Real-world experiences
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/5.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-green-500  font-extrabold text-xl lg:text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning through
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 text-sm md:text-base lg:text-lg z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Presentations and taking actions
                    </div>
                </div>
                {{-- Card --}}
                <div style=" background-image: url({{ asset('img/primary_data/6.jpg') }}); background-position: center;background-size: cover;background-repeat: no-repeat; "
                    class="card mx-auto group relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 bg-green-500  font-extrabold text-xl lg:text-2xl flex items-center justify-center rounded-2xl cursor-pointer">
                    <div class=" bg-teal-400 w-full text-center py-4 bg-opacity-90 text-white">
                        Learning
                    </div>
                    <div
                        class="absolute top-0 right-0 w-[20%] h-[20%] bg-lightblue rounded-tr-[15px] rounded-bl-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl">
                    </div>
                    <div
                        class="absolute p-2 text-sm md:text-base lg:text-lg z-10 bottom-0 left-0 w-[20%] h-[20%] bg-lightblue rounded-bl-[15px] rounded-tr-[100%] transition-all duration-500 group-hover:w-full group-hover:h-full group-hover:rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100">
                        Using ICT tools
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="partner-logo py-10  bg-yellow-50">
        <div class="text-center text-lg lg:text-2xl font-bold font-serif text-teal-700">
            {{-- Sister Schools --}}
            We aim our students to embody the IB PYP Learner Profile
        </div>
        <div class="container mx-auto p-4">
            {{-- New Row --}}
            <div class="section-title p-4">
                <h2>What is the PYP Learner Profile?</h2>
                <h6 class="font-extrabold text-sm md:text-base lg:text-lg ">
                    The PYP Learner Profile embodies the attributes that help students become responsible,
                    internationally-minded individuals. <span class="text-emerald-500">Our students develop as: </span>
                </h6>
            </div>
            <div class="grid md:grid-cols-2 gap-10">
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Inquirers </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Cultivating curiosity
                            and lifelong learning.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Thinkers </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Developing critical and
                            creative problem-solving
                            skills.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Communicators </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl"> Expressing ideas
                            confidently in multiple
                            languages and forms.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Principled </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Acting with integrity,
                            honesty, and fairness.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Open-Minded </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Appreciating diverse
                            perspectives and
                            cultures.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Caring </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Showing empathy and
                            commitment to community
                            service.</span>

                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Risk-Takers </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Embracing challenges
                            and uncertainty with
                            confidence.</span>

                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Balanced </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Understanding the
                            importance of intellectual,
                            physical, and emotional well-being.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
                <div class="my-5">
                    <p class="text:lg lg:text-xl font-extrabold uppercase">
                        <span class="text-emerald-500">Reflective </span> - <span
                            class="text-sm md:text-base lg:text-lg xl:text-xl">
                            Thoughtfully
                            considering experiences to grow as
                            learners.</span>
                        <hr class="w-28 text-center my-2 border-emerald-500">
                    </p>
                </div>
            </div>
        </div>
    </div>


    <section class="py-10">
        <div class="mx-auto container text-black">
            <div class="text-center text-lg lg:text-2xl font-bold font-serif text-teal-700">
                NewsLetters
            </div>
            <div class="col-xs-12">
                <div class="pd_tab_area fix">
                    <ul class="pd_tab_btn nav nav-tabs" role="tablist">
                        <li>
                            <button
                                class="tab-btn text-sm md:text-lg font-bold px-4 py-2 bg-green-500 rounded-xl text-white"
                                onclick="openTab(event, 'tab1')" href="#description" role="tab"
                                data-bs-toggle="tab">Newsletter </button>
                        </li>
                        {{-- <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab2')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Assessment</button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab3')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Inclusion </button>
                            </li> --}}
                    </ul>

                    <!-- Tab panes 1 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content " id="tab1">

                        <div id="pdfThumbnails" class=" inline-block w-full ">
                            <div class="pdf-item flex ">
                                <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                    data-pdf="{{ asset('pdf/newsletter/SKT-RC/2025 Newsletter 1.pdf') }}">
                                </canvas>
                                <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                    data-pdf="{{ asset('pdf/newsletter/SKT-RC/2025 Newsletter 2.pdf') }}">
                                </canvas>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- Tab panes 2 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab2">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Assessment policy_SKT 2023-2026_.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 3 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab3">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Inclusion Policy 2023-2026.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
        </div>
    </section>


    <div class="container mx-auto">
        <div class="p-4">
            <h2 class="text-lg lg:text-xl font-bold my-4">
                Join Our Learning Community
            </h2>
            <p class=" font-semibold text-sm md:text-base lg:text-lg text-gray-700">
                <span class=" text-teal-500 font-extrabold">SKT-Riverside</span> is dedicated to fostering an environment
                where students excel academically and develop into
                compassionate, global citizens.
            </p>
        </div>
    </div>
    <!-- Vanilla JS to handle tab switching -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.pyp-tab');
            const contents = document.querySelectorAll('.pyp-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const selected = tab.getAttribute('data-tab');

                    // Update tab styles
                    tabs.forEach(t => t.classList.remove('border-emerald-600', 'text-emerald-600'));
                    tab.classList.add('border-emerald-600', 'text-emerald-600');

                    // Show/Hide tab content
                    contents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    document.getElementById(`tab-${selected}`).classList.remove('hidden');
                });
            });

            // Set default active tab
            tabs[0].click();
        });
    </script>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script>
        function openTab(event, tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');

            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('bg-green-500', 'border-green-500',
                'text-white'));
            event.currentTarget.classList.add('bg-green-500', 'border-green-500',
                'text-white');
        }
    </script>
    <script>
        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.worker.min.js';

        document.querySelectorAll('.pdf-thumbnail').forEach(async (canvas) => {
            const pdfUrl = canvas.dataset.pdf;
            const pdf = await pdfjsLib.getDocument(pdfUrl).promise;
            const page = await pdf.getPage(1); // First page as cover
            const viewport = page.getViewport({
                scale: 0.5
            });
            const context = canvas.getContext('2d');
            canvas.width = viewport.width;
            canvas.height = viewport.height;
            page.render({
                canvasContext: context,
                viewport: viewport
            });
        });
    </script>
    <script>
        $(document).on('click', '.pdf-thumbnail', function() {
            const pdfUrl = $(this).data('pdf');
            window.open(pdfUrl, '_blank');
        });
    </script>
@endsection
