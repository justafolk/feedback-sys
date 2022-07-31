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

	<title>Remove Profile</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php
            include "sidebar.php";
        ?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Remove Profile</strong></h1>
				</div>
                <?php
                    include "notification.php";
                ?>
	        </nav>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto h-100 mt-4">
					<div class="align-middle">

						<div class="text-center mt-4">
							<h1 class="h2 mb-4">Remove Profile</h1>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="" method="post">
										<div class="mb-3">
											<label for="inputFirstName" class="form-label">Username / Email</label>
											<input type="text" class="form-control  form-control-lg" id="inputFirstName" name="firstname" placeholder="Enter Username / Email" required />										
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
											<!-- <input class="form-control form-control-lg" type="text" name="department" placeholder="Select Department" required> -->
										</div>
										<div class="mb-3">
											<label class="form-label">Enter Admin Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required>
										</div>
										<div class="text-center mb-3">
                                            <button href="remove_profile.php" type="button" name="remove" value="remove" class="btn btn-danger"><i class="align-middle me-2 mb-1" data-feather="trash-2"></i>Remove</button>
											<!-- <button type="button" name="submit" value="submit" class="btn btn-lg btn-primary">Remove</button> -->
										</div>
									</form>
								</div>
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

</body>

</html>