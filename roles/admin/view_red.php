<!DOCTYPE html>
<html lang="en">
<?php
$feedback_id = $_GET["id"];
session_start();
include 'confirm.php';
?>

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

	<title>Feedback Stats<?php ?></title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		.my-custom-scrollbar {
			position: relative;
			height: 235px;
			width: 100%;
			overflow: auto;
		}

		.table-wrapper-scroll-y::-webkit-scrollbar {
			display: none;
		}

		.table-wrapper-scroll-y {
			-ms-overflow-style: none;
			scrollbar-width: none;
		}
	</style>
</head>

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
					<h1 class="h3 mb-0"><strong>Feedback |
							<?php
							include "../../imports/config.php";
							$sql = "SELECT * FROM forms WHERE form_id = '$feedback_id'";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							$author = $row['author'];
							echo $row['course_name'];
							$sql_group = "SELECT * FROM groups WHERE id = '{$row["group_id"]}'";
							$result_group = mysqli_query($conn, $sql_group);
							$row_group = mysqli_fetch_assoc($result_group);
							$student_count = $row_group['student_count'];

							?></strong></h1>
				</div>
				<?php
				include "notification.php";
				$course_code = $row["course_name"];
				$sql = "select * from courses where course_code = '$course_code'";
				$resul = mysqli_query($conn, $sql);
				$rowse = mysqli_fetch_assoc($resul);
				?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="card border shadow-none">
						<div class="card-body" style="width: 100%; height:100%">

							<div class="row">

								<div class="col-md-6">

									<h4><?php echo $rowse["course_name"] ?> : #<?php echo $row["course_name"] ?></h4>
									<p><?php echo $author ?></p>
								</div>
								<div class="col-md-6" style="text-align:right; ">
									<h4>Last Updated <span style="color: green;">: <?php echo $row["ini_date"] ?></span></h4>

								</div>
							</div>
						</div>
					</div>
					<?php

					$i = 1;
					$sql = "SELECT * FROM form_ques where form_id = '$feedback_id'";
					$result = mysqli_query($conn, $sql);
					$num_ques = mysqli_num_rows($result);

					$sql = "select * from form_responses where form_id='$feedback_id'";
					$resu = mysqli_query($conn, $sql);
					$main_responses = array();
					for ($i = 0; $i < $num_ques; $i++) {
						array_push($main_responses, array());
					}
					while ($row = mysqli_fetch_assoc($resu)) {
						$res = json_decode($row['response_json'], true);
						$i = 0;
						foreach ($res as $key => $value) {
							array_push($main_responses[$i], round($value));
							$i++;
							if ($i == $num_ques) {
								break;
								# code...
							}
						}
					}
					?>
					<div class="row">
						<div class="col-md-4">
							<div class="card flex-fill w-100 border shadow-none">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0"><?php echo $rowse["course_name"] ?> </h5>
										<h6 class="card-title mb-0"><?php echo date('D, d M Y H:i:s') ?></h6>
									</div>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie2"></canvas>
											</div>
										</div>
										<div class="text-center">
											<button class="btn btn-success mb-3">Filled - <?php echo count($main_responses[0]) ?></button>
											<button class="btn btn-danger mb-3">Not Filled - <?php echo $student_count - count($main_responses[0]) ?></button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8" style="height: 100%">
							<div class="card flex-fill w-200 border shadow-none">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0"><?php echo $rowse["course_name"] ?> </h5>
										<h6 class="card-title mb-0"><?php echo date('D, d M Y H:i:s') ?></h6>
									</div>
								</div>
								<div class="card-body d-flex">
									<canvas id="barChart" style="max-height: 800px;"></canvas>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
											new Chart(document.querySelector('#barChart'), {
												type: 'bar',
												data: {
													labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
													datasets: [{
														axis: 'y',
														label: 'Average Student Reponses',
														data: [
															<?php
															for ($i = 0; $i < count($main_responses); $i++) {
																echo round(array_sum($main_responses[$i])/count($main_responses[$i]), 2);
																if ($i != count($main_responses) - 1) {
																	echo ",";
																}
															}
															?>
														],
														backgroundColor: [
															'rgba(255, 99, 132, 0.2)',
															'rgba(255, 159, 64, 0.2)',
															'rgba(255, 205, 86, 0.2)',
															'rgba(75, 192, 192, 0.2)',
															'rgba(54, 162, 235, 0.2)',
															'rgba(153, 102, 255, 0.2)',
															'rgba(201, 203, 207, 0.2)'
														],
														borderColor: [
															'rgb(255, 99, 132)',
															'rgb(255, 159, 64)',
															'rgb(255, 205, 86)',
															'rgb(75, 192, 192)',
															'rgb(54, 162, 235)',
															'rgb(153, 102, 255)',
															'rgb(201, 203, 207)'
														],
														borderWidth: 1
													}]
												},
												options: {
													indexAxis: 'y',
												}
											});
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- two table of filled roll numbers and not filled roll numbers in green and red -->
			
				<a href="print_report.php?id=<?php echo $_GET["id"] ?>" target=”_blank”>

					<button class="btn btn-dark btn-ecomm" type="button">Print </button>
				</a>
				


			</main>

		</div>
	</div>
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<script src="assets/js/main.js"></script>
	<script src="js/app.js"></script>



	<script>
		<?php
		for ($i = 1; $i < 6; $i++) {
		?>
			document.addEventListener("DOMContentLoaded", function() {
				// Pie chart
				new Chart(document.getElementById("chartjs-dashboard-pie<?php echo $i; ?>"), {
					type: "pie",
					data: {
						labels: ["Filled", "Not Filled"],
						datasets: [{
							data: [<?php echo count($main_responses[0]) ?>, <?php echo $student_count - count($main_responses[0]) ?>],
							backgroundColor: [
								window.theme.success,
								window.theme.danger
							],
							borderWidth: 5
						}]
					},
					options: {
						responsive: !window.MSInputMethodContext,
						maintainAspectRatio: false,
						legend: {
							display: false
						},
						cutoutPercentage: 75
					}
				});
			});
		<?php
		}
		?>
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["5-Ratings", "4-Ratings", "3-Ratings", "2-Ratings", "1-Ratings"],
					datasets: [{
						data: [406, 301, 1689, 8344, 3434],
						backgroundColor: [
							window.theme.success,
							window.theme.primary,
							window.theme.secondary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>

	</script>

</body>

</html>