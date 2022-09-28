<?php
involve('bars');

begin('Employer');
mainchecker('employer', 'employerauth');

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

    <div class="banner-area banner-area-two banner-img-two">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="banner-text">
              <h1>Find <span>young, talented</span> and <br> highly <span>movitated</span>  candidates</h1>
              <p>For your company in four simple steps</p>
              <div class="common-btn">
            <!-- <a class="login-btn" href="login.php">
              <i class="icofont-plus-square"></i>
              Login
            </a> -->
            <a class="sign-up-btn" href="newjob">
              <i class="icofont-user-alt-4"></i>
              Post a Job
            </a>
          </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    


    <section class="profile-area pb-100">
      <div class="container">
        <div class="section-title">
          <h2>Top candidates</h2>
        </div>
        <div class="profile-slider owl-theme owl-carousel">
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/1.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jerry Hudson</h3>
              <span>Business Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/2.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jac Jacson</h3>
              <span>Web Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/3.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Tom Potter</h3>
              <span>UX/UI Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/4.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Shane Mac</h3>
              <span>SEO Consultant </span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/5.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jerry Hudson</h3>
              <span>Business Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/6.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jac Jacson</h3>
              <span>Web Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/7.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Tom Potter</h3>
              <span>UX/UI Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/8.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Shane Mac</h3>
              <span>SEO Consultant </span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/1.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jerry Hudson</h3>
              <span>Business Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/2.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jac Jacson</h3>
              <span>Web Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/3.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Tom Potter</h3>
              <span>UX/UI Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/4.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Shane Mac</h3>
              <span>SEO Consultant </span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="profile-area pb-100">
      <div class="container">
        <div class="section-title">
          <h2>Testimonial</h2>
        </div>
        <div class="profile-slider owl-theme owl-carousel">
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/1.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jerry Hudson</h3>
              <span>Business Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/2.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jac Jacson</h3>
              <span>Web Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/3.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Tom Potter</h3>
              <span>UX/UI Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/4.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Shane Mac</h3>
              <span>SEO Consultant </span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/5.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jerry Hudson</h3>
              <span>Business Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/6.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jac Jacson</h3>
              <span>Web Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/7.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Tom Potter</h3>
              <span>UX/UI Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/8.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Shane Mac</h3>
              <span>SEO Consultant </span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/1.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jerry Hudson</h3>
              <span>Business Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/2.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Jac Jacson</h3>
              <span>Web Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/3.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Tom Potter</h3>
              <span>UX/UI Consultant</span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="profile-item">
            <img src="job/assets/img/home-1/profile/4.jpg" alt="Profile" />
            <div class="profile-inner">
              <h3>Shane Mac</h3>
              <span>SEO Consultant </span>
              <a href="candidate-details.php"
                >View Profile
                <i class="icofont-swoosh-right"></i>
              </a>
              <div class="profile-heart">
                <a href="candidate-details.php">
                  <i class="icofont-heart-alt"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    



    <section class="job-area ptb-100">
      <div class="container">
        <div class="section-title">
          <h2>Products</h2>
        </div>
        <div class="sorting-menu">
          <ul>
            <li class="filter active" data-filter="all">All</li>
            
            <li class="filter" data-filter=".Intern">Internship</li>
            <li class="filter" data-filter=".Part-Time">Part Time</li>
          </ul>
        </div>
        <div id="container">
          <div class="row">

          <?php myproducts(); ?>
            
          </div>
        </div>
        <!-- <div class="job-pagination">
          <ul>
            <li>
              <a href="#">
                <i class="icofont-simple-left"></i>
              </a>
            </li>
            <li>
              <a href="#">1</a>
            </li>
            <li>
              <a href="#">2</a>
            </li>
            <li>
              <a href="#">3</a>
            </li>
            <li>
              <a href="#">
                <i class="icofont-simple-right"></i>
              </a>
            </li>
          </ul>
        </div> -->
      </div>
    </section>


    <!-- <div class="app-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="app-item app-left">
              <img src="job/assets/img/home-1/6.png" alt="Mobile" />
              <img src="job/assets/img/home-1/7.png" alt="Mobile" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app-item">
              <div class="section-title text-left">
                <h2>Download The Glabe Mobile App</h2>
              </div>
              <p>
                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit, sed do eiusmod.
              </p>
              <div class="app-btn">
                <a class="app-btn-one" href="#">
                  <i class="flaticon-apple"></i>
                  <span>Download on the</span>
                  <p>App Store</p>
                </a>
                <a class="app-btn-two" href="#">
                  <i class="flaticon-playstore"></i>
                  <span>ANDROID APP ON</span>
                  <p>Google Play</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <section class="blog-area pt-100">
      <div class="container">
        <div class="section-title">
          <h2>Our Latest Blogs</h2>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay=".3s">
              <div class="blog-top">
                <a href="blog-details.php">
                  <img src="job/assets/img/home-1/blog/1.jpg" alt="Blog" />
                </a>
                <span>21 May, 2020</span>
              </div>
              <div class="blog-bottom">
                <h3>
                  <a href="blog-details.php"
                    >The next genaration IT will change the world</a
                  >
                </h3>
                <ul>
                  <li>
                    <img src="job/assets/img/home-1/blog/1.png" alt="Blog" />
                    Aikin Ward
                  </li>
                  <li>
                    <a href="blog-details.php"
                      >Read More
                      <i class="icofont-simple-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
              <div class="blog-top">
                <a href="blog-details.php">
                  <img src="job/assets/img/home-1/blog/2.jpg" alt="Blog" />
                </a>
                <span>22 May, 2020</span>
              </div>
              <div class="blog-bottom">
                <h3>
                  <a href="blog-details.php"
                    >It is the most important sector in the world</a
                  >
                </h3>
                <ul>
                  <li>
                    <img src="job/assets/img/home-1/blog/1.png" alt="Blog" />
                    Aikin Ward
                  </li>
                  <li>
                    <a href="blog-details.php"
                      >Read More
                      <i class="icofont-simple-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
              <div class="blog-top">
                <a href="blog-details.php">
                  <img src="job/assets/img/home-1/blog/3.jpg" alt="Blog" />
                </a>
                <span>23 May, 2020</span>
              </div>
              <div class="blog-bottom">
                <h3>
                  <a href="blog-details.php"
                    >Nowadays IT is being most popular</a
                  >
                </h3>
                <ul>
                  <li>
                    <img src="job/assets/img/home-1/blog/1.png" alt="Blog" />
                    Aikin Ward
                  </li>
                  <li>
                    <a href="blog-details.php"
                      >Read More
                      <i class="icofont-simple-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <?php
        foot();
        scripts();
  ?>
  </body>
</html>
