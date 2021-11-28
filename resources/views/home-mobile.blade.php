<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- font aowsome icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/dragble.js') }}" defer></script>
    <style>

    </style>
</head>

<body class="r-0 mr-0 p-0  select-none  font_tajawal">
    <header>

    </header>
    <main class=" w-full flex items-center flex-col">
        <div class=" container flex items-center justify-around flex-col h-screen ">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/box_pkg.png') }}" class=" w-8/12 mt-16" />
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
                <button class=" py-4 w-full mx-1 bg-purple-500 text-white rounded-full text-lg font-bold">أنشئ
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
                <img src="{{ asset('images/salla-sm.png') }}" class="h-20" />
            </div>
            <div class=" flex justify-center my-8 w-full">
                <div
                    class=" bg-purple-500 text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-white">
                    برو
                </div>
                <div
                    class=" bg-white text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-purple-500 border-2 border-purple-500">
                    بلس
                </div>
            </div>
            <div class="flex justify-center items-center w-full px-5">
                <h3 class=" text-xl text-purple-500 font-light">الفرق بين الباقتين</h3>
                <img src="{{ asset('images/icon_video.svg') }}" class="w-12 ml-4" />
            </div>
            <div class=" w-full px-8 text-right text-purple-500 font-light text-xl mt-9">
                <p>
                    الفرق الجوهري بين الباقتين هو ان متجرك بباقة برو سيكون مميزا عن باقي متاجر سلة بفضل ميزة ال
                    برمجة سي اس اس
                    و غيرها من المميزات مثل حساب الضريبة و تحسين محركات البحث اس اي او
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
                <img src="{{ asset('images/zid-sm.png') }}" class="h-20" />
            </div>
            <div class=" flex justify-center my-8 w-full">
                <div
                    class=" bg-purple-500 text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-white">
                    اساسية
                </div>
                <div
                    class=" bg-white text-3xl rounded-full mx-1 font-black flex justify-center items-center w-5/12 h-12 text-purple-500 border-2 border-purple-500">
                    نمو
                </div>
            </div>
            <div class="flex justify-center items-center w-full px-5">
                <h3 class=" text-xl text-purple-500 font-light">الفرق بين الباقتين</h3>
                <img src="{{ asset('images/icon_video.svg') }}" class="w-12 ml-4" />
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
                        برو
                    </div>
                    
                </div>
                <div class=" flex flex-col items-center w-full text-white mt-10">
                    <div class="flex flex-col items-end w-92">
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">تصميم واجهة المتجر برمجيا باستخدام كود الـ<span> css</span></h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                    </div>
                </div>
                <div class=" w-full p-2">
                    <button class="text-center font-black bg-white rounded-full text-xl py-5 text-green-400 mt-8 w-full ">
                        أطلب الآن
                    </button>
                </div>
            </div>

            <div class="  flex flex-col items-center w-10/12 bg-green-400 text-white pt-5 mt-12 rounded-3xl">
                <div class="pr-6 flex justify-end w-full">
                    <div class=" flex flex-col items-end justify-end pr-4">
                        ريال
                    </div>
                    <div class=" text-4xl font-light pr-11">
                        891
                    </div>
                    <div class=" bg-white rounded-full px-6 py-1 text-green-400 font-black text-xl">
                        برو
                    </div>
                    
                </div>
                <div class=" flex flex-col items-center w-full text-white mt-10 text-right">
                    <div class="flex flex-col items-end  px-4">
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">تصميم واجهة المتجر برمجيا باستخدام كود الـ<span> css</span></h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-center mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2">تصميم بنر رئيسي</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0 w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الشحن</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                        <div class="flex justify-end mt-2">
                            <h1 class=" bg-black bg-opacity-10 rounded-full px-2 flex">ربط خدمات الدفع الاكتروني</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon ml-2 flex-shrink-0  w-7" viewBox="0 0 512 512" fill="#fff"><title>Checkmark Circle</title><path  d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm108.25 138.29l-134.4 160a16 16 0 01-12 5.71h-.27a16 16 0 01-11.89-5.3l-57.6-64a16 16 0 1123.78-21.4l45.29 50.32 122.59-145.91a16 16 0 0124.5 20.58z"/></svg>
                        </div>
                    </div>
                </div>
                <div class=" w-full p-2">
                    <button class="text-center font-black bg-white rounded-full text-xl py-5 text-green-400 mt-8 w-full ">
                        أطلب الآن
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-center w-full ">
                <h1 class="text-3xl text-purple-500 font-black mt-28 text-center mb-6">كاتالوج المؤسسة</h1>
                <div class="">
                    <img src="{{ asset('images/docf.png') }}" class=" w-8/12 absolute left-36 z-50" />
                    <img src="{{ asset('images/doclogo.png') }}" class=" w-8/12 absolute left-2 z-40 />

                </div>

            </div>
        </div>


    </main>
    <footer>

    </footer>
    <script src="{{ mix('js/dragble.js') }}"></script>
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