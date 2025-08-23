<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Connect With Our Team - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/responsive.css" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            min-height: 100vh;
        }

        .main-content {
            min-height: 100vh;
            background-color: #f8f9fa;
            padding: 40px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            background: white;
            padding: 60px 40px;
            border-radius: 0;
            box-shadow: none;
            border: none;
        }

        .header-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ffffffff, #f7fdffff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 4px 20px rgba(79, 195, 247, 0.3);
        }

        .icon-circle i {
            color: white;
            font-size: 32px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            font-weight: 400;
            line-height: 1.5;
            margin-bottom: 0;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
        }

        .required {
            color: #e74c3c;
        }

        .form-control {
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 15px 20px;
            font-size: 16px;
            transition: all 0.2s ease;
            width: 100%;
            background-color: #f8f9fa;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #4fc3f7;
            outline: none;
            box-shadow: 0 0 0 2px rgba(79, 195, 247, 0.2);
            background-color: #fff;
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        select.form-control {
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: right 18px center;
            background-size: 16px;
            padding-right: 50px;
            background-color: #f8f9fa;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* New icon with input styling */
        .input-with-icon {
            display: flex;
            align-items: stretch;
        }

        .icon-box {
            width: 50px;
            background-color: #e9ecef;
            border: 1px solid #dee2e6;
            border-right: none;
            border-radius: 4px 0 0 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon-box i {
            color: #6c757d;
            font-size: 16px;
        }

        .input-with-icon .form-control {
            border-radius: 0 4px 4px 0;
            border-left: none;
            flex: 1;
        }

        .input-with-icon .form-control:focus {
            border-left: none;
        }

        .input-with-icon .form-control:focus+.icon-box,
        .input-with-icon:focus-within .icon-box {
            border-color: #4fc3f7;
            background-color: #f0f9ff;
        }

        .submit-btn {
            background: linear-gradient(135deg, #4fc3f7, #29b6f6);
            border: none;
            padding: 14px 40px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            width: auto;
            min-width: 160px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 195, 247, 0.4);
            background: linear-gradient(135deg, #29b6f6, #1e88e5);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .btn-container {
            text-align: center;
            margin-top: 40px;
        }

        /* Success/Error Messages */
        .alert {
            border-radius: 6px;
            margin-bottom: 30px;
            border: none;
            padding: 15px 20px;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #047857;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #dc2626;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .form-container {
                width: 100%;
                padding: 40px 25px;
            }

            .page-title {
                font-size: 1.6rem;
            }

            .page-subtitle {
                font-size: 1rem;
            }

            .main-content {
                padding: 20px 0;
            }
        }

        @media (max-width: 480px) {
            .form-container {
                width: 100%;
                padding: 30px 20px;
            }

            .icon-circle {
                width: 60px;
                height: 60px;
                margin-bottom: 20px;
            }

            .icon-circle i {
                font-size: 24px;
            }

            .page-title {
                font-size: 1.4rem;
                margin-bottom: 12px;
            }

            .submit-btn {
                width: 100%;
                padding: 16px 20px;
            }

            .main-content {
                padding: 10px 0;
            }

            .icon-box {
                width: 45px;
            }
        }
    </style>
</head>

<body>
    @include('home.header')

    <div class="main-content">
        <div class="form-container">
            <!-- Header Section -->
            <div class="header-section">
                <div class="icon-circle light">
                    <img src="images/praying_hands" alt="Service Icon" class="service-icon"
                        style="width:50px; height:50px; filter: invert(82%) sepia(98%) saturate(462%) hue-rotate(1deg) brightness(100%) contrast(101%);">
                </div>
                <h1 class="page-title">Connect With Our Team</h1>
                <p class="page-subtitle">Have a question? Need pastoral care? Connect with us!</p>
            </div>

            <!-- Success/Error Messages -->
            <div class="alert alert-success" style="display: none;">
                Your message has been sent successfully!
            </div>

            <!-- Contact Form -->
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <!-- First Name -->
                <div class="form-group">
                    <label for="first_name">Your First Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>

                <!-- Last Name -->
                <div class="form-group">
                    <label for="last_name">Your Last Name <span class="required">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>

                <!-- Email with Icon Box -->
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <div class="input-with-icon">
                        <div class="icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <!-- Phone with Icon Box -->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="input-with-icon">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                </div>

                <!-- Subject -->
                <div class="form-group">
                    <label for="subject">Subject <span class="required">*</span></label>
                    <select class="form-control" id="subject" name="subject" required>
                        <option value="">Select an option...</option>
                        <option value="prayer_request">Prayer Request</option>
                        <option value="giving_help">Giving Help</option>
                        <option value="career_inquiry">Career Inquiry</option>
                        <option value="groups">Unisdagroups</option>
                        <option value="general_inquiry">General Inquiry</option>
                        <option value="pastoral_care">Pastoral Care</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Question/Message -->
                <div class="form-group">
                    <label for="message">Send Prayer Request <span class="required">*</span></label>
                    <textarea class="form-control" id="message" name="message"
                        placeholder="Tell us how we can help you..." required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="btn-container">
                    <button type="submit" class="submit-btn">
                        <i class="fa-regular fa-paper-plane"></i>
                        Send Question
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('home.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Auto-hide success messages after 5 seconds
            const successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.style.opacity = '0';
                    setTimeout(() => {
                        successAlert.remove();
                    }, 300);
                }, 5000);
            }

            // Focus effects for icon boxes
            const inputsWithIcons = document.querySelectorAll('.input-with-icon input');
            inputsWithIcons.forEach(input => {
                input.addEventListener('focus', function () {
                    this.parentElement.querySelector('.icon-box').style.borderColor = '#4fc3f7';
                    this.parentElement.querySelector('.icon-box').style.backgroundColor = '#f0f9ff';
                });

                input.addEventListener('blur', function () {
                    this.parentElement.querySelector('.icon-box').style.borderColor = '#dee2e6';
                    this.parentElement.querySelector('.icon-box').style.backgroundColor = '#e9ecef';
                });
            });
        });
    </script>

</body>

</html>