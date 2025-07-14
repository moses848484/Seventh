<style>
    .navbar-brand img {
        max-height: 50px;
        width: auto;
        display: block;
        transition: opacity 0.3s ease;
        /* Smooth hide/show effect */
    }

    .hidden-logo {
        opacity: 0;
        visibility: hidden;
    }

    .instagram-bg {
        background: linear-gradient(45deg, #E4405F, #F58529);
        /* Instagram's default gradient colors */
    }
</style>

<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <!-- Logo (hidden on small screens) -->
            <a class="navbar-brand brand-logo-mini d-none d-md-block" href="index.html">
                <img id="logo-img" src="admin/assets/images/faces/sda3.png" class="img-fluid"
                    style="max-height: 60px; width: auto; display: block;" alt="logo" />
            </a>

            <!-- Smaller logo for mobile -->
            <a class="navbar-brand brand-logo-mini d-block d-md-none" href="index.html">
                <img id="logo-img-small" src="admin/assets/images/faces/sda3.png" class="img-fluid"
                    style="max-height: 40px; margin-top: 10px; width: auto; display: block;" alt="logo" />
            </a>

            <!-- Toggler button -->
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>


            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                        data-toggle="dropdown" aria-expanded="false" href="#">Sermons</a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="createbuttonDropdown">
                        <h6 class="p-3 mb-0 text-center">Watch Now</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item" href="https://www.facebook.com/@universityadventist/">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary text-white rounded-circle">
                                    <i class="fa-brands fa-facebook"></i>
                                </div>

                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Facebook Stream</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item"
                            href="https://www.youtube.com/@universitysdachurchlusaka7628/">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger text-white rounded-circle">
                                    <i class="fa-brands fa-youtube"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Youtube Stream</p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon instagram-bg rounded-circle">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">Instagram Stream</p>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">Visit Us</p>
                    </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-view-grid"></i>
                    </a>
                </li>
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        <span class="count bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="" alt="image" class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">..</p>
                                <p class="text-muted mb-0">..</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="" alt="image" class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">..</p>
                                <p class="text-muted mb-0">..</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="" alt="image" class="rounded-circle profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1">..</p>
                                <p class="text-muted mb-0">..</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">..</p>
                    </div>
                </li>
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Event today</p>
                                <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-danger"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Settings</p>
                                <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-link-variant text-warning"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Launch Admin</p>
                                <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">See all notifications</p>
                    </div>
                </li>
                <li class="nav-item" style="margin-top: 190px;">
                </li>
        </div>
    </nav>
    <script>
        // Get references to the image and toggler button
        const logoImg = document.getElementById('logo-img');
        const togglerButton = document.querySelector('.navbar-toggler');

        // Add a click event listener to the toggler button
        togglerButton.addEventListener('click', function () {
            // Toggle the 'hidden-logo' class on the image
            logoImg.classList.toggle('hidden-logo');
        });
    </script>