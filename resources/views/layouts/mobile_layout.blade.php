<div id="mobile-menu" class="hidden flex flex-col items-center bg-white lg:hidden">
    <!-- Home with Dropdown -->
    <div class="w-full">
        <a href="/"
            class="dropdown-btn py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center flex justify-between">
            Home
            <span>▼</span>
        </a>
        <div class="dropdown-menu hidden flex flex-col w-full bg-gray-100">
            <a href="{{ route('city.home') }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">SKT City
                Campus</a>
            <a href="{{ route('river.home') }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">SKT Riverside
                Campus</a>
        </div>
    </div>

    <!-- About Us with Dropdown -->
    <div class="w-full">
        <a href="#"
            class="dropdown-btn py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center flex justify-between">
            About Us
            <span>▼</span>
        </a>
        <div class="dropdown-menu hidden flex flex-col w-full bg-gray-100">
            <a href="{{ route('principal-message.home', $layout_branch->id) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Our
                Principle
                Message</a>
            <a href="{{ route('our-history.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Our
                History</a>
            <a href="{{ route('our-statement.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Our
                Mission , Vision
                , Philosophy</a>
            <a href="{{ route('our-teachers.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Our
                Teachers</a>

            <a href="{{ route('sister-schools.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Sister Schools</a>

        </div>
    </div>

    <!-- Student Life with Dropdown -->
    <div class="w-full">
        <a href="#"
            class="dropdown-btn py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center flex justify-between">
            Student Life
            <span>▼</span>
        </a>
        <div class="dropdown-menu hidden flex flex-col w-full bg-gray-100">
            <a href="{{ route('alumni.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Alumni</a>
            <a href="{{ route('news.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">News</a>
            <a href="{{ route('gallery.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Gallery</a>
            <a href="{{ route('calendar.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Calendar</a>
        </div>
    </div>

    <!-- Education with Dropdown -->
    <div class="w-full">
        <a href="#"
            class="dropdown-btn py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center flex justify-between">
            Education
            <span>▼</span>
        </a>
        <div class="dropdown-menu hidden flex flex-col w-full bg-gray-100">
            <a href="{{ route('pre-school.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Pre
                School</a>
            <a href="#" class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Primary</a>
            <a href="{{ route('secondary.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Secondary</a>
            <a href="{{ route('igcse.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">IGCSE</a>
            <a href="#" class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">UFP
                (University
                Foundation Program)</a>

        </div>
    </div>
    <!-- Admission with Dropdown -->
    <div class="w-full">
        <a href="#"
            class="dropdown-btn py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center flex justify-between">
            Admission
            <span>▼</span>
        </a>
        <div class="dropdown-menu hidden flex flex-col w-full bg-gray-100">
            <a href="{{ route('student-admission.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Student
                Admission</a>
            <a href="{{ route('admission-process.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Admission
                Process</a>
            <a href="{{ route('withdrawal-policy.home', $layout_branch->branch_short_name) }}"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Withdrawal
                Policy</a>
            <a href="https://www.jobnet.com.mm/companies/bfi-education-services-co-ltd/e-11033"
                class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Career</a>


        </div>
    </div>
    <!-- Other Menu Items (No Dropdown) -->
    <a href="{{ route('event.home', $layout_branch->branch_short_name) }}"
        class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Event</a>
    <a href="{{ route('contact_us.home', $layout_branch->branch_short_name) }}"
        class="py-2 px-4 text-gray-900 font-bold hover:bg-gray-50 w-full text-center">Contact</a>
</div>
