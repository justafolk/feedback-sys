<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include 'confirm.php';
//echo "<script>alert('".$_SESSION['uname']."');</script>";
include '../../imports/config.php';
$uname = $_SESSION['uname'];
$sqlconfirm = "SELECT * from `login` where `uname` = '$uname'";
$result = mysqli_query($conn, $sqlconfirm);
$row = mysqli_fetch_assoc($result);
//echo "<script>alert('".$row['flog']."');</script>";
if ($row["flog"] == 0) {
    echo "<script>alert('Password already changed, please contact admin if any issues faced.');</script>";
    echo "<script>window.location.href='index.php';</script>";
    //exit();
}

//echo "<script>alert(".$_SESSION['uname'].")</script>";

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Change Password</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/logo.png" rel="icon">
  <link href="../../assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../../assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Password Change form</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Change Password</h5>
                    <p class="text-center small">NOTE: Do not keep your roll number as password</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="">

                  <div class="col-12">
                      <label for="yourname" class="form-label">Your Name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="pername" class="form-control" id="pername" required>
                        <div class="invalid-feedback">Please enter your Name.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Roll number</label>
                      <div class="input-group has-validation">
                        <input type="text" name="uname" value=<?php echo $_SESSION['uname']; ?> class="form-control" id="uname" required readonly>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="passwd" class="form-control" id="passwd" required>
                      <div class="invalid-feedback">Please enter new your password!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="changepass" type="submit">Change password</button><p />
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Can't login? Please contact respective <strong>Administrator</strong></a></p>
                    
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php

if(isset($_POST['changepass'])){
  //session_start();
  
  include '../../imports/config.php';

  $uname = $_POST['uname'];
  $passwd = $_POST['passwd'];
  $pername = $_POST['pername'];
  $passwdx = md5($passwd);
  
  if($uname == $_SESSION['uname']){
    if(md5($uname) == $passwdx){
      echo "<script>alert('Please enter new password!, Password cannot be your own roll number!!')</script>";
    }else{
    $sql = "UPDATE `login` SET `passwd` = '$passwdx', `flog`='0', `name`= '$pername' WHERE `uname` = '$uname'";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo '<script>alert("Password changed successfully, please login")</script>';
      echo '<script>window.location.href = "../../index.php"</script>';
    }else{
      echo '<script>alert("Password not changed")</script>';
    }
  }
  }else{
    echo "<script>alert('Please enter your roll number correctly')</script>";
    //echo '<script>alert("Invalid roll number, try using your own roll number")</script>';
    //echo '<script>alert("Invalid roll number")</script>';
  }
  /*
  $sql = "UPDATE `login` SET `passwd`='$passwdx' WHERE `uname`='$uname'";
  $result = mysqli_query($conn, $sql);
  if($result){
    if($uname != $passwd){
    echo "<script>alert('Password changed successfully');</script>";
    echo "<script>window.open('index.php','_self')</script>";
    }else{
      echo "<script>alert('Password cannot be same as roll number');</script>";
    }
  }
  else{
    echo "<script>alert('Password change failed');</script>";
  }
  */
}

?>