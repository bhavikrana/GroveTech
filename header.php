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

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

  
<div id="ht-preloader">
  <div class="loader clear-loader"><img src="images/a thousand times enough.gif" alt=""></div>
</div>
<?php 
// if($_SERVER["HTTPS"]!="on") {
//     $redirect= "https://".$_SERVER['=\'HTTP_HOST'].$_SERVER['REQUEST_URI'];
//     header("Location:$redirect");
// }
?>

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
                <a href="#"> <i class="flaticon-alarm-clock"></i>Mon-Fri 10am to 7pm</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 text-end d-lg-block d-none">
          <div class="social-icons social-hover top-social-list">
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!--header end-->