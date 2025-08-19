<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Prayer Submitted - SDA Church</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .thankyou-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            padding: 60px 40px;
            text-align: center;
            max-width: 600px;
            margin: 20px;
        }

        .thankyou-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #28a745, #20c997);
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
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .thankyou-container h1 {
            color: #333;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .thankyou-container p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-home {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            margin: 10px;
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
            text-decoration: none;
        }

        .btn-secondary {
            background: #6c757d;
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin: 10px;
        }

        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }

        .prayer-verse {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 30px 0;
            border-radius: 5px;
            font-style: italic;
        }

        .prayer-verse p {
            margin-bottom: 10px;
            color: #555;
        }

        .prayer-verse cite {
            font-weight: 600;
            color: #667eea;
            font-style: normal;
        }

        .next-steps {
            background: #e3f2fd;
            border-radius: 10px;
            padding: 25px;
            margin-top: 30px;
            text-align: left;
        }

        .next-steps h4 {
            color: #1976d2;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .next-steps ul {
            color: #555;
            margin-bottom: 0;
        }

        .next-steps li {
            margin-bottom: 8px;
        }

        @media (max-width: 768px) {
            .thankyou-container {
                padding: 40px 25px;
                margin: 10px;
            }
            
            .thankyou-container h1 {
                font-size: 2rem;
            }
            
            .thankyou-icon {
                width: 80px;
                height: 80px;
                font-size: 32px;
            }
        }
    </style>
</head>

<body>
    <div class="thankyou-container">
        <div class="thankyou-icon">
            <i class="fas fa-check"></i>
        </div>
        
        <h1>Prayer Request Received</h1>
        
        <p><strong>Thank you for allowing us to pray with you!</strong></p>
        
        <p>Your prayer request has been submitted successfully. Our pastoral team and prayer ministry will begin praying for your request immediately.</p>

        <div class="prayer-verse">
            <p>"Therefore I tell you, whatever you ask for in prayer, believe that you have received it, and it will be yours."</p>
            <cite>Mark 11:24 (NIV)</cite>
        </div>

        <div class="next-steps">
            <h4><i class="fas fa-heart text-danger"></i> What Happens Next?</h4>
            <ul>
                <li><i class="fas fa-praying-hands text-primary"></i> Our prayer team will begin praying for your request today</li>
                <li><i class="fas fa-phone text-success"></i> If you provided contact information, someone may reach out to offer additional support</li>
                <li><i class="fas fa-users text-info"></i> If not marked private, your request will be shared with our prayer ministry for continued prayer</li>
                <li><i class="fas fa-calendar text-warning"></i> We'll continue to pray for your request in the coming weeks</li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="{{ route('home') ?? '/' }}" class="btn-home">
                <i class="fas fa-home"></i> Return to Home
            </a>
            <a href="{{ route('prayers.create') }}" class="btn-secondary">
                <i class="fas fa-plus"></i> Submit Another Prayer
            </a>
        </div>

        <div class="mt-4">
            <small class="text-muted">
                Need immediate assistance? Contact our pastoral care team at 
                <strong>0974752637</strong> or <strong>prayers@unisda.com</strong>
            </small>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>