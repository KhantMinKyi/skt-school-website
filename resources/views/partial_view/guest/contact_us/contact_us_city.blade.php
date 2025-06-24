@extends('layouts.city_layout')
@section('title', 'Contact - SKT International School City ')
@section('meta_description', 'Reach out to SKT International School in Yangon for inquiries...')
@section('og_title', 'Contact SKT School City campus')
@section('og_description', 'Have a question? Get in touch with SKT now.')
@section('twitter_title', 'Contact Us – SKT City Campus')
@section('twitter_description', 'Send us your inquiries about admissions, programs, or tours.')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/contact_us.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}
    <div id="kenburns_061"
        class="carousel hidden sm:block max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-20 sm:mt-0" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/contact_banners/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Contact Us</div>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- START ADDRESS -->
    <section class="address_area section-padding mt-[89px] sm:mt-0">
        <div class="container mx-auto">
            <div class=" text-center grid sm:grid-cols-3">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-map"></i>
                        <h4>Our Location</h4>
                        <p> 
                            <strong> 𝑺𝑲𝑻 𝑰𝒏𝒕𝒆𝒓𝒏𝒂𝒕𝒊𝒐𝒏𝒂𝒍 𝑺𝒄𝒉𝒐𝒐𝒍-𝑪𝒊𝒕𝒚 𝑪𝒂𝒎𝒑𝒖𝒔 : </strong><br> 🏦 No 25, Pho Sein Road, Bahan Tsp, Yangon.
                            <br><br>
                            <strong>𝑺𝑲𝑻 𝑰𝒏𝒕𝒆𝒓𝒏𝒂𝒕𝒊𝒐𝒏𝒂𝒍 𝑷𝒓𝒆𝒔𝒄𝒉𝒐𝒐𝒍-𝑪𝒊𝒕𝒚 𝑪𝒂𝒎𝒑𝒖𝒔 : </strong> <br>🏦Address - 5/A, Pho Sein Road, Bahan Tsp,
                            Yangon.
                        </p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_address sabr">
                        <i class="ti-mobile"></i>
                        <h4>Telephone</h4>
                        <p><strong>  𝑺𝑲𝑻 𝑰𝒏𝒕𝒆𝒓𝒏𝒂𝒕𝒊𝒐𝒏𝒂𝒍 𝑺𝒄𝒉𝒐𝒐𝒍-𝑪𝒊𝒕𝒚 𝑪𝒂𝒎𝒑𝒖𝒔 : </strong><br>019551795 | 019551796 | 09424153552 | 09456481950</p> <br>
                        <p> <strong>𝑺𝑲𝑻 𝑰𝒏𝒕𝒆𝒓𝒏𝒂𝒕𝒊𝒐𝒏𝒂𝒍 𝑷𝒓𝒆𝒔𝒄𝒉𝒐𝒐𝒍-𝑪𝒊𝒕𝒚 𝑪𝒂𝒎𝒑𝒖𝒔 :</strong> <br> 09940993141</p>
                    </div>
                </div><!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_address">
                        <i class="ti-email"></i>
                        <h4>Send email</h4>
                        <p>𝒄𝒐𝒏𝒕𝒂𝒄𝒕.𝒄𝒊𝒕𝒚@𝒔𝒌𝒕.𝒆𝒅𝒖.𝒎𝒎 </p>
                        <p>𝒄𝒐𝒏𝒕𝒂𝒄𝒕.𝒄𝒊𝒕𝒚𝒌𝒈@𝒔𝒌𝒕.𝒆𝒅𝒖.𝒎𝒎 </p>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END ADDRESS -->

    <!-- CONTACT -->
    <div id="contact" class="contact_area section-padding">
        <div class="container mx-auto">
            @if (Session::has('error'))
                <div class="bg-red-200 p-4 rounded-lg fade show w-50 mx-auto text-center" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class=" bg-green-200 p-4 rounded-lg fade show w-50 mx-auto text-center" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="section-title-two">
                <h2>Send your message.</h2>
            </div>
            <div class="row grid-cols-1 lg:grid-cols-2 p-4">
                <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12  wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.2s" data-wow-offset="0">
                    <div class="contact">
                        <form class="form" method="post" action="{{ route('contact-form.store') }}">
                            @csrf
                            <input type="hidden" name="contact_branch_id" class="form-control" value="{{ $branch->id }}"
                                required="required">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Name</label>
                                    <input type="text" name="contact_name" class="form-control" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Your Email</label>
                                    <input type="email" name="contact_email" class="form-control" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Your Subject</label>
                                    <input type="text" name="contact_subject" class="form-control" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Your Message</label>
                                    <textarea rows="6" name="contact_message" class="form-control" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" id="submitButton" class="btn_one"
                                        title="Submit Your Message!">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- END COL  -->
            </div><!-- END ROW -->
        </div><!--- END CONTAINER -->
    </div>
    <!-- END CONTACT -->
@endsection
