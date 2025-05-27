@extends('layouts.login_layout')
@section('content')
    <!-- START PRELOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- END PRELOADER -->

    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <h1>Login Page</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li> / Login Page</li>
                    </ul>
                </div><!-- //.HERO-TEXT -->
            </div><!--- END COL -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START LOGIN -->
    <section class="login_register section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-xs-12">
                    <div class="login">
                        <form action="{{ route('show.login') }}" method="post">
                            @csrf
                            <h4 class="login_register_title">Sign In </h4>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" id="contact-name" class=" form-control requiredField input-label"
                                    name="login">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" id="contact-email" class="form-control requiredField input-label"
                                    name="password">
                            </div>
                            <div class="form-group col-lg-12">
                                <button class="btn_one" type="submit" name="submit">login</button>
                            </div>
                        </form>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <!-- END LOGIN -->
@endsection
