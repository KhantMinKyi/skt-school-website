@extends('layouts.admin_layout')

@section('content')
    {{-- <div class="page-inner bg-light ">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center card-header">
                        <div>
                            <span>Sale Analytics</span>
                            <small class="d-block text-muted">Percentage change
                                <span class="text-danger">▼95.87%</span>
                            </small>
                        </div>
                        <div>
                            <div class="button-shadow btn-group-sm btn-group" role="group">
                                <button class="btn btn-outline-secondary">
                                    24 Hours
                                </button>
                                <button class="btn btn-outline-secondary">
                                    7 Days
                                </button>
                                <button class="btn btn-outline-secondary">
                                    1 Month
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-none d-sm-flex justify-content-between pb-4">
                            <div class="text-success">
                                <h5 class="mb-0">
                                    <strong>
                                        34.45B
                                    </strong>
                                </h5>
                                <small>Aggregate Income</small>
                            </div>
                            <div class="d-sm-flex justify-content-around">
                                <div class="pr-5">
                                    <h5 class="mb-0">
                                        <strong>92.83</strong>
                                    </h5>
                                    <small>Average impressions</small>
                                </div>
                                <div class="pr-5 text-danger">
                                    <h5 class="mb-0">
                                        <strong>45.08%</strong>
                                    </h5>
                                    <small>Engagement rate</small>
                                </div>
                                <div>
                                    <h5 class="mb-0">
                                        <strong>783</strong>
                                    </h5>
                                    <small>Growth Rate</small>
                                </div>
                            </div>
                        </div>
                        <canvas height="60" id="mainChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-body ">
                    <div class=" justify-content-start align-items-center row ">
                        <div class="col-auto ">
                            <button type="button" class="btn btn-primary"
                                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;">
                                <span class="animated-icon">
                                    <div style=" width:22px;height:22px "
                                        data-animation-path="vendor/animated-icons/heart/heart.json" data-loop="false"
                                        data-auto-play="false"></div>
                                </span>
                            </button>
                        </div>
                        <div class="col-auto">
                            <h5 class="stat-widget-title mb-0 fw-400 ">576K</h5>
                            <h6 class="stat-widget-subtitle ">Users</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-body ">
                    <div class=" justify-content-start align-items-center row ">
                        <div class="col-auto ">
                            <button type="button" class="btn btn-secondary"
                                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;">
                                <span class="animated-icon">
                                    <div style=" width:22px;height:22px "
                                        data-animation-path="vendor/animated-icons/online/online.json" data-loop="false"
                                        data-auto-play="false"></div>
                                </span>
                            </button>
                        </div>
                        <div class="col-auto">
                            <h5 class="stat-widget-title mb-0 fw-400 ">99.99%</h5>
                            <h6 class="stat-widget-subtitle ">Uptime</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-body ">
                    <div class=" justify-content-start align-items-center row ">
                        <div class="col-auto ">
                            <button type="button" class="btn btn-warning"
                                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;">
                                <span class="animated-icon">
                                    <div style=" width:22px;height:22px "
                                        data-animation-path="vendor/animated-icons/activity/activity.json" data-loop="false"
                                        data-auto-play="false"></div>
                                </span>
                            </button>
                        </div>
                        <div class="col-auto">
                            <h5 class="stat-widget-title mb-0 fw-400 ">465K</h5>
                            <h6 class="stat-widget-subtitle ">Visitors</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-body ">
                    <div class=" justify-content-start align-items-center row ">
                        <div class="col-auto ">
                            <button type="button" class="btn btn-danger"
                                style="padding: 0.1rem; border-radius: 50%; min-width: 32px; min-height: 32px;">
                                <span class="animated-icon">
                                    <div style=" width:22px;height:22px "
                                        data-animation-path="vendor/animated-icons/thumb/thumb.json" data-loop="false"
                                        data-auto-play="false"></div>
                                </span>
                            </button>
                        </div>
                        <div class="col-auto">
                            <h5 class="stat-widget-title mb-0 fw-400 ">7,578</h5>
                            <h6 class="stat-widget-subtitle ">Likes</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <div>
                            <span>Monthly page views</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas height="180" id="viewsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <div>
                            <span>Revenue</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas height="180" id="revenueChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <div>
                            <span>Monthly visitors</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas height="180" id="visitorsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

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
    </div> --}}
@endsection
