@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/event.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <!-- START POST -->
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/event_banners/' . $branch->branch_short_name . '.jpg') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
                {{-- <div class=" absolute inset-0 flex flex-col items-center justify-center p-8 text-white"
                data-animation="animated fadeInRight">
                <h2 class=" md:text-4xl font-semibold text-teal-500 uppercase">Alumni</h2>
            </div> --}}
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-2xl lg:text-5xl xl:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Events </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section id="post" class="blog_area section-padding"
        style="background-image: url({{ asset('assets/images/banner/course-bg.png') }}); background-size:cover; background-position: center center;">
        <div class="container mx-auto">
            <div class="section-title">
                <h2>Events</h2>
                <p>
                    Our Latest <span class="text-emerald-500">Events</span>
                </p>
            </div>
            <div class=" grid md:grid-cols-2 lg:grid-cols-3">
                @foreach ($events as $event)
                    <div class="m-5 event-card ">
                        <div class="single_blog  hover:shadow-lg">
                            <img src="{{ asset($event->event_banner) }}" class="img-fluid "
                                style="height: 354px; object-fit: cover;" alt="image" />
                            <div class="content_box ">
                                <span>{{ \Carbon\Carbon::parse($event->event_created_date)->format('F d, Y') }} |
                                    <a href="#">{{ $event->category->category_title }}</a></span>
                                <h2>
                                    <a href="{{ route('event-detail.home', $event->id) }}">{{ $event->event_title }}
                                    </a>
                                </h2>
                                <div class="event-content">
                                    <span><i class="fa-solid fa-clock"></i>{{ $event->event_time }}</span>
                                    <span><i class="fa fa-table"></i><strong>{{ $event->event_location }}</strong></span>
                                    <p>
                                        {{ \Illuminate\Support\Str::words($event->event_body, 10, '...') }}
                                    </p>
                                </div>
                                <a href="{{ route('event-detail.home', $event->id) }}" {{-- need tobe replaced --}}
                                    class="relative inline-block mx-auto py-4 px-6 overflow-hidden group">
                                    <span
                                        class="relative font-semibold text-[#1a2d62] uppercase px-6 py-4 transition-all duration-300 group-hover:text-white">
                                        <!-- Background animation -->
                                        <span class="absolute inset-0 flex items-center">
                                            <span
                                                class="w-8 h-8 bg-teal-400 rounded-full transition-all duration-300 origin-left transform scale-100 group-hover:w-full group-hover:h-full group-hover:scale-x-100"></span>
                                        </span>
                                        <span class="relative z-10">READ MORE <i class="fa-solid fa-caret-right ml-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- END COL-->

            </div>
            <!-- / END ROW -->

            <!-- Pagination Controls -->
            <div class="mt-6 flex justify-between items-center">
                <button id="prevPage" class="px-4 py-2 bg-gray-300 rounded-md cursor-pointer">Prev</button>
                <span id="paginationInfo" class="text-lg"></span>
                <button id="nextPage" class="px-4 py-2 bg-gray-300 rounded-md cursor-pointer">Next</button>
            </div>
        </div>
        <!-- END CONTAINER  -->
    </section>
    <!-- END POST -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let perPage = 10; // Number of teachers per page
            let currentPage = 1;
            let allTeachers = $(".event-card").toArray(); // Convert to array for better handling
            let filteredTeachers = [...allTeachers]; // Initially, all teachers are shown

            function showPage(page) {
                let start = (page - 1) * perPage;
                let end = start + perPage;
                $(".event-card").hide(); // Hide all
                $(filteredTeachers.slice(start, end)).show(); // Show paginated ones

                let totalItems = filteredTeachers.length;
                let totalPages = Math.ceil(totalItems / perPage) || 1;

                // Update pagination info
                $("#paginationInfo").text(
                    `Page ${page} of ${totalPages} | Showing ${start + 1}-${Math.min(end, totalItems)} of ${totalItems} items`
                );

                // Enable/disable buttons
                $("#prevPage").prop("disabled", page === 1);
                $("#nextPage").prop("disabled", page >= totalPages);
            }

            function applyFilter(filter) {
                if (filter === "all") {
                    filteredTeachers = [...allTeachers]; // Reset to full list
                } else {
                    filteredTeachers = allTeachers.filter(el => $(el).data("category") === filter);
                }
                currentPage = 1; // Reset to first page
                showPage(currentPage);
            }

            // Initial display
            showPage(currentPage);

            // Pagination click events
            $("#prevPage").click(function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            $("#nextPage").click(function() {
                if (currentPage * perPage < filteredTeachers.length) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Filter event
            $(".filter-btn").click(function() {
                let filter = $(this).data("filter");
                applyFilter(filter);
            });
        });
    </script>
@endsection
