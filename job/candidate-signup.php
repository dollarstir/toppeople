<?php
involve('bars');

begin('Candidate Signup');

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


    <?php topbar(); ?>


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2>Sign Up</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Sign Up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="login-area pt-100">
        <div class="container">
            <h2>Sign Up Your Account</h2>
            <!-- <div class="login-wrap">
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
            </div> -->
            <form>
            <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username, Phone Number or Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </form>
            <div class="login-sign-in">
                <!-- <a href="#">Forgot Password?</a>
                <ul>
                    <li>Don’t Have Account ?</li>
                    <li>
                        <a href="create-account.php">Sign Up Here</a>
                    </li>
                </ul> -->
                <div class="text-center">
                    <!-- <button type="submit" class="btn login-btn">Sign Up</button> -->
                    <!-- <button href="candidate-signup2.php" type="submit" class="btn login-btn">Sign Up</button> -->
                    <a href="newcandidate2"  class="btn btn-success">Continue</a>


                    

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


    <?php
        foot();
        scripts();
  ?>
</body>

</html>