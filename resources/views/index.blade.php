<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(-100%);
                /* Start from the left side */
            }

            100% {
                transform: translateX(250%);
                /* Move to the right side */
            }
        }

        .animate-marquee {
            animation: marquee 35s linear infinite;
            /* Adjust speed here */
        }
    </style>
    @livewireStyles
    @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased h-[1800px]">
    <div class="z-50 sticky -top-6 bg-white pb-1" x-data="{}">
        <header class="border-b border-gray-200">

            {{-- header main container --}}
            <div class="flex justify-around items-center md:flex-row flex-col-reverse flex-col gap-y-3">

                {{-- container for about, contact --}}
                <div class="flex items-center gap-x-5">
                    <div class="flex items-center gap-x-2">
                        <a href="about"
                            class="flex items-center gap-x-1 font-medium border-b-2 border-white hover:border-b-2 hover:border-gray-500 transition-all duration-300">
                            <svg style="width: 18px;" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M512 80c8.8 0 16 7.2 16 16l0 320c0 8.8-7.2 16-16 16L64 432c-8.8 0-16-7.2-16-16L48 96c0-8.8 7.2-16 16-16l448 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16l192 0c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80l-64 0zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0z" />
                            </svg>
                            About
                        </a>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <a href="contact"
                            class="flex items-center gap-x-1 font-medium border-b-2 border-white hover:border-b-2 hover:border-gray-500 transition-all duration-300">
                            <svg style="width: 18px;" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M384 48c8.8 0 16 7.2 16 16l0 384c0 8.8-7.2 16-16 16L96 464c-8.8 0-16-7.2-16-16L80 64c0-8.8 7.2-16 16-16l288 0zM96 0C60.7 0 32 28.7 32 64l0 384c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L96 0zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16l192 0c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80l-64 0zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64zM496 192c-8.8 0-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8 7.2 16 16 16s16-7.2 16-16l0-64z" />
                            </svg>
                            Contact
                        </a>
                    </div>
                </div>


                {{-- for telephone, email --}}
                <div>
                    <div class="flex items-center space-x-2">
                        <b class="font-semibold pl-2">someemail@gmail.com</b>
                        <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z" />
                        </svg>

                        <b class="font-semibold pr-2 border-r border-gray-300">UAN : 0092-938280378</b>
                        <svg style="width: 18px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>

                    </div>
                </div>

            </div>
        </header>
        <nav class="border border-gray-300">
            {{-- main menu container --}}
            <div class="flex justify-around items-center">
                {{-- container for menu items --}}
                <div class="flex-1">
                    <div>
                        <div class="relative md:hidden block">
                            <button @click="toggleMenu" @click.outside="hideMenu">
                                <svg style="width: 30px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                                </svg>
                            </button>
                        </div>
                        <ul id="menuItems"
                            class="md:flex md:static absolute md:mt-0 mt-5 md:bg-inherit md:text-inherit text-white bg-gray-800 w-[99%] md:p-0 p-4 rounded-md items-center md:gap-x-8 md:justify-center md:flex-row flex-col overflow-hidden max-h-0 opacity-0 md:max-h-max md:opacity-100 transition-all duration-500 ease-in-out">
                            <li><a href="#">سرورق</a></li>
                            <li><a href="#">امتحانى معلومات</a></li>
                            <li><a href="#">مدارس لاگ ان</a></li>
                            <li><a href="#">نتائج</a></li>
                            <li><a href="#">نصابِ تعلیم</a></li>
                            <li><a href="#">ڈاؤن لوڈ فارمز</a></li>
                            <li><a href="#">معلومات</a></li>
                            <li><a href="#">ديگر صفحات</a></li>
                        </ul>


                    </div>
                </div>

                {{-- container for logo --}}
                <div>
                    <div>
                        <img class="md:w-96 md:h-20 w-72 h-20" src="{{ url('storage/images/logo.png') }}"
                            alt="">
                    </div>
                </div>
            </div>

        </nav>
    </div>

    <main class=" bg-gray-100 z-40 px-2">
        {{-- marquee --}}
        <div class="relative w-full bg-gray-800 p-4 overflow-hidden">
            <div class="whitespace-nowrap animate-marquee">
                <p class="text-lg text-white inline-block">
                    ان شاء اللہ العزیز وحدت المدراس الاسلامیہ پاکستان کے سالانہ امتحان برائے سال 1446ھ بمطابق2025کے لئے
                    تمام درجات بشمول حفظ،ترجمہ اور ناظرہ میں داخلہ کا آغاز الحمد للہ ہوچکا ہے،داخلہ فارم آج ہی دفتر وحدت
                    المدارس الاسلامیہ پاکستان یا ویب سائیٹ میں ڈاونلوڈ سے حاصل کر سکتے ہیں - ۔سنگل فیس کی آخری تاریخ
                    10ستمبر2024،ڈبل فیس:11 ستمبرتا30ستمبر2024،ٹرپل فیس:یکم اکتوبر تا 10 اکتوبر2024 تک مقرر کئے جاچکے
                    ہیں۔ ۔
                </p>
            </div>
        </div>

        <div>
            {{-- container for slider --}}
            <div x-data="{
                slides: [{
                        imgSrc: '{{ url('storage/images/slider1.jpg') }}',
                        imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',
                        heading: 'وحدت المدارس اسلامیہ',
                        text: 'اشاعت التوحید والسُنة العالمیة کے تعلیمی بورڈ وحدت المدارس الاسلامیة پاکستان کا آفیشل ویب پیج',
                    },
                    {
                        imgSrc: '{{ url('storage/images/slider2.jpeg') }}',
                        imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',
                        heading: 'وحدت المدارس اسلامیہ',
                        text: 'اشاعت التوحید والسُنة العالمیة کے تعلیمی بورڈ وحدت المدارس الاسلامیة پاکستان کا آفیشل ویب پیج',
                    },
                    {
                        imgSrc: '{{ url('storage/images/slider3.jpg') }}',
                        imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',
                        heading: 'وحدت المدارس اسلامیہ',
                        text: 'اشاعت التوحید والسُنة العالمیة کے تعلیمی بورڈ وحدت المدارس الاسلامیة پاکستان کا آفیشل ویب پیج',
                    },
                ],
                currentSlideIndex: 1,
                showText: false,
                previous() {
                    this.currentSlideIndex = this.currentSlideIndex > 1 ? this.currentSlideIndex - 1 : this.slides.length;
                    this.animateText();
                },
                next() {
                    this.currentSlideIndex = this.currentSlideIndex < this.slides.length ? this.currentSlideIndex + 1 : 1;
                    this.animateText();
                },
                autoScroll() {
                    setInterval(() => {
                        this.next();
                    }, 4000);
                },
                animateText() {
                    this.showText = false;
                    if (this.currentSlideIndex == 3) {
                        return;
                    }
                    setTimeout(() => {
                        this.showText = true;
                    }, 1000);
                }
            }" x-init="autoScroll();
            animateText()" class="relative w-full overflow-hidden" dir="ltr">

                <!-- previous button -->
                <button type="button"
                    class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0"
                    aria-label="previous slide" x-on:click="previous()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                        stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>

                <!-- next button -->
                <button type="button"
                    class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0"
                    aria-label="next slide" x-on:click="next()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                        stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>

                <!-- slides -->
                <div class="relative min-h-[75svh] w-full">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                            x-transition:enter="transition ease-out duration-1000 transform"
                            x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-1000 transform"
                            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                            x-transition:leave-end="opacity-0 scale-90 translate-y-4">

                            <img class="absolute w-full h-full inset-0 object-cover" x-bind:src="slide.imgSrc"
                                x-bind:alt="slide.imgAlt" />

                            <div class="absolute inset-0 bg-black opacity-5"></div>

                            <div
                                class="absolute inset-0 flex flex-col items-end justify-center px-10 md:px-20 z-10 bg-gradient-to-t from-black/50 to-transparent">
                                <!-- Heading Animation -->
                                <h1 x-show="showText" x-text="slide.heading" dir="rtl"
                                    x-transition:enter="transition ease-out duration-1000 transform"
                                    x-transition:enter-start="opacity-0 -translate-x-full"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    class="text-5xl font-bold text-white mb-4 text-shadow-lg">
                                </h1>

                                <!-- Text Animation -->
                                <p x-show="showText" x-text="slide.text"
                                    x-transition:enter="transition ease-out duration-1000 transform delay-200"
                                    x-transition:enter-start="opacity-0 translate-x-full"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    class="text-xl text-white bg-black/40 p-4 rounded-lg text-shadow-md">
                                </p>
                            </div>

                        </div>
                    </template>
                </div>

                <!-- indicators -->
                <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-white/75 px-1.5 py-1 md:px-2 dark:bg-neutral-950/75"
                    role="group" aria-label="slides">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button
                            class="size-2 cursor-pointer rounded-full transition bg-neutral-600 dark:bg-neutral-300"
                            x-on:click="currentSlideIndex = index + 1"
                            x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-600 dark:bg-neutral-300' :
                                'bg-neutral-600/50 dark:bg-neutral-300/50'
                            ]"
                            x-bind:aria-label="'slide ' + (index + 1)"></button>
                    </template>
                </div>
            </div>
        </div>




        {{-- Welcome container --}}
        <div class="my-8 py-8">
            <div class="flex flex-col gap-3" x-data="{
                currentParagraphIndex: 0,
                paragraphs: [
                    'درجہ متوسطہ، خاصہ سال اول، اور دراسات سال اول کے داخلے کے لیے بے فارم کا ہونا ضروری ہے۔',
                    'رجسٹریشن درجہ اولیٰ یکم محرم الحرام تا اختتام صفر المظفر 200 روپے، یکم ربیع الاول تا اختتام ربیع الثانی 400 روپے اور یکم جمادی الاولیٰ تا اختتام ذوالحجہ 600 روپے ہو ں گے۔',
                    'درجہ کتب کے سالانہ امتحانات 2 شعبان المعظم 1446ھ مطابق یکم فروری 2025ء بروزہفتہ سے شروع ہوں گے',
                    'مدارس لاگ ان (اکاؤنٹ)میں تجدید الحاق فارم دے دیا گیا ہے۔ سند الحاق کی تاریخ تنسیخ سے 1 ماہ قبل فارم ڈاؤن لوڈ کر سکتے ہیں۔'
                ]
            }" x-init="setInterval(() => { currentParagraphIndex = (currentParagraphIndex + 1) % paragraphs.length }, 3000)">
            <div>
                <h1 class="md:text-3xl text-xl font-bold text-center mx-auto">
                    وحدت المدارس الاسلامیہ پاکستان میں خوش آمدید
                </h1>
            </div>
            

                <div class="bg-blue-500 text-white p-8 relative h-32 flex items-center justify-center">

                    <template x-for="(paragraph, index) in paragraphs" :key="index">
                        <p class="font-semibold text-xl absolute transform transition-all duration-1000 ease-in-out px-8"
                            x-show="currentParagraphIndex === index"
                            x-transition:enter="transition ease-out duration-1000 transform"
                            x-transition:enter-start="opacity-0 scale-90 translate-y-4"
                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-1000 transform"
                            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                            x-transition:leave-end="opacity-0 scale-90 translate-y-4" x-text="paragraph">
                        </p>
                    </template>
                </div>
            </div>
        </div>





        {{-- container for meetings --}}
        <div class="my-18 bg-gray-200 p-8">
            <h1 class="py-10 text-5xl font-bold">اہم اجلاسات</h1>
            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white p-4">
                    {{-- container for meeting images --}}
                    <div class="flex flex-col gap-1">
                        <img class="h-52" src="{{ url('storage/images/duanew.jpeg') }}" alt="">
                        <img class="h-52" src="{{ url('storage/images/slider1.jpg') }}" alt="">
                    </div>

                    {{-- container for meeting content --}}
                    <div>
                        <h1 class="font-bold text-3xl py-6 text-gray-900">اجلاس</h1>
                        <div>
                            <p class="text-gray-600">
                                صوابی- دارالقران پنج پیر میں وحدت المدارس الاسلامیہ کے نۓ دفتر کا افتتاح شیخ القرآن
                                والحدیث مولانا محمد طیب طاہری صدر وحدت المدارس الاسلامیہ پاکستان نے کیا۔اجلاس میں
                                مرکزی
                                اراکین بورڈ نے شرکت کی ۔ اس کے ساتھ ساتھ آنے والے سالانہ امتحانات پر تفصیلی بحث
                                ہوئی۔صوابی- دارالقران پنج پیر میں وحدت المدارس الاسلامیہ کے نۓ دفتر کا افتتاح شیخ
                                القرآن
                                والحدیث مولانا محمد طیب طاہری صدر وحدت المدارس الاسلامیہ پاکستان نے کیا۔اجلاس میں
                                مرکزی
                                اراکین بورڈ نے شرکت کی ۔ اس کے ساتھ ساتھ آنے والے سالانہ امتحانات پر تفصیلی بحث
                                ہوئی۔
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4">
                    {{-- container for meeting images --}}
                    <div class="flex flex-col gap-1">
                        <img class="h-52" src="{{ url('storage/images/sheikhsb.jpeg') }}" alt="">
                        <img class="h-52" src="{{ url('storage/images/ismail.jfif') }}" alt="">
                    </div>

                    {{-- container for meeting content --}}
                    <div>
                        <h1 class="font-bold text-3xl py-6 text-gray-900">اجلاس</h1>
                        <div>
                            <p class="text-gray-600">
                                صوابی- دارالقران پنج پیر میں وحدت المدارس الاسلامیہ کے نۓ دفتر کا افتتاح شیخ القرآن
                                والحدیث مولانا محمد طیب طاہری صدر وحدت المدارس الاسلامیہ پاکستان نے کیا۔اجلاس میں
                                مرکزی
                                اراکین بورڈ نے شرکت کی ۔ اس کے ساتھ ساتھ آنے والے سالانہ امتحانات پر تفصیلی بحث
                                ہوئی۔صوابی- دارالقران پنج پیر میں وحدت المدارس الاسلامیہ کے نۓ دفتر کا افتتاح شیخ
                                القرآن
                                والحدیث مولانا محمد طیب طاہری صدر وحدت المدارس الاسلامیہ پاکستان نے کیا۔اجلاس میں
                                مرکزی
                                اراکین بورڈ نے شرکت کی ۔ اس کے ساتھ ساتھ آنے والے سالانہ امتحانات پر تفصیلی بحث
                                ہوئی۔
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-4">
                    {{-- container for meeting images --}}
                    <div class="flex flex-col gap-1">
                        <img class="h-52" src="{{ url('storage/images/circle.jfif') }}" alt="">
                        <img class="h-52" src="{{ url('storage/images/sheikhsb2.jfif') }}" alt="">
                    </div>

                    {{-- container for meeting content --}}
                    <div>
                        <h1 class="font-bold text-3xl py-6 text-gray-900">اجلاس</h1>
                        <div>
                            <p class="text-gray-600">
                                صوابی- دارالقران پنج پیر میں وحدت المدارس الاسلامیہ کے نۓ دفتر کا افتتاح شیخ القرآن
                                والحدیث مولانا محمد طیب طاہری صدر وحدت المدارس الاسلامیہ پاکستان نے کیا۔اجلاس میں
                                مرکزی
                                اراکین بورڈ نے شرکت کی ۔ اس کے ساتھ ساتھ آنے والے سالانہ امتحانات پر تفصیلی بحث
                                ہوئی۔صوابی- دارالقران پنج پیر میں وحدت المدارس الاسلامیہ کے نۓ دفتر کا افتتاح شیخ
                                القرآن
                                والحدیث مولانا محمد طیب طاہری صدر وحدت المدارس الاسلامیہ پاکستان نے کیا۔اجلاس میں
                                مرکزی
                                اراکین بورڈ نے شرکت کی ۔ اس کے ساتھ ساتھ آنے والے سالانہ امتحانات پر تفصیلی بحث
                                ہوئی۔
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    {{-- footer --}}
    <footer class="bg-blue-950 text-white mx-2 mb-8">
        <div class="grid md:grid-cols-3 p-8 gap-10">

            {{-- 1st container --}}
            <div class="flex flex-col gap-10">
                <div class="flex flex-col gap-3">
                    <h1 class="font-bold text-3xl">مرکزی دفتر پتہ</h1>
                    <p>جامعہ الامام محمدطاھرؒ دارالقرآن پنج پیر ضلع صوابی خیبرپختونخوا،پاکستان</p>
                </div>
                <div class="flex flex-col gap-3">
                    <h1 class="font-bold text-3xl">مرکزی دفتر رابطہ</h1>
                    <p>فون نمبر:0938280378</p>
                    <p>واٹس ایپ نمبر:03120280378</p>
                    <p>contacts@wmi.edu.pk</p>
                </div>
            </div>

            {{-- 2-container for logo --}}
            <div class="flex justify-center md:col-start-2 md:col-end-3 md:row-start-1 row-start-3">
                <img class="h-[300px]" src="{{ url('storage/images/logo-footer.png') }}" alt="">
            </div>
            <div class="flex flex-col gap-3">
                <h1 class="font-bold text-3xl">دفترى اوقات کار</h1>
                <p>ہفتہ تا جمعرات: صبح آٹھ سے شام چار بجے تک۔
                    جمعۃ المبارک: عام تعطیل
                </p>
            </div>
        </div>
    </footer>

    @livewireScripts
    @vite('resources/js/app.js')

</body>

</html>
