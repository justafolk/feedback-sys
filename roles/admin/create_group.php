<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'confirm.php';
include '../../imports/config.php';
/*
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
} */
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Create student group</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<style>
		group {
			display: flex;
		}

		input[type=checkbox] {
			opacity: 0;
			width: 100%;
			height: 0px;
			background-color: green;
			position: relative;
			z-index: 1;
		}

		.input-container {
			width: 75px;
			height: 42px;
		}

		.input-container label {
			position: absolute;
			top: 0;
			left: 0;
			font-family: arial;
			color: #737373;
			width: 76px;
			line-height: 42px;
			text-align: center;
			position: relative;
		}

		input:checked+label {
			background-color: green;
			top: 0;
			left: 0;
			z-index: 2;
			color: white;
		}

		input:not(:checked)+label {
			background-color: red;
			top: 0;
			left: 0;
			z-index: 2;
			color: white;
		}
	</style>
</head>
<style>
	.eventClass a {
		background-color: #dda919 !important;
		color: #FFF !important;
	}
</style>

<body>
	<div class="wrapper">
		<?php
		#include 'sidebar.php';
		?>
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Feedback Portal</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
						</a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="create_feedback.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Feedback</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="create_group.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Create student group</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log out</span>
						</a>
					</li>


				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Create a New Survey</strong></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<?php error_reporting(0); ?>
								<img src="<?php echo "https://ui-avatars.com/api/?name=" . $_SESSION["name"] ?>" class="avatar img-fluid rounded me-1" alt="<?php echo $_SESSION["name"] ?>" /> <span class="text-dark"><?php echo $_SESSION["name"] ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Create</strong> Student group</h1>
					<div class="row">
						<div class="card border">
							<div class="card-body">
								<form action="" method="POST">

									<div class="form-group">
										<!-- select department -->
										<div class="row">
											<div class=col-md-4>
												<label for="department">Select Department</label>
												<select class="form-control" id="department" name="deptcode" required="">
													<?php
													if ($_POST['deptcode']) {
														$sql = "SELECT * FROM departments WHERE dept_id	 = '" . $_POST['deptcode'] . "'";
														$result = mysqli_query($conn, $sql);
														$row = mysqli_fetch_assoc($result);
														echo "<option value='" . $row['dept_id'] . "' selected>" . $row['dept_name'] . "</option>";

														$_SESSION['deptcode'] = $row['dept_id'];
													} else {
														echo "<option value=''>Select Department</option>";

														$sql = "SELECT * FROM departments";
														$result = mysqli_query($conn, $sql);
														while ($row = mysqli_fetch_assoc($result)) {
															echo "<option value='" . $row["dept_id"] . "'>" . $row["dept_name"] . "</option>";
														}
													}
													?>
												</select>
											</div>
											<!-- select semester -->
											<div class=col-md-4>
												<label for="semester">Select Year</label>
												<select class="form-control" id="year" name="year" required="">
													<?php if ($_POST['year']) {
														echo "<option value='" . $_POST['year'] . "'>" . $_POST['year'] . "</option>";
														$_SESSION['year'] = $_POST['year'];
													} else {
														echo "<option value=''>Select year</option>";
													} ?>
													<option value="1">1st year</option>
													<option value="2">2nd year</option>
													<option value="3">3rd year</option>

												</select>
											</div>

											<div class=col-md-4>
												<label for="semester">Select Subject</label>
												<select class="form-control" id="subject" name="subject" required="">
													<?php if ($_POST['subject']) {
														echo "<option value='" . $_POST['subject'] . "'>" . $_POST['subject'] . "</option>";
														$_SESSION['subject'] = $_POST['subject'];
													} else {
														echo "<option value=''>Select Subject</option>";
													} ?>
													<option> Network Administration </option>
													<option> Computer Neworks </option>
												</select>
											</div>

										</div>
										<br />

										<!--
										<label for="department">Select Department</label>
										<select class="form-control" id="department" name="department">
											<option value="">Select Department</option>
											<option value="10">Civil Engineering (Aided)</option>
											<option value="20">Mechanical Engineering (Aided)</option>
											<option value="21">Mechanical Engineering (Un-Aided)</option>
											<option value="30">Electrical Engineering</option>
											<option value="40">Computer Engineering</option>
											<option value="50">Electronics And Telecommuncation (Aided)</option>
											<option value="51">Electronics And Telecommuncation (Un-Aided)</option>
										</select> -->
									</div>


									<div class="form-group">
										<div class="row">

											<div class=col-md-4>
												<label for="name">Enter roll number range</label>
												<?php if ($_POST['rollrange']) {
													echo "<input type='text' class='form-control' id='rollrange' name='rollrange' value='" . $_POST['rollrange'] . "'>";
												} else {
													echo "<input type='text' class='form-control' id='rollrange' name='rollrange' placeholder='Enter roll number range'>";
												} ?>
											</div>

											<div class=col-md-4>
												<label for="name">Additional Roll numbers (Range)</label>
												<?php if ($_POST['addrollrange']) {
													echo "<input type='text' class='form-control' id='addrollrange' name='addrollrange' value='" . $_POST['addrollrange'] . "'>";
												} else {
													echo "<input type='text' class='form-control' id='addrollrange' name='addrollrange' placeholder='Enter additional roll number range'>";
												} ?>
											</div>
											<div class=col-md-4>
												<label for="name">Additional Roll numbers (Units)</label>
												<input type="text" class="form-control" id="name" name="addrollunit" placeholder="split with ','">
											</div>
										</div>

										<br />
										<br />

										<center><button type="submit" class="btn btn-primary" name="checkroll">Summarise range</submit>
										</center>
									</div>
							</div>




							<div class="form-group">


								<h3><label for="exampleInputPassword1"><b>Final student survey group </b></label></h3>
								<div class="form-group atrangi">
									<?php

									if (isset($_POST['checkroll'])) {
										$deptcode = $_POST['deptcode'];
										$semester = $_POST['year'];
										$subject = $_POST['subject'];
										$rollrange = $_POST['rollrange'];
										$rollrange = explode('-', $rollrange);

										if ($additionalroll = $_POST['addrollrange']) {
											$additionalroll = explode('-', $additionalroll);
										} else {
											$additionalroll = "-";
										}

										$additionalstart = $additionalroll[0];
										$additionalend = $additionalroll[1];
										$additionalyear = $additionalstart[0] . $additionalstart[1];

										$addstart = explode($deptcode, $additionalstart);
										$addstart = $addstart[1];

										$addend = explode($deptcode, $additionalend);
										$addend = $addend[1];


										$start = $rollrange[0];
										$end = $rollrange[1];
										$year = $start[0] . $start[1];

										$rollstart = explode($deptcode, $start);
										$rollstart = $rollstart[1];

										$rollend = explode($deptcode, $end);
										$rollend = $rollend[1];
									}
									$count = $rollstart;

									$active_roll = array();

									//current year
									for ($i = $rollstart; $i <= $rollend; $i++) {
										$i = sprintf("%02d", $i);
										$active_roll[] = $year . $deptcode . $i;
									}
									//new year
									for ($i = $addstart; $i <= $addend; $i++) {
										$i = sprintf("%02d", $i);
										$active_roll[] = $additionalyear . $deptcode . $i;
									}

									$allrolls = count($active_roll);

									echo "<p>Total number of students: " . $allrolls . "</p>";
									$count = 1;
									while ($count <= $allrolls) {
										echo "<group>";
										for ($i = 1; $i < 14; $i++) {

											$row["enrollid"] = $active_roll[$count - 1];


											$count += 1;
											if ($row['enrollid'] == 0) {
												continue;
											}
											if ($count == $allrolls + 2) {
												break;
											}
											error_reporting(0);

											echo  "<div class=\"input-container\"/>
                                                            <input checked type=\"checkbox\" value=\'1\' name=\"{$row['enrollid']}\" id=\"{$row['enrollid']}\">
                                                            <label for=\"{$row['enrollid']}\">{$row['enrollid']}</label>
                                                            </div>";
											echo  "<div class=\"input-container\"/>
                                                            <input  type=\"hidden\" name=\"{$row['enrollid']}\" id=\"{$row['enrollid']}no\" value=\'0\'>
                                                            <label for=\"{$row['enrollid']}\">{$row['enrollid']}</label>
                                                            </div>";
										}
										echo "</group>";
									}

									?>
	
								</div>
								<br />
								<br />
								<center><button tpye="submit" class="btn btn-primary" name="finalroll">Finalise range</submit>
								</center>
							</div>
							<br />
							</form>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>



</body>


<?php

if (isset($_POST['finalroll'])) {
	var_dump($_POST);
}


// 	$year = $_SESSION['year'];
// 	$deptcode = $_SESSION['deptcode'];
// 	$subject = $_SESSION['subject'];
// 	$active_roll = $_SESSION['activeRolls'];
// 	$active_roll = json_encode($active_roll);

// 	$inactiveroll = NULL;


// 	$sqltest = "SELECT * FROM `groups` WHERE `deptcode` = '$deptcode' AND `year` = '$year' AND `subject` = '$subject'";
// 	$resulttest = mysqli_query($conn, $sqltest);
// 	if (mysqli_num_rows($resulttest) > 0) {
// 		echo "<script>alert('Group already exists');</script>";
// 		echo "<script>window.location.href='create_group.php';</script>";
// 	} else {
// 		$sql = "INSERT INTO `groups` (`year`, `subject` , `deptcode`, `activeRoll`, `inactiveRoll`) VALUES ('$year','$subject', '$deptcode', '$active_roll', '$inactiveroll')";
// 		$result = mysqli_query($conn, $sql);
// 		if ($result) {
// 			echo "<script>alert('Group created successfully');</script>";
// 			echo "<script>window.location.href='create_group.php';</script>";
// 		} else {
// 			echo "<script>alert('Group creation failed');</script>";
// 			echo "<script>window.location.href='create_group.php';</script>";
// 		}
// 	}
// }

?>

</html>