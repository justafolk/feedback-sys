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
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">CWIT</span>
                </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="dep_feedback.php">
                    <i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle">Feedbacks</span>
                </a>
                </li> -->
                <li class="sidebar-item">
                <a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span>Feedbacks</span>
                </a>
                <ul id="charts-nav" class="" style="list-style-type:none;">
                    <li class="sidebar-item">
                    <a class="sidebar-link" href="dep_feedback2.php">
                        <span class="align-middle">Computer Department</span>
                    </a>
                    </li>
                    <li class="sidebar-item active">
                    <a class="sidebar-link" href="electircal.php">
                        <span class="align-middle">Electrical Department</span>
                    </a>
                    </li>
                    <li>
                    <a class="sidebar-link" href="dep_feedback.php">
                        <span class="align-middle">Civil Department</span>
                    </a>
                    </li>
                </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="notification1.php">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Notifications</span>
                    </a>
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="student.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Student Info</span>
                </a>
                </li>
                
                

                <li class="sidebar-header">
                    Profiles
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="pages-profile.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Account</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="form.php">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="profiles.php">
                    <i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">All Profiles</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="add_profile.php">
                    <i class="align-middle me-2" data-feather="user-plus"></i> <span class="align-middle">Add User</span>
                    </a>
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="remove_profile.php">
                    <i class="align-middle me-2" data-feather="user-x"></i><span class="align-middle">Remove User</span>
                </a>
                </li>

                <!-- <li class="sidebar-header">
                    Plugins & Addons
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                    </a>
                </li> -->
            </ul>
            </div>
        </nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			<div>
				<h1 class="h3 mb-0"><strong>Feedback | Electrical Department</strong></h1>
			</div>
			<?php
				include "notification.php";
			?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle" id="name">Electrical Department</h1>
					</div>
						<button class="btn btn-primary me-3" id="home-tab">1st Year</button>
						<button class="btn btn-primary me-3" id="list-tab">2nd Year</button>
						<button class="btn btn-primary me-3" id="list2-tab">3rd Year</button>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-3" id="b1">Bar Graph</button>
                                        <button class="btn btn-primary me-3" id="b2">Pie Graph</button>
                                        <button class="btn btn-primary me-3" id="b3">List Form</button>
                                    </div>
								</div>
								<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
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
											<button class="btn btn-primary" id="id5">View</button>
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
						<div id="profile">
                            <div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-3" id="b4">Bar Graph</button>
                                        <button class="btn btn-primary me-3" id="b5">Pie Graph</button>
                                        <button class="btn btn-primary me-3" id="b6">List Form</button>
                                    </div>
								</div>
								<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
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
								<div class="col-12 col-md-6 col-xxl-3 order-2 order-xxl-2">
									<div class="card flex-fill w-100">
										<div class="card-header d-flex justify-content-between">
											<div>
												<h5 class="card-title mb-0">PHP - Course Exits Survey</h5>
												<h6 class="card-title mb-0">26/03/2022</h6>
											</div>
											<button class="btn btn-primary" id="id5">View</button>
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
						<div id="list">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
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
												<td>PHP</td>
												<td>Otto</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button class="btn btn-primary" id="id1">View</button></td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button class="btn btn-primary" id="id2">View</button></td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Larry</td>
												<td>the Bird</td>
												<td>@twitter</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button class="btn btn-primary" id="id3">View</button></td>
											</tr>
										</tbody>
									</table>
								</div>				
							</div>
                        </div>

                        <div id="list1">
                            <div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-3" id="b7">Bar Graph</button>
                                        <button class="btn btn-primary me-3" id="b8">Pie Graph</button>
                                        <button class="btn btn-primary me-3" id="b9">List Form</button>
                                    </div>
								</div>
								<div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
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
														<canvas id="chartjs-dashboard-pie4"></canvas>
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
											<button class="btn btn-primary" id="id5">View</button>
										</div>
										<div class="card-body d-flex">
											<div class="align-self-center w-100">
												<div class="py-3">
													<div class="chart chart-xs">
														<canvas id="chartjs-dashboard-pie5"></canvas>
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

						<div id="profile1">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-3" onclick="show1()" >Bar Graph</button>
                                        <button class="btn btn-primary me-3" onclick="show2()" >Pie Graph</button>
                                        <button class="btn btn-primary me-3" onclick="show3()" >List Form</button>
                                    </div>
								</div>
								<div class="col-12 col-md-12 col-xxl-6 order-1 order-xxl-1">
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
								<div class="col-12 col-md-6 col-xxl-6 order-2 order-xxl-2">
									<div class="card flex-fill w-100">
										<div class="card-header d-flex justify-content-between">
											<div>
												<h5 class="card-title mb-0">PHP - Course Exits Survey</h5>
												<h6 class="card-title mb-0">26/03/2022</h6>
											</div>
											<button class="btn btn-primary" id="id5">View</button>
										</div>
										<div class="card">
											<div class="card-body">
											<div id="barChart1" style="min-height: 400px;" class="echart"></div>

											<script>
												document.addEventListener("DOMContentLoaded", () => {
												echarts.init(document.querySelector("#barChart1")).setOption({
													xAxis: {
													type: 'category',
													data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
													},
													yAxis: {
													type: 'value'
													},
													series: [{
													data: [120, 200, 150, 80, 70, 110, 130],
													type: 'bar'
													}]
												});
												});
											</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="profile2">
							<div class="row">
								<div class="row	">
									<div class="col-sm-10 col-md-8 col-lg-6 mx-auto h-100 mt-4">
										<button class="btn btn-primary mb-4	" onclick="back1();">Back</button>
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
						</div>

						<!-- <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
							<div class="container d-flex flex-column">
								<div class="row vh-100">
									<div class="col-sm-10 col-md-8 col-lg-6 mx-auto h-100 mt-4">
										<div class="align-middle">

											<div class="text-center mt-4">
												<h1 class="h2">New Profile</h1>
												<p class="lead">
													Create a New Profile
												</p>
											</div>

											<div class="card">
												<div class="card-body">
													<div class="m-sm-4">
														<form action="" method="post">
															<div class="mb-3">
																<label for="inputFirstName" class="form-label">Name</label>
																<input type="text" class="form-control  form-control-lg" id="inputFirstName" name="firstname" required />										
															</div>
															<div class="mb-3">
																<label class="form-label">Email</label>
																<input class="form-control form-control-lg" type="email" name="email" required />
															</div>
															<div class="mb-3">
																<label class="form-label">Phone No</label>
																<input class="form-control form-control-lg" type="text" name="phone_no" placeholder="Enter your phone no" pattern="[7-9]{1}[0-9]{9}" required />
															</div>
															<div class="mb-3">
																<label for="formFileMultiple"class="form-label">Upload Images</label>
																<input type="file" id="formFileMultiple" class="form-control form-control-lg" name="images" />
															</div>
															<div class="mb-3">
																<label class="form-label">Position</label>
																<select id="inputState" class="form-control form-control-lg" name="position" required>
																	<option selected>Choose Position</option>
																	<option>Teacher</option>
																	<option>I/C H.O.D</option>
																	<option>H.O.D</option>
																</select>
															</div>
															<div class="mb-3">
																<label class="form-label">Department</label>
																<select id="inputState" class="form-control form-control-lg" name="position" required>
																	<option selected>Choose Department</option>
																	<option>Computer Department</option>
																	<option>Electrical Department</option>
																	<option>Civil Department</option>
																	<option>E&TC Department</option>
																	<option>Mechanical Department</option>
																</select>
															</div>
															<div class="mb-3">
																<label class="form-label">Username</label>
																<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter username" required>
															</div>
															<div class="mb-3">
																<label class="form-label">Password</label>
																<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required>
															</div>
															<div class="text-center mb-3">
																<button type="button" name="submit" value="submit" class="btn btn-lg btn-primary">Sign up</a>
															</div>
														</form>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div> -->

					</div>
				</div>
			</main>
			<?php
				include "footer.php";
			?>
		</div>
	</div>
    <!-- <script src="assets/vendor/chart.js/chart.min.js"></script>
	<script src="assets/vendor/echarts/echarts.min.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  	<script src="assets/js/main.js"></script>
	<script src="js/app.js"></script> -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  	<script src="assets/js/main.js"></script>
	<script src="js/app.js"></script>
	<script src="assets/vendor/chart.js/chart.min.js"></script>
  	<!-- <script src="assets/vendor/echarts/echarts.min.js"></script> -->

	<!-- <script>
		document.getElementById("profile1").style.display = "none";
		var id1 = document.getElementById("id1");
		var profile1 = document.getElementById("profile1")
		id1.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id2.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id3.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id4.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("home").style.display = "none";
		}
		id5.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("home").style.display = "none";
		}
		function back(){
			document.getElementById("profile1").style.display = 'none';
			document.getElementById("home").style.display = "block";
		}
		function back1(){
			document.getElementById("profile1").style.display = 'none';
			document.getElementById("list").style.display = "block";
		}
	</script> -->
    <script>
        first1 = document.getElementById("home-tab");
        second1 = document.getElementById("list-tab");
        third1 = document.getElementById("list2-tab");
        first = document.getElementById("home");
        second = document.getElementById("profile");
        profile1 = document.getElementById("profile1");
        profile2 = document.getElementById("profile2");
        list = document.getElementById("list");
        third = document.getElementById("list1");
        const name = document.getElementById("name");
        // let b = ["b1","b2","b3","b4","b5","b6","b7","b8","b9"];
        // for (let i = 0; i < 3; i++) {
        //     b[i] = document.getElementById(b[i]);
        //     console.log(b[i]);
        // } 
        name.innerHTML = "First Year";

        first.style.display = "block";
        second.style.display = "none";
        third.style.display = "none";

        list.style.display = "none";
        profile1.style.display = "none";
        profile2.style.display = "none";

        first.style.display = "block";
        second.style.display = "none";
        list.style.display = "none";
        name.innerHTML = "First Year | Bar Graph";
        b1.onclick = function() {
            first.style.display = "block";
            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
        }
        b2.onclick = function() {
            first.style.display = "none";
            profile1.style.display = "block";
            list.style.display = "none";
            name.innerHTML = "First Year | Pie Graph";
        }
        b3.onclick = function() {
            first.style.display = "none";
            profile1.style.display = "none";
            list.style.display = "block";
            name.innerHTML = "First Year | List Form";
        }
        first1.onclick = function() {
            first.style.display = "block";
            second.style.display = "none";
            third.style.display = "none";
            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
            b1.onclick = function() {
                first.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "First Year | Bar Graph";
            }
            b2.onclick = function() {
                first.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "First Year | Pie Graph";
            }
            b3.onclick = function() {
                first.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "First Year | List Form";
            }
        }

        second1.onclick = function() {
            first.style.display = "none";
            second.style.display = "block";
            third.style.display = "none";

            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "Second Year | Bar Graph";
            b4.onclick = function() {
                second.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "Second Year | Bar Graph";
            }
            b5.onclick = function() {
                second.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "Second Year | Pie Graph";
            }
            b6.onclick = function() {
                second.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "Second Year | List Form";
            }
        }
        third1.onclick = function() {
            first.style.display = "none";
            second.style.display = "none";
            third.style.display = "block";

            profile1.style.display = "none";
            list.style.display = "none";

            name.innerHTML = "Third Year | Bar Graph";
            b7.onclick = function() {
                third.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "Third Year | Bar Graph";
            }
            b8.onclick = function() {
                third.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "Third Year | Pie Graph";
            }
            b9.onclick = function() {
                third.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "Third Year | List Form";
            }
        }

        function show1(){
            first.style.display = "block";
            second.style.display = "none";
            third.style.display = "none";

            list.style.display = "none";
            profile1.style.display = "none";
            profile2.style.display = "none";

        }
        function show2(){
            first.style.display = "none";
            second.style.display = "none";
            third.style.display = "none";

            list.style.display = "none";
            profile1.style.display = "none";
            profile2.style.display = "block";

            first.style.display = "block";
            second.style.display = "none";
            list.style.display = "none";
        }
        function show3(){
            first.style.display = "none";
            second.style.display = "none";
            third.style.display = "none";

            list.style.display = "block";
            profile1.style.display = "none";
            profile2.style.display = "none";

            first.style.display = "none";
            second.style.display = "none";
        }
    </script>
	<script>
        <?php
        for($i=1;$i<6;$i++){
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