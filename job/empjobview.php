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

    <!--  -->

    


    

    



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


    

    <?php
        foot();
        scripts();
  ?>
  </body>
</html>
