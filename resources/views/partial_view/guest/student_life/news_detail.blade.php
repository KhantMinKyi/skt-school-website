@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/news_detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <!-- START POST -->
    {{-- <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out "
            id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset($post->post_banner) }}" alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center   fade-in-out will_hide_div">
                    <h1 id="fading-text" class=" text-2xl md:text-7xl text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                    </h1>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- START BLOG -->
    <section class="blog-page section-padding py-12 mt-[89px] ">
        <div class="container mx-auto px-4">
            <div class="row flex flex-wrap">
                <div class="col-lg-7 col-sm-12 col-xs-12 w-full lg:w-7/12">
                    <div class="arti_single bg-white p-6 rounded-lg shadow-lg">
                        <div class="arti_img_two mb-4">
                            {{-- <img src="{{ asset($post->post_banner) }}" class="img-fluid w-full rounded-lg"
                                alt="Blog image" /> --}}
                        </div>
                        <div class="arti_content text-gray-700 leading-relaxed">
                            <p></p>
                        </div>
                        <div class="arti_sp mt-6">
                            <h2 class="text-2xl font-bold text-gray-800">{{ $post->post_title }}</h2>
                            <img src="{{ asset($post->post_banner) }}" class="img-fluid w-full rounded-lg my-4"
                                alt="Blog image" />
                            <p>{!! $post->post_body !!}</p>
                        </div>
                        @php
                            $post_images = explode(',', $post->post_image);
                        @endphp
                        <div class="mt-6 flex flex-wrap gap-4 justify-between">
                            @foreach ($post_images as $post_image)
                                <div class="flex-shrink-0 rounded-lg overflow-hidden ">
                                    <img src="{{ asset($post_image) }}"
                                        class="h-auto max-h-32 md:max-h-40 xl:max-h-80 w-auto max-w-full object-cover rounded-lg shadow-md hover:shadow-lg transition cursor-pointer"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="share_sp mt-6">
                            {{-- <h4 class="text-lg font-semibold">Share</h4> --}}
                            @if ($branch->branch_short_name == 'SKT-RC')
                                <ul class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-2">
                                    <li><a href="https://www.facebook.com/SKTinternationalCollege/" target="__blank"
                                            class="text-blue-600 hover:text-blue-800">Facebook</a></li>
                                    <li><a href="https://www.youtube.com/@sktinternationalcollege6656" target="__blank"
                                            class="text-blue-400 hover:text-blue-600">Youtube</a></li>
                                    <li><a href="https://www.instagram.com/skt_riverside_campus/" target="__blank"
                                            class="text-pink-500 hover:text-pink-700">Instagram</a></li>
                                    <li><a href="https://mm.linkedin.com/school/skt-international-school-riverside-campus/"
                                            target="__blank" class="text-blue-700 hover:text-blue-900">Linkedin</a></li>
                                </ul>
                            @else
                                <ul class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-2">
                                    <li><a href="https://www.facebook.com/BahanInternationalScienceAcademy/"
                                            target="__blank" class="text-blue-600 hover:text-blue-800">Facebook</a></li>
                                    <li><a href="https://www.youtube.com/@bahaninternationalsciencea7001" target="__blank"
                                            class="text-blue-400 hover:text-blue-600">Youtube</a></li>
                                    <li><a href="https://www.instagram.com/skt_city_campus/" target="__blank"
                                            class="text-pink-500 hover:text-pink-700">Instagram</a></li>
                                    <li><a href="https://mm.linkedin.com/school/skt-international-school-citycampus/"
                                            target="__blank" class="text-blue-700 hover:text-blue-900">Linkedin</a></li>
                                </ul>
                            @endif
                        </div>
                    </div>

                    {{-- <div class="author_part mt-8 bg-gray-100 p-6 rounded-lg">
                        <h3 class="blog_head_title text-xl font-semibold mb-4">About the author</h3>
                        <div class="single_author flex items-center gap-4">
                            <img src="{{ asset($post->post_banner) }}" class="w-16 h-16 rounded-full" alt="" />
                            <div>
                                <h4 class="text-lg font-semibold">{{ $post->created_user->name }}</h4>
                                <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet...</p>
                            </div>
                        </div>
                    </div> --}}

                    <div class="comments_part mt-8">
                        <h3 class="blog_head_title text-xl font-semibold mb-4">Comments</h3>
                        @foreach ($post->comments as $comment)
                            <div class="single_comment flex gap-4 border-b py-4">
                                <div>
                                    <h4 class="font-semibold">{{ $comment->post_comment_user_name }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $comment->post_comment_body }}</p>
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
                        <form id="contact-form" method="post" action="{{ route('post-comment.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="hidden" name="post_comment_post_id" value="{{ $post->id }}">
                                <input type="text" name="post_comment_user_name"
                                    class="form-control border rounded-md p-2" placeholder="Name" required>
                                <input type="email" name="post_comment_user_email"
                                    class="form-control border rounded-md p-2" placeholder="Email" required>
                            </div>
                            <input type="text" name="post_comment_subject"
                                class="form-control border rounded-md p-2 w-full mt-4" placeholder="Subject" required>
                            <textarea rows="6" name="post_comment_body" class="form-control border rounded-md p-2 w-full mt-4"
                                placeholder="Your Message" required></textarea>
                            <button type="submit"
                                class="btn btn_one bg-blue-600 text-white px-4 py-2 rounded-md mt-4">Submit Comment</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-sm-12 col-xs-12 w-full lg:w-5/12 mt-8 lg:mt-0">
                    {{-- <div class="sidebar-post bg-gray-100 p-6 rounded-lg">
                        <h4 class="font-semibold">Subscribe for updates</h4>
                        <form action="#" class="subscribe mt-4">
                            <input type="text" class="subscribe__input border rounded-md p-2 w-full"
                                placeholder="Email Address">
                            <button type="button"
                                class="sub_btn bg-green-600 text-white px-4 py-2 rounded-md mt-2 w-full">Subscribe</button>
                        </form>
                    </div> --}}
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Popular post</h4>
                        </div>
                        @foreach ($posts->reject(fn($p) => $p->id === $post->id) as $other_post)
                            <div class="single_popular">
                                <a href="{{ route('news-detail.home', $other_post->id) }}"><img
                                        src="{{ asset($other_post->post_banner) }}" alt="" /></a>
                                <h5><a
                                        href="{{ route('news-detail.home', $other_post->id) }}">{{ $other_post->post_title }}</a>
                                </h5>
                            </div><!-- END SINGLE POPULAR POST -->
                        @endforeach
                    </div><!-- END SIDEBAR POST -->
                    <div class="sidebar-post">
                        <div class="sidebar_title">
                            <h4>Follow us</h4>
                        </div>
                        @if ($branch->branch_short_name == 'SKT-RC')
                            <div class="single_social">
                                <ul>
                                    <li>
                                        <div class="social_item b_facebook"><a
                                                href="https://www.facebook.com/SKTinternationalCollege/" title="facebook"><i
                                                    class="fa-brands fa-facebook-f"></i></i><span class="item-list">150K
                                                    Likes</span></a>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="social_item b_tiktok"><a href="#" title="tiktok"><i
                                                    class="fa-brands fa-tiktok"></i></i><span class="item-list">138K
                                                    Followers</span></a></div>
                                    </li> --}}
                                    <li>
                                        <div class="social_item b_youtube"><a
                                                href="https://www.youtube.com/@sktinternationalcollege6656"
                                                title="youtube"><i class="fa-brands fa-youtube"></i><span
                                                    class="item-list">90K
                                                    Subscribers</span></a></div>
                                    </li>
                                    {{-- <li>
                                        <div class="social_item b_instagram"><a href="#" title="pinterest"><i
                                                    class="fa-brands fa-instagram"></i><span class="item-list">350K
                                                    Followers</span></a></div>
                                    </li> --}}
                                </ul>
                            </div><!-- END SOCIAL MEDIA POST -->
                        @else
                            <div class="single_social">
                                <ul>
                                    <li>
                                        <div class="social_item b_facebook"><a
                                                href="https://www.facebook.com/BahanInternationalScienceAcademy/"
                                                title="facebook"><i class="fa-brands fa-facebook-f"></i></i><span
                                                    class="item-list">150K
                                                    Likes</span></a>
                                        </div>
                                    </li>

                                    {{-- <li>
                                        <div class="social_item b_tiktok"><a href="#" title="tiktok"><i
                                                    class="fa-brands fa-tiktok"></i></i><span class="item-list">138K
                                                    Followers</span></a></div>
                                    </li> --}}

                                    <li>
                                        <div class="social_item b_youtube"><a
                                                href="https://www.youtube.com/@bahaninternationalsciencea7001"
                                                title="youtube"><i class="fa-brands fa-youtube"></i><span
                                                    class="item-list">90K
                                                    Subscribers</span></a></div>
                                    </li>

                                    {{-- <li>
                                        <div class="social_item b_instagram"><a href="#" title="pinterest"><i
                                                    class="fa-brands fa-instagram"></i><span class="item-list">350K
                                                    Followers</span></a></div>
                                    </li> --}}
                                </ul>
                            </div><!-- END SOCIAL MEDIA POST -->
                        @endif
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
                                            class=" bg-red-500 text-white rounded-full px-2 py-1 text-xs">{{ $category->posts_count }}</sup>
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
