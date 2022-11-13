<!DOCTYPE html>
<html lang="en">
<?php

session_start();
//include 'imports/config.php';
include 'confirm.php';
error_reporting(0);


?>

<?php
$feedbackid = $_GET['id'];
include "../../imports/config.php";
$sql = "select `deptcode`, `semester`, `subject` from groups where `id` = '$feedbackid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$deptcode = $row['deptcode'];
$semester = $row['semester'];
$subjectcode = $row['subject'];


$sql2 = "select `dept_name` from departments where `dept_id` = '$deptcode'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$dept_name = $row2['dept_name'];

$sql3 = "select `course_name` from courses where `course_code` = '$subjectcode'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$course_name = $row3['course_name'];

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
            margin: 2px 2px 2px 2px;

            width: 75px;
            height: 42px;
        }

        .input-container label {
            position: absolute;
            margin: 10px 10px 10px 10px;

            top: 0;
            left: 0;
            color: #737373;
            width: 76px;
            line-height: 42px;
            text-align: center;
            position: relative;
        }

        input:checked+label {
            background-color: #D9F8C4;
            border: 1px solid green;

            top: 0;
            left: 0;
            z-index: 2;
            color: black;
        }

        input:not(:checked)+label {
            background-color: #F37878;
            top: 0;
            left: 0;
            z-index: 2;
            color: white;
        }

        .atrangi {
            height: 250px;
            display: block;
            overflow-x: auto;
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
		include 'sidebar.php';
		?>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Edit feedback details</strong></h1>
				</div>

				<?php
				include 'notification.php';
				?>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<h1 class="h3 mb-3"><strong>Set</strong> feedback details </h1>
						<div class="card border">
							<div class="card-body">
								<div class="form-group">
									<!-- select department -->
									<div class="row">
										<div class=col-md-4>
											<h4><strong>Department:</strong></h4>
											<?php echo $dept_name; ?>

										</div>
										<!-- select semester 
										<div class=col-md-4>
											<h4><strong>Semester:</strong></h4>
											<?php
											if ($semester == 1) {
												echo "1st Semester";
											} elseif ($semester == 2) {
												echo "2nd Semester";
											} elseif ($semester == 3) {
												echo "3rd Semester";
											} elseif ($semester == 4) {
												echo "4th Semester";
											} elseif ($semester == 5) {
												echo "5th Semester";
											} elseif ($semester == 6) {
												echo "6th Semester";
											}

											?>
										</div>-->

										<div class=col-md-4>
											<h4><strong>Course:</strong></h4>
											<?php echo $subjectcode; ?>
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

								<br />
								<form action="" method="POST">
									<div class="form-group">
										<div class="row">

											<div class=col-md-4>
												<label for="name">
													<h4><strong> Select date for the feedback </strong></h4>
												</label>
												<input type="date" class="form-control" id="name" name="date" required="" value="<?php echo $date; ?>">
											</div>

											<br />
											<br />

										</div>

										<br />
										<br />
										<br />

										<div class="form-group">

											<h3><label for="exampleInputPassword1"><b>Student survey group </b></label></h3>
											<div class="form-group atrangi">
												<?php

												$sql = "SELECT activeRoll FROM groups WHERE `id` = '$feedbackid' AND `semester` = '$semester'";
												$result = mysqli_query($conn, $sql);
												$row = mysqli_fetch_assoc($result);
												$activeRoll = $row['activeRoll'];

												$active_rolls = json_decode($activeRoll, true);
												//delete last item of array
												$allrolls = count($active_rolls);


												$count = 1;

												while ($count <= $allrolls) {
													echo "<group>";
													for ($i = 1; $i < 14; $i++) {

														$row["enrollid"] = $active_rolls[$count - 1];


														$count += 1;
														if ($row['enrollid'] == 0) {
															continue;
														}
														if ($count == $allrolls + 2) {
															break;
														}
														error_reporting(0);
														array_push($rolls, $row['enrollid']);

														echo  "<div class=\"input-container\"/>
                                                            <input checked type=\"checkbox\" name=\"{$row['enrollid']}\" id=\"{$row['enrollid']}\">
                                                            <label for=\"{$row['enrollid']}\">{$row['enrollid']}</label>
                                                            </div>";
													}
													echo "</group>";
												}
												?>

											</div>
											<br />
											<br />
											<center>
												<!--<button submit class="btn btn-primary" name="finalfeed">Finalise feedback</submit></button> -->

												<button type="submit" class="btn btn-primary" name="request">Finalise and Request</button>
											</center>
										</div>
									</div>

									<br />
								</form>
							</div>
						</div>
					</div>

			</main>


		</div>
	</div>

	<script src="js/app.js"></script>

	<?php

	if (isset($_POST['request'])) {

		$date = $_POST['date'];
		$feedbackid = $_GET['id'];

		$known_posts = array('date');
		$active_rolls = array();

		foreach ($_POST as $key => $value) {
			if (!in_array($key, $known_posts)) {
				array_push($active_rolls, $key);
			}
		}

		array_pop($active_rolls);
		$activeRoll = json_encode($active_rolls);
		//echo "<script>alert('$feedbackid')</script>";

		$sql = "UPDATE groups SET `activeRoll` = '$activeRoll',`fdate`= '$date', `req` = '1' WHERE `id` = '$feedbackid' ";
		$result = mysqli_query($conn, $sql);
		

		$loginroll = json_decode($activeRoll);
		echo count($loginroll);
		for ($i = 0; $i < count($loginroll); $i++) {
			$roll = $loginroll[$i];
			//create login id for each rollnumber
			$loginid = $roll;
			//create password for each rollnumber
			$password = md5($roll);;
			//create login table

			$rollcount = "SELECT * FROM `login` WHERE `uname` = '$roll'";
			$rollcountresult = mysqli_query($conn, $rollcount);
			$rollcountrow = mysqli_num_rows($rollcountresult);
			$row_login = mysqli_fetch_assoc($rollcountresult);
			if ($rollcountrow == 0) {
				$student_grp = $feedbackid;
				$sql = "INSERT INTO `login`(`uname`, `passwd`, `role`, `name`, `student_groups` ) VALUES ('$loginid','$password','Student', 'Student', ';$feedbackid;')";
				$result = mysqli_query($conn, $sql);
				if (!$result) {

					echo "<script>alert('" . mysqli_error($conn) . "');</script>";
					exit();
				}
			} else {
				$student_grp = $row_login['student_groups'] . ';' . $feedbackid. ';';
				$sql = "UPDATE `login` SET `student_groups` = '{$student_grp}'  WHERE `uname` = '$roll'";
				$result = mysqli_query($conn, $sql);
				if (!$result) {

					echo "<script>alert('" . mysqli_error($conn) . "');</script>";
					exit();
				}
			}
		}
		echo "<script>alert('Feedback Requested Successfully');</script>";
		echo "<script>window.location.href='requested_feedback.php?deptcode=$deptcode';</script>";
	}

	?>

</body>

</html>

<?php

/*
		$known_posts = array('deptcode', 'semester', 'subject', 'rollrange', 'addrollrange', 'addrollunit', 'finalroll');
		$active_rolls = array();
		foreach ($_POST as $key => $value) {
			if (!in_array($key, $known_posts)) {
				array_push($active_rolls, $key);
			}
		}
		$active_rolls = array_unique($active_rolls);
		$active_rolls = json_encode($active_rolls);

		$sqltest = "SELECT * FROM `groups` WHERE `deptcode` = '$deptcode' AND `year` = '$year' AND `subject` = '$subject'";
		$resulttest = mysqli_query($conn, $sqltest);
		if (mysqli_num_rows($resulttest) > 0) {
			echo "<script>alert('Group already exists');</script>";
			echo "<script>window.location.href='create_group.php';</script>";
		} else {
			$sql = "INSERT INTO groups(year, semester, subject , deptcode, activeRoll, teacher_id) VALUES ('$year','{$_POST["semester"]}','$subject', '$deptcode', '$active_rolls', '{$_SESSION["id"]}')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "success";
			} else {
				echo mysqli_error($conn);
			}
		}
	
    }


if(isset($_POST['request'])){

    $date = $_POST['date'];
    $feedbackid = $_GET['id'];

    $known_posts = array('date', 'request');
    $active_rolls = array();
    foreach($_POST as $key => $value) {
        if(!in_array($key, $known_posts)) {
            array_push($active_rolls, $key);
        }
    }


    $active_rolls = array_unique($active_rolls);
    $active_rolls = json_encode($active_rolls);

    $sql = "UPDATE groups SET `activeRoll` = '$active_rolls', `date` = '$date', `request` = '1' WHERE `id` = '$feedbackid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Feedback updated and requested successfully');</script>";
        echo "<script>window.location.href = 'feedback_home.php';</script>"; 
    } else {
        echo "<script>alert('Error updating feedback');</script>";
    }*/


?>
