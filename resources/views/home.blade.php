<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- font aowsome icons -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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

<body class="r-0 mr-0 p-0  select-none  ">
  <header class="relative h-50  py-5  max-w-full ">

    <div class="w-full header_conatiner text-gray-700  dark-mode:text-gray-200 dark-mode:bg-gray-800">
      <div x-data="{ open: false }" class="flex  flex-row w-2/3  max-w-screen-xl px-1 mx-auto items-center md:items-center md:center md:flex-row md:px-6 lg:px-2">
        <div class="p-4 flex flex-row items-center justify-center">

          <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">التسعيرات</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">دروب شوبينج</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('development')}}">التسويق</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">التصميم</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">البرمجة</a>
          <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg bg-purple  dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-white" href="#">انشئ المتجر</a>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
              <span>المساعدة</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>

            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0  w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
              <div class="px-2 py-2 z-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">الاسئلة الشائعة</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">ابق على الاتصال</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">سياسة الخدمات</a>
              </div>
            </div>

          </div>
        </nav>
      </div>
    </div>
    <a href="#" class=" absolute inset-y-0 right-10 p-3  text-sm font-semibold tracking-widest  uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline text-yellow-500"> <img src="{{ asset('images/logo-s.png') }}" class="w-18 h-auto left-0 m-0 t-0   p-0 " /></a>

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
        <img src="{{ asset('images/box_pkg.png') }}" class="img_box  left-0 m-0 t-0 " />
      </div>
    </div>
    <!-- button action  -->
    <div class="#bg-pink-300 w-full  h-40 flex flex-row   -mt-10 text-center justify-items-center justify-center items-start align-middle  ">
      <div class=" py-4 px-10 cursor-pointer text-white text-center text-3xl  mt-0 h-20 rounded-xl bg-purple">انشئ متجرك</div>
    </div>
  </section>
  <section class="  w-full h-screen ">
    <div class="flex flex-row w-full h-auto mt-8">
      <div class="flex flex-col w-1/2 h-full border-2 items-center   p-2">
        <p class="txt-color-purple text-4xl #font_Cairo px-2 font-black">انشئ متجرك على زد </p>
        <div class="flex flex-row w-full mt-8  items-end text-center justify-items-center justify-center   #bg-yellow-600 ">
          <p class="px-3 mr-5 txt-color-purple">الباقات التي تقدمها منصة زد</p><img src="{{ asset('images/zid-sm.png') }}" />
        </div>
         <!-- button action  -->
        <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-7 gap-4 p-2">
          <div class="bx w-40 h-10 px-2 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl">الاساسية</div>
          <div class="bx w-40 h-10 px-2 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl font-black">نمو</div>
        </div>
        <!-- row -->
        <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-7 gap-4 p-2">
        <p class="px-3 mr-5 txt-color-purple">الباقات التي تقدمها منصة زد</p><img src="{{ asset('images/icon_video.svg') }}" />
        </div>
      </div>
      <div class="flex flex-col w-1/2 h-full border-2 items-center   p-2">
        <p class="txt-color-purple text-4xl #font_Cairo px-2 font-black">انشئ متجرك على سلة </p>
        <!-- row -->
        <div class="flex flex-row w-full mt-8 items-end text-center justify-items-center justify-center   #bg-yellow-600 ">
          <p class="px-2 mt-2 -mr-8 txt-color-purple  ">الباقات التي تقدمها منصة سلة</p>
          <div><span class="w-21 h-7 float-left mr-5 p-1 rounded-md  bg-yellow-500 text-xs text-white">ننصح بها</span><img src="{{ asset('images/salla-sm.png') }}" /></div>

        </div>
       <!-- button action row  --> 
        <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-5 gap-4 p-2">
          <div class="bx w-40 h-10 px-2 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl">برو</div>
          <div class="bx w-40 h-10 px-2 py-1 mr-18 text-center  border-4 txt-color-purple   rounded-lg text-3xl font-black">بلس</div>
        </div>
        <!-- row -->
        <div class="w-1/2 h-500 flex flex-row #bg-red-400 items-center  justify-center mt-7 gap-4 p-2">
        <p class="px-3 mr-5 txt-color-purple">الباقات التي تقدمها منصة سلة</p><img src="{{ asset('images/icon_video.svg') }}" />
       </div>
       <div class="text-center items-center w-1/2">
         <p class="text-xs txt-color-purple ">الفرق الجوهري بين الباقتين هو ان متجرك بباقة برو سيكون مميزا عن باقي متاجر سلة بفضل ميزة ال
            برمجة سي اس اس
            <br>
            و غيرها من المميزات مثل حساب الضريبة و تحسين محركات البحث اس اي او 
            <br>
            و إمكانية الربط مع الخدمات المحاسبية و غيرها من المميزات</p>
        </div>
      </div>
  </section>






  <footer class="footer-1 bg-gray-100 py-8 sm:py-12  flex   ">
    <button onclick="window.scrollBy(0, -2000);" class="up_icon" alt="اعلى الصفحة"><i class="fad fa-angle-up text-7xl text-yellow-500  ml-7"></i></button>
    <div class="container mx-auto px-4">
      <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 flex flex-col ">
          <h5 class=" text-center lg:text-left   text-xl font-bold mb-6">الخدمات</h5>
          <ul class="list-none flex sm:flex-row lg:flex-col  footer-links px-2">
            <li class="mb-2 mx-2">
              <a href="{{route('development')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التطبيقات</a>
            </li>
            <li class="mb-2 mx-1">
              <a href="{{route('design')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التصاميم</a>
            </li>
            <li class="mb-2 mx-1">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق</a>
            </li>
            <li class="mb-2 mx-1">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800"></a>
            </li>
            <li class="mb-2 mx-1">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الرئيسية</a>
            </li>
          </ul>
        </div>
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0 flex flex-col">
          <h5 class=" text-center lg:text-left  text-xl font-bold mb-6">انضم الينا</h5>
          <ul class="list-none flex sm:flex-row lg:flex-col footer-links px-2">
            <li class="mb-2 mx-3">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">اعمالنا</a>
            </li>
            <li class="mb-2 mx-3">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">شركاء النجاح</a>
            </li>
            <li class="mb-2 mx-3">
              <a href="https://t.me/sallla_site" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">المجتمعات</a>
            </li>
            <li class="mb-2 mx-3">
              <a href="{{route('coupon')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق بالعمولة</a>
            </li>
          </ul>
        </div>
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0 flex flex-col ">
          <h5 class=" text-center lg:text-left  xl:justify-end text-xl font-bold mb-6 ">حول</h5>
          <ul class="  list-none flex sm:flex-row lg:flex-col footer-links  px-2">
            <li class="mb-2 mx-1">
              <a href="{{route('team')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الفريق</a>
            </li>
            <li class="mb-2 mx-2">
              <a href="#" class="justify-center border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الموقع</a>
            </li>
            <li class="mb-2 mx-2 ">
              <a href="#" class="  justify-center border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800 ">الخصوصية</a>
            </li>
            <li class="mb-2 ">
              <a href="{{route('service_policy')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">سياسة الخدمات</a>
            </li>
          </ul>
        </div>
        <div class="px-4 ml-3 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0 flex flex-col  ">
          <h5 class="text-xl font-bold mb-6 text-center lg:text-left    justify-center">المساعدة </h5>
          <ul class="px-2 flex sm:flex-row lg:flex-col  list-none footer-links">
            <li class="mb-2 mx-1">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">المساعدة</a>
            </li>
            <li class="mb-2 mx-2">
              <a href="https://wa.me/966543201512" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الاسئلة الشائعة</a>
            </li>
            <li class="mb-2 mx-2">
              <a href="https://wa.me/966543201512" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">ابق على الاتصال</a>
            </li>
          </ul>
        </div>
        <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto flex flex-col items-center ">

          <div class="flex sm:justify-center xl:justify-start">
            <a href="https://www.facebook.com/package.developer" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://twitter.com/package_dev" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/package.developer/" class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-red-600 hover:border-red-600">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>


    </div>
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