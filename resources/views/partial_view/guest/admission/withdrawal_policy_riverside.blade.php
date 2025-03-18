@extends('layouts.riverside_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/admission_process.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/admission_banners/withdrawal_policy/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-2xllg:text-5xl xl:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4">Withdrawal Policy</div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="topic_content_area section-padding" style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p>
                    Withdrawal <span class="text-emerald-500">Policy</span>
                </p>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <section class="school_history ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
            <div class="flex justify-center items-center">
                <img src="{{ asset($branch->branch_logo) }}" style="max-height: 420px" alt="" />
            </div>
            <div class=" max-w-2xl p-10">
                <div class="ab_content">
                    <h2 class=" text-4xl font-semibold">
                        Once a student has
                        <span class="text-emerald-400">terminated his or her enrolment</span>
                    </h2>
                    <p class=" text-gray-500 mt-2">
                        that student’s place is taken by a new
                        enrolment. If the student wants to return to our schools, that student is treated as a new
                        applicant, and must go through the new admission process mentioned above.

                        Before terminating enrolment, students need to submit the following to the Office/Library:

                    </p>
                    <ul class="list-disc text-gray-500 mt-2">
                        <li>Textbooks</li>
                        <li>Library books and materials</li>
                        <li>ID cards</li>
                        <li>Car-pass cards</li>
                        <li>Any fees that haven’t been paid [includes tuition fees, library fees, damages, …]</li>
                        <li>Important: Students who do not meet the above conditions will not be issued any school
                            documents.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
