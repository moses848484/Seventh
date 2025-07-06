<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="{{ asset('images/sda3.png') }}" type="">

   <title>SDA Home Page</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="{{ asset('..home/css/bootstrap.css') }}">

   <!-- Font Awesome style -->
   <link rel="stylesheet" href="{{ asset('..home/css/font-awesome.min.css') }}">

   <!-- Custom styles for this template -->
   <link rel="stylesheet" href="{{ asset('..home/css/style.css') }}">

   <!-- Responsive style -->
   <link rel="stylesheet" href="{{ asset('..home/css/responsive.css') }}">

   <!-- FontAwesome 6.5.2 -->
   <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.2-web/css/all.min.css') }}" type="text/css">

   @notifyCss
</head>

<body>

   <div class="hero_area">
      <!-- header section starts -->
      @include('home.header')
      <!-- end header section -->

      <!-- slider section -->
      @include('home.slider')
      <!-- end slider section -->
   </div>

   <!-- containers section -->
   @include('home.containers')

   <!-- prayer section -->
   @include('home.prayer')

   <!-- welcome section -->
   @include('home.welcome')

   <!-- songs section -->
   @include('home.songs')

   <!-- footer section -->
   @include('home.footer')

   <!-- jQuery -->
   <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>

   <!-- Popper JS -->
   <script src="{{ asset('home/js/popper.min.js') }}"></script>

   <!-- Bootstrap JS -->
   <script src="{{ asset('home/js/bootstrap.js') }}"></script>

   <!-- Custom JS -->
   <script src="{{ asset('home/js/custom.js') }}"></script>

   <x-notify::notify />
   @notifyJs
</body>

</html>
