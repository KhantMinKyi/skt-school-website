@extends($layout)

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/policy.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}

    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex " id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0 ">
                <img src="{{ asset('img/banner/about_us_banners/policy/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out">
                    <h1 id="fading-text" class=" text-2xl lg:text-5xl xl:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Our Policies </div>
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
                    Our School Policies
                </p>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->
    @if ($branch->branch_short_name == 'SKT-RC')
        <section>
            <div class="mx-auto container text-black">
                <div class="col-xs-12">
                    <div class="pd_tab_area fix">
                        <ul class="pd_tab_btn nav nav-tabs" role="tablist">
                            <li>
                                <button
                                    class="tab-btn text-sm md:text-lg font-bold px-4 py-2 bg-green-500 rounded-xl text-white"
                                    onclick="openTab(event, 'tab1')" href="#description" role="tab"
                                    data-bs-toggle="tab">Admission </button>
                            </li>
                            <li>
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
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab4')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Language </button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab5')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Academic Integrity</button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab6')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Parent-Student Handbook</button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab7')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Communication</button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab8')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Fire Safety</button>
                            </li>
                        </ul>

                        <!-- Tab panes 1 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content " id="tab1">

                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Admission Policy SKT 2023-2026.pdf') }}">
                                    </canvas>

                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 2 -->
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
                        </div>
                        <!-- Tab panes 4 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab4">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Language Policy SKT 2023-2026.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 5 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab5">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/SKT Final Academic Integrity policy 2023-2026.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 6 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab6">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/250520 SKT Riverside Parents&Students Handbook 25-26.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 7 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab7">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/240821 Communication Policy.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 8 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab8">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/240914 SKT Fire safety Policy.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @else
        <section>
            <div class="mx-auto container text-black">
                <div class="col-xs-12">
                    <div class="pd_tab_area fix">
                        <ul class="pd_tab_btn nav nav-tabs" role="tablist">
                            <li>
                                <button
                                    class="tab-btn text-sm md:text-lg font-bold px-4 py-2 bg-green-500 rounded-xl text-white"
                                    onclick="openTab(event, 'tab1')" href="#description" role="tab"
                                    data-bs-toggle="tab">Admission </button>
                            </li>
                            <li>
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
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab4')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Language </button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab5')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Academic Integrity</button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab6')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Child Protection</button>
                            </li>
                            <li>
                                <button class="tab-btn text-sm md:text-lg font-bold px-4 py-2 rounded-xl"
                                    onclick="openTab(event, 'tab7')" href="#information" role="tab"
                                    data-bs-toggle="tab">
                                    Homework</button>
                            </li>
                        </ul>

                        <!-- Tab panes 1 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content " id="tab1">

                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Admission Policy 2025-2026 City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 2 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab2">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Assessment policy_SKT 2025-2026 City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 3 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab3">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Inclusion and Diversity Policy 2025-2026 City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 4 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab4">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Language Policy 2025-2026 City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 5 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab5">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Academic Integrity policy 2025-2026 City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 6 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab6">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Child protection Policy 2025-2026 SKT City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Tab panes 7 -->
                        <div role="tabpanel" class="tab-pane fade show tab-content hidden" id="tab7">
                            <div id="pdfThumbnails" class=" inline-block w-full ">
                                <div class="pdf-item flex ">
                                    <canvas class="pdf-thumbnail w-48 h-auto cursor-pointer shadow-lg rounded-lg m-4"
                                        data-pdf="{{ asset('pdf/policy/' . $branch->branch_short_name . '/Homework Policy 2025-2026 City Campus.pdf') }}">
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endif
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
