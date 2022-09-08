<?php
involve('bars');

begin('Employer Dashboard');

mainchecker('employer', 'employerauth');
$employer = employer();
?>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>


    <?php employerbar(); ?>

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2>Employer Dashboard</h2>
                        <ul>
                            <li>
                                <a href="home">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Employer Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="dashboard-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="dashboard-img">
                        <img src="yolkassets/upload/<?php echo $employer['logo']; ?>" alt="Dashboard">
                        <h3><?php echo $employer['name']; ?></h3>
                        <!-- <p>UX/UI Designer</p> -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard-nav">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Saved Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-logout-tab" data-bs-toggle="pill" href="#pills-logout" role="tab" aria-controls="pills-logout" aria-selected="false">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="create-information">
                        <form>
                            <h3>Employer  Information</h3>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Company Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $employer['name']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $employer['email']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        
                                        <input type="number" name="phone" class="form-control" value="<?php echo $employer['phone']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Company Location</label>
                                        <!-- <select name="salary" id="salary">

                                            <option value="2000-5000<">2000-5000</option>
                                        </select> -->
                                        <input type="text" name="address" class="form-control" value="<?php echo $employer['address']; ?>">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn create-ac-btn">Save</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    

                    
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="change-password-area">
                        <h2>Change Your Password</h2>
                        <form>
                            <div class="form-group">
                                <label>Current Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn change-pass-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="dashboard-saved-job">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/img/home-1/jobs/1.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">UI/UX Designer</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Winbrans.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Full Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/img/home-1/jobs/2.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">Android Developer</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Infiniza.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Part Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/img/home-1/jobs/3.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">Senior Manager</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Glovibo.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Intern</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/img/home-1/jobs/4.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">Product Designer</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Bizotic.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Part Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-logout" role="tabpanel" aria-labelledby="pills-logout-tab">
                    <div class="login-area dashboard-logout-area">
                        <div class="login-wrap">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="jobseeker-item">
                                        <div class="jobseeker-icon">
                                            <i class="flaticon-job-search"></i>
                                        </div>
                                        <div class="jobseeker-inner">
                                            <span>Candidate</span>
                                            <h3>Login as a Candidate</h3>
                                        </div>
                                        <a href="login.php">Get Started
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="jobseeker-item">
                                        <div class="jobseeker-icon">
                                            <i class="flaticon-recruitment"></i>
                                        </div>
                                        <div class="jobseeker-inner">
                                            <span>Employer</span>
                                            <h3>Login as a Employer</h3>
                                        </div>
                                        <a href="login.php">Get Started
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username, Phone Number or Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </form>
                        <div class="login-sign-in">
                            <a href="#">Forgot Password?</a>
                            <ul>
                                <li>Don’t Have Account ?</li>
                                <li>
                                    <a href="create-account.php">Sign Up Here</a>
                                </li>
                            </ul>
                            <div class="text-center">
                                <button type="submit" class="btn login-btn">Sign In</button>
                            </div>
                        </div>
                        <div class="login-social">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="icofont-facebook"></i>
                                Login With Facebook
                            </a>
                            <a class="login-google" href="https://mail.google.com/" target="_blank">
                                <i class="icofont-google-plus"></i>
                                Login With Google
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        foot();
        scripts();
  ?>
</body>

</html>