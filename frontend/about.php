<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>Quick – Website UI Kit (FREE)</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="assets/css/quick-website.css" id="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Go Pro -->
    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-primary text-truncate rounded-0 py-2 d-none d-lg-block" style="z-index: 1000;" target="_blank">
        <strong>This is a free demo.</strong> Click here to open the full version →
    </a>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <img alt="Image placeholder" src="assets/img/brand/dark.svg" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Overview</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="index.php" class="dropdown-item">Homepage</a>
                            <a href="about.php" class="dropdown-item">About us</a>
                            <a href="contact.php" class="dropdown-item">Contact</a>
                            <div class="dropdown-divider"></div>
                            <a href="login.html" class="dropdown-item">Login</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="docs/index.html">Docs</a>
                    </li>
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="https://github.com/webpixels/quick-website-ui-kit-demo/archive/master.zip">
                    Download Free
                </a>
                <a class="navbar-btn btn btn-sm btn-warning d-none d-lg-inline-block" href="https://webpixels.io/themes/quick-website-ui-kit" target="_blank">
                    Go PRO
                </a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-8 bg-dark">
        <div class="container py-5">
            <div class="row row-grid align-items-center">
                <div class="col-lg-8 text-center text-lg-left">
                    <!-- Heading -->
                    <h1 class="text-white mb-4">
                        We built incredible web products for designers &amp; developers
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white opacity-8">
                        For over 5 years, we pride ourselves on our commitment to excellence, as well as our ability to deliver for our customers.
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5">
                        <a href="#" class="btn btn-warning btn-lg btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="edit-3"></i>
                            </span>
                            <span class="btn-inner--text">Contact us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-bottom">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <span class="badge badge-primary badge-pill">Our vision</span>
            <div class="row mt-4">
                <div class="col-lg-6 pr-lg-5">
                    <p class="h5 lh-180 mb-3">
                        Our vision is to build the most efficient and intuitive UI stuff on the web in order to give developers some amazing possibilities to create high quality digital products with less time and money spent.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="lead lh-180">
                        She exposed painted fifteen are noisier mistake led waiting. Surprise not wandered speedily husbands although yet end. Are court tiled cease young built fat one man taken. We highest ye friends is exposed equally in. Ignorant had
                        too strictly followed.
                    </p>
                    <p class="lead lh-180">
                        Form face evening above years for i fruitful us creature void days. Upon upon fruitful us fill earth was set tree above yielding to air image cattle seed night lesser saying. Gathered, fourth wherein air.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-6">
                    <img src="assets/img/theme/light/img-v-4.jpg" alt="Image" class="rounded-lg img-fluid" />
                    <div class="text-right mt-4">
                        <img src="assets/img/theme/light/img-1-1000x1000.jpg" alt="Image" class="rounded-lg img-fluid w-50" />
                    </div>
                </div>
                <div class="col-lg-7 col-6">
                    <img src="assets/img/theme/light/img-1-1000x800.jpg" alt="Image" class="rounded-lg img-fluid w-75" />
                    <div class="text-right mt-4">
                        <img src="assets/img/theme/light/img-2-1000x800.jpg" alt="Image" class="rounded-lg img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pt-10 bg-primary">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container">
            <div class="row row-grid">
                <div class="col-lg-8">
                    <!-- Badge -->
                    <span class="badge badge-warning badge-pill">Made with Bootstrap</span>
                    <!-- Title -->
                    <h2 class="my-4 text-white">Websites, Dashboards and Web Apps</h2>
                    <!-- Text -->
                    <p class="lead text-white lh-190">
                        Build one product from the ground up using our dedicated tools. A beautiful ecosystem built to sustain productivity and encourage developers to create modern and professional high-end products.
                    </p>
                </div>
            </div>
            <!-- Milestones -->
            <div class="row mt-6">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                <div class="p-4 text-center text-sm-left">
                                    <h3 class="mb-0">10k</h3>
                                    <p class="text-muted mb-0">
                                        Customers
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                <div class="p-4 text-center text-sm-left">
                                    <h3 class="mb-0">55k</h3>
                                    <p class="text-muted mb-0">
                                        Downloads
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                <div class="p-4 text-center text-sm-left">
                                    <h3 class="mb-0">98%</h3>
                                    <p class="text-muted mb-0">
                                        Happy users
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pb-5">
        <div class="container">
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class=" mt-4">The amazing team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-1.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Heather Wright</h5>
                            <p class="text-muted text-sm mb-0">Founded &amp; Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-2.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Monroe Parker</h5>
                            <p class="text-muted text-sm mb-0">Back End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-3.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">John Sullivan</h5>
                            <p class="text-muted text-sm mb-0">Front End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-4.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">James Lewis</h5>
                            <p class="text-muted text-sm mb-0">Vice Chairman</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5 mb-sm-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-5.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Danielle Levin</h5>
                            <p class="text-muted text-sm mb-0">Sales Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-sm-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-6.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Martin Gray</h5>
                            <p class="text-muted text-sm mb-0">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-sm-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-7.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">George Squier</h5>
                            <p class="text-muted text-sm mb-0">Marketing Executive</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-8.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Jesse Stevens</h5>
                            <p class="text-muted text-sm mb-0">Ads Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a href="index.php">
                            <img alt="Image placeholder" src="assets/img/brand/light.svg" id="footer-logo">
                        </a>
                        <!-- Webpixels' mission -->
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">Notifications</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            &copy; 2020 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">Webpixels</a>. All rights reserved
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core JS  -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
    <script src="assets/libs/feather-icons/dist/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="assets/js/quick-website.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
</body>

</html>