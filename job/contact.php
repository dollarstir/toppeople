<?php
involve('bars');

begin('Contact Us');

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
<h2>Contact</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>
<i class="icofont-simple-right"></i>
</li>
<li>Contact</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="contact-form-area ptb-100">
<div class="container-fluid">
<form id="contactForm">
<div class="row contact-wrap">
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Full Name">
 <div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-lg-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Job Description"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<div class="form-check agree-label">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
Accept <a href="https://templates.hibootstrap.com/Topeople/default/terms-condition.php">Terms & Conditions</a> And <a href="privacy-policy.php">Privacy Policy.</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
</div>
<div class="col-md-12 col-lg-12">
<div class="text-center">
<button type="submit" class="btn contact-btn">Submit</button>
</div>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>


<div class="map-area pb-100">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1587549815840!5m2!1sen!2sbd"></iframe>
</div>


<?php
        foot();
        scripts();
  ?>
</body>
</html>