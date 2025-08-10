<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <title>What to Expect - SDA Church</title>
    <link rel="stylesheet" type="text/css" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://seventh-production.up.railway.app/home/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
</head>
<body>
    <div class="hero_area">
        <div class="container-scroller">
            <!-- header section starts -->
            @include('home.header')
            <!-- end header section -->
            
            <div style="padding: 100px 50px; min-height: 500px; background-color: #f8f9fa;">
                <div class="container">
                    <h1>What to Expect</h1>
                    <p>Testing with header and footer includes - if this works, both includes are fine.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
            
            <!-- footer start -->
            @include('home.footer')
            <!-- footer end -->
            
            <script src="https://seventh-production.up.railway.app/home/js/jquery-3.4.1.min.js"></script>
            <script src="https://seventh-production.up.railway.app/home/js/popper.min.js"></script>
            <script src="https://seventh-production.up.railway.app/home/js/bootstrap.js"></script>
            <script src="https://seventh-production.up.railway.app/home/js/custom.js"></script>
        </div>
    </div>
</body>
</html>