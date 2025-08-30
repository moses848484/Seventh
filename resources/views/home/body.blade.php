<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/addmember.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/viewmember.css" rel="stylesheet" />
    <title>View Church Members</title>

    <style>
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

        /* Notes Card Styles */
        .notes-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            height: 500px;
            border: none;
        }

        .notes-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 12px 12px 0 0;
            padding: 20px;
            flex-shrink: 0;
        }

        .notes-content {
            max-height: 280px;
            overflow-y: auto;
            flex: 1;
            padding: 15px;
        }

        .note-item {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 0 8px 8px 0;
            transition: all 0.3s ease;
        }

        .note-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .note-item.pinned {
            border-left: 4px solid #ffc107 !important;
            background: #fffdf0 !important;
        }

        .note-meta {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 8px;
            display: flex;
            justify-content: between;
            align-items: center;
        }

        .note-text {
            color: #495057;
            margin-bottom: 10px;
            word-wrap: break-word;
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
            padding: 20px;
            flex-shrink: 0;
            border-radius: 0 0 12px 12px;
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
            color: #6c757d;
            padding: 40px 20px;
        }

        .empty-state i {
            color: #dee2e6;
            margin-bottom: 15px;
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

        /* Card styling */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card1 {
            margin-top: 20px;
        }

        /* Uniform height for cards */
        .uniform-height-card {
            height: 500px;
        }

        .bible-card iframe {
            border-radius: 12px 12px 0 0;
            min-height: 460px;
        }

        /* Footer styling */
        .footer1 {
            background: #04AA6D;
            padding: 15px;
            border-top: 1px solid #04AA6D;
            border-radius: 0 0 12px 12px;
        }

        .text-muted2 {
            color: #ffffffff !important;
            font-size: 0.9rem;
        }

        .text-muted1 {
            color: #adb5bd !important;
        }

        /* Search box */
        .search-box {
            border-bottom: 1px solid #dee2e6;
        }

        /* Icon styles */
        .span2 {
            text-align: center;
            color: #667eea;
        }

        .icon-box-success {
            text-align: center;
        }

        .nav-link {
            color: #667eea;
            text-decoration: none;
        }

        .nav-link:hover {
            color: #5a6fd8;
        }

        /* Main footer */
        .footer {
            background: #343a40;
            color: white;
            padding: 20px;
            margin-top: 40px;
            border-radius: 12px;
        }

        .text-white a {
            color: #fff !important;
            text-decoration: none;
        }

        /* Responsive adjustments */
        @media (max-width:768px) {
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

            .notes-card, .uniform-height-card {
                height: auto;
                min-height: 400px;
                margin-bottom: 20px;
            }

            .main-panel {
                padding: 10px;
            }
        }

        @media (max-width:576px) {
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

            .notes-card, .uniform-height-card {
                min-height: 350px;
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
                                    <img src="images/hands-praying.jpg" class="gradient-corona-img img-fluid"
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

            <!-- Main Cards Row -->
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
                                            <i class="fas fa-praying-hands"
                                                style='font-size:48px;color:#e4af00;'></i><br />
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

                <!-- Second Row with Notes, Video, and Bible -->
                <div class="row">
                    <!-- Notes Card -->
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
                                <div class="search-box p-3 pb-2">
                                    <input type="text" class="form-control" id="searchNotes" placeholder="Search notes...">
                                </div>

                                <!-- Notes List -->
                                <div class="notes-content" id="notesList" style="flex: 1;">
                                    <div class="empty-state" id="emptyState">
                                        <i class="fas fa-clipboard-list fa-3x"></i>
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
                                                <i class="fas fa-save me-1"></i>Saved locally
                                            </small>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus me-1"></i>Add
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card -->
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card uniform-height-card">
                            <div class="card-body d-flex flex-column p-0">
                                <iframe width="100%" height="100%" style="flex: 1; min-height: 460px; border-radius: 12px 12px 0 0;"
                                    src="https://www.youtube.com/embed/ebFLOyYts9g?si=hcZaV3qoqQMAiCxu"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="footer1 text-center">
                                <h6 class="text-muted2 fw-normal">Welcome Message</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Bible Card -->
                    <div class="col-md-4 col-sm-12 grid-margin stretch-card">
                        <div class="card d-flex flex-column bible-card uniform-height-card">
                            <div class="card-body p-0 d-flex flex-column" style="flex: 1;">
                                <iframe src="https://www.bible.com/bible/97/GEN.1.NLT" width="100%" height="100%"
                                    style="border: none; min-height: 460px; border-radius: 12px 12px 0 0;" allowfullscreen loading="lazy">
                                </iframe>
                            </div>
                            <div class="footer1 text-center">
                                <h6 class="text-muted2 fw-normal">Daily Bible Reading</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      @include('home.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Verse of the Day Script -->
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

    <!-- Notes Plugin Script -->
    <script>
        class NotesPlugin {
            constructor() {
                this.notes = this.loadNotesFromMemory();
                this.init();
            }

            init() {
                this.renderNotes();
                this.bindEvents();
                this.updateCounter();
            }

            bindEvents() {
                const addForm = document.getElementById('addNoteForm');
                const searchInput = document.getElementById('searchNotes');

                if (addForm) {
                    addForm.addEventListener('submit', e => {
                        e.preventDefault();
                        this.addNote();
                    });
                }

                if (searchInput) {
                    searchInput.addEventListener('input', e => this.searchNotes(e.target.value));
                }
            }

            loadNotesFromMemory() {
                // Use in-memory storage for the session
                if (!window.churchNotes) {
                    window.churchNotes = [];
                }
                return window.churchNotes;
            }

            saveNotesToMemory() {
                window.churchNotes = this.notes;
            }

            addNote() {
                const noteTextElement = document.getElementById('noteText');
                const noteText = noteTextElement.value.trim();
                
                if (!noteText) {
                    this.showError('Please enter a note');
                    return;
                }

                const newNote = {
                    id: Date.now(),
                    text: noteText,
                    created_at: new Date().toISOString(),
                    pinned: false
                };

                this.notes.unshift(newNote);
                this.saveNotesToMemory();
                this.renderNotes();
                this.updateCounter();
                noteTextElement.value = '';
                this.showSuccess('Note added successfully');
            }

            deleteNote(id) {
                if (!confirm('Are you sure you want to delete this note?')) return;

                this.notes = this.notes.filter(n => n.id !== id);
                this.saveNotesToMemory();
                this.renderNotes();
                this.updateCounter();
                this.showSuccess('Note deleted successfully');
            }

            editNote(id) {
                const note = this.notes.find(n => n.id === id);
                if (!note) return;

                const newText = prompt('Edit your note:', note.text);
                if (!newText || newText.trim() === note.text) return;

                note.text = newText.trim();
                this.saveNotesToMemory();
                this.renderNotes();
                this.showSuccess('Note updated successfully');
            }

            togglePin(id) {
                const note = this.notes.find(n => n.id === id);
                if (!note) return;

                note.pinned = !note.pinned;
                this.saveNotesToMemory();

                // Reorder notes - pinned first, then by date
                this.notes.sort((a, b) => {
                    if (a.pinned && !b.pinned) return -1;
                    if (!a.pinned && b.pinned) return 1;
                    return new Date(b.created_at) - new Date(a.created_at);
                });

                this.renderNotes();
                this.updateCounter();
                this.showSuccess(note.pinned ? 'Note pinned' : 'Note unpinned');
            }

            renderNotes(notesToRender = this.notes) {
                const notesList = document.getElementById('notesList');
                const emptyState = document.getElementById('emptyState');

                if (!notesList) return;

                // Clear existing notes
                const existingNotes = notesList.querySelectorAll('.note-item');
                existingNotes.forEach(note => note.remove());

                if (!notesToRender.length) {
                    if (emptyState) emptyState.style.display = 'block';
                    return;
                } else {
                    if (emptyState) emptyState.style.display = 'none';
                }

                // Sort: pinned first, then by created date (newest first)
                const sortedNotes = [...notesToRender].sort((a, b) => {
                    if (a.pinned && !b.pinned) return -1;
                    if (!a.pinned && b.pinned) return 1;
                    return new Date(b.created_at) - new Date(a.created_at);
                });

                sortedNotes.forEach(note => {
                    const noteEl = document.createElement('div');
                    noteEl.className = `note-item ${note.pinned ? 'pinned' : ''}`;
                    noteEl.innerHTML = `
                        <div class="note-meta">
                            <span><i class="fas fa-clock"></i> ${this.formatDate(note.created_at)}</span>
                            <button class="btn btn-sm ${note.pinned ? 'btn-warning' : 'btn-outline-secondary'} pin-btn" 
                                    title="${note.pinned ? 'Unpin note' : 'Pin note'}">
                                <i class="fas fa-thumbtack"></i>
                            </button>
                        </div>
                        <div class="note-text">${this.escapeHtml(note.text)}</div>
                        <div class="note-actions">
                            <button class="