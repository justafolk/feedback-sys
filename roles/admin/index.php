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
<style>
        .eventClass a {
            background-color: #dda919 !important;
            color: #FFF !important;
        }
    </style>
<body>
	<div class="wrapper">
	<?php
		session_start();
		include "../../imports/config.php";

	?>
		
  <?php include "./sidebar.php" ?>
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
												$rowcount=mysqli_num_rows($result);
												echo $rowcount;
												?></h1>
												<div class="mb-0">
													<span class="text-muted">Since last month</span>
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
												$sql = "SELECT * FROM forms where status='online'";
												$result = mysqli_query($conn, $sql);
												$rowcount=mysqli_num_rows($result);
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
												$rowcount=mysqli_num_rows($result);
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
												$rowcount=mysqli_num_rows($result);
												echo $rowcount;
												?></h1>
												<div class="mb-0">
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-6 col-xxl-6 order-1 order-xxl-1">
							<p class="h3 mb-3">Overall Feedbacks</p>
							<div class="card">
								<div class="card-body">
								<h5 class="card-title">Total Feedbacks of Departments</h5>
								<div id="pieChart" class="mb-3"></div>
								<?php

								$sql = "SELECT * FROM departments";
								$result = mysqli_query($conn, $sql);
								$all = array();
								while ($row = mysqli_fetch_array($result)){
									$all[$row["dept_id"]] = $row['dept_name'];
								}
								
								$chart_data = '';
								$ss = "SELECT dept_code , COUNT(*) as count FROM forms GROUP BY dept_code";
								$result1 = mysqli_query($conn, $ss);
								
								$row = mysqli_fetch_array($result1);
								
								$chart_data .= "[".$row["count"]."";
								$chart_label .= "['".$all[$row["dept_code"]]."'";
								while($row = mysqli_fetch_array($result1))
								{
								 $chart_data .= ",".$row["count"];
								 $chart_label .= ",'".$all[$row["dept_code"]]."'";
								}
								$chart_data .= "]";
								$chart_label .= "]";
								?>
								<script>
									document.addEventListener("DOMContentLoaded", () => {
									new ApexCharts(document.querySelector("#pieChart"), {
										series: <?php echo $chart_data;?>,
										chart: {
										height: 350,
										type: 'pie',
										toolbar: {
											show: true
										}
										},
										labels: <?php echo $chart_label;?>,
									}).render();
									});
								</script>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-6 order-1 order-xxl-1">
							<p class="h3 mb-3">Department Performance</p>
							<div class="card">
								<div class="card-body">
									<div class="heading d-flex justify-content-between">
										<h5 class="card-title" id="name">Civil Department Feedbacks</h5>
										<select name="type" id="type" class="form-select me-3" style="max-width:30%;">
											<option value="civil" class="selected">Civil Department</option>
											<option value="mecha">Mechanical Department (A)</option>
											<option value="mechu">Mechanical Department (UA)</option>
											<option value="elect">Electrical Department</option>
											<option value="comp">Computer Department</option>
											<option value="etca">E&TC Department (A)</option>
											<option value="etcu">E&TC Department (UA)</option>
										</select>
									</div>
								<div id="civil">
									<div class="" align="center">
										<canvas id="pieChart1" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
										<!-- <button class="btn btn-success mb-3">1st Sem</button>
										<button class="btn btn-primary mb-3">2nd Sem</button>
										<button class="btn btn-danger mb-3">3rd Sem</button>
										<button class="btn btn-success mb-3">4st Sem</button>
										<button class="btn btn-primary mb-3">5nd Sem</button>
										<button class="btn btn-danger mb-3">6rd Sem</button> -->
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart1'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<div id="mecha">
									<div class="" align="center">
										<canvas id="pieChart2" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart2'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<div id="mechu">
									<div class="" align="center">
										<canvas id="pieChart3" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart3'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<div id="elect">
									<div class="" align="center">
										<canvas id="pieChart4" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart4'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<div id="comp">
									<div class="" align="center">
										<canvas id="pieChart5" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart5'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<div id="etca">
									<div class="" align="center">
										<canvas id="pieChart6" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart6'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<div id="etcu">
									<div class="" align="center">
										<canvas id="pieChart7" style="max-height: 300px; max-width:600px;"></canvas>
									</div>
									<div class="text-center mt-3">
										<button class="btn btn-success mb-3">1st Year</button>
										<button class="btn btn-primary mb-3">2nd Year</button>
										<button class="btn btn-danger mb-3">3rd Year</button>
									</div>
									<script>
										document.addEventListener("DOMContentLoaded", () => {
										new Chart(document.querySelector('#pieChart7'), {
											type: 'pie',
											data: {
											labels: ['First Year','Second Year','Third Year'],
											datasets: [{
												label: 'My First Dataset',
												data: [300, 50, 100],
												backgroundColor: [
												window.theme.success,
												window.theme.primary,
												window.theme.danger
												],
												hoverOffset: 4
											}],
											},
											options: {
												legend: {
													display: false
												}
											}	
										});
										});
									</script>
								</div>
								<script>
									civil = document.getElementById("civil");
									mecha = document.getElementById("mecha");
									mechu = document.getElementById("mechu");
									elect = document.getElementById("elect");
									comp = document.getElementById("comp");
									etca = document.getElementById("etca");
									etcu = document.getElementById("etcu");
									department = document.getElementById("department");	
									const name = document.getElementById("name");

									name.innerHTML = "Civil Department Feedbacks";
									let b = ["civil","mecha","mechu","elect","comp","etca","etcu"];

									function idk(variable, variable2){
										let b = ["civil","mecha","mechu","elect","comp","etca","etcu"];
										for(let i=0;i<8;i++){
											if(variable.style.display == "block"){
												variable.style.display = "none";
												document.getElementById(b[i]).style.display = "none";
											}
											else{
												document.getElementById(variable2).style.display = "block";
												document.getElementById(b[i]).style.display = "none";
											}
										}
									}
									civil.style.display = "block";
									mecha.style.display = "none";
									mechu.style.display = "none";
									elect.style.display = "none";
									comp.style.display = "none";
									etca.style.display = "none";
									etcu.style.display = "none";

									type.addEventListener("change", function(){
										let b = ["civil","mecha","mechu","elect","comp","etca","etcu"];
										if(type.value === 'civil'){
											civil.style.display = "block";
											mecha.style.display = "none";
											mechu.style.display = "none";
											elect.style.display = "none";
											comp.style.display = "none";
											etca.style.display = "none";
											etcu.style.display = "none";
											name.innerHTML = "Civil Department Feedbacks";
										}
										if(type.value === 'mecha'){
											civil.style.display = "none";
											mecha.style.display = "block";
											mechu.style.display = "none";
											elect.style.display = "none";
											comp.style.display = "none";
											etca.style.display = "none";
											etcu.style.display = "none";
											name.innerHTML = "Aided Mechanical Department Feedbacks";

										}
										if(type.value === 'mechu'){
											civil.style.display = "none";
											mecha.style.display = "none";
											mechu.style.display = "block";
											elect.style.display = "none";
											comp.style.display = "none";
											etca.style.display = "none";
											etcu.style.display = "none";
											name.innerHTML = "Unaided Mechanical Department Feedbacks";

										}
										if(type.value === 'elect'){
											civil.style.display = "none";
											mecha.style.display = "none";
											mechu.style.display = "none";
											elect.style.display = "block";
											comp.style.display = "none";
											etca.style.display = "none";
											etcu.style.display = "none";
											name.innerHTML = "Electrical Department Feedbacks";
										}
										if(type.value === 'comp'){
											civil.style.display = "none";
											mecha.style.display = "none";
											mechu.style.display = "none";
											elect.style.display = "none";
											comp.style.display = "block";
											etca.style.display = "none";
											etcu.style.display = "none";
											name.innerHTML = "Computer Department Feedbacks";
										}
										if(type.value === 'etca'){
											civil.style.display = "none";
											mecha.style.display = "none";
											mechu.style.display = "none";
											elect.style.display = "none";
											comp.style.display = "none";
											etca.style.display = "block";
											etcu.style.display = "none";
											name.innerHTML = "Aided E&TC Department Feedbacks";

										}
										if(type.value === 'etcu'){
											civil.style.display = "none";
											mecha.style.display = "none";
											mechu.style.display = "none";
											elect.style.display = "none";
											comp.style.display = "none";
											etca.style.display = "none";
											etcu.style.display = "block";
											name.innerHTML = "Unaided E&TC Department Feedbacks";

										}
									});
								</script>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
							<p class="h3 mb-3">Recent Feedbacks</p>
							<div class="card flex-fill w-100">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0">PHP - Feedback</h5>
										<h6 class="card-title mb-0">26/03/2022</h6>
									</div>
									<!-- <button type="button" class="btn btn-primary" onclick="form()">View</button> -->
									<button class="btn btn-primary" id="id4">View</button>
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
											<button class="btn btn-primary mb-3">4 - 4306</button>
											<button class="btn btn-secondary mb-3">3 - 4306</button>
											<button class="btn btn-warning mb-3">2 - 4306</button>
											<button class="btn btn-danger mb-3">1 - 4306</button>
										</div>
									</div>
								</div>
							</div>
						</div>
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
						<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
							<p class="h3" style="margin-top:10%;"><p>
							<div class="card flex-fill w-100">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0">Network Administrator</h5>
										<h6 class="card-title mb-0">26/03/2022</h6>
									</div>
									<button class="btn btn-primary" id="id4">View</button>
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
											<button class="btn btn-primary mb-3">4 - 4306</button>
											<button class="btn btn-secondary mb-3">3 - 4306</button>
											<button class="btn btn-warning mb-3">2 - 4306</button>
											<button class="btn btn-danger mb-3">1 - 4306</button>
										</div>
									</div>
								</div>
							</div>
						</div>
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
						<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
							<p class="h3" style="margin-top:10%;"><p>
							<div class="card flex-fill w-100">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0">Linux OS</h5>
										<h6 class="card-title mb-0">26/03/2022</h6>
									</div>
									<!-- <button type="button" class="btn btn-primary" onclick="form()">View</button> -->
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
											<button class="btn btn-primary mb-3">4 - 4306</button>
											<button class="btn btn-secondary mb-3">3 - 4306</button>
											<button class="btn btn-warning mb-3">2 - 4306</button>
											<button class="btn btn-danger mb-3">1 - 4306</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
							document.addEventListener("DOMContentLoaded", function() {
								// Pie chart
								new Chart(document.getElementById("chartjs-dashboard-pie2"), {
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
						<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
							<p class="h3" style="margin-top:10%;"><p>
							<div class="card flex-fill w-100">
								<div class="card-header d-flex justify-content-between">
									<div>
										<h5 class="card-title mb-0">Python Programming</h5>
										<h6 class="card-title mb-0">26/03/2022</h6>
									</div>
									<!-- <button type="button" class="btn btn-primary" onclick="form()">View</button> -->
									<button class="btn btn-primary" id="id4">View</button>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie3"></canvas>
											</div>
										</div>
										<div class="text-center">
											<button class="btn btn-success mb-3">5 - 4306</button>
											<button class="btn btn-primary mb-3">4 - 4306</button>
											<button class="btn btn-secondary mb-3">3 - 4306</button>
											<button class="btn btn-warning mb-3">2 - 4306</button>
											<button class="btn btn-danger mb-3">1 - 4306</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<script>
							document.addEventListener("DOMContentLoaded", function() {
								// Pie chart
								new Chart(document.getElementById("chartjs-dashboard-pie3"), {
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
						xhr.open("GET", "calendar.php/?date=" , true);
						xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhr.send(mydate);
					}
					postSend();

					$.get("./calendar.php", 
						{
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
