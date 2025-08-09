<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Hero Section</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <section class="slider_section position-relative text-white">
        <div class="slider_bg_box position-absolute w-100 h-100" style="top: 0; left: 0;">
            <img src="images/dorcas.jpg" alt="church" class="w-100 h-100" style="object-fit: cover;">
            <div class="position-absolute w-100 h-100"
                style="top: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%); z-index: 1;">
            </div>
        </div>

        <div id="customCarousel1" class="carousel slide position-relative" data-bs-ride="carousel" style="z-index: 2;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 d-flex align-items-center justify-content-center"
                                style="min-height: 100vh;">
                                <div class="detail-box text-center px-3 px-md-0">
                                    <h1 class="hero-title mb-4">
                                        Everyone's<br>
                                        Invited
                                    </h1>
                                    <p class="hero-subtitle mb-5">
                                        Wherever you are on your journey, there's a place for you at UNISDA.Church. Here
                                        you'll find a welcoming community ready to walk through life with you.
                                    </p>

                                    <div class="location-section mb-4">
                                        <div class="location-icon-text mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-crosshair2" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0a.5.5 0 0 1 .5.5v.518A7 7 0 0 1 14.982 7.5h.518a.5.5 0 0 1 0 1h-.518A7 7 0 0 1 8.5 14.982v.518a.5.5 0 0 1-1 0v-.518A7 7 0 0 1 1.018 8.5H.5a.5.5 0 0 1 0-1h.518A7 7 0 0 1 7.5 1.018V.5A.5.5 0 0 1 8 0m-.5 2.02A6 6 0 0 0 2.02 7.5h1.005A5 5 0 0 1 7.5 3.025zm1 1.005A5 5 0 0 1 12.975 7.5h1.005A6 6 0 0 0 8.5 2.02zM12.975 8.5A5 5 0 0 1 8.5 12.975v1.005a6 6 0 0 0 5.48-5.48zM7.5 12.975A5 5 0 0 1 3.025 8.5H2.02a6 6 0 0 0 5.48 5.48zM10 8a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
                                            </svg>
                                            <span class="location-text">&nbsp;&nbsp;Find Your Closest Location</span>
                                        </div>

                                        <div class="location-dropdown-container mb-4">
                                            <div class="custom-dropdown">
                                                <div class="dropdown-header" id="dropdownHeader">
                                                    <span class="dropdown-placeholder">Choose a Location</span>
                                                    <svg class="dropdown-arrow" width="12" height="8" viewBox="0 0 12 8" fill="none">
                                                        <path d="M1 1.5L6 6.5L11 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </div>
                                                <div class="dropdown-list" id="dropdownList">
                                                    <div class="dropdown-item" data-value="unza-campus">
                                                        <div class="location-info">
                                                            <div class="location-name">UNZA Great East Road Campus</div>
                                                            <div class="service-section">
                                                                <div class="service-category">
                                                                    <span class="service-icon">S</span>
                                                                    <span class="service-label">SERVICE & LIFEKIDS</span>
                                                                </div>
                                                                <div class="service-day">Sunday</div>
                                                                <div class="service-times">
                                                                    <span class="time-slot">8:30 AM</span>
                                                                    <span class="time-slot">10:00 AM</span>
                                                                    <span class="time-slot">11:30 AM</span>
                                                                    <span class="time-slot">1:00 PM</span>
                                                                </div>
                                                                <div class="service-category mt-2">
                                                                    <span class="service-icon youth">Y</span>
                                                                    <span class="service-label">SWITCH YOUTH</span>
                                                                </div>
                                                                <div class="service-day">Wednesday</div>
                                                                <div class="service-times">
                                                                    <span class="time-slot">6:00 PM</span>
                                                                    <span class="time-slot">7:00 PM</span>
                                                                </div>
                                                            </div>
                                                            <div class="location-address">
                                                                <svg class="address-icon" width="12" height="12" fill="currentColor">
                                                                    <path d="M6 0C2.7 0 0 2.7 0 6c0 4.5 6 10 6 10s6-5.5 6-10c0-3.3-2.7-6-6-6zm0 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                                                                </svg>
                                                                Great East Road, University of Zambia, Lusaka
                                                            </div>
                                                            <div class="location-phone">
                                                                <svg class="phone-icon" width="12" height="12" fill="currentColor">
                                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122L9.98 10.98s-.787.787-1.981.787-4.906-3.525-4.906-4.719.787-1.981.787-1.981l.549-1.804a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                                                                </svg>
                                                                +260 97 123 4567
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="dropdown-item" data-value="olympia-church">
                                                        <div class="location-info">
                                                            <div class="location-name">UNISDA Katima Mulilo Road</div>
                                                            <div class="service-section">
                                                                <div class="service-category">
                                                                    <span class="service-icon">S</span>
                                                                    <span class="service-label">SERVICE & LIFEKIDS</span>
                                                                </div>
                                                                <div class="service-day">Saturday</div>
                                                                <div class="service-times">
                                                                    <span class="time-slot">8:30 AM</span>
                                                                    <span class="time-slot">10:30 AM</span>
                                                                </div>
                                                                <div class="service-category mt-2">
                                                                    <span class="service-icon youth">Y</span>
                                                                    <span class="service-label">SWITCH YOUTH</span>
                                                                </div>
                                                                <div class="service-day">Thursday</div>
                                                                <div class="service-times">
                                                                    <span class="time-slot">6:00 PM</span>
                                                                </div>
                                                            </div>
                                                            <div class="location-address">
                                                                <svg class="address-icon" width="12" height="12" fill="currentColor">
                                                                    <path d="M6 0C2.7 0 0 2.7 0 6c0 4.5 6 10 6 10s6-5.5 6-10c0-3.3-2.7-6-6-6zm0 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                                                                </svg>
                                                                25210 Katima Mulilo Road, Olympia, Lusaka
                                                            </div>
                                                            <div class="location-phone">
                                                                <svg class="phone-icon" width="12" height="12" fill="currentColor">
                                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122L9.98 10.98s-.787.787-1.981.787-4.906-3.525-4.906-4.719.787-1.981.787-1.981l.549-1.804a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                                                                </svg>
                                                                260 211 293 525
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item" data-value="online">
                                                        <div class="location-info">
                                                            <div class="location-name">Online Service</div>
                                                            <div class="service-section">
                                                                <div class="service-category">
                                                                    <span class="service-icon">S</span>
                                                                    <span class="service-label">SERVICE & LIFEKIDS</span>
                                                                </div>
                                                                <div class="service-day">Sunday</div>
                                                                <div class="service-times">
                                                                    <span class="time-slot">9:00 AM (CAT)</span>
                                                                    <span class="time-slot">11:00 AM (CAT)</span>
                                                                </div>
                                                                <div class="service-category mt-2">
                                                                    <span class="service-icon youth">Y</span>
                                                                    <span class="service-label">SWITCH YOUTH</span>
                                                                </div>
                                                                <div class="service-day">Wednesday</div>
                                                                <div class="service-times">
                                                                    <span class="time-slot">6:00 PM (CAT)</span>
                                                                </div>
                                                            </div>
                                                            <div class="location-address">
                                                                <svg class="address-icon" width="12" height="12" fill="currentColor">
                                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V2a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 8.105V3.383zm-.034 6.878L9.271 8.696 8 9.583 6.728 8.696l-5.694 1.565A1 1 0 0 0 2 11h12a1 1 0 0 0 .966-.739zM1 8.105l4.708-1.897L1 3.383v4.722z"/>
                                                                </svg>
                                                                Available worldwide via live stream
                                                            </div>
                                                            <div class="location-phone">
                                                                <svg class="phone-icon" width="12" height="12" fill="currentColor">
                                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 9.105V5.383zm-.034 6.878L9.271 9.696 8 10.583 6.728 9.696l-5.694 1.565A1 1 0 0 0 2 12h12a1 1 0 0 0 .966-.739zM1 9.105l4.708-1.897L1 5.383v3.722z"/>
                                                                </svg>
                                                                online@church.zm
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="mapContainer" style="display: none;">
                                            <div id="map" style="height: 300px; border-radius: 8px; margin-top: 20px;">
                                            </div>

                                            <div id="locationInfo" class="location-info-card mt-3"
                                                style="display: none;">
                                                <div class="card bg-light">
                                                    <div class="card-body text-dark">
                                                        <h5 class="card-title" id="locationName"></h5>
                                                        <p class="card-text">
                                                            <small class="text-muted" id="locationAddress"></small>
                                                        </p>
                                                        <div id="serviceTimes"></div>
                                                        <div id="contactInfo" class="mt-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Hero Section Fonts and Styling */
        .hero-title {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            text-align: left;
            letter-spacing: -0.02em;
            margin-top: -200px;
            color: #ffffff !important;
        }

        .hero-subtitle {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.25rem;
            font-weight: 400;
            line-height: 1.6;
            text-align: left;
            color: rgba(255, 255, 255, 0.95);
            max-width: 700px;
            margin-top: -200px;
            margin: 0 auto 3rem auto;
        }

        /* Location Section Styling */
        .location-section {
            max-width: 600px;
            margin: 0 auto;
        }

        .location-icon-text {
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.9);
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 3px;
        }

        /* Custom Dropdown Styling */
        .custom-dropdown {
            position: relative;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        .dropdown-header {
            background-color: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 12px;
            padding: 16px 20px;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            color: #333;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        .dropdown-header:hover {
            background-color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .dropdown-arrow {
            transition: transform 0.3s ease;
            color: #666;
        }

        .dropdown-header.active .dropdown-arrow {
            transform: rotate(180deg);
        }

        .dropdown-list {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            margin-top: 4px;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            max-height: 500px;
            overflow-y: auto;
        }

        .dropdown-list.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            padding: 20px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            border-bottom: 1px solid #f0f0f0;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .location-name {
            font-weight: 600;
            font-size: 1.1rem;
            color: #2c3e50;
            margin-bottom: 12px;
        }

        .service-section {
            margin-bottom: 12px;
        }

        .service-category {
            display: flex;
            align-items: center;
            margin-bottom: 6px;
        }

        .service-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #4a5568;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 600;
            margin-right: 8px;
        }

        .service-icon.youth {
            background-color: #2d3748;
        }

        .service-label {
            font-size: 11px;
            font-weight: 600;
            color: #4a5568;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .service-day {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 6px;
            font-size: 0.95rem;
        }

        .service-times {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 8px;
        }

        .time-slot {
            background-color: #f7f7f7;
            padding: 4px 10px;
            border-radius: 16px;
            font-size: 0.85rem;
            font-weight: 500;
            color: #5a5a5a;
        }

        .location-address,
        .location-phone {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 4px;
        }

        .address-icon,
        .phone-icon {
            margin-right: 8px;
            color: #888;
        }

        /* Map styling */
        .leaflet-popup-content-wrapper {
            border-radius: 8px;
        }

        .location-info-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }

        /* Slider section positioning */
        .slider_section {
            min-height: 100vh;
            z-index: 1;
        }

        .slider_bg_box img {
            object-fit: cover;
        }

        /* Responsive Typography */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.125rem;
            }

            .detail-box {
                padding: 2rem 1rem;
            }

            .location-section {
                max-width: 100%;
            }

            #map {
                height: 250px;
            }

            .dropdown-item {
                padding: 16px;
            }

            .service-times {
                gap: 6px;
            }

            .time-slot {
                font-size: 0.8rem;
                padding: 3px 8px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.25rem;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 0.95rem;
            }

            .dropdown-header {
                padding: 12px 16px;
                font-size: 0.95rem;
            }

            #map {
                height: 200px;
            }

            .dropdown-item {
                padding: 14px;
            }

            .location-name {
                font-size: 1rem;
            }

            .service-times {
                gap: 4px;
            }

            .time-slot {
                font-size: 0.75rem;
                padding: 2px 6px;
            }
        }
    </style>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let map;
        let currentMarker;

        // Location data
        const locations = {
            'unza-campus': {
                name: 'UNZA Great East Road Campus',
                address: 'Great East Road, University of Zambia, Lusaka, Zambia',
                coordinates: [-15.3875, 28.3228],
                serviceTimes: {
                    'Sunday': '8:30 AM, 10:00 AM, 11:30 AM, 1:00 PM',
                    'Wednesday': '6:00 PM, 7:00 PM'
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'unza@church.zm'
                },
                slug: 'unza-campus'
            },
            'olympia-church': {
                name: 'UNISDA Katima Mulilo Road',
                address: '25210 Katima Mulilo Road, Olympia, Lusaka, Zambia',
                coordinates: [-15.3946, 28.2853],
                serviceTimes: {
                    'Saturday': '8:30 AM, 10:30 AM',
                    'Thursday': '6:00 PM'
                },
                contact: {
                    phone: '260 211 293 525',
                    email: 'olympia@church.zm'
                },
                slug: 'olympia-church'
            },
            'online': {
                name: 'Online Service',
                address: 'Available worldwide via live stream',
                coordinates: null,
                serviceTimes: {
                    'Sunday': '9:00 AM, 11:00 AM (CAT)',
                    'Wednesday': '6:00 PM (CAT)'
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'online@church.zm',
                    streamingUrl: 'https://church.zm/live'
                },
                slug: 'online'
            }
        };

        // Initialize dropdown functionality
        function initializeDropdown() {
            const dropdownHeader = document.getElementById('dropdownHeader');
            const dropdownList = document.getElementById('dropdownList');
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            dropdownHeader.addEventListener('click', function() {
                dropdownList.classList.toggle('show');
                dropdownHeader.classList.toggle('active');
            });

            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    const locationName = this.querySelector('.location-name').textContent;
                    
                    dropdownHeader.querySelector('.dropdown-placeholder').textContent = locationName;
                    dropdownList.classList.remove('show');
                    dropdownHeader.classList.remove('active');

                    if (locations[value]) {
                        handleLocationSelection(value);
                    }
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.custom-dropdown')) {
                    dropdownList.classList.remove('show');
                    dropdownHeader.classList.remove('active');
                }
            });
        }

        // Initialize map
        function initializeMap() {
            if (map) {
                map.remove();
            }

            // Center map on Lusaka
            map = L.map('map').setView([-15.3875, 28.3228], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
        }

        // Add marker to map
        function addLocationMarker(location) {
            if (currentMarker) {
                map.removeLayer(currentMarker);
            }

            if (location.coordinates) {
                currentMarker = L.marker(location.coordinates).addTo(map);

                const popupContent = `
                    <div style="text-align: center;">
                        <h6><strong>${location.name}</strong></h6>
                        <p style="margin: 5px 0; color: #666;">${location.address}</p>
                    </div>
                `;

                currentMarker.bindPopup(popupContent).openPopup();
                map.setView(location.coordinates, 15);
            }
        }

        // Update location info card
        function updateLocationInfo(location) {
            document.getElementById('locationName').textContent = location.name;
            document.getElementById('locationAddress').textContent = location.address;

            // Service times
            const serviceTimesHtml = Object.entries(location.serviceTimes)
                .map(([day, time]) => `<small><strong>${day}:</strong> ${time}</small>`)
                .join('<br>');
            document.getElementById('serviceTimes').innerHTML = serviceTimesHtml;

            // Contact info
            let contactHtml = `<small><strong>Phone:</strong> ${location.contact.phone}<br>`;
            contactHtml += `<strong>Email:</strong> ${location.contact.email}</small>`;
            if (location.contact.streamingUrl) {
                contactHtml += `<br><small><strong>Stream:</strong> <a href="${location.contact.streamingUrl}" target="_blank">Watch Live</a></small>`;
            }
            document.getElementById('contactInfo').innerHTML = contactHtml;
        }

        // Handle location selection
        function handleLocationSelection(selectedValue) {
            const mapContainer = document.getElementById('mapContainer');
            const locationInfo = document.getElementById('locationInfo');

            if (selectedValue && locations[selectedValue]) {
                const location = locations[selectedValue];

                if (location.coordinates) {
                    // Show map for physical locations
                    mapContainer.style.display = 'block';

                    if (!map) {
                        initializeMap();
                    }

                    addLocationMarker(location);
                } else {
                    // Hide map for online service
                    mapContainer.style.display = 'block';
                    if (map) {
                        map.remove();
                        map = null;
                    }
                    document.getElementById('map').innerHTML = '<div class="d-flex align-items-center justify-content-center h-100 bg-light text-dark rounded"><h5>Online Service - No Physical Location</h5></div>';
                }

                updateLocationInfo(location);
                locationInfo.style.display = 'block';

            } else {
                mapContainer.style.display = 'none';
                locationInfo.style.display = 'none';
            }
        }

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            initializeDropdown();
        });
    </script>
</body>

</html>