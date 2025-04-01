@extends('layouts.city_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('guests/css/admission_process.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}
    <div id="kenburns_061"
        class="carousel max-h-screen slide ps_indicators_txt_icon ps_control_txt_icon data-bs-target kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart relative w-full overflow-hidden"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">
        <!-- Wrapper For Slides -->
        <div class="carousel-inner flex transition-transform duration-1000 ease-in-out" id="carouselInner">
            <!-- First Slide -->
            <div class="carousel-item active w-full flex-shrink-0">
                <img src="{{ asset('img/banner/admission_banners/admission_process/' . $branch->branch_short_name . '.jpg') }}"
                    alt="slider-image" class="w-full h-auto object-cover" />
                <div class="absolute inset-0 mx-auto flex flex-col justify-center items-center  ">
                    <h1 id="fading-text" class=" text-xl sm:text-5xl lg:text-7xl text-center  ml-10">
                        <span class="text-emerald-400">{{ $branch->branch_name }}</span>
                        <br>
                        <div class="text-white mt-4 hidden sm:block">Admission Process </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- START TOPIC-->
    <section class="topic_content_area section-padding" style="background-image: url(assets/images/banner/topic.png);">
        <div class="container mx-auto">
            <div class="section-title p-4">
                <h2>{{ $branch->branch_name }}</h2>
                <p class="">
                    Please read the below information carefully.
                </p>
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <section>
        <div class="mx-auto container text-black">
            <div class="col-xs-12">
                <div class="pd_tab_area fix">
                    <ul class="pd_tab_btn nav nav-tabs" role="tablist">
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 bg-green-500 rounded-xl text-white"
                                onclick="openTab(event, 'tab1')" href="#description" role="tab"
                                data-bs-toggle="tab">English</button>
                        </li>
                        <li>
                            <button class="tab-btn font-bold px-4 py-2 rounded-xl" onclick="openTab(event, 'tab2')"
                                href="#information" role="tab" data-bs-toggle="tab">
                                မြန်မာ</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div role="tabpanel" class="tab-pane fade show tab-content " id="tab1">
                        <p>We are excited that you are considering SKT International School City Campus for your child. We
                            will support you throughout the admissions process and look forward to welcoming you to the SKT
                            International School City Campus.

                            Students seeking registration at SKT International School City Campus from Kindergarten to
                            Secondary are placed according to their age on or before 30 September.

                            Please, download the application form, and complete your application form and supporting
                            documents together with a one-time, non-refundable application fee. Once the application form is
                            completed, please submit it to the following email address: </p>
                        <p>Please, contact the school office with regard to school fee details, payment procedure, and
                            options.</p>
                        <p>The required supporting documents are as follows:</p>
                        <ul class="list-disc list-inside">
                            <li class="py-2">Previous scholastic records from the last school attended</li>
                            <li class="py-2">A recommendation letter from the last school attended is needed.</li>
                            <li class="py-2">Evidence of date of birth or ID card, passport copy (if applicable)</li>
                            <li class="py-2">2 passport-sized photographs</li>
                            <li class="py-2">Child’s health record
                            </li>
                        </ul>
                        <p>After the application is submitted, a parent meeting and child assessment will be scheduled.
                            Based on the applicant’s previous scholastic records and performance on the SKT International
                            School City Campus admissions assessment, the Admissions Committee will make a decision on
                            whether or not to offer the applicant a place. You will be notified by email or message of the
                            outcome.
                            When a place is offered, you will be required to sign our Payment and Refund policy and pay the
                            registration fee, by the date indicated on the invoice to confirm your child’s place.</p>
                        <p>For more information, please email us or call our admissions office at <b> (01) 9551795 - 6 ,
                                (01) 543926 ,+959 456 481 950 </b></p>
                    </div>

                    <div role="tabpanel" class="tab-pane fade tab-content hidden " id="tab2">
                        <p>သင်၏ကလေးများအတွက် ကျွန်ုပ်တို့၏SKT International School City Campus ကိုစိတ်ဝင်စားသည့်အတွက်
                            စိတ်လှုပ်ရှားမိပါသည်။ ကျွန်ုပ်တို့သည် ကျောင်းဝင်ခွင့်လျှောက်လွှာတင်မှု တစ်လျှောက်လုံးတွင်
                            သင့်အားပံ့ပိုးပေးသွားမည်ဖြစ်ပြီး SKT International School City Campus မှသင့်အား
                            ကြိုဆိုလျက်ရှိပါသည်။
                            SKT International School City Campus တွင် တက်ရောက်လိုသော ကျောင်းသားကျောင်းသူများသည်
                            သူငယ်တန်းမှအလယ်တန်း သို့ တက်ရောက်ရာတွင် စက်တင်ဘာ (၃၀)ရက်မတိုင်ခင်ရှိသော
                            ၎င်းတို့၏အသက်အရွယ်ပေါ်မူတည်၍ အတန်းများ ခွဲခြားပေးသွားမည်ဖြစ်ပါသည်။

                            ကျေးဇူးပြု၍ အောက်ပါလျှောက်လွှာပုံစံကို download ပြုလုပ်ပါ။ ၎င်းလျှောက်လွှာပုံစံကို
                            အထောက်အကူပြုစာရွက်များနှင့်တကွ၊ ပြန်အမ်းခွင့်မရှိသည့် လျှောက်လွှာ နှင့်အတူ ဖြည့်စွက်ပါ။
                            လျှောက်လွှာတစ်ခု ဖြည့်ပြီးပါက ကျေးဇူးပြု၍အောက်ပါ email သို့ပေးပို့ပေးပါ။ </p>
                        <p>ကျေးဇူးပြု၍ ကျောင်းအခကြေးငွေအသေးစိတ်၊ ငွေပေးချေမှုလုပ်ထုံးလုပ်နည်း နှင့် ပတ်သတ်၍ ကျောင်းသို့
                            ဆက်သွယ်ပါ။</p>
                        <p>လိုအပ်သောအထောက်အကူပြုစာရွက်စာတမ်းများမှာ အောက်ပါအတိုင်းဖြစ်ပါသည်။</p>
                        <ul class="list-disc list-inside">
                            <li class="py-2">ယခင်တက်ရောက်ခဲ့သည့်ကျောင်းမှ ကျောင်းမှတ်တမ်းများ</li>
                            <li class="py-2">နောက်ဆုံးတက်ရောက်ခဲ့သည့်ကျောင်းမှ ထောက်ခံစာပေးရန်လိုအပ်ပါသည်</li>
                            <li class="py-2">မွေးနေ့အထောက်အထား (သို့မဟုတ်) ID card၊ passport မိတ္တူ (ရှိပါက)</li>
                            <li class="py-2">Passport အရွယ် ဓာတ်ပုံ (၂) ပုံ</li>
                            <li class="py-2">ကလေး၏ကျန်းမာရေးမှတ်တမ်း
                            </li>
                        </ul>
                        <p>လျှောက်လွှာတင်ပြီးလျှင် မိဘနှင့်တွေ့ဆုံဆွေးနွေး၍ ကလေးအားအကဲဖြတ် ပါလိမ့်မည်။
                            SKT International School City Campus ၏ကျောင်းဝင်ခွင့်အကဲဖြတ်ကော်မတီမှ ယခင်ပြီးခဲ့သည့်
                            ကျောင်းမှတ်တမ်းနှင့် SKT International School (City Science)မှ
                            စစ်ဆေးသောဝင်ခွင့်စာမေးပွဲပေါ်မူတည်၍ လျှောက်ထားသူမှ တက်ရောက်နိုင်ခြင်း ရှိ ၊မရှိကို ဆုံးဖြတ်ချက်
                            ချပါလိမ့်မည်။ ကလေး၏ရလဒ်များကို email (သို့မဟုတ်) message မှတစ်ဆင့် ဖြေကြား ပေးသွားမည်ဖြစ်ပါသည်။
                            သင့်ကလေး၏အတန်းကို အတည်ပြုပြီးသည့်အခါ ငွေပေးချေမှုနှင့် ပြန်အမ်းငွေမူဝါဒပါသော တောင်းခံလွှာတွင်
                            လက်မှတ်ရေးထိုး၍ မှတ်ပုံတင်ကြေးပေးရန် လိုအပ်ပါသည်။</p>
                        <p>ပိုမိုသိရှိလိုပါက ကျေးဇူးပြု၍ email (သို့မဟုတ်) ကျွန်ုပ်တို့၏ကျောင်းသားရေးရာဌာန <b> (01)
                                9551795-6 , (01) 543926 ,+959 456 481 950 </b> သို့ ဆက်သွယ်မေးမြန်းစုံစမ်းနိုင်ပါသည်။</p>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        function openTab(event, tabId) {
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');

            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('bg-green-500', 'border-green-500',
                'text-white'));
            event.currentTarget.classList.add('bg-green-500', 'border-green-500',
                'text-white');
        }
    </script>
@endsection
