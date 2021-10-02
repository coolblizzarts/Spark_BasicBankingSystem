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
              <a href="https://www.facebook.com/thesparksfoundation.info"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://www.instagram.com/pay_jee1/"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

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
            <li class="nav-item">
              <a class="nav-link" href="transactions.php">Transaction History</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">View all Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/backBackground2.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">View all Customers</li>
          </ol>
        </nav>
      </div> <!-- .container -->

      <?php
      include 'config.php';
      $sql = "SELECT * FROM customerdetails";
      $result = mysqli_query($conn, $sql);
      ?>
      <div class="container" style="position:absolute; top:402px; background-color:#6b760bde;">
        <h2 class="text-center pt-4" style="color : white;">All Customers</h2>
        <br>
        <div class="row">
          <div class="col">
            <div class="table-responsive-sm">
              <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                <thead style="color : white;">
                  <tr>
                    <th scope="col" class="text-center py-2">Account no.</th>
                    <th scope="col" class="text-center py-2">Account holder name</th>
                    <th scope="col" class="text-center py-2">E-Mail</th>
                    <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($rows = mysqli_fetch_assoc($result)) {
                  ?>
                    <tr style="color : white;">
                      <td class="py-2"><?php echo $rows['id'] ?></td>
                      <td class="py-2"><?php echo $rows['name'] ?></td>
                      <td class="py-2"><?php echo $rows['email'] ?></td>
                      <td class="py-2"><?php echo $rows['balance'] ?></td>
                      <td><a href="selectedCustomer.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color : #A569BD; color : #FFFFFF">Transfer money</button></a></td>
                    </tr>
                  <?php
                  }
                  ?>
                  <!--php code to get details of customer-->

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">

    <hr>

    <p id="copyright">Copyright &copy; 2020 PayalC. All right reserved</p>
  </div>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>
</body>

</html>