<?php
involve('bars');

begin('Edit Job');

mainchecker('employer', 'employerauth');
$employer = employer();

$jobid = $_GET['token'];
$job = customfetch('job', [['id', '=', $jobid]]);
$job = $job[0];
$catid = $job['category'];
$category = customfetch('category', [['id', '=', $catid]]);
$category = $category[0];
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
                        <h2>Edit <?php echo $job['title']; ?></h2>
                        <ul>
                            <li>
                                <a href="home">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Edit <?php echo $job['title']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="post-job-area pt-100">
        <div class="container">
            <div class="post-job-item">
                <form class="editjob">
                    <div class="post-job-heading">
                        <h2>Edit <?php echo $job['title']; ?></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" name="title" class="form-control" placeholder="UX/UI Designer" value="<?php echo $job['title']; ?>">
                                <input type="hidden" name="id" class="form-control" placeholder="UX/UI Designer" value="<?php echo $job['id']; ?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Category</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="category" aria-label="Default select example" value="<?php echo $job['category']; ?>">
                                        <option value="<?php echo $catid; ?>"><?php echo $category['name']; ?></option>
                                        <?php listcategory(); ?>
                                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Toppeople" value="<?php echo $employer['name']; ?>" readonly>
                                <input type="hidden" name="company" value="<?php echo $employer['id']; ?>">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Salary Range</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="salary" aria-label="Default select example" value="<?php echo $job['salary']; ?>">
                                        <option value="<?php echo $job['salary']; ?>"><?php echo $job['salary']; ?></option>
                                        <?php listsalary(); ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gender Needed For Work</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="gender" aria-label="Default select example" value="<?php echo $job['gender']; ?>">
                                        <option value="<?php echo $job['gender']; ?>"><?php echo $job['gender']; ?></option>
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
                                <input type="text" name="vacancy" class="form-control" placeholder="10" value="<?php echo $job['vacancy']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" name="location" class="form-control" placeholder="210-27 Quadra, Market Street, Victoria Canada" value="<?php echo $job['location']; ?>">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Experience</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="experience" aria-label="Default select example" value="<?php echo $job['experience']; ?>">
                                        <option value="<?php echo $job['experience']; ?>"><?php echo $job['experience']; ?></option>
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



                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Qualification</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="qualification" aria-label="Default select example" value="<?php echo $job['qualification']; ?>">
                                        <option value="<?php echo $job['qualification']; ?>"><?php echo $job['qualification']; ?></option>
                                        <option value="Any">Any</option>
                                        <option value="BECE">BECE</option>
                                        <option value="WASSCE/SSCE">WASSCE/SSCE</option>
                                        <option value="Diplomas/Certificates">Diplomas/Certificates</option>
                                        <option value="Bachelor Degree">Bachelor Degree</option>
                                        <option value="Masters Degree">Masters Degree</option>
                                        <option value="PHD">PHD</option>
                                        
                                        
                                        
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Deadline For Application</label>
                                <input type="text" name="deadline" class="form-control" placeholder="Deadline" value="<?php echo $job['deadline']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Type</label>
                                <div class="job-category-area">
                                    <select class="form-select" name="type" aria-label="Default select example" value="<?php echo $job['type']; ?>">
                                        <option value="<?php echo $job['type']; ?>"><?php echo $job['type']; ?></option>
                                        <option value="Part-Time">Part-Time</option>
                                        <option value="Intern">Intern</option>
                                        
                                        
                                        
                                        
                                    </select>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea id="your_message" name="description" rows="8" class="form-control"><?php echo $job['description']; ?></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Requirement </label>
                                <textarea id="your_message" name="requirement" rows="8" class="form-control" placeholder="Seperate each with Comma(,)"><?php echo $job['requirement']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn create-ac-btn">Save</button>
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