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

  <!-- Styles -->
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dragble.js') }}" defer></script>
  <style>

  </style>
</head>

<body class="r-0 mr-0 p-0  select-none">
  <header class="h-50 w-full py-5">
    <nav class="flex flex-row w-full h-full justify-center #bg-red-600  content-center   justify-items-center  list-none ">
      <img src="{{ asset('images/logo.png') }}" width="90px" height="90px" class="left-0 m-0 t-0   p-0 "></img>
      <li class="px-3 mx-3 my-3 cursor-pointer">تطبيقات</li>
      <li class="px-3 mx-3 my-3 cursor-pointer">التسويق</li>
      <li class="px-3 mx-3 my-3 cursor-pointer">التصاميم</li>
      <li class="px-5 mx-2 my-3 cursor-pointer">الرئيسية</li>
    </nav>

  </header>


  <div class="flex flex-col items-center h-screen justify-center text-center  mb-5 mt-2">

    <!-- drop shoping -->
    <article class=" bg-yellow-500 w-2/5 h-full   rounded-t-3xl ">
      <p class="text-white p-3 m-1">برمجة موقع الكتروني لارفال</p>
      <div class="flex flex-row relative #bg-yellow-900 w-full h-20 ">
        <p class=" absolute left-1/3  top-5  text-center  font-light  font_Cairo text-5xl   text-white "><i class="text-sm p-3 float-left">ريال</i> 5999 </p>
        <span class=" absolute w-1/3  h-10  text-center m-5 font-bold font_Cairo rounded-xl text-3xl  bg-white text-yellow-500 right-0">قريبا موقع</span>
      </div>
      <!-- list col -->
      <!-- <ul class="#bg-red-400 flex flex-col h-5/6 items-center justify-items-center overflow-x-hidden overflow-y-scroll rtl-grid text-md w-full "> -->

      <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> تصميم الواجهة المستخدم</p>
      </li>
      <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">كتابة المحتوى</p>
      </li>
      <li class="#li-opacity   flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> برمجة الموقع باحدث التقنيات</p>
      </li>

      <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">ربط مع دومين </p>
      </li>

      <li class="  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class="li-opacity text-white h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> رفع على السيرفر</p>
      </li>
      <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> امتلاك سورس كود</p>
      </li>

      <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class="text-white li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4"> قابل للتطوير</p>
      <li class="#bg-white  flex-row flex py-1 justify-center items-center  w-full">
        <img alt="list package salla " src="{{ asset('images/Vector.png') }}" class="h-6 inline mt-2 ml-7 rtl ">
        <p class=" text-white  li-opacity  h-10 overflow-hidden py-2 mt-2 rounded-3xl w-3/4">سرعة في الاداء</p>
      </li>


      <div class=" bg-white mt-2 p-3 rounded-3xl text-center text-2xl font-bold  ml-14 txt-color-purple w-5/6">
        <a href="https://wa.me/966543201512" target="__blank" aria-label="أطلب الان">أطلب الان</a>
      </div>
    </article>

  </div>

  <div class="text-center  ">
    <div class="flex mt-14 sm:inline-flex flex-col items-center justify-center lg:inline-grid lg:grid-rows-[auto,auto] lg:grid-cols-[1fr,1fr,1fr] xl:grid-rows-1 xl:grid-cols-[auto,1fr,1fr,1fr] lg:items-stretch xl:gap-x-10 text-sm xl:-mb-5">
      <div class="relative z-20 w-full max-w-sm sm:max-w-none lg:col-span-3 xl:col-span-1">
        <div class="hidden sm:block xl:hidden absolute inset-0 rounded-xl bg-gradient-to-b from-teal-400 via-teal-400 to-transparent opacity-15 filter blur-[52px]"></div>
        <div class="hidden xl:block absolute inset-x-0 top-5 bottom-11 rounded-xl bg-gradient-to-b from-teal-400 to-indigo-500 opacity-15 filter blur-[52px]"></div>

        <div class="relative bg-gradient-to-b from-teal-400 to-gray-900 sm:to-teal-400/20 xl:to-gray-900 rounded-xl p-px sm:shadow-md">
          <div class="rounded-xl bg-gray-900 pt-16 pb-10 sm:py-12 xl:pt-16 xl:pb-8">
            <div class="sm:grid sm:grid-cols-2 lg:grid-cols-[auto,1fr] sm:items-center sm:gap-x-10 md:gap-x-24 lg:gap-x-16 xl:flex xl:flex-col px-8 md:px-12 xl:px-14 text-white">
              <div>
                <h2 class="font-semibold uppercase tracking-wide text-center mb-2">
                  تطبيق اندرويد
                </h2>

                <h3 class="sr-only">سعر</h3>
                <div class="text-base font-medium mb-10 sm:mb-8 lg:mb-10">
                  <span class="flex items-center justify-center">
                    <del class="text-gray-400">9000</del>
                    <ins class="text-5xl tracking-tight text-teal-400 font-extrabold no-underline mx-3">5999</ins>
                    <span>ريال</span>
                  </span>
                </div>

                <div class="hidden sm:block xl:hidden">
                  <a href="/checkout/aa651062-caee-4517-b83a-d2aed4cd00cc" class="block mx-auto text-center w-60 md:w-64 xl:w-60 bg-teal-400 text-teal-900 hover:bg-teal-300 rounded-lg font-semibold p-3 mb-6 focus:outline-none focus-visible:ring-2 focus-visible:ring-teal-400 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
                  <p class="flex justify-center">
                    <a href="#team-pricing" class="flex items-center bg-gray-800 hover:bg-gray-700 text-gray-200 rounded-full whitespace-nowrap py-1 px-3">
                      <span>ماهي السياسات? <span class="text-teal-400 font-medium">أقرأ</span></span>
                      <svg aria-hidden="true" width="11" height="10" fill="none" class="ml-1.5 flex-none">
                        <path d="M5.593 9.277l4.639-4.638L5.593 0l-.895.89 3.107 3.102H0v1.293h7.805L4.698 8.392l.895.885z" fill="#22D3EE"></path>
                      </svg>
                    </a>
                  </p>
                </div>
              </div>

              <div class="mb-8 sm:mb-0 xl:mb-12 flex flex-col items-center sm:block">
                <h3 class="sr-only">قريبا جدا</h3>
                <ul role="list" class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-4 xl:grid-cols-1">
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                  <li class="flex items-center lg:w-64 xl:w-auto">
                    <svg aria-hidden="true" width="12" height="8" fill="none" class="text-teal-400 mr-3">
                      <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                    </svg>
                    قريبا
                  </li>
                </ul>
              </div>

              <div class="sm:hidden xl:block">
                <a href="/checkout/aa651062-caee-4517-b83a-d2aed4cd00cc" class="block mx-auto text-center w-60 md:w-64 xl:w-60 bg-teal-400 text-teal-900 hover:bg-teal-300 rounded-lg font-semibold p-3 mb-6 focus:outline-none focus-visible:ring-2 focus-visible:ring-teal-400 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
                <p class="flex justify-center">
                  <a href="#team-pricing" class="flex items-center bg-gray-800 hover:bg-gray-700 text-gray-200 rounded-full whitespace-nowrap py-1 px-3">
                    <span>ماهي سياسة الخدمات ? <span class="text-teal-400 font-medium">أقرأ</span></span>
                    <svg aria-hidden="true" width="11" height="10" fill="none" class="ml-1.5 flex-none">
                      <path d="M5.593 9.277l4.639-4.638L5.593 0l-.895.89 3.107 3.102H0v1.293h7.805L4.698 8.392l.895.885z" fill="#22D3EE"></path>
                    </svg>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sm:hidden w-full max-w-sm h-0.5 bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-30 mt-6"></div>

      <div class="bg-yellow-600 sm:grid sm:items-center sm:grid-cols-2 sm:gap-x-10 md:gap-x-24 border border-transparent lg:flex lg:flex-col py-16 sm:py-20 xl:pt-16 xl:pb-[5.25rem]">
        <div>
          <h2 class="text-white font-semibold uppercase tracking-wide text-center mb-2">تصميم UI/UX </h2>

          <h3 class="sr-only">Price</h3>
          <div class="text-base font-medium text-gray-400 mb-10 sm:mb-8 lg:mb-10">
            <span class="flex items-center justify-center">
              <span class="text-5xl tracking-tight text-white font-extrabold mx-3">1999</span>
              <span class="text-white">ريال</span>
            </span>
          </div>

          <a href="/checkout/0ed326ca-c1fc-440b-b1ba-bdfb01c43185" class="hidden sm:block lg:hidden mx-auto text-center w-60 md:w-64 bg-gray-700 text-gray-200 hover:bg-gray-600 rounded-lg font-semibold p-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
        </div>

        <div class="text-white lg:flex lg:flex-col lg:items-center lg:mb-auto">
          <h3 class="sr-only">قريبا جدا</h3>
          <ul role="list" class="space-y-4">
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
          </ul>
        </div>

        <a href="/checkout/0ed326ca-c1fc-440b-b1ba-bdfb01c43185" class="block sm:hidden lg:block mt-8 lg:mt-12 mx-auto text-center w-60 md:w-64 xl:w-60 bg-gray-700 text-gray-200 hover:bg-gray-600 rounded-lg font-semibold p-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
      </div>

      <div class="lg:hidden w-full max-w-sm h-0.5 bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-30"></div>

      <div class="bg-yellow-500 sm:grid sm:items-center sm:grid-cols-2 sm:gap-x-10 md:gap-x-24 border border-transparent lg:flex lg:flex-col py-16 sm:py-20 xl:pt-16 xl:pb-[5.25rem]">
        <div>
          <h2 class="text-white font-semibold uppercase tracking-wide text-center mb-2">SEO تحسين محركات البحث </h2>

          <h3 class="sr-only">سعر</h3>
          <div class="text-base font-medium text-gray-400 mb-10 sm:mb-8 lg:mb-10">
            <span class="flex items-center justify-center">
              <span class="text-5xl tracking-tight text-white font-extrabold mx-3">1500</span>
              <span class="text-white">ريال</span>
            </span>
          </div>

          <a href="/checkout/1ab56599-ff3e-4666-9686-edda6c81c82a" class="hidden sm:block lg:hidden mx-auto text-center w-60 md:w-64 bg-gray-700 text-gray-200 hover:bg-gray-600 rounded-lg font-semibold p-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
        </div>

        <div class="text-white lg:flex lg:flex-col lg:items-center lg:mb-auto">
          <h3 class="sr-only">قريبا جدا</h3>
          <ul role="list" class="space-y-4">
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
          </ul>
        </div>

        <a href="/checkout/1ab56599-ff3e-4666-9686-edda6c81c82a" class="block sm:hidden lg:block mt-8 lg:mt-12 mx-auto text-center w-60 md:w-64 xl:w-60 bg-gray-700 text-gray-200 hover:bg-gray-600 rounded-lg font-semibold p-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
      </div>

      <div class="lg:hidden w-full max-w-sm h-0.5 bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-30"></div>

      <div class="bg-yellow-400 sm:grid sm:items-center sm:grid-cols-2 sm:gap-x-10 md:gap-x-24 border border-transparent lg:flex lg:flex-col py-16 sm:py-20 xl:pt-16 xl:pb-[5.25rem]">
        <div>
          <h2 class="text-white font-semibold uppercase tracking-wide text-center mb-2">التسويق</h2>

          <h3 class="sr-only">Price</h3>
          <div class="text-base font-medium text-gray-400 mb-10 sm:mb-8 lg:mb-10">
            <span class="flex items-center justify-center">
              <span class="text-5xl tracking-tight text-white font-extrabold mx-3">500</span>
              <span class="text-white">ريال</span>
            </span>
          </div>

          <a href="/checkout/7b7130a6-68aa-49cb-9f13-818720c60fe8" class="hidden sm:block lg:hidden mx-auto text-center w-60 md:w-64 bg-gray-700 text-gray-200 hover:bg-gray-600 rounded-lg font-semibold p-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
        </div>

        <div class="text-white lg:flex lg:flex-col lg:items-center lg:mb-auto">
          <h3 class="sr-only">قريبا جدا</h3>
          <ul role="list" class="space-y-4">
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
            <li class="flex items-center">
              <svg width="12" height="8" fill="none" class="text-gray-400 mr-3">
                <path d="M1.5 4.5l2.236 2.236a1 1 0 001.467-.056L10.5.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
              قريبا
            </li>
          </ul>
        </div>

        <a href="/checkout/7b7130a6-68aa-49cb-9f13-818720c60fe8" class="block sm:hidden lg:block mt-8 lg:mt-12 mx-auto text-center w-60 md:w-64 xl:w-60 bg-gray-700 text-gray-200 hover:bg-gray-600 rounded-lg font-semibold p-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">طلب هذه الباقة</a>
      </div>
    </div>
  </div>



  <footer class="footer-1 bg-gray-100 py-8 sm:py-12">
    <div class="container mx-auto px-4">
      <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
          <h5 class="text-xl font-bold mb-6">الخدمات</h5>
          <ul class="list-none footer-links">
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التطبيقات</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التصاميم</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800"></a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الرئيسية</a>
            </li>
          </ul>
        </div>
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
          <h5 class="text-xl font-bold mb-6">المصادر</h5>
          <ul class="list-none footer-links">
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">اعمالنا</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">شركاء النجاح</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق بالعمولة</a>
            </li>
          </ul>
        </div>
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
          <h5 class="text-xl font-bold mb-6">حول</h5>
          <ul class="list-none footer-links">
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الفريق</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الموقع</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الخصوصية</a>
            </li>
            <li class="mb-2">
              <a href="{{route('service_policy')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">سياسة الخدمات</a>
            </li>
          </ul>
        </div>
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
          <h5 class="text-xl font-bold mb-6">المساعدة </h5>
          <ul class="list-none footer-links">
            <li class="mb-2">
              <a href="https://wa.me/966543201512" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الاسئلة الشائعة</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">المساعدة</a>
            </li>
            <li class="mb-2">
              <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">تواصل معنا</a>
            </li>
          </ul>
        </div>
        <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
          <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-left">ابق على الاتصال</h5>
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