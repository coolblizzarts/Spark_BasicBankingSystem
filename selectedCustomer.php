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
              <a class="nav-link" href="customer.php">View all Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>

    <style type="text/css">
      button {
        border: none;
        background: #d9d9d9;
      }

      button:hover {
        background-color: #777E8B;
        transform: scale(1.1);
        color: white;
      }
    </style>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(assets/img/backBackground2.jpg);">
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

      if (isset($_POST['submit'])) {
        $from = $_GET['id'];
        $to = $_POST['to'];
        $amount = $_POST['amount'];

        $sql = "SELECT * from customerdetails where id=$from";
        $query = mysqli_query($conn, $sql);
        $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

        $sql = "SELECT * from customerdetails where id=$to";
        $query = mysqli_query($conn, $sql);
        $sql2 = mysqli_fetch_array($query);



        // constraint to check input of negative value by user
        if (($amount) < 0) {
          echo '<script type="text/javascript">';
          echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
          echo '</script>';
        }



        // constraint to check insufficient balance.
        else if ($amount > $sql1['balance']) {

          echo '<script type="text/javascript">';
          echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
          echo '</script>';
        }



        // constraint to check zero values
        else if ($amount == 0) {

          echo "<script type='text/javascript'>";
          echo "alert('Oops! Zero value cannot be transferred')";
          echo "</script>";
        } else {

          // deducting amount from sender's account
          $newbalance = $sql1['balance'] - $amount;
          $sql = "UPDATE customerdetails set balance=$newbalance where id=$from";
          mysqli_query($conn, $sql);


          // adding amount to reciever's account
          $newbalance = $sql2['balance'] + $amount;
          $sql = "UPDATE customerdetails set balance=$newbalance where id=$to";
          mysqli_query($conn, $sql);

          $sender = $sql1['name'];
          $receiver = $sql2['name'];
          $transac = rand(1, 999);
          $sql = "INSERT INTO transaction(`transaction_ID`, `sender`, `receiver`, `amount`) VALUES ('$transac','$sender','$receiver','$amount')";
          $query = mysqli_query($conn, $sql);

          if ($query) {
            echo "<script> alert('Congratulations! Your Transaction was Successful');
                                     window.location='transactions.php';
                           </script>";
          }

          $newbalance = 0;
          $amount = 0;
        }
      }
      ?>
      <!--style="background-color : #00008B ;"-->
    </div>

    <body>


      <div class="container" style="position:absolute; padding-bottom: 40px; left: 60px; top:402px; background-color:#6b760bde;">
        <h2 class="text-center pt-4" style="color : white;">Money Transfer</h2>
        <?php
        include 'config.php';
        $sid = $_GET['id'];
        $sql = "SELECT * FROM  customerdetails where id=$sid";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        $rows = mysqli_fetch_assoc($result);
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
          <div>
            <table class="table table-striped table-condensed table-bordered">
              <tr style="color : white;">
                <th class="text-center">Account No.</th>
                <th class="text-center">Account Name</th>
                <th class="text-center">E-mail</th>
                <th class="text-center">Account Balance(in Rs.)</th>
              </tr>
              <tr style="color : white;">
                <td class="py-2"><?php echo $rows['id'] ?></td>
                <td class="py-2"><?php echo $rows['name'] ?></td>
                <td class="py-2"><?php echo $rows['email'] ?></td>
                <td class="py-2"><?php echo $rows['balance'] ?></td>
              </tr>
            </table>
          </div>
          <br><br><br>
          <label style="color : white;"><b>Transfer To:</b></label>
          <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose account</option>
            <?php
            include 'config.php';
            $sid = $_GET['id'];
            $sql = "SELECT * FROM customerdetails where id!=$sid";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
              echo "Error " . $sql . "<br>" . mysqli_error($conn);
            }
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
              <option class="table" value="<?php echo $rows['id']; ?>">

                <?php echo $rows['name']; ?> (Balance:
                <?php echo $rows['balance']; ?> )

              </option>
            <?php
            }
            ?>
            <div>
          </select>
          <br>
          <br>
          <label style="color : white;"><b>Amount:</b></label>
          <input type="number" class="form-control" name="amount" required>
          <br><br>
          <div class="text-center">
            <button class="btn" name="submit" type="submit" style="background-color : #A569BD; color : #FFFFFF">Transfer Money</button>
          </div>
        </form>
      </div>
  </div>

  <div class="container">

    <hr>

    <p id="copyright">Copyright &copy; 2020 PayalC. All right reserved</p>
  </div>


  <script src="assets/js/jquery-3.5.1.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="assets/vendor/wow/wow.min.js"></script>

  <script src="assets/js/theme.js"></script>
</body>

</html>