<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Thank You - Prayer Request Submitted</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
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
            padding: 40px 20px;
        }

        .thank-you-card {
            background: white;
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin: 20px;
        }

        .thank-you-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 40px;
            color: white;
            animation: checkmark 0.6s ease-in-out;
        }

        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .thank-you-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .thank-you-message {
            font-size: 1.2rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .bible-verse {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 25px;
            border-radius: 10px;
            margin: 30px 0;
            font-style: italic;
        }

        .bible-verse p {
            margin: 0;
            font-size: 1.1rem;
            color: #555;
        }

        .bible-reference {
            text-align: right;
            font-weight: 600;
            color: #667eea;
            margin-top: 15px;
        }

        .next-steps {
            background: #e3f2fd;
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            text-align: left;
        }

        .next-steps h4 {
            color: #1976d2;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .next-steps ul {
            list-style: none;
            padding: 0;
        }

        .next-steps li {
            padding: 8px 0;
            color: #555;
        }

        .next-steps i {
            color: #1976d2;
            margin-right: 10px;
            width: 20px;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            color: white;
            text-decoration: none;
        }

        .btn-secondary-custom {
            background: white;
            border: 2px solid #667eea;
            color: #667eea;
            padding: 10px 28px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-secondary-custom:hover {
            background: #667eea;
            color: white;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .contact-info {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }

        .contact-info h5 {
            color: #856404;
            margin-bottom: 10px;
        }

        .contact-info p {
            color: #856404;
            margin: 0;
        }

        @media (max-width: 768px) {
            .thank-you-card {
                padding: 40px 25px;
                margin: 10px;
            }
            
            .thank-you-title {
                font-size: 2rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-primary-custom,
            .btn-secondary-custom {
                width: 100%;
                max-width: 250px;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    @include('home.header')

    <!-- Orange Separator Line -->
    <div class="orange-separator"></div>

    <div class="thank-you-container">
        <div class="thank-you-card">
            <div class="thank-you-icon">
                <i class="fas fa-check"></i>
            </div>
            
            <h1 class="thank-you-title">Thank You!</h1>
            
            <p class="thank-you-message">
                Your prayer request has been submitted successfully. We are honored that you've shared your heart with us, 
                and we want you to know that your request is in good hands.
            </p>

            <div class="bible-verse">
                <p>"And this is the confidence that we have toward him, that if we ask anything according to his will he hears us. And if we know that he hears us in whatever we ask, we know that we have the requests that we have asked of him."</p>
                <div class="bible-reference">- 1 John 5:14-15</div>
            </div>

            <div class="next-steps">
                <h4><i class="fas fa-heart"></i> What Happens Next</h4>
                <ul>
                    <li><i class="fas fa-praying-hands"></i> Our pastoral team will begin praying for your request immediately</li>
                    <li><i class="fas fa-envelope"></i> If you provided an email, you'll receive a confirmation message</li>
                    <li><i class="fas fa-users"></i> Your request may be shared with our prayer ministry team (unless marked private)</li>
                    <li><i class="fas fa-phone"></i> We may reach out if you need additional support or prayer</li>
                </ul>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            <div class="contact-info">
                <h5><i class="fas fa-info-circle"></i> Need Immediate Prayer?</h5>
                <p>If you need immediate prayer support, please don't hesitate to contact our pastoral care team at <strong>0974752637</strong> or email <strong>prayer@unisda.com</strong></p>
            </div>

            <div class="action-buttons">
                <a href="{{ route('prayer.wall') }}" class="btn-primary-custom">
                    <i class="fas fa-users"></i> View Prayer Wall
                </a>
                <a href="{{ route('prayer.create') }}" class="btn-secondary-custom">
                    <i class="fas fa-plus"></i> Submit Another Request
                </a>
                <a href="{{ url('/') }}" class="btn-secondary-custom">
                    <i class="fas fa-home"></i> Back to Home
                </a>
            </div>
        </div>
    </div>

    @include('home.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>