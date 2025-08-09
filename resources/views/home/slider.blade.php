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

                                        <div class="location-selector mb-4">
                                            <select class="form-select location-dropdown" id="locationSelect"
                                                aria-label="Choose a Location">
                                                <option value="">Choose a Location</option>
                                                <option value="unza-campus">UNZA Great East Road Campus</option>
                                                <option value="olympia-church">UNISDA 25210 Katima Mulilo Road Olympia Church
                                                </option>
                                                <option value="online">Online</option>
                                            </select>
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
                    'Sunday': '09:00 AM & 11:00 AM',
                    'Wednesday': '06:00 PM'
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'unza@church.zm'
                },
                slug: 'unza-campus'
            },
            'olympia-church': {
                name: 'University Seventh Day Church',
                address: '25210 Katima Mulilo Road, Olympia, Lusaka, Zambia',
                coordinates: [-15.3946, 28.2853],
                serviceTimes: {
                    'Saturday': '08:30 AM & 10:30 AM',
                    'Thursday': '06:00 PM'
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
                    'Sunday': '09:00 AM & 11:00 AM (CAT)',
                    'Wednesday': '06:00 PM (CAT)'
                },
                contact: {
                    phone: '+260 97 123 4567',
                    email: 'online@church.zm',
                    streamingUrl: 'https://church.zm/live'
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
        document.getElementById('locationSelect').addEventListener('change', function () {
            const selectedValue = this.value;
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
        });

        // Handle "Visit Location Page" button click
        document.addEventListener('click', function (e) {
            if (e.target && e.target.id === 'visitLocationBtn') {
                e.preventDefault();
                const href = e.target.getAttribute('href');
                if (href && href !== '#') {
                    window.location.href = href;
                }
            }
        });
    </script>
</body>

</html>