<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
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
                                    <img src="assets/img/feature-1.jpg" alt="Feature">
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
                                    <img src="assets/img/feature-2.jpg" alt="Feature">
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
                                    <img src="assets/img/feature-3.jpg" alt="Feature">
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
                                    <h2>Sanjida Shammy</h2>
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
                            <h2>Donating blood during the COVID-19 pandemic: Save lives and be safe

Blood donation COVID-19</h2>
                            
                        </div>
                        <div class="col-md-4">
                            <a class="btn" href="https://www.ekfdiagnostics.com/donating-blood-covid-19-pandemic.html">Click here</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->


            
            
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
                                <img src="assets/img/blog-1.jpg" alt="Blog">
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
                                <img src="assets/img/blog-2.jpg" alt="Blog">
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
                                <img src="assets/img/blog-3.jpg" alt="Blog">
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
