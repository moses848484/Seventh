<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Church Manager" />
    <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
    <link rel="stylesheet" href="<?php echo asset('css/viewmember.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/fontawesome-free-6.5.2-web/css/all.min.css'); ?>" type="text/css">
    <title>Departments Plan</title>
    <style>

    </style>
</head>

<body>
    <footer class="footer2">
        <div class="d-sm-flex justify-content-start justify-content-sm-between align-items-center">
            <span class="text-muted4 d-block text-center text-sm-left d-sm-inline-block">
                <i class="fa-solid fa-clock"></i>&nbsp;Departments Plan
            </span>
        </div>
    </footer>

    <div id="block_bg" class="block">
        <div id="register" class="form-container">
            <form method="POST" autocomplete="on" action="{{ url('/add_members') }}">
                @csrf

                <div class="container">
                    <div class="row">
                        <!-- Worship Schedule Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase text-primary">Technical Plan 2022</h5>
                                    <div class="firstquoter">
                                        <a href="{{ url('first_quoter') }}"
                                            class="text-muted2 font-weight-normal first">First Quoter</a>
                                    </div>

                                    <div class="secondquoter">
                                        <a href="{{ url('second_quoter') }}"
                                            class="text-muted2 font-weight-normal first">Second Quoter</a>
                                    </div>
                                </div>
                                <div class="footer1">
                                    <a href="{{ url('weekly_schedule') }}"
                                        class="text-muted2 font-weight-normal">Technical Plan Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Communication Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase text-primary">Communication</h5>
                                    <div class="firstquoter">
                                        <a href="{{ url('first_quoter') }}"
                                            class="text-muted2 font-weight-normal first">First Quoter</a>
                                    </div>

                                    <div class="secondquoter">
                                        <a href="{{ url('second_quoter') }}"
                                            class="text-muted2 font-weight-normal first">Second Quoter</a>
                                    </div>
                                </div>
                                <div class="footer1">
                                    <a href="{{ url('weekly_schedule') }}"
                                        class="text-muted2 font-weight-normal">Communication Plan Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Dorcas Card -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase text-primary">Dorcas</h5>
                                    <div class="firstquoter">
                                        <a href="{{ url('first_quoter') }}"
                                            class="text-muted2 font-weight-normal first">First Quoter</a>
                                    </div>

                                    <div class="secondquoter">
                                        <a href="{{ url('second_quoter') }}"
                                            class="text-muted2 font-weight-normal first">Second Quoter</a>
                                    </div>
                                </div>
                                <div class="footer1">
                                    <a href="{{ url('weekly_schedule') }}"
                                        class="text-muted2 font-weight-normal">Dorcas Plan Details</a>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
    </div>
    </div>
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
    </div>
</body>

</html>
