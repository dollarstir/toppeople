<?php
involve('bars');

begin('Post Job');

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
                        <h2>Post A Job</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Post A Job</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="post-job-area pt-100">
        <div class="container">
            <div class="post-job-item">
                <form>
                    <div class="post-job-heading">
                        <h2>Post Your Job</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" placeholder="UX/UI Designer">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Category</label>
                                <div class="job-category-area">
                                    <select class="form-select" aria-label="Default select example">
                                        <option>IT & Technology</option>
                                        <option>Web Developer</option>
                                        <option>UX/UI Design</option>
                                        <option>SEO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Toppeople" value="<?php echo $employer['name']; ?>" readonly>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <div class="job-currency-area">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" placeholder="Winbrans.com">
                                    <select class="form-select" aria-label="Default select example">
                                        <option>$USD</option>
                                        <option>EURO</option>
                                        <option>POUND</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->


                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Salary Range</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="salary" aria-label="Default select example">
                                        <option>Select Salary Range</option>
                                        <?php listsalary(); ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gender Needed For Work</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="gender" aria-label="Default select example">
                                        <option>Select Gender Needed</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Any">Any</option>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Vacancies</label>
                                <input type="text" name="vacancy" class="form-control" placeholder="10">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" placeholder="210-27 Quadra, Market Street, Victoria Canada">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Experience</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="gender" aria-label="Default select example">
                                        <option>Years of experience</option>
                                        <option value="Below 1 year">Below 1 Year</option>
                                        <option value="1 year">1 year</option>
                                        <option value="2 years">2 years</option>
                                        <option value="3 years">3 years</option>
                                        <option value="4 years">4 years</option>
                                        <option value="5 years">5 years</option>
                                        <option value="6 years">6 years</option>
                                        <option value="7 years">7 years</option>
                                        <option value="8 years">8 years</option>
                                        <option value="9 years">9 years</option>
                                        <option value="10 years">10 years</option>
                                        <option value="Above 10 years">Above 10 years</option>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="job-type-area">
                                    <span>Job Type</span>
                                   
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="Part-Time">
                                        <label class="form-check-label" for="inlineRadio2">Part Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="Intern">
                                        <label class="form-check-label" for="inlineRadio3">Intern</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea id="your_message" name="description" rows="8" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Requirement </label>
                                <textarea id="your_message" name="requirement" rows="8" class="form-control" placeholder="Seperate each with Comma(,)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn create-ac-btn">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
        foot();
        scripts();
  ?>
</body>

</html>