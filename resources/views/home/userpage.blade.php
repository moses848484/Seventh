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
   <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
   <title>SDA Home Page</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="https://seventh-production.up.railway.app/home/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="https://seventh-production.up.railway.app/home/css/responsive.css" rel="stylesheet" />
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
   @notifyCss
</head>

<body>
   <div class="hero_area">
      <div class="container-scroller">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->
         <!-- containers section -->
         @include('home.containers')
         <!-- end containers section -->
         <!-- prayersection -->
         @include('home.prayer')
         <!-- end prayer section -->
         @include('home.welcome')
         <!-- end welcome section -->
          @include('home.subscribe')
         <!-- songs section -->
         @include('home.songs')
         <!-- end songs section -->
         <!-- footer start -->
         @include('home.footer')
         <!-- footer end -->
         <!-- jQery -->
         <script src="https://seventh-production.up.railway.app/home/js/jquery-3.4.1.min.js"></script>
         <!-- popper js -->
         <script src="https://seventh-production.up.railway.app/home/js/popper.min.js"></script>
         <!-- bootstrap js -->
         <script src="https://seventh-production.up.railway.app/home/js/bootstrap.js"></script>
         <!-- custom js -->
         <script src="https://seventh-production.up.railway.app/home/js/custom.js"></script>
         <x-notify::notify />
         @notifyJs
      </div>
   </div>
</body>
</html>