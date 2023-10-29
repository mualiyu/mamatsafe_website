<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MAMAT SAFE | Loan App</title>
  <!-- Plugins CSS -->
  <link href="css/plugins.css" rel="stylesheet">
  <link href="css/jquery-ui.css" rel="stylesheet">
  

  <!-- Custom CSS -->  
  <link href="css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- Pre Loader -->
  <div id="dvLoading"></div>
  <!-- Navigation Start -->
  <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
    <div class="navbar-container container">

      <div class="navbar-brand">
        <a class="navbar-brand-logo" href="#top">
          <img src="images/logo.svg" style="width: 200px; height:59px;" alt="logo">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav menu-navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#top"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#calculator"><i class="fas fa-calculator"></i> Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"><i class="fas ">₦</i> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"><i class="fas fa-address-book"></i> Contact</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#blog"><i class="far fa-newspaper"></i> Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews"><i class="far fa-comment-dots"></i> Reviews</a>
          </li> -->
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link learn-more-btn" href="http://portal.mamatsafe.com/login">Apply/Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation End -->

  <!-- Banner Start -->
  <div id="top" class="header">
    <div class="container header-container">
      <div class="d-none d-lg-block col-lg-6  header-img-section">
        <img src="images/banner.svg" class="img-fluid" alt="banner">
      </div>
      <div class="col-lg-5 offset-lg-1 col-sm-12 header-title-section">
        <p class="header-subtitle">Loan EMI Calculator</p>
        <h1 class="header-title"> Affordable Equity Investment for Your Business!</h1>
        <p class="header-title-text">Our mission is to support your sustainable growth by providing accessible
          capital options.</p>
        <div class="learn-more-btn-section">
          <a class="nav-link learn-more-btn btn-invert" href="#services">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <!-- calculator Start -->
  <section id="calculator" class="calculator-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Loan Calculator</h2>
          <!-- <p class="section-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor
            egestas libero at, fermentum posuere quam. Vestibulum dapibus vulputate sapien. Donec pulvinar libero at ex
            tristique commodo.</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <form class="form-calculator">
            <div class="form-group">
              <label for="amount">Loan Amount:</label>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <div class="input-group-text">₦</div>
                </div>
                <input type="text" class="form-control" id="amount" value="100000">
              </div>
              <div id="slider" class="emi-input"></div>
            </div>

            <div class="form-group">
              <label for="amount">Interest Rate :</label>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <div class="input-group-text">%</div>
                </div>
                <input type="text" class="form-control" id="interest" value="10.5">
              </div>
              <div id="slider-interest" class="emi-input"></div>
            </div>

            <div class="form-group">
              <label for="amount">Loan Tenure :</label>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <div class="input-group-text">Months</div>
                </div>
                <input type="text" class="form-control" id="tenure" value="36">
              </div>
              <div id="slider-tenure" class="emi-input"></div>
            </div>

          </form>
        </div>
        <div class="col-lg-4">
          <div class="emi-details">
            <div class="emi-details-head">
              <h3>Your EMI Details</h3>
            </div>
            <div class="emi-details-box">
              <p>Loan EMI</p>
              <h5>₦5247</h5>
            </div>
            <div class="emi-details-box">
              <p>Total Interest Payable</p>
              <h5>₦52470</h5>
            </div>
            <div class="emi-details-box no-bottom-border">
              <p>Total Payment</p>
              <h5>₦152470</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pie-chart">
            <div id="donutMorris"></div>
            <span class="chart-principal"> Principal Amount</span>
            <span class="chart-interest"> Interest Amount</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- calculator End -->

  <!-- services Start -->
  <section id="services" class="services-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Our Services</h2>
          <p class="section-para" >New clients have to start with short term, nano and micro equity packages only. they can uppgrade their packages upon renewal.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/001-credit.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">SHORT TERM LOAN</h3>
              <!-- <p class="service-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor
                egestas libero at, fermentum posuere quam.</p> -->
              <ul class="service-para pt-2">
                <li>Equity from N50K to N100M</li>
                <li>0% interest</li>
                <li>13% service charge</li>
                <li>Flexible 1 year repayment</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/003-profits.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">NANO LOAN</h3>
              <ul class="service-para pt-2">
                <li>Equity from N100K to N500K</li>
                <li>0% interest</li>
                <li>21% service charge</li>
                <li>Flexible 1 year repayment</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/003-profits.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">MICRO LOAN</h3>
              <ul class="service-para pt-2">
                <li>Equity from N300K to N3M</li>
                <li>0% interest</li>
                <li>27% service charge</li>
                <li>Flexible 1 year repayment</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/004-ingots.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">SMALL LOAN</h3>
              <ul class="service-para pt-2">
                <li>Equity from N1M to N20M</li>
                <li>0% interest</li>
                <li>32% service charge</li>
                <li>Flexible 1 year repayment</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/004-ingots.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">MEDIUM LOAN</h3>
              <ul class="service-para pt-2">
                <li>Equity from N10M to N50M</li>
                <li>0% interest</li>
                <li>50% service charge</li>
                <li>Flexible 2 year repayment</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/005-mortarboard.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">LARGE LOAN</h3>
              <ul class="service-para pt-2">
                <li>Equity from N30M to N100M</li>
                <li>0% interest</li>
                <li>95% service charge</li>
                <li>Flexible 3 year repayment</li>
              </ul>
            </div>

          </div>
        </div>
        <!-- <div class="col-lg-4 col-sm-6">
          <div class="service-box">
            <div class="service-icon">
              <img src="images/services/006-credit-card.png" alt="icon">
            </div>
            <div class="service-text">
              <h3 class="service-heading">Credit Card Issue LOAN</h3>
              <p class="service-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor
                egestas libero at, fermentum posuere quam.</p>
            </div>

          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- services End -->

  <!-- Application Process Section -->
  <section id="blog" class="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading"> Benefits of Investing with Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-4">
          <div class="blog-box">
            <div class="blog-text" style="text-align: center;">
              <h3 class="blog-heading"> Instant renewal</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="blog-box" style="border-radius: 10%;">
            <div class="blog-text" style="text-align: center;">
              <h3 class="blog-heading"> Easy application</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="blog-box">
            <div class="blog-text" style="text-align: center;">
              <h3 class="blog-heading"> Free sign-up</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="blog-box">
            <div class="blog-text" style="text-align: center;">
              <h3 class="blog-heading"> Increased investment amounts</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Application Process Section -->

  <!-- Application Process Section -->
  <section id="blog" class="blog-section app-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Application Process</h2>
          <p class="section-para">Applying is Easy.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-4">
          <div class="blog-box">
            <div class="blog-text app-text" style="text-align: center;">
              <div class="service-icon mb-3" style="background-color: #070707; color: white;">
                <!-- <img src="images/services/003-profits.png" alt="icon"> -->
                <strong>1.</strong>
              </div>
              <h3 class="blog-heading"> Contact marketing team</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="blog-box" style="border-radius: 10%;">
            <div class="blog-text app-text" style="text-align: center;">
              <div class="service-icon mb-3" style="background-color: #070707; color: white;">
                <!-- <img src="images/services/003-profits.png" alt="icon"> -->
                <strong>2.</strong>
              </div>
              <h3 class="blog-heading"> Provide details to marketer</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="blog-box">
            <div class="blog-text app-text" style="text-align: center;">
              <div class="service-icon mb-3" style="background-color: #070707; color: white;">
                <!-- <img src="images/services/003-profits.png" alt="icon"> -->
                <strong>3.</strong>
              </div>
              <h3 class="blog-heading"> Confirm with appraisal officer</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="blog-box">
            <div class="blog-text app-text" style="text-align: center;">
              <div class="service-icon mb-3" style="background-color: #070707; color: white;">
                <!-- <img src="images/services/003-profits.png" alt="icon"> -->
                <strong>4.</strong>
              </div>
              <h3 class="blog-heading"> Verification at business</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="blog-box">
            <div class="blog-text app-text" style="text-align: center;">
              <div class="service-icon mb-3" style="background-color: #070707; color: white;">
                <!-- <img src="images/services/003-profits.png" alt="icon"> -->
                <strong>5.</strong>
              </div>
              <h3 class="blog-heading"> Submit required documents</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Application Process Section -->


<!-- contact Start -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-heading">Get In Touch</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. libero at, fermentum posuere quam.</p> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block">
          <img src="images/contact.svg" class="img-fluid" alt="blog">
        </div>
        <div class="col-lg-6">

          <form class="contact-form">
            <div class="contact-form-head"></div>
            <div class="contact-form-inner">
              <p class="mt-1" style="font-size: 20px;"><i class="fas fa-map-marker-alt"></i> Street 1, Test Address<br>
                <br>
                08167236629<br>
                <br>
                support@mamatsafe.com</p>
                <div class="social-icons">
                  <a href="#"><i class="fab fa-facebook aa"></i></a>
                  <a href="#"><i class="fab fa-twitter aa"></i></a>
                  <a href="#"><i class="fab fa-linkedin aa"></i></a>
                  <a href="#"><i class="fab fa-instagram aa"></i></a>
                </div>
            </div>
          </form>

          <!-- <form class="contact-form">
            <div class="contact-form-head">
              <h3>Send Message</h3>
            </div>
            <div class="contact-form-inner">
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Write Your Message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form> -->
        </div>
      </div>
    </div>
  </section>
<!-- contact End -->

<!-- footer Start -->
<section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <img src="images/logo.svg" style="width: 200px; height:59px;" alt="logo" />
            <p class="mt-4">Our mission is to support your sustainable growth by providing accessible capital options. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h5>Quick Links</h5>
            <ul>
              <li><a href="#"><i class="fas fa-angle-right"></i> Services</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i> Calculator</a></li>
              <li><a href="#"><i class="fas fa-angle-right"></i> Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h5>Address</h5>
            <p class="mt-3"><i class="fas fa-map-marker-alt"></i> Street 1, Test Address<br>
              HR. Manager<br>
              08167236629<br>
              support@mamatsafe.com</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h5>Social Connect</h5>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-copyright">
            © 2023 <a style="color: white;" href="https://ajisaq.com/">ajisaq.com</a> All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
</section>
<!-- footer End -->

<!-- jQuery Min JS -->
<script src="js/jquery-min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>

<!-- Popper Min JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap Min JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- Owl Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Smooth scroll JS -->
<script src="js/smoothscroll.js"></script>

<!-- morris charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/custom-morris.js"></script>

<!-- Custom JS -->
<script src="js/custom.js"></script>
</body>

</html>
