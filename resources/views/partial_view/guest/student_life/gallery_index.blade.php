@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/news.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('assets/images/banner/slide1.jpg') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
                {{-- <div class=" absolute inset-0 flex flex-col items-center justify-center p-8 text-white"
                data-animation="animated fadeInRight">
                <h2 class=" md:text-4xl font-semibold text-teal-500 uppercase">Alumni</h2>
            </div> --}}
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-2xl md:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Gallery </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START SCHOOL Facilities -->
    <section id="" class="mt-10 mb-10">
        <div class="container mx-auto">
            <div class="section-title text-4xl mb-6 font-bold text-center">
                <h2>Our <span class="text-teal-500">Facilities</span></h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 text-center mt-4 ">
                @foreach ($branch->galleries as $gallery)
                    <div class="mx-2 mb-2 gallery-card open-modal cursor-pointer"
                        data-src="{{ asset($gallery->gallery_photo) }}" data-title="{{ $gallery->gallery_title }}">
                        <div class="relative group rounded-md overflow-hidden">
                            <!-- Image -->
                            <img src="{{ asset($gallery->gallery_photo) }}" class="w-full min-h-80 cursor-pointer"
                                alt="Gallery Image" />

                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h3 class="text-lg font-bold">{{ $gallery->gallery_title }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Fullscreen Modal -->
            <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden">
                <div class="relative max-w-4xl w-full p-4">
                    <button id="closeModal"
                        class="absolute top-2 right-4 text-white text-3xl p-4 cursor-pointer">&times;</button>
                    <img id="modalImage" src="" class="w-full rounded-lg shadow-lg" />
                    <h3 id="modalTitle" class="text-white text-center mt-4 text-xl font-bold"></h3>
                </div>
            </div>

            <div class="mt-6 flex justify-between items-center">
                <button id="prevPage" class="px-4 py-2 bg-gray-300 rounded-md cursor-pointer">Prev</button>
                <span id="paginationInfo" class="text-lg"></span>
                <button id="nextPage" class="px-4 py-2 bg-gray-300 rounded-md cursor-pointer">Next</button>
            </div>
        </div>
    </section>
    <!-- END SCHOOL Facilities -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            const modalTitle = document.getElementById("modalTitle");
            const closeModal = document.getElementById("closeModal");

            document.querySelectorAll(".open-modal").forEach(card => {
                card.addEventListener("click", function() {
                    modalImage.src = this.dataset.src;
                    modalTitle.textContent = this.dataset.title;
                    modal.classList.remove("hidden");
                });
            });

            closeModal.addEventListener("click", () => modal.classList.add("hidden"));
            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let perPage = 10; // Number of teachers per page
            let currentPage = 1;
            let allTeachers = $(".gallery-card").toArray(); // Convert to array for better handling
            let filteredTeachers = [...allTeachers]; // Initially, all teachers are shown

            function showPage(page) {
                let start = (page - 1) * perPage;
                let end = start + perPage;
                $(".gallery-card").hide(); // Hide all
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
