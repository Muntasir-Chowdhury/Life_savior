<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Life Savior</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Life Savior" name="keywords">
        <meta content="Life Savior" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
                    <!-- <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2>Best & Trusted</h2>
                            <h2><span>Cleaning</span> Service</h2>
                            <p>Lorem ipsum dolor sit amet elit pretium facilisis ornare</p>
                            <a class="btn" href="">Explore Now</a>
                        </div>
                        <div class="col-md-5">
                            <div class="form">
                                <h3>Get A Quote</h3>
                                <form>
                                    <input class="form-control" type="text" placeholder="Your Name">
                                    <input class="form-control" type="text" placeholder="Mobile Number">
                                    <div class="control-group">
                                        <select class="custom-select">
                                            <option selected>Choose a service</option>
                                            <option value="1">House Cleaning</option>
                                            <option value="2">Apartment Cleaning</option>
                                            <option value="3">Office Cleaning</option>
                                        </select>
                                    </div>
                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                    <button class="btn btn-block">Get A Quote</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Header End -->
            @yield('content2')
            
            <!-- About End -->


            <!-- Service Start -->
            <!-- <div class="service">
                <div class="container">
                    <div class="section-header">
                        <p>Our Services</p>
                        <h2>Provide Services Worldwide</h2>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/service-1.jpg" alt="Service">
                                <h3>Flour Cleaning</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/service-2.jpg" alt="Service">
                                <h3>Glass Cleaning</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/service-3.jpg" alt="Service">
                                <h3>Carpet Cleaning</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="img/service-4.jpg" alt="Service">
                                <h3>Toilet Cleaning</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div> 
            
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <!-- <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>Why Choose Us</p>
                                <h2>Expert Cleaners and World Class Services</h2>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                        <div class="col-md-7">
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-1.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Expert Cleaners</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-2.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Reasonable Prices</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-3.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Quick & Best Services</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Feature End -->
            
            
            <!-- Team Start -->
            <!-- <div class="team">
                <div class="container">
                    <div class="section-header">
                        <p>Team Member</p>
                        <h2>Meet Our Expert Cleaners</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <h3>CEO</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Mollie Ross</h2>
                                    <h3>Team Manager</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <h3>Cleaner</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Jennifer Page</h2>
                                    <h3>Cleaner</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Team End -->


            <!-- FAQs Start -->
            <!-- <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>You Might Ask</p>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <img src="img/faqs.jpg" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>5</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <a class="btn" href="">Ask more</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- FAQs End -->
            
            
            <!-- Pricing Plan Start -->
            <!-- <div class="price">
                <div class="container">
                    <div class="section-header">
                        <p>Pricing Plan</p>
                        <h2>No Extra Hidden Charges</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="price-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Standard</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>99</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>3 Bedrooms cleaning</li>
                                            <li>2 Bathrooms cleaning</li>
                                            <li>1 Living room Cleaning</li>
                                            <li>Vacuum Cleaning</li>
                                            <li>Within 6 Hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item featured-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Premium</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>149</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>5 Bedrooms cleaning</li>
                                            <li>3 Bathrooms cleaning</li>
                                            <li>2 Living room Cleaning</li>
                                            <li>Vacuum Cleaning</li>
                                            <li>Within 6 Hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price-item">
                                <div class="price-header">
                                    <div class="price-icon">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <div class="price-title">
                                        <h2>Enterprise</h2>
                                    </div>
                                    <div class="price-pricing">
                                        <h2><small>$</small>199</h2>
                                    </div>
                                </div>
                                <div class="price-body">
                                    <div class="price-des">
                                        <ul>
                                            <li>8 Bedrooms cleaning</li>
                                            <li>5 Bathrooms cleaning</li>
                                            <li>3 Living room Cleaning</li>
                                            <li>Vacuum Cleaning</li>
                                            <li>Within 12 Hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-footer">
                                    <div class="price-action">
                                        <a href=""><i class="fa fa-shopping-cart"></i>Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Pricing Plan End -->
            
            
            <!-- Newsletter Start -->
            <!-- <div class="newsletter">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2>Get A Free Quote</h2>
                            <p>
                                Lorem ipsum dolor sit amet adipiscing elit
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="form">
                                <input class="form-control" placeholder="Email here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Newsletter End -->


            <!-- Testimonial Start -->
            <!-- <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <p>Client Review</p>
                        <h2>Client Says About Service</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-4.jpg" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                                <h3>Customer Name</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Testimonial End -->
            
            
            <!-- Call to Action Start -->
            <!-- <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>Get A Free Cleaning Service</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </p>
                        </div>
                        <div class="col-md-3">
                            <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Call to Action End -->


            <!-- Blog Start -->
            <!-- <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <p>Latest From Blog</p>
                        <h2>Stay Updated From Our Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-1.jpg" alt="Blog">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Flour Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-Jun-20</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-2.jpg" alt="Blog">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Glass Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-Jun-20</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-3.jpg" alt="Blog">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Carpet Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-Jun-20</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum
                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Blog End -->


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
