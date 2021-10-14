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
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ mix('css/home.css') }}">
  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="{{ mix('js/dragble.js') }}" defer></script>
  <style>

  </style>
</head>

<body class="r-0 mr-0 p-0  select-none ">
<header class="h-50  py-5 overflow-x-hidden max-w-full ">
  <nav class=" flex flex-row max-w-3/7 justify-evenly #bg-red-600  content-center   justify-items-center   list-none ">
            <img src="{{ asset('images/logo.png') }}"  class="w-24 h-auto left-0 m-0 t-0   p-0 "></img>
            <a href="{{route('development')}}"><li class=" px-2 my-3 cursor-pointer">التطبيقات</li></a>
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
  <section class="flex flex-row ml-50  h-40 md:h-30 w-full md:w-full right-0   #bg-blue-400 justify-end md:justify-end justify-items-end content-end ">
    <div class="continer_first z-1 relative flex flex-col justify-items-center content-center p-4 #bg-green-700 mr-8">
    <p class=" text-yellow-500 bolder font-bold text-4xl absolute right-10 top-0"> بكج للبرمجيات</p>
      <p class=" text-2xl mt-10 bg-yellow-300 ">  رواد صناعة المتاجر الإلكترونية ومواقع الإنترنت والتطبيقات</p>
      <p class=" text-2xl  absolute right-0 bottom-0 m-5 bg-yellow-100 ">
      كل مايحتاجه التاجر
          خطوة بخطوة</p>
    </div>
  </section>
  <div class="anmition_container w-full h-screen #bg-blue-800 flex ">

    <aside class="relative #bg-red-500 w-1/2 lg:gap-10 flex flex-col">
      <img class="mt-0 top-0 w-52 lg:w-72 " src="{{ asset('images/aqua.svg') }}" alt="aqua" />
      <img class="z-2 absolute left-0 ml-11 mt-5 w-52 lg:w-72" src="{{ asset('images/hand_2.svg')}}" alt="حدد باقتك">

      <img class=" absolute bottom-10 w-52 lg:w-72" src="{{ asset('images/purple.svg') }}" alt="purple" />
      <img class="z-2  absolute bottom-0 mb-3 ml-11 w-52 lg:w-72" src="{{ asset('images/hand_3.svg')}}">
    </aside>


    <aside class=" relative  #bg-green-500 w-1/2 flex flex-col justify-center justify-items-center content-start">
      <img class="svg_y absolute  right-0  w-52 lg:w-72" src="{{ asset('images/yellow.svg') }}" alt="yellow" />
      <img class="z-2 absolute right-11  w-52 lg:w-72" src="{{ asset('images/hand_1.svg')}}">
    </aside>

  </div>



  <!-- block container -->
  <div class="flex flex-col  w-screen h-auto    justify-items-center ">


    <!-- salla start -->
    <div class="salla relative w-full h-auto flex flex-col ">

     <!-- row platform list -->
      <div class="flex flex-row w-full items-center  justify-center overflow-x-hidden bg-blue-100 p-3">
      
              <img class="  z-3  h-auto w-1/4 px-2" src="{{ asset('images/s_zid.svg')}}">
                    <img class="  z-3  h-auto w-1/4  px-2" src="{{ asset('images/s_g.svg')}}">
                      <img class="  z-3  h-auto w-1/4 px-2" src="{{ asset('images/s_salla.svg')}}">

      </div>
      <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">




          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

              <a href="#" class="grid grid-cols-1 gap-14 place-content-around  w-full p-5 text-white card-img">
                <!-- <img alt="Placeholder" class="block h-auto w-full" src="https://www.freeiconspng.com/uploads/free-icon-png-17.png"> -->
                <li>مساعدة في اختيار الباقة المناسبة</li>
                <li>مساعدة في فتح الحساب </li>
                <li> مساعدة في اختيار اسم النطاق المناسب </li>
                <li>تسعير تكلفة المتجر الاكتروني </li>

              </a>

              <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                <h1 class="text-lg">
                  <a class="no-underline hover:underline text-black" href="#">
                    Free
                  </a>
                </h1>
                <p class="text-grey-darker text-sm">
                  مجاناً
                </p>
              </header>

              <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <a class="flex items-center no-underline hover:underline text-black" href="#">
                  <img alt="Placeholder" class="block rounded-full w-4 h-4" src="{{ asset('images/jowlery_red.svg')}}">
                  <p class="ml-2 text-sm">
                    0 رس
                  </p>
                </a>
                <a class="no-underline text-grey-darker bg-yellow-500 p-2 rounded-md w-1/2 items-center text-center hover:text-red-dark" href="#">
                  <span class="hidden">order</span>
                  <i class="fas fa-shopping-bag text-white text-2xl"></i>
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

              <div  class="grid grid-cols-1 gap-4 place-content-around  w-full p-5 text-white  rtl card-img ">
                <!-- <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random"> -->
                <li> اظافة الاقسام وترتيبها-</li>

                <li> وتنسيق المتجر : صور متحركة - </li>

                <li>إضافة صفحات التعريفية سياسة شحن - سياسة الخصوصية </li>

                <li> تفعيل بوابة دفع - </li>

                <li> تفعيل شركة شحن -اضافة مستودع - </li>

                <li> توثيق المتجر - </li>

                <li> اضافة ازرار تواصل الاجتماعي - </li>
</div>

              <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                <h1 class="text-lg">
                  <a class="no-underline hover:underline text-black" href="#">
                    plus
                  </a>
                </h1>
                <p class="text-grey-darker text-sm">
                  بلس
                </p>
              </header>

              <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <a class="flex items-center no-underline hover:underline text-black" href="#">
                  <img alt="Placeholder" class="block rounded-full w-4 h-4" src="{{ asset('images/jowlery_blue.svg')}}">
                  <p class="ml-2 text-sm">
                    791
                  </p>
                </a>
                <a class="no-underline text-grey-darker bg-yellow-500 p-2 rounded-md w-1/2 items-center text-center hover:text-red-dark" href="#">
                  <span class="hidden">order</span>
                  <i class="fas fa-shopping-bag text-white text-2xl"></i>
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

              <a href="#" class="grid grid-cols-1 gap-3 place-content-around  w-full p-5 text-white rtl card-img">
                <!-- <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random"> -->
                <li> اظافة الاقسام وترتيبها-</li>
                <li> وتنسيق المتجر : صور متحركة - </li>
                <li> إضافة صفحات التعريفية ( سياسة شحن - سياسة الخصوصية)- </li>
                <li> تفعيل بوابة دفع - </li>
                <li> تفعيل شركة شحن -اضافة مستودع - </li>
                <li> توثيق المتجر - </li>
                <li> اضافة ازرار تواصل الاجتماعي - </li>
              </a>

              <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                <h1 class="text-md">
                  <a class="no-underline hover:underline text-red-600" href="#">
                    pro
                  </a>
                </h1>
                <p class="text-grey-darker text-lg">
                  باقة برو
                </p>
              </header>

              <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <a class="flex items-center no-underline hover:underline text-black" href="#">
                  <img alt="Placeholder" class="block rounded-full w-4 h-4" src="{{ asset('images/jowlery_red.svg')}}">
                  <p class="ml-2 text-sm">
                    891 رس
                  </p>
                </a>
                <a class="no-underline text-grey-darker bg-yellow-500 p-2 rounded-md w-1/2 items-center text-center hover:text-red-dark" href="#">
                  <span class="hidden">order</span>
                  <i class="fas fa-shopping-bag text-white text-2xl"></i>
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

              <a href="asset('/')" class="grid grid-cols-1 gap-16 place-content-around  w-full p-5 bg-purple-500">
                <img alt="Placeholder" class="block h-auto w-full" src="http://pomac.info/assets/images/homeImg.svg">
                <!-- <li> موظف دعم متاجر الكترونية</li>

                <li> 60 ساعة لمدة شهر </li>

                <li> يشمل برمجة css </li> -->
              </a>

              <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                <h1 class="text-lg">
                  <a class="no-underline hover:underline text-black" href="#">
                    Bussniss
                  </a>
                </h1>
                <p class="text-grey-darker text-sm">
                  اعمال
                </p>
              </header>

              <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                <a class="flex items-center no-underline hover:underline text-black" href="#">
                  <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                  <p class="ml-2 text-sm">
                    1499 رس
                  </p>
                </a>
                <a class="no-underline text-grey-darker bg-yellow-500 p-2 rounded-md w-1/2 items-center text-center hover:text-red-dark" href="#">
                  <span class="hidden">order</span>
                  <i class="fas fa-shopping-bag text-white text-2xl"></i>
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
        <!-- END Column -->


      </div>
      <!-- zid start -->
      <div class="zid relative w-full h-auto flex flex-col ">
        <!-- <img class=" justify-end float-right right-0 mb-8 z-3  h-21 w-25 m-5 p-3" src="{{ asset('images/s_zid.svg')}}"> -->

      </div>
      <!-- Gelary -->
      <div class="gallary relative w-full h-auto flex flex-col ">
        <!-- <img class=" justify-end float-right right-0 mb-8 z-3  h-21 w-22 m-5 p-3" src="{{ asset('images/s_g.svg')}}"> -->

      </div>



      <footer class="footer-1 bg-gray-100 py-8 sm:py-12  flex content-center justify-items-center  ">
      <button onclick="window.scrollBy(0, -2000);" class="up_icon" alt="اعلى الصفحة"><i class="fad fa-angle-up text-7xl text-yellow-500  ml-7" ></i></button>
        <div class="container mx-auto px-4">
          <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
              <h5 class="text-xl font-bold mb-6">الخدمات</h5>
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="{{route('development')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التطبيقات</a>
                </li>
                <li class="mb-2">
                  <a href="{{route('design')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التصاميم</a>
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
                  <a href="{{route('coupon')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">التسويق بالعمولة</a>
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