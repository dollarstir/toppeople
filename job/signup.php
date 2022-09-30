<?php
involve('bars');

begin('Signup');

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
                        <h2>Create Account</h2>
                        <ul>
                            <li>
                                <a href="home">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Create Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-area pt-100">
        <div class="container">
            <h2>Sign Up Your Account</h2>
            <div class="login-wrap">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-job-search"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span>Candidate</span>
                                <h3>SignUp as a Candidate</h3>
                            </div>
                            <a href="newcandidate">Get Started
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
                                <h3>SignUp as a Employer</h3>
                            </div>
                            <a href="newemployer">Get Started
                                <i class="icofont-arrow-right"></i>
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