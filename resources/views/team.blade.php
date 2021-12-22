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
  <header class="h-50 w-full py-5">
    <nav class="flex flex-row w-full h-full justify-center #bg-red-600  content-center   justify-items-center  list-none ">
      <img src="{{ asset('images/logo.png') }}" width="90px" height="90px" class="left-0 m-0 t-0   p-0 "></img>
      <li class="px-3 mx-3 my-3 cursor-pointer">تطبيقات</li>
      <li class="px-3 mx-3 my-3 cursor-pointer">التسويق</li>
      <li class="px-3 mx-3 my-3 cursor-pointer">التصاميم</li>
      <li class="px-5 mx-2 my-3 cursor-pointer">الرئيسية</li>
    </nav>

  </header>

  <div class="w-full flex flex-row  content-center text-center items-center justify-center">
    <h1 class="bg-purple-500 rounded-md text-white p-4 w-1/3">فريق العمل</h1>
  </div>
  <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg">

          <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="https://media-exp1.licdn.com/dms/image/D4E35AQEWepCnQ_E7oQ/profile-framedphoto-shrink_400_400/0/1621871434896?e=1633492800&v=beta&t=l5NQgVtQnhQuVDh1Mz0rCr-gGj0cia7GtCp5qkH6r_k">
          </a>

          <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
              <a class="no-underline hover:underline text-black" href="#">
                Front-end Developer
              </a>
            </h1>
            <p class="text-green-200 text-sm">
              متوفر
            </p>
          </header>

          <footer class="flex items-center justify-between leading-none p-2 md:p-4">
            <a class="flex items-center no-underline hover:underline text-black" href="#">
              <img alt="Placeholder" class="block rounded-full h-8" src="https://media-exp1.licdn.com/dms/image/D4E35AQEWepCnQ_E7oQ/profile-framedphoto-shrink_400_400/0/1621871434896?e=1633492800&v=beta&t=l5NQgVtQnhQuVDh1Mz0rCr-gGj0cia7GtCp5qkH6r_k">
              <p class="ml-2 text-sm">
                omar
              </p>
            </a>
            <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
              <span class="hidden">Like</span>
              <i class="fa fa-heart"></i>
            </a>
          </footer>

        </article>
        <!-- END Article -->

      </div>
      <!-- END Column -->

      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg">

          <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="https://media-exp1.licdn.com/dms/image/C5603AQEGbLKtzLto8g/profile-displayphoto-shrink_400_400/0/1603834774992?e=1639008000&v=beta&t=tiEtadsWojBchnWGvvsowURfnZg_PqQe3rbnp3QeQJw">
          </a>

          <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
              <a class="no-underline hover:underline text-black" href="#">
                back-end Developer
              </a>
            </h1>
            <p class="text-green-200 text-sm">
              متوفر
            </p>
          </header>

          <footer class="flex items-center justify-between leading-none p-2 md:p-4">
            <a class="flex items-center no-underline hover:underline text-black" href="#">
              <img alt="Placeholder" class="block rounded-full w-4 h-4" src="https://media-exp1.licdn.com/dms/image/C5603AQEGbLKtzLto8g/profile-displayphoto-shrink_400_400/0/1603834774992?e=1639008000&v=beta&t=tiEtadsWojBchnWGvvsowURfnZg_PqQe3rbnp3QeQJw">
              <p class="ml-2 text-sm">
                faisal
              </p>
            </a>
            <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
              <span class="hidden">Like</span>
              <i class="fa fa-heart"></i>
            </a>
          </footer>

        </article>
        <!-- END Article -->

      </div>
      <!-- END Column -->

      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg">

          <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/800/800/?random">
          </a>

          <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
              <a class="no-underline hover:underline text-black" href="#">
                Designer
              </a>
            </h1>
            <p class="text-green-200 text-sm">
              متوفر
            </p>
          </header>

          <footer class="flex items-center justify-between leading-none p-2 md:p-4">
            <a class="flex items-center no-underline hover:underline text-black" href="#">
              <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
              <p class="ml-2 text-sm">
                osman
              </p>
            </a>
            <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
              <span class="hidden">Like</span>
              <i class="fa fa-heart"></i>
            </a>
          </footer>

        </article>
        <!-- END Article -->
      </div>
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg">

          <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/800/800/?random">
          </a>

          <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
              <a class="no-underline hover:underline text-black" href="#">
                Data-Entery
              </a>
            </h1>
            <p class="text-green-200 text-sm">
              متوفر
            </p>
          </header>

          <footer class="flex items-center justify-between leading-none p-2 md:p-4">
            <a class="flex items-center no-underline hover:underline text-black" href="#">
              <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
              <p class="ml-2 text-sm">
                R
              </p>
            </a>
            <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
              <span class="hidden">Like</span>
              <i class="fa fa-heart"></i>
            </a>
          </footer>

        </article>
        <!-- END Article -->
      </div>
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg">

          <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/32/32/?random">
          </a>

          <header class="flex items-center justify-between leading-tight p-2 md:p-4">
            <h1 class="text-lg">
              <a class="no-underline hover:underline text-black" href="#">
                Accountent
              </a>
            </h1>
            <p class="text-green-200 text-sm">
              متوفر
            </p>
          </header>

          <footer class="flex items-center justify-between leading-none p-2 md:p-4">
            <a class="flex items-center no-underline hover:underline text-black" href="#">
              <img alt="Placeholder" class="block rounded-full h-8" src="https://picsum.photos/32/32/?random">
              <p class="ml-2 text-sm">
                imran
              </p>
            </a>
            <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
              <span class="hidden">Like</span>
              <i class="fa fa-heart"></i>
            </a>
          </footer>

        </article>
        <!-- END Article -->

      </div>
      <!-- END Column -->


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