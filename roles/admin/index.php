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
	<link rel="shortcut icon" href="../../assets/img/logo.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>CWIT-Feedback Portol</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

</head>
<style>
	.eventClass a {
		background-color: #dda919 !important;
		color: #FFF !important;
	}
  .alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}
</style>

<body>
	<div class="wrapper">
		<?php
		session_start();
		error_reporting(0);
		include '../../imports/config.php';

		include 'confirm.php';
		include "sidebar.php";
		?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Dashboard</strong></h1>
				</div>
				<?php
				include 'notification.php';
				?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
      <?php 
          if ($_GET["flag"]=="done"){
  ?>

  <div class="alert alert-primary" role="alert">
    Questions Edited successfully!!!
</div>
<?php
            
}
      ?>
					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
					<div class="row">
						<div class="col-xl-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Total Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php
																		$sql = "SELECT * FROM forms";
																		$result = mysqli_query($conn, $sql);
																		$rowcount = mysqli_num_rows($result);
																		echo $rowcount;
																		?></h1>
												<div class="mb-0">
													<span class="text-muted">Since Forever</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Pending Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>

												<h1 class="mt-1 mb-3"><?php
																		$sql = "SELECT * FROM forms where status='1'";
																		$result = mysqli_query($conn, $sql);
																		$rowcount = mysqli_num_rows($result);
																		echo $rowcount;
																		?></h1>
												<div class="mb-0">
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Filled Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>

												<h1 class="mt-1 mb-3"><?php
																		$sql = "SELECT * FROM form_responses";
																		$result = mysqli_query($conn, $sql);
																		$rowcount = mysqli_num_rows($result);
																		echo $rowcount;
																		?></h1>
												<div class="mb-0">
													<span class="text-muted">Since Forever</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Students</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="shopping-cart"></i>
														</div>
													</div>
												</div>

												<h1 class="mt-1 mb-3"><?php
																		$sql = "SELECT * FROM login where role='student'";
																		$result = mysqli_query($conn, $sql);
																		$rowcount = mysqli_num_rows($result);
																		echo $rowcount;
																		?></h1>
												<div class="mb-0">
													<span class="text-muted">Since 2022</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                                      
          <div class="row">
						<div class="col-md-6 my-2">
							<!-- table showing active feedbacks -->
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Active Feedbacks  - <?php $td= date('Y-m-d'); echo "<b>$td</b>"; ?></h5>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Course</th>
													<th>Course Code</th>
													<th>Total Students</th>
													
												</tr>
											</thead>
											<tbody>
												<?php

													$active_feedbacks = "SELECT * FROM forms WHERE `ini_date` = '$td' AND `status` = '1' ORDER BY `form_id` DESC";
													$active_feedbacks_result = mysqli_query($conn, $active_feedbacks);
													$active_feedbacks_count = mysqli_num_rows($active_feedbacks_result);

													if($active_feedbacks_count > 0){
														$active_feedbacks_count = 1;
														while($active_feedbacks_row = mysqli_fetch_assoc($active_feedbacks_result)){
															$course_code = $active_feedbacks_row['course_code'];

															$course = "SELECT * FROM courses WHERE course_code = '$course_code'";
															$course_result = mysqli_query($conn, $course);
															$course_row = mysqli_fetch_assoc($course_result);
															$course_name = $course_row['course_name'];
															$total_stud = $active_feedbacks_row['total_students'];
															//$feedback_date = date('d-m-Y', strtotime($feedback_date));
															echo "<tr>
																	<td>$active_feedbacks_count</td>
																	<td>$course_name</td>
																	<td>$course_code</td>
																	<td>$total_stud</td>
																</tr>";
															$active_feedbacks_count++;
														}
													}
													else{
														echo "<tr>
																<td colspan='4' span class='text-center'><h5>No Active Feedbacks</h5></td>
															</tr>";
													}

												?>

											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>

						<div class="col-md-6 my-2">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Requested Feedbacks</h5>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th> ID</th>
													<th>Course</th>
													<th>Code</th>
													<th>Students</th>
													<th>Date</th>
													<th>View</th>
													
												</tr>
											</thead>
											<tbody>
											<?php

                        
                        $active_feedbacks = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' ORDER BY id desc";
												$active_feedbacks_result = mysqli_query($conn, $active_feedbacks);
												$active_feedbacks_count = mysqli_num_rows($active_feedbacks_result);

												if($active_feedbacks_count > 0){
													$active_feedbacks_count = 1;
													while($active_feedbacks_row = mysqli_fetch_assoc($active_feedbacks_result)){
														$course_code = $active_feedbacks_row['subject'];

                            $dept_code = $active_feedbacks_row["deptcode"];
														$course = "SELECT * FROM courses WHERE course_code = '$course_code'";
														$course_result = mysqli_query($conn, $course);
														$course_row = mysqli_fetch_assoc($course_result);
														$course_name = $course_row['course_name'];
														$total_stud = $active_feedbacks_row['student_count'];
														//$feedback_date = date('d-m-Y', strtotime($feedback_date));
														echo "<tr>
																<td>$active_feedbacks_count</td>
																<td>$course_name</td>
																<td>$course_code</td>
																<td>$total_stud</td>
																<td>$active_feedbacks_row[fdate]</td>
    <td>
                      <button onclick=\"window.location.href='requested_feedback.php?deptcode=$dept_code'\"   class=\"btn btn-dark btn-ecomm\">View</button>
      </td>
															</tr>";
														$active_feedbacks_count++;
													}
												}
												else{
													echo "<tr>
															<td colspan='6' span class='text-center'><h5>No Feedback Records</h5></td>
														</tr>";
												}

												?>
											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>
					</div>
						
			</main>



			<script src="js/app.js"></script>

			<script>
				document.addEventListener("DOMContentLoaded", function() {
					var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
					var gradient = ctx.createLinearGradient(0, 0, 0, 225);
					gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
					gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
					// Line chart
					new Chart(document.getElementById("chartjs-dashboard-line"), {
						type: "line",
						data: {
							labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
							datasets: [{
								label: "Sales ($)",
								fill: true,
								backgroundColor: gradient,
								borderColor: window.theme.primary,
								data: [
									2115,
									1562,
									1584,
									1892,
									1587,
									1923,
									2566,
									2448,
									2805,
									3438,
									2917,
									3327
								]
							}]
						},
						options: {
							maintainAspectRatio: false,
							legend: {
								display: false
							},
							tooltips: {
								intersect: false
							},
							hover: {
								intersect: true
							},
							plugins: {
								filler: {
									propagate: false
								}
							},
							scales: {
								xAxes: [{
									reverse: true,
									gridLines: {
										color: "rgba(0,0,0,0.0)"
									}
								}],
								yAxes: [{
									ticks: {
										stepSize: 1000
									},
									display: true,
									borderDash: [3, 3],
									gridLines: {
										color: "rgba(0,0,0,0.0)"
									}
								}]
							}
						}
					});
				});
			</script>


			<script>
				document.addEventListener("DOMContentLoaded", function() {
					var highlightDate = {};
					var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
					var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
					document.getElementById("datetimepicker-dashboard").flatpickr({
						inline: true,
						prevArrow: "<span title=\"Previous month\">&laquo;</span>",
						nextArrow: "<span title=\"Next month\">&raquo;</span>",
						defaultDate: defaultDate,
						touchUi: true,
						onChange: function(selectedDates, dateStr, instance) {
							var date = new Date(dateStr);
							var mydate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();

							highlightDate = mydate;
							//alert(mydate);

							function postSend() {
								var xhr = new XMLHttpRequest();
								xhr.open("GET", "calendar.php/?date=", true);
								xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
								xhr.send(mydate);
							}
							postSend();

							$.get("./calendar.php", {
									date: mydate
								},
								function(data, status) {
									$("#calendar").html(data);
								}
							);

						}



					});
				});
			</script>


			<script type="text/babel">

			</script>
			<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
			<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
			<script src="assets/js/main.js"></script>


</body>

</html>
