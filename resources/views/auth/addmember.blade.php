<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager - Modern Registration System" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <title>Church Registration - Modern Design</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #04AA6D;
            --primary-dark: #038a5a;
            --accent-color: #e4af00;
            --text-primary: #2c3e50;
            --text-secondary: #6c757d;
            --background-main: #0f172a;
            --background-card: rgba(255, 255, 255, 0.95);
            --background-overlay: rgba(15, 23, 42, 0.8);
            --border-color: #e2e8f0;
            --success-color: #10b981;
            --error-color: #ef4444;
            --warning-color: #f59e0b;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--background-main);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                var(--primary-color) 0%, 
                #1e40af 25%, 
                #7c3aed 50%, 
                var(--accent-color) 75%, 
                var(--primary-color) 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            z-index: -2;
        }

        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--background-overlay);
            z-index: -1;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Floating particles */
        .particle {
            position: fixed;
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s infinite linear;
            z-index: -1;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% {
                transform: translateY(-10vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Main Container */
        .main-container {
            min-height: 100vh;
            padding: 2rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            width: 100%;
            max-width: 900px;
            background: var(--background-card);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: var(--shadow-xl);
            position: relative;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header Section */
        .form-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .logo-container {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: var(--shadow-lg);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .logo-container i {
            font-size: 2rem;
            color: white;
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .form-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
            font-weight: 400;
        }

        /* Alert Styles */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border: 1px solid;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-danger {
            background: linear-gradient(135deg, #fef2f2, #fee2e2);
            border-color: var(--error-color);
            color: #dc2626;
        }

        .alert-warning {
            background: linear-gradient(135deg, #fffbeb, #fef3c7);
            border-color: var(--warning-color);
            color: #d97706;
        }

        /* Form Styles */
        .form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .form-row.two-col {
            grid-template-columns: 1fr 1fr;
        }

        .form-group {
            position: relative;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: var(--text-primary);
        }

        .form-control:focus, .form-select:focus {
            outline: none;
            border-color: var(--primary-color);
            background: white;
            box-shadow: 0 0 0 3px rgba(4, 170, 109, 0.1);
            transform: translateY(-2px);
        }

        .form-control::placeholder {
            color: var(--text-secondary);
            opacity: 0.7;
        }

        /* Floating Labels */
        .floating-label {
            position: relative;
        }

        .floating-label label {
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 1rem;
            color: var(--text-secondary);
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: white;
            padding: 0 0.5rem;
        }

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label {
            top: -0.5rem;
            left: 1rem;
            font-size: 0.875rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        /* File Upload */
        .file-upload-area {
            border: 2px dashed var(--border-color);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .file-upload-area::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(4, 170, 109, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .file-upload-area:hover {
            border-color: var(--primary-color);
            background: rgba(4, 170, 109, 0.05);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .file-upload-area:hover::before {
            left: 100%;
        }

        .file-upload-area.has-file {
            border-color: var(--success-color);
            background: rgba(16, 185, 129, 0.1);
        }

        .upload-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .upload-text {
            color: var(--text-primary);
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .upload-subtext {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }

        .file-name {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background: var(--success-color);
            color: white;
            border-radius: 8px;
            font-weight: 500;
            display: none;
        }

        /* Map Styles */
        #map {
            height: 350px;
            width: 100%;
            border-radius: 12px;
            margin: 1.5rem 0;
            box-shadow: var(--shadow-md);
            overflow: hidden;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 1.25rem 2rem;
            font-size: 1.1rem;
            font-weight: 700;
            color: white;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            margin-top: 2rem;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .submit-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .footer a {
            color: var(--accent-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: white;
        }

        /* Session Warning */
        .session-warning {
            position: fixed;
            top: 2rem;
            right: 2rem;
            background: var(--warning-color);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            z-index: 1000;
            display: none;
            animation: slideInRight 0.5s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Loading States */
        .loading {
            position: relative;
            color: transparent !important;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Error States */
        .error {
            border-color: var(--error-color) !important;
            background: rgba(239, 68, 68, 0.1) !important;
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-container {
                padding: 1rem;
            }

            .form-container {
                padding: 2rem;
                border-radius: 16px;
            }

            .form-row.two-col {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .form-title {
                font-size: 2rem;
            }

            .logo-container {
                width: 60px;
                height: 60px;
            }

            .logo-container i {
                font-size: 1.5rem;
            }

            #map {
                height: 250px;
            }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>
    <!-- Floating particles -->
    <div class="particles-container"></div>

    <!-- Session timeout warning -->
    <div class="session-warning" id="sessionWarning">
        <strong>Session Warning:</strong> Your session will expire soon. Please save your work.
        <button onclick="this.parentElement.style.display='none'" style="background:none;border:none;color:white;margin-left:1rem;cursor:pointer;">×</button>
    </div>

    <div class="main-container">
        <div class="form-container">
            <!-- Error Messages -->
            <div id="errorAlert" class="alert alert-danger" style="display: none;">
                <strong>Please fix the following errors:</strong>
                <ul id="errorList"></ul>
            </div>

            <form id="registrationForm" enctype="multipart/form-data">
                <!-- Header -->
                <div class="form-header">
                    <div class="logo-container">
                        <i class="fas fa-church"></i>
                    </div>
                    <h1 class="form-title">Church Registration</h1>
                    <p class="form-subtitle">Join our community of faith and fellowship</p>
                </div>

                <!-- Name Fields -->
                <div class="form-row two-col">
                    <div class="form-group floating-label">
                        <input type="text" id="fname" name="fname" class="form-control" placeholder=" " required>
                        <label for="fname">First Name</label>
                    </div>
                    <div class="form-group floating-label">
                        <input type="text" id="mname" name="mname" class="form-control" placeholder=" ">
                        <label for="mname">Middle Name</label>
                    </div>
                </div>

                <div class="form-row two-col">
                    <div class="form-group floating-label">
                        <input type="text" id="lname" name="lname" class="form-control" placeholder=" " required>
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="form-group floating-label">
                        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder=" " required>
                        <label for="mobile">Mobile Number</label>
                    </div>
                </div>

                <!-- Ministry and Registration Type -->
                <div class="form-row two-col">
                    <div class="form-group">
                        <select id="ministry" name="ministry" class="form-select" required>
                            <option value="">Select Ministry</option>
                            <option value="None">None</option>
                            <option value="Choir">Choir</option>
                            <option value="Ushering">Ushering</option>
                            <option value="Prayer Band">Prayer Band</option>
                            <option value="Technical">Technical</option>
                            <option value="Prayer Warrior">Prayer Warrior</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="registeras" name="registeras" class="form-select" required>
                            <option value="">Register As</option>
                            <option value="Visitor">Visitor</option>
                            <option value="Member">Member</option>
                        </select>
                    </div>
                </div>

                <!-- Address -->
                <div class="form-row">
                    <div class="form-group floating-label">
                        <input type="text" id="address" name="address" class="form-control" placeholder=" " required>
                        <label for="address">Address</label>
                    </div>
                </div>

                <!-- Map -->
                <div id="map"></div>

                <!-- Occupation and Email -->
                <div class="form-row two-col">
                    <div class="form-group floating-label">
                        <input type="text" id="occupation" name="occupation" class="form-control" placeholder=" " required>
                        <label for="occupation">Occupation</label>
                    </div>
                    <div class="form-group floating-label">
                        <input type="email" id="email" name="email" class="form-control" placeholder=" ">
                        <label for="email">Email Address</label>
                    </div>
                </div>

                <!-- Document Upload and Birth Date -->
                <div class="form-row two-col">
                    <div class="form-group">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">
                            Upload Baptism Certificate
                        </label>
                        <input type="file" id="document" name="document" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required style="display: none;">
                        <div class="file-upload-area" onclick="document.getElementById('document').click();">
                            <div class="upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="upload-text">Click to select file</div>
                            <div class="upload-subtext">PDF, DOC, DOCX, JPG, JPEG, PNG (Max: 2MB)</div>
                            <div class="file-name" id="fileName"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">
                            Date of Birth
                        </label>
                        <input type="date" id="birthday" name="birthday" class="form-control" required>
                    </div>
                </div>

                <!-- Marital Status and Gender -->
                <div class="form-row two-col">
                    <div class="form-group">
                        <select id="marital" name="marital" class="form-select" required>
                            <option value="">Marital Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <!-- Registration Date -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="registrationdate" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-primary);">
                            Date of Registration
                        </label>
                        <input type="datetime-local" id="registrationdate" name="registrationdate" class="form-control" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn" id="submitBtn">
                    <i class="fas fa-user-plus"></i>
                    <span>Add Member</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div>
            <span>Copyright © University SDA Church 2024</span>
            <br>
            <span>Computer Science Dept - 
                <a href="#">Computer Systems Engineering</a> 
                from University Of Zambia
            </span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.querySelector('.particles-container');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Session management
        let sessionWarningTimer;
        const sessionTimeout = 25 * 60 * 1000; // 25 minutes

        function showSessionWarning() {
            document.getElementById('sessionWarning').style.display = 'block';
        }

        function resetSessionTimer() {
            clearTimeout(sessionWarningTimer);
            sessionWarningTimer = setTimeout(showSessionWarning, sessionTimeout);
            document.getElementById('sessionWarning').style.display = 'none';
        }

        // File upload handling
        function handleFileUpload() {
            const fileInput = document.getElementById('document');
            const fileUploadArea = document.querySelector('.file-upload-area');
            const fileName = document.getElementById('fileName');

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];

                if (file) {
                    // Check file size (2MB)
                    if (file.size > 2 * 1024 * 1024) {
                        showError('File size exceeds 2MB. Please choose a smaller file.');
                        e.target.value = '';
                        fileUploadArea.classList.remove('has-file');
                        fileName.style.display = 'none';
                        return;
                    }

                    // Check file type
                    const allowedTypes = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
                    const fileExtension = file.name.split('.').pop().toLowerCase();

                    if (!allowedTypes.includes(fileExtension)) {
                        showError('Invalid file type. Please upload PDF, DOC, DOCX, JPG, JPEG, or PNG files only.');
                        e.target.value = '';
                        fileUploadArea.classList.remove('has-file');
                        fileName.style.display = 'none';
                        return;
                    }

                    fileUploadArea.classList.add('has-file');
                    fileName.textContent = file.name;
                    fileName.style.display = 'block';
                } else {
                    fileUploadArea.classList.remove('has-file');
                    fileName.style.display = 'none';
                }
            });

            // Drag and drop functionality
            fileUploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--primary-color)';
            });

            fileUploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--border-color)';
            });

            fileUploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--border-color)';
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    fileInput.dispatchEvent(new Event('change'));
                }
            });
        }

        // Map initialization
        let map, marker;

        function initMap() {
            const defaultCoords = [-15.3875, 28.3228]; // Lusaka

            map = L.map('map').setView(defaultCoords, 13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
            }).addTo(map);

            marker = L.marker(defaultCoords, { draggable: true }).addTo(map);

            // Reverse geocode on drag end
            marker.on('dragend', function(e) {
                const { lat, lng } = e.target.getLatLng();
                fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`)
                    .then(res => res.json())
                    .then(data => {
                        if (data && data.display_name) {
                            document.getElementById('address').value = data.display_name;
                        }
                    })
                    .catch(err => console.log('Geocoding error:', err));
            });

            // Geocode on address change
            document.getElementById('address').addEventListener('change', function() {
                const query = this.value;
                if (query.trim()) {
                    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}`)
                        .then(res => res.json())
                        .then(data => {
                            if (data && data.length > 0) {
                                const lat = parseFloat(data[0].lat);
                                const lon = parseFloat(data[0].lon);
                                map.setView([lat, lon], 15);
                                marker.setLatLng([lat, lon]);
                            }
                        })
                        .catch(err => console.log('Search error:', err));
                }
            });
        }

        // Form validation and submission
        let isSubmitting = false;

        function validateForm() {
            const errors = [];
            const requiredFields = document.querySelectorAll('[required]');

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    errors.push(`${field.labels?.[0]?.text