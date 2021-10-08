<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Youth Empowerment Bank</title>

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
</head>

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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="transactions.php">Transaction History</a>
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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/backBackground2.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaction History</li>
          </ol>
        </nav>
      </div> <!-- .container -->
    </div>
  </div>

  <div class="container">
    <h2 class="text-center pt-4" style="color : black;">Transfer History</h2>

    <br>
    <div class="table-responsive-sm">
      <table class="table table-hover table-dark table-striped table-condensed table-bordered">
        <thead style="color : white;">
          <tr>
            <th class="text-center">Transaction ID</th>
            <th class="text-center">Sender</th>
            <th class="text-center">Receiver</th>
            <th class="text-center">Amount Transfered</th>
            <th class="text-center">Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <?php

          include 'config.php';

          $sql = "select * from transaction";

          $query = mysqli_query($conn, $sql);

          while ($rows = mysqli_fetch_assoc($query)) {
          ?>

            <tr style="color : white;">
              <td class="py-2"><?php echo $rows['transaction_ID']; ?></td>
              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['amount']; ?> </td>
              <td class="py-2"><?php echo $rows['date_time']; ?> </td>

            <?php
          }

            ?>
        </tbody>
      </table>

    </div>
  </div>

  <div class="page-section banner-home bg-image" style="background-image: url(assets/img/piggybank.jpg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using the YE Application</h1>
          <h4 class="font-weight-normal mb-3">This App is under development</h4>
          <a href="#"><img src="assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="assets/img/app_store.svg" alt=""></a>
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

  <script src="assets/js/jquery-3.5.1.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="assets/vendor/wow/wow.min.js"></script>

  <script src="assets/js/theme.js"></script>

</body>

</html>