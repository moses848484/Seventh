<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Hero Section</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

</head>

<body>
    <section class="slider_section position-relative text-white">
        <!-- Background image with gradient overlay -->
        <div class="slider_bg_box position-absolute w-100 h-100" style="top: 0; left: 0;">
            <img src="images/dorcas.jpg" alt="church" class="w-100 h-100" style="object-fit: cover;">
            <div class="position-absolute w-100 h-100"
                style="top: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%); z-index: 1;">
            </div>
        </div>

        <!-- Carousel -->
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
                                        Wherever you are on your journey, there's a place for you at Life.Church. Here
                                        you'll find a welcoming community ready to walk through life with you.
                                    </p>

                                    <!-- Location Section -->
                                    <div class="location-section mb-4">
                                        <div class="location-icon-text mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-crosshair2" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0a.5.5 0 0 1 .5.5v.518A7 7 0 0 1 14.982 7.5h.518a.5.5 0 0 1 0 1h-.518A7 7 0 0 1 8.5 14.982v.518a.5.5 0 0 1-1 0v-.518A7 7 0 0 1 1.018 8.5H.5a.5.5 0 0 1 0-1h.518A7 7 0 0 1 7.5 1.018V.5A.5.5 0 0 1 8 0m-.5 2.02A6 6 0 0 0 2.02 7.5h1.005A5 5 0 0 1 7.5 3.025zm1 1.005A5 5 0 0 1 12.975 7.5h1.005A6 6 0 0 0 8.5 2.02zM12.975 8.5A5 5 0 0 1 8.5 12.975v1.005a6 6 0 0 0 5.48-5.48zM7.5 12.975A5 5 0 0 1 3.025 8.5H2.02a6 6 0 0 0 5.48 5.48zM10 8a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
                                            </svg>
                                            <span class="location-text">&nbsp;&nbsp;Find Your Closest Location</span>
                                        </div>

                                        <!-- Location Dropdown -->
                                        <div class="location-selector mb-4">
                                            <select class="form-select location-dropdown" id="locationSelect"
                                                aria-label="Choose a Location">
                                                <option value="">Choose a Location</option>
                                                <option value="unza-campus">UNZA Great East Road Campus</option>
                                                <option value="olympia-church">Katima Mulilo Road Olympia Church
                                                </option>
                                                <option value="online">Online</option>
                                            </select>
                                        </div>

                                        <!-- Map Container -->
                                        <div id="mapContainer" style="display: none;">
                                            <div id="map" style="height: 300px; border-radius: 8px; margin-top: 20px;">
                                            </div>
                                        </div>

                                        <!-- Location Info Card -->
                                        <div id="locationInfoCard" class="location-info-card mt-3" style="display: none;">
                                            <div class="service-times-card">
                                                <h3 class="card-title">Service Times</h3>
                                                
                                                <div class="service-category mb-4">
                                                    <div class="category-header">
                                                        <span class="service-icon">S</span>
                                                        <span class="service-label">SERVICE & LIFEKIDS</span>
                                                    </div>
                                                    
                                                    <div id="serviceSection" class="service-details">
                                                        <!-- Service times will be populated here -->
                                                    </div>
                                                </div>

                                                <div class="service-category mb-4" id="youthSection" style="display: none;">
                                                    <div class="category-header">
                                                        <span class="service-icon youth">Y</span>
                                                        <span class="service-label">SWITCH YOUTH</span>
                                                    </div>
                                                    
                                                    <div id="youthDetails" class="service-details">
                                                        <!-- Youth service times will be populated here -->
                                                    </div>
                                                </div>

                                                <!-- Location Details -->
                                                <div class="location-details">
                                                    <div class="location-address" id="locationAddress">
                                                        <svg class="address-icon" width="12" height="16" fill="currentColor">
                                                            <path d="M6 0C2.7 0 0 2.7 0 6c0 4.5 6 10 6 10s6-5.5 6-10c0-3.3-2.7-6-6-6zm0 8c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                                                        </svg>
                                                        <span id="addressText"></span>
                                                    </div>
                                                    
                                                    <div class="location-phone" id="locationPhone">
                                                        <svg class="phone-icon" width="12" height="12" fill="currentColor">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122L9.98 10.98s-.787.787-1.981.787-4.906-3.525-4.906-4.719.787-1.981.787-1.981l.549-1.804a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                                                        </svg>
                                                        <span id="phoneText"></span>
                                                    </div>

                                                    <div class="pastor-info" id="pastorInfo">
                                                        <div class="pastor-avatar">
                                                            <img id="pastorImage" src="" alt="Pastor" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                                                        </div>
                                                        <div class="pastor-details">
                                                            <div class="pastor-name" id="pastorName"></div>
                                                            <div class="pastor-title">Pastor</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="location-button mt-4">
                                                    <button class="about-location-btn" id="aboutLocationBtn">
                                                        About Life.Church <span id="locationNameBtn"></span>
                                                    </button>
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

        /* Location Dropdown Styling */
        .location-dropdown {
            background-color: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 6px;
            padding: 16px 20px;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            color: #333;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
        }

        .location-dropdown:focus {
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
            outline: none;
            background-color: #fff;
        }

        .location-dropdown:hover {
            background-color: #fff;
        }

        /* Service Times Card Styling */
        .service-times-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 24px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            color: #333;
            text-align: left;
        }

        .card-title {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        .service-category {
            margin-bottom: 20px;
        }

        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .service-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: #4a5568;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 600;
            margin-right: 10px;
        }

        .service-icon.youth {
            background-color: #2d3748;
        }

        .service-label {
            font-size: 12px;
            font-weight: 600;
            color: #4a5568;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .service-details {
            margin-left: 34px;
        }

        .service-day {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .service-times {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 12px;
        }

        .time-slot {
            background-color: #f7f7f7;
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #5a5a5a;
        }

        .location-details {
            border-top: 1px solid #e0e0e0;
            padding-top: 20px;
        }

        .location-address,
        .location-phone {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #666;
        }

        .address-icon,
        .phone-icon {
            margin-right: 10px;
            color: #888;
        }

        .pastor-info {
            display: flex;
            align-items: center;
            margin: 16px 0;
            padding: 12px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .pastor-avatar {
            margin-right: 12px;
        }

        .pastor-name {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 2px;
        }

        .pastor-title {
            font-size: 0.9rem;
            color: #666;
        }

        .about-location-btn {
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .about-location-btn:hover {
            background-color: #34495e;
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

            .service-times-card {
                padding: 20px;
            }

            .card-title {
                font-size: 1.3rem;
            }

            .service-times {
                gap: 6px;
            }

            .time-slot {
                font-size: 0.85rem;
                padding: 4px 10px;
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

            .location-dropdown {
                padding: 12px 16px;
                font-size: 0.95rem;
            }

            #map {
                height: 200px;
            }

            .service-times-card {
                padding: 16px;
            }

            .card-title {
                font-size: 1.2rem;
            }

            .service-times {
                gap: 4px;
            }

            .time-slot {
                font-size: 0.8rem;
                padding: 3px 8px;
            }

            .pastor-info {
                flex-direction: column;
                text-align: center;
            }

            .pastor-avatar {
                margin-right: 0;
                margin-bottom: 8px;
            }
        }
    </style>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        let map;
        let currentMarker;

        // Location data with pastor information
        const locations = {
            'unza-campus': {
                name: 'UNZA Campus',
                fullName: 'UNZA Great East Road Campus',
                address: 'Great East Road, University of Zambia, Lusaka, Zambia',
                coordinates: [-15.3875, 28.3228],
                services: {
                    main: {
                        day: 'Sunday',
                        times: ['8:30 AM', '10:00 AM', '11:30 AM', '1:00 PM']
                    },
                    youth: {
                        day: 'Wednesday',
                        times: ['6:00 PM', '7:00 PM']
                    }
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'unza@church.zm'
                },
                pastor: {
                    name: 'John Mwamba',
                    image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face'
                },
                slug: 'unza-campus'
            },
            'olympia-church': {
                name: 'Katima Mulilo',
                fullName: 'University Seventh Day Church',
                address: '25210 Katima Mulilo Road, Olympia, Lusaka, Zambia',
                coordinates: [-15.3946, 28.2853],
                services: {
                    main: {
                        day: 'Saturday',
                        times: ['8:30 AM', '10:30 AM']
                    },
                    youth: {
                        day: 'Thursday',
                        times: ['6:00 PM']
                    }
                },
                contact: {
                    phone: '260 211 293 525',
                    email: 'olympia@church.zm'
                },
                pastor: {
                    name: 'Sarah Banda',
                    image: 'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face'
                },
                slug: 'olympia-church'
            },
            'online': {
                name: 'Online',
                fullName: 'Online Service',
                address: 'Available worldwide via live stream',
                coordinates: null,
                services: {
                    main: {
                        day: 'Sunday',
                        times: ['9:00 AM (CAT)', '11:00 AM (CAT)']
                    },
                    youth: {
                        day: 'Wednesday',
                        times: ['6:00 PM (CAT)']
                    }
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'online@church.zm',
                    streamingUrl: 'https://church.zm/live'
                },
                pastor: {
                    name: 'David Tembo',
                    image: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face'
                },
                slug: 'online'
            }
        };

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
                        <h6><strong>${location.fullName}</strong></h6>
                        <p style="margin: 5px 0; color: #666;">${location.address}</p>
                    </div>
                `;

                currentMarker.bindPopup(popupContent).openPopup();
                map.setView(location.coordinates, 15);
            }
        }

        // Update location info card
        function updateLocationInfo(location) {
            // Update service section
            const serviceSection = document.getElementById('serviceSection');
            serviceSection.innerHTML = `
                <div class="service-day">${location.services.main.day}</div>
                <div class="service-times">
                    ${location.services.main.times.map(time => `<span class="time-slot">${time}</span>`).join('')}
                </div>
            `;

            // Update youth section
            const youthSection = document.getElementById('youthSection');
            const youthDetails = document.getElementById('youthDetails');
            
            if (location.services.youth && location.services.youth.times.length > 0) {
                youthSection.style.display = 'block';
                youthDetails.innerHTML = `
                    <div class="service-day">${location.services.youth.day}</div>
                    <div class="service-times">
                        ${location.services.youth.times.map(time => `<span class="time-slot">${time}</span>`).join('')}
                    </div>
                `;
            } else {
                youthSection.style.display = 'none';
            }

            // Update location details
            document.getElementById('addressText').textContent = location.address;
            document.getElementById('phoneText').textContent = location.contact.phone;

            // Update pastor info
            document.getElementById('pastorImage').src = location.pastor.image;
            document.getElementById('pastorName').textContent = location.pastor.name;

            // Update button text
            document.getElementById('locationNameBtn').textContent = location.name;

            // Update button click handler
            document.getElementById('aboutLocationBtn').onclick = function() {
                // Navigate to location page or show more details
                console.log(`Navigate to ${location.slug} page`);
                // window.location.href = `/locations/${location.slug}`;
            };
        }

        // Handle location selection
        document.getElementById('locationSelect').addEventListener('change', function () {
            const selectedValue = this.value;
            const mapContainer = document.getElementById('mapContainer');
            const locationInfoCard = document.getElementById('locationInfoCard');

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
                    document.getElementById('map').innerHTML = '<div style="display: flex; align-items: center; justify-content: center; height: 100%; background-color: #f8f9fa; color: #333; border-radius: 8px;"><h5>Online Service - No Physical Location</h5></div>';
                }

                updateLocationInfo(location);
                locationInfoCard.style.display = 'block';

            } else {
                mapContainer.style.display = 'none';
                locationInfoCard.style.display = 'none';
            }
        });
    </script>
</body>

</html>