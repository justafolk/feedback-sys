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

	<title>Students</title>

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
					<h1 class="h3 mb-0"><strong>Student Information</strong></h1>
				</div>
                <?php
                    include "notification.php";
                ?>
	        </nav>
			<main class="content">
				<div class="container-fluid p-0">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group"> 
										<!-- <ul class="nav" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="btn btn-primary me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Bar Graph</button>
											</li>
										</ul> -->
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
												<th scope="col">Batch No. </th>
												<th scope="col">Department</th>
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
												<th scope="row">2019-20</th>
												<td>Computer Department</td>
												<td>Otto</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button class="btn btn-primary" id="id1">View</button></td>
											</tr>
											<tr>
												<th scope="row">2020-21</th>
												<td>Electrical Department</td>
												<td>Thornton</td>
												<td>@fat</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td>@mdo</td>
												<td><button class="btn btn-primary" id="id2">View</button></td>
											</tr>
											<tr>
												<th scope="row">2021-22</th>
												<td>Civil Department</td>
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
		include 'footer.php';
	?>
</div>
	<script src="js/app.js"></script>

</body>

</html>