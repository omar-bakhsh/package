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
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ mix('css/home.css') }}">
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="{{ mix('js/dragble.js') }}" defer></script>
  <style>

  </style>
</head>

<body class="r-0 mr-0 p-0  select-none">
  <header class="h-50 py-5 overflow-x-hidden max-w-full">
    <nav class="flex flex-row max-w-3/7 justify-evenly #bg-red-600  content-center   justify-items-center   list-none ">
      <a href="url('/')"> <img src="{{ asset('images/logo.png') }}" class="w-24 h-auto left-0 m-0 t-0   p-0 " /></a>
      <li class=" px-2 my-3 cursor-pointer">التطبيقات</li>
      <li class="px-2  my-3 cursor-pointer">التسويق</li>
      <li class="px-2   my-3 cursor-pointer">التصاميم</li>
      <li class=" mr-3 my-3 cursor-pointer">الرئيسية</li>
    </nav>
    <div id="mydiv" class="hidden">
      <div id="mydivheader"> الحاسبة ✥</div>
      <p> sr 0 :السعر</p>
      <p> 0 :العدد</p>
      <p> <input class="descount h-1 w-2 " placeholder="الصق الكود هنا " type="text" />:كود خصم</p>
      <p> sr 0 :الاجمالي</p>
    </div>

  </header>
  <div class="flex w-full flex-col  items-center content-center">
    <br>
    <h1>سجل معنا كمسوق بالعمولة وابدا بالربح الان </h1>
    <br>
    <p>20% سوف يتم تزويدك برقم الكود بعد تسجيل وحساب عمولتك </p>

    <div class="mt-15  p-5 ">


      <br>
      <div class="md:grid md:grid-cols-3 md:gap-6 ">

        <div class="mt-5 md:mt-0 md:col-span-2  ">
          <form action="#" method="POST" class="#">
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-purple-500 sm:p-6 lg:ml-24 sm:ml-1">
                <div class="grid grid-cols-6 gap-6">


                  <div class="col-span-6 sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-white">اللقب</label>
                    <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-white">الاسم الاول</label>
                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-4">
                    <label for="email_address" class="block text-sm font-medium text-white">الايميل</label>
                    <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-4">
                    <label for="email_address" class="block text-sm font-medium text-white">رقم الجوال</label>
                    <input type="text" name="+966555555555" id="email_address" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-white">اين تريد ان نرسل لك كود الخصم خاص بك </label>
                    <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>واتساب</option>
                      <option>ايميل</option>
                    </select>
                  </div>
                </div>
                <div class="px-4 py-3 bg-purple-500 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    ارسل
                  </button>
                </div>
              </div>
          </form>
        </div>
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
              <a href="{{route('development')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التطبيقات</a>
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
          <h5 class="text-xl font-bold mb-6">انضم الينا</h5>
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
              <a href="{{route('team')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">الفريق</a>
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