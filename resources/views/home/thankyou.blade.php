<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Prayer Request Submitted - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .orange-separator {
            height: 4px;
            background: #e4af00;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .thank-you-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }

        .thank-you-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            padding: 60px 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .thank-you-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #4ade80, #22d3ee);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 40px;
            color: white;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(34, 211, 238, 0.4);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 20px rgba(34, 211, 238, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(34, 211, 238, 0);
            }
        }

        .thank-you-card h1 {
            color: #333;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        .thank-you-card p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .btn-home {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
            text-decoration: none;
        }

        .prayer-info {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin: 30px 0;
            border-left: 4px solid #22d3ee;
        }

        .prayer-info h4 {
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .prayer-info ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .prayer-info li {
            color: #666;
            margin: 8px 0;
            display: flex;
            align-items: center;
        }

        .prayer-info li i {
            color: #22d3ee;
            margin-right: 10px;
            width: 20px;
        }

        @media (max-width: 768px) {
            .thank-you-card {
                padding: 40px 25px;
            }
            
            .thank-you-card h1 {
                font-size: 2rem;
            }
            
            .thank-you-icon {
                width: 80px;
                height: 80px;
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
    @include('home.header')

    <!-- Orange Separator Line -->
    <div class="orange-separator"></div>

    <!-- Thank You Section -->
    <div class="thank-you-container">
        <div class="thank-you-card">
            <div class="thank-you-icon">
                <i class="fas fa-praying-hands"></i>
            </div>
            
            <h1>Thank You!</h1>
            <p>Your prayer request has been received and we are honored to pray with you. Our prayer ministry team will be lifting up your request in prayer.</p>
            
            <div class="prayer-info">
                <h4><i class="fas fa-heart text-danger"></i> What Happens Next?</h4>
                <ul>
                    <li><i class="fas fa-pray"></i> Our pastoral team will pray for your request</li>
                    <li><i class="fas fa-shield-alt"></i> Your request will be kept confidential</li>
                    <li><i class="fas fa-users"></i> If not marked private, our prayer ministry will join in prayer</li>
                    <li><i class="fas fa-envelope"></i> You may receive a follow-up if you provided contact information</li>
                </ul>
            </div>
            
            <p><strong>"The prayer of a righteous person is powerful and effective."</strong><br>
               <em>James 5:16</em></p>
            
            <a href="/" class="btn-home">
                <i class="fas fa-home"></i> Return to Home
            </a>
        </div>
    </div>

    @include('home.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>