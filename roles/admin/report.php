<?php
error_reporting(0);
require_once "../../imports/config.php";
$feedback_id = $_GET["id"];

//expired feedbacks part 
$sqlop = "UPDATE forms SET `viewed` = '1' WHERE `form_id` = '$feedback_id' AND `ini_date` < CURRENT_DATE()";
$resultop = mysqli_query($conn, $sqlop);

$query = "SELECT * FROM form_responses where form_id='$feedback_id';";
$result = mysqli_query($conn, $query);
$items = array();
while ($row = $result->fetch_assoc()) {
	$items[] = $row;
}
if (isset($_POST["export"])) {
	$fileName = "itemdata-" . date('d-m-Y') . ".xls";
	$json1 = array();
	for ($i = 0; $i < count($items); $i++) {
		$json = $items[$i]["response_json"];
		$json1[] = json_decode($json, true);
	}
	$heading = false;
	$headings = array('Student_id', 'Form ID', 'Fill_date', '1', '2', '3', '4', '5', '6', '7');
	$item = array();
	$data[] = "";
	for ($i = 0; $i < count($items); $i++) {
		$item = array($items[$i]['student_id'], $items[$i]['form_id'], $items[$i]['filldate'], $json1[$i]['slider-1'], $json1[$i]['slider-2'], $json1[$i]['slider-3'], $json1[$i]['slider-4'], $json1[$i]['slider-5'], $json1[$i]['slider-6'], $json1[$i]['slider-7']);
		$data[$i] = $item;
	}
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename=' . $fileName);
	if (!empty($items)) {
		foreach ($data as $item) {
			if (!$heading) {
				echo implode("\t", array_values($headings)) . "\n\n";
				$heading = true;
			}
			echo implode("\t", array_values($item)) . "\n";
		}
	}
	exit();
}
?>

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

	<title>CWIT-Feedback Portol</title>

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
		@media print { .navbar {
			display:none;
		}}
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
							$default_flag = $row['default_ques'];
							$author = $row['author'];
							echo $row['course_code'];
							$sql_group = "SELECT * FROM groups WHERE id = '{$row["group_id"]}'";
							$result_group = mysqli_query($conn, $sql_group);
							$row_group = mysqli_fetch_assoc($result_group);
							$student_count = $row_group['student_count'];

							?></strong></h1>
				</div>
				<?php
				include "notification.php";
				$course_code = $row["course_code"];
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

									<h4><?php echo $rowse["course_name"] ?> : #<?php echo $row["course_code"] ?></h4>
									<p><?php echo $author ?></p>
								</div>
								<div class="col-md-6" style="text-align:right; ">
									<h4>Last Updated <span style="color: green;">: <?php echo $row["ini_date"] ?></span></h4>

									<br>

									<form action="" method="post">
										<a href="print_report.php?id=<?php echo $_GET["id"] ?>" target=”_blank”>

											<button class="btn btn-dark btn-ecomm" type="button">Print </button>
										</a>
										<button type="submit" id="export" name="export" value="Export to excel" class="btn btn-success">Export</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<?php

					$i = 1;
					if ($default_flag == 1){
					$sql = "SELECT * FROM form_ques where form_id = '0'";
          $count_ques = 7;

					}else{

						$sql = "SELECT * FROM form_ques where form_id = '$feedback_id'";
					}
					$result = mysqli_query($conn, $sql);
					$num_ques = 7;

					$sql = "select * from form_responses where form_id='$feedback_id'";
					$resu = mysqli_query($conn, $sql);
					$main_responses = array();
          if (!isset($count_ques)){
              $count_ques = mysqli_num_rows($resu);
}
					for ($i = 0; $i < $count_ques; $i++) {
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
														label: ['Average Student Reponses'],
														data: [
															<?php
															for ($i = 0; $i < count($main_responses); $i++) {
																echo round(array_sum($main_responses[$i]) / count($main_responses[$i]), 2);
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
													scales: {
														y: {
															beginAtZero: true
														}
													}
												}
											});
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card shadow-none border">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<th>Feedback Question</th>
											<th colspan="5">Percentage of Scores</th>
											<th>Avg</th>



										</thead>
										<tbody>
											<tr>
												<th></th>
												<th>1</th>
												<th>2</th>
												<th>3</th>
												<th>4</th>
												<th>5</th>
												<th></th>

											</tr>
											<?php

											$i = 0;
											while ($row = mysqli_fetch_assoc($result)) {
												echo "<tr>";
												$percentage = array_count_values($main_responses[$i]);
												echo "<td>" . $row['question_title'] . "</td>";
												echo "<td>" . round(count(array_keys($main_responses[$i], 1)) / count($main_responses[$i]) * 100, 2) . "</td>";
												echo "<td>" . round(count(array_keys($main_responses[$i], 2)) / count($main_responses[$i]) * 100, 2) . "</td>";
												echo "<td>" . round(count(array_keys($main_responses[$i], 3)) / count($main_responses[$i]) * 100, 2) . "</td>";
												echo "<td>" . round(count(array_keys($main_responses[$i], 4)) / count($main_responses[$i]) * 100, 2) . "</td>";
												echo "<td>" . round(count(array_keys($main_responses[$i], 5)) / count($main_responses[$i]) * 100, 2) . "</td>";

												echo "<td>" . round(array_sum($main_responses[$i]) / count($main_responses[$i]), 2) . "</td>";
												echo "</tr>";
												$i++;
											}
											?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card flex-fill w-200 border shadow-none">
							<div class="card-header d-flex justify-content-between">
								<div>
									<h5 class="card-title mb-0" style="color:green">Filled Roll Numbers</h5>
								</div>
							</div>
							<div class="card-body d-flex">

								<?php
								$sql = "select * from form_responses where form_id='$feedback_id'";
								$result = mysqli_query($conn, $sql);
								$filled = array();
								$rows = mysqli_num_rows($result);
								for ($i = 0; $i < 4; $i++) {
								?>
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<th scope="col" colspan="4">Roll Number</th>

											</tr>
										</thead>
										<tbody>
											<?php
											$j = 0;
											while ($row = mysqli_fetch_assoc($result)) {
												echo "<tr>";
												echo "<td>" . $row['student_id'] . "</td>";
												echo "</tr>";
												array_push($filled, $row['student_id']);
												if ($j == round($rows / 4)) {
													break;
												}
												$j++;
											}

											?>
										</tbody>

									</table>

								<?php
								}

								?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card flex-fill w-200 border shadow-none">
							<div class="card-header d-flex justify-content-between">
								<div>
									<h5 class="card-title mb-0" style="color:red"> Not Filled Roll Numbers</h5>
								</div>
							</div>
							<div class="card-body d-flex">

								<?php
								$sql = "select * from login where student_groups LIKE '%;$feedback_id;%'";
								$result = mysqli_query($conn, $sql);
								$countse = $student_count - count($main_responses[0]);
								for ($s = 0; $s < 4; $s++) {
								?>
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
												<th scope="col">Roll Number</th>
											</tr>
										</thead>
										<tbody>

											<?php
											$i = 0;
											while ($row = mysqli_fetch_assoc($result)) {
												if (!in_array($row['uname'], $filled)) {
													echo "<tr><td>" . $row['uname'] . "</td></tr>";
													$i++;
												}

												if ($i >= ($countse / 4)) {
													break;
												}
											}
											?>
										</tbody>

									</table>
								<?php
								}

								?>

							</div>
						</div>
					</div>
				</div>




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
