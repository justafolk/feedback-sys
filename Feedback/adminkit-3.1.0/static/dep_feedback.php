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

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php
			include "sidebar.html";
		?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			<div>
				<h1 class="h3 mb-0"><strong>Feedback</strong></h1>
			</div>
			<?php
				include "notification.php";
			?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Feedback</h1>
					</div>
					<ul class="nav" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="btn btn-primary active me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Computer Department</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="btn btn-primary me-3" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Electrical Department</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="btn btn-primary me-3" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Mechanical Deparment</button>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<ul class="nav" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="btn btn-primary me-3" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab"  aria-selected="true">List Form</button>
											</li>
										</ul>
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
								</div>
								<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
									<div class="card flex-fill w-100">
										<div class="card-header d-flex justify-content-between">
											<div>
												<h5 class="card-title mb-0">PHP - Feedback</h5>
												<h6 class="card-title mb-0">26/03/2022</h6>
											</div>
											<button class="btn btn-primary">View</button>
										</div>
										<div class="card-body d-flex">
											<div class="align-self-center w-100">
												<div class="py-3">
													<div class="chart chart-xs">
														<canvas id="chartjs-dashboard-pie"></canvas>
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
								<div class="col-12 col-md-6 col-xxl-3 order-2 order-xxl-2">
									<div class="card flex-fill w-100">
										<div class="card-header d-flex justify-content-between">
											<div>
												<h5 class="card-title mb-0">PHP - Course Exits Survey</h5>
												<h6 class="card-title mb-0">26/03/2022</h6>
											</div>
											<button class="btn btn-primary">View</button>
										</div>
										<div class="card-body d-flex">
											<div class="align-self-center w-100">
												<div class="py-3">
													<div class="chart chart-xs">
														<canvas id="chartjs-dashboard-pie1"></canvas>
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
							</div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							Electrical Department
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							Mechanical Deparment
						</div>
						<div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<ul class="nav" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="btn btn-primary me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Bar Graph</button>
											</li>
										</ul>
										<!-- <button class="btn btn-secondary active me-3" id="home-tab" data-bs-toggle="tab" type="button">Bar Graph</button> -->
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table text-center">
										<thead class="thead-dark">
											<tr>
												<th scope="col">Sr. No</th>
												<th scope="col">Subject / Topic</th>
												<th scope="col">Department</th>
												<th scope="col">Who</th>
												<th scope="col">Start Date | Time</th>
												<th scope="col">Finish Date | Time</th>
												<th scope="col">Status</th>
												<th scope="col">View</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mar</td>
												<td>Otto</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button type="button" class="btn btn-primary" name="view" value="view">View</button></td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button type="button" class="btn btn-primary" name="view" value="view">View</button></td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button type="button" class="btn btn-primary" name="view" value="view">View</button></td>
											</tr>
										</tbody>
									</table>
								</div>				
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php
				include "footer.php";
			?>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
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
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie1"), {
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