<?php

// ************************//
// Developer : Frederick Ennin
//Email : kpin463@gmail.com
//github : https://github.com/dollarstir
//  started on : Monday 1st August, 2022
// ************************//

 function begin($title)
 {
     echo '<!DOCTYPE html>
    <html lang="zxx">
    
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
      <link rel="stylesheet" href="job/assets/css/bootstrap.min.css" />
    
      <link rel="stylesheet" href="job/assets/css/meanmenu.css" />
    
      <link rel="stylesheet" href="job/assets/css/icofont.min.css" />
    
      <link rel="stylesheet" href="job/assets/css/owl.carousel.min.css" />
      <link rel="stylesheet" href="job/assets/css/owl.theme.default.min.css" />
    
      <link rel="stylesheet" href="job/assets/css/animate.min.css" />
    
      <link rel="stylesheet" href="job/assets/fonts/flaticon.css" />
    
      <link rel="stylesheet" href="job/assets/css/odometer.min.css" />
    
      <link rel="stylesheet" href="job/assets/css/style.css" />
    
      <link rel="stylesheet" href="job/assets/css/responsive.css" />
      <link rel="stylesheet" href="ui/css/sweetalert2.min.css" />
    
      <link rel="stylesheet" href="job/assets/css/theme-dark.css" />
      <title>Topeople - '.$title.'</title>
      <link rel="icon" type="image/png" href="job/assets/img/favicon.png" />
    </head>';
 }

 function topbar()
 {
     echo '<div class="navbar-area fixed-top">
     <div class="mobile-nav">
       <a href="index.php" class="logo">
         <img src="job/assets/img/logo.png" alt="Logo" />
       </a>
     </div>
   
     <div class="main-nav">
       <div class="container">
         <nav class="navbar navbar-expand-md navbar-light">
           <a class="navbar-brand" href="home">
             <img src="job/assets/img/logo.png" alt="Logo"  />
           </a>
           <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
             <ul class="navbar-nav">
               <li class="nav-item">
                 <a href="home" class="nav-link">Home</a>
               </li>
   
               <li class="nav-item">
                 <a href="employer" class="nav-link">Employer</a>
               </li>
   
               <li class="nav-item">
                 <a href="candidates.php" class="nav-link">Candidate</a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">Resources <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="blog.php" class="nav-link">Blog</a>
                   </li>
                   <li class="nav-item">
                     <a href="events.php" class="nav-link">Events</a>
                   </li>
                   <li class="nav-item">
                     <a href="courses.php" class="nav-link">Courses</a>
                   </li>
                   <li class="nav-item">
                     <a href="skills.php" class="nav-link">Skills Assesment</a>
                   </li>
                   <li class="nav-item">
                     <a href="cv-review.php" class="nav-link">CV Review</a>
                   </li>
                   <li class="nav-item">
                     <a href="job-by-us.php" class="nav-link">job by Us</a>
                   </li>
                 </ul>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">About <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="aboutus.php" class="nav-link">About Us</a>
                   </li>
                   <li class="nav-item">
                     <a href="careers.php" class="nav-link">Careers</a>
                   </li>
                   <li class="nav-item">
                     <a href="candidates-dashboard.php" class="nav-link">Candidates Dashboard</a>
                   </li>
                   <li class="nav-item">
                     <a href="browse-by-category.php" class="nav-link">Browse by category</a>
                   </li>
                   <li class="nav-item">
                     <a href="faq.php" class="nav-link">FAQs</a>
                   </li>
                   <li class="nav-item">
                     <a href="single-resume.php" class="nav-link">Terms and Services</a>
                   </li>
                   <li class="nav-item">
                     <a href="submit-resume.php" class="nav-link">Privacy Policy</a>
                   </li>
                   <li class="nav-item">
                     <a href="pricing.php" class="nav-link">Pricing</a>
                   </li>
                   <li class="nav-item">
                     <a href="dashboard.php" class="nav-link">Candidate dashboard</a>
                   </li>
                 </ul>
               </li>
               <!-- <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">Pages <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="company-list.php" class="nav-link">Company List</a>
                   </li>
                   <li class="nav-item">
                     <a href="company-details.php" class="nav-link">Company Details</a>
                   </li>
                   <li class="nav-item">
                     <a href="login.php" class="nav-link">Login Page</a>
                   </li>
                   <li class="nav-item">
                     <a href="create-account.php" class="nav-link">Create Account Page</a>
                   </li>
                   <li class="nav-item">
                     <a href="profile.php" class="nav-link">Profile</a>
                   </li>
                   <li class="nav-item">
                     <a href="single-profile.php" class="nav-link">Single Profile</a>
                   </li>
                   <li class="nav-item">
                     <a href="404.php" class="nav-link">404</a>
                   </li>
                   <li class="nav-item">
                     <a href="faq.php" class="nav-link">FAQ</a>
                   </li>
                   <li class="nav-item">
                     <a href="terms-and-conditions.php" class="nav-link">Terms and Conditions</a>
                   </li>
                   <li class="nav-item">
                     <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                   </li>
                 </ul>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">Blogs <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="blog.php" class="nav-link">Blog</a>
                   </li>
                   <li class="nav-item">
                     <a href="blog-details.php" class="nav-link">Blog Details</a>
                   </li>
                 </ul>
               </li> -->
               <li class="nav-item">
                 <a href="contact.php" class="nav-link">Contact</a>
               </li>
             </ul>
             <div class="common-btn">
               <a class="login-btn" href="login.php">
                 <i class="icofont-plus-square"></i>
                 Login
               </a>
               <a class="sign-up-btn" href="signup.php">
                 <i class="icofont-user-alt-4"></i>
                 Sign Up
               </a>
             </div>
           </div>
         </nav>
       </div>
     </div>
   </div>';
 }
  function scripts()
  {
      echo '<script src="job/assets/js/jquery.min.js"></script>
      <script src="job/assets/js/bootstrap.bundle.min.js"></script>
    
      <script src="job/assets/js/jquery.meanmenu.js"></script>
    
      <script src="job/assets/js/jquery.mixitup.min.js"></script>
    
      <script src="job/assets/js/owl.carousel.min.js"></script>
    
      <script src="job/assets/js/jquery.ajaxchimp.min.js"></script>
    
      <script src="job/assets/js/form-validator.min.js"></script>
    
      <script src="job/assets/js/contact-form-script.js"></script>
    
      <script src="job/assets/js/wow.min.js"></script>
    
      <script src="job/assets/js/odometer.min.js"></script>
      <script src="job/assets/js/jquery.appear.min.js"></script>
    
      <script src="job/assets/js/custom.js"></script>
      <script src="ui/js/sweetalert2.all.min.js"></script>

      <script src="processor/processor.js"></script>';
  }

  function foot()
  {
      echo '<footer>
      <div class="container">
        <div class="subscribe-area">
          <div class="section-title">
            <h2>Subscribe Newsletter</h2>
          </div>
          <div class="subscribe-shape">
            <img src="assets/img/shape/1.png" alt="Shape" />
            <img src="assets/img/shape/1.png" alt="Shape" />
            <img src="assets/img/shape/1.png" alt="Shape" />
            <img src="assets/img/shape/1.png" alt="Shape" />
            <img src="assets/img/shape/2.png" alt="Shape" />
          </div>
          <div class="subscribe-item">
            <form class="newsletter-form" data-toggle="validator">
              <input
                type="email"
                class="form-control"
                placeholder="Enter Your Email"
                name="EMAIL"
                required
                autocomplete="off"
              />
              <button class="btn subscribe-btn" type="submit">Subscribe</button>
              <div id="validator-newsletter" class="form-result"></div>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <div class="footer-logo">
                <a href="#">
                  <img src="assets/img/logo-two.png" alt="Logo" />
                </a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul>
                  <li>
                    <a href="https://www.youtube.com" target="_blank">
                      <i class="icofont-youtube-play"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com" target="_blank">
                      <i class="icofont-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com" target="_blank">
                      <i class="icofont-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.twitter.com" target="_blank">
                      <i class="icofont-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <div class="footer-category">
                <h3>Category</h3>
                <ul>
                  <li>
                    <a href="#">
                      <i class="icofont-simple-right"></i>
                      Development
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icofont-simple-right"></i>
                      Business
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icofont-simple-right"></i>
                      Tech & IT
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icofont-simple-right"></i>
                      Finance
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icofont-simple-right"></i>
                      Networking
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <div class="footer-category">
                <h3>Quick Links</h3>
                <ul>
                  <li>
                    <a href="index.php">
                      <i class="icofont-simple-right"></i>
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="about.php">
                      <i class="icofont-simple-right"></i>
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="blog.php">
                      <i class="icofont-simple-right"></i>
                      Blogs
                    </a>
                  </li>
                  <li>
                    <a href="company-list.php">
                      <i class="icofont-simple-right"></i>
                      Companies
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icofont-simple-right"></i>
                      Testimonials
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <div class="footer-find">
                <h3>Find Us</h3>
                <ul>
                  <li>
                    <i class="icofont-location-pin"></i>
                    28/A Street, New York City
                  </li>
                  <li>
                    <i class="icofont-ui-call"></i>
                    <a href="tel:+880123456789"> +88 0123 456 789 </a>
                  </li>
                  <li>
                    <i class="icofont-ui-email"></i>
                    <a
                      href="../../cdn-cgi/l/email-protection.php#bed6dbd2d2d1fed9dfdcd2db90ddd1d3"
                    >
                      <span
                        class="__cf_email__"
                        data-cfemail="96fef3fafaf9d6f1f7f4faf3b8f5f9fb"
                        >[email&#160;protected]</span
                      >
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <div class="row">
            <div class="col-lg-6">
              <div class="copyright-item">
                <p>
                  Copyright ©
                  <script
                    data-cfasync="false"
                    src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
                  ></script>
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Topeople.com Designed By
                  <a href="#" target="_blank"
                    >Dollarsoft</a
                  >
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="copyright-item copyright-right">
                <ul>
                  <li>
                    <a href="terms-and-conditions.php" target="_blank"
                      >Terms & Conditions</a
                    >
                  </li>
                  <li>
                    <span>-</span>
                  </li>
                  <li>
                    <a href="privacy-policy.php" target="_blank"
                      >Privacy Policy</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>';
  }

  function employerbar()
  {
      echo '<div class="navbar-area fixed-top">
      <div class="mobile-nav">
        <a href="index.php" class="logo">
          <img src="assets/img/logo.png" alt="Logo" />
        </a>
      </div>
    
      <div class="main-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
              <img src="assets/img/logo.png" alt="Logo" />
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="post-a-job.php" class="nav-link">Post a Job</a>
                </li>
    
                <!-- <li class="nav-item">
                  <a href="employers.php" class="nav-link">Employer</a>
                </li> -->
    
                <!-- <li class="nav-item">
                  <a href="about.php" class="nav-link">Candidate</a>
                </li> -->
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Explore <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="candidates.php" class="nav-link">Candidates</a>
                    </li>
                    <li class="nav-item">
                      <a href="candidates.php" class="nav-link">Top Candidates</a>
                    </li>
                    <li class="nav-item">
                      <a href="employers.php" class="nav-link">Other Recruiters</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="post-a-job.php" class="nav-link">Skills Assesment</a>
                    </li>
                    <li class="nav-item">
                      <a href="post-a-job.php" class="nav-link">CV Review</a>
                    </li> -->
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="candidates.php" class="nav-link">Candidate</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Resources <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="events.php" class="nav-link">Events</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="single-resume.php" class="nav-link">Terms and Services</a>
                    </li>
                    <li class="nav-item">
                      <a href="submit-resume.php" class="nav-link">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                      <a href="pricing.php" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard.php" class="nav-link">Candidate dashboard</a>
                    </li> -->
                  </ul>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Pages <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="company-list.php" class="nav-link">Company List</a>
                    </li>
                    <li class="nav-item">
                      <a href="company-details.php" class="nav-link">Company Details</a>
                    </li>
                    <li class="nav-item">
                      <a href="login.php" class="nav-link">Login Page</a>
                    </li>
                    <li class="nav-item">
                      <a href="create-account.php" class="nav-link">Create Account Page</a>
                    </li>
                    <li class="nav-item">
                      <a href="profile.php" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="single-profile.php" class="nav-link">Single Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="404.php" class="nav-link">404</a>
                    </li>
                    <li class="nav-item">
                      <a href="faq.php" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a href="terms-and-conditions.php" class="nav-link">Terms and Conditions</a>
                    </li>
                    <li class="nav-item">
                      <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Blogs <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="blog-details.php" class="nav-link">Blog Details</a>
                    </li>
                  </ul>
                </li> -->
                <li class="nav-item">
                  <a href="#" class="nav-link">Products</a>
                </li>
              </ul>
              <div class="common-btn">
                <a class="login-btn" href="login.php">
                  <i class="icofont-plus-square"></i>
                  Login
                </a>
                <a class="sign-up-btn" href="signup.php">
                  <i class="icofont-user-alt-4"></i>
                  Sign Up
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>';
  }

  function candidatebar()
  {
      echo '<div class="navbar-area fixed-top">
      <div class="mobile-nav">
        <a href="index.php" class="logo">
          <img src="assets/img/logo.png" alt="Logo" />
        </a>
      </div>
    
      <div class="main-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
              <img src="assets/img/logo.png" alt="Logo" />
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#" class="nav-link">Find Jobs</a>
                </li>
    
                <!-- <li class="nav-item">
                  <a href="employers.php" class="nav-link">Employer</a>
                </li> -->
    
                <!-- <li class="nav-item">
                  <a href="about.php" class="nav-link">Candidate</a>
                </li> -->
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Explore <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="rrowse-by-category-details.php" class="nav-link">Job by Category</a>
                    </li>
                    <li class="nav-item">
                      <a href="employers.php" class="nav-link">Top Employers</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="job-details.php" class="nav-link">Other Recruiters</a>
                    </li> -->
                    <!-- <li class="nav-item">
                      <a href="post-a-job.php" class="nav-link">Skills Assesment</a>
                    </li>
                    <li class="nav-item">
                      <a href="post-a-job.php" class="nav-link">CV Review</a>
                    </li> -->
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="employers.php" class="nav-link">Employer</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Resources <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="events.php" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                      <a href="courses.php" class="nav-link">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a href="skills.php" class="nav-link">Skills Assesment</a>
                    </li>
                    <li class="nav-item">
                      <a href="cv-review.php" class="nav-link">CV Review</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="dashboard.php" class="nav-link">Candidate dashboard</a>
                    </li> -->
                  </ul>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Pages <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="company-list.php" class="nav-link">Company List</a>
                    </li>
                    <li class="nav-item">
                      <a href="company-details.php" class="nav-link">Company Details</a>
                    </li>
                    <li class="nav-item">
                      <a href="login.php" class="nav-link">Login Page</a>
                    </li>
                    <li class="nav-item">
                      <a href="create-account.php" class="nav-link">Create Account Page</a>
                    </li>
                    <li class="nav-item">
                      <a href="profile.php" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="single-profile.php" class="nav-link">Single Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="404.php" class="nav-link">404</a>
                    </li>
                    <li class="nav-item">
                      <a href="faq.php" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a href="terms-and-conditions.php" class="nav-link">Terms and Conditions</a>
                    </li>
                    <li class="nav-item">
                      <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Blogs <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="blog-details.php" class="nav-link">Blog Details</a>
                    </li>
                  </ul>
                </li> -->
                <li class="nav-item">
                  <a href="#" class="nav-link">Products</a>
                </li>
              </ul>
              <div class="common-btn">
                <a class="login-btn" href="login.php">
                  <i class="icofont-plus-square"></i>
                  Login
                </a>
                <a class="sign-up-btn" href="signup.php">
                  <i class="icofont-user-alt-4"></i>
                  Sign Up
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>';
  }
/* ***********************************************************

employees functions
/**/

function employerregister($name, $email, $phone, $address, $password, $repass)
{
    if (empty(trim($name)) || empty(trim($email) || empty(trim($phone))) || empty(trim($address)) || empty(trim($password))) {
        echo 'All fields are required';
    } else {
        if ($password != $repass) {
            echo 'Password does not match';
        } elseif ($_FILES['logo']['name'] == '') {
            echo 'select company logo';
        } else {
            if (authenticate('employers', [['email', '=', $email], ['phone', '=', $phone]], 'OR')) {
                echo 'Employer account already exists';
            } else {
                if (insert('employers', ['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address, 'password' => md5($password), 'status' => 'active', 'dateadded' => date('jS F, Y')], $_FILES, '../yolkassets/upload') == 'success') {
                    echo 'success';
                }
                else{
                  echo 'failed to create account try again';
                }
            }
        }
    }
}
