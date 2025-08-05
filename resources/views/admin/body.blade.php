<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="https://seventh-production.up.railway.app/css/viewmember.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://seventh-production.up.railway.app/css/fontawesome-free-6.5.2-web/css/all.min.css"
        rel="stylesheet" />

    <title>Dashboard</title>
    <style>
        /* Custom Autofill input styling */
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

        /* Responsive adjustments */
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
    </style>
</head>

<body>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center g-0">
                                <!-- Image Column - Properly positioned to left -->
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="admin/assets/images/bible4.jpg" class="gradient-corona-img img-fluid"
                                        alt="Bible Image" loading="lazy">
                                </div>

                                <!-- Verse Content Column -->
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <div id="verse-of-the-day" style="color: white;"></div>
                                </div>

                                <!-- Button Column -->
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                                    <a href="https://www.biblegateway.com/" target="_blank" rel="noopener noreferrer"
                                        class="btn btn-outline-light btn-rounded get-started-btn">
                                        <span class="d-none d-md-inline">Bible Verse Of The Day</span>
                                        <span class="d-md-none">VOTD</span>
                                    </a>
                                </div>
                            </div>
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
                                    <i class="fa-solid fa-users fa-3x"></i><br />
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
                        <h6 class="text-muted2 font-weight-normal">Member Details</h6>
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
                                    <a class="nav-link" href="{{ url('view_members') }}">
                                        <span class="mdi mdi-arrow-right icon-item"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer1">
                        <h6 class="text-muted2 font-weight-normal">Add Members</h6>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="span2"><br />
                                    <i class="fa fa-calendar fa-3x"></i><br />
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
                        <h6 class="text-muted2 font-weight-normal">Upcoming Birthdays</h6>
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
                                    <a class="nav-link" href="{{ url('see_givings') }}">
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
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <canvas id="myChart" class="member-chart"></canvas>
                    </div>
                    <div class="footer1 mt-auto">
                        <h6 class="text-muted2 font-weight-normal">Member Chart</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body">
                        <canvas id="myUsers" class="member-chart1"></canvas>
                    </div>
                    <div class="footer1 mt-auto">
                        <h6 class="text-muted2 font-weight-normal">User Chart</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card h-100 d-flex flex-column" style="height: 530px;">
                    <div class="card-body">
                        <!-- Embedded Bible -->
                        <biblia:bible class="biblia-bible" layout="normal" resource="leb" width="100%" height="100%"
                            startingReference="Ge1.1"></biblia:bible>
                    </div>
                    <!-- Footer -->
                    <div class="footer1 mt-auto">
                        <h6 class="text-muted2 font-weight-normal">Holy Bible</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted1 d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                University
                SDA Church 2024</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-white">
                Computer Science Dept
                <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank" class="text-white">
                    Computer Systems Engineering
                </a> from University Of Zambia
            </span>
        </div>
    </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('myChart');

            // Check if memberCount is defined and a number
            const memberCount = {{ $memberCount }};
            const membersCount = {{ $membersCount }};
            const visitorCount = {{ $visitorCount }};
            const singlesCount = {{ $singlesCount }};
            const marriedCount = {{ $marriedCount }};
            const divorcedCount = {{ $divorcedCount }};
            if (typeof memberCount !== 'undefined' && !isNaN(memberCount) &&
                typeof visitorCount !== 'undefined' && !isNaN(visitorCount) &&

                typeof singlesCount !== 'undefined' && !isNaN(singlesCount) &&
                typeof marriedCount !== 'undefined' && !isNaN(marriedCount) &&
                typeof divorcedCount !== 'undefined' && !isNaN(divorcedCount) &&
                typeof membersCount !== 'undefined' && !isNaN(membersCount)) {
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Total Members', 'Visitors', 'Members', 'Females', 'Males', 'Singles',
                            'Married', 'Divorced'
                        ],
                        datasets: [{
                            label: '# of Registered',
                            data: [memberCount, visitorCount, membersCount,
                                singlesCount, marriedCount, divorcedCount
                            ],
                            borderWidth: 1,
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(75, 192, 192, 0.5)',
                                'rgba(153, 102, 255, 0.5)',
                                'rgba(255, 159, 64, 0.5)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255,99,132,1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else {
                console.error('Error: memberCount is undefined or not a number.');
            }
        });
    </script>

    <!-- If you’re including multiple Biblia widgets, you only need this script tag once -->
    <script src="//biblia.com/api/logos.biblia.js"></script>
    <script>
        logos.biblia.init();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('myUsers');

            // Check if userCount is defined and a number
            const userCount = {{ $userCount }};

            if (typeof userCount !== 'undefined' && !isNaN(userCount)) {
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Total Users', 'Females', 'Males',],
                        datasets: [{
                            label: 'Number Of Users',
                            data: [userCount,],
                            borderWidth: 1,
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(75, 192, 192, 0.5)',
                                'rgba(153, 102, 255, 0.5)',
                                'rgba(255, 159, 64, 0.5)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255,99,132,1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else {
                console.error('Error: userCount is undefined or not a number.');
            }
        });
    </script>
<!-- Verse of the Day Script -->
<script>
    function myVotdCallback(data) {
        var votdContainer = document.getElementById('verse-of-the-day');
        if (votdContainer && data && data.votd) {
            // Create a more formatted display
            var verseHTML = `
                <div class="verse-content">
                    <p class="mb-1">"${data.votd.text}"</p>
                    <small class="verse-reference">- ${data.votd.reference}</small>
                </div>
            `;
            votdContainer.innerHTML = verseHTML;
        } else if (votdContainer) {
            votdContainer.innerHTML = '<p class="mb-0"><em>Loading daily verse...</em></p>';
        }
    }
    
    // Error handling for failed script loading
    window.addEventListener('load', function() {
        setTimeout(function() {
            var votdContainer = document.getElementById('verse-of-the-day');
            if (votdContainer && votdContainer.innerHTML.trim() === '') {
                votdContainer.innerHTML = '<p class="mb-0"><em>Daily verse temporarily unavailable</em></p>';
            }
        }, 5000); // Wait 5 seconds for the script to load
    });
</script>

<script src="https://www.biblegateway.com/votd/get/?format=json&version=NIV&callback=myVotdCallback"></script>
</body>

</html>