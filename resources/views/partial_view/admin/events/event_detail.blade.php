@extends('layouts.admin_layout')

@section('content')
    @vite('resources/css/app.css')
    <!-- Font Awesome CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('guests/css/event_detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap');

        .event-header {
            font-family: "Smooch Sans", serif;

        }

        .event_header {}

        .event_header h4 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .event_header {}

        .event_header span i {
            color: #2eca7f;
            margin-right: 8px;
        }

        .event_header span {
            color: #333;
            margin-bottom: 5px;
            display: inline-block;
            margin-right: 20px;
        }

        .event_header p {
            margin-top: 20px;
        }

        .event_header_description {
            margin-top: 30px;
        }

        .event_header_description h3 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .event_header_description p {}
    </style>
    <div class="card">
        <div class="card-body">
            <!-- START BLOG -->
            <section class="blog-page section-padding py-12">
                <div class="container mx-auto px-4">
                    <div class="row flex flex-wrap">
                        <div class=" w-full">
                            <div class="arti_single bg-white p-6 rounded-lg shadow-lg">

                                <div class="arti_content text-gray-700 leading-relaxed">
                                    <p></p>
                                </div>
                                <div class="arti_sp mt-6">
                                    <h2 class="text-2xl font-bold text-gray-800">{{ $event->event_title }}</h2>
                                    <img src="{{ asset($event->event_banner) }}" class="img-fluid w-full rounded-lg my-4"
                                        alt="Blog image" />
                                    <div class="event-content mb-4">
                                        <span><i class="fa-solid fa-clock"></i></i>{{ $event->event_time }}</span>
                                        <span><i
                                                class="fa fa-table"></i><strong>{{ $event->event_location }}</strong></span>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
