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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <!-- Material Design Icons -->
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/admin/assets/vendors/mdi/css/materialdesignicons.min.css" />

   <!-- FontAwesome (choose one version only) -->
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/admin/assets/css/fontawesome-free-6.6.0-web/css/all.min.css" />

   <!-- Plugin CSS -->
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/admin/assets/vendors/jvectormap/jquery-jvectormap.css" />
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css" />
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css" />

   <!-- Bootstrap CSS -->
   <link rel="stylesheet"
      href="https://seventh-production.up.railway.app/node_modules/bootstrap/dist/css/bootstrap.min.css" />

   <!-- Your custom styles -->
   <link rel="stylesheet" href="https://seventh-production.up.railway.app/admin/assets/css/style.css" />
   <link rel="stylesheet" href="https://seventh-production.up.railway.app/admin/assets/css/style1.css" />

   <!-- Favicon -->
   <link rel="shortcut icon" href="https://seventh-production.up.railway.app/admin/assets/images/sda3.png" />

   <!-- Your custom script -->
   <script src="https://seventh-production.up.railway.app/images/script.js" defer></script>
   <script src="/images/script.js"></script>


   <!-- Bootstrap 4 CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css">



   <!-- Bootstrap 5 CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Bootstrap 5 JS (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
         <!-- jQuery (required by Bootstrap 4) -->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

         <!-- Popper.js -->
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

         <!-- Bootstrap 4 JS -->
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/js/bootstrap.min.js"></script>
         <!-- Bootstrap JS Bundle (includes Popper) -->
         <script src="https://seventh-production.up.railway.app/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"
            defer></script>
         <x-notify::notify />
         @notifyJs
      </div>
   </div>
</body>

</html>