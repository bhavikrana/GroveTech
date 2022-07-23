<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<!--page title start-->

<section class="page-title overflow-hidden grey-bg" style="background-color: #f3c894;">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <h1 class="title mb-0">Contact<span> Us</span></h1>
        </div>
        
      </div>
    </div>
  </section>
  
  <!--page title end-->
<!--blog start-->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
        <div class="section-title">
          <h6>Get free consultation for your productive business</h6>
          <h2 class="title">Contact Us <span>Now</span></h2>
          <p class="mb-0">Stop worrying about technology problems, we are for you. Focus on your business.
            Let us handle your digital needs.
            
            Contact us Now</p>
        </div>
      </div>
    </div>
  
  </div>
</section>

<!--blog end-->
<!--appointment start-->

<section class="dark-bg position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 h-100 image-column image-column-h bg-pos-l" data-bg-img="images/bg/04.png"></div>
      <div class="col-lg-6 col-md-12 ms-auto ps-lg-5 mt-5 mt-lg-0">
        <div class="section-title mb-4">
          <h6>It’s always good to talk...</h6>
          <h2 class="title">Get<span> In Touch</span></h2>
        </div>
        <p class="line-h-3 text-white">Stop worrying about technology problems, we are for you. Focus on your business.
          Let us handle your digital needs.</p>
        <form id="queto-form" class="row" method="post" action="#">
          <div class="messages"></div>
          <div class="form-group col-sm-6">
           <input id="fname" type="text" name="fname" class="form-control" placeholder="First Name" required="required" data-error="First Name is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-6">
            <input id="lname" type="text" name="lname" class="form-control" placeholder="Last Name" required="required" data-error="Last Name is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-6">
            <input id="email" type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Valid email is required.">
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-6">
            <input id="phone" type="text" name="phone" class="form-control" placeholder="Phone Number" required="required">
          </div>
          <div class="form-group col-sm-12">
            <input type="file" class="form-control" name="attachment" accept=
"application/msword,  application/pdf, image/*">
          </div>
          
          <div class="form-group col-sm-12">
           <textarea name="message" class="form-control" rows="2" placeholder="Describe yourself here..."></textarea>
          </div>
          <div class="col-sm-12 mt-5">
            <button type="submit" name="submit" class="btn btn-theme btn-radius" id="contact-submit" data-submit="...Sending">Contact Us</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!--appointment end-->
<?php  include 'footer.php';?>

</html>