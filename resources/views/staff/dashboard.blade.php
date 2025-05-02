@extends('layouts.staff_layout')

@section('content')
    @php
        $user = Auth::user();
    @endphp
    <div class="page-inner bg-light ">

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="mb-4 card">
                    <div class="pb-0 card-body">
                        <div class="d-flex mb-4 justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-2 font-weight-bold">{{ $user->name }}</h5>
                                <h6 class="mb-2">{{ $user->email }}</h6>
                                <h6 class="">{{ $user->user_type }}</h6>
                            </div>
                            <div class="text-right">
                                <h5 class="font-weight-light mb-0 text-primary font-weight-bold">
                                    <span>{{ $user->user_name }}</span>
                                </h5>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center" style="flex-wrap: wrap;">
                            <div style="width: 100%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <h5>Posts</h5>
                                    <h5 class="px-2 d-inline-block">{{ count($user->created_posts) }}</h5>
                                </div>
                            </div>
                            <div style="width: 100%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <h5>Event Posts</h5>
                                    <h5 class="px-2 d-inline-block">{{ count($user->created_events) }}</h5>
                                </div>
                            </div>
                            <div style="width: 100%;">
                                <div class="d-flex mb-2 justify-content-between align-items-center">
                                    <h5>Categories</h5>
                                    <h5 class="px-2 d-inline-block">{{ count($user->created_categories) }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
