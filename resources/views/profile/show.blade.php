<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="css/viewmember.css" type="text/css">
    <link rel="stylesheet" href="css/fontawesome-free-6.5.2-web/css/all.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>View Church Members</title>
    <style>
        /* Autofill input styling */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
            box-shadow: 0 0 0 30px white inset !important;
            -webkit-text-fill-color: #04AA6D !important;
        }

        /* Floating Label Styles */
        .form-floating {
            position: relative;
        }

        .form-floating input {
            padding: 1rem 0.75rem;
            padding-top: 1.5rem;
        }

        .form-floating label {
            position: absolute;
            top: 45%;
            left: 3%;
            transform: translateY(-50%);
            transition: all 0.2s ease-in-out;
            color: #04AA6D;
            pointer-events: none;
        }

        .form-floating input:focus+label,
        .form-floating input:not(:placeholder-shown)+label {
            top: 25%;
            transform: translateY(-100%);
            font-size: 0.80rem;
            color: #04AA6D;
            background: white;
        }

        /* Adjustments for input border */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .form-control:focus {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            color: #04AA6D;
        }

        .text-primary {
            color: #e4af00 !important;
        }

        .grid-margin {
            margin-bottom: 30px;
        }

        .stretch-card .card {
            height: 100%;
        }

        /* Card height standardization */
        .uniform-height-card {
            height: 400px;
        }

        @media (max-width: 767px) {
            .uniform-height-card {
                height: 700px !important;
            }
        }

        @media (max-width: 576px) {
            .uniform-height-card {
                height: 600px !important;
            }
        }

        /* Notes Card Styles */
        .notes-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border: none;
            display: flex;
            flex-direction: column;
        }

        .notes-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 15px;
            flex-shrink: 0;
        }

        .notes-content {
            max-height: 150px;
            overflow-y: auto;
            flex: 1;
        }

        .note-item {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 0 8px 8px 0;
            transition: all 0.3s ease;
        }

        .note-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .note-meta {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .note-text {
            color: #495057;
            margin-bottom: 8px;
        }

        .note-actions {
            text-align: right;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
        }

        .add-note-form {
            background: #fff;
            border-top: 1px solid #dee2e6;
            padding: 15px;
            flex-shrink: 0;
        }

        .notes-card .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #6c757d;
        }

        .search-box {
            margin-bottom: 15px;
        }

        .notes-counter {
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-select {
                color: #04AA6D;
                border-color: #04AA6D;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 768px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 1rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 0.75rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .container {
                padding: 2rem;
            }

            .footer span {
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .form-floating input {
                padding: 0.7rem 0.25rem;
                padding-top: 2rem;
                margin-bottom: 18px;
            }

            .form-floating label {
                font-size: 1rem;
                margin-top: -5px;
                margin-left: 7px;
            }

            .form-floating label:focus {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .container {
                padding: 1rem;
            }

            .textcolor {
                color: #04AA6D;
            }

            .footer span {
                font-size: 0.75rem;
            }
        }

        /* Improved Verse of the Day Card - Better Layout and Height */
        .corona-gradient-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            border: none;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            min-height: 140px;
            overflow: hidden;
            position: relative;
        }

        .corona-gradient-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
            pointer-events: none;
        }

        .corona-gradient-card .card-body {
            padding: 1.5rem;
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .corona-gradient-card .gradient-corona-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            flex-shrink: 0;
        }

        .verse-content {
            color: white;
            flex: 1;
        }

        .verse-content .verse-text {
            font-size: 1.1rem;
            line-height: 1.4;
            margin-bottom: 0.5rem;
            font-style: italic;
            text-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }

        .verse-content .verse-reference {
            font-size: 0.9rem;
            opacity: 0.9;
            font-weight: 500;
        }

        .corona-gradient-card .get-started-btn {
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .corona-gradient-card .get-started-btn:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            color: white;
        }

        .loading-verse {
            color: rgba(255,255,255,0.8);
            font-style: italic;
        }

        .error-verse {
            color: rgba(255,255,255,0.7);
            font-size: 0.9rem;
        }

        /* Responsive adjustments for verse card */
        @media (max-width: 768px) {
            .corona-gradient-card {
                min-height: 120px;
            }

            .corona-gradient-card .card-body {
                padding: 1rem;
            }

            .corona-gradient-card .gradient-corona-img {
                width: 60px;
                height: 60px;
            }

            .verse-content .verse-text {
                font-size: 1rem;
            }

            .corona-gradient-card .get-started-btn {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 576px) {
            .corona-gradient-card {
                min-height: 100px;
            }

            .corona-gradient-card .gradient-corona-img {
                width: 50px;
                height: 50px;
            }

            .verse-content .verse-text {
                font-size: 0.9rem;
                line-height: 1.3;
            }

            .verse-content .verse-reference {
                font-size: 0.8rem;
            }

            .corona-gradient-card .get-started-btn {
                padding: 0.3rem 0.6rem;
                font-size: 0.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body">
                            <div class="row align-items-center h-100 g-0">
                                <!-- Image Column - Far Left -->
                                <div class="col-auto pe-3">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=face" 
                                         class="gradient-corona-img img-fluid" 
                                         alt="Bible Image" loading="lazy">
                                </div>

                                <!-- Verse Content Column - Takes remaining space -->
                                <div class="col">
                                    <div class="verse-content">
                                        <div id="verse-of-the-day" class="verse-text">
                                            <span class="loading-verse">Loading today's verse...</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Button Column - Far Right -->
                                <div class="col-auto ps-3">
                                    <a href="https://www.bible.com/verse-of-the-day" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="btn get-started-btn">
                                        <span class="d-none d-md-inline">Read More</span>
                                        <span class="d-md-none">More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card1">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="span2"><br />
                                            <i class="fa-solid fa-calendar fa-3x"></i><br />
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
                                            <i class="fa-solid fa-user-plus fa-3x"></i><br />
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
                                            <i class="fas fa-praying-hands" style='font-size:48px;color:#e4af00;'></i><br />
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
                                            <i class="fa fa-money-check-alt fa-3x"></i><br />
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

                <div class="row">
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
                                <!-- Search Box -->
                                <div class="search-box p-3 pb-0">
                                    <input type="text" class="form-control" id="searchNotes" placeholder="Search notes...">
                                </div>

                                <!-- Notes List -->
                                <div class="notes-content p-3" id="notesList" style="flex: 1;">
                                    <div class="empty-state" id="emptyState">
                                        <i class="fas fa-clipboard-list fa-3x mb-3"></i>
                                        <p>No notes yet. Add your first note below!</p>
                                    </div>
                                </div>

                                <!-- Add Note Form -->
                                <div class="add-note-form">
                                    <form id="addNoteForm">
                                        <div class="mb-3">
                                            <textarea class="form-control" id="noteText" rows="2" placeholder="Write your note here..." required></textarea>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">
                                                <i class="fas fa-save me-1"></i>Auto-saved
                                            </small>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus me-1"></i>Add
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="footer1 text-center">
                                <h6 class="text-muted2 font-weight-normal mb-0">Personal Notes</h6>
                            </div>
                        </div>
                    </div>

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

        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    University SDA Church 2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                    Computer Science Dept
                    <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank" class="text-white">
                        Computer Systems Engineering
                    </a> from University Of Zambia
                </span>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Improved Verse of the Day Script -->
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
            document.addEventListener('DOMContentLoaded', function() {
                // Show fallback verse immediately
                useFallbackVerse();
                
                // Try to load from Bible Gateway API
                setTimeout(function() {
                    const script = document.createElement('script');
                    script.src = 'https://www.biblegateway.com/votd/get/?format=json&version=NIV&callback=myVotdCallback';
                    script.onerror = function() {
                        console.log('Bible Gateway API unavailable, using fallback verse');
                    };
                    document.head.appendChild(script);
                }, 1000);
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script>
            class NotesPlugin {
                constructor() {
                    this.notes = this.loadNotes();
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
                }

                addNote() {
                    const noteTextElement = document.getElementById('noteText');
                    if (!noteTextElement) return;

                    const noteText = noteTextElement.value.trim();
                    if (!noteText) return;

                    const note = {
                        id: Date.now(),
                        text: noteText,
                        timestamp: new Date().toLocaleString(),
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
                        note.timestamp = new Date().toLocaleString() + ' (edited)';
                        this.saveNotes();
                        this.renderNotes();
                        this.showFeedback('Note updated!', 'success');
                    }
                }

                renderNotes(notesToRender = this.notes) {
                    const notesList = document.getElementById('notesList');
                    const emptyState = document.getElementById('emptyState');

                    if (!notesList || !emptyState