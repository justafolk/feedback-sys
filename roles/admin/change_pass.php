<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>CWIT-Feedback Portol</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

</head>

<?php

session_start();
include "../../imports/config.php";
//include 'imports/config.php';
error_reporting(0);

if ($_SESSION['role'] != 'Admin') {
	echo "<script>alert('Invalid Session, please login again');</script>";
	echo "<script>window.location.href='index.php';</script>";
}
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "feedback";

$conn = mysqli_connect($server, $user, $passwd, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>


<style>
	.eventClass a {
		background-color: #dda919 !important;
		color: #FFF !important;
	}
</style>

<body>
	<div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">CWIT</span>
                </a>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-item">
                    <a class="sidebar-link" href="dep_feedback.php">
                        <i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle">Feedbacks</span>
                    </a>
                    </li> -->
                    <li class="sidebar-item">
                    <a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span>Feedbacks</span>
                    </a>
                    <ul id="charts-nav" class="collapse" style="list-style-type:none;">
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="civil_department.php">
                            <span class="align-middle">Civil Dept. </span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="mech_department_a.php">
                            <span class="align-middle">Mechanical Dept. (Aided)</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="mech_department_u.php">
                            <span class="align-middle">Mechanical Dept. (Un-Aided)</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="elec_department.php">
                            <span class="align-middle">Electrical Dept.</span>
                        </a>
                        </li>
                        <li>
                        <a class="sidebar-link" href="dep_feedback2.php">
                            <span class="align-middle">Computer Dept.</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="etc_department_a.php">
                            <span class="align-middle">E&TC Dept. (Aided)</span>
                        </a>
                        </li>
                        <li>
                        <a class="sidebar-link" href="etc_department_u.php">
                            <span class="align-middle">E&TC Dept. (Un-Aided)</span>
                        </a>
                        </li>
                    </ul>
                    </li>

                    <li class="sidebar-item active">
                    <a class="sidebar-link" href="change_pass.php">
                        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Change Password</span>
                    </a>
                    </li>

                    <li class="sidebar-header">
                    Forms
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="create_form.php">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Form</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                    <a class="sidebar-link" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span>View Form</span>
                    </a>
                    <ul id="charts-nav1" class="collapse" style="list-style-type:none;">
                        <li>
                        <a class="sidebar-link" href="view_form.php">
                            <span class="align-middle">Computer Dept.</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="view_form.php">
                            <span class="align-middle">Civil Dept. </span>
                        </a>
                        </li>
                        <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="mech_department_a.php">
                            <span class="align-middle">Mechanical Dept. (Aided)</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="mech_department_u.php">
                            <span class="align-middle">Mechanical Dept. (Un-Aided)</span>
                        </a>
                        </li> -->
                        <li class="sidebar-item">
                        <a class="sidebar-link" href="view_form.php ">
                            <span class="align-middle">Electrical Dept.</span>
                        </a>
                        </li>
                        <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="etc_department_a.php">
                            <span class="align-middle">E&TC Dept. (Aided)</span>
                        </a>
                        </li>
                        <li>
                        <a class="sidebar-link" href="etc_department_u.php">
                            <span class="align-middle">E&TC Dept. (Un-Aided)</span>
                        </a>
                        </li> -->
                    </ul>
                    </li>

                    <li class="sidebar-header">
                        Profiles
                    </li>

                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-profile.php">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">Account</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="form.php">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                        </a>
                    </li> -->

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="profiles.php">
                        <i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">All Profiles</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="add_profile.php">
                        <i class="align-middle me-2" data-feather="user-plus"></i> <span class="align-middle">Add User</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                    <a class="sidebar-link" href="remove_profile.php">
                        <i class="align-middle me-2" data-feather="user-x"></i><span class="align-middle">Remove User</span>
                    </a>
                    </li>

                    <!-- <li class="sidebar-header">
                        Plugins & Addons
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                        <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Change Password</strong></h1>
				</div>
				<?php
				include 'notification.php';
				?>
			</nav>



            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Change Password</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="uname">Username/ Roll number</label>
                                            <input type="text" value="<?php echo $_POST["uname"] ?>" class="form-control" id="uname" name="uname" placeholder="Enter Username or roll number" required>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <label for="new_pass">New Password</label>
                                            <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Enter new password">
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <label for="confirm_pass">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="Confirm password">
                                        </div>
                                        <br />
                                        <button type="submit" name="changepass" class="btn btn-primary">Change Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/main.js"></script>
        <script src="js/app.js"></script>
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>

<?php

if(isset($_POST['changepass'])){

    $uname = $_POST['uname'];
    $newpass = $_POST['new_pass'];
    $confirmpass = $_POST['confirm_pass'];

    $sql = "SELECT * FROM login WHERE uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count >= 1){
        $row = mysqli_fetch_assoc($result);
            if($newpass == $confirmpass){

                $newpass = md5($newpass);
                
                $sql2 = "UPDATE login SET passwd = '$newpass' WHERE uname = '$uname'";
                $result2 = mysqli_query($conn, $sql2);
                if($result2){
                    echo "<script>alert('Password changed successfully');</script>";
                    echo "<script>window.location.href='change_pass.php';</script>";
                }else{
                    echo "<script>alert('Password not changed');</script>";
                }
            }else{
                echo "<script>alert('Password not matched');</script>";
            }
    }else{
        echo "<script>alert('Username not found');</script>";
        }

}


?>
