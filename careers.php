<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- <meta name="keywords" content="Bootstrap 5, Hospital, Doctor, Medical, Multipurpose, Health, RTL" />
<meta name="description" content="Bootstrap 5 HTML5 Template" />
<meta name="author" content="www.themeht.com" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Title -->
<title>GroveTech</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/newlogo.png" />

<!-- inject css start -->

<!--== bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->

<!--== animate -->
<!-- <link href="css/animate.css" rel="stylesheet" type="text/css" /> -->

<!--== fontawesome -->
<link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />

<!--== themify-icons -->
<link href="css/themify-icons.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl-carousel -->
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== datepicker -->
<link href="css/date-picker/date-picker.css" rel="stylesheet" type="text/css" />

<!--== spacing -->
<link href="css/spacing.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== default-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!--== color-customizer -->
<link href="#" data-style="styles" rel="stylesheet">
<!-- <link href="css/color-customize/color-customizer.css" rel="stylesheet" type="text/css" /> -->

<!-- inject css end -->
<style>
  .hidecontent {
      display: none;
  }
  
  #myaccordion label {
    box-shadow:0 0 20px #d4d4d4;
    display: block;    
    padding: 8px 22px;
    margin: 20px 0px 1px 0px;
    cursor: pointer;
    background: #ff6501;
    color: #FFF;
    transition: ease .5s;
  }
  #myaccordion label:hover {
    background: #ff6501;
  }
  .content {
    box-shadow:0 0 20px #d4d4d4;
    background: #ffff;
    padding: 50px 25px;
    border: 1px solid #d4d4d4;
    margin: -1 0 0 0;
  }
  #myaccordion input:checked + label + .content {
    display: block;
  
    -moz-animation: fadeIn 0.5s ease-out;
    -o-animation: fadeIn 0.5s ease-out;
    animation: fadeIn 0.5s ease-out;
  }


  /* @-webkit-keyframes fadeIn {
    0% {
      display: none;
      opacity: 0;
    }
    1% {
      display: block;
      opacity: 0;
    }
    100% {
      display: block;
      opacity: 1;
    } */

  </style>
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">



  <div id="ht-preloader">
    <div class="loader clear-loader"><img src="images/a thousand times enough.gif" alt=""></div>
  </div>
  



<!--header start-->

<header id="site-header" class="header" >
  <div class="top-bar d-md-block d-none bg-[#fdf8f4]">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-12">
          <div class="topbar-link">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="mailto:hr@grovetech.in"><i class="flaticon-email"></i>hr@grovetech.in</a>
              </li>
              <li class="list-inline-item">
                <a href="tel:+918980803350"> <i class="flaticon-phone-call"></i>+91-8980803350</a>
              </li>
              <li class="list-inline-item">
                <a href=""> <i class="flaticon-alarm-clock"></i>Mon-Fri 8am to 7pm</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 text-end d-lg-block d-none">
          <div class="social-icons social-hover top-social-list">
            <ul class="list-inline">
              
              <li><a href="https://www.instagram.com/grovetechsolutions6/" target="_blank"><i class="fab fa-instagram"></i></a>
              </li>
              <li><a href="https://join.skype.com/invite/olln3xDabxiE" target="_blank"><i class="fab fa-skype"></i></a>
              </li>
              <li><a href="https://www.linkedin.com/company/grovetech-solution/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  $url = $_SERVER['REQUEST_URI'];  
  $pos = basename($url);
  ?>
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="<?php echo $_SERVER['HTTP_HOST'].'/../' ?>">
              <img id="logo-img" class="img-fluid" src="images/newlogo.png" alt=""><span class="p-2"><i>GroveTech</i></span><div style="font-family: Brush Script MT, Brush Script Std, cursive; color:#4ab242; margin-left: 100px; margin-top: -30px; ">Solutions</div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <!-- Left nav -->
              <ul class="nav navbar-nav mx-auto">
                <li class="nav-item dropdown"> <a class="<?php if ($pos=="GroveTech") {echo "active nav-link"; } else  {echo "nav-link";}?>" href="<?php echo $_SERVER['HTTP_HOST'].'/../' ?>" >Home</a>
                  
                </li>
                <li class="nav-item dropdown"> <a class="<?php if ($pos=="company.php") {echo "active nav-link"; } else  {echo "nav-link";}?>" href="<?php echo $_SERVER['HTTP_HOST'].'/../company.php' ?>" >Company</a>
                  
                </li>
             
          
                  <li class="nav-item dropdown"> <a class="<?php if ($pos=="web.php" || $pos=="mobile.php" || $pos=="cloud.php" || $pos=="ecom.php" || $pos=="erpandcrm.php") {echo "active nav-link dropdown-toggle"; } else  {echo "nav-link dropdown-toggle";}?>" href="<?php echo $_SERVER['HTTP_HOST'].'/../services.php' ?>" data-bs-toggle="dropdown">Our Services</a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo $_SERVER['HTTP_HOST'].'/../web.php' ?>">Web Development</a>
                      </li>
                      <li><a href="<?php echo $_SERVER['HTTP_HOST'].'/../mobile.php' ?>">Mobile Development</a>
                      </li>
                      <li><a href="<?php echo $_SERVER['HTTP_HOST'].'/../cloud.php' ?>">Cloud Solutions</a>
                      </li>
                      <li><a href="<?php echo $_SERVER['HTTP_HOST'].'/../ecom.php' ?>">E-Commerce Solutions</a>
                      </li>
                      <li><a href="<?php echo $_SERVER['HTTP_HOST'].'/../erpandcrm.php' ?>">ERP & CRM</a>
                      </li>
                    
                    
                    </ul>
                  </li>
              
                
                <li class="nav-item dropdown"> <a class="<?php if ($pos=="careers.php") {echo "active nav-link"; } else  {echo "nav-link";}?>" href="<?php echo $_SERVER['HTTP_HOST'].'/../careers.php' ?>" >Careers</a>
                  
                </li>
                <li class="nav-item dropdown"> <a class="<?php if ($pos=="contactus.php") {echo "active nav-link"; } else  {echo "nav-link";}?>" href="<?php echo $_SERVER['HTTP_HOST'].'/../contactus.php' ?>" >Contact Us</a>
                  
                </li>
              </ul>
            </div>
         
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->
<!--page title start-->

<section class="page-title overflow-hidden grey-bg" style="background-color: #f3c894;">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <h1 class="title mb-0">We Are Looking For<br>Talented  <span>People</span></h1>
        </div>
        
      </div>
    </div>
  </section>
  
  <!--page title end-->
 
<!--3 step start-->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
        <div class="section-title">
          <h6>Get free consultation for your productive business</h6>
          <h2 class="title">Current <span>Openings</span></h2>
          <p class="mb-0">Stop worrying about technology problems, we are for you. Focus on your business.
            Let us handle your digital needs.
            
            Contact us Now</p>
        </div>
      </div>
    </div>
    <div id="myaccordion">
      <input type="checkbox" id="accordion1" class="hidecontent"/>
      <label for="accordion1">    <h5 class="mb-3" style="color:#FFF">Java Developer</h5></label>
      <div class="content hidecontent">
        <ul class="bullet-ul">
         <li>Proficiency in OOP-based coding patterns.<br></li>
         <li>Required experience: 2-8 years<br></li>
         <li>Proficiency in any one of server-side programming languages- Java- Node, Spring, Spring MVC, Spring Boot, Microservices<br></li>
         <li>Good understanding of build systems like,- Maven- Gradle<br></li>
         <li>Good understanding of Event-driven or Rest driven Microservice Oriented Architecture<br></li>
         <li>Good understanding of various Web Concepts like, - Authentication and authorization- Token and session-based authentication- Synchronization, Data Consistency etc.<br></li>
         <li>Sound RDBMS skills with exposure to any one of relational database<br></li>
         <li>Sound knowledge about nonfunctional side of software module development<br></li>
         <li>Good to have knowledge of basic Linux administration.<br></li>
         <li>Good to have knowledge of- Docker and- Kubernetes (only basic knowledge would be sufficient)<br></li>
         <li>Exposure to CI/CD based workflow is a plus.</p></li>
        </ul>
        <div class="col-sm-12 mt-5">
          <button class="btn btn-theme btn-radius"><span><a href="<?php echo $_SERVER['HTTP_HOST'].'/../contactus.php' ?>"  style="color: #ffff;">Contact Us</a></span>
          </button>
        </div>
      </div>
      <input type="checkbox" id="accordion2" class="hidecontent"/>
      <label for="accordion2">    <h5 class="mb-3" style="color:#FFF">React Developer</h5></label>
      <div class="content hidecontent">
          <ul class="bullet-ul">
            <li>Develop, test, and implement software programs<br></li>
            <li>Collaborate with team members and deliver effective software solutions<br></li>
            <li>Professionally maintain all software and create updates regularly<br></li>
            <li>Troubleshoot bugs and resolve other technical issues<br></li>
            <li>Skills required<br></li>
            <li>Strong command of Javascript and experience with React and React Native, Angular, NodeJS</li>
            <li>Good understanding of software lifecycle<br></li>
          <ul>
          <div class="col-sm-12 mt-5">
            <button class="btn btn-theme btn-radius"><span><a href="<?php echo $_SERVER['HTTP_HOST'].'/../contactus.php' ?>"  style="color: #ffff;">Contact Us</a></span>
            </button>
          </div>
      </div>
      <input type="checkbox" id="accordion4" class="hidecontent"/>
      <label for="accordion4">    <h5 class="mb-3" style="color:#FFF">Java FullStack Developer</h5></label>
      <div class="content hidecontent">
        <ul class="bullet-ul">
         <li>Proficiency in OOP-based coding patterns.<br></li>
         <li>Required experience: 2-8 years<br></li>
         <li>Proficiency in any one of server-side programming languages- Java- Node, Spring, Spring MVC, Spring Boot, Microservices<br></li>
         <li>Good understanding of build systems like,- Maven- Gradle<br></li>
         <li>Good understanding of Event-driven or Rest driven Microservice Oriented Architecture<br></li>
         <li>Good understanding of various Web Concepts like, - Authentication and authorization- Token and session-based authentication- Synchronization, Data Consistency etc.<br></li>
         <li>Sound RDBMS skills with exposure to any one of relational database<br></li>
         <li>Sound knowledge about nonfunctional side of software module development<br></li>
         <li>Good to have knowledge of basic Linux administration.<br></li>
         <li>Good to have knowledge of- Docker and- Kubernetes (only basic knowledge would be sufficient)<br></li>
         <li>Exposure to CI/CD based workflow is a plus.</p></li>
        </ul>
        <div class="col-sm-12 mt-5">
          <button class="btn btn-theme btn-radius"><span><a href="<?php echo $_SERVER['HTTP_HOST'].'/../contactus.php' ?>"  style="color: #ffff;">Contact Us</a></span>
          </button>
        </div>
      </div>
      <input type="checkbox" id="accordion3" class="hidecontent"/>
      <label for="accordion3">    <h5 class="mb-3" style="color:#FFF">MERN FullStack Developer</h5></label>
      <div class="content hidecontent">
        <ul class="bullet-ul">
          <li>Develop, test, and implement software programs<br></li>
          <li>Collaborate with team members and deliver effective software solutions<br></li>
          <li>Professionally maintain all software and create updates regularly<br></li>
          <li>Troubleshoot bugs and resolve other technical issues<br></li>
          <li>Skills required<br></li>
          <li>Strong command of Javascript and experience with React and React Native, Angular, NodeJS</li>
          <li>Good understanding of software lifecycle<br></li>
        <ul>
          <div class="col-sm-12 mt-5">
            <button class="btn btn-theme btn-radius"><span><a href="<?php echo $_SERVER['HTTP_HOST'].'/../contactus.php' ?>"  style="color: #ffff;">Contact Us</a></span>
            </button>
          </div>
      </div>
      </div>
      <br><br>    <br><br>  
   
<!--3 step start-->

<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
        <div class="section-title">
          <h6>Get free consultation for your productive business</h6>
          <h2 class="title">Our <span>Approach</span></h2>
          <p class="mb-0">Stop worrying about technology problems, we are for you. Focus on your business.
            Let us handle your digital needs.
            
            </p>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-lg-3 col-md-12">
        <div class="featured-step">  
        
          <div class="featured-desc">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="fa fa-lightbulb"></i>
              </div>
              <div class="featured-title text-uppercase">
              <h5 class="mb-3">Ideation</h5>
              </div>
              <div class="featured-desc">
                <p> The process of forming ideas from conception to implementation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 mt-3 mt-lg-0">
        <div class="featured-step">     
          <div class="featured-desc">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="fa fa-tools"></i>
              </div>
              <div class="featured-title text-uppercase">
              <h5 class="mb-3">DESIGN</h5>
              </div>
              <div class="featured-desc">
                <p> The process of converting our ideas into a proper design.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 mt-3 mt-lg-0">
        <div class="featured-step">  
          <div class="featured-desc">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="fa fa-check"></i>
              </div>
              <div class="featured-title text-uppercase">
              <h5 class="mb-3">VALIDATION</h5>
              </div>
              <div class="featured-desc">
                <p>Our third step is to proving the validity or accuracy of Projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 mt-3 mt-lg-0">

       
        <div class="featured-step"> 
          
          <div class="featured-desc">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="fa fa-trophy"></i>
              </div>
              <div class="featured-title text-uppercase">
              <h5 class="mb-3">FULFILLMENT       </h5> 
              </div>
              <div class="featured-desc">
                <p>And at last we meet  requirement, condition, or need of Projects. </p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--3 step end-->


  
  </div>

</section>

<!--3 step end-->




<!--featured start-->
<!-- 
<section>
    
  <div class="container">
   
    <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
     
      </div>
   
  </div>
</section> -->

<!--featured end-->


<!--video start-->

<section class="theme-bg text-center custom-pb-3">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-12 mx-auto">
        <div class="section-title mb-0 mt-8">
          <h6>We love to build! Websites, apps, digital platforms, you name it, we’ve probably done it!</h6>
          <h2 class="mb-0 text-white font-w-4"> <span class="font-w-7">We are GroveTech Solutions</span> </h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!--video end-->


<!--service start-->

<section class="text-center pt-0 mt-n15">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel dark-service" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30" data-autoplay="true">
          <div class="item">
            <div class="service-item">
              <div class="service-images">
                <img class="img-fluid" src="images/service/2.png" alt="">
                <div class="service-icon"> <i class="fa fa-globe"></i>
                </div>
              </div>
              <h4>Website Development</h4>
              <div class="service-description">
                <p>Develop high quality web solutions that are cost-effective, enhance visibility and drive traffic to your website.
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-images">
                <img class="img-fluid" src="images/service/1.png" alt="">
                <div class="service-icon"> <i class="fa fa-mobile"></i>
                </div>
              </div>
              <h4>Mobile Development</h4>
              <div class="service-description">
                <p>Expertise in working on various platforms of mobile application development that consist of Android, iPad, iPhone, Windows mobile.
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-images">
                <img class="img-fluid" src="images/service/3.png" alt="">
                <div class="service-icon"> <i class="fa fa-cloud"></i>
                </div>
              </div>
              <h4>Cloud Solutions</h4>
              <div class="service-description">
                <p>Cloud services are services available via a remote cloud computing server rather than an on-site server. These scalable solutions.
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-images">
                <img class="img-fluid" src="images/service/4.png" alt="">
                <div class="service-icon"> <i class="fa fa-shopping-cart"></i>
                </div>
              </div>
              <h4>Ecommerce Solutions</h4>
              <div class="service-description">
                <p>Whether you are designing a new Ecommerce website or want to redesign the existing one, we can be the right choice.
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="service-images">
                <img class="img-fluid" src="images/service/5.png" alt="">
                <div class="service-icon"> <i class="fa fa-lightbulb"></i>
                </div>
              </div>
              <h4>ERP and CRM</h4>
              <div class="service-description">
                <p>Complete digital marketing solutions to build an effective online presence of your website within your target of competition.</p>
              </div>
            </div>
          </div>
      
      </div>
    </div>
  </div>
</section>

<!--service end-->

<!--page title start-->

<!-- <section class="page-title overflow-hidden grey-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <h1 class="title mb-0">Header <span>Style 1</span></h1>
      </div>
      <div class="col-lg-6 col-md-12 text-lg-end mt-3 mt-lg-0">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="#">Header</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Header 1</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section> -->

<!--page title end-->





</div>

<!--body content end--> 
<!--counter style3 start-->

<section class="theme-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="counter"> 
            <div class="counter-inner">
                <span class="count-number" data-to="45" data-speed="10000">45</span>
                <span class="plus-icon">+</span>
            </div>
          <label class="counter-label">Happy Clients</label>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="counter"> 
        <div class="counter-inner">
            <span class="count-number" data-to="100" data-speed="10000">100</span>
             <span class="plus-icon">+</span>
        </div>
          <label class="counter-label">Projects Completed</label>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="counter"> 
           <div class="counter-inner">
            <span class="count-number" data-to="12" data-speed="10000">12</span>
            <span class="plus-icon">+</span>
        </div>
          <label class="counter-label">Years of Experience</label>
        </div>
      </div>
      <!--<div class="col-lg-3 col-md-3 col-sm-6">-->
      <!--  <div class="counter"> <span class="count-number" data-to="10" data-speed="10000">10</span>-->
      <!--    <label>Countries Served</label>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
  </div>
</section>

<!--counter style3 end-->
<!--footer start-->


<?php  include 'footer.php';?>
</html>