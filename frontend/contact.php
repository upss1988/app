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
    <section class="slice py-6 pt-lg-7 pb-lg-8 bg-dark">
        <!-- Container -->
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-lg-6">
                    <!-- Heading -->
                    <h1 class="h1 text-white text-center text-lg-left my-4">
                        Have a project <strong>in mind?</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white text-center text-lg-left opacity-8">
                        Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5 text-center text-lg-left">
                        <a href="#sct-form-contact" data-scroll-to class="btn btn-white btn-lg btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="edit-2"></i>
                            </span>
                            <span class="btn-inner--text">Write a message</span>
                        </a>
                    </div>
                    <!-- Clients -->
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-left mt-5">
                        <div class="col-auto text-sm text-white pl-0 pr-4">Trusted by:</div>
                        <div class="client-group col">
                            <div class="row">
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/google-gray.svg">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/spotify-gray.svg">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/airbnb-gray.svg">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/paypal-gray.svg">
                                </div>
                            </div>
                        </div>
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5">
                            <div class="py-5">
                                <div class="icon text-warning mx-auto">
                                    <i data-feather="phone-call"></i>
                                </div>
                            </div>
                            <h5 class="">Sales department</h5>
                            <p class=" mt-2 mb-0">Lorem ipsum dolor
                                sit amet consectetur adipiscing.</p>
                            <div class="mt-4">
                                <a href="#" class="link-underline-warning">sales@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5">
                            <div class="py-5">
                                <div class="icon text-warning mx-auto">
                                    <i data-feather="settings"></i>
                                </div>
                            </div>
                            <h5 class="">Technical support</h5>
                            <p class=" mt-2 mb-0">Lorem ipsum dolor
                                sit amet consectetur adipiscing.</p>
                            <div class="mt-4">
                                <a href="#" class="link-underline-warning">support@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5">
                            <div class="py-5">
                                <div class="icon text-warning mx-auto">
                                    <i data-feather="users"></i>
                                </div>
                            </div>
                            <h5 class="">Custom projects</h5>
                            <p class=" mt-2 mb-0">Lorem ipsum dolor sit
                                amet consectetur adipiscing.</p>
                            <div class="mt-4">
                                <a href="#" class="link-underline-warning">project@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-5">
                    <h3>150 Southeast Pidgeon Meadow<br>Claflin Terrace, 305458</h3>
                    <p class="lead my-4">
                        E: <a href="#">support@webpixels.io</a><br>
                        T: (555) 257-393
                    </p>
                    <p>
                        Want to share any feedback with us, report a technical issue or just ask us a question? Fill free to contact us and we will get back to you shortly.
                    </p>
                </div>
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830872278!2d-74.1197639579598!3d40.69766374873451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sro!4v1580299124407!5m2!1sen!2sro" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" class="rounded"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container text-center text-lg-left">
            <!-- Title -->
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <span class="badge badge-primary badge-pill">Support team</span>
                    <h5 class="h5 lh-180 mt-4 mb-6">Our support team is available 24/7 for any issues you might have with our products.</h5>
                </div>
            </div>
            <!-- Team -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
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
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
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
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
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
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
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
        </div>
    </section>
    <section class="slice slice-lg" id="sct-form-contact">
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Contact us</h3>
                    <p class="lh-190">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Form -->
                    <form>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Your name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" placeholder="email@example.com" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="+40-745-234-567" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" placeholder="Tell us a few words ..." rows="3" required></textarea>
                        </div>
                        <div class="text-center">
                            <!-- <div class="g-recaptcha" data-sitekey="6Lfs5ScUAAAAANAJwGrdfvWLFRRiVbKRE2vfoaFj"></div> -->
                            <button type="reset" class="btn-reset d-none"></button>
                            <button type="submit" class="btn btn-block btn-lg btn-primary mt-4">Send your message</button>
                        </div>
                    </form>
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
    <!-- Page JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1oALsXLX-XEh2iYbE8tOjxsdFNHE39WM"></script>
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