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
</head>
<body>
    <div class="hero_area">
        <div class="container-scroller">
            <!-- Test header include -->
            @include('home.header')
            
            <div style="padding: 100px 50px; min-height: 500px;">
                <div class="container">
                    <h1>What to Expect</h1>
                    <p>Testing with header include - if this works, header is fine.</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://seventh-production.up.railway.app/home/js/jquery-3.4.1.min.js"></script>
    <script src="https://seventh-production.up.railway.app/home/js/bootstrap.js"></script>
</body>
</html>