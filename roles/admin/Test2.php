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
                <ul id="charts-nav" class="collapse" style="list-style-type:none;">
					<li class="sidebar-item active">
						<a class="sidebar-link active" href="civil_department.php">
							<span class="align-middle">Civil Dept. </span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="mech_department_a.php">
							<span class="align-middle">Mechanical Dept. (Aided)</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link active" href="mech_department_u.php">
							<span class="align-middle">Mechanical Dept. (Un-Aided)</span>
						</a>
					</li>
					<li>
						<a class="sidebar-link" href="elec_department.php">
							<span class="align-middle">Electrical Dept.</span>
						</a>
					</li>
					<li>
						<a class="sidebar-link" href="dep_feedback2.php">
							<span class="align-middle">Computer Dept.</span>
						</a>
					</li>
					<li>
						<a class="sidebar-link" href="etc_department_a.php">
							<span class="align-middle">E&TC Dept. (Aided)</span>
						</a>
					</li>
					<li>
						<a class="sidebar-link" href="etc_department_u.php">
							<span class="align-middle">E&TC Dept. (Un-Aided)</span>
						</a>
					</li>
				</ul>
                </li>

                
                
                
				<li class="sidebar-header">
					Forms
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="create_form.php">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Form</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="view_form.php">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">View Forms</span>
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
            </ul>
            </div>
        </nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			<div>
				<h1 class="h3 mb-0"><strong>Feedback | Civil Department</strong></h1>
			</div>
			<?php
				include "notification.php";
			?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle" id="name">Civil Department</h1>
					</div>
          <div class="d-flex">
            <button class="btn btn-primary me-3" id="first-tab">1st Year</button>
            <button class="btn btn-primary me-3" id="second-tab">2nd Year</button>
            <button class="btn btn-primary me-3" id="third-tab">3rd Year</button>
            <select name="type" id="type" class="form-select me-3" style="max-width:9%;">
              <option value="pie" class="selected">Pie Graph</option>
              <option value="bar">Bar Graph</option>
              <option value="list">List Type</option>
            </select>
          </div>
          <hr>
					</ul>
					<div class="tab-content" id="myTabContent">
            <div id="first">
              <div class="row mt-3">
                <div id="pie1">
                  <div class="row">
                    <div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
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
                <div id="bar1">
                  <div class="row">
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
                          <canvas id="barChart1" style="max-height: 800px;"></canvas>
                          <script>
                            document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#barChart1'), {
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
                <div id="list1">
                    <div class="row mt-3">
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
              </div>
            </div>
            <div id="second">
              <div class="row mt-3">
                <div id="pie2">
                  <div class="row">
                    <div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
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
                <div id="bar2">
                  <div class="row">
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
                          <canvas id="barChart1" style="max-height: 800px;"></canvas>
                          <script>
                            document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#barChart1'), {
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
                <div id="list2">
                    <div class="row mt-3">
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
              </div>
            </div>
            <div id="third">
              <div class="row mt-3">
                <div id="pie3">
                  <div class="row">
                    <div class="col-12 col-md-6 col-xxl-3 order-1 order-xxl-1">
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
                <div id="bar3">
                  <div class="row">
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
                          <canvas id="barChart1" style="max-height: 800px;"></canvas>
                          <script>
                            document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#barChart1'), {
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
                <div id="list3">
                    <div class="row mt-3">
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
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  	<script src="assets/js/main.js"></script>
	<script src="js/app.js"></script>
	<script>
        first1 = document.getElementById("first-tab");
        second1 = document.getElementById("second-tab");
        third1 = document.getElementById("third-tab");

        first = document.getElementById("first");
        second = document.getElementById("second");
        third = document.getElementById("third");

        pie1 = document.getElementById("pie1");
        bar1 = document.getElementById("bar1");
        list1 = document.getElementById("list1");

        pie2 = document.getElementById("pie2");
        bar2 = document.getElementById("bar2");
        list2 = document.getElementById("list2");

        pie3 = document.getElementById("pie3");
        bar3 = document.getElementById("bar3");
        list3 = document.getElementById("list3");

        const name = document.getElementById("name");

        first.style.display = "block";
        second.style.display = "none";
        third.style.display = "none";
        
        pie1.style.display = "block";
        bar1.style.display = "none";
        list1.style.display = "none";

        type.addEventListener("change", function(){
          if(type.value === 'pie'){
            pie1.style.display = "block";
            bar1.style.display = "none";
            list1.style.display = "none";
          }
          if(type.value === 'bar'){
            pie1.style.display = "none";
            bar1.style.display = "block";
            list1.style.display = "none";
          }
          if(type.value === 'list'){
            pie1.style.display = "none";
            bar1.style.display = "none";
            list1.style.display = "block";
          }
        });

        name.innerHTML = "First Year | Bar Graph";

        first1.onclick = function() {
          first.style.display = "block";
          second.style.display = "none";
          third.style.display = "none";
          
          pie1.style.display = "block";
          bar1.style.display = "none";
          list1.style.display = "none";

          pie2.style.display = "none";
          bar2.style.display = "none";
          list2.style.display = "none";

          pie3.style.display = "none";
          bar3.style.display = "none";
          list3.style.display = "none";

          name.innerHTML = "First Year | Pie Graph";

          if(type.value === 'pie'){
            pie1.style.display = "block";
            bar1.style.display = "none";
            list1.style.display = "none";
            name.innerHTML = "First Year | Pie Graph";
          }
          if(type.value === 'bar'){
            pie1.style.display = "none";
            bar1.style.display = "block";
            list1.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
          }
          if(type.value === 'list'){
            pie1.style.display = "none";
            bar1.style.display = "none";
            list1.style.display = "block";
            name.innerHTML = "First Year | List Type";
          }

          type.addEventListener("change", function(){
            if(type.value === 'pie'){
              pie1.style.display = "block";
              bar1.style.display = "none";
              list1.style.display = "none";
              name.innerHTML = "First Year | Pie Graph";

            }
            if(type.value === 'bar'){
              pie1.style.display = "none";
              bar1.style.display = "block";
              list1.style.display = "none";
              name.innerHTML = "First Year | Bar Graph";
            }
            if(type.value === 'list'){
              pie1.style.display = "none";
              bar1.style.display = "none";
              list1.style.display = "block";
              name.innerHTML = "First Year | List Type";
            }
          });
        }
        second1.onclick = function() {
          first.style.display = "none";
          second.style.display = "block";
          third.style.display = "none";
          
          pie1.style.display = "none";
          bar1.style.display = "none";
          list1.style.display = "none";

          pie2.style.display = "block";
          bar2.style.display = "none";
          list2.style.display = "none";

          pie3.style.display = "none";
          bar3.style.display = "none";
          list3.style.display = "none";

          name.innerHTML = "Second Year | Pie Graph";

          if(type.value === 'pie'){
            pie2.style.display = "block";
            bar2.style.display = "none";
            list2.style.display = "none";
            name.innerHTML = "Second Year | Pie Graph";
          }
          if(type.value === 'bar'){
            pie2.style.display = "none";
            bar2.style.display = "block";
            list2.style.display = "none";
            name.innerHTML = "Second Year | Bar Graph";
          }
          if(type.value === 'list'){
            pie2.style.display = "none";
            bar2.style.display = "none";
            list2.style.display = "block";
            name.innerHTML = "Second Year | List Type";
          }

          type.addEventListener("change", function(){
            if(type.value === 'pie'){
              pie2.style.display = "block";
              bar2.style.display = "none";
              list2.style.display = "none";
              name.innerHTML = "Second Year | Pie Graph";
            }
            if(type.value === 'bar'){
              pie2.style.display = "none";
              bar2.style.display = "block";
              list2.style.display = "none";
              name.innerHTML = "Second Year | Bar Graph";
            }
            if(type.value === 'list'){
              pie2.style.display = "none";
              bar2.style.display = "none";
              list2.style.display = "block";
              name.innerHTML = "Second Year | List Type";
            }
          });
        }
        third1.onclick = function() {
          first.style.display = "none";
          second.style.display = "none";
          third.style.display = "block";
          
          pie1.style.display = "none";
          bar1.style.display = "none";
          list1.style.display = "none";

          pie2.style.display = "none";
          bar2.style.display = "none";
          list2.style.display = "none";

          pie3.style.display = "block";
          bar3.style.display = "none";
          list3.style.display = "none";

          name.innerHTML = "Third Year | Pie Graph";

          if(type.value === 'pie'){
            pie3.style.display = "block";
            bar3.style.display = "none";
            list3.style.display = "none";
            name.innerHTML = "Third Year | Pie Graph";
          }
          if(type.value === 'bar'){
            pie3.style.display = "none";
            bar3.style.display = "block";
            list3.style.display = "none";
            name.innerHTML = "Third Year | Bar Graph";
          }
          if(type.value === 'list'){
            pie3.style.display = "none";
            bar3.style.display = "none";
            list3.style.display = "block";
            name.innerHTML = "Third Year | List Type";
          }

          type.addEventListener("change", function(){
            if(type.value === 'pie'){
              pie3.style.display = "block";
              bar3.style.display = "none";
              list3.style.display = "none";
              name.innerHTML = "Third Year | Pie Graph";
            }
            if(type.value === 'bar'){
              pie3.style.display = "none";
              bar3.style.display = "block";
              list3.style.display = "none";
              name.innerHTML = "Third Year | Bar Graph";
            }
            if(type.value === 'list'){
              pie3.style.display = "none";
              bar3.style.display = "none";
              list3.style.display = "block";
              name.innerHTML = "Third Year | List Type";
            }
          });
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