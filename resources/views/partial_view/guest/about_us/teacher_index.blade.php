@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/our_teachers.css') }}" />
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/contact_banners/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div
                    class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Our Teachers </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START SCHOOL Teachers -->
    <section id="" class="mt-[89px] sm:mt-0 mb-10 ">
        <div class="container mx-auto">
            <div class="section-title text-2xl md:text-4xl mb-10 font-bold text-center">
                <h2>Our <span class="text-green-500">Teachers</span></h2>
            </div>

            <!-- Filter Buttons -->
            {{-- <div class="grid grid-cols-2 lg:grid-cols-4 text-center mt-10 gap-1 md:gap-5 text-white text-xs md:text-lg">
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="all">All</div>
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="principal">Head of School</div>
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="vice-principal">Senior Leadership Team</div>
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="secondary">Secondary</div>
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="primary">Primary</div>
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="kg">KG</div>
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="assistant">Other Academic Staff</div>
            </div> --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 text-center mt-10 gap-1 md:gap-5 text-white text-xs md:text-lg">
                <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                    data-filter="all">All</div>
                @foreach ($teacher_types as $teacher_type)
                    <div class="filter-btn bg-gray-800 p-3 m-2 rounded-lg hover:bg-gray-900 font-semibold cursor-pointer"
                        data-filter="{{ $teacher_type->id }}">{{ $teacher_type->title }}</div>
                @endforeach
            </div>

            <!-- Teachers List -->
            <div class="grid grid-cols-2 lg:grid-cols-4 text-center mt-10" id="teachersList">
                @foreach ($our_teachers as $teacher)
                    <div class="teacher-card mx-2 mb-2 open-modal"
                        data-teacher_type_models="{{ strtolower($teacher->teacher_type_models) }}"
                        data-src="{{ asset($teacher->teacher_photo) }}" data-title="{{ $teacher->teacher_name }}">
                        <div class="relative group rounded-md overflow-hidden cursor-pointer">
                            <img src="{{ asset($teacher->teacher_photo) }}" class="w-full " alt="Team Member" />
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
                <button id="prevPage"
                    class=" px-2 py-1 md:px-4  md:py-2 m-2 bg-gray-900 text-white rounded-md cursor-pointer">Prev</button>
                <span id="paginationInfo" class="text-sm md:text-lg m-4"></span>
                <button id="nextPage"
                    class=" px-2 py-1 md:px-4  md:py-2 m-2 bg-gray-900 text-white rounded-md cursor-pointer">Next</button>
            </div>
        </div>
    </section>
    <!-- END SCHOOL Teachers -->
    <!-- Fullscreen Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80  items-center justify-center hidden z-50">
        <div class="relative max-w-4xl w-full p-4">
            <button id="closeModal" class="absolute top-2 right-4 text-white text-3xl p-4 cursor-pointer">&times;</button>
            <img id="modalImage" src="" class="w-full rounded-lg shadow-lg" />
            <h3 id="modalTitle" class="text-white text-center mt-4 text-xl font-bold"></h3>
        </div>
    </div>
    <!-- jQuery Script -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const perPage = 8;
            let currentPage = 1;

            const $teacherCards = $(".teacher-card");
            const allTeachers = $teacherCards.toArray();
            let filteredTeachers = [...allTeachers];

            const $paginationInfo = $("#paginationInfo");
            const $prevPage = $("#prevPage");
            const $nextPage = $("#nextPage");

            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            const modalTitle = document.getElementById("modalTitle");
            const closeModal = document.getElementById("closeModal");

            function showPage(page) {
                const start = (page - 1) * perPage;
                const end = start + perPage;

                $teacherCards.hide();
                $(filteredTeachers.slice(start, end)).show();

                const totalItems = filteredTeachers.length;
                const totalPages = Math.max(1, Math.ceil(totalItems / perPage));

                $paginationInfo.text(
                    `Page ${page} of ${totalPages} | Showing ${start + 1}-${Math.min(end, totalItems)} of ${totalItems} items`
                );

                $prevPage.prop("disabled", page === 1);
                $nextPage.prop("disabled", page >= totalPages);
            }

            // function applyFilter(filter) {
            //     filteredTeachers = (filter === "all") ? [...allTeachers] :
            //         allTeachers.filter(el => el.dataset.teacher_type_models === filter);
            //     currentPage = 1;
            //     showPage(currentPage);
            // }
            function applyFilter(filter) {
                if (filter === "all") {
                    filteredTeachers = [...allTeachers];
                } else {
                    filteredTeachers = allTeachers.filter(teacher =>
                        teacher.dataset.teacher_type_models.includes(Number(filter))

                    );
                }

                currentPage = 1;
                showPage(currentPage);
            }

            // Event delegation for modal
            document.body.addEventListener("click", (e) => {
                const target = e.target.closest(".open-modal");
                if (target) {
                    modalImage.src = target.dataset.src;
                    modalTitle.textContent = target.dataset.title;
                    modal.classList.remove("hidden");
                    modal.classList.add("flex");
                }
            });

            // Modal close events
            closeModal.addEventListener("click", () => modal.classList.add("hidden"));
            modal.addEventListener("click", (e) => {
                if (e.target === modal) modal.classList.add("hidden");
            });

            // Pagination
            $prevPage.on("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            $nextPage.on("click", () => {
                if (currentPage * perPage < filteredTeachers.length) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Filters
            $(".filter-btn").on("click", function() {
                applyFilter(this.dataset.filter);
            });

            // Initial render
            showPage(currentPage);
        });
    </script>

    <script src={{ asset('guests/js/general.js') }}></script>
@endsection
