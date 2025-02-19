@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/sister_school.css') }}" />
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
                {{-- <div class="kenburns_061_slide absolute inset-0 flex flex-col items-start justify-center p-8 text-white"
                    data-animation="animated fadeInRight">
                    <h2 class="text-2xl font-semibold">Welcome to Penn</h2>
                    <h1 class="text-4xl font-bold">Classical <span class="underline">Education</span> For The Future</h1>
                    <h3 class="text-lg">Lorem ipsum dolor sit amet consectetuer adipiscing elit Nam nibh</h3>
                    <a href="about.html" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg">Learn More</a>
                </div> --}}
            </div>
            <!-- Second Slide -->
            <div class="carousel-item w-full flex-shrink-0">
                <img src="{{ asset('assets/images/all-img/clients/5.png') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />

            </div>
            <!-- Third Slide -->
            <div class="carousel-item w-full flex-shrink-0">
                <img src="{{ asset('assets/images/banner/slide3.jpg') }}" alt="slider-image"
                    class="w-full h-auto object-cover" />
            </div>
        </div>
        <!-- Navigation Buttons -->
        <button id="prevSlide"
            class="carousel-control-prev absolute left-4 top-1/2 transform -translate-y-1/2 p-4 rounded-full text-white">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><i class="fa-solid fa-chevron-left text-4xl"></i></span>
        </button>
        <button id="nextSlide"
            class="carousel-control-next absolute right-4 top-1/2 transform -translate-y-1/2 p-4 rounded-full text-white">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><i class="fa-solid fa-chevron-right text-4xl"></i></span>
        </button>
    </div>
    <!-- START SISTER SCHOOL  -->
    <div class="partner-logo py-10  bg-gray-950">
        <div class="text-center mb-10 text-2xl font-bold font-serif text-teal-500">
            {{-- Sister Schools --}}
        </div>
        <div class="container mx-auto">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner">
                        <a href="#"><img src="{{ asset('img/carousel-logos/bfi.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/misa_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/nisa_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/skt_city_campus_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/skt_riverside_campus_b.png') }}"
                                alt="image" class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/bfi.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/misa_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/nisa_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/skt_city_campus_b.png') }}" alt="image"
                                class=" max-h-48"></a>
                        <a href="#"><img src="{{ asset('img/carousel-logos/skt_riverside_campus_b.png') }}"
                                alt="image" class=" max-h-48"></a>

                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </div>
    <!-- END SISTER SCHOOL  -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.getElementById("carouselInner");
            const slides = document.querySelectorAll(".carousel-item");
            let currentIndex = 0;

            document.getElementById("nextSlide").addEventListener("click", function() {
                slides[currentIndex].classList.remove("active");
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].classList.add("active");
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            });

            document.getElementById("prevSlide").addEventListener("click", function() {
                slides[currentIndex].classList.remove("active");
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                slides[currentIndex].classList.add("active");
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            });
        });
    </script>
@endsection
