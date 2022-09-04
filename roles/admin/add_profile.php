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
</head>

<body>
	<div class="wrapper">
		<?php
			session_start();
			include 'sidebar.php';
			require_once "../../imports/config.php";
		?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>New Profile</strong></h1>
				</div>
				<?php
					include 'notification.php';
				?>
			</nav>
	<main class="d-flex w-100">
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
											<?php echo $sql1; ?>
											<label for="inputFirstName" class="form-label">Name</label>
											<input type="text" class="form-control  form-control-lg" id="inputFirstName" name="name" required />										
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Phone No</label>
											<input class="form-control form-control-lg" type="text" name="phone_no" placeholder="Enter your phone no"  required />
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
											<label class="form-label">Department</label>
											<select id="inputState" class="form-control form-control-lg" name="department" required>
												<option>Select Department</option>
												<?php
													$sql = "select * from departments";
													$result = mysqli_query($conn, $sql);
													while ($row = mysqli_fetch_assoc($result)) {
														echo "<option value='" . $row["dept_name"] . "'>" . $row["dept_name"]."-".$row["dept_id"]."</option>";
													}
												?>
											</select>
											<!-- <input class="form-control form-control-lg" type="text" name="department" placeholder="Select Department" required> -->
										</div>
										<div class="mb-3">
											<label class="form-label">Course Code</label>
											<input class="form-control form-control-lg" type="text" name="course" placeholder="Enter Course code" required>
											<p class="text-right"><small>Enter , for multiple course codes</small></p>

										</div>
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter username" required>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required>
										</div>
										<div class="text-center mb-3">
											<button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">Sign up</a>
										</div>
									</form>
									<?php
										if (isset($_POST['submit'])) {
											$name = $_POST["name"];
											$email = $_POST["email"];
											$phone_no = $_POST["phone_no"];
											$department = $_POST["department"];
											$course = $_POST["course"];
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
													$sql = "INSERT INTO login(uname, passwd, role, name) VALUES('$username', '$password1','Faculty', '$name');";
													$smt = mysqli_stmt_init($conn);
													if(!mysqli_stmt_prepare($smt, $sql)){
														$error .= "Error in STMT";
														exit();
													}
													mysqli_stmt_execute($smt);
													mysqli_stmt_close($smt);
													$error .= "User Created Successfully";
													return $error;
												}
											}
											function createteacher($conn, $name, $email, $phone_no, $department, $course, $username, $password){
												require_once "../../imports/config.php";
												$data = array();
												$check = 0;
												$j=0;
												$sql = "SELECT course FROM teacher";
												$result = mysqli_query($conn, $sql);
												while ($row = mysqli_fetch_assoc($result)) {
													$data[$j] = $row;
													$j++;
												}
												if(str_contains($course,",")){
													$courses = explode(",", $course);
												}
												else{
													$courses[] = $course;
												}
												for($i=0;$i<$j;$i++){
													$data1 = explode(",", $data[$i]["course"]);
													for($a=0;$a<count($data1);$a++){
														for($b=0;$b<count($courses);$b++){
															if($data1[$a] == $courses[$b]){
																$check = 1;
																break;
															}
														}
													}
												}
												$sql = "SELECT * FROM login WHERE uname = '$username'";
												$result = mysqli_query($conn, $sql);
												if (mysqli_num_rows($result) > 0) {
													echo "<script>alert('Username already exists');</script>";
												}
												elseif ($check == 1) {
													echo "<script>alert('Course code already exists');</script>";
												}

												else{
													$sql = createuser($conn, $name, $username, $password);
													$result = mysqli_query($conn, $sql);
													$sql = "INSERT INTO teacher(name, email, phone_no, department, course) VALUES('$name', '$email', '$phone_no', '$department', '$course');";
													$result = mysqli_query($conn, $sql);
													return $result;
												}
										}
											
											$sql1 =  createteacher($conn, $name, $email, $phone_no, $department, $course, $username, $password);
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
