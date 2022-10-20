<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
$semester_id = $_GET['semester'];
$department_id = $_GET['dept'];

if (isset($_GET["academic_year"])) {
	$academic_year = $_GET["academic_year"];
	$sql = "select * from forms where academic_year = '{$academic_year}' and dept_code = {$department_id}";
}
if (isset($_GET["semester"])) {
	$sql = "select * from forms where semester = '{$semester_id}' and dept_code = {$department_id}";
	$semester = $semester_id . " term";
}

session_start();
include 'confirm.php';
include "../../imports/config.php";
$result = mysqli_query($conn, $sql);
$group_array = array();
$courses = array();

while ($row = mysqli_fetch_assoc($result)) {
	$sf = "select * from courses where course_code='$row[course_code]'";
	$reg = mysqli_query($conn, $sf);
	$rof = mysqli_fetch_assoc($reg);
	if (strpos($rof["course_name"], "Suggest")!==false){
		continue;
	}
	$group_array[] = $row['form_id'];
	$courses[] = $row['course_code'];
	$academic_fo = $row["academic_year"];
}


$depart_sql = "select * from departments where dept_id='$department_id'";
$depart_res = mysqli_query($conn, $depart_sql);
$depart_row = mysqli_fetch_assoc($depart_res);
        $department_name = $depart_row["dept_name"];


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

  <style>
    
  
  </style>
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


		<div class="main">

			<div>
				<?php
				include "../../imports/config.php";
				$sql = "SELECT * FROM forms WHERE form_id = '{$row['id']}'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$default_flag = $row['default_ques'];
				$author = $row['author'];
				echo $row['course_code'];
				$sql_group = "SELECT * FROM groups WHERE id = '{$row["group_id"]}'";
				$result_group = mysqli_query($conn, $sql_group);
				$row_group = mysqli_fetch_assoc($result_group);
				$student_count = $row_group['student_count'];

				?>
				<?php
				$course_code = $row["course_code"];
				$sql = "select * from courses where course_code = '$course_code'";
				$resul = mysqli_query($conn, $sql);
				$rowse = mysqli_fetch_assoc($resul);
       				?>


				<main class="content">
					<!-- <div class="container-fluid p-0">
					<div class="card border shadow-none">
						<div class="card-body" style="width: 100%; height:100%">

							<div class="row">

								<div class="col-md-6">

									<h4><?php echo $rowse["course_name"] ?> : #<?php echo $row["course_code"] ?></h4>
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
					if ($default_flag == 1) {
						$sql = "SELECT * FROM form_ques where form_id = '0'";
						$count_ques = 7;
					} else {

						$sql = "SELECT * FROM form_ques where form_id = '$feedback_id'";
					}
					$result = mysqli_query($conn, $sql);
					$num_ques = $count_ques;
          

					$sql = "select * from form_responses where form_id='$feedback_id'";
					$resu = mysqli_query($conn, $sql);
					$main_responses = array();
					if (!isset($count_ques)) {
						$count_ques = mysqli_num_rows($resu);
					}
					for ($i = 0; $i < $count_ques; $i++) {
						array_push($main_responses, array());
					}
					while ($row = mysqli_fetch_assoc($resu)) {
						$res = json_decode($row['response_json'], true);
						$i = 0;
						foreach ($res as $key => $value) {
							if ($value == "NAN") {
								$value = 0;
							}
							array_push($main_responses[$i], round($value));
							$i++;
							if ($i == $num_ques) {
								break;
								# code...
							}
						}
					}
					var_dump($main_responses);
					?>
					-->
					<div class="container-fluid p-0">
						<div class="card shadow-none border">
							<div class="card-body">
								<div class="row" style="justify-content: center;">
									<div class="col-md-6" style="justify-content:center;">
										<div class="text-center">
											<img src="../../assets/img/logo.png" alt="" style="width: 51px">

											<h3 class="mb-0">Cusrow Wadia Institute of Technology, Pune-411001</h3>
          <footer class="">Student's Feedback Report <?php echo $academic_fo; ?> <br> <?php echo $department_name; ?> </footer>
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
												<?php
												$averages = array();
												$max_ques = 0;
												for ($i = 0; $i < count($group_array); $i++) {
													array_push($averages, array());
												}
												$count = 0;
												foreach ($group_array as $key => $value) {

													$forms_sql = "select * from forms where form_id='$value'";
													$forms_result = mysqli_query($conn, $forms_sql);
													$forms_row = mysqli_fetch_assoc($forms_result);
													$default_flag = $forms_row['default_ques'];
													$i = 1;
													$count_ques = 0;
													if ($default_flag == 1) {
														$sql = "SELECT * FROM form_ques where form_id = '0'";
														$count_ques = 7;
													} else {

														$sql = "SELECT * FROM form_ques where form_id = '$value'";
													}
													$result = mysqli_query($conn, $sql);
													if ($count_ques == 0) {

														$count_ques = mysqli_num_rows($result);
													}
													$sql = "select * from form_responses where form_id='$value'";
													$resu = mysqli_query($conn, $sql);

													$main_responses = array();
													$num_ques = $count_ques;
													if ($count_ques > $max_ques) {
														$max_ques = $count_ques;
													}
													$main_responses = array();
													for ($i = 0; $i < $num_ques; $i++) {
														array_push($main_responses, array());
													}
													while ($row = mysqli_fetch_assoc($resu)) {
														$res = json_decode($row['response_json'], true);
														$i = 0;
														foreach ($res as $key => $value) {
															if ($value == "null") {
																$value = 0;
															}
															array_push($main_responses[$i], round($value));
															$i++;
															if ($i == $num_ques) {
																break;
																# code...
															}
														}
													}

													for ($i = 0; $i <  $count_ques; $i++) {
														# code...
														array_push($averages[$count], round(array_sum($main_responses[$i]) / count($main_responses[$i]), 2));
													}
													$count++;
												}
												?>

												<thead>
													<th>Courses</th>
                        <th colspan="<?php echo $max_ques; ?>">Score Index</th>
													<th>Avg Score Index</th>



												</thead>
												<tbody>
													<tr>
														<th></th>
                          <?php
                            for ($i = 1; $i<=$max_ques; $i++){

                          ?>
                          <th> <?php echo $i ?> </th>
                            <?php } ?>

													</tr>
													<?php
													foreach ($group_array as $key => $value) {
														$grp_sql = "select * from courses where course_code='$courses[$key]'";
														$grp_res = mysqli_query($conn, $grp_sql);
														$grp_row = mysqli_fetch_assoc($grp_res);
														echo "<tr>";
														echo "<td>" . $grp_row['course_name'] . " (".explode(' - ', $grp_row['course_code'])[0].")</td>";
														# echo "<td>" . explode(" - ", $grp_row['course_name'])[0] . " (".explode(' - ', $grp_row['course_code'])[0].")</td>";
														$avgd = 0;
														for ($i = 0; $i < count($averages[$key]); $i++) {
															if ($averages[$key][$i] >= 4.5 or $averages[$key][$i] <= 3) {
																echo "<td><u>" . $averages[$key][$i] . "</u></td>";
																$avgd += $averages[$key][$i];
																continue;
															}
															echo "<td>" . $averages[$key][$i] . "</td>";
															$avgd += $averages[$key][$i];
														}
														for ($i = 0; $i < $max_ques - count($averages[$key]); $i++) {
															echo "<td>" . "</td>";
														}
														$avg_er = round($avgd / count($averages[$key]), 2);
														if ($avg_er >= 4.5 or $avg_er <= 3) {
															echo "<td><u>" . round($avgd / count($averages[$key]), 2) . "</u></td>";
															continue;
														}
														echo "<td>" . round($avgd / count($averages[$key]), 2) . "</td>";
													}
													?>

												</tbody>
											</table>

										</div>
										<br>
										<div class="table-responsive">
											<table class="table table-bordered" style="border:1px solid #000;">
												<thead>
													<tr class="text-center">
														<th colspan="5">FIVE POINT GRADING SCALE</th>
													</tr>
													<tr>

														<th>Excellent : 5</th>
														<th>Good : 4</th>
														<th>Satisfactory : 3</th>
														<th>Needs Improvement : 2</th>
														<th>Poor : 1</th>
													</tr>
												</thead>
											</table>
										</div>
										<br>
										<!-- note paragraph -->
										<p>
											<b>Note:</b> 1. The score index less than 3 and greater than 4.5 is Highlighted.
											<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. The response for more than 40% score is highlighted.
										</p>
									</div>
								</div>
							</div>
						</div>





					</div>
			</div>
		</div>
	</div>
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
