<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Penn - Education HTML Template">
    <meta name="keywords"
        content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university">
    <meta name="author" content="theme_ocean">
    <!-- SITE TITLE -->
    <title>SKT International School</title>
    <link rel="icon" href="{{ asset('assets/images/icon/icon.png') }}" type="image/png">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <!--slicknav Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
        .bounce-up {
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bounce-up:hover {
            transform: translateY(-10px);
            /* Move up by 10px */
            /* box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); Optional shadow for visual effect */
        }
    </style>
</head>

<body>
    {{-- {{Auth::user() ?? 'No User '}} --}}


    @yield('content')
    <!-- START FOOTER -->
    <div class="footer ">
        <div class="row fc container mx-auto">
            <div class="col-lg-6 col-sm-6 col-xs-12 ">
                <div class="footer_copyright ">
                    <p>&copy; 2025. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div><!-- END COL -->
        </div>

    </div>
    <!-- END FOOTER -->
    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- jquery.slicknav -->
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- scrolltopcontrol js -->
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
