<!DOCTYPE html>
<html lang="en">
<?php
$feedback_id = $_GET["f_id"];
session_start();
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
							$dept_id = $_GET["dept_id"];
							include "../../imports/config.php";
							$sql = "SELECT * FROM departments WHERE dept_id = '$dept_id'";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo $row['dept_name'];
							?></strong></h1>
				</div>
				<?php
				include "notification.php";
				?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-4">
							<div class="card flex-fill w-100">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0">PHP - Feedback</h5>
										<h6 class="card-title mb-0">26/03/2022</h6>
									</div>
									<button class="btn btn-primary" id="id4">View</button>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie2"></canvas>
											</div>
										</div>
										<div class="text-center">
											<button class="btn btn-success mb-3">5 - 4306</button>
											<button class="btn btn-primary mb-3">5 - 4306</button>
											<button class="btn btn-secondary mb-3">5 - 4306</button>
											<button class="btn btn-warning mb-3">5 - 4306</button>
											<button class="btn btn-danger mb-3">5 - 4306</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card flex-fill w-200">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0">PHP - Feedback</h5>
										<h6 class="card-title mb-0">26/03/2022</h6>
									</div>
									<button class="btn btn-primary" id="id4">View</button>
								</div>
								<div class="card-body d-flex">
									<canvas id="barChart" style="max-height: 800px;"></canvas>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
											new Chart(document.querySelector('#barChart'), {
												type: 'bar',
												data: {
													labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
													datasets: [{
														label: 'Bar Chart',
														data: [65, 59, 80, 81, 56, 55, 40],
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
						labels: ["5-Ratings", "4-Ratings", "3-Ratings", "2-Ratings", "1-Ratings"],
						datasets: [{
							data: [4306, 3801, 1689, 834, 434],
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
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>

</body>

</html>