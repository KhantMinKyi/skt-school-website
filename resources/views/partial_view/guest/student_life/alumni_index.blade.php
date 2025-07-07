@extends($layout)

@section('content')
    <link rel="stylesheet" href="{{ asset('guests/css/alumni.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />

    <div id="kenburns_061"
        class="carousel  max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner  transition-transform duration-1000 ease-in-out hidden sm:flex" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/student_life_banners/alumini/' . $branch->branch_short_name . '.webp') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                {{-- <div class=" absolute inset-0 flex flex-col items-center justify-center p-8 text-white"
                    data-animation="animated fadeInRight">
                    <h2 class=" md:text-4xl font-semibold text-teal-500 uppercase">Alumni</h2>
                </div> --}}
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  fade-in-out will_hide_div">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl  text-center  ml-10 mt-20 sm:mt-0">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <span class="text-white hidden sm:block">Alumni </span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 py-2 lg:py-20 mt-[89px] sm:mt-0"
            style="background-image: url({{ asset('assets/images/banner/course-bg.png') }}); background-size:cover; background-position: center center;">
            <div class="flex items-center justify-center p-4 md:p-20 italic font-semibold text-xs md:text-lg">
                Today's BFI represents an evolving community bred from four
                distinct institutions – SKT, BISA,NISA and
                MISA. These schools, each with rich histories and cultures of their own, have evolved into a cohesive
                community that embraces the diverse traditions and values of its founding institutions. There is no better
                representation of the important history that makes up the fabric of today’s BFI than our alumni community.
                As you value the memories and mission of your own alma mater, take the time to visit our campus and connect
                with your favourite faculty members who are still at BFI – you’ll see these values
                reflected and celebrated in our current culture.
                Please join us at an event, consider volunteering and contact our Development Office to learn more about the
                many ways you can get involved! For more information please contact the Development Office at
                alumni@bfi-edu.com
            </div>
            <div class="flex items-center justify-center gap-10">
                {{-- <img src="{{ asset('img/banner-hero.png') }}" class=" home-banner-hero" alt="" /> --}}
                <img src="{{ asset($branch->branch_logo) }}" class=" max-h-[200px] md:max-h-[360px]"
                    class=" home-banner-hero" alt="" />
            </div>
        </div>
    </section>
    <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 py-2 lg:py-20"
            style="background-image: url({{ asset('assets/images/banner/course-bg.png') }}); background-size:cover; background-position: center center;">
            <div class="flex flex-col items-center justify-center gap-2 mt-10 lg:mt-0">
                {{-- <img src="{{ asset('img/banner-hero.png') }}" class=" home-banner-hero" alt="" /> --}}
                <img src="{{ asset('img/alumni_data/alumni.jpg') }}"
                    class=" home-banner-hero rounded-full object-cover h-[240px] w-[240px] lg:h-[420px] lg:w-[420px]"
                    alt="" />
                <p class="font-semibold">Sitt Hmue Naing @ Muhammed</p>
                <p class="italic font-semibold">Alumni Principal</p>
            </div>
            <div class="flex items-center justify-center p-4 md:p-20 italic font-semibold text-xs md:text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A voluptatem, aut quibusdam incidunt est provident
                neque tempora libero hic unde? Ipsa nihil enim distinctio delectus consectetur voluptatem dolorem, ex
                mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quibusdam nam minima placeat
                voluptatibus quam, sunt alias ea, officia ullam molestiae eaque, porro cum! Repellendus cumque
                necessitatibus repudiandae est porro?
            </div>

        </div>
    </section>

    <section class="py-2 md:py-6  dark:bg-gray-950" style=" background-size:cover; background-position: center center;">
        <div class="container mx-auto my-4 ">
            <h2 class="my-4 mx-2 text-xl lg:text-3xl font-bold alumni-title dark:text-emerald-500">
                Alumni Events
            </h2>
            <div class="md:flex mx-2">
                <!-- Sidebar Tabs -->

                <ul id="verticalTabs"
                    class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                    <li>
                        <button data-tab="profile"
                            class="tab-btn active-tab inline-flex items-center px-4 py-3 text-white bg-green-700 rounded-lg w-full dark:bg-green-600">
                            <i class="fa fa-check svg-button w-4 h-4 me-2"></i>
                            2024
                        </button>
                    </li>
                    <li>
                        <button data-tab="dashboard"
                            class="tab-btn inline-flex items-center px-4 py-3 rounded-lg  bg-gray-50 w-full dark:bg-gray-800 ">
                            <i class="fa fa-check svg-button w-4 h-4 me-2"></i>
                            2023
                        </button>
                    </li>
                    <li>
                        <button data-tab="settings"
                            class="tab-btn inline-flex items-center px-4 py-3 rounded-lg  bg-gray-50 w-full dark:bg-gray-800 ">
                            <i class="fa fa-check svg-button w-4 h-4 me-2"></i>
                            2022
                        </button>
                    </li>
                </ul>

                <!-- Tab Contents -->
                <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                    <div class="tab-content" id="tab-profile">
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Alumni movie night (Oct 2024)
                            </h3>
                            <p>🎬 Thank You for Joining Our Alumni Movie Night on September 21st! 🎉
                                A big thank you to everyone who joined us for an unforgettable night at our Alumni Movie
                                Night on September 21st! We had an amazing time reconnecting and enjoying the film together.
                                Here’s a short recap video from the event! 🎥👇
                                But the fun doesn’t stop here! We’re excited to announce our Alumni Reconnect Visits and
                                other exciting alumni events coming up. If you’d like to join or get more information, feel
                                free to reach out to our Alumni Officer at 09953483883.
                                Let’s keep the alumni spirit alive! 🌟</p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (1).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (1).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (2).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (2).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (3).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (3).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (4).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (4).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                            </div>
                        </div>
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Alumni Dinner (jan 2024 at
                                Parkroyal Hotel)
                            </h3>
                            <p>🎉 Throwback to an unforgettable evening! 🌟
                                A month ago, we gathered for our Alumni Reunion 2024, bringing together cherished memories,
                                laughter, and lifelong connections. Here's a glimpse into the magical night—check out the
                                photos below! 📸
                                Tag your friends and share your favorite moments from the event. Let's keep the spirit
                                alive! 💬💙 </p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (5).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (5).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (6).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (6).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (7).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (7).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2024/SKT (8).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2024/SKT (8).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-content hidden" id="tab-dashboard">
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Alumni Dinner Night 2023</h3>
                            <p> 🤝👨‍🎤🎪"Reveling in the memories, reigniting friendships, and celebrating shared stories
                                at our spectacular Alumni Night!"🎪👨‍🎤🤝 </p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/events/2023/SKT-RC1.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2023/SKT-RC1.jpg') }}"
                                    data-title="Alumni Dinner Night 2023" />
                                <img src="{{ asset('img/alumni_data/events/2023/SKT-RC2.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2023/SKT-RC2.jpg') }}"
                                    data-title="Alumni Dinner Night 2023" />
                                <img src="{{ asset('img/alumni_data/events/2023/SKT-RC3.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2023/SKT-RC3.jpg') }}"
                                    data-title="Alumni Dinner Night 2023" />
                                <img src="{{ asset('img/alumni_data/events/2023/SKT-RC4.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2023/SKT-RC4.jpg') }}"
                                    data-title="Alumni Dinner Night 2023" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-content hidden" id="tab-settings">
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">BFI Alumni Reunion at SKT
                                International College on December 10, 2022</h3>
                            <p>We organised this year's BFI Alumni Reunion at SKT International College on December 10,
                                2022. It was a wonderful evening full of chit-chat and laughter. Our alumni reminisced about
                                their school days with their teachers, mentors and friends. We also played some games like
                                the old times, and then had a delightful dinner.
                                We thank all our alumni and teachers for joining us and please keep in touch for the
                                upcoming events.
                                ပြီးခဲ့သော 2022 ခုနှစ် ဒီဇင်ဘာလ 10 ရက်နေ့ SKT International Collegeတွင် BFI Alumni Reunion
                                ပွဲကို ကျင်းပခဲ့ပါတယ်။ ညနေခင်းတလျှောက် စပ်မိစပ်ရာများ ပြောဆိုရယ်မောခဲ့ကြပါတယ်။
                                ကျွန်ုပ်တို့ရဲ့ ကျောင်းသားဟောင်းများဟာ သူတို့ရဲ့ ဆရာ၊ ဆရာမ၊ သူငယ်ချင်းများနဲ့ အတူ
                                ကျောင်းနေစဉ် အမှတ်တရများအကြောင်း ပြန်လည်ပြောဆိုနေကြတာကို ကြည်နူးစရာ မြင်တွေ့ခဲ့ရပါတယ်။
                                တချိန်ကျောင်းတက်စဉ်ကလို ပျော်စရာဂိမ်းများကို ကစားကြပြီး အတူတကွ ညစာစားခဲ့ကြပါတယ်။
                                နောက်နှစ်တွေမှာလဲ ပြန်လည်လာရောက် ဆုံတွေ့ခွင့်ရဖို့ မျှော်လင့်ရင်း ယခု BFI Alumini Reunion
                                ပွဲမှာ ပူးပေါင်းပါဝင်ပေးကြသော ကျောင်းသူ/သားဟောင်းများနှင့် ဆရာ၊ ဆရာမများအားလုံးကို
                                ကျေးဇူးအထူးတင်ရှိကြောင်း ဤနေရာမှ ပြောကြားလိုပါတယ်။</p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/events/2022/SKT (1).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2022/SKT (1).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2022/SKT (2).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2022/SKT (2).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2022/SKT (3).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2022/SKT (3).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/events/2022/SKT (4).jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/events/2022/SKT (4).jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center pb-10 dark:bg-gray-950">
        <span class="inline-block w-1 h-1 rounded-full bg-emerald-500 ml-1"></span>
        <span class="inline-block w-3 h-1 rounded-full bg-emerald-500 ml-1"></span>
        <span class="inline-block w-40 h-1 rounded-full bg-emerald-500"></span>
        <span class="inline-block w-3 h-1 rounded-full bg-emerald-500 ml-1"></span>
        <span class="inline-block w-1 h-1 rounded-full bg-emerald-500 ml-1"></span>
    </div>
    <section class="py-2 md:py-6 dark:bg-gray-950" style=" background-size:cover; background-position: center center;">
        <div class="container mx-auto my-4  ">
            <h2 class="my-4 mx-2 text-xl lg:text-3xl font-bold alumni-title dark:text-emerald-500">
                Alumni Projects
            </h2>
            <div class="md:flex mx-2">
                <!-- Sidebar Tabs -->

                <ul id="verticalTabs"
                    class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                    <li>
                        <button data-tab="profile"
                            class="tab-btn-project active-tab inline-flex items-center px-4 py-3 text-white bg-green-700 rounded-lg w-full dark:bg-green-600">
                            <i class="fa fa-check svg-button-project w-4 h-4 me-2"></i>
                            2024
                        </button>
                    </li>
                    {{-- <li>
                        <button data-tab="dashboard"
                            class="tab-btn-project inline-flex items-center px-4 py-3 rounded-lg  bg-gray-50 w-full dark:bg-gray-800 ">
                            <i class="fa fa-check svg-button-project w-4 h-4 me-2"></i>
                            2023
                        </button>
                    </li> --}}
                    <li>
                        <button data-tab="settings"
                            class="tab-btn-project inline-flex items-center px-4 py-3 rounded-lg  bg-gray-50 w-full dark:bg-gray-800 ">
                            <i class="fa fa-check svg-button-project w-4 h-4 me-2"></i>
                            2020
                        </button>
                    </li>
                </ul>

                <!-- Tab Contents -->
                <div
                    class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                    <div class="tab-content-project" id="tab-profile">
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Alumni Donation Jan 2024</h3>
                            <p>🌟 100 Bags of Hope: Spreading Joy Through Giving 🌟
                                We are delighted to share the success of our 100 Bags of Hope event at SKT International
                                School, where our incredible alumni, parents, teachers, SKT office team, and students came
                                together to make a meaningful impact in the lives of children in need.
                                🎨 A Day to Remember 🎨
                                The event was filled with smiles and laughter as we enjoyed creative art activities, a
                                delicious lunch, and a movie experience that brought the magic of cinema to our conference
                                hall.
                                🎒 Gifts of Hope 🎒
                                To support their educational journey, we gifted schoolbags filled with essential stationery,
                                umbrellas, and tasty snacks, ensuring the kids left with both joy and tools for a brighter
                                future.
                                🙏 Thank You to Our Amazing Community 🙏
                                A heartfelt thank-you to everyone who contributed to this beautiful cause. Your kindness and
                                generosity continue to inspire and bring hope to our community. Let’s keep spreading love
                                and making a difference, together!
                                #BFIAlumni #100BagsOfHope #CommunityGivingBack #BFI #SKTInternationalSchool
                                #MakingADifference #JoyOfGiving #TogetherWeCan #HopeInAction #SchoolBag #Charity</p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/projects/2024/SKT-RC1.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2024/SKT-RC1.jpg') }}"
                                    data-title="Alumni Donation Jan 2024" />
                                <img src="{{ asset('img/alumni_data/projects/2024/SKT-RC2.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2024/SKT-RC2.jpg') }}"
                                    data-title="Alumni Donation Jan 2024" />
                                <img src="{{ asset('img/alumni_data/projects/2024/SKT-RC3.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2024/SKT-RC3.jpg') }}"
                                    data-title="Alumni Donation Jan 2024" />
                                <img src="{{ asset('img/alumni_data/projects/2024/SKT-RC4.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2024/SKT-RC4.jpg') }}"
                                    data-title="Alumni Donation Jan 2024" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-content-project hidden" id="tab-dashboard">
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Alumni Dinner Night 2024</h3>
                            <p>Dinner Night 2024 brought even more excitement and joy as the SKT family gathered once again
                                in
                                Yangon.
                                The night was filled with colorful performances, delicious food, and warm memories. Our
                                Head of School
                                delivered a touching speech on progress, achievements, and the importance of staying
                                connected
                                as a
                                school community.</p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/2025/SKT-RC1.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/2025/SKT-RC1.jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/2025/SKT-RC2.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/2025/SKT-RC2.jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/2025/SKT-RC3.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/2025/SKT-RC3.jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/2025/SKT-RC4.jpg') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/2025/SKT-RC4.jpg') }}"
                                    data-title="Alumni Dinner Night 2025" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-content-project hidden" id="tab-settings">
                        <div class="mt-4 div-tab-data">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2"> BFI Family and Alumni
                                donation to over 1100 families who were severely affected by Covid -19. (Sep 2020)</h3>
                            <p>Highlights video of our BFI Family and Alumni donation to over 1100 families who were
                                severely affected by Covid -19.</p>
                            <div class="grid grid-cols-2 lg:grid-cols-4 my-4 gap-10">
                                <img src="{{ asset('img/alumni_data/projects/2022/SKT (1).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2022/SKT (1).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/projects/2022/SKT (2).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2022/SKT (2).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/projects/2022/SKT (3).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2022/SKT (3).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                                <img src="{{ asset('img/alumni_data/projects/2022/SKT (4).png') }}"
                                    class=" hover:shadow-md home-banner-hero  object-cover cursor-pointer rounded  open-modal"
                                    alt="" data-src="{{ asset('img/alumni_data/projects/2022/SKT (4).png') }}"
                                    data-title="Alumni Dinner Night 2025" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="bg-gradient-to-b from-gray-100 to-white py-16 px-6 md:px-16 nationalities_div">
        <!-- Heading -->
        <h2 class="text-center text-3xl md:text-4xl font-semibold text-blue-900 uppercase ">
            Students' Nationalities
        </h2>

        <div class="mt-12 flex flex-col md:flex-row items-center justify-center gap-10">
            <!-- Nationalities Box -->
            <div
                class="border-2 border-green-300 rounded-xl p-10 text-center shadow-lg w-72 hover:bg-green-300 cursor-pointer hover:shadow-xl">
                <p class="text-gray-600 uppercase text-xl">Over</p>
                <p class="text-green-600 text-6xl font-bold"><span data-purecounter-start="0" data-purecounter-end="25"
                        data-purecounter-duration="1" class="purecounter"></span></p>
                <p class="text-gray-600 uppercase text-xl">Nationalities</p>
            </div>

            <!-- Progress Bar Section -->
            <div class="w-full md:w-2/3">
                <!-- Labels above progress bar segments -->
                <div class="flex justify-between">
                    <div class="w-2/3 text-center">
                        <span class="text-sm md:text-xl font-bold text-blue-900">Western</span>
                    </div>
                    <div class="w-1/6 text-center">
                        <span class="text-sm md:text-xl font-bold text-green-400">Asia</span>
                    </div>
                    <div class="w-1/6 text-center">
                        <span class="text-sm md:text-xl font-bold text-blue-500">Local</span>
                    </div>
                </div>
                <!-- Progress Bar -->
                <div class="w-full bg-gray-200 h-6 rounded-full flex mt-2">
                    <div class="bg-blue-900 h-6 rounded-l-full w-2/3"></div>
                    <div class="bg-green-400 h-6 w-1/6"></div>
                    <div class="bg-blue-500 h-6 rounded-r-full w-1/6"></div>
                </div>
                <!-- Description Text -->
                <p class="mt-6 text-gray-600 text-lg">
                    We are a diverse community. We embrace people of all nations, cultures, and
                    backgrounds. We teach and care for our students in every way. At SKT, everyone
                    is welcome and treated with respect and dignity.
                </p>
            </div>
        </div>
    </div> --}}

    {{-- Testimonial  --}}
    <div class="min-w-screen min-h-screen flex items-center justify-center py-5">
        <div class="w-full bg-white border-gray-200 px-5  text-gray-800">
            <div class="w-full max-w-6xl mx-auto">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-5 text-gray-600">What people <br>are saying.
                    </h1>
                    <h3 class="text-xl mb-5 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="text-center mb-10">
                        <span class="inline-block w-1 h-1 rounded-full bg-emerald-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-emerald-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-emerald-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-emerald-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-emerald-500 ml-1"></span>
                    </div>
                </div>
                <div class="-mx-3 md:flex items-start">
                    <div class="px-3 md:w-1/3">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=1" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor
                                    exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint
                                    recusandae cum tempora nemo commodi soluta deleniti.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=2" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum, dolor sit amet, consectetur adipisicing elit. Dolore quod necessitatibus, labore
                                    sapiente, est, dignissimos ullam error ipsam sint quam tempora vel.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=3" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi
                                    dicta error deleniti sequi.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=4" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Architecto inventore voluptatum
                                    nostrum atque, corrupti, vitae esse id accusamus dignissimos neque reprehenderit natus,
                                    hic sequi itaque dicta nisi voluptatem! Culpa, iusto.<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=5" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptatem porro obcaecati
                                    dicta, quibusdam sunt ipsum, laboriosam nostrum facere exercitationem pariatur deserunt
                                    tempora molestiae assumenda nesciunt alias eius? Illo, autem!<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div
                            class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=6" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, explicabo,
                                    cupiditate quas totam!<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fullscreen Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden">
        <div class="relative max-w-4xl w-full p-4">
            <button id="closeModal" class="absolute top-2 right-4 text-white text-3xl p-4 cursor-pointer">&times;</button>
            <img id="modalImage" src="" class="w-full rounded-lg shadow-lg" />
            <h3 id="modalTitle" class="text-white text-center mt-4 text-xl font-bold"></h3>
        </div>
    </div>


    <script>
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tab;

                tabButtons.forEach(b => {
                    const isActive = b === btn;

                    // Toggle button styles
                    b.classList.remove(
                        'bg-green-700', 'text-white', 'dark:bg-green-600',
                        'bg-gray-50', 'text-gray-500', 'dark:bg-gray-800', 'dark:text-gray-400'
                    );
                    b.classList.add(
                        isActive ? 'bg-green-700' : 'bg-gray-50',
                        isActive ? 'text-white' : 'text-gray-500',
                        isActive ? 'dark:bg-green-600' : 'dark:bg-gray-800',
                        isActive ? 'text-white' : 'dark:text-gray-400'
                    );

                    // Toggle SVG icon colors
                    const svg = b.querySelector('.svg-button');
                    if (svg) {
                        svg.classList.remove('text-white', 'text-gray-500');
                        svg.classList.add(isActive ? 'text-white' : 'text-gray-500');
                    }
                });

                // Show correct tab content
                tabContents.forEach(content =>
                    content.classList.toggle('hidden', content.id !== `tab-${target}`)
                );
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            const modalTitle = document.getElementById("modalTitle");
            const closeModal = document.getElementById("closeModal");

            document.querySelectorAll(".open-modal").forEach(card => {
                card.addEventListener("click", function() {
                    modalImage.src = this.dataset.src;
                    modalTitle.textContent = this.dataset.title;
                    modal.classList.remove("hidden");
                });
            });

            closeModal.addEventListener("click", () => modal.classList.add("hidden"));
            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    modal.classList.add("hidden");
                }
            });
        });
    </script>
    <script>
        const tabButtonsProject = document.querySelectorAll('.tab-btn-project');
        const tabContentsProject = document.querySelectorAll('.tab-content-project');

        tabButtonsProject.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tab;

                tabButtonsProject.forEach(b => {
                    const isActive = b === btn;

                    // Toggle button styles
                    b.classList.remove(
                        'bg-green-700', 'text-white', 'dark:bg-green-600',
                        'bg-gray-50', 'text-gray-500', 'dark:bg-gray-800', 'dark:text-gray-400'
                    );
                    b.classList.add(
                        isActive ? 'bg-green-700' : 'bg-gray-50',
                        isActive ? 'text-white' : 'text-gray-500',
                        isActive ? 'dark:bg-green-600' : 'dark:bg-gray-800',
                        isActive ? 'text-white' : 'dark:text-gray-400'
                    );

                    // Toggle SVG icon colors
                    const svg = b.querySelector('.svg-button-project');
                    if (svg) {
                        svg.classList.remove('text-white', 'text-gray-500');
                        svg.classList.add(isActive ? 'text-white' : 'text-gray-500');
                    }
                });

                // Show correct tab content
                tabContentsProject.forEach(content =>
                    content.classList.toggle('hidden', content.id !== `tab-${target}`)
                );
            });
        });
    </script>
@endsection
