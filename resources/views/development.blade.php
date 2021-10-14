<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>بكج برمجة</title>
    <!-- font aowsome icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

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

<body class="  select-none">
    <header class="h-50 py-5 overflow-x-hidden max-w-full">
        <nav class="flex flex-row max-w-3/7 justify-evenly #bg-red-600  content-center   justify-items-center   list-none ">
            <img src="{{ asset('images/logo.png') }}"  class="w-24 h-auto left-0 m-0 t-0   p-0 "></img>
            <li class=" px-2 my-3 cursor-pointer">التطبيقات</li>
            <li class="px-2  my-3 cursor-pointer">التسويق</li>
            <li class="px-2   my-3 cursor-pointer">التصاميم</li>
            <li class=" mr-3 my-3 cursor-pointer">الرئيسية</li>
        </nav>

    </header>
    <div class="waves-container transform rotate-180 w-full  overflow-x-hidden">
        <div class="waves top-20"><svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 590 100">
                <defs>
                    <linearGradient id="waves-a" x1="0%" y1="50%" y2="50%">
                        <stop offset="0%" stop-color="#f00"></stop>
                        <stop offset="100%" stop-color="#f00"></stop>
                    </linearGradient>
                    <linearGradient id="waves-b" x1=".258%" x2="101.258%" y1="49.75%" y2="49.75%">
                        <stop offset="0%" stop-color="#f00"></stop>
                        <stop offset="47.525%" stop-color="#f00"></stop>
                        <stop offset="100%" stop-color="#f00"></stop>
                    </linearGradient>
                    <linearGradient id="waves-c" x1=".258%" x2="101.258%" y1="49.75%" y2="49.75%">
                        <stop offset="0%" stop-color="#00446f"></stop>
                        <stop offset="47.525%" stop-color="#53A0FD"></stop>
                        <stop offset="100%" stop-color="#00446f"></stop>
                    </linearGradient>
                </defs>
                <path class="path-1" fill="#f00" d="M-2.48689958e-14,-7.38298311e-14 C100,-7.38298311e-14 167,50 267,50 C367,50 432,-6.54950269e-14 532,-7.38298311e-14 C632,-8.21565038e-14 700,50 800,50 C800,133.404483 800,150.071149 800,100 L5.20093986e-14,100 C-9.70686797e-17,134.422833 -2.57232001e-14,101.0895 -2.48689958e-14,-7.38298311e-14 Z" opacity=".6"></path>
                <path class="path-2" fill="url(#waves-b)" d="M-2.48689958e-14,-7.38298311e-14 C100,-7.38298311e-14 167,50 267,50 C367,50 432,-6.54950269e-14 532,-7.38298311e-14 C632,-8.21565038e-14 700,50 800,50 C800,133.404483 800,150.071149 800,100 L5.20093986e-14,100 C-9.70686797e-17,134.422833 -2.57232001e-14,101.0895 -2.48689958e-14,-7.38298311e-14 Z" opacity=".15"></path>
                <path class="path-3" fill="url(#waves-c)" d="M-2.48689958e-14,-7.38298311e-14 C100,-7.38298311e-14 167,50 267,50 C367,50 432,-6.54950269e-14 532,-7.38298311e-14 C632,-8.21565038e-14 700,50 800,50 C800,133.404483 800,150.071149 800,100 L5.20093986e-14,100 C-9.70686797e-17,134.422833 -2.57232001e-14,101.0895 -2.48689958e-14,-7.38298311e-14 Z"></path>
            </svg></div>
    </div>
    <div class="w-full flex flex-row  content-center text-center items-center justify-center"><h1 class="bg-purple-500 rounded-md text-white p-4 w-1/3">اطارات العمل والتقنيات</h1></div>
    <!-- row -->
    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-full flex flex-row items-center ">
 <!-- react card -->
        <article class="overflow-hidden rounded-lg shadow-lg flex flex-col items-center content-center h-full w-1/2 p-3">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-80" src="https://onepatch.com/wp-content/uploads/2020/03/REACT_NATIVE.gif">
          </a>
            <h1>تطبيقات<a href="https://www.rokkey.com/%D9%85%D8%A7%D9%87%D9%88-react-native-%D8%9F-%D9%88%D9%84%D9%85%D8%A7%D8%B0%D8%A7-%D9%8A%D8%AA%D9%85-%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85%D9%87%D8%9F"> رياكت نيتف </a> </h1>
        </article>
         <!-- flutter card -->
        <article class="overflow-hidden rounded-lg shadow-lg flex flex-col items-center content-center h-full w-1/2 p-3">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-80" src="https://miro.medium.com/max/900/1*ADxa8DAu2pT66Nv3roRsvA.gif">
          </a>
            <h1> تطبيقات <a href="#"> فلاتر </a> </h1>

        </article>
         <!-- laravel card -->
         <article class="overflow-hidden rounded-lg shadow-lg flex flex-col items-center content-center h-full w-1/2 p-3">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-80" src="https://onepatch.com/wp-content/uploads/2020/03/LARAVEL_CIRCLES_NEW.gif">
          </a>
            <h1> مواقع ويب <a href="#"> لارفال </a> </h1>

    </div>





    
    <div class="w-full flex flex-row  content-center text-center items-center justify-center"><h1 class="bg-purple-500 rounded-md text-white p-4 w-1/3">اللغات البرمجية والخبرات</h1></div>
    <!-- row -->
    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-full flex flex-row items-center ">
 <!-- js card -->
        <article class="overflow-hidden rounded-lg shadow-lg flex flex-col items-center content-center h-full w-1/2 p-3">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-80" src="https://www.freepnglogos.com/uploads/javascript-png/javascript-vector-logo-yellow-png-transparent-javascript-vector-12.png">
          </a>
            <h1><a href="https://www.rokkey.com/%D9%85%D8%A7%D9%87%D9%88-react-native-%D8%9F-%D9%88%D9%84%D9%85%D8%A7%D8%B0%D8%A7-%D9%8A%D8%AA%D9%85-%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85%D9%87%D8%9F">جافاسكريبت </a> </h1>
        </article>
         <!-- php card -->
        <article class="overflow-hidden rounded-lg shadow-lg flex flex-col items-center content-center h-full w-1/2 p-3">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-80" src="data:image/png;base64,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">
          </a>
            <h1><a href="#"> php </a> </h1>

        </article>
         <!-- css card -->
         <article class="overflow-hidden rounded-lg shadow-lg flex flex-col items-center content-center w-1/2 p-3">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-80" src="https://www.iconninja.com/files/64/358/407/css3-icon.svg">
          </a>
            <h1> مواقع ويب <a href="#"> لارفال </a> </h1>

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
                            <a href="{{route('coupon')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق</a>
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