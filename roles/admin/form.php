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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Add Profile</title>

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
			include 'confirm.php';
		?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Form</strong></h1>
				</div>
				<?php
					include 'notification.php';
				?>
	</nav>
	<main class="d-flex w-200">
		<div class="container d-flex flex-column">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-8 mx-auto h-100 mt-4">
					<div class="align-middle">
						<div class="card">
							<div class="card-body">
								<div class="">
                                    <div class="mb-4">
										<label class="mb-2">Roll No.</label>
                                        <select id="inputState" class="form-control form-control-lg" name="position" required>
                                            <option selected>Select Roll No</option>
                                            <option>194001</option>
                                            <option>194002</option>
                                            <option>194003</option>
                                            <option>194004</option>
                                            <option>194005</option>
                                            <option>194006</option>
                                            <option>194007</option>
                                            <option>194008</option>
                                            <option>194009</option>
                                            <option>194010</option>
                                            <option>194011</option>
                                            <option>194012</option>
                                            <option>194013</option>
                                            <option>194014</option>
                                            <option>194015</option>
                                        </select>										
                                    </div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="">
									<div class="mb-1">
										<h5 class="mb-4 card-title">Q1. Enter Your name </h5>
										<div class="table-wrapper-scroll-y my-custom-scrollbar">
											<table class="table">
												<tbody>
												<tr>
													<td>Brandon Jacob</td>
												</tr>
												<tr>
													<td>Bridie Kessler</td>
												</tr>
												<tr>
													<td>Ashleigh Langosh</td>
												</tr>
												<tr>
													<td>Angus Grady</td>
												</tr>
												<tr>
													<td>Raheem Lehner</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="">
									<div class="mb-1">
										<h5 class="mb-4 card-title">Q2. Enter Your Age </h5>
										<div class="table-wrapper-scroll-y my-custom-scrollbar">
											<table class="table">
												<tbody>
													<tr>
														<td>1</td>
													</tr>
													<tr>
														<td>2</td>
													</tr>
													<tr>
														<td>3</td>
													</tr>
													<tr>
														<td>4</td>
													</tr>
													<tr>
														<td>5</td>
													</tr>
													<tr>
														<td>6</td>
													</tr>

													<tr>
														<td>7</td>
													</tr>
													<tr>
														<td>8</td>
													</tr>
													<tr>
														<td>9</td>
													</tr>
													<tr>
														<td>10</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="">
									<div class="mb-1">
										<h5 class="mb-4 card-title">Q3. Enter Your email </h5>
										<div class="table-wrapper-scroll-y my-custom-scrollbar">
											<table class="table">
												<tbody>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>	
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
													<tr>
														<td>mayur.194029@gmail.com</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
							<h5 class="card-title mb-4">Q4. Overall Experience</h5>

							<!-- Pie Chart -->
							<canvas id="pieChart" style="max-height: 400px;"></canvas>
							<script>
								document.addEventListener("DOMContentLoaded", () => {
								new Chart(document.querySelector('#pieChart'), {
									type: 'pie',
									data: {
									labels: [
										'Red',
										'Blue',
										'Yellow'
									],
									datasets: [{
										label: 'My First Dataset',
										data: [300, 50, 100],
										backgroundColor: [
										'rgb(255, 99, 132)',
										'rgb(54, 162, 235)',
										'rgb(255, 205, 86)'
										],
										hoverOffset: 4
									}]
									}
								});
								});
							</script>
							<!-- End Pie CHart -->

							</div>
						</div>
						<div class="card">
							<div class="card-body">
							<h5 class="card-title mb-4">Q5. Multiple Choice Questions</h5>

							<!-- Polar Area Chart -->
							<canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
							<script>
								document.addEventListener("DOMContentLoaded", () => {
								new Chart(document.querySelector('#polarAreaChart'), {
									type: 'polarArea',
									data: {
									labels: [
										'Red',
										'Green',
										'Yellow',
										'Grey',
										'Blue'
									],
									datasets: [{
										label: 'My First Dataset',
										data: [11, 16, 7, 3, 14],
										backgroundColor: [
										'rgb(255, 99, 132)',
										'rgb(75, 192, 192)',
										'rgb(255, 205, 86)',
										'rgb(201, 203, 207)',
										'rgb(54, 162, 235)'
										]
									}]
									}
								});
								});
							</script>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
							<h5 class="card-title mb-4">Q6. Choice Question</h5>

							<!-- Pie Chart -->
							<div id="pieChart1"></div>

							<script>
								document.addEventListener("DOMContentLoaded", () => {
								new ApexCharts(document.querySelector("#pieChart1"), {
									series: [44, 55, 13, 43, 22],
									chart: {
									height: 350,
									type: 'pie',
									toolbar: {
										show: true
									}
									},
									labels: ['Ans. 1', 'Ans. 2', 'Ans. 3', 'Ans. 4', 'Ans. 5']
								}).render();
								});
							</script>
							<!-- End Pie Chart -->

							</div>
						</div>
						<div class="card">
							<div class="card-body">
							<h5 class="card-title mb-4">Q7. Multiple Choice Question</h5>

							<div id="polarAreaChart1"></div>

							<script>
								document.addEventListener("DOMContentLoaded", () => {
								new ApexCharts(document.querySelector("#polarAreaChart1"), {
									series: [14, 23, 21, 17, 15, 10, 12, 17, 21],
									chart: {
									type: 'polarArea',
									height: 350,
									toolbar: {
										show: true
									}
									},
									stroke: {
									colors: ['#fff']
									},
									fill: {
									opacity: 0.8
									}
								}).render();
								});
							</script>
							<!-- End Polar Area Chart -->

							</div>
						</div>
						<div class="card">
							<div class="card-body">
							<h5 class="card-title mb-4">Q8. Normal Radio Button Ans.</h5>

							<!-- Radial Bar Chart -->
							<div id="radialBarChart"></div>

							<script>
								document.addEventListener("DOMContentLoaded", () => {
								new ApexCharts(document.querySelector("#radialBarChart"), {
									series: [44, 55, 67, 83],
									chart: {
									height: 350,
									type: 'radialBar',
									toolbar: {
										show: true
									}
									},
									plotOptions: {
									radialBar: {
										dataLabels: {
										name: {
											fontSize: '22px',
										},
										value: {
											fontSize: '16px',
										},
										total: {
											show: true,
											label: 'Total',
											formatter: function(w) {
											return 249
											}
										}
										}
									}
									},
									labels: ['Male', 'Female', 'Ans. 3', 'Ans. 4'],
								}).render();
								});
							</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php
		include 'footer.php';
	?>
</div>
	<script src="js/app.js"></script>
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  	<script src="assets/js/main.js"></script>
</body>

</html>