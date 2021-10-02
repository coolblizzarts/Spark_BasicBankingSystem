<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Youth Empowerment Bank</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<!--Styling the background video and image-->
<style>
  #videoDiv {
    width: 100%;
    max-width: 1004px;
    margin: auto;
    display: block;
    position: relative;
  }

  /* This has been changed */
  #video {
    width: 1004px;
    height: 550px
  }

  /* This has been changed */
  #videoMessage {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
  }
</style>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <span class="mai-call text-primary"></span> +91 3363991821
              <span class="divider">|</span>
              <span class="mai-mail text-primary"></span> YEbank@gmail.com
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href=""><span class="mai-logo-facebook-f"></span></a>
              <a href=""><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">YE </span>(Youth Empowerment) Bank</a>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transactions.php">Transaction History </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer.php">View all Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/backBackground2.jpg);">
    <div id="videoDiv">
      <video id="video" preload="" autoplay="" muted="" playsinline="" loop="">
        <source src="../assets/img/bankVideo.mp4" type="video/mp4">
      </video>
    </div>
    <!--class="hero-section"-->

    <div id="videoMessage" class="styling">
      <div class="container text-center wow zoomIn">
        <h1 class="display-4">Welcome to YE Bank!</h1>
        <a href="about.php" class="btn btn-primary">About Us</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-cash-outline"></span>
              </div class="btn_div">
              <a class="nav-link" href="transactions.php">
                <p><span>Transaction</span> History</p>
              </a>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-people-outline"></span>
              </div class="btn_div">
              <a class="nav-link" href="customer.php">
                <p><span>View</span> all Customers</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- .page-section -->
    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Youth Empowerment Bank</h1>
            <p class="text-grey mb-4">Youth Empowerment (YE) Bank is a banking and financial services business based in Mumbai, Maharashtra, India. It provides financial services to big and mid-sized corporations, as well as SMEs and retail firms.
              <br>The promoters and the promoter group control 30.81 percent of the shares as of June 30, 2016. (United India Insurance Company Limited, Oriental Insurance Company Limited, National Insurance Company Limited, New India Assurance Company Ltd, GIC, LIC and UTI).
              <br> Mutual funds, FIIs, banks, insurance companies, corporate entities, and individual investors control the remaining 69.19 percent of the stock.
            </p>
            <a href="about.php" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="1900ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/namaste-removebg-preview.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/piggybank.jpg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using the YE Application</h1>
          <h4 class="font-weight-normal mb-3">This App is under development</h4>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="about.php">About Us</a></li>
            <li><a href="about.php">Branches</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 PayalC. All right reserved</p>
    </div>
  </footer>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>