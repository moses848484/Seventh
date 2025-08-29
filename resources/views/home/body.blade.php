<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/addmember.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>View Church Members</title>

    <style>
        /* Base Styles */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* Floating Label Styles */
        .form-floating {
            position: relative;
        }

        .form-floating input {
            padding: 1.5rem 0.75rem 1rem 0.75rem;
        }

        .form-floating label {
            position: absolute;
            top: 45%;
            left: 0.75rem;
            transform: translateY(-50%);
            transition: all 0.2s ease-in-out;
            color: #04AA6D;
            pointer-events: none;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            top: 25%;
            transform: translateY(-100%);
            font-size: 0.8rem;
            color: #04AA6D;
            background: white;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .form-control:focus {
            border-color: #ced4da;
            box-shadow: none;
            color: #04AA6D;
        }

        /* Enhanced Notes Card Styles */
        .notes-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .notes-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        /* Enhanced Header */
        .notes-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px 25px;
            position: relative;
            overflow: hidden;
        }

        .notes-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(180deg); }
        }

        .notes-header h5 {
            margin: 0;
            font-weight: 600;
            font-size: 1.3rem;
            position: relative;
            z-index: 2;
        }

        .notes-counter {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            z-index: 2;
        }

        /* Enhanced Search Box */
        .search-box {
            padding: 20px 25px 15px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-bottom: 1px solid #e9ecef;
        }

        .search-input {
            border: 2px solid transparent;
            border-radius: 25px;
            padding: 12px 20px 12px 45px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }

        .search-wrapper {
            position: relative;
        }

        .search-wrapper::before {
            content: '\f002';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            z-index: 3;
        }

        .search-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1), 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Enhanced Notes Content */
        .notes-content {
            max-height: 350px;
            overflow-y: auto;
            padding: 15px 25px;
            background: #fff;
            flex: 1;
        }

        .notes-content::-webkit-scrollbar {
            width: 6px;
        }

        .notes-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .notes-content::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 10px;
        }

        /* Enhanced Note Items */
        .note-item {
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 15px;
            margin-bottom: 15px;
            padding: 18px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .note-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .note-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.15);
            border-color: #667eea;
        }

        .note-item:hover::before {
            transform: scaleY(1);
        }

        .note-meta {
            font-size: 0.75rem;
            color: #8e9aaf;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
        }

        .note-meta i {
            color: #667eea;
        }

        .note-text {
            color: #2d3748;
            line-height: 1.6;
            margin-bottom: 12px;
            font-size: 0.95rem;
            word-break: break-word;
        }

        .note-actions {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .note-item:hover .note-actions {
            opacity: 1;
        }

        /* Enhanced Buttons */
        .btn-note-action {
            padding: 6px 12px;
            font-size: 0.75rem;
            border-radius: 20px;
            border: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .btn-edit {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 172, 254, 0.4);
            color: white;
        }

        .btn-delete {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            color: white;
        }

        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
            color: white;
        }

        /* Enhanced Add Note Form */
        .add-note-form {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 25px;
            border-top: 1px solid #e9ecef;
            flex-shrink: 0;
        }

        .note-textarea {
            border: 2px solid transparent;
            border-radius: 15px;
            padding: 15px 20px;
            background: white;
            resize: vertical;
            min-height: 80px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .note-textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1), 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-add-note {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
        }

        .btn-add-note:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            color: white;
        }

        .auto-save-indicator {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #28a745;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .auto-save-indicator i {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Enhanced Empty State */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #8e9aaf;
        }

        .empty-state i {
            color: #667eea;
            margin-bottom: 15px;
            opacity: 0.7;
        }

        .empty-state p {
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Enhanced Footer */
        .notes-footer {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 15px 25px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }

        .notes-footer h6 {
            margin: 0;
            color: #6c757d;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Feedback Toast */
        .feedback-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 20px;
            border-radius: 25px;
            color: white;
            font-weight: 500;
            font-size: 0.9rem;
            z-index: 1000;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .feedback-toast.show {
            transform: translateX(0);
        }

        .feedback-toast.success {
            background: linear-gradient(135deg, #28a745, #20c997);
        }

        .feedback-toast.info {
            background: linear-gradient(135deg, #17a2b8, #007bff);
        }

        /* Verse Card Styles */
        .corona-gradient-card {
            position: relative;
            overflow: hidden;
            border-radius: 0.75rem;
            color: white;
            background: rgba(0, 0, 0, 0.4);
        }

        .corona-gradient-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/bg-img1.jpg') center/cover no-repeat;
            filter: blur(2px) brightness(0.7);
            transform: scale(1.1);
            z-index: 0;
        }

        .corona-gradient-card .card-body {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            padding: 1.5rem;
        }

        .gradient-corona-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            flex-shrink: 0;
        }

        .verse-content {
            color: white;
            flex: 1;
            text-align: center;
        }

        .verse-text {
            font-size: 1.1rem;
            font-style: italic;
            line-height: 1.4;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            margin-bottom: 0.5rem;
        }

        .verse-reference {
            font-size: 0.9rem;
            opacity: 0.9;
            font-weight: 500;
        }

        .get-started-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .get-started-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
        }

        /* Dashboard Cards */
        .card1 {
            margin-top: 2rem;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .span2 {
            text-align: center;
            padding: 1rem;
        }

        .icon-box-success {
            text-align: center;
        }

        .footer1 {
            background: #f8f9fa;
            padding: 1rem;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .text-muted2 {
            color: #6c757d !important;
            font-weight: 500;
        }

        .uniform-height-card {
            height: 100%;
        }

        /* Footer Styles */
        .footer {
            background: #343a40;
            color: #fff;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        .text-muted1 {
            color: #adb5bd !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .notes-card {
                border-radius: 15px;
            }

            .notes-header, .search-box, .add-note-form {
                padding: 15px 20px;
            }

            .notes-content {
                padding: 10px 20px;
                max-height: 300px;
            }

            .note-item {
                padding: 15px;
                margin-bottom: 12px;
            }

            .note-actions {
                opacity: 1;
            }

            .gradient-corona-img {
                width: 60px;
                height: 60px;
            }

            .verse-text {
                font-size: 1rem;
            }

            .get-started-btn {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .gradient-corona-img {
                width: 50px;
                height: 50px;
            }

            .verse-text {
                font-size: 0.9rem;
                line-height: 1.3;
            }

            .verse-reference {
                font-size: 0.8rem;
            }

            .get-started-btn {
                padding: 0.3rem 0.6rem;
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Verse of the Day Card -->
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <!-- Image Column - Left -->
                                <div class="me-3">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face" class="gradient-corona-img img-fluid"
                                        alt="Bible Image" loading="lazy">
                                </div>

                                <!-- Verse Content - Center -->
                                <div class="verse-content text-center flex-grow-1">
                                    <div id="verse-of-the-day" class="verse-text">
                                        <span class="loading-verse">Loading today's verse...</span>
                                    </div>
                                </div>

                                <!-- Button - Right -->
                                <div class="ms-3">
                                    <a href="https://www.bible.com/verse-of-the-day" target="_blank"
                                        rel="noopener noreferrer" class="btn get-started-btn">
                                        <span class="d-none d-md-inline">Read More</span>
                                        <span class="d-md-none">More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Cards -->
            <div class="card1">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="span2"><br />
                                            <i class="fa-solid fa-calendar fa-3x" style="color: #667eea;"></i><br />
                                        </div>
                                        <div class="d-flex align-items-center align-self-start">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success">
                                            <a class="nav-link" href="{{ url('see_members') }}">
                                                <span class="mdi mdi-arrow-right icon-item"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer1">
                                <h6 class="text-muted2 font-weight-normal">Upcoming Events</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="span2"><br />
                                            <i class="fa-solid fa-user-plus fa-3x" style="color: #667eea;"></i><br />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success">
                                            <a class="nav-link" href="{{ url('member_registration') }}">
                                                <span class="mdi mdi-arrow-right icon-item"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer1">
                                <h6 class="text-muted2 font-weight-normal">Member Registration</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="span2"><br />
                                            <i class="fas fa-praying-hands fa-3x" style="color: #667eea;"></i><br />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success">
                                            <span class="mdi mdi-arrow-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer1">
                                <h6 class="text-muted2 font-weight-normal">Prayer Requests</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="span2"><br />
                                            <i class="fa fa-money-check-alt fa-3x" style="color: #667eea;"></i><br />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success">
                                            <a class="nav-link" href="{{ url('/redirect') }}">
                                                <span class="mdi mdi-arrow-right icon-item"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer1">
                                <h6 class="text-muted2 font-weight-normal">Givings</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Content Row -->
                <div class="row">
                    <!-- Enhanced Notes Card -->
                    <div class="col-md-4 col-sm-12 grid-margin stretch-card">
                        <div class="card d-flex flex-column notes-card uniform-height-card">
                            <div class="notes-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="mb-0">
                                        <i class="fas fa-sticky-note me-2"></i>My Notes
                                    </h5>
                                </div>
                                <span class="notes-counter" id="notesCounter">0 notes</span>
                            </div>

                            <div class="card-body p-0 d-flex flex-column" style="flex: 1;">
                                <!-- Enhanced Search Box -->
                                <div class="search-box">
                                    <div class="search-wrapper">
                                        <input type="text" class="form-control search-input" id="searchNotes"
                                            placeholder="Search your notes...">
                                    </div>
                                </div>

                                <!-- Enhanced Notes List -->
                                <div class="notes-content" id="notesList" style="flex: 1;">
                                    <div class="empty-state" id="emptyState">
                                        <i class="fas fa-clipboard-list fa-3x mb-3"></i>
                                        <p>No notes yet. Add your first note below!</p>
                                    </div>
                                </div>

                                <!-- Enhanced Add Note Form -->
                                <div class="add-note-form">
                                    <form id="addNoteForm">
                                        <div class="mb-3">
                                            <textarea class="form-control note-textarea" id="noteText"
                                                placeholder="Write your note here..." required></textarea>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="auto-save-indicator">
                                                <i class="fas fa-check-circle"></i>
                                                <span>Auto-saved</span>
                                            </div>
                                            <button type="submit" class="btn btn-add-note">
                                                <i class="fas fa-plus"></i>
                                                <span>Add Note</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="notes-footer">
                                <h6 class="mb-0">Personal Notes</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card -->
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card uniform-height-card">
                            <div class="card-body d-flex flex-column">
                                <iframe width="100%" height="100%" style="flex: 1; min-height: 280px;"
                                    src="https://www.youtube.com/embed/ebFLOyYts9g?si=hcZaV3qoqQMAiCxu"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="footer1 text-center">
                                <h6 class="text-muted2 fw-normal">Welcome</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Bible Card -->
                    <div class="col-md-4 col-sm-12 grid-margin stretch-card">
                        <div class="card d-flex flex-column bible-card uniform-height-card">
                            <iframe src="https://www.bible.com/bible/97/GEN.1.NLT" width="100%" height="100%"
                                style="border: none; min-height: 100%;" allowfullscreen loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    University SDA Church 2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                    Computer Science Dept
                    <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"
                        class="text-white">
                        Computer Systems Engineering
                    </a> from University Of Zambia
                </span>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Enhanced Verse of the Day Script -->
        <script>
            // Enhanced verse display functionality
            function displayVerse(verseData) {
                const votdContainer = document.getElementById('verse-of-the-day');
                if (!votdContainer) return;

                if (verseData && verseData.votd) {
                    // Clean and format the verse text
                    let cleanText = verseData.votd.text;

                    // Remove excessive quotes and clean formatting
                    cleanText = cleanText.replace(/^["']+|["']+$/g, '');
                    cleanText = cleanText.trim();

                    // Create formatted HTML
                    const verseHTML = `
                        <div class="verse-text">"${cleanText}"</div>
                        <div class="verse-reference">— ${verseData.votd.reference}</div>
                    `;

                    votdContainer.innerHTML = verseHTML;
                } else {
                    useFallbackVerse();
                }
            }

            // Fallback verses for when API fails
            const fallbackVerses = [
                {
                    text: "For I know the plans I have for you, declares the Lord, plans to prosper you and not to harm you, to give you hope and a future.",
                    reference: "Jeremiah 29:11"
                },
                {
                    text: "Trust in the Lord with all your heart and lean not on your own understanding; in all your ways submit to him, and he will make your paths straight.",
                    reference: "Proverbs 3:5-6"
                },
                {
                    text: "I can do all this through him who gives me strength.",
                    reference: "Philippians 4:13"
                },
                {
                    text: "The Lord is my shepherd, I lack nothing. He makes me lie down in green pastures, he leads me beside quiet waters.",
                    reference: "Psalm 23:1-2"
                },
                {
                    text: "And we know that in all things God works for the good of those who love him, who have been called according to his purpose.",
                    reference: "Romans 8:28"
                }
            ];

            function useFallbackVerse() {
                const votdContainer = document.getElementById('verse-of-the-day');
                if (!votdContainer) return;

                // Use a random fallback verse
                const randomVerse = fallbackVerses[Math.floor(Math.random() * fallbackVerses.length)];
                const verseHTML = `
                    <div class="verse-text">"${randomVerse.text}"</div>
                    <div class="verse-reference">— ${randomVerse.reference}</div>
                `;
                votdContainer.innerHTML = verseHTML;
            }

            // Legacy callback for Bible Gateway - simplified approach
            function myVotdCallback(data) {
                displayVerse(data);
            }

            // Initialize verse immediately with fallback, then try to load from API
            document.addEventListener('DOMContentLoaded', function () {
                // Show fallback verse immediately
                useFallbackVerse();

                // Try to load from Bible Gateway API
                setTimeout(function () {
                    const script = document.createElement('script');
                    script.src = 'https://www.biblegateway.com/votd/get/?format=json&version=NIV&callback=myVotdCallback';
                    script.onerror = function () {
                        console.log('Bible Gateway API unavailable, using fallback verse');
                    };
                    document.head.appendChild(script);
                }, 1000);
            });
        </script>

        <!-- Bootstrap 4 JS + Popper.js + jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

        <!-- Enhanced Notes Plugin JavaScript -->
        <script>
            class EnhancedNotesPlugin {
                constructor() {
                    this.notes = this.loadNotes() || [];
                    this.init();
                }

                init() {
                    this.renderNotes();
                    this.bindEvents();
                    this.updateCounter();
                }

                bindEvents() {
                    // Add note form submission
                    const addForm = document.getElementById('addNoteForm');
                    if (addForm) {
                        addForm.addEventListener('submit', (e) => {
                            e.preventDefault();
                            this.addNote();
                        });
                    }

                    // Search functionality
                    const searchInput = document.getElementById('searchNotes');
                    if (searchInput) {
                        searchInput.addEventListener('input', (e) => {
                            this.searchNotes(e.target.value);
                        });
                    }

                    // Auto-save simulation
                    const noteTextArea = document.getElementById('noteText');
                    if (noteTextArea) {
                        noteTextArea.addEventListener('input', () => {
                            this.simulateAutoSave();
                        });
                    }
                }

                addNote() {
                    const noteTextElement = document.getElementById('noteText');
                    if (!noteTextElement) return;

                    const noteText = noteTextElement.value.trim();
                    if (!noteText) return;

                    const note = {
                        id: Date.now(),
                        text: noteText,
                        timestamp: this.formatTimestamp(new Date()),
                        date: new Date().toISOString()
                    };

                    this.notes.unshift(note);
                    this.saveNotes();
                    this.renderNotes();
                    this.updateCounter();

                    // Clear form
                    noteTextElement.value = '';

                    // Show success feedback
                    this.showFeedback('Note added successfully!', 'success');
                }

                deleteNote(id) {
                    if (confirm('Are you sure you want to delete this note?')) {
                        this.notes = this.notes.filter(note => note.id !== id);
                        this.saveNotes();
                        this.renderNotes();
                        this.updateCounter();
                        this.showFeedback('Note deleted!', 'info');
                    }
                }

                editNote(id) {
                    const note = this.notes.find(n => n.id === id);
                    if (!note) return;

                    const newText = prompt('Edit your note:', note.text);
                    if (newText !== null && newText.trim() !== '') {
                        note.text = newText.trim();
                        note.timestamp = this.formatTimestamp(new Date()) + ' (edited)';
                        this.saveNotes();
                        this.renderNotes();
                        this.showFeedback('Note updated!', 'success');
                    }
                }

                renderNotes(notesToRender = this.notes) {
                    const notesList = document.getElementById('notesList');
                    const emptyState = document.getElementById('emptyState');

                    if (!notesList) return;

                    if (notesToRender.length === 0) {
                        notesList.innerHTML = `
                            <div class="empty-state">
                                <i class="fas fa-clipboard-list fa-4x"></i>
                                <p>No notes found.<br>Try adjusting your search or add a new note!</p>
                            </div>
                        `;
                        return;
                    }

                    const notesHTML = notesToRender.map(note => `
                        <div class="note-item">
                            <div class="note-meta">
                                <i class="fas fa-clock"></i>
                                <span>${note.timestamp}</span>
                            </div>
                            <div class="note-text">${this.escapeHtml(note.text)}</div>
                            <div class="note-actions">
                                <button class="btn btn-note-action btn-edit" onclick="notesPlugin.editNote(${note.id})">
                                    <i class="fas fa-edit"></i>
                                    <span>Edit</span>
                                </button>
                                <button class="btn btn-note-action btn-delete" onclick="notesPlugin.deleteNote(${note.id})">
                                    <i class="fas fa-trash"></i>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>
                    `).join('');

                    notesList.innerHTML = notesHTML;
                }

                searchNotes(query) {
                    if (!query.trim()) {
                        this.renderNotes();
                        return;
                    }

                    const filteredNotes = this.notes.filter(note =>
                        note.text.toLowerCase().includes(query.toLowerCase())
                    );

                    this.renderNotes(filteredNotes);
                }

                updateCounter() {
                    const counterElement = document.getElementById('notesCounter');
                    if (!counterElement) return;

                    const count = this.notes.length;
                    const text = count === 1 ? '1 note' : `${count} notes`;
                    counterElement.textContent = text;
                }

                showFeedback(message, type) {
                    const toast = document.createElement('div');
                    toast.className = `feedback-toast ${type}`;
                    toast.innerHTML = `
                        <i class="fas fa-${type === 'success' ? 'check' : 'info'}-circle"></i>
                        <span>${message}</span>
                    `;

                    document.body.appendChild(toast);

                    setTimeout(() => toast.classList.add('show'), 100);

                    setTimeout(() => {
                        toast.classList.remove('show');
                        setTimeout(() => toast.remove(), 300);
                    }, 3000);
                }

                simulateAutoSave() {
                    const indicator = document.querySelector('.auto-save-indicator');
                    if (!indicator) return;

                    const span = indicator.querySelector('span');
                    const icon = indicator.querySelector('i');

                    if (span) span.textContent = 'Saving...';
                    if (icon) {
                        icon.className = 'fas fa-spinner fa-spin';
                    }

                    setTimeout(() => {
                        if (span) span.textContent = 'Auto-saved';
                        if (icon) {
                            icon.className = 'fas fa-check-circle';
                        }
                    }, 1000);
                }

                formatTimestamp(date) {
                    const now = new Date();
                    const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
                    const yesterday = new Date(today - 86400000);
                    const noteDate = new Date(date.getFullYear(), date.getMonth(), date.getDate());

                    if (noteDate.getTime() === today.getTime()) {
                        return `Today, ${date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}`;
                    } else if (noteDate.getTime() === yesterday.getTime()) {
                        return `Yesterday, ${date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}`;
                    } else {
                        return date.toLocaleDateString() + ', ' + date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    }
                }

                escapeHtml(text) {
                    const map = {
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        '"': '&quot;',
                        "'": '&#039;'
                    };
                    return text.replace(/[&<>"']/g, m => map[m]);
                }

                loadNotes() {
                    // Since we can't use localStorage in artifacts, we'll use a variable
                    // In your actual implementation, replace this with localStorage
                    return this.notes || [];
                }

                saveNotes() {
                    // Since we can't use localStorage in artifacts, this is a placeholder
                    // In your actual implementation, use: localStorage.setItem('churchNotes', JSON.stringify(this.notes));
                    console.log('Notes would be saved to localStorage:', this.notes);
                }
            }

            // Initialize enhanced notes plugin when DOM is loaded
            let notesPlugin;
            document.addEventListener('DOMContentLoaded', function() {
                notesPlugin = new EnhancedNotesPlugin();
            });

            // Global functions for backward compatibility
            function editNote(id) {
                if (notesPlugin) notesPlugin.editNote(id);
            }

            function deleteNote(id) {
                if (notesPlugin) notesPlugin.deleteNote(id);
            }
        </script>
    </div>
</body>
</html>