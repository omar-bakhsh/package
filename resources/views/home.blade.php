<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- meta description -->
  <meta name="description" content="بكج تجهيز متاجر الكترونية تصميم بنرات وشعار و منتجات برمجة css للثيم ">
  <meta name="keywords" content="تصميم متجر , برمجة متجر , متجر سلة, سلة, بكج">
  <meta name="author" content="تصميم متاجر سلة وزد باحترافية عالية ">
  <!-- font aowsome icons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
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

  <!-- Styles -->
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <style>

  </style>

</head>

<body class="r-0 mr-0 p-0  select-none  ">
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
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

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
  <section class="flex flex-col #items-center  w-full    ">
    <div class="flex flex-row items-center w-full">
      <div class="flex flex-col h-1/2  mt- w-3/4 py-10 mr-10 text-right  #bg-pink-300 ">
        <!-- info -->
        <span class="txt-color-purple text-4xl px-3 text-right font_tajawal font-normal ">نحن</span>
        <p class="txt-color-purple text-4xl font_tajawal px-2 font-light">
          مؤسسة بكج نقدم لكم خدمات رائدة
          <br>
          في مجال تجارة الالكترونية
          <br>
          بفريق مكون من مصممين ومبرمجين
          <br>
          وخبراء في التجارة الالكترونية السعودية
        </p>
      </div>
      <!-- img box -->
      <div class="flex flex-col  w-1/2 mt-5 place-items-start items-start   ">
        <img alt="logo package large" src="{{ asset('images/box_pkg.png') }}" class="img_box  left-0 m-0 t-0 " />
      </div>
    </div>
    <!-- button action  -->
    <div onclick="window.scrollBy(0, 850);" class="#bg-pink-300 w-full  h-40 flex flex-row   -mt-10 text-center justify-items-center justify-center items-start align-middle  ">
      <div class=" py-4 px-10 cursor-pointer text-white text-center text-3xl  mt-0 h-20 rounded-xl bg-purple">انشئ متجرك</div>
    </div>
  </section>
  <section class="  w-full h-full ">
    <div class="flex flex-row w-full h-auto mt-8">
      <div class="flex flex-col w-1/2 h-full #border-2 items-center   p-2">
        <p class="txt-color-purple text-4xl #font_Cairo px-2 font-black">انشئ متجرك على زد </p>
        <div class="flex flex-row w-full mt-8  items-end text-center justify-items-center justify-center   #bg-yellow-600 ">
          <p class="px-3 mr-5 txt-color-purple">الباقات التي تقدمها منصة زد</p><img alt="logo zid" src="{{ asset('images/zid-sm.png') }}" />
        </div>
        <!-- button action  -->
        <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-7 gap-4 p-2">
          <div class="bx w-40 h-10 px-2 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl">الاساسية</div>
          <div class="bx w-40 h-10 px-2 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl font-black">الماسية</div>
        </div>
        <!-- row #important -->
        <!-- <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-7 gap-4 p-2">
          <p class="px-3 mr-5 txt-color-purple">الباقات التي تقدمها منصة زد</p><img alt="video compaire between salla and zid" src="{{ asset('images/icon_video.svg') }}" />
        </div> -->
        <div class="text-center items-center w-1/2">
          <p class="text-xs txt-color-purple ">الفرق بين الباقتين هو ان متجرك بباقة نمو
            · استيراد وتحديث المنتجات بملف الاكسل
            <br>
            و غيرها من المميزات مثل الربط مع الانظمة المحاسبية
            <br>
            · الربط مع مزودي خدمات التشغيل والتخزين
            (بأسعار خاصة)
          </p>
        </div>
      </div>
      <div class="flex flex-col w-1/2 h-full #border-2 items-center   p-2">
        <p class="txt-color-purple text-4xl #font_Cairo px-2 font-black">انشئ متجرك على سلة </p>
        <!-- row -->
        <div class="flex flex-row w-full mt-8 items-end text-center justify-items-center justify-center   #bg-yellow-600 ">
          <p class="px-2 mt-2 -mr-8 txt-color-purple  ">الباقات التي تقدمها منصة سلة</p>
          <div><span class="w-21 h-7 float-left mr-5 p-1 rounded-md  bg-yellow-500 text-xs text-white">ننصح بها</span><img alt="logo salla" src="{{ asset('images/salla-sm.png') }}" /></div>

        </div>
        <!-- button action row  -->
        <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-5 gap-4 p-2">
          <div class="bx w-40 h-10 px-2 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl">برو</div>
          <div class="bx w-40 h-10 px-2 py-1 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl font-black">بلس</div>
        </div>
        <!-- row #important -->
        <!-- <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-7 gap-4 p-2">
          <p class="px-3 mr-5 txt-color-purple">الباقات التي تقدمها منصة سلة</p><img alt="video compaire between zid and salla" src="{{ asset('images/icon_video.svg') }}" />
        </div> -->
        <div class="text-center items-center w-1/2">
          <p class="text-xs txt-color-purple ">الفرق الجوهري بين الباقتين هو ان متجرك بباقة برو سيكون مميزا عن باقي متاجر سلة بفضل ميزة ال
            برمجة سي اس اس
            <br>
            و غيرها من المميزات مثل حساب الضريبة و تحسين محركات البحث اس اي او
            <br>
            و إمكانية الربط مع الخدمات المحاسبية و غيرها من المميزات
          </p>
        </div>

      </div>

  </section>
  <!-- row switch -->
  <div class="bg-gray-100 flex flex-row h-16 items-center justify-center mt-2 mb-2 relative rounded-3xl w-full">
    <div class="salla-txt w-40 h-10 px-2 mr-18 text-center   cursor-pointer text-green-500     rounded-3xl text-3xl font-black">سلة</div>


    <!-- Toggle B -->
    <div class="flex items-center justify-center ">

      <label for="toggleB" class="flex items-center cursor-pointer">
        <!-- toggle -->
        <div class="relative">
          <!-- input -->
          <input type="checkbox" id="toggleB" class="sr-only">
          <!-- line -->
          <div class="sw-bg-css block bg-gray-500 w-14 h-8 rounded-full"></div>
          <!-- dot -->
          <div class="dot absolute left-1 top-1 bg-green w-6 h-6 rounded-full transition"></div>
        </div>
        <!-- label -->
        <div class="ml-3 text-gray-700 font-medium">
          <!-- اختصر المنصة -->
        </div>
      </label>

    </div>
    <div class="zid_txt w-40 h-10 px-2 mr-18 text-center   cursor-pointer  rounded-3xl text-3xl ">زد</div>

  </div>

  <section>

  </section>
  <!-- تسعيرات row 2 container -->
  <section class="flex flex-row  #bg-yellow-900 h-screen w-full items-center space-x-20 justify-center mt-1">
    <!-- pro -->
    <article class="price_salla w-1/3 h-full bg-green rounded-t-3xl  ">
      <!-- header list row -->
      <div class="flex flex-row relative #bg-yellow-900 w-full h-20 ">
        <p class=" text-white  absolute left-1/3  top-5  text-center  font-light  font_Cairo text-5xl   "><i class="text-sm p-3 float-left">ريال</i> 999 </p>
        <span class=" absolute w-20  h-10  text-center m-5 font-bold font_Cairo rounded-xl text-3xl  bg-white text-green-500 right-0">برو</span>
      </div>
      <!-- list col -->
      <ul class="#bg-red-400 flex flex-col h-3/4 items-center justify-items-center #overflow-y-scroll rtl-grid text-md ">

        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> تصميم بنر الرئيسي (عدد1)</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الشحن</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة المتجر</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة الشحن</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار خدمة الشحن المناسبة</p>
        </li>

        <li class="  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="li-opacity text-white h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الدفع الالكتروني</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة الاقسام وترتيبها</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector-ok.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="bg-white txt-color-green  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">تصميم واجهة المتجر بستخدام كود ال CSS </p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار الدومين المناسب</p>
        <li class="bg-green   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">اضافة حساب التواصل الاجتماعي</p>
        </li>
        <div class=" bg-white border-4 border-bg-green  p-5 rounded-3xl text-center text-3xl font-bold mx-2 txt-color-green w-full">
          <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">أطلب الان</a>
        </div>

      </ul>
    </article>
    <!-- plus -->
    <article class="price_salla  bg-green w-1/3 h-full  rounded-t-3xl ">
      <div class="flex flex-row relative #bg-yellow-900 w-full h-1/6 ">
        <p class=" absolute left-1/3  top-5  text-center  font-light  font_Cairo text-5xl   text-white "><i class="text-sm p-3 float-left">ريال</i> 899 </p>
        <span class=" absolute w-20  h-10  text-center m-5 font-bold font_Cairo rounded-xl text-3xl  bg-white txt-color-green right-0">بلس</span>
      </div>
      <!-- list col -->
      <ul class="#bg-red-400 flex flex-col h-3/4 items-center justify-items-center #overflow-y-scroll rtl-grid text-md ">

        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> تصميم بنر الرئيسي (عدد1)</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الشحن</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة المتجر</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة الشحن</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار خدمة الشحن المناسبة</p>
        </li>

        <li class="  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="li-opacity text-white h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الدفع الالكتروني</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة الاقسام وترتيبها</p>
        </li>

        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار الدومين المناسب</p>
        <li class="  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">اضافة حساب التواصل الاجتماعي</p>
        </li>
        <div class=" bg-white border-4 border-bg-green  p-5 rounded-3xl text-center text-3xl font-bold  mx-2 txt-color-green w-full">
          <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">أطلب الان</a>
        </div>

      </ul>
    </article>

    <!-- zid package -->
    <!-- نمو -->
    <article class="price_zid hidden w-1/3 h-full bg-purple rounded-t-3xl  ">
      <!-- header list row -->
      <div class="flex flex-row relative #bg-yellow-900 w-full h-20 ">
        <p class=" text-white  absolute left-1/3  top-5  text-center  font-light  font_Cairo text-5xl   "><i class="text-sm p-3 float-left">ريال</i> 999 </p>
        <span class=" absolute w-20  h-10  text-center m-5 font-bold font_Cairo rounded-xl text-2xl  bg-white txt-color-purple right-0">نمو</span>
      </div>
      <!-- list col -->
      <ul class="#bg-red-400 flex flex-col h-3/4 items-center justify-items-center #overflow-y-scroll rtl-grid text-md ">

        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> تصميم بنر الرئيسي (عدد1)</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الشحن</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة المتجر</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة الشحن</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار خدمة الشحن المناسبة</p>
        </li>

        <li class="  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="li-opacity text-white h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الدفع الالكتروني</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة الاقسام وترتيبها</p>
        </li>
        <!-- <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector-ok.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" bg-white txt-color-purple  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">اضافة منتجات وترتيبها عدد (5)</p>
        </li> -->
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector-ok.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="bg-white txt-color-purple  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">تصميم واجهة المتجر بستخدام كود ال CSS </p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار الدومين المناسب</p>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">اضافة حساب التواصل الاجتماعي</p>
        </li>
        <div class=" bg-white border-4 border-bg-purple   p-5 rounded-3xl text-center text-3xl font-bold mx-2 txt-color-purple w-full">
          <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">أطلب الان</a>
        </div>

      </ul>
    </article>
    <!-- الاساسي -->
    <article class="price_zid hidden  bg-purple w-1/3 h-full  rounded-t-3xl ">
      <div class="flex flex-row relative #bg-yellow-900 w-full h-1/6 ">
        <p class=" absolute left-1/3  top-5  text-center  font-light  font_Cairo text-5xl   text-white "><i class="text-sm p-3 float-left">ريال</i> 899 </p>
        <span class=" absolute w-20  h-10  text-center m-5 font-bold font_Cairo rounded-xl text-lg  bg-white txt-color-purple right-0">الاساسي</span>
      </div>
      <!-- list col -->
      <ul class="#bg-red-400 flex flex-col h-3/4 items-center justify-items-center #overflow-y-scroll rtl-grid text-md ">

        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> تصميم بنر الرئيسي (عدد1)</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الشحن</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة المتجر</p>
        </li>
        <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة صفحة سياسة الشحن</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار خدمة الشحن المناسبة</p>
        </li>

        <li class="  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="li-opacity text-white h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> ربط خدمات الدفع الالكتروني</p>
        </li>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اضافة الاقسام وترتيبها</p>
        </li>

        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> اختيار الدومين المناسب</p>
        <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
          <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
          <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">اضافة حساب التواصل الاجتماعي</p>
        </li>
        <div class=" bg-white border-4 border-bg-purple   p-5 rounded-3xl text-center text-3xl font-bold  mx-2 txt-color-purple w-full">
          <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">أطلب الان</a>
        </div>

      </ul>
    </article>
  </section>
  <!-- rating  -->
  <section id="flavoursContainer" class=" mt-28 gap-10 h-1/2 relative  flex  items-center overflow-x-scroll overscroll-y-none">
    <div class="w-1/3 h-18">
      <blockquote class="twitter-tweet w-1/3  overflow-x-scroll absolute">
        <p lang="ar" dir="rtl">رأي متجر شوب مي بخدماتنا 🎉😍🎈 <a href="https://t.co/EqJicTvtJA">pic.twitter.com/EqJicTvtJA</a></p>&mdash; بكج خدمات متجر سلة ᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠ (@package_dev) <a href="https://twitter.com/package_dev/status/1470352893517705223?ref_src=twsrc%5Etfw">December 13, 2021</a>
      </blockquote>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="w-1/3 h-18">
      <blockquote class="twitter-tweet">
        <p lang="ar" dir="rtl">دعم الفني واستشارات مجانية لعملائنا 😍 <a href="https://t.co/huFJDTNH0c">pic.twitter.com/huFJDTNH0c</a></p>&mdash; بكج خدمات متجر سلة ᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠ (@package_dev) <a href="https://twitter.com/package_dev/status/1470322611276165123?ref_src=twsrc%5Etfw">December 13, 2021</a>
      </blockquote>

    </div>
    <div class="w-1/3 h-18">
      <blockquote class="twitter-tweet">
        <p lang="ar" dir="rtl">راي متجر جودليات في عملنا 🥰👌<br>👇👇 <a href="https://t.co/XYCCdDfgpG">pic.twitter.com/XYCCdDfgpG</a></p>&mdash; بكج خدمات متجر سلة ᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠ (@package_dev) <a href="https://twitter.com/package_dev/status/1444481701040869376?ref_src=twsrc%5Etfw">October 3, 2021</a>
      </blockquote>

    </div>
    <div class="w-1/3 h-18">
      <blockquote class="twitter-tweet">
        <p lang="ar" dir="rtl">راي متجر &quot; عدسه &quot; في عملنا 😍👌<a href="https://twitter.com/hashtag/%D8%B3%D9%84%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#سلة</a> <a href="https://twitter.com/hashtag/%D8%B2%D8%AF?src=hash&amp;ref_src=twsrc%5Etfw">#زد</a> <a href="https://twitter.com/hashtag/%D9%85%D8%AA%D8%AC%D8%B1?src=hash&amp;ref_src=twsrc%5Etfw">#متجر</a> <a href="https://twitter.com/hashtag/%D9%81%D8%B1%D9%8A%D9%82_%D8%A8%D9%83%D8%AC?src=hash&amp;ref_src=twsrc%5Etfw">#فريق_بكج</a> <a href="https://t.co/0sHkeIrrfs">pic.twitter.com/0sHkeIrrfs</a></p>&mdash; بكج خدمات متجر سلة ᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠ (@package_dev) <a href="https://twitter.com/package_dev/status/1443151257791762436?ref_src=twsrc%5Etfw">September 29, 2021</a>
      </blockquote>

    </div>
    <div class="w-1/3 h-18">
      <blockquote class="twitter-tweet">
        <p lang="ar" dir="rtl">بكج تبارك لمتجر كروز للعطور تجهيز المتجر وبدأ في البيع 😍💖<a href="https://twitter.com/hashtag/%D8%B3%D9%84%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#سلة</a> <a href="https://twitter.com/hashtag/%D9%85%D8%AA%D8%AC%D8%B1_%D8%B3%D9%84%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#متجر_سلة</a> <a href="https://twitter.com/hashtag/%D8%AA%D8%B7%D8%A8%D9%8A%D9%82_%D8%B3%D9%84%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#تطبيق_سلة</a> <a href="https://t.co/Pb0ys3Ppno">pic.twitter.com/Pb0ys3Ppno</a></p>&mdash; بكج خدمات متجر سلة ᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠ (@package_dev) <a href="https://twitter.com/package_dev/status/1439235842548064263?ref_src=twsrc%5Etfw">September 18, 2021</a>
      </blockquote>

    </div>
    <div class="w-1/3 h-18"> </div>
    <div class="w-1/3 h-18"> </div>
    <div class="w-1/3 h-18">
      <blockquote class="twitter-tweet">
        <p lang="ar" dir="rtl">رأي متجر اورنج بعملنا بعد تجهيز المتجر له . <br>رابط المتجر: <a href="https://t.co/gblctJkH9Y">https://t.co/gblctJkH9Y</a> <br>.<br>.<br>اطلب متجرك الان : <a href="https://t.co/sla7hW4Oqf">https://t.co/sla7hW4Oqf</a> <a href="https://twitter.com/hashtag/%D8%B3%D9%84%D8%A9?src=hash&amp;ref_src=twsrc%5Etfw">#سلة</a> <a href="https://twitter.com/hashtag/%D8%B2%D8%AF?src=hash&amp;ref_src=twsrc%5Etfw">#زد</a> <a href="https://twitter.com/hashtag/%D9%85%D8%AA%D8%AC%D8%B1?src=hash&amp;ref_src=twsrc%5Etfw">#متجر</a> <a href="https://twitter.com/hashtag/%D9%85%D8%AA%D8%AC%D8%B1_%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A?src=hash&amp;ref_src=twsrc%5Etfw">#متجر_الكتروني</a> <a href="https://twitter.com/hashtag/web?src=hash&amp;ref_src=twsrc%5Etfw">#web</a> <a href="https://twitter.com/hashtag/%D8%AA%D8%B5%D9%85%D9%8A%D9%85?src=hash&amp;ref_src=twsrc%5Etfw">#تصميم</a> <a href="https://t.co/Yd9WI5K26q">pic.twitter.com/Yd9WI5K26q</a></p>&mdash; بكج خدمات متجر سلة ᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠᅠ (@package_dev) <a href="https://twitter.com/package_dev/status/1399352174161793037?ref_src=twsrc%5Etfw">May 31, 2021</a>
      </blockquote>
    </div>
  </section>




  <!-- شركاء النجاح -->
  <section class="flex flex-col h-screen #bg-green-200 w-full #bg-yellow-600 items-center justify-center">
    <div class="  text-center txt-color-purple text-6xl  font-black">
      <p>شركاء النجاح</p>
    </div>
    <!-- row -->
    <div class="flex flex-row  #bg-yellow-900 h-3/5 w-full items-center justify-center mt-6">
      <ul class="flex  h-full w-3/4 #bg-yellow-600 text-center items-center p-3 gap-3 justify-center">
        <li class="flex flex-col px-1 h-3/5  rounded-css-obj w-1/3  bg-gray-400 items-center gap-4  py-6">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/mada.png') }}">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/godaddy.png') }}">
        </li>
        <li class="flex flex-col px-1 h-full w-1/3 rounded-css-obj  bg-gray-400 items-center gap-6  py-4">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/smsa.png') }}">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/dhl.png') }}">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/aramex.png') }}">
        </li>
        <li class="flex flex-col px-1 h-full w-1/3 rounded-css-obj items-center gap-10  py-4">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/gllary.png') }}">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/mymtjar.png') }}">
          <img class="w-21 " alt="logo salla" src="{{ asset('images/adobe.png') }}">
        </li>
        <li class="flex flex-col p-2 h-full w-1/3  rounded-css-obj bg-gray-400 justify-items-center items-center gap-10">
          <img class="w-1/3 " alt="logo salla" src="{{ asset('images/salla-sm.png') }}">
          <img class="w-1/2 " alt="logo salla" src="{{ asset('images/zid-sm.png') }}">
          <img class="w-1/2 " alt="logo salla" src="{{ asset('images/m5azen.png') }}">
        </li>
      </ul>
    </div>
  </section>






  <footer class="footer-1 bg-gray-100 py-8 sm:py-12  flex   ">
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