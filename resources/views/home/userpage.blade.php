<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />

   <link rel="shortcut icon" href="{{ asset('images/sda3.png') }}" type="image/png">
   <title>SDA Home Page</title>

   <!-- Bootstrap core css -->
   <link rel="stylesheet" href="{{ asset('.home/css/bootstrap.css') }}">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('.home/css/font-awesome.min.css') }}">
   <!-- Custom styles -->
   <link rel="stylesheet" href="{{ asset('.home/css/style.css') }}">
   <!-- Responsive styles -->
   <link rel="stylesheet" href="{{ asset('.home/css/responsive.css') }}">
   <!-- FontAwesome 6 -->
   <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.2-web/css/all.min.css') }}">

   @notifyCss
</head>

<body>
   <div class="hero_area">
      @include('home.header')
      @include('home.slider')
   </div>

   @include('home.containers')
   @include('home.prayer')
   @include('home.welcome')
   @include('home.songs')
   @include('home.footer')

   <!-- JS Scripts -->
   <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
   <script src="{{ asset('home/js/popper.min.js') }}"></script>
   <script src="{{ asset('home/js/bootstrap.js') }}"></script>
   <script src="{{ asset('home/js/custom.js') }}"></script>

   <x-notify::notify />
   @notifyJs
</body>

</html>
