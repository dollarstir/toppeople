<?php
involve('bars');

begin('New Employer');

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
                                <a href="job/index.php">Home</a>
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


    <div class="create-account-area pt-100 pb-100">
        <div class="container">
            <div class="create-photo">
                
                <form>
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="create-photo-item">
                                <div class="create-photo-left">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <div class="form-group">
                                                <i class="icofont-photobucket"></i>
                                                <input type="file" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        
                    </div>
                
            </div>
            <div class="create-information">
                

                
                    <h3>Account Information</h3>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label> Company Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                
                                <input type="number" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Company Address</label>
                                <!-- <select name="salary" id="salary">

                                    <option value="2000-5000<">2000-5000</option>
                                </select> -->
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Qualification Required</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Location</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-lg-12">
                            <div class="form-group">
                                <div class="gender-area">
                                    <span>Gender</span>
                                    <input type="radio" name="gender" id="male" value="male" checked>
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="female" value="female">
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea id="your_message" class="form-control" rows="8"></textarea>
                            </div>
                        </div>



                        <div class="pricing-area pt-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="pricing-item wow fadeInUp" data-wow-delay=".3s">
                                            <span>Basic</span>
                                            <h2>Free</h2>
                                            <p>What's included</p>
                                            <ul>

                                                <li>


                                                    <i class="icofont-check"></i>
                                                    Reach out to thousands of prospective applicants

                                                </li>
                                                <li>

                                                    <i class="icofont-check"></i>
                                                    Post up to 2 vacancies per month for free

                                                </li>

                                            </ul>
                                            <a class="pricing-btn" href="job/submit-resume.php">Get Started</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="pricing-item pricing-two wow fadeInUp" data-wow-delay=".4s">
                                            <span>Standard - Best Value</span>
                                            <h2>Gh¢ 50 Per Job Post</h2>
                                            <p>What's included</p>

                                            <ul>
                                                <li><i class="icofont-check"></i>
                                                    Reach out to targeted prospective applicants</li>
                                                <li><i class="icofont-check"></i>
                                                    Advanced automatic filters of applicants</li>
                                                <li><i class="icofont-check"></i>
                                                    Fast and accurate shortlisting of applicants</li>

                                            </ul>
                                            <a class="pricing-btn" href="job/submit-resume.php">Get Started</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                                        <div class="pricing-item wow fadeInUp" data-wow-delay=".5s">
                                            <span>Professional - Great Value</span>
                                            <h2>Gh¢ 150 Per Month</h2>
                                            <p>What's included</p>
                                            <ul>
                                                <li><i class="icofont-check"></i>
                                                    Standard Package/li>
                                                <li><i class="icofont-check"></i>
                                                    Ranking of top 10 applicants</li>
                                                <li> <i class="icofont-check"></i>
                                                    Unlimited job posts per month</li>
                                                <li><i class="icofont-check"></i>
                                                    Promotion of company products/services</li>
                                            </ul>
                                            <a class="pricing-btn" href="job/submit-resume.php">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        



                        <div class="create-information-btn">
                            <a href="job/#">Show Preview</a>
                            <a href="job/#">Post Job</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-education">
                <div class="create-education-wrap">
                    <div class="create-education-left">
                        <h3>Education</h3>
                    </div>
                    <div class="create-education-right">
                        <a href="job/#">Add Education</a>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Skill</h3>
                    </div>
                    <div class="create-skills-right">
                        <a href="job/#">Edit</a>
                        <a href="job/#">Add Skill</a>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill">
                                <p>Percentage</p>
                                <div class="skill-bar skill1 wow slideInLeft animated">
                                    <span class="skill-count1">70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Social Links</h3>
                    </div>
                    <div class="create-skills-right">
                        <a href="job/#">Edit</a>
                        <a href="job/#">Add New</a>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Linedin</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Dribbble</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-left">
                <button type="submit" class="btn create-ac-btn">Save</button>
            </div>
        </div>
    </div>


    <?php
        foot();
        scripts();
  ?>
</body>

</html>