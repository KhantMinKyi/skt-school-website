<div id="mobile-wrapper"
    class="fixed top-22 right-0 h-[calc(100%-4rem)] w-0 overflow-auto bg-gray-900 bg-opacity-90 shadow-lg transition-all duration-300 z-40">
    <div class="w-[300px] h-full flex flex-col items-left">
        <button id="close-menu" class="self-end py-4 px-4 text-gray-100 text-xl">✕</button>
        <!-- Home with Dropdown -->
        <div class="w-full ">
            <a href="/"
                class="dropdown-btn py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left flex justify-between ">
                <div>
                    <i class="fa-solid fa-house mr-2"></i>
                    Home
                </div>
                <span class="toggle-icon"><i class="fa-solid fa-angle-down"></i></span>
            </a>
            <div class="dropdown-menu  hidden flex flex-col w-full bg-gray-900 bg-opacity-0  ">
                <a href="{{ route('city.home') }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left ">
                    SKT City
                    Campus</a>
                <a href="{{ route('river.home') }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    SKT
                    Riverside
                    Campus</a>
            </div>
        </div>

        <!-- About Us with Dropdown -->
        <div class="w-full">
            <a href="#"
                class="dropdown-btn py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left flex justify-between">
                <div>
                    <i class="fa-solid fa-circle-info mr-2"></i>
                    About Us
                </div>
                <span class="toggle-icon"><i class="fa-solid fa-angle-down"></i></span>
            </a>
            <div class="dropdown-menu hidden flex flex-col w-full bg-gray-900 bg-opacity-0 ">
                <a href="{{ route('principal-message.home', $layout_branch->id) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Our Head of School
                    Message</a>
                <a href="{{ route('our-history.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Our
                    History</a>
                <a href="{{ route('our-statement.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Our Mission and Vision</a>
                <a href="{{ route('our-teachers.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Our
                    Teachers</a>

                <a href="{{ route('sister-schools.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Sister
                    Schools</a>
                <a href="{{ route('policy.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Our Policies</a>

            </div>
        </div>

        <!-- Student Life with Dropdown -->
        <div class="w-full">
            <a href="#"
                class="dropdown-btn py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left flex justify-between">
                <div>
                    <i class="fa-solid fa-heart mr-2"></i>
                    Student Life
                </div>
                <span class="toggle-icon"><i class="fa-solid fa-angle-down"></i></span>
            </a>
            <div class="dropdown-menu hidden flex flex-col w-full bg-gray-900 bg-opacity-0 ">
                <a href="{{ route('alumni.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Alumni</a>
                <a href="{{ route('news.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> News</a>
                <a href="{{ route('gallery.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Gallery</a>
                <a href="{{ route('calendar.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Calendar</a>
                <a href="{{ route('welfare.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Welfare</a>
            </div>
        </div>

        <!-- Education with Dropdown -->
        <div class="w-full">
            <a href="#"
                class="dropdown-btn py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left flex justify-between">
                <div>
                    <i class="fa-solid fa-graduation-cap mr-2"></i>
                    Education
                </div>
                <span class="toggle-icon"><i class="fa-solid fa-angle-down"></i></span>
            </a>
            <div class="dropdown-menu hidden flex flex-col w-full bg-gray-900 bg-opacity-0 ">
                <a href="{{ route('pre-school.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Pre
                    School</a>
                <a href="{{ route('primary.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Primary</a>
                <a href="{{ route('secondary.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Secondary</a>
                <a href="{{ route('igcse.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> IGCSE</a>
                @if ($layout_branch->branch_short_name == 'SKT-RC')
                    <a href="{{ route('ib.home', $layout_branch->branch_short_name) }}"
                        class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> IB
                        Diploma Programme (IB DP)</a>
                @endif

            </div>
        </div>
        <!-- Admission with Dropdown -->
        <div class="w-full">
            <a href="#"
                class="dropdown-btn py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left flex justify-between">
                <div>
                    <i class="fa-solid fa-users mr-2"></i>
                    Admission
                </div>
                <span class="toggle-icon"><i class="fa-solid fa-angle-down"></i></span>
            </a>
            <div class="dropdown-menu hidden flex flex-col w-full bg-gray-900 bg-opacity-0 ">
                <a href="{{ route('student-admission.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Student
                    Admission</a>
                <a href="{{ route('admission-process.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> Admission
                    Process</a>
                <a href="{{ route('withdrawal-policy.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Withdrawal
                    Policy</a>
                <a href="{{ route('college-counseling-service.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left"> College
                    Counseling
                    Service</a>
                {{-- <a href="{{ route('career.home', $layout_branch->branch_short_name) }}"
                    class="py-4 pl-8 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-0 w-full text-left">
                    Career</a> --}}


            </div>
        </div>
        <!-- Other Menu Items (No Dropdown) -->
        <a href="{{ route('event.home', $layout_branch->branch_short_name) }}"
            class="py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left"> <i
                class="fa-solid fa-calendar-check mr-2"></i> Event</a>
        <a href="{{ route('contact_us.home', $layout_branch->branch_short_name) }}"
            class="py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left"> <i
                class="fa-solid fa-circle-check mr-2"></i> Contact</a>
        <a href="{{ route('career.home', $layout_branch->branch_short_name) }}"
            class="py-4 px-4 text-gray-100 font-bold hover:bg-gray-900 bg-opacity-90 w-full text-left"> <i
                class="fa-solid fa-briefcase mr-2"></i> Join Us</a>
    </div>
