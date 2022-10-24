<!DOCTYPE html>
<html lang="en">
<?php
$feedback_id = $_GET["id"];
session_start();
include 'confirm.php';
error_reporting(0);
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<?php
		// Path: roles\admin\print_report.php
	?>
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
	</style>
	<style>
		@media print {

			.table thead tr th td,
			.table tbody tr th td {
        border: 2px solid black !important;
				-webkit-print-color-adjust: exact;
			}
		}
	</style>
</head>

<body>
	<div class="wrapper">

		<div class="main">
			<div>
				<?php
				include "../../imports/config.php";
				$sql = "SELECT * FROM forms WHERE form_id = '$feedback_id'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$acadmic_e = $row['academic_year'];
				$default_flag = $row['default_ques'];
				?></strong></h1>
			</div>
			<?php
			$course_code = $row["course_code"];
			$sql = "select * from courses where course_code = '$course_code'";
			$resul = mysqli_query($conn, $sql);
			$rowse = mysqli_fetch_assoc($resul);
			$dept = "select * from departments where dept_id='" . $rowse["dept_code"] . "'";
			$resultd = mysqli_query($conn, $dept);
			$rowd = mysqli_fetch_assoc($resultd);
      $department_name = $rowd["dept_name"];
			$course_code = $row["course_code"];
			?>

			<?php
			
			
			$i = 1;
			if ($default_flag == 1){
				$sql = "SELECT * FROM form_ques where form_id = '0'";

			}else{

				$sql = "SELECT * FROM form_ques where form_id = '$feedback_id'";
			}
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
      
			<main class="">
				<div class="container-fluid p-0">
					<div class="card shadow-none border">
						<div class="card-body">
							<div class="row" style="justify-content: center;">
								<div class="col-md-6" style="justify-content:center;">
									<div class="text-center">
										<img src="../../assets/img/logo.png" alt="" style="width: 51px">

										<h3 class="mb-0">Cusrow Wadia Institute of Technology, Pune-411001</h3>
      <footer class="">Student's Feedback Report <?php echo $acadmic_e; ?> <br> <?php echo $department_name ?></footer>
                    
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card border shadow-none">
						<div class="card-body" style="width: 100%; height:100%">

							<div class="row">

									<table class="table table-bordered">
										<tr>
											<th>Acadmic Year</th>
											<td><?php echo  $acadmic_e ?></td>
											<th>No. of Suggestions</th>
											<td><?php echo count($main_responses[0]) ?></td>
										</tr>

									</table>
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

                        <th>Sr no.</th>
                      <?php 
$sel = "select * from form_ques where form_id = $feedback_id";
$res = mysqli_query($conn, $sel);
while ($row = mysqli_fetch_assoc($res)){
  echo "<th> $row[question_title] </th>";
}
  ?>
										</thead>
                                <tbody>
                      <?php 
$sql = "select * from form_responses where form_id = $feedback_id";
$res = mysqli_query($conn, $sql);
echo mysqli_error($conn);
while ($row = mysqli_fetch_assoc($res)){
  echo "<td>  </td>";
  $se = json_decode($row["response_json"], true);
  foreach ($se as $i){
  echo "<td> $i  </td>";
  }
}
?>
                                    
                                  </tbody>
									</table>
									<br>
									
									<br>
									<!-- note paragraph -->
									

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
							data: [<?php echo count($main_responses[0]) ?>, 32],
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
