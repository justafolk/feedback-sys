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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Profile</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index.html">
	<span class="align-middle">Personal</span>
	</a>	

			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Pages
				</li>

				<li class="sidebar-item active">
					<a class="sidebar-link" href="index.php">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
					</a>
				</li>

				<!-- <li class="sidebar-item">
				<a class="sidebar-link" href="dep_feedback.php">
					<i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle"></span>
				</a>
				</li> -->
				<li class="sidebar-item">
				<a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
					<i class="align-middle" data-feather="bar-chart-2"></i> <span>IDK</span>
				</a>
				<ul id="charts-nav" class="collapse" style="list-style-type:none;">
					<li class="sidebar-item">
					<a class="sidebar-link" href="civil_department.php">
						<span class="align-middle">Civil Dept. </span>
					</a>
					</li>
					<li class="sidebar-item">
					<a class="sidebar-link" href="mech_department_a.php">
						<span class="align-middle">Mechanical Dept. (Aided)</span>
					</a>
					</li>
					<li class="sidebar-item">
					<a class="sidebar-link" href="mech_department_u.php">
						<span class="align-middle">Mechanical Dept. (Un-Aided)</span>
					</a>
					</li>
					<li class="sidebar-item">
					<a class="sidebar-link" href="elec_department.php">
						<span class="align-middle">Electrical Dept.</span>
					</a>
					</li>
					<li>
					<a class="sidebar-link" href="dep_feedback2.php">
						<span class="align-middle">Computer Dept.</span>
					</a>
					</li>
					<li class="sidebar-item">
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

				<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="notification1.php">
					<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Notifications</span>
					</a>
				</li> -->

				<li class="sidebar-item">
				<a class="sidebar-link" href="change_pass.php">
					<i class="align-middle" data-feather="book"></i> <span class="align-middle">Change Password</span>
				</a>
				</li>

				<li class="sidebar-header">
				Forms
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="create_group.php">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Form</span>
					</a>
				</li>

				<li class="sidebar-item">
				<a class="sidebar-link" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
					<i class="align-middle" data-feather="bar-chart-2"></i> <span>View Form</span>
				</a>
				<ul id="charts-nav1" class="collapse" style="list-style-type:none;">
					<li>
					<a class="sidebar-link" href="view_form.php">
						<span class="align-middle">Computer Dept.</span>
					</a>
					</li>
					<li class="sidebar-item">
					<a class="sidebar-link" href="view_form.php">
						<span class="align-middle">Civil Dept. </span>
					</a>
					</li>
					<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="mech_department_a.php">
						<span class="align-middle">Mechanical Dept. (Aided)</span>
					</a>
					</li>
					<li class="sidebar-item">
					<a class="sidebar-link" href="mech_department_u.php">
						<span class="align-middle">Mechanical Dept. (Un-Aided)</span>
					</a>
					</li> -->
					<li class="sidebar-item">
					<a class="sidebar-link" href="view_form.php ">
						<span class="align-middle">Electrical Dept.</span>
					</a>
					</li>
					<!-- <li class="sidebar-item">
					<a class="sidebar-link" href="etc_department_a.php">
						<span class="align-middle">E&TC Dept. (Aided)</span>
					</a>
					</li>
					<li>
					<a class="sidebar-link" href="etc_department_u.php">
						<span class="align-middle">E&TC Dept. (Un-Aided)</span>
					</a>
					</li> -->
				</ul>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="other_form.php">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Other Form</span>
					</a>
				</li>

				<li class="sidebar-header">
					Profiles
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
				<h1 class="h3 mb-0"><strong>Profile</strong></h1>
			</div>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li> -->
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<?php error_reporting(0); ?>
								<img src="<?php echo "https://ui-avatars.com/api/?name=" . $_SESSION["name"] ?>" class="avatar img-fluid rounded me-1" alt="<?php echo $_SESSION["name"] ?>" /> <span class="text-dark"><?php echo $_SESSION["name"] ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>

			</nav>

			<main class="content" id="First">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
							Get more page examples
						</a>
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="img/photos/avatar7.png" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">Mayur Khadde</h5>
									<div class="text-muted mb-2">Lead Developer</div>

									<div>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Info</h5>
									<!-- <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
									<a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
									<a href="#" class="badge bg-primary me-1 my-1">Sass</a>
									<a href="#" class="badge bg-primary me-1 my-1">Angular</a>
									<a href="#" class="badge bg-primary me-1 my-1">Vue</a>
									<a href="#" class="badge bg-primary me-1 my-1">React</a>
									<a href="#" class="badge bg-primary me-1 my-1">Redux</a>
									<a href="#" class="badge bg-primary me-1 my-1">UI</a>
									<a href="#" class="badge bg-primary me-1 my-1">UX</a> -->
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<!-- <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span>  - <a href="#">Boston</a></li> -->
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Email id - <a href="#">mayur.194029@gmail.com</a></li>
										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Phone No - <a href="#">7507738781</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">Twitter</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header d-flex justify-content-between">
									<h5 class="card-title mb-0">Personal Info</h5>
									<button class="btn btn-primary" onclick="change1()">Edit</button>
									<!-- <div class="text-right">
										<button class="btn btn-primary me-md-2 float-end" type="button">Edit</button>
									</div> -->
								</div>
								<div class="card-body h-100">
									<form>
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Mayur Satish Khadde" disabled>
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Admin@123" disabled>
											<small>
												<a href="index.html">Forgot password?</a>
											</small>
										</div>
										<div class="mb-3">
											<label for="inputAddress" class="form-label">Address</label>
											<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" disabled>
										</div>
										<div class="mb-3">
											<label for="inputAddress2" class="form-label">Address 2</label>
											<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" disabled>
										</div>
										<div class="mb-3">
											<label for="inputCity" class="form-label">City</label>
											<input type="text" class="form-control" id="inputCity" placeholder="Pune" disabled>
										</div>
										<div class="justify-content-between d-flex">
											<div class="mb-3 col-6 pr-3">
												<label for="inputState" class="form-label">State</label>
												<select id="inputState" class="form-control" disabled>
													<option selected>Choose...</option>
													<option>...</option>
												</select>
											</div>
											<div class="mb-3 col-6 pl-3">
												<label for="inputZip" class="form-label">Zip</label>
												<input type="text" class="form-control" id="inputZip" disabled>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
			<main class="content" id="Second">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
							Get more page examples
						</a>
					</div>
					<div class="row">
						<div class="col-md-4 col-xl-3">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Details</h5>
								</div>
								<div class="card-body text-center">
									<img src="img/photos/avatar7.png" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
									<h5 class="card-title mb-0">Mayur Khadde</h5>
									<div class="text-muted mb-2">Lead Developer</div>

									<div>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Info</h5>
									<div>Department - Computer Department</div>
									<div>Subject - Network Administration</div>
									<div>Position - Teacher</div>
									<!-- <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
									<a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
									<a href="#" class="badge bg-primary me-1 my-1">Sass</a>
									<a href="#" class="badge bg-primary me-1 my-1">Angular</a>
									<a href="#" class="badge bg-primary me-1 my-1">Vue</a>
									<a href="#" class="badge bg-primary me-1 my-1">React</a>
									<a href="#" class="badge bg-primary me-1 my-1">Redux</a>
									<a href="#" class="badge bg-primary me-1 my-1">UI</a>
									<a href="#" class="badge bg-primary me-1 my-1">UX</a> -->
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<!-- <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span>  - <a href="#">Boston</a></li> -->
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Email id - <a href="#">mayur.194029@gmail.com</a></li>
										<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Phone No - <a href="#">7507738781</a></li>
									</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Elsewhere</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><a href="#">Twitter</a></li>
										<li class="mb-1"><a href="#">Facebook</a></li>
										<li class="mb-1"><a href="#">Instagram</a></li>
										<li class="mb-1"><a href="#">LinkedIn</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="card">
								<div class="card-header d-flex justify-content-between">
									<h5 class="card-title mb-0">Personal Info</h5>
									<button class="btn btn-primary" onclick="change2()">Edit</button>
									<!-- <div class="text-right">
										<button class="btn btn-primary me-md-2 float-end" type="button">Edit</button>
									</div> -->
								</div>
								<div class="card-body h-100">
									<form>
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Mayur Satish Khadde" />
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Admin@123" />
											<small>
												<a href="index.html">Forgot password?</a>
											</small>
										</div>
										<div class="mb-3">
											<label for="inputAddress" class="form-label">Address</label>
											<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
										</div>
										<div class="mb-3">
											<label for="inputAddress2" class="form-label">Address 2</label>
											<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
										</div>
										<div class="mb-3">
											<label for="inputCity" class="form-label">City</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="justify-content-between d-flex">
											<div class="mb-3 col-6 pr-3">
												<label for="inputState" class="form-label">State</label>
												<select id="inputState" class="form-control">
													<option selected>Choose...</option>
													<option>...</option>
												</select>
											</div>
											<div class="mb-3 col-6 pl-3">
												<label for="inputZip" class="form-label">Zip</label>
												<input type="text" class="form-control" id="inputZip">
											</div>
										</div>
										<div class="mb-3 mt-4" >
											<button class="btn btn-success">Save Changes</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script>
		document.getElementById("First").style.display = "block";
		document.getElementById("Second").style.display = "none";
	</script>
	<script>
		function change1(){
			document.getElementById("First").style.display = "none";
			document.getElementById("Second").style.display = "block";
		}
		function change2(){
			document.getElementById("First").style.display = "block";
			document.getElementById("Second").style.display = "none";
		}
	</script>
</body>

</html>