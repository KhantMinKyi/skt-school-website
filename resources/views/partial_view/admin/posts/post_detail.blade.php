@extends('layouts.admin_layout')

@section('content')
    {{-- @vite('resources/css/app.css') --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('guests/css/news_detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />

    <div class="card">
        <div class="card-body">
            <section class="blog-page section-padding py-12">
                <div class="container mx-auto px-4">
                    <div class="row flex flex-wrap">
                        <div class="w-full ">
                            <div class="arti_single bg-white p-6 rounded-lg shadow-lg">

                                <div class="arti_content text-gray-700 leading-relaxed">
                                    <p></p>
                                </div>
                                <div class="arti_sp mt-6">
                                    <h2 class="text-2xl font-bold text-gray-800">{{ $post->post_title }}</h2>
                                    <img src="{{ asset($post->post_banner) }}" class="img-fluid w-full rounded-lg my-4"
                                        alt="Blog image" />
                                    <p>{!! $post->post_body !!}</p>
                                    @php
                                        $post_images = explode(',', $post->post_image);
                                    @endphp
                                    <div class="mt-6 flex flex-wrap gap-4 justify-start">
                                        @foreach ($post_images as $post_image)
                                            <div class="flex-shrink-0 rounded-lg overflow-hidden ">
                                                <img src="{{ asset($post_image) }}"
                                                    class="h-auto max-h-32 md:max-h-40 xl:max-h-96 w-auto max-w-full object-cover rounded-lg shadow-md hover:shadow-lg transition cursor-pointer"
                                                    alt="">
                                            </div>
                                        @endforeach
                                    </div>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
