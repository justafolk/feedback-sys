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
		<?php
			include 'sidebar.html';
		?>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
			<div>
				<h1 class="h3 mb-0"><strong>Profile</strong></h1>
			</div>
				<?php
					include 'notification.php';
				?>
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
			<?php
				include 'footer.php';
			?>
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