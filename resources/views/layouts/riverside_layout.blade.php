<!DOCTYPE html>
<html lang="en">
@php
    use App\Models\Branch;
    $layout_branch = Branch::where('branch_short_name', 'SKT-RC')->first();
@endphp

<head>
    <title>@yield('title', 'SKT International School Riverside Campus')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Welcome to SKT International School`s Riverside Campus in Yangon, Myanmar — where exceptional international education meets innovation and excellence. Our certified educators, globally recognized curriculum, and state-of-the-art facilities create the perfect environment for academic success and personal development. Enroll today to join a vibrant community that inspires lifelong learning. Discover why SKT is one of the most respected and sought-after international schools in Yangon and throughout Myanmar.')">
    <meta name="keywords" content="@yield('meta_keywords', 'school, education, Myanmar, Yangon, International')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@yield('og_title', 'SKT International School Riverside Campus')" />
    <meta property="og:description" content="@yield('og_description', 'Welcome to SKT International School`s Riverside Campus in Yangon, Myanmar — where exceptional international education meets innovation and excellence. Our certified educators, globally recognized curriculum, and state-of-the-art facilities create the perfect environment for academic success and personal development. Enroll today to join a vibrant community that inspires lifelong learning. Discover why SKT is one of the most respected and sought-after international schools in Yangon and throughout Myanmar.')" />
    <meta property="og:image" content="@yield('og_image',asset('assets/images/icon/icon.png'))" />
    <meta property="og:url" content="@yield('og_url', request()->url())" />
    <meta property="og:type" content="website" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'SKT International School Riverside Campus')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Welcome to SKT International School`s Riverside Campus in Yangon, Myanmar — where exceptional international education meets innovation and excellence. Our certified educators, globally recognized curriculum, and state-of-the-art facilities create the perfect environment for academic success and personal development. Enroll today to join a vibrant community that inspires lifelong learning. Discover why SKT is one of the most respected and sought-after international schools in Yangon and throughout Myanmar.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/images/icon/icon.png'))">


    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- @vite('resources/css/app.css') --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('guests/css/footer.css') }}" />
    <link rel="icon" href="{{ asset('assets/images/icon/icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('guests/css/nav.css') }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Smooch+Sans:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap');

        .hlc {
            position: relative;
            margin-right: 10px;
            display: inline-block;
        }


        body {
            font-family: 'Montserrat', sans-serif;
        }

        @keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes fadeInOutBackground {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 0.7;
            }

            90% {
                opacity: 0.7;
            }

            100% {
                opacity: 0;
            }
        }

        .fade-in-out {
            animation: fadeInOut 2s ease-in-out forwards;
        }

        .fade-in-out-background {
            animation: fadeInOutBackground 2s ease-in-out forwards;
        }
    </style>
</head>

<body>
    <nav id="navbar"
        class=" text-white fixed top-0 w-full z-50  transition-all duration-300 bg-gray-900 bg-opacity-90">
        <div class=" mx-auto flex justify-end p-4">
        </div>
        <div class="main-menu  flex items-center justify-between p-4 md:mt-4">
            <!-- Logo -->
            <div class="text-xl font-bold  md:w-80 -mt-8 md:-mt-12">
                <a href="{{ route('river.home') }}" class="hidden md:block"><img
                        src="{{ asset('img/skt-bnw-logo.png') }}" alt="" class="w-60"></a>
                <a href="{{ route('river.home') }}" class=" md:hidden"><img
                        src="{{ asset('img/mobile_bnw_logo.png') }}" alt="" class="w-16"></a>
            </div>
            <!-- Mobile Menu Button -->
            <div class="-mt-8 flex h-full items-stretch">
                <div class="flex align-middle justify-evenly items-center">
                    <img src="{{ asset('img/river_line.png') }}" alt="" class="h-4 mr-2 ">
                    <button id="MobileSwitchCampusBtn" title="Switch Campus"
                        class="hover:text-green-500 text-xl text-white mr-4 ">
                        <i class="fa-solid fa-repeat"></i>
                    </button>
                </div>
                <div class="h-full">
                    <button id="open-menu"
                        class="w-full h-full text-2xl   rounded-lg px-4 py-2 flex items-center justify-center">
                        <i class="fa-solid fa-bars hover:text-yellow-400" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        @include('layouts.mobile_layout')

    </nav>

    <!-- START HOME -->
    @yield('content')
    <!-- END  HOME -->

    <!-- START FOOTER -->
    <div class="footer section-padding bg-gray-900">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 ">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer p-4">
                        {{-- <a href="index.html"><img src="assets/images/all-img/logo2.png" alt="" /></a> --}}
                        <a href="{{ route('river.home') }}"><img src="{{ asset('img/footer_logo.png') }}"
                                class=" max-w-52 sm:max-w-72" alt=""></a>
                        <p class=" text-sm md:text-lg">
                            We nurture students to become lifelong learners responsible global citizens, and
                            compassionate individuals through a challenging and balanced curriculum in a safe and caring
                            environment.
                        </p>
                    </div>
                    <div class="foot_social p-4">
                        <ul class=" ">
                            <li><a href="https://www.facebook.com/SKTinternationalCollege/" target="__blank"
                                    class="hlc  ">
                                    <i class="ti-facebook"></i>
                                </a></li>
                            <li>
                                <a href="https://www.instagram.com/skt_riverside_campus/" target="__blank"
                                    class="hlc ">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@sktinternationalcollege6656" target="__blank"
                                    class="hlc ">
                                    <i class="ti-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="tel:019410010" target="__blank" class="hlc ">
                                    <i class="ti-mobile"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->
                <div>
                    {{-- <div class="single_footer">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Knowledge Base</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Market API</a></li>
                            <li><a href="#">Support team</a></li>
                        </ul>
                    </div> --}}
                </div>
                <!--- END COL -->
                <div>
                    <div class="single_footer p-4">
                        <h4>Menu</h4>
                        <ul class="grid grid-cols-2 list-disc">
                            <li class=" hover:text-emerald-500"><a href="/">Home</a></li>
                            <li class=" hover:text-emerald-500"><a
                                    href="{{ route('our-history.home', $layout_branch->branch_short_name) }}">About
                                    Us</a></li>
                            <li class=" hover:text-emerald-500"><a
                                    href="{{ route('alumni.home', $layout_branch->branch_short_name) }}">Student
                                    Life</a>
                            </li>
                            <li class=" hover:text-emerald-500"><a
                                    href="{{ route('pre-school.home', $layout_branch->branch_short_name) }}">Education</a>
                            </li>
                            <li class=" hover:text-emerald-500"><a
                                    href="{{ route('student-admission.home', $layout_branch->branch_short_name) }}">Admission</a>
                            </li>
                            <li class=" hover:text-emerald-500"><a
                                    href="{{ route('event.home', $layout_branch->branch_short_name) }}">Event</a></li>
                            <li class=" hover:text-emerald-500"><a
                                    href="{{ route('contact_us.home', $layout_branch->branch_short_name) }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-3 col-sm-6 col-xs-12 p-4">
                    <div class="single_footer">
                        <h4>Contact Info</h4>
                        <div class="sf_contact grid grid-cols-2 gap-2">
                            <div>
                                <span class="ti-mobile"></span>
                                <h3 class="hidden sm:block">Phone number</h3>
                            </div>
                            <div>
                                <small class="text-emerald-500"> 𝑹𝒊𝒗𝒆𝒓𝒔𝒊𝒅𝒆 𝑪𝒂𝒎𝒑𝒖𝒔 : </small>
                                <p class="break-words " > 019410010 |  019410020 | 09456481970</p>
                                <small class="text-emerald-500">𝑷𝒓𝒆𝒔𝒄𝒉𝒐𝒐𝒍- 𝑹𝒊𝒗𝒆𝒓𝒔𝒊𝒅𝒆 𝑪𝒂𝒎𝒑𝒖𝒔 : </small>
                                <p class="break-words " >09424463220</p>
                            </div>
                        </div>
                        <div class="sf_contact grid grid-cols-2 gap-2 over">
                            <div>
                                <span class="ti-email"></span>
                                <h3 class="hidden sm:block">Email </h3>
                            </div>
                            <div>
                                <p class="break-words ">𝒄𝒐𝒏𝒕𝒂𝒄𝒕.𝒓𝒊𝒗𝒆𝒓@𝒔𝒌𝒕.𝒆𝒅𝒖.𝒎𝒎</p>
                                <p class="break-words ">𝒄𝒐𝒏𝒕𝒂𝒄𝒕.𝒓𝒊𝒗𝒆𝒓𝒌𝒈@𝒔𝒌𝒕.𝒆𝒅𝒖.𝒎𝒎</p>
                            </div>
                        </div>
                        <div class="sf_contact grid grid-cols-2 gap-2">
                            <div>
                                <span class="ti-map"></span>
                                <h3 class="hidden sm:block">Address</h3>
                            </div>
                            <p>235, Shu Khinn Thar Myo Pat Rd. Thaketa Tsp, Yangon</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <div class="grid grid-cols-1 sm:grid-cols-2 fc p-4">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_copyright">
                        <p>&copy; 2025. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{ route('term-of-use.home', $layout_branch->branch_short_name) }}">Terms of
                                    use</a></li>
                            <li><a href="{{ route('privacy-policy.home', $layout_branch->branch_short_name) }}">Privacy
                                    Policy</a></li>
                            {{-- <li><a href="#">Cookie Policy</a></li> --}}
                        </ul>
                    </div>
                </div>
                <!-- END COL -->
            </div>
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- END FOOTER -->



    <!-- Latest jQuery -->
    {{-- <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('guests/js/script.js') }}"></script> --}}

    <!-- Combined JS files -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('guests/js/script.js') }}"></script>
    <script src="{{ asset('guests/js/riverside-layout.js') }}" defer></script>



    {{-- <script>
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const dropdownMenu = this.nextElementSibling;

                // Close all dropdowns and reset all icons
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== dropdownMenu) {
                        menu.classList.add('hidden');
                    }
                });

                document.querySelectorAll('.dropdown-btn .toggle-icon i').forEach(icon => {
                    icon.classList.remove('fa-angle-up');
                    icon.classList.add('fa-angle-down');
                    icon.classList.remove('text-yellow-400');
                });

                // Toggle this dropdown
                const isOpen = !dropdownMenu.classList.contains('hidden');
                dropdownMenu.classList.toggle('hidden');

                // Update icon only if open
                const icon = this.querySelector('.toggle-icon i');
                if (!isOpen) {
                    icon.classList.remove('fa-angle-down');
                    icon.classList.add('fa-angle-up');
                    icon.classList.add('text-yellow-400');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const currentRoute = window.location.pathname;
            const isCampusRoute = ["/skt-riverside-campus", "/skt-city-campus"].includes(currentRoute);
            $('#MobileSwitchCampusBtn').on('click', function() {
                const currentUrl = window.location.href;
                let newUrl = currentUrl;
                // Define branch names for switching
                const cityBranch = 'skt-city-campus';
                const riversideBranch = 'skt-riverside-campus';
                if (currentUrl.includes('/event/event-detail/') || currentUrl.includes(
                        '/student_life/news-detail/') || currentUrl.includes(
                        '/admission/career-detail/') || currentUrl.includes(
                        '/education/ib/')) {
                    return alert('You Cannot Switch Campus at that Page')
                }
                // Check which branch is currently active and switch
                if (currentUrl.includes(cityBranch)) {
                    newUrl = currentUrl.replace(cityBranch, riversideBranch);
                } else if (currentUrl.includes(riversideBranch)) {
                    newUrl = currentUrl.replace(riversideBranch, cityBranch);
                } else {
                    // For URLs with {param} like /student_life/alumni/SKT-RC
                    const branchRegex = /\/(SKT-[A-Z]+)\b/;
                    if (branchRegex.test(currentUrl)) {
                        newUrl = currentUrl.replace(branchRegex, (match, branch) =>
                            branch === 'SKT-CC' ? '/SKT-RC' : '/SKT-CC'
                        );
                    }

                    // Handle URLs for /about_us/head_of_school_message/{id}
                    if (currentUrl.includes('/about_us/head_of_school_message/')) {
                        newUrl = currentUrl.replace('about_us/head_of_school_message/1',
                            'about_us/head_of_school_message/2');
                    }
                }

                // Reload to new URL
                window.location.href = newUrl;
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let isOpen = false;

            // Toggle menu open/close
            $("#open-menu").on("click", function(e) {
                e.stopPropagation();
                if (!isOpen) {
                    $("#mobile-wrapper").css("width", "300px");
                    $('#menuIcon').addClass('text-yellow-400');
                    isOpen = true;
                } else {
                    $("#mobile-wrapper").css("width", "0");
                    $('#menuIcon').removeClass('text-yellow-400');
                    isOpen = false;
                }
            });

            // Close when clicking the close button
            $("#close-menu").on("click", function() {
                $("#mobile-wrapper").css("width", "0");
                $('#menuIcon').removeClass('text-yellow-400');
                isOpen = false;
            });

            // Close when clicking outside the menu
            $(document).on("click", function(e) {
                const menuWrapper = $("#mobile-wrapper");
                const openBtn = $("#open-menu");

                // If click is not on the menu or the open button
                if (
                    !menuWrapper.is(e.target) &&
                    menuWrapper.has(e.target).length === 0 &&
                    !openBtn.is(e.target) &&
                    openBtn.has(e.target).length === 0
                ) {
                    menuWrapper.css("width", "0");
                    isOpen = false;
                    $('#menuIcon').removeClass('text-yellow-400');
                }
            });
        });
    </script> --}}

</body>

</html>
