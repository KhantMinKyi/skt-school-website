@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/event_detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <!-- START POST -->
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out mt-20 sm:mt-0" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset($event->event_banner) }}" alt="slider-image" class="w-full h-auto object-cover" />
                {{-- <div class=" absolute inset-0 flex flex-col items-center justify-center p-8 text-white"
                data-animation="animated fadeInRight">
                <h2 class=" md:text-4xl font-semibold text-teal-500 uppercase">Alumni</h2>
            </div> --}}
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div ">
                    <h1 id="fading-text" class=" text-2xl md:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        {{-- <div class="text-white mt-4 hidden sm:block">{{ $event->event_title }} </div> --}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- START BLOG -->
    <section class="blog-page section-padding py-12">
        <div class="container mx-auto px-4">
            <div class="row flex flex-wrap">
                <div class="col-lg-7 col-sm-12 col-xs-12 w-full lg:w-7/12">
                    <div class="arti_single bg-white p-6 rounded-lg shadow-lg">
                        <div class="arti_img_two mb-4">
                            {{-- <img src="{{ asset($event->event_banner) }}" class="img-fluid w-full rounded-lg"
                                alt="Blog image" /> --}}
                        </div>
                        <div class="arti_content text-gray-700 leading-relaxed">
                            <p></p>
                        </div>
                        <div class="arti_sp mt-6">
                            <h2 class="text-2xl font-bold text-gray-800">{{ $event->event_title }}</h2>
                            <img src="{{ asset($event->event_banner) }}" class="img-fluid w-full rounded-lg my-4"
                                alt="Blog image" />
                            <div class="event-content mb-4">
                                <span><i class="fa-solid fa-clock"></i></i>{{ $event->event_time }}</span>
                                <span><i class="fa fa-table"></i><strong>{{ $event->event_location }}</strong></span>
                            </div>
                            <p>{{ $event->event_body }}</p>
                        </div>
                        <div class="share_sp mt-6">
                            <h4 class="text-lg font-semibold">Share</h4>
                            <ul class="flex gap-4 mt-2">
                                <li><a href="#" class="text-blue-600 hover:text-blue-800">Facebook</a></li>
                                <li><a href="#" class="text-blue-400 hover:text-blue-600">Twitter</a></li>
                                <li><a href="#" class="text-pink-500 hover:text-pink-700">Instagram</a></li>
                                <li><a href="#" class="text-blue-700 hover:text-blue-900">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="comments_part mt-8">
                        <h3 class="blog_head_title text-xl font-semibold mb-4">Comments</h3>
                        @foreach ($event->comments as $comment)
                            <div class="single_comment flex gap-4 border-b py-4">
                                <div>
                                    <h4 class="font-semibold">{{ $comment->event_comment_user_name }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $comment->event_comment_body }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

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
                    <div class="comment_form mt-8 bg-white p-6 shadow-lg rounded-lg">
                        <h3 class="blog_head_title text-xl font-semibold mb-4">Add a Comment</h3>
                        <form id="contact-form" method="post" action="{{ route('event-comment.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="hidden" name="event_comment_event_id" value="{{ $event->id }}">
                                <input type="text" name="event_comment_user_name"
                                    class="form-control border rounded-md p-2" placeholder="Name" required>
                                <input type="email" name="event_comment_user_email"
                                    class="form-control border rounded-md p-2" placeholder="Email" required>
                            </div>
                            <input type="text" name="event_comment_subject"
                                class="form-control border rounded-md p-2 w-full mt-4" placeholder="Subject" required>
                            <textarea rows="6" name="event_comment_body" class="form-control border rounded-md p-2 w-full mt-4"
                                placeholder="Your Message" required></textarea>
                            <button type="submit"
                                class="btn btn_one bg-blue-600 text-white px-4 py-2 rounded-md mt-4">Submit Comment</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-12 col-xs-12 w-full lg:w-5/12 mt-8 lg:mt-0">
                    <div class="sidebar-post bg-gray-100 p-6 rounded-lg">
                        <h4 class="font-semibold">Subscribe for updates</h4>
                        <form action="#" class="subscribe mt-4">
                            <input type="text" class="subscribe__input border rounded-md p-2 w-full"
                                placeholder="Email Address">
                            <button type="button"
                                class="sub_btn bg-green-600 text-white px-4 py-2 rounded-md mt-2 w-full">Subscribe</button>
                        </form>
                    </div>
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Popular Events</h4>
                        </div>
                        @foreach ($events->reject(fn($p) => $p->id === $event->id) as $other_event)
                            <div class="single_popular">
                                <a href="{{ route('event-detail.home', $other_event->id) }}"><img
                                        src="{{ asset($other_event->event_banner) }}" alt="" /></a>
                                <h5><a
                                        href="{{ route('event-detail.home', $other_event->id) }}">{{ $other_event->event_title }}</a>
                                </h5>
                            </div><!-- END SINGLE POPULAR Event -->
                        @endforeach
                        {{-- <div class="single_popular">
                            <a href="single_blog.html"><img src="assets/images/blog/blog-3.png" alt="" /></a>
                            <h5><a href="single_blog.html">Enhancing Your E-commerce Store With AI Writing Assistants.</a>
                            </h5>
                        </div>
                        <div class="single_popular">
                            <a href="single_blog.html"><img src="assets/images/blog/blog-4.png" alt="" /></a>
                            <h5><a href="single_blog.html">Building your content strategy cannot get easier than this.</a>
                            </h5>
                        </div>
                        <div class="single_popular">
                            <a href="single_blog.html"><img src="assets/images/blog/blog-5.png" alt="" /></a>
                            <h5><a href="single_blog.html">This is the only read you would need before sitting down to
                                    prepare</a></h5>
                        </div> --}}
                    </div><!-- END SIDEBAR POST -->
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Follow us</h4>
                        </div>
                        <div class="single_social">
                            <ul>
                                <li>
                                    <div class="social_item b_facebook"><a href="#" title="facebook"><i
                                                class="fa-brands fa-facebook-f"></i></i><span class="item-list">150K
                                                Likes</span></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="social_item b_tiktok"><a href="#" title="tiktok"><i
                                                class="fa-brands fa-tiktok"></i></i><span class="item-list">138K
                                                Followers</span></a></div>
                                </li>

                                <li>
                                    <div class="social_item b_youtube"><a href="#" title="youtube"><i
                                                class="fa-brands fa-youtube"></i><span class="item-list">90K
                                                Subscribers</span></a></div>
                                </li>

                                <li>
                                    <div class="social_item b_instagram"><a href="#" title="pinterest"><i
                                                class="fa-brands fa-instagram"></i><span class="item-list">350K
                                                Followers</span></a></div>
                                </li>

                                {{-- <li>
                                    <div class="social_item b_tumblr"><a href="#" title="rss"><i
                                                class="fa fa-tumblr"></i><span class="item-list">901 Followers</span></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="social_item b_rss"><a href="#" title="rss"><i
                                                class="fa fa-rss"></i><span class="item-list">411 Followers</span></a>
                                    </div>
                                </li> --}}
                            </ul>
                        </div><!-- END SOCIAL MEDIA POST -->
                    </div><!-- END SIDEBAR POST -->
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>CATEGORIES</h4>
                        </div>
                        <div class="single_category">
                            <ul>
                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->category_title }}
                                        </a><sup
                                            class=" bg-red-500 text-white rounded-full px-2 py-1 text-xs">{{ $category->events_count }}</sup>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- END SOCIAL MEDIA POST -->
                    </div><!-- END SIDEBAR POST -->
                </div>
            </div>
        </div>
    </section>

    <!-- END BLOG -->
@endsection
