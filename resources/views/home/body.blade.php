<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <meta name="csrf-token" content="demo-csrf-token-123">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Church Management Dashboard</title>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        /* Main Panel */
        .main-panel {
            min-height: 100vh;
            padding: 20px;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.12);
        }

        .card1 {
            margin-top: 30px;
        }

        .card-body {
            padding: 25px;
        }

        .footer1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 0 0 12px 12px;
            text-align: center;
        }

        .text-muted2 {
            color: white !important;
            margin: 0;
            font-weight: 500;
        }

        /* Icon Styling */
        .span2 {
            text-align: center;
            color: #667eea;
            margin-bottom: 15px;
        }

        .icon-box-success {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }

        .icon-box-success:hover {
            transform: scale(1.1);
        }

        .nav-link {
            color: white !important;
            text-decoration: none;
        }

        /* Corona Gradient Card Styles */
        .corona-gradient-card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            color: white;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 120px;
        }

        .corona-gradient-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="30" cy="25" r="0.5" fill="rgba(255,255,255,0.05)"/><circle cx="60" cy="15" r="0.8" fill="rgba(255,255,255,0.08)"/><circle cx="80" cy="40" r="1.2" fill="rgba(255,255,255,0.06)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') center/cover;
            z-index: 0;
        }

        .corona-gradient-card .card-body {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .gradient-corona-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            flex-shrink: 0;
            background: linear-gradient(45deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-size: 24px;
        }

        .verse-content {
            color: white;
            flex: 1;
            text-align: center;
            margin: 0 20px;
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
            text-decoration: none;
        }

        .get-started-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: white;
            text-decoration: none;
        }

        /* Notes Card Styles */
        .notes-card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            height: 500px;
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
            justify-content: space-between;
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

        /* Uniform height for cards */
        .uniform-height-card {
            height: 500px;
        }

        .bible-card iframe {
            border-radius: 0 0 12px 12px;
            min-height: 460px;
        }

        /* Footer */
        .footer {
            background: #343a40;
            color: white;
            padding: 20px;
            margin-top: 40px;
            border-radius: 12px;
        }

        .text-muted1 {
            color: #adb5bd !important;
        }

        .text-white a {
            color: #fff !important;
            text-decoration: none;
        }

        /* Toast notifications */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .custom-toast {
            min-width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        /* Search box */
        .search-box {
            border-bottom: 1px solid #dee2e6;
        }

        /* Responsive */
        @media (max-width: 768px) {
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

            .notes-card {
                height: auto;
                min-height: 400px;
            }

            .uniform-height-card {
                height: auto;
                min-height: 300px;
            }
        }

        @media (max-width: 576px) {
            .gradient-corona-img {
                width: 50px;
                height: 50px;
                font-size: 18px;
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

            .main-panel {
                padding: 10px;
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
                                    <div class="gradient-corona-img">
                                        <i class="fas fa-pray"></i>
                                    </div>
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
                                        <div class="span2">
                                            <i class="fa-solid fa-calendar fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box-success">
                                            <a class="nav-link" href="#events">
                                                <i class="fas fa-arrow-right"></i>
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
                                        <div class="span2">
                                            <i class="fa-solid fa-user-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box-success">
                                            <a class="nav-link" href="#registration">
                                                <i class="fas fa-arrow-right"></i>
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
                                        <div class="span2">
                                            <i class="fas fa-praying-hands fa-3x" style='color:#e4af00;'></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box-success">
                                            <a class="nav-link" href="#prayers">
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
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
                                        <div class="span2">
                                            <i class="fa fa-hand-holding-heart fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon-box-success">
                                            <a class="nav-link" href="#givings">
                                                <i class="fas fa-arrow-right"></i>
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
                                    <input type="text" class="form-control" id="searchNotes"
                                        placeholder="Search notes...">
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
                                            <textarea class="form-control" id="noteText" rows="2"
                                                placeholder="Write your note here..." required></textarea>
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

        <!-- Footer -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                    University SDA Church 2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                    Computer Science Dept - 
                    <a href="#" class="text-white">Computer Systems Engineering</a> 
                    from University Of Zambia
                </span>
            </div>
        </footer>

        <!-- Toast Container -->
        <div class="toast-container" id="toastContainer"></div>
    </div>

    <!-- Scripts -->
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
                let cleanText = verseData.votd.text;
                cleanText = cleanText.replace(/^["']+|["']+$/g, '');
                cleanText = cleanText.trim();

                const verseHTML = `
                    <div class="verse-text">"${cleanText}"</div>
                    <div class="verse-reference">— ${verseData.votd.reference}</div>
                `;
                votdContainer.innerHTML = verseHTML;
            } else {
                useFallbackVerse();
            }
        }

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

            const randomVerse = fallbackVerses[Math.floor(Math.random() * fallbackVerses.length)];
            const verseHTML = `
                <div class="verse-text">"${randomVerse.text}"</div>
                <div class="verse-reference">— ${randomVerse.reference}</div>
            `;
            votdContainer.innerHTML = verseHTML;
        }

        function myVotdCallback(data) {
            displayVerse(data);
        }

        document.addEventListener('DOMContentLoaded', function () {
            useFallbackVerse();

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

    <!-- Enhanced Notes Plugin Script -->
    <script>
        class NotesPlugin {
            constructor() {
                this.notes = [];
                this.storageKey = 'church_dashboard_notes';
                this.init();
            }

            async init() {
                this.loadNotesFromStorage();
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

            loadNotesFromStorage() {
                try {
                    const storedNotes = localStorage.getItem(this.storageKey);
                    if (storedNotes) {
                        this.notes = JSON.parse(storedNotes);
                    }
                } catch (error) {
                    console.warn('Could not load notes from storage:', error);
                    this.notes = [];
                }
            }

            saveNotesToStorage() {
                try {
                    localStorage.setItem(this.storageKey, JSON.stringify(this.notes));
                } catch (error) {
                    console.error('Could not save notes to storage:', error);
                    this.showError('Failed to save notes to storage');
                }
            }

            generateId() {
                return Date.now().toString(36) + Math.random().toString(36).substr(2);
            }

            addNote() {
                const noteTextElement = document.getElementById('noteText');
                const noteText = noteTextElement?.value.trim();
                
                if (!noteText) {
                    this.showError('Please enter a note');
                    return;
                }

                try {
                    const newNote = {
                        id: this.generateId(),
                        text: noteText,
                        created_at: new Date().toISOString(),
                        pinned: false
                    };

                    this.notes.unshift(newNote);
                    this.saveNotesToStorage();
                    this.renderNotes();
                    this.updateCounter();
                    noteTextElement.value = '';
                    this.showSuccess('Note added successfully');
                } catch (error) {
                    console.error('Error adding note:', error);
                    this.showError('Failed to add note');
                }
            }

            deleteNote(id) {
                if (!confirm('Are you sure you want to delete this note?')) return;

                try {
                    this.notes = this.notes.filter(n => n.id !== id);
                    this.saveNotesToStorage();
                    this.renderNotes();
                    this.updateCounter();
                    this.showSuccess('Note deleted successfully');
                } catch (error) {
                    console.error('Error deleting note:', error);
                    this.showError('Failed to delete note');
                }
            }

            editNote(id) {
                const note = this.notes.find(n => n.id === id);
                if (!note) return;

                const newText = prompt('Edit your note:', note.text);
                if (!newText || newText.trim() === note.text) return;

                try {
                    const index = this.notes.findIndex(n => n.id === id);
                    if (index !== -1) {
                        this.notes[index].text = newText.trim();
                        this.notes[index].updated_at = new Date().toISOString();
                        this.saveNotesToStorage();
                        this.renderNotes();
                        this.showSuccess('Note updated successfully');
                    }
                } catch (error) {
                    console.error('Error editing note:', error);
                    this.showError('Failed to update note');
                }
            }

            togglePin(id) {
                try {
                    const index = this.notes.findIndex(n => n.id === id);
                    if (index !== -1) {
                        this.notes[index].pinned = !this.notes[index].pinne