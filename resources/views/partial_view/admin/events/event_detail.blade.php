@extends('layouts.admin_layout')

@section('content')
    <!-- Font Awesome CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
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
            {{-- {{ $event }} --}}
            <div class="row">
                {{-- <div class="col-4"></div> --}}
                <div class="col-12 col-sm-8  col-md-6">
                    <div class="">
                        <img class="border rounded shadow img-fluid" width="350px" src="{{ asset($event->event_banner) }}"
                            alt="">
                    </div>
                    <div class="event_header ">
                        <h4>{{ $event->event_title }}</h4>
                        <span><i class="fa fa-calendar"></i>{{ date('d-m-Y', strToTime($event->event_start_date)) }} -
                            {{ date('d-m-Y', strToTime($event->event_end_date)) }}</span>
                        <span><i class="fa-solid fa-check"></i>{{ $event->category->category_title }}</span>
                        <span><i
                                class="fa-solid fa-location-dot"></i></i><strong>{{ $event->event_location }}</strong></span>
                        <p>Event will held at the {{ $event->event_location }} from
                            {{ date('d-m-Y', strToTime($event->event_start_date)) }} -
                            {{ date('d-m-Y', strToTime($event->event_end_date)) }} ( {{ $event->event_time }} )</p>
                    </div>
                    <div class="event_header_description ">
                        <h3>event Descriptions</h3>
                        <p>{{ $event->event_body }}</p>
                    </div>
                    @if ($event->event_video)
                        <div class="event_header_description ">
                            <h3>event Video</h3>
                            {{-- <video src="{{ $event->event_video }}"></video> --}}
                            <iframe width="100%" height="315"
                                src="https://www.youtube.com/embed/{{ $event->event_video }}" frameborder="0"
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
