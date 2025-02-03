<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}">

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
    <nav id="navbar" class="bg-transparent text-white fixed top-0 w-full z-50 shadow-lg transition-all duration-300">
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
                navbar.classList.add("bg-white", "text-black");
                navbar.classList.remove("bg-transparent", "text-white");
            } else {
                navbar.classList.add("bg-transparent", "text-white");
                navbar.classList.remove("bg-white", "text-black");
            }
        });
    </script>

</body>

</html>
