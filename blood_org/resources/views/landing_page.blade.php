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

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header home">
                <div class="container-fluid">
                    @include('header')
                
                    <div class="hero row align-items-center">
                        <div class="col-md-17">
                            <h2>Best & Trusted</h2>
                            <h2><span>Organization</span> </h2>
                            <p>You don't have to be a doctor to save lives.</p>
                            <a class="btn" href="">Explore Now</a>
                        </div>
                        <!-- <div class="col-md-5">
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
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Header End -->
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{asset('assets/img/about.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="about-text">
                                <h2><span>5</span> Years Experience</h2>
                                <p>
                                Blood donation is required during an organ transplant, accidents, cancer treatment etc. For blood donation, one needs to check for a donation camp or needs to visit blood bank. The Manual Blood donation system has many disadvantages which includes, it is too time consuming, often leads to error prone results, consumes lot of manpower, lacks donor information, retrieval of data takes a lot of time, percentage of accuracy is less. In the time of emergency, it becomes difficult to approach the right donor. Rare blood groups are not available all the time at all blood banks and recipients find difficulties to track the right blood donor. To overcome this problem, we have proposed a system “Life Savior” which is a blood donation organization that immediately provides user about the availability of blood. The purpose of the system is to simplify and automate the process of searching for blood in case of emergency and maintain the records of blood donors, recipients, blood donation programs and blood stocks. It is created to keep track of the e-Information about the donor and organization that are related to donating the blood.                                </p>
                                
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                    
                        <p>Life Savior</p>
                        <h2>Every Blood Donor Is A Life Saver</h2>
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
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>Experts suggestion</p>
                                <h2>Why Should I Donate Blood?</h2>
                            </div>
                            <p>
                            Blood is needed to save lives in times of emergencies and to sustain the lives of those with medical conditions, like leukemia, thalassaemia and bleeding disorders, as well as patients who are undergoing major surgeries. For many patients, blood donors are their lifeline.                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                        <div class="col-md-7">
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-1.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Enough Volunteers</h3>
                                    <p>
                                      We got enough number of volunteers to assist patients.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="img/feature-2.jpg" alt="Feature">
                                </div>
                                <div class="col-7">
                                    <h3>Blood Bank</h3>
                                    <p>
                                        We collect blood to help people as early as possible.
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
                                       We try our best to give the best services.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            
            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <p>Team Member</p>
                        <h2>Meet Our Experts</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <!-- <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <h3>CEO</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{asset('assets/img/munt.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Muntasir Ahmed</h2>
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
                                    <img src="{{asset('assets/img/about.jpg')}}" alt="Team Image">
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
                                <!-- <div class="team-text">
                                    <h2>Jennifer Page</h2>
                                    <h3>Cleaner</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>You Might Ask</p>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <img src="{{asset('assets/img/bd3.jpg')}}" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> 
                                            <button type="button" class="btn btn-info">About Whole Blood Donation ?</button>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                        <a class="btn btn-info" href="{{url('eligible_list')}}">Ask</a>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> <button type="button" class="btn btn-info">About AB Elite Plasma Donation?</button>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        <a class="btn btn-info" href="{{url('eligible_list')}}">Ask</a>                                         </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span><button type="button"  class="btn btn-info" href="{{url('donar_list')}}" >Platelet Donation?</button>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        <a class="btn btn-info" href="{{url('eligible_list')}}">Ask</a>                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> <button type="button" class="btn btn-info">Power Red Donation?</button>
                                            
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                        <a class="btn btn-info" href="{{url('eligible_list')}}">Ask</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card">
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
                                </div>  -->
                            </div>
                            <a class="btn btn" href="{{url('eligible_list')}}">Ask more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->
            
            
            <!-- Pricing Plan Start -->
            <div class="price">
                <div class="container">
                    <div class="section-header">
                        <p>Life Savior</p>
                        <h2>Every Blood Donor Is A Life Saver</h2>
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-4">
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
                        </div>  -->
                         
                    </div>
                </div>
            </div>
            
            
            
            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2>We work for humanity</h2>
                            <p>
                                Save A life give blood.
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
            </div>
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
                                <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
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
                                <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
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
                                <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
                  
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
                                <img src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
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
            <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>To know more about blood groups</h2>
                            <p>
                                                            </p>
                        </div>
                        <div class="col-md-3">
                            <a class="btn" href="https://www.nhs.uk/conditions/blood-groups/">Click here</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <p>Latest From Blog</p>
                        <h2>Stay Updated From Our Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-1.jpg" alt="Blog">
                                <h3>Stanford Blood Center</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Flour Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>11-March-21</p>
                                </div>
                                <p>
                                The blogs here explain how blood donors are the life savers, news related to blood donation, instructions to follow before, during and after the blood donation, where does the blood actually go, and much more. So, follow to keep up with new updates.                                 </p>
                                <a class="btn" href="https://blog.feedspot.com/blood_donation_blogs/">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-2.jpg" alt="Blog">
                                <h3>Carter BloodCare Blog</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Carter BloodCareg</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>14-March-21</p>
                                </div>
                                <p>
                                This blog represents the efforts of Carter BloodCare to give hope, give blood to people in need, give life to your community. It helps in finding local blood drive near you at Carter BloodCare. Its main aim is to save lives by making transfusion possible.                                </p>
                                <a class="btn" href="https://blog.feedspot.com/blood_donation_blogs/">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="img/blog-3.jpg" alt="Blog">
                                <h3>Blood Donation</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Blood Donation</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>14-March-21</p>                                </div>
                                <p>
                                Blooddonation.in is a small community that works in own local city area. we have focused on blood donation. Today in busy life humans are struggle lots of diseases and die a lack of blood. So we encourage peoples to donate blood to save lives and their families.                                </p>
                                <a class="btn" href="https://blog.feedspot.com/blood_donation_blogs/">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Amborkhana, Sylhet, Bangladesh</p>
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
                                <a href="">Our Volunteers</a>
                                <a href="">Volunteers Review</a>
                                <a href="">Ongoing Project</a>
                                <a href="">Customer Support</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-form">
                                <h2>Stay Updated</h2>
                                <p>
                                    Donate Blood And Be A Life Saver.
                                </p>
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
                            and <a href="https://www.facebook.com/sanjida.shammy.906">Sanjida Shammy</a>
                            </p>

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
