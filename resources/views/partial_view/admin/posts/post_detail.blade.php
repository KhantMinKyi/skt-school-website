@extends('layouts.admin_layout')

@section('content')
    <!-- Font Awesome CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@100..900&display=swap');

        .post-header {
            font-family: "Smooch Sans", serif;

        }

        .post_header {}

        .post_header h4 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .post_header {}

        .post_header span i {
            color: #2eca7f;
            margin-right: 8px;
        }

        .post_header span {
            color: #333;
            margin-bottom: 5px;
            display: inline-block;
            margin-right: 20px;
        }

        .post_header p {
            margin-top: 20px;
        }

        .post_header_description {
            margin-top: 30px;
        }

        .post_header_description h3 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .post_header_description p {}
    </style>
    <div class="card">
        <div class="card-body">
            {{-- {{ $post }} --}}
            <div class="row">
                {{-- <div class="col-4"></div> --}}
                <div class="col-12 col-sm-8  col-md-6">
                    <div class="">
                        <img class="border rounded shadow img-fluid" src="{{ asset($post->post_banner) }}" alt="">
                    </div>
                    <div class="post_header ">
                        <h4>{{ $post->post_title }}</h4>
                        <span><i class="fa fa-calendar"></i>{{ date('d-m-Y', strToTime($post->post_created_date)) }}</span>
                        <span><i class="fa-solid fa-check"></i>{{ $post->category->category_title }}</span>
                        <span><i
                                class="fa-solid fa-location-dot"></i></i><strong>{{ $post->branch->branch_name }}</strong></span>
                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the when an unknown printer.</p> --}}
                    </div>
                    <div class="post_header_description ">
                        <h3>Post Descriptions</h3>
                        <p>{{ $post->post_body }}</p>
                    </div>
                    @if ($post->post_video)
                        <div class="post_header_description ">
                            <h3>Post Video</h3>
                            {{-- <video src="{{ $post->post_video }}"></video> --}}
                            <iframe width="100%" height="315"
                                src="https://www.youtube.com/embed/{{ $post->post_video }}" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen>
                            </iframe>
                            <p></p>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection
