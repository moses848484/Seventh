<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://seventh-production.up.railway.app/images/sda3.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Prayer Wall - SDA Church</title>
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/bootstrap.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/home/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .orange-separator {
            height: 4px;
            background: #e4af00;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .prayer-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .prayer-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .prayer-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .prayer-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #667eea;
        }

        .prayer-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .prayer-card.urgent {
            border-left-color: #e74c3c;
            background: linear-gradient(135deg, #fff5f5 0%, #ffffff 100%);
        }

        .prayer-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .prayer-author {
            font-weight: 600;
            color: #333;
            font-size: 1.1rem;
        }

        .prayer-date {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .prayer-category {
            background: #667eea;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: 500;
        }

        .prayer-category.health { background: #28a745; }
        .prayer-category.family { background: #17a2b8; }
        .prayer-category.financial { background: #ffc107; color: #333; }
        .prayer-category.spiritual { background: #6f42c1; }
        .prayer-category.personal { background: #fd7e14; }
        .prayer-category.relationships { background: #e83e8c; }
        .prayer-category.work { background: #20c997; }
        .prayer-category.thanksgiving { background: #f8d347; color: #333; }
        .prayer-category.other { background: #6c757d; }

        .prayer-request {
            color: #555;
            line-height: 1.6;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .prayer-stats {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .urgent-badge {
            background: #e74c3c;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .pray-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pray-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .no-prayers {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
        }

        .no-prayers i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .submit-prayer-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 40px 0;
            margin-top: 40px;
            text-align: center;
        }

        .btn-submit-prayer {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-submit-prayer:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(40, 167, 69, 0.3);
            color: white;
            text-decoration: none;
        }

        .filter-section {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .filter-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 8px 16px;
            border: 2px solid #e9ecef;
            border-radius: 20px;
            background: white;
            color: #6c757d;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .filter-tab:hover, .filter-tab.active {
            border-color: #667eea;
            background: #667eea;
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .prayer-hero h1 {
                font-size: 2rem;
            }
            
            .prayer-card {
                padding: 20px;
            }
            
            .prayer-meta {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    @include('home.header')

    <!-- Orange Separator Line -->
    <div class="orange-separator"></div>

    <!-- Prayer Hero Section -->
    <div class="prayer-hero">
        <div class="container">
            <h1><i class="fas fa-users"></i> Prayer Wall</h1>
            <p>Join us in praying for our community. Together, we lift each other up in faith.</p>
        </div>
    </div>

    <!-- Prayer Wall Content -->
    <div class="container my-5">
        
        <!-- Filter Section -->
        <div class="filter-section">
            <h5 class="mb-3"><i class="fas fa-filter"></i> Filter by Category</h5>
            <div class="filter-tabs">
                <a href="{{ route('prayer.wall') }}" class="filter-tab {{ request()->get('category') == '' ? 'active' : '' }}">
                    All Prayers
                </a>
                <a href="{{ route('prayer.wall') }}?category=health" class="filter-tab {{ request()->get('category') == 'health' ? 'active' : '' }}">
                    Health
                </a>
                <a href="{{ route('prayer.wall') }}?category=family" class="filter-tab {{ request()->get('category') == 'family' ? 'active' : '' }}">
                    Family
                </a>
                <a href="{{ route('prayer.wall') }}?category=spiritual" class="filter-tab {{ request()->get('category') == 'spiritual' ? 'active' : '' }}">
                    Spiritual
                </a>
                <a href="{{ route('prayer.wall') }}?category=financial" class="filter-tab {{ request()->get('category') == 'financial' ? 'active' : '' }}">
                    Financial
                </a>
                <a href="{{ route('prayer.wall') }}?category=other" class="filter-tab {{ request()->get('category') == 'other' ? 'active' : '' }}">
                    Other
                </a>
            </div>
        </div>

        <!-- Prayer Cards -->
        @if($prayers && $prayers->count() > 0)
            <div class="row">
                @foreach($prayers as $prayer)
                    <div class="col-lg-6 mb-4">
                        <div class="prayer-card {{ $prayer->is_urgent ? 'urgent' : '' }}">
                            <div class="prayer-meta">
                                <div>
                                    <div class="prayer-author">
                                        <i class="fas fa-user"></i> {{ $prayer->name }}
                                    </div>
                                    <div class="prayer-date">
                                        <i class="fas fa-calendar"></i> {{ $prayer->created_at->format('M j, Y') }}
                                    </div>
                                </div>
                                <div>
                                    <span class="prayer-category {{ $prayer->request_type }}">
                                        {{ ucfirst($prayer->request_type) }}
                                    </span>
                                    @if($prayer->is_urgent)
                                        <span class="urgent-badge">
                                            <i class="fas fa-exclamation"></i> Urgent
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="prayer-request">
                                {{ Str::limit($prayer->prayer_request, 200) }}
                            </div>
                            
                            <div class="prayer-stats">
                                <button class="pray-btn" onclick="prayForRequest({{ $prayer->id }})">
                                    <i class="fas fa-praying-hands"></i> I'm Praying
                                </button>
                                <small class="text-muted">
                                    <i class="fas fa-clock"></i> 
                                    {{ $prayer->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination if needed -->
            @if(method_exists($prayers, 'links'))
                <div class="d-flex justify-content-center">
                    {{ $prayers->links() }}
                </div>
            @endif

        @else
            <div class="no-prayers">
                <i class="fas fa-praying-hands"></i>
                <h4>No Prayer Requests Yet</h4>
                <p>Be the first to share a prayer request with our community.</p>
            </div>
        @endif

        <!-- Submit Prayer Section -->
        <div class="submit-prayer-section">
            <div class="container">
                <h3>Share Your Prayer Request</h3>
                <p class="mb-4">Would you like our community to pray with you? Share your prayer request below.</p>
                <a href="{{ route('prayer.create') }}" class="btn-submit-prayer">
                    <i class="fas fa-plus"></i> Submit Prayer Request
                </a>
            </div>
        </div>
    </div>

    @include('home.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function prayForRequest(prayerId) {
            // Simple feedback when someone clicks "I'm Praying"
            const button = event.target.closest('.pray-btn');
            const originalText = button.innerHTML;
            
            button.innerHTML = '<i class="fas fa-check"></i> Praying';
            button.style.background = '#28a745';
            button.disabled = true;
            
            // You could send an AJAX request here to track prayer counts
            // For now, just show visual feedback
            
            setTimeout(() => {
                button.innerHTML = '<i class="fas fa-heart"></i> Prayed';
            }, 1000);
        }

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            $('.alert').fadeOut();
        }, 5000);
    </script>
</body>
</html>