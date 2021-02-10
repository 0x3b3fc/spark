<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Spark Media</title>
    <meta name="description"
          content="Spark Media Is A Home Company For Development, Marketing And Printing Services - we started at 2021 with a team made up of Friends in all internet fields" />
    <meta name="copyright" content="Spark Media" />
    <meta name="author" content="Spark Media Web Development Team" />
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png')}}" rel="icon">
    <link href="{{ asset('assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <script src="{{ asset('assets/vendor/iconify.min.js')}}"></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html"><img src="./assets/img/favicon.png" style="max-width: 100px;" alt="Logo"></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('welcome') }}" class="logo me-auto"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li ><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li class="active"><a href="#testimonials">Blog</a></li>
                <li class="drop-down"><a href="/soon">Courses</a>
                    <ul>
                        <li><a href="/soon">Graphic Design</a></li>
                        <li><a href="/soon">Web Development</a></li>
                        <li><a href="/soon">Sales</a></li>
                        <li><a href="/soon">UI/UX Design</a></li>
                        <li><a href="/soon">SEO</a></li>
                        <li><a href="/soon">Marketing</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">

                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ $blogs->title }}</h1>
                    <h2>{{ $blogs->description }}</h2>
                </div>

            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
{{--                <img src="{{ asset('assets/img/logo.png') }}" alt="">--}}
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3><img src="{{ asset('assets/img/logo.png') }}" alt=""></h3>
                    <p>
                        39 Al-Said Al-Sharqawy Street <br>
                        Al-Jamaa District, Mansoura<br>
                        Dakahlia, Egypt <br><br>
                        <strong>Phone:</strong> <a href="https://wa.me/+201551535108" target="_blank" style="color: white; outline: none;">+20 1551535108</a> &nbsp; - &nbsp; <a href="https://wa.me/+201551535106" target="_blanck" style="color: white; outline: none;">+20 1551535106</a><br>
                        <strong>Email:</strong> <a href="mailto:sparkagency2@gmail.com" style="color: white; outline: none;">sparkagency2@gmail.com</a><br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-newsletter">
                    <!-- <h4>Join Our Newsletter</h4>
                    <p>Keep in touch with us by email.</p>
                    <form action="./index.html" method="post">
                      <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form> -->
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> Multimedia & Marketing</li>
                        <li><i class="bx bx-chevron-right"></i> Courses</li>
                        <li><i class="bx bx-chevron-right"></i> SEO</li>
                        <li><i class="bx bx-chevron-right"></i> Printing</li>
                        <li><i class="bx bx-chevron-right"></i> Web Development</li>
                        <li><i class="bx bx-chevron-right"></i> Mobile App</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Spark Media Web Development Team</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/TheSparkMedia1" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/spark.1.media/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_spark.media/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/spark-media-540035205" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

    </div>
</footer>
<!-- End Footer -->

<a href="#hero" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
