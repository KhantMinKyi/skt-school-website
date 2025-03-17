<!DOCTYPE html>
<html lang="en">
@php
    use App\Models\Branch;
    $layout_branch = Branch::where('branch_short_name', 'SKT-RC')->first();
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('guests/css/footer.css') }}" />
    <title>SKT International School</title>
    <link rel="icon" href="{{ asset('assets/images/icon/icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('guests/css/nav.css') }}" />
    <style>
        .hlc {
            position: relative;
            margin-right: 10px;
            display: inline-block;
        }

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Smooch+Sans:wght@100..900&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <nav id="navbar" class="bg-transparent text-white fixed top-0 w-full z-50  transition-all duration-300">
        <div class=" mx-auto flex justify-end p-4">
            <!-- Social Icons (Hidden on small screens) -->
            <div class="hidden md:flex  space-x-4 ">
                <a href="#" class="hlc ">
                    <i class="ti-facebook"></i>
                </a>
                <a href="#" class="hlc">
                    <i class="ti-instagram"></i>
                </a>
                <a href="#" class="hlc">
                    <i class="ti-youtube"></i>
                </a>
                <a href="#" class="hlc">
                    <i class="ti-mobile"></i>
                </a>
            </div>
        </div>
        <div class="main-menu container mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="text-xl font-bold w-48 md:w-80 -mt-6 md:-mt-12">
                <a href="/"><img src="{{ asset('img/skt_with_tagline.png') }}" alt=""></a>
            </div>

            <!-- Menu (Hidden on small screens) -->
            <ul class="hidden lg:flex space-x-6 pb-2 ">
                {{-- <li><a href="#" class="hover:text-gray-400  font-bold">Home</a></li> --}}

                <li class="relative group -mt-1">
                    <a href="/" class=" font-bold hover:text-teal-500 px-2 py-1 block">Home</a>
                    <ul class="absolute left-0 top-full hidden group-hover:block bg-white w-60 shadow-lg rounded-md">
                        <li class="py-2"><a href="{{ route('city.home') }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500 pt-4">SKT City
                                Campus</a></li>
                        <li class="py-2"><a href="{{ route('river.home') }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500 pt-4">SKT
                                Riverside Campus</a></li>
                    </ul>
                </li>
                <li class="relative group -mt-1">
                    <a href="#" class=" font-bold hover:text-teal-500 px-2 py-1 block">About Us</a>
                    <ul class="absolute left-0 top-full hidden group-hover:block bg-white w-60 shadow-lg rounded-md">
                        <li class="py-2"><a href="{{ route('principal-message.home', $layout_branch->id) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Our
                                Principle
                                Message</a></li>
                        <li class="py-2"><a href="{{ route('our-history.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Our
                                History</a></li>
                        <li class="py-2"><a
                                href="{{ route('our-statement.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Our
                                Mission , Vision
                                , Philosophy</a></li>
                        <li class="py-2"><a
                                href="{{ route('our-teachers.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Our
                                Teachers</a>
                        </li>
                        <li class="py-2"><a
                                href="{{ route('sister-schools.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Sister Schools</a>
                        </li>
                    </ul>
                </li>
                <li class="relative group -mt-1">
                    <a href="#" class=" font-bold hover:text-teal-500 px-2 py-1 block">Student
                        Life</a>
                    <ul class="absolute left-0 top-full hidden group-hover:block bg-white w-60 shadow-lg rounded-md">
                        <li class="py-2"><a href="{{ route('alumni.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Alumni</a></li>
                        <li class="py-2"><a href="{{ route('news.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">News</a></li>
                        <li class="py-2"><a href="{{ route('gallery.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Gallery</a></li>
                        <li class="py-2"><a href="{{ route('calendar.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Calendar</a>
                        </li>
                    </ul>
                </li>
                <li class="relative group -mt-1">
                    <a href="#" class=" font-bold hover:text-teal-500 px-2 py-1 block">Education</a>
                    <ul class="absolute left-0 top-full hidden group-hover:block bg-white w-60 shadow-lg rounded-md">
                        <li class="py-2"><a href="{{ route('pre-school.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Pre
                                School</a></li>
                        <li class="py-2"><a href="#"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Primary</a></li>
                        <li class="py-2"><a href="#"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Secondary</a></li>
                        <li class="py-2"><a href="#"
                                class="block px-4 py-2 font-bold hover:text-teal-500">IGCSE</a>
                        <li class="py-2"><a href="#"
                                class="block px-4 py-2 font-bold hover:text-teal-500">UFP
                                (University
                                Foundation Program)</a>
                        </li>
                    </ul>
                </li>
                <li class="relative group -mt-1">
                    <a href="#" class=" font-bold hover:text-teal-500 px-2 py-1 block">Admission</a>
                    <ul class="absolute left-0 top-full hidden group-hover:block bg-white w-60 shadow-lg rounded-md">
                        <li class="py-4"><a
                                href="{{ route('student-admission.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Student
                                Admission</a></li>
                        <li class="py-4"><a
                                href="{{ route('admission-process.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Admission
                                Process</a></li>
                        <li class="py-4"><a
                                href="{{ route('withdrawal-policy.home', $layout_branch->branch_short_name) }}"
                                class="block px-4 py-2 font-bold hover:text-teal-500">Withdrawal
                                Policy</a></li>
                        <li class="py-4"><a
                                href="https://www.jobnet.com.mm/companies/bfi-education-services-co-ltd/e-11033"
                                target="__blank" class="block px-4 py-2 font-bold hover:text-teal-500">Career</a>
                        </li>
                    </ul>
                </li>
                <li class="-mt-1"><a href="{{ route('event.home', $layout_branch->branch_short_name) }}"
                        class=" font-bold hover:text-teal-500 px-2 py-1 block"> Event
                    </a></li>
                <li class="-mt-1"><a href="{{ route('contact_us.home', $layout_branch->branch_short_name) }}"
                        class=" font-bold hover:text-teal-500 px-2 py-1 block">Contact</a></li>
                <li class="-mt-1">
                    <button id="switchCampusBtn" title="Switch Campus" class="hover:text-green-500 text-xl">
                        <i class="fa-solid fa-repeat"></i>
                    </button>
                </li>

            </ul>

            <!-- Mobile Menu Button -->
            <div class="-mt-6 lg:hidden">
                <button id="MobileSwitchCampusBtn" title="Switch Campus"
                    class="hover:text-green-500 text-xl mr-4 lg:hidden">
                    <i class="fa-solid fa-repeat"></i>
                </button>
                <button id="menu-btn" class="lg:hidden text-gray-900 text-2xl ">☰</button>
            </div>
        </div>

        <!-- Mobile Menu -->
        @include('layouts.mobile_layout')

    </nav>
    <!-- START HOME -->
    @yield('content')
    <!-- END  HOME -->

    <!-- START FOOTER -->
    <div class="footer section-padding">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 ">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        {{-- <a href="index.html"><img src="assets/images/all-img/logo2.png" alt="" /></a> --}}
                        <a href="/"><img src="{{ asset('img/skt_with_tagline.png') }}"
                                class=" max-w-60 sm:max-w-72" alt=""></a>
                        <p>
                            We nurture students to become lifelong learners responsible global citizens, and
                            compassionate individuals through a challenging and balanced curriculum in a safe and caring
                            environment.
                        </p>
                    </div>
                    <div class="foot_social">
                        <ul class=" ">
                            <li><a href="#" class="hlc  ">
                                    <i class="ti-facebook"></i>
                                </a></li>
                            <li>
                                <a href="#" class="hlc ">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hlc ">
                                    <i class="ti-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hlc ">
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
                    <div class="single_footer">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Event</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4>Contact Info</h4>
                        <div class="sf_contact">
                            <span class="ti-mobile"></span>
                            <h3>Phone number</h3>
                            <p>+88 457 845 695</p>
                        </div>
                        <div class="sf_contact">
                            <span class="ti-email"></span>
                            <h3>Email Address</h3>
                            <p>info@sktcollage@gmail.com</p>
                        </div>
                        <div class="sf_contact">
                            <span class="ti-map"></span>
                            <h3>Address</h3>
                            <p>No 54 , Shu Khin Thar Myo Pat Road , Tharkayta</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <div class="grid grid-cols-1 sm:grid-cols-2 fc">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_copyright">
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
                </div>
                <!-- END COL -->
            </div>
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- END FOOTER -->



    <!-- Latest jQuery -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('guests/js/script.js') }}"></script>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Handle multiple dropdowns dynamically
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Toggle only the clicked dropdown
                const dropdownMenu = this.nextElementSibling;
                dropdownMenu.classList.toggle('hidden');

                // Optional: Hide other dropdowns when one is clicked
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== dropdownMenu) {
                        menu.classList.add('hidden');
                    }
                });
            });
        });

        document.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("bg-white", "text-black", 'shadow-lg');
                navbar.classList.remove("bg-transparent", "text-white");
            } else {
                navbar.classList.add("bg-transparent", "text-white");
                navbar.classList.remove("bg-white", "text-black", 'shadow-lg');
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#switchCampusBtn, #MobileSwitchCampusBtn').on('click', function() {
                const currentUrl = window.location.href;
                let newUrl = currentUrl;

                // Define branch names for switching
                const cityBranch = 'skt-city-campus';
                const riversideBranch = 'skt-riverside-campus';
                if (currentUrl.includes('/event/event-detail/') || currentUrl.includes(
                        '/student_life/news-detail/')) {
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

                    // Handle URLs for /about_us/principal_message/{id}
                    if (currentUrl.includes('/about_us/principal_message/')) {
                        // Switch between SKT-CC and SKT-RC in /about_us/principal_message/{id}
                        newUrl = currentUrl.replace('about_us/principal_message/1',
                            'about_us/principal_message/2');
                        // if (currentUrl.includes(riversideBranch)) {
                        //     alert('as');
                        //     newUrl = currentUrl.replace(riversideBranch, 'cityBranch');
                        // } else if (currentUrl.includes(cityBranch)) {
                        //     alert('asss');
                        //     newUrl = currentUrl.replace(cityBranch, riversideBranch);
                        // }
                    }
                }

                // Reload to new URL
                window.location.href = newUrl;
            });
        });
    </script>

</body>

</html>
