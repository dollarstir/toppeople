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
                 <a href="job/candidates.php" class="nav-link">Candidate</a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">Resources <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="job/blog.php" class="nav-link">Blog</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/events.php" class="nav-link">Events</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/courses.php" class="nav-link">Courses</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/skills.php" class="nav-link">Skills Assesment</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/cv-review.php" class="nav-link">CV Review</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/job-by-us.php" class="nav-link">job by Us</a>
                   </li>
                 </ul>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">About <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="about" class="nav-link">About Us</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/careers.php" class="nav-link">Careers</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/candidates-dashboard.php" class="nav-link">Candidates Dashboard</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/browse-by-category.php" class="nav-link">Browse by category</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/faq.php" class="nav-link">FAQs</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/single-resume.php" class="nav-link">Terms and Services</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/submit-resume.php" class="nav-link">Privacy Policy</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/pricing.php" class="nav-link">Pricing</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/dashboard.php" class="nav-link">Candidate dashboard</a>
                   </li>
                 </ul>
               </li>
               <!-- <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">Pages <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="job/company-list.php" class="nav-link">Company List</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/company-details.php" class="nav-link">Company Details</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/login.php" class="nav-link">Login Page</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/create-account.php" class="nav-link">Create Account Page</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/profile.php" class="nav-link">Profile</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/single-profile.php" class="nav-link">Single Profile</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/404.php" class="nav-link">404</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/faq.php" class="nav-link">FAQ</a>
                   </li>
                   <li class="nav-item">
                     <a href="terms-and-conditions.php" class="nav-link">Terms and Conditions</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/privacy-policy.php" class="nav-link">Privacy Policy</a>
                   </li>
                 </ul>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link dropdown-toggle">Blogs <i class="icofont-simple-down"></i></a>
                 <ul class="dropdown-menu">
                   <li class="nav-item">
                     <a href="job/blog.php" class="nav-link">Blog</a>
                   </li>
                   <li class="nav-item">
                     <a href="job/blog-details.php" class="nav-link">Blog Details</a>
                   </li>
                 </ul>
               </li> -->
               <li class="nav-item">
                 <a href="contact" class="nav-link">Contact</a>
               </li>
             </ul>
             <div class="common-btn">
               <a class="login-btn" href="login">
                 <i class="icofont-plus-square"></i>
                 Login
               </a>
               <a class="sign-up-btn" href="register">
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
            <form class="newsletter-form">
              <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required autocomplete="off"/>
              <button class="btn subscribe-btn" type="submit">Subscribe</button>
             <!-- <div id="validator-newsletter" class="form-result"></div>-->
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
                  Topeople.com 
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
                  <a href="newjob" class="nav-link">Post a Job</a>
                </li>
    
                <!-- <li class="nav-item">
                  <a href="employer" class="nav-link">Employer</a>
                </li> -->
    
                <!-- <li class="nav-item">
                  <a href="about" class="nav-link">Candidate</a>
                </li> -->
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Explore <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="job/candidates.php" class="nav-link">Candidates</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/candidates.php" class="nav-link">Top Candidates</a>
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
                  <a href="job/candidates.php" class="nav-link">Candidate</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Resources <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="job/blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/events.php" class="nav-link">Events</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a href="job/single-resume.php" class="nav-link">Terms and Services</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/submit-resume.php" class="nav-link">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/pricing.php" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/dashboard.php" class="nav-link">Candidate dashboard</a>
                    </li> -->
                  </ul>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Pages <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="job/company-list.php" class="nav-link">Company List</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/company-details.php" class="nav-link">Company Details</a>
                    </li>
                    <li class="nav-item">
                      <a href="login" class="nav-link">Login Page</a>
                    </li>
                    <li class="nav-item">
                      <a href="register" class="nav-link">Create Account Page</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/profile.php" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/single-profile.php" class="nav-link">Single Profile</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/404.php" class="nav-link">404</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/faq.php" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/terms-and-conditions.php" class="nav-link">Terms and Conditions</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/privacy-policy.php" class="nav-link">Privacy Policy</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle">Blogs <i class="icofont-simple-down"></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="job/blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="job/blog-details.php" class="nav-link">Blog Details</a>
                    </li>
                  </ul>
                </li> -->
                <li class="nav-item">
                  <a href="employersjobs" class="nav-link">Products</a>
                </li>
              </ul>
              <div class="common-btn">';

      if (isset($_SESSION['employer'])) {
          echo '<a class="login-btn" href="employerdashboard">
          <i class="icofont-notification"></i>
          
        </a>

        
        <a class="login-btn" href="employerdashboard">
          <i class="icofont-home"></i>
          
        </a>

        
        <a class="login-btn" href="employerlogout">
          <i class="icofont-power"></i>
          Logout
        </a>';
      } else {
          echo '<a class="login-btn" href="employerauth">
          <i class="icofont-lock"></i>
          Login
        </a>

        
        

        
        <a class="sign-up-btn" href="newemployer">
          <i class="icofont-user"></i>
          Sign Up
        </a>';
      }

      echo' </div>
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
                } else {
                    echo 'failed to create account try again';
                }
            }
        }
    }
}
// newsletter subscription*******************************

function newsletter($email)
{
    if (empty(trim($email))) {
        echo 'Email is required';
    } else {
        if (authenticate('newsletters', [['email', '=', $email]]) == 'success') {
            echo 'You  are already a subscriber';
        } else {
            if (insert('newsletters', ['email' => $email, 'dateadded' => date('jS F, Y')]) == 'success') {
                echo 'success';
            } else {
                echo 'failed to subscribe try again';
            }
        }
    }
}

// employer login function****************************************************************8

function employerlogin($login, $password)
{
    if (empty(trim($login)) || empty(trim($password))) {
        echo 'All fields are required';
    } else {
        if (authenticate('employers', [['email', '=', $login]]) == 'success' || authenticate('employers', [['phone', '=', $login]]) == 'success') {
            if (loginauth('employers', 'employer', [['email', '=', $login], ['password', '=', md5($password)]], 'AND') == 'success') {
                echo 'employersuccess';
            } else {
                echo 'Invalid login details';
            }
        } else {
            echo 'Email or phone number not found';
        }
    }
}

// getting employer details function ********************************************************************

function employer()
{
    session_start();
    $id = $_SESSION['employer']['id'];

    $employer = customfetch('employers', [['id', '=', $id]]);

    return $employer[0];
}

// change employer password********************************************************************

function employerchangepass($oldpass, $newpass, $repass)
{
    if (empty(trim($oldpass)) || empty(trim($newpass)) || empty(trim($repass))) {
        echo 'All fields are required';
    } else {
        if ($newpass != $repass) {
            echo 'Password does not match';
        } else {
            session_start();
            if (authenticate('employers', [['id', '=', $_SESSION['employer']['id']], ['password', '=', md5($oldpass)]], 'AND') == 'success') {
                if (update('employers', ['password' => md5($newpass)], ['id' => $_SESSION['employer']['id']]) == 'success') {
                    echo 'Updated Successfully';
                } else {
                    echo 'failed to change password try again';
                }
            } else {
                echo 'Invalid old password';
            }
        }
    }
}

function listsalary()
{
    $s = fetchAll('salary');
    foreach ($s as $salary) {
        echo '<option value="'.$salary['salary'].'">'.$salary['salary'].'</option>';
    }
}

function listcategory()
{
    $s = fetchAll('category');
    foreach ($s as $category) {
        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
    }
}

// new job function********************************************************************
function newjob($title, $company, $vacancy, $type, $gender, $requirement, $description, $location, $salary, $category, $experience, $qualification, $deadline)
{
    if (empty(trim($title)) || empty(trim($company)) || empty(trim($vacancy)) || empty(trim($type)) || empty(trim($gender)) || empty(trim($requirement)) || empty(trim($description)) || empty(trim($location)) || empty(trim($salary)) || empty(trim($category)) || empty(trim($experience)) || empty(trim($qualification)) || empty(trim($deadline))) {
        echo 'All fields are required';
    } else {
        $record = ['title' => $title, 'company' => $company, 'category' => $category, 'location' => $location, 'vacancy' => $vacancy, 'type' => $type, 'salary' => $salary, 'description' => $description, 'requirement' => $requirement, 'qualification' => $qualification, 'experience' => $experience, 'deadline' => $deadline, 'gender' => $gender, 'status' => 'active', 'dateposted' => date('jS F, Y')];
        if (insert('job', $record) == 'success') {
            echo 'jobadded';
        } else {
            echo 'failed to create job try again';
        }
    }
}

// displayer employer jobs function********************************************************************
function employerjobs()
{
    session_start();
    $id = $_SESSION['employer']['id'];
    $logo = $_SESSION['employer']['logo'];
    $company = $_SESSION['employer']['name'];
    $jobs = customfetch('job', [['company', '=', $id]]);

    foreach ($jobs as $job) {
        echo '<div class="col-lg-6">
        <div class="job-item wow fadeInUp" data-wow-delay=".3s">
            <img src="yolkassets/upload/'.$logo.'" alt="Job" style="width:70px;height:70px;">
            <div class="job-inner align-items-center">
                <div class="job-inner-left">
                    <h3>
                        <a href="job-details.php">'.$job['title'].'</a>
                    </h3>
                    <a class="company" href="company-details.php">'.$company.'</a>
                    <ul>
                        <li>
                            <i class="icofont-money-bag"></i>
                            '.$job['salary'].'
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            '.$job['location'].'
                        </li>
                    </ul>
                </div>
                <div class="job-inner-right">
                    <ul>
                        <li>
                            <a href="editjob?token='.$job['id'].'">Edit</a>
                        </li>
                        <li>
                            <span>'.$job['type'].'</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
    }
}
// edit job function********************************************************************
function editjob($title, $company, $vacancy, $type, $gender, $requirement, $description, $location, $salary, $category, $experience, $qualification, $deadline, $id)
{
    if (empty(trim($title)) || empty(trim($company)) || empty(trim($vacancy)) || empty(trim($type)) || empty(trim($gender)) || empty(trim($requirement)) || empty(trim($description)) || empty(trim($location)) || empty(trim($salary)) || empty(trim($category)) || empty(trim($experience)) || empty(trim($qualification)) || empty(trim($deadline))) {
        echo 'All fields are required';
    } else {
        $record = ['title' => $title, 'company' => $company, 'category' => $category, 'location' => $location, 'vacancy' => $vacancy, 'type' => $type, 'salary' => $salary, 'description' => $description, 'requirement' => $requirement, 'qualification' => $qualification, 'experience' => $experience, 'deadline' => $deadline, 'gender' => $gender, 'status' => 'active'];
        if (update('job', $record, ['id' => $id]) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'failed to Update job try again';
        }
    }
}

// my products********************************************************************
function myproducts()
{
    session_start();
    $id = $_SESSION['employer']['id'];
    // $logo = $_SESSION['employer']['logo'];

    $jobs = fetchall('job');

    foreach ($jobs as $job) {
        $u = customfetch('employers', [['id', '=', $job['company']]]);
        $logo = $u[0]['logo'];
        $company = $u[0]['name'];

        if ($u[0]['id'] == $id) {
            echo '<div class="col-lg-6 mix '.$job['type'].'">
          <div class="job-item">
            <img src="yolkassets/upload/'.$logo.'" alt="Job"  style="width:80px;height:80px;"/>
            <div class="job-inner align-items-center">
              <div class="job-inner-left">
                <h3>
                  <a href="job-details.html">'.$job['title'].'</a>
                </h3>
                <a class="company" href=""
                  >'.$company.'</a
                >
                <ul>
                  <li>
                    <i class="icofont-money-bag"></i>
                    '.$job['salary'].'
                  </li>
                  <li>
                    <i class="icofont-location-pin"></i>
                    '.$job['location'].'
                  </li>
                </ul>
              </div>
              <div class="job-inner-right">
                <ul>
                   <li>
                    <a href="editjob?token='.$job['id'].'">Edit</a>
                  </li>
                  <li>
                    <span>'.$job['type'].'</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>';
        } else {
            echo '<div class="col-lg-6 mix '.$job['type'].'">
        <div class="job-item">
          <img src="yolkassets/upload/'.$logo.'" alt="Job"  style="width:80px;height:80px;"/>
          <div class="job-inner align-items-center">
            <div class="job-inner-left">
              <h3>
                <a href="job-details.html">'.$job['title'].'</a>
              </h3>
              <a class="company" href=""
                >'.$company.'</a
              >
              <ul>
                <li>
                  <i class="icofont-money-bag"></i>
                  '.$job['salary'].'
                </li>
                <li>
                  <i class="icofont-location-pin"></i>
                  '.$job['location'].'
                </li>
              </ul>
            </div>
            <div class="job-inner-right">
              <ul>
                 <!--<li>
                  <a href="editjob?token='.$job['id'].'">Edit</a>
                </li> -->
                <li>
                  <span>'.$job['type'].'</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>';
        }
    }
}
