<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">



  <title>سياسة خدمات بكج</title>

  <!-- font aowsome icons -->

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- meta description -->
  <meta name="description" content=" سياسة خدمات بكج">
  <meta name="keywords" content="تصميم متجر , برمجة متجر , متجر سلة, سلة, بكج">
  <meta name="author" content="تصميم متاجر سلة وزد باحترافية عالية ">
  <meta property="og:title" content="التجارة الإلكترونية مع سلة - حلك العملي لإنشاء متجر إلكتروني في ثوانٍ معدودات">
  <meta property="og:description" content="سهّلنا لك التجارة الإلكترونية حيث يمكنك الآن إنشاء متجر إلكتروني في دقائق معدودة دون أي عمولة على المبيعات!">
  <meta property="og:url" content="https://sallla.site">
  <meta property="og:site_name" content="سلة">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="التجارة الإلكترونية مع سلة وزد - حلك العملي لإنشاء متجر إلكتروني في ثوانٍ معدودات">
  <meta name="twitter:description" content="سهّلنا لك التجارة الإلكترونية حيث يمكنك الآن إنشاء متجر إلكتروني مع بكج دقائق معدودة دون أي عمولة على المبيعات!">
  <!-- font aowsome icons -->
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
  <section class="w-full items-center px-4 dirct text-right ">
    <p class="text-xl text-yellow-600 ">سياسة الخدمات</p>
    <ol class="list-inside">
      <li>
        يحق للعميل طلب التعديل على التصميم مرتين فقط</li>
      <li>يحق لمقدم الخدمة ايقاف العمل اذا لم يتم تحويل باقي المبلغ</li>
      <li>يحق للعميل ان يطلب فاتورة للمدفوعات</li>
      <li>يحق للعميل ان يطلب الخصم قبل الاتفاق اذا توافقت عليه شروط العرض</li>
      <li>لا يحق التعديل الا في خلال الاسبوع الاول من تحويل نصف المبلغ</li>
      <li>لا يحق للعميل ان يطلب خدمات لاتوافق مع الشريعة الاسلامية </li>
      <li>لايحق للعميل ان يطلب اي خدمة غير مذكورة في عقد الخدمة</li>
      <li>لايحق للعميل ان يطلب تعديل على خدمات المجانية </li>
    </ol>

    <h2 class="text-xl text-yellow-600 ">روابط لمواقع أخرى</h2>
    <p>قد تحتوي هذه الخدمة على روابط لمواقع أخرى. إذا نقرت على رابط جهة خارجية، فسيتم توجيهك إلى هذا الموقع. لاحظ أن هذه المواقع الخارجية لا تعمل من قبلنا. لذلك، ننصحك بشدة بمراجعة سياسة الخصوصية الخاصة بهذه المواقع. ليس لدينا أي سيطرة ولا نتحمل أي مسؤولية عن المحتوى أو سياسات الخصوصية أو الممارسات الخاصة بأي مواقع أو خدمات خاصة بجهة خارجية.</p>
    <h2 class="text-xl text-yellow-600 ">تغيّرات على سياسة الخصوصية هذه</h2>
    <p>قد نحدّث سياسة الخصوصية الخاصة بنا من وقت لآخر. لذا ننصحك بمراجعة هذه الصفحة بشكل دوري لأية تغيّرات. سنعلمك بأي تغيّرات عن طريق نشر سياسة الخصوصية الجديدة على هذه الصفحة. تعد هذه التغيّرات فعالة فور نشرها على هذه الصفحة.</p>
    <h2 class="text-xl text-yellow-600 ">سارع بأقتناص العروض في وقتها</h2>
    <p>خدماتنا المتنوعة تنفذ من خلال فريق متخصص قادر علي تنفيذ طلباتك بإحترافية</p>
  </section>
  <footer class="footer-1 bg-gray-100 py-8 sm:py-12">
    <div class="container mx-auto px-4">
      <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
        <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
          <h5 class="text-xl font-bold mb-6">الخدمات</h5>
          <ul class="list-none  flex footer-links justify-around list-none">
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
          <ul class="list-none flex footer-links justify-around list-none">
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
          <ul class="list-none flex footer-links justify-around list-none">
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
          <ul class="list-none footer-links flex  justify-around list-none">
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
  <script src="{{ asset('js/dragble.js') }}"></script>
  @livewireScripts
</body>

</html>