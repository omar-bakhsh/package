<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>بكج خدمات متاجر الكترونية</title>

    <!-- font aowsome icons -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- meta description -->
    <meta name="description" content=" تجهيز متاجر الكترونية تصميم بنرات وشعار و منتجات برمجة css للثيم">
    <meta name="keywords" content="تصميم متجر , برمجة متجر , متجر سلة, سلة, بكج">
    <meta name="author" content="تصميم متاجر سلة وزد باحترافية عالية ">
    <meta property="og:title" content="بكج خدمات متجار الالكترونية  ">
    <meta property="og:description" content="سهّلنا لك التجارة الإلكترونية حيث يمكنك الآن إنشاء متجر إلكتروني مع بكج خلال 48 ساعة !">
    <meta property="og:url" content="https://sallla.site">
    <meta property="og:site_name" content="سلة">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="التجارة الإلكترونية مع سلة وزد - حلك العملي لإنشاء متجر إلكتروني في ثوانٍ معدودات">
    <meta name="twitter:description" content="سهّلنا لك التجارة الإلكترونية حيث يمكنك الآن إنشاء متجر إلكتروني مع بكج خلال 48 ساعة !">
    <!-- font aowsome icons -->
    <!-- Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <!-- icon title -->
    <link rel="icon" type="image/png" href="http://sallla.site/images/logo-s.png" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5RXJBGM');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-216010756-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-216010756-1');
    </script>
    <!-- Styles -->

    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    @livewireStyles



    <!-- Scripts -->
    <script>
        var brow = navigator.userAgent;
        if (/mobi/i.test(brow)) {
            // alert('Mobile Browser');
            //  for mobile window.location.href = "http://sallla.site/mobile";

        } else {
            // alert('Not on Mobile');
            // for Desktop window.location = window.location.host or window.location = window.location.href.replace("/mobile", "/");
            window.location = "http://sallla.site/";

        }
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/dragble.js') }}" defer></script>

    <style>



    </style>

</head>



<body class="r-0 mr-0 p-0  select-none  font_tajawal">

    <header class="relative h-50  py-5  max-w-full ">

        <div class="w-full header_conatiner text-gray-700  dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }" class="flex  flex-row w-2/3  max-w-screen-xl px-1 mx-auto items-center md:items-center md:center md:flex-row md:px-6 lg:px-2">
                <div class="p-4 flex flex-row items-center justify-center">

                    <button aria-label="menue open" class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col mt-6 flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

                    <!-- <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="التسعيرات" href="#">التسعيرات</a> -->
                    <!--   <a href="{{route('service_policy')}}" aria-label="سياسة الخدمات" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">سياسة الخدمات</a> -->
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="دروب شوبينج" href="{{route('drop_shoping')}}">دروب شوبينج</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="التسويق" href="{{route('development')}}">التسويق</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="التسويق" href="{{route('coding')}}">التصميم</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="البرمجة" href="{{route('coding')}}">البرمجة</a>
                    <a onclick="window.scrollBy(0, 850);" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-purple  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-white" aria-label="انشئ المتجر" href="#">انشئ المتجر</a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button aria-label="menue open" @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>المساعدة</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0  w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 z-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="الاسئلة الشائعة" href="#">الاسئلة الشائعة</a>
                                <p class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="ابق على الاتصال" onclick="window.scrollBy(0, 3500);">ابق على الاتصال</p>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" aria-label="سياسة الخدمات" href="{{route('service_policy')}}">سياسة الخدمات</a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <a href="#" class=" absolute inset-y-0 right-10 p-3  text-sm font-semibold tracking-widest  uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline text-yellow-500"> <img alt="logo package" src="{{ asset('images/logo-s.png') }}" class="w-18 h-auto left-0 m-0 t-0   p-0 " /></a>

    </header>

    <main class=" w-full flex items-center flex-col">

        <div class=" container flex items-center justify-around flex-col h-screen ">

            <div class="flex flex-col items-center">

                <img alt="logo package لوجو بكج" src="{{ asset('images/box_pkg.png') }}" class=" w-8/12 mt-16" />

                <div class=" flex flex-col items-center mt-14">

                    <span class="txt-color-purple text-3xl px-3 text-center font_tajawal font-normal ">نحن</span>

                    <p class="txt-color-purple text-2xl text-center font_tajawal px-2 font-light">

                        مؤسسة بكج نقدم لكم خدمات رائدة

                        <br>

                        في مجال تجارة الالكترونية

                        <br>

                        بفريق مكون من مصممين ومبرمجين

                        <br>

                        وخبراء في التجارة الالكترونية السعودية

                    </p>

                </div>

            </div>

            <div class=" w-full flex justify-center mx-auto">

                <button onclick="window.scrollBy(0, 1600);" class=" py-4 w-full mx-1 bg-purple-500 text-white rounded-full text-lg font-bold">أنشئ

                    متجرك</button>

            </div>

        </div>

        <div class="container flex items-center justify-around flex-col mt-11">

            <h1 class="text-3xl text-purple-500 font-bold text-center mb-6">أنشئ متجرك على منصة سلة</h1>

            <div class="flex justify-end w-full mt-10 px-6">

                <div class="flex flex-col text-right items-end justify-between px-2">

                    <p class="py-1 px-3 rounded-full bg-yellow-500 text-white text-xs" style="width: fit-content">ننصح

                        به</p>

                    <h3 class=" text-xl text-purple-500 font-normal">الباقات المقدمة من منصة سلة</h3>

                </div>

                <img alt="logo salla متجر سلة" src="{{ asset('images/salla-sm.png') }}" class="h-20" />

            </div>

            <div class=" flex justify-center my-8 w-full font_Cairo">

                <div class=" bg-purple-500 text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-white">

                    برو

                </div>

                <div class=" bg-white text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-purple-500 border-2 border-purple-500">

                    بلس

                </div>

            </div>

            <div class="flex justify-center items-center w-full px-5">

                <h3 class=" text-xl text-purple-500 font-light">الفرق بين الباقتين</h3>

                <img src="{{ asset('images/icon_video.svg') }}" alt="video compaire between zid and salla" class="w-12 ml-4" />

            </div>

            <div class=" w-full px-8 text-right text-purple-500 font-light text-xl mt-9">

                <p>

                    الفرق الجوهري بين الباقتين هو ان متجرك بباقة برو سيكون مميزا عن باقي متاجر سلة بفضل ميزة ال

                    تتيح برمجة (css)

                    (SEO) و غيرها من المميزات مثل حساب الضريبة و اتاحة تحسين محركات البحث

                    و إمكانية الربط مع الخدمات المحاسبية و غيرها من المميزات

                </p>

            </div>

        </div>





        <div class="container flex items-center justify-around flex-col mt-28">

            <h1 class="text-3xl text-purple-500 font-bold text-center mb-6">أنشئ متجرك على منصة زد</h1>

            <div class="flex justify-end w-full mt-10 px-6">

                <div class="flex flex-col text-right items-end justify-between px-2">

                    <p class="py-1 px-3 rounded-full bg-white text-white text-xs" style="width: fit-content">ننصح

                        به</p>

                    <h3 class=" text-xl text-purple-500 font-normal">الباقات المقدمة من منصة زد</h3>

                </div>

                <img src="{{ asset('images/zid-sm.png') }}" alt="منصة زد" class="h-20" />

            </div>

            <div class=" flex justify-center my-8 w-full font_Cairo">

                <div class=" bg-purple-500 text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-white">

                    اساسية

                </div>

                <div class=" bg-white text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-purple-500 border-2 border-purple-500">

                    نمو

                </div>

            </div>

            <div class="flex justify-center items-center w-full px-5">

                <h3 class=" text-xl text-purple-500 font-light">الفرق بين الباقتين</h3>

                <img src="{{ asset('images/icon_video.svg') }}" alt="مقارنة زد فيديو" class="w-12 ml-4" />

            </div>

            <div class=" w-full px-8 text-right text-purple-500 font-light text-xl mt-9">

                <p>

                    الفرق الجوهري بين الباقتين هو ان متجرك بباقة برو سيكون مميزا عن باقي متاجر زد بفضل ميزة ال

                    برمجة سي اس اس

                    و غيرها من المميزات مثل حساب الضريبة و تحسين محركات البحث اس اي او

                    و إمكانية الربط مع الخدمات المحاسبية و غيرها من المميزات

                </p>

            </div>

        </div>

        <div class=" flex flex-col items-center mt-16 w-full">

            <div class="  flex flex-col items-center w-10/12 bg-green-400 text-white pt-5 rounded-3xl">

                <div class="pr-6 flex justify-end w-full">

                    <div class=" flex flex-col items-end justify-end pr-4">

                        ريال

                    </div>

                    <div class=" text-4xl font-light pr-11">

                        891

                    </div>

                    <div class=" bg-white rounded-full px-6 py-1 text-green-400 font-black text-xl">

                        بلس

                    </div>



                </div>

                <div class=" flex flex-col items-center w-full text-white mt-10">

                    <div class="flex flex-col items-end w-92">

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر الرئيسي (عدد1)</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">اضافة صفحة سياسة المتجر</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2"> توثيق المتجر</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>


                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex"> ربط خدمات الدفع الالكتروني</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">اضافة الاقسام وترتيبها</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">اختيار الدومين المناسب</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">اضافة حساب التواصل الاجتماعي</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                    </div>

                </div>

                <div class=" w-full p-2">
                    <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">
                        <button class="text-center font-black bg-white rounded-full text-xl py-5 text-green-400 mt-8 w-full font_Cairo">

                            أطلب الان

                        </button>
                    </a>
                </div>

            </div>



            <div class="  flex flex-col items-center w-10/12 bg-green-400 text-white pt-5 mt-12 rounded-3xl">

                <div class="pr-6 flex justify-end w-full">

                    <div class=" flex flex-col items-end justify-end pr-4">

                        ريال

                    </div>

                    <div class=" text-4xl font-light pr-11">

                        991

                    </div>

                    <div class=" bg-white rounded-full px-6 py-1 text-green-400 font-black text-xl">

                        برو

                    </div>



                </div>

                <div class=" flex flex-col items-center w-full text-white mt-10 text-right">

                    <div class="flex flex-col items-end  px-4">

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر الرئيسي (عدد1)</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px- flex">اضافة صفحة سياسة المتجر</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-3"> اضافة صفحة سياسة الخصوصية</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-white text-green-500  rounded-full rtl px-3 flex">(css) تصميم واجهة المتجر برمجيا باستخدام كودالبرمجي </h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex"> توثيق المتجر</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">ربط خدمات الدفع الالكتروني</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">اضافة الاقسام وترتيبها</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-end mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex"> اختيار الدومين المناسب</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>

                        <div class="flex justify-center mt-2">

                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">اضافة حساب التواصل الاجتماعي</h1>

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff">
                                <title>Checkmark Circle</title>
                                <path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z" />
                            </svg>

                        </div>



                    </div>

                </div>

                <div class=" w-full p-2">

                    <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">
                        <button class="text-center font-black bg-white rounded-full text-xl py-5 text-green-400 mt-8 w-full font_Cairo">

                            أطلب الان

                        </button>
                    </a>

                </div>

            </div>
            <!-- ratting -->
            <h1 class="#fa-angle-up mt-28 text-4xl text-center w-full">اراء العملاء</h1>
            <section id="flavoursContainer" style="width: 100%;overflow-x: scroll;" class="scroll-x mt-2 gap-10 h-1/2 relative  flex  items-center overflow-x-scroll overscroll-y-none">
                <div class=" h-18">
                    <blockquote class="twitter-tweet">
                        <p lang="ar" dir="rtl">خدمة جميله ومميزه وسرعة تجاوب تشرفت بالتعامل معكم يعطيكم الف عافيه متجر راڤينا</p>&mdash; عطور راڤينا (@ravenna2021) <a href="https://twitter.com/ravenna2021/status/1474888688396124166?ref_src=twsrc%5Etfw">December 25, 2021</a>
                    </blockquote>
                </div>
                <div class=" h-18">
                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 250px; height: 378px; display: block; flex-grow: 1;" title="Twitter Tweet" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3NwYWNlX2NhcmQiOnsiYnVja2V0Ijoib2ZmIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1470352893517705223&amp;lang=en&amp;origin=http%3A%2F%2Fsallla.site%2F&amp;sessionId=d5370806bc628f4a30267710013ed5b9addbfe9a&amp;theme=light&amp;widgetsVersion=9fd78d5%3A1638479056965&amp;width=550px" data-tweet-id="1470352893517705223"></iframe></div>
                    <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class=" h-18">
                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;"><iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 252px; height: 394px; display: block; flex-grow: 1;" title="Twitter Tweet" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-1&amp;features=eyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3NwYWNlX2NhcmQiOnsiYnVja2V0Ijoib2ZmIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1470322611276165123&amp;lang=en&amp;origin=http%3A%2F%2Fsallla.site%2F&amp;sessionId=d5370806bc628f4a30267710013ed5b9addbfe9a&amp;theme=light&amp;widgetsVersion=9fd78d5%3A1638479056965&amp;width=550px" data-tweet-id="1470322611276165123"></iframe></div>

                </div>
                <div class=" h-18">
                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;"><iframe id="twitter-widget-2" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 252px; height: 462px; display: block; flex-grow: 1;" title="Twitter Tweet" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-2&amp;features=eyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3NwYWNlX2NhcmQiOnsiYnVja2V0Ijoib2ZmIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1444481701040869376&amp;lang=en&amp;origin=http%3A%2F%2Fsallla.site%2F&amp;sessionId=d5370806bc628f4a30267710013ed5b9addbfe9a&amp;theme=light&amp;widgetsVersion=9fd78d5%3A1638479056965&amp;width=550px" data-tweet-id="1444481701040869376"></iframe></div>

                </div>
                <div class=" h-18">
                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;"><iframe id="twitter-widget-3" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 252px; height: 500px; display: block; flex-grow: 1;" title="Twitter Tweet" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-3&amp;features=eyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3NwYWNlX2NhcmQiOnsiYnVja2V0Ijoib2ZmIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1443151257791762436&amp;lang=en&amp;origin=http%3A%2F%2Fsallla.site%2F&amp;sessionId=d5370806bc628f4a30267710013ed5b9addbfe9a&amp;theme=light&amp;widgetsVersion=9fd78d5%3A1638479056965&amp;width=550px" data-tweet-id="1443151257791762436"></iframe></div>

                </div>
                <div class=" h-18">
                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;"><iframe id="twitter-widget-4" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 252px; height: 480px; display: block; flex-grow: 1;" title="Twitter Tweet" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-4&amp;features=eyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3NwYWNlX2NhcmQiOnsiYnVja2V0Ijoib2ZmIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1439235842548064263&amp;lang=en&amp;origin=http%3A%2F%2Fsallla.site%2F&amp;sessionId=d5370806bc628f4a30267710013ed5b9addbfe9a&amp;theme=light&amp;widgetsVersion=9fd78d5%3A1638479056965&amp;width=550px" data-tweet-id="1439235842548064263"></iframe></div>

                </div>
                <div class=" h-18"> </div>
                <div class=" h-18"> </div>
                <div class=" h-18">
                    <div class="twitter-tweet twitter-tweet-rendered" style="display: flex; max-width: 550px; width: 100%; margin-top: 10px; margin-bottom: 10px;"><iframe id="twitter-widget-5" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 252px; height: 575px; display: block; flex-grow: 1;" title="Twitter Tweet" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-5&amp;features=eyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3NwYWNlX2NhcmQiOnsiYnVja2V0Ijoib2ZmIiwidmVyc2lvbiI6bnVsbH19&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1399352174161793037&amp;lang=en&amp;origin=http%3A%2F%2Fsallla.site%2F&amp;sessionId=d5370806bc628f4a30267710013ed5b9addbfe9a&amp;theme=light&amp;widgetsVersion=9fd78d5%3A1638479056965&amp;width=550px" data-tweet-id="1399352174161793037"></iframe></div>
                </div>
            </section>
            <!-- catlog -->
            <div class="flex flex-col items-center w-full ">

                <h1 class="text-3xl text-purple-500 font-black mt-28 text-center mb-6 font_Cairo">كاتالوج المؤسسة</h1>

                <div class=" relative">

                    <img src="{{ asset('images/docf.png') }}" alt="اعمال بكج" class=" w-8/12 relative left-36 z-50" />

                    <img src="{{ asset('images/doclogo.png') }}" alt="اعمال بكج كاتلوج " class=" w-8/12 absolute left-2 z-40 top-0" />



                </div>

                <div class=" relative w-60 mt-14">

                    <button class=" absolute z-20 bg-white border-2 border-purple-500 w-52 h-12 font_Cairo font-black left-7 rounded-lg text-purple-700">

                        تحميل

                    </button>

                    <div class=" absolute z-10 bg-white border-2 border-purple-500 w-52 h-12 left-5 top-2 rounded-lg">



                    </div>

                </div>



            </div>

        </div>





    </main>

    <footer class="footer-1 bg-gray-100 py-8 sm:py-12 mt-20  flex   ">
        <button aria-label="to top page" onclick="window.scrollBy(0, -2000);" class="up_icon" alt="اعلى الصفحة"><i class="#fad #fa-angle-up text-6xl text-yellow-500  ml-7">^</i></button>
        <div class="container mx-auto px-4">
            <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 flex flex-col ">
                    <h5 class=" text-center lg:text-left   text-xl font-bold mb-6">الخدمات</h5>
                    <ul class="list-none flex sm:flex-row lg:flex-col  footer-links px-2">
                        <li class="mb-2 mx-2">
                            <a href="{{route('development')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التطبيقات</a>
                        </li>
                        <li class="mb-2 mx-1">
                            <a href="{{route('coding')}}" aria-label="التصميم" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التصميم</a>
                        </li>
                        <li class="mb-2 mx-1">
                            <a href="#" aria-label="التسويق" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق</a>
                        </li>
                        <li class="mb-2 mx-1">
                            <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800"></a>
                        </li>
                        <li class="mb-2 mx-1">
                            <a href="#" aria-label="الرئيسية" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الرئيسية</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0 flex flex-col">
                    <h5 class=" text-center lg:text-left  text-xl font-bold mb-6">انضم الينا</h5>
                    <ul class="list-none flex sm:flex-row lg:flex-col footer-links px-2">
                        <li class="mb-2 mx-3">
                            <a href="#" aria-label="اعمالنا" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">اعمالنا</a>
                        </li>
                        <li class="mb-2 mx-3">
                            <a href="#" aria-label="شركاء النجاح" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">شركاء النجاح</a>
                        </li>
                        <li class="mb-2 mx-3">
                            <a href="https://t.me/sallla_site" aria-label="المجتمعات" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">المجتمعات</a>
                        </li>
                        <li class="mb-2 mx-3">
                            <a href="{{route('coupon')}}" aria-label="التسويق بالعمولة" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق بالعمولة</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0 flex flex-col ">
                    <h5 class=" text-center lg:text-left  xl:justify-end text-xl font-bold mb-6 ">حول</h5>
                    <ul class="  list-none flex sm:flex-row lg:flex-col footer-links  px-2">
                        <li class="mb-2 mx-1">
                            <a href="{{route('team')}}" aria-label="الفريق" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الفريق</a>
                        </li>
                        <li class="mb-2 mx-2">
                            <a href="#" aria-label="الموقع" class="justify-center border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الموقع</a>
                        </li>
                        <li class="mb-2 mx-2 ">
                            <a href="#" aria-label="الخصوصية" class="  justify-center border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800 ">الخصوصية</a>
                        </li>
                        <li class="mb-2 ">
                            <a href="{{route('service_policy')}}" aria-label="سياسة الخدمات" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">سياسة الخدمات</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 ml-3 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0 flex flex-col  ">
                    <h5 class="text-xl font-bold mb-6 text-center lg:text-left    justify-center">المساعدة </h5>
                    <ul class="px-2 flex sm:flex-row lg:flex-col  list-none footer-links">
                        <li class="mb-2 mx-1">
                            <a href="#" aria-label="المساعدة" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">المساعدة</a>
                        </li>
                        <li class="mb-2 mx-2">
                            <a href="https://https://wa.me/966543201512" target="__blank" aria-label="الاسئلةالشائعة" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الاسئلة الشائعة</a>
                        </li>
                        <li class="mb-2 mx-2">
                            <a href="https://https://wa.me/966543201512 " target="__blank" aria-label="ابق على الاتصال" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">ابق على الاتصال</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto flex flex-col items-center ">

                    <div class="flex sm:justify-center xl:justify-start">
                        <a href="https://www.facebook.com/package.developer" aria-label="facebook" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/package_dev" aria-label="Twitter" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/package.developer/" aria-label="instagram" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-red-600 hover:border-red-600">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </footer>

    <script src="{{ asset('js/dragble.js') }}"></script>

    @livewireScripts

</body>



</html>









<!-- <div class="container-txt-who w-full h-250 items-center text-center flex flex-col p-3 ">

    <p class="txt-color-purple text-2xl font_tajawal ">نحن</p>

    <p class="txt-color-purple text-2xl font_tajawal px-9 ">

      مؤسسة بكج نقدم لكم خدمات رائدة

      في مجال تجارة الالكترونية

      بفريق مكون من مصممين ومبرمجين

      وخبراء في التجارة الالكترونية السعودية

    </p>

  </div> -->





<!-- 

[html] (

  [body](

   [livwire] parent switch(

      loading {

         if is $device == 'mobile' 

        [livewire] mobile (

  

        )

        if is $device == 'desktop'

          [livewire] desktop (



          )

         js tag have function call livwire method set $device  'mobile' or 'desktop' 

      }    

   )

  )

)

-->