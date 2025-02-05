<!DOCTYPE html>
<html lang="en">

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
@php
    use App\Models\Branch;
    $skt_riverside_campus = Branch::where('branch_short_name', 'SKT-RC')->first();
@endphp

<body>
    <nav id="navbar" class="bg-transparent text-white fixed top-0 w-full z-50  transition-all duration-300">
        <div class=" mx-auto flex justify-end p-4">
            <!-- Social Icons (Hidden on small screens) -->
            <div class="hidden md:flex  space-x-4 text-gray-700">
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
        <div class=" container mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="text-xl font-bold w-80 md:-mt-12">
                <a href="/"><img src="{{ asset('img/skt_with_tagline.png') }}" alt=""></a>
            </div>

            <!-- Menu (Hidden on small screens) -->
            <ul class="hidden lg:flex space-x-6 pb-2 ">
                <li><a href="#" class="hover:text-gray-400 text-gray-700 font-bold">Home</a></li>
                <li class="relative group">
                    <a href="#" class="text-gray-700 font-bold hover:text-gray-400 ">About Us</a>
                    <ul class="absolute hidden group-hover:block text-gray-900 bg-white mt-1 w-60 shadow-lg">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 pt-4">Our Team</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 pt-4">Mission</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-50 pt-4">Vision</a></li>
                    </ul>
                </li>
                <li><a href="#" class="hover:text-gray-400 text-gray-700 font-bold">Student Life</a></li>
                <li><a href="#" class="hover:text-gray-400 text-gray-700 font-bold">Education</a></li>
                <li><a href="#" class="hover:text-gray-400 text-gray-700 font-bold">Admission</a></li>
                <li><a href="#" class="hover:text-gray-400 text-gray-700 font-bold">Admission Event </a></li>
                <li><a href="#" class="hover:text-gray-400 text-gray-700 font-bold">Contact</a></li>
            </ul>
            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="lg:hidden text-gray-900 text-2xl">☰</button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden flex flex-col items-center bg-white lg:hidden">
            <a href="#" class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-700 w-full text-center">Home</a>
            <a href="#" class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-700 w-full text-center">About</a>
            <a href="#"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-700 w-full text-center">Services</a>
            <a href="#" class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-700 w-full text-center">Contact</a>
        </div>
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
                        <a href="/"><img src="{{ asset('img/skt_with_tagline.png') }}" class=" max-w-72"
                                alt=""></a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            vitae risus nec dui venenatis dignissim.
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
                            <li><a href="#">Home</a></li>
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
            <div class="row fc">
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
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="assets/js/purecounter_vanilla.js"></script>
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('guests/js/script.js') }}"></script>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        document.querySelector('#mobile-menu a[href="#"]').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('mobile-submenu').classList.toggle('hidden');
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

</body>

</html>
