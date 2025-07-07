<!DOCTYPE html>
<html lang="en">

<head>
   @notifyCss
   <!-- Required meta tags -->
   @include('admin.css')
</head>

<body>
   <!-- header section strats -->
   <div class="container-scroller">
      <div class="hero_area">
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
         <!-- songs section -->
         @include('home.songs')
         <!-- end songs section -->
         <!-- footer start -->
         @include('home.footer')
         <!-- footer end -->
         <x-notify::notify />
         @notifyJs
      </div>
</body>

</html>