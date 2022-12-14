<?php
involve('bars');

begin('Login');

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


    <div class="login-area pt-100">
        <div class="container">
            <h2>Login Your Account</h2>
            <div class="login-wrap">
                <div class="row">
                <div class="col-sm-6 col-lg-6">
                        <a href="candidateauth">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-job-search"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span>Candidate</span>
                                <h3>Login as a Candidate <i class="icofont-arrow-right"></i></h3>
                            </div>
                            
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <a href="employerauth">

                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-recruitment"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span>Employer</span>
                                <h3>Login as a Employer<i class="icofont-arrow-right"></i></h3>
                            </div>
                            
                        </div>
                        </a>
                        
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