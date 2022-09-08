<?php
involve('bars');

begin('Employer Login');

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
            <br><br><br><br>
            <h2>Login Your Account</h2>
            <div class="login-wrap">
                <form class="employerlogin">
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" placeholder="Phone Number or Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Sign In</button>
                    </div>
                </form>
                <br>
                <div class="login-sign-in">
                    <a href="#">Forgot Password?</a>
                    <ul>
                        <li>Don’t Have Account ?</li>
                        <li>
                            <a href="newemployer">Sign Up Here</a>
                        </li>
                    </ul>
                    
                </div>

                <br>

                
                    <p class="text-center">OR</p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
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