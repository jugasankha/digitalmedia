<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

        <div class="logo float-left">
            <a href="/"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            
        </div>

        <nav class="nav-menu float-right d-none d-lg-block" >
            <ul class="navigation">
            <li class="font-weight-bold"><a href="/" >Home</a></li>
            <li class="font-weight-bold"><a href="/services">Services</a></li>
            <li class="font-weight-bold"><a href="/about">About</a></li>
            <li class="font-weight-bold"><a href="/team">Team</a></li>
            <li class="font-weight-bold"><a href="/contact">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        
        </div>
    </header><!-- End Header -->


    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        {{-- <div class="footer-newsletter">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            </div>
            <div class="col-lg-6">
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>
            </div>
        </div>
        </div> --}}

        <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/services">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/privacy">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="/services/display">Display | Mainstream</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/services/social">Social</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/services/mobile">Mobile Subscriptions</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/services/messaging">Email and Messaging</a></li>
                
                </ul>
            </div>
            


            <div class="col-lg-3 col-md-6 footer-contact">
                <h4>App Alley Pvt Ltd</h4>
                <p>
                125, US Complex, 120 Mathura Road,<br>
                Next to Apollo Jasola Metro Station,<br>
                Jasola, New Delhi – 110076. India<br>
                <strong>Phone:</strong> +91 9958737776<br>
                <strong>Email:</strong> info@tarsan.co.in<br>
                </p>

            </div>

            <div class="col-lg-3 col-md-6 footer-info">
                <h3>App Alley Pvt Ltd</h3>
                <p>We are a data driven technology destination for all of your digital needs. Optimize returns through pertinent targeting and insights driven optimisations.</p>
                <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            </div>
        </div>
        </div>

        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>App Alley Pvt Ltd</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
        </div>
    </footer><!-- End Footer -->
    <!-- Main content -->
    
    <!-- End of main content -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('js/js-splash-2.0.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        // ---------Responsive-navbar-active-animation-----------
        $(document).ready(function () {
            var url = window.location.href;
            url = url.split('/')
            url = '/' + url.pop()
            $('ul.navigation a[href="'+ url +'"]').parent().addClass('active');
            $('ul.navigation a').filter(function() {
                return this.href == url;
            }).parent().addClass('active');

            setTimeout(function(){ test(); });
        });

        
    </script>
    @yield('splash')

</body>

</html>