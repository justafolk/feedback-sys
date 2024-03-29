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
	<link rel="shortcut icon" href="../../assets/img/logo.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Add Profile</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php
			require_once "../../imports/config.php";
		?>
		<div class="main">
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto h-100 mt-4">
					<div class="align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Profile</h1>
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
											<input type="text" class="form-control  form-control-lg" id="inputFirstName" name="name" required />										
										</div>
										<!-- <div class="mb-3 d-flex">
											<label class="form-label">Gender: </label>
											<div class="form-check mx-2">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">
													Male
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
												<label class="form-check-label" for="flexRadioDefault1">
													Female
												</label>
											</div>
										</div> -->
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter username" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required>
										</div>
										<div class="text-center mb-3">
											<button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">Add User</a>
										</div>
									</form>
									<?php
										if (isset($_POST['submit'])) {
											$name = $_POST["name"];
											$username = $_POST["username"];
											$password = $_POST["password"];
											function createuser($conn, $name, $username, $password){
												require_once "../../imports/config.php";
												$sql = "SELECT * FROM login WHERE uname = '$username'";
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0) {
													echo "<script>alert('Username already exists');</script>";
												}
												else{
													$password1 = md5($password);
													$sql = "INSERT INTO login(uname, passwd, role, name, flog) VALUES('$username', '$password1','Faculty', '$name', 0);";
													$smt = mysqli_stmt_init($conn);
													if(!mysqli_stmt_prepare($smt, $sql)){
														$error .= "Error in STMT";
														exit();
													}
													mysqli_stmt_execute($smt);
													mysqli_stmt_close($smt);
													echo "<script>alert('User Created Successfully');</script>";
													echo "<script>window.location.href = '../../index.php';</script>";
												}
											}
											createuser($conn, $name, $username, $password);
										}
									?>
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
