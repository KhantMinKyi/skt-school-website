@extends('layouts.staff_layout')

@section('content')
    <div class="page-inner bg-light ">

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="mb-4 card">
                    <div class="pb-0 card-body">
                        <div class="d-flex mb-4 justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0 font-weight-bold">Harare, ZW</h5>
                                <h6 class="mb-0">December 27th 2019</h6>
                                <small>Light rain</small>
                            </div>
                            <div class="text-right">
                                <h3 class="font-weight-light mb-0">
                                    <span>20.51°</span>
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center" style="flex-wrap: wrap;">
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Temp</span>
                                    <small class="px-2 d-inline-block">20.51</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Feels like</span>
                                    <small class="px-2 d-inline-block">21.23</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Temp min</span>
                                    <small class="px-2 d-inline-block">20.51</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Temp max</span>
                                    <small class="px-2 d-inline-block">20.51</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Pressure</span>
                                    <small class="px-2 d-inline-block">1011</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Sea level</span>
                                    <small class="px-2 d-inline-block">1011</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Grnd level</span>
                                    <small class="px-2 d-inline-block">858</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Humidity</span>
                                    <small class="px-2 d-inline-block">77</small>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <span>Temp kf</span>
                                    <small class="px-2 d-inline-block">0</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider">
                        <span class="divider-inner">
                            <small>Forecast</small>
                        </span>
                    </div>
                    <div class="pt-0 card-body">
                        <div class="text-center justify-content-between align-items-center d-flex"
                            style="flex-flow: initial;">
                            <div class="text-center mb-0 d-flex align-items-center justify-content-center flex-column">
                                <span style="display: block; margin: 2px 0px;">Fri</span>
                                <span style="display: block; margin: 2px 0px;"></span>
                                <span style="display: block; margin: 2px 0px;">
                                    <span class="animated-icon">
                                        <div style="width:24px;height:24px"
                                            data-animation-path="vendor/animated-icons/rain-cloud-weather/rain-cloud-weather.json"
                                            data-loop="true" data-auto-play="true"></div>
                                    </span>
                                </span>
                                <span style="display: block; margin: 2px 0px;">20.78°</span>
                            </div>
                            <div class="text-center mb-0 d-flex align-items-center justify-content-center flex-column">
                                <span style="display: block; margin: 2px 0px;">Sat</span>
                                <span style="display: block; margin: 2px 0px;"></span>
                                <span style="display: block; margin: 2px 0px;">
                                    <span class="animated-icon">
                                        <div style="width:24px;height:24px"
                                            data-animation-path="vendor/animated-icons/rain-cloud-weather/rain-cloud-weather.json"
                                            data-loop="true" data-auto-play="true"></div>
                                    </span>
                                </span>
                                <span style="display: block; margin: 2px 0px;">19.32°</span>
                            </div>
                            <div class="text-center mb-0 d-flex align-items-center justify-content-center flex-column">
                                <span style="display: block; margin: 2px 0px;">Sat</span>
                                <span style="display: block; margin: 2px 0px;"></span>
                                <span style="display: block; margin: 2px 0px;">
                                    <span class="animated-icon">
                                        <div style="width:24px;height:24px"
                                            data-animation-path="vendor/animated-icons/rain-cloud-weather/rain-cloud-weather.json"
                                            data-loop="true" data-auto-play="true"></div>
                                    </span>
                                </span>
                                <span style="display: block; margin: 2px 0px;">18.05°</span>
                            </div>
                            <div class="text-center mb-0 d-flex align-items-center justify-content-center flex-column">
                                <span style="display: block; margin: 2px 0px;">Sat</span>
                                <span style="display: block; margin: 2px 0px;"></span>
                                <span style="display: block; margin: 2px 0px;">
                                    <span class="animated-icon">
                                        <div style="width:24px;height:24px"
                                            data-animation-path="vendor/animated-icons/rain-cloud-weather/rain-cloud-weather.json"
                                            data-loop="true" data-auto-play="true"></div>
                                    </span>
                                </span>
                                <span style="display: block; margin: 2px 0px;">23.41°</span>
                            </div>
                            <div class="text-center mb-0 d-flex align-items-center justify-content-center flex-column">
                                <span style="display: block; margin: 2px 0px;">Sat</span>
                                <span style="display: block; margin: 2px 0px;"></span>
                                <span style="display: block; margin: 2px 0px;">
                                    <span class="animated-icon">
                                        <div style="width:24px;height:24px"
                                            data-animation-path="vendor/animated-icons/rain-cloud-weather/rain-cloud-weather.json"
                                            data-loop="true" data-auto-play="true"></div>
                                    </span>
                                </span>
                                <span style="display: block; margin: 2px 0px;">27.66°</span>
                            </div>
                            <div class="text-center mb-0 d-flex align-items-center justify-content-center flex-column">
                                <span style="display: block; margin: 2px 0px;">Sat</span>
                                <span style="display: block; margin: 2px 0px;"></span>
                                <span style="display: block; margin: 2px 0px;">
                                    <span class="animated-icon">
                                        <div style="width:24px;height:24px"
                                            data-animation-path="vendor/animated-icons/rain-cloud-weather/rain-cloud-weather.json"
                                            data-loop="true" data-auto-play="true"></div>
                                    </span>
                                </span>
                                <span style="display: block; margin: 2px 0px;">28.63°</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="cover" style="height: 294px;">
                        <div class="rounded-top overflow-hidden carousel slide" data-ride="carousel" id="postCarousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="image"
                                        style="background-image: url(images/unsplash/1.jpg); height: 294px;"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="image"
                                        style="background-image: url(images/unsplash/15.jpg); height: 294px;"></div>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#postCarousel" class="" data-slide-to="0"></li>
                                <li data-target="#postCarousel" class="" data-slide-to="1"></li>
                            </ol>
                        </div>
                        <div class="title p-4">
                            <h6 class="mb-0 text-white">Shrimp and Chorizo Paella</h6>
                            <small class="mb-0 text-white-50">Yesterday</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-content">
                            Phileas Fogg and Aouda went on board, where they found Fix
                            already installed. Below deck was a square cabin, of which
                            the walls bulged out in the form of cots, above a circular
                            divan; in the centre was a table provided with a swinging
                            lamp.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
