@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/our_teachers.css') }}" />


    <section id="home" class="relative  lg:min-h-screen flex items-center justify-center  ">
        <!-- Background Video -->
        <div class="absolute inset-0 w-full h-full">
            <video autoplay loop muted playsinline class="lg:absolute block top-0 left-0 w-full lg:h-full object-cover">
                @if ($branch->branch_short_name == 'SKT-RC')
                    <source src="{{ asset('videos/skt_riverside_campus.mp4') }}" type="video/mp4">
                @else
                    <source src="{{ asset('videos/skt_city_campus.mp4') }}" type="video/mp4">
                @endif
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </div>
        {{-- <div class=" "> --}}
        <div class="home_content container mx-auto flex flex-col justify-center items-center  ">
            <h1 id="fading-text" class=" text-center  ml-10">
                <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                <br>
                <span class="text-white">Our Teachers </span>
            </h1>
        </div>

        {{-- </div> --}}
    </section>
    <!-- START SCHOOL Teachers -->
    <section id="" class="mt-10 mb-10">
        <div class="container mx-auto">
            <div class="section-title text-4xl mb-10 font-bold text-center">
                <h2>Our <span class="text-green-500">Teachers</span></h2>
            </div>

            <!-- Filter Buttons -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 text-center mt-10 gap-5">
                <div class="filter-btn bg-blue-500 p-3 rounded-lg hover:bg-blue-600 font-bold cursor-pointer"
                    data-filter="all">All</div>
                <div class="filter-btn bg-blue-500 p-3 rounded-lg hover:bg-blue-600 font-bold cursor-pointer"
                    data-filter="secondary">Secondary</div>
                <div class="filter-btn bg-blue-500 p-3 rounded-lg hover:bg-blue-600 font-bold cursor-pointer"
                    data-filter="lower-secondary">Lower Secondary</div>
                <div class="filter-btn bg-blue-500 p-3 rounded-lg hover:bg-blue-600 font-bold cursor-pointer"
                    data-filter="primary">Primary</div>
                <div class="filter-btn bg-blue-500 p-3 rounded-lg hover:bg-blue-600 font-bold cursor-pointer"
                    data-filter="kg">KG</div>
                <div class="filter-btn bg-blue-500 p-3 rounded-lg hover:bg-blue-600 font-bold cursor-pointer"
                    data-filter="assistant">Assistant</div>
            </div>

            <!-- Teachers List -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 text-center mt-10" id="teachersList">
                @foreach ($our_teachers as $teacher)
                    <div class="teacher-card mx-2 mb-2" data-category="{{ strtolower($teacher->teacher_class) }}">
                        <div class="relative group rounded-md overflow-hidden cursor-pointer">
                            <img src="{{ asset($teacher->teacher_photo) }}" class="w-full" alt="Team Member" />
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h3 class="text-lg font-bold">{{ $teacher->teacher_name }}</h3>
                                <p class="text-sm mt-2">{{ ucfirst($teacher->teacher_class) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Controls -->
            <div class="mt-6 flex justify-between items-center">
                <button id="prevPage" class="px-4 py-2 bg-gray-300 rounded-md cursor-pointer">Prev</button>
                <span id="paginationInfo" class="text-lg"></span>
                <button id="nextPage" class="px-4 py-2 bg-gray-300 rounded-md cursor-pointer">Next</button>
            </div>
        </div>
    </section>
    <!-- END SCHOOL Teachers -->

    <!-- jQuery Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let perPage = 10; // Number of teachers per page
            let currentPage = 1;
            let allTeachers = $(".teacher-card").toArray(); // Convert to array for better handling
            let filteredTeachers = [...allTeachers]; // Initially, all teachers are shown

            function showPage(page) {
                let start = (page - 1) * perPage;
                let end = start + perPage;
                $(".teacher-card").hide(); // Hide all
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
    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
