@section('head')
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}} ">
<link rel="manifest" href="{{ asset('img/favicon/site.webmanifest')}}">


   <title>@yield('title')</title>
   <meta name="description" content="@yield('description')">

   <meta property="og:url" content="@yield('ogUrl')" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="@yield('ogTitle')" />
   <meta property="og:description" content="@yield('ogDescription')" />
   <meta property="og:site_name" content="artgas.pro" />
   <meta property="og:image" content="" />

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Roboto&amp;display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/style.css')}}"> 

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script src="{{asset('js/app.js')}}"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->

</head>