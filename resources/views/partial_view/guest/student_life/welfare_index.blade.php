@extends($layout)

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/welfare.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}

    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/student_life_banners/welfare/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Welfare </div>
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
                <p class="">
                    Welfare Department
                </p>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    @if ($branch->branch_short_name == 'SKT-RC')
        <section class="principal_message container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 ">
                <div class="   mx-auto p-10">
                    <div class="ab_content">
                        {{-- <h2 class=" text-2xl font-light text-gray-500 mb-2">
                        asdfsad
                    </h2> --}}
                        <h2 class=" text-2xl md:text-4xl font-semibold mb-4">
                            <span class="text-emerald-400">Message from the Head of Welfare</span>
                        </h2>
                        <p class=" text-gray-500">
                            Welcome to the Welfare Department at SKT International School. I’m <b class="text-emerald-400">
                                Dovran Abdyrahmanov </b>, and
                            as <b class="text-emerald-400"> Head of Welfare </b>, it is my privilege to support the overall
                            wellbeing of our students—socially, emotionally, and morally—while guiding them to grow into
                            responsible, compassionate individuals.

                            Our department leads the Character Education Program, based on Character First Education, the
                            world’s largest character-based initiative for schools. This program helps students understand
                            and embody universal values such as respect, honesty, empathy and fairness. For <b
                                class="text-emerald-400"> Years 7–9 </b>, we use the
                            <b class="text-emerald-400"> Pathways: Values in Action </b> book, which transforms these values
                            into practical, lived experiences, shaping our students into empathetic, engaged global
                            citizens.

                            Beyond the classroom, we offer a wide range of welfare activities designed to build connection,
                            confidence, and character. These include <b class="text-emerald-400"> indoor/outdoor events like
                                picnics, movie nights, BBQs, and donation drives </b> that encourage teamwork, social
                            bonding, and community spirit. Other initiatives such as DEAR Time, birthday celebrations,
                            sports tournaments, clubs, fundraising events, holiday celebrations, and excursions help create
                            a vibrant and inclusive school culture.
                            <br>
                            We also conduct home visits to better understand each student’s background and offer tailored care and support. Please don’t hesitate to reach out—our door is always open. We are here to help every student feel supported, valued, and ready to thrive.
                        </p>
                    </div>
                    <div class="abmv mt-4 principal-message ">
                        <p class=" text-base md:text-lg italic">
                            Warm regards,
                        </p>
                        <p class=" text-lg md:text-xl italic">
                            Dovran Abdyrahmanov
                        </p>
                        <p class=" text-sm md:text-md italic">
                            Head of Welfare
                        </p>
                    </div>
                </div>
                <div class="flex justify-center items-center flex-col">
                    <img class="w-[200px] h-[200px] md:w-[420px] md:h-[420px] object-cover rounded-full"
                        src="{{ asset('img/welfare_data/' . $branch->branch_short_name . '.jpg') }}" alt="" />
                    <p class="mt-4 bold text-xl md:text-2xl italic"> Dovran Abdyrahmanov</p>
                </div>
            </div>
        </section>
    @else
        <section class="principal_message container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 ">
                <div class="   mx-auto p-10">
                    <div class="ab_content">
                        {{-- <h2 class=" text-2xl font-light text-gray-500 mb-2">
                    asdfsad
                </h2> --}}
                        <h2 class=" text-2xl md:text-4xl font-semibold mb-4">
                            <span class="text-emerald-400">Message from the Head of Welfare CC</span>
                        </h2>
                        <p class=" text-gray-500">
                            Welcome to the Welfare Department at SKT International School. I’m <b class="text-emerald-400">
                                Guvanch Odeniyazov </b>, and
                            as <b class="text-emerald-400"> Head of Welfare </b>, my role is to support the overall
                            well-being
                            of our students—socially,
                            emotionally, and
                            morally—while helping them grow into responsible and compassionate individuals.

                            We implement the Character Education Program, built on the foundation of Character First
                            Education,
                            the world’s largest character-based initiative for schools. This program helps students
                            understand
                            and live by core universal values such as respect, honesty, and fairness.For <b
                                class="text-emerald-400"> Years 7–9 </b>, we use the
                            <b class="text-emerald-400"> Pathways: Values in Action </b> book, which turns these values into
                            lived experiences that shape our
                            students into engaged, empathetic global citizens.

                            Beyond the classroom, we offer a wide range of welfare activities that promote connection,
                            confidence, and character.<b class="text-emerald-400"> For example, our indoor/outdoor
                                activities
                                like picnics, movie nights,
                                and BBQs encourage teamwork and social bonding, while donation programs teach compassion and
                                social
                                responsibility through giving and community support. </b> Other activities include DEAR
                            Time,
                            birthday
                            celebrations, sports tournaments, clubs, fundraising events, holiday celebrations, and
                            excursions.

                            We also conduct home visits to better understand each student’s background and provide
                            personalized
                            care and support.

                            Please feel free to reach out—we’re here to help every student thrive.
                            Warm regards,
                        </p>
                    </div>
                    <div class="abmv mt-4 principal-message ">
                        <p class=" text-lg md:text-xl italic">
                            Guvanch Odeniyazov
                        </p>
                        <p class=" text-sm md:text-md italic">
                            Head of Welfare
                        </p>
                    </div>
                </div>
                <div class="flex justify-center items-center flex-col">
                    <img class="w-[200px] h-[200px] md:w-[420px] md:h-[420px] object-cover rounded-full"
                        src="{{ asset('img/welfare_data/' . $branch->branch_short_name . '.jpg') }}" alt="" />
                    <p class="mt-4 bold text-xl md:text-2xl italic"> Guvanch Odeniyazov</p>
                </div>
            </div>
        </section>
    @endif

    <!-- START TOPIC-->
    <section class="topic_content_area mt-10" style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p class="">
                    PATHWAYS
                    Values in Action
                </p>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <section>
        <div class="mx-auto container text-black">
            <div class="col-xs-12">
                <div class="pd_tab_area fix">
                    <ul class="pd_tab_btn nav nav-tabs" role="tablist">
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 bg-green-500 rounded-xl text-white"
                                onclick="openTab(event, 'tab1')" href="#description" role="tab"
                                data-bs-toggle="tab">Chapter 1 </button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab2')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 2</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab3')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 3</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab4')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 4</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab5')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 5</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab6')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 6</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab7')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 7</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab8')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 8</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab9')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 9</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab10')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                Chapter 10</button>
                        </li>
                    </ul>

                    <!-- Tab panes 1 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content " id="tab1">
                        <p class="inline-block font-bold mt-10"> " Honesty
                            is the first is the first
                            chapter in chapter in
                            the book of the book of
                            wisdom. "</p>
                        <p class=" italic">
                            Thomas Jefferson
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/1 - Walking the Honest Way.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 2 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab2">
                        <p class="inline-block font-bold mt-10"> "The world
                            is changed
                            by your
                            example,
                            not by your
                            opinion. "</p>
                        <p class=" italic">
                            Paulo Coelho
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/2- Navigating the Road of Duty.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 3 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab3">
                        <p class="inline-block font-bold mt-10"> " Injustice
                            anywhere
                            is a threat
                            to justice
                            everywhere."</p>
                        <p class=" italic">
                            Martin Luther King Jr.
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/3 - Journeying Through Just Acts.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 4 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab4">
                        <p class="inline-block font-bold mt-10"> "We are
                            only as
                            strong as
                            we are
                            united,
                            as weak
                            as we are
                            divided."</p>
                        <p class=" italic">
                            J.K. Rowling
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/4 - Building Bridges of Unity.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 5 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab5">
                        <p class="inline-block font-bold mt-10"> " Respect
                            is not
                            imposed
                            nor
                            begged; it’s
                            earned and
                            offered. "</p>
                        <p class=" italic">
                            Proverb
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/5 - The Golden Path of Respect.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 6 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab6">
                        <p class="inline-block font-bold mt-10 w-full"> "A life
                            not lived
                            for others
                            is not a life ." </p>
                        <p class=" italic">
                            Mother Teresa
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/6 - Generous Walks of Altruism.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 7 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab7">
                        <p class="inline-block font-bold mt-10"> " When
                            eating fruit,
                            remember
                            the one who
                            planted the
                            tree."</p>
                        <p class=" italic">
                            Vietnamese Proverb
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/7 - Gratitude Along the Way.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 8 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab8">
                        <p class="inline-block font-bold mt-10"> " Empathy
                            is about
                            finding
                            echoes of
                            another
                            person in
                            yourself. "</p>
                        <p class=" italic">
                            Mohsin Hamid
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/8 - Understanding Through Empathy.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 9 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab9">
                        <p class="inline-block font-bold mt-10"> "Trust takes
                            years to
                            build,
                            seconds to
                            break, and
                            forever to
                            repair."</p>
                        <p class=" italic">
                            Anna Neamus
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/9 - Steps of Trustworthiness.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes 10 -->
                    <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab10">
                        <p class="inline-block font-bold mt-10"> " To love and
                            be loved is
                            to feel the
                            sun from
                            both sides."</p>
                        <p class=" italic">
                            David Viscott
                        </p>
                        <div id="pdfThumbnails">
                            <div class="pdf-item">
                                {{-- <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg"
                                    data-pdf="{{ asset('pdf/welfare/10 - Compassionate Pathways.pdf') }}">
                                </canvas> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
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
