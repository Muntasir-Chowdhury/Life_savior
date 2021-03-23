<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Life Savior</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Life Savior" name="keywords">
        <meta content="Life Savior" name="description">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon_io/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon_io/favicon-16x16.png')}}">
<link rel="manifest" href="/site.webmanifest">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body >
        <div class="wrapper" id="app">
            <!-- Header Start -->
            <div class="header home">
                <div class="container-fluid">
                    @include('header')
                @yield('content1')
                    
                </div>
            </div>
            <!-- Header End -->
            @yield('content2')
        
            

            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">About Us</a>
                                <a href="">Our Story</a>
                                <a href="">Our Services</a>
                                <a href="">Our Projects</a>
                                <a href="">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Link</h2>
                                <a href="">Our Clients</a>
                                <a href="">Clients Review</a>
                                <a href="">Ongoing Project</a>
                                <a href="">Customer Support</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-form">
                                <h2>Stay Updated</h2>
                                <p>
Donate blood and be a life saver.                                </p>
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help & FQAs</a>
                        <a href="">Contact us</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                        <p>Designed By <a href="https://www.facebook.com/muntasir.ahmed.98">Muntasir Ahmed</a>
                            and <a href="https://www.facebook.com/sanjida.shammy.906">Sanjida Shammy</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
