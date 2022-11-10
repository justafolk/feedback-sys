<!DOCTYPE html>
<html lang="en">

<?php

session_start();
if ($_SESSION['role'] != 'Student') {
	echo "<script>alert('Invalid Session, please login again');</script>";
	echo "<script>window.location.href='../../index.php';</script>";
}else{
	include '../../imports/config.php';
	error_reporting(0);
	//echo "<script>alert(".$_SESSION['uname'].");</script>";
	$sqllog = "Select flog from login where uname = '".$_SESSION['uname']."'";
	$resultlog = mysqli_query($conn, $sqllog);
	$rowlog = mysqli_fetch_assoc($resultlog);
	if($rowlog['flog'] == 1){
		echo "<script>alert('Please change your password');</script>";
		echo "<script>window.location.href='changepassimp.php';</script>";
	}
}
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../../assets/img/logo.png" />


	<title>Student Index</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


	<link href="css/app.css" rel="stylesheet">

	
</head>

<body>
	<div class="wrapper">
		<?php
		include 'sidebar.php';
		?>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>My Feedback</strong></h1>
				</div>

				<?php
				include 'notification.php';
				?>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
												<?php 
													if (isset($_POST["suggestion"])){

														$sdql = "INSERT INTO suggestions (suggestion, idate, roll) VALUES('{$_POST['suggestion']}', now(), $_SESSION[uname]) ";
														$res = mysqli_query($conn, $sdql);
														if (!$res){
															echo mysqli_error($conn);
														}else{
															?> 
  <div class="alert alert-primary" role="alert">
    Suggestions submitted successfully!!!
</div>
<?php
            
}
	
													}
												?>
						<h1 class="h3 mb-3"><strong>Active</strong> Feedback Surveys: </h1>
						<div class="row">
							<?php
							include '../../imports/config.php';
							$student_login = "select * from login where uname = '".$_SESSION['uname']."'";
							$student_login_result = mysqli_query($conn, $student_login);
							$student_login_row = mysqli_fetch_assoc($student_login_result);
							$groups = explode(";", $student_login_row['student_groups']);
							$groups = array_filter($groups);
							$groups_string = "(".implode(",", $groups).")";
							$sql = "SELECT * FROM groups, forms WHERE groups.id IN $groups_string and forms.group_id = groups.id and `status` = '1'";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								
								while ($row = mysqli_fetch_assoc($result)) {
									$sql2 = "select * from courses where course_code='{$row["subject"]}'";
									$result2 = mysqli_query($conn, $sql2);
									$row2 = mysqli_fetch_assoc($result2);
							?>
									<div class="col-md-3">
										<div class="card border shadow-none" style="border-radius:12px">
											<div class="card-body">
												<h4 class="h4"><strong>
														<?php
														$course_code = $row2["course_code"];
														$course_code = explode(" - ", $course_code);
														$course_code = $course_code[0]; 
														echo $row2["course_name"] . " (" . $course_code; ?>)
													</strong></h4>
												<h6> 

														<?php
														$sql3 = "select * from departments where dept_id='{$row["deptcode"]}'";
														$result3 = mysqli_query($conn, $sql3);
														$row3 = mysqli_fetch_assoc($result3);
														echo "<class style='color:blue'>" . $row3["dept_name"] . "</class>";
														?>
													</a>
												</h6>
												<h6 class="">- <?php
													echo $row["author"] ?>
												</h6>
												<div class="row">
													<div class="col-md-12">
														<?php
														$sql99 = "select * from form_responses where form_id='{$row["id"]}' and student_id='{$_SESSION["uname"]}'";
														$result99 = mysqli_query($conn, $sql99);
														if (mysqli_num_rows($result99) > 0) {
															$row99 = mysqli_fetch_assoc($result99);
															echo "<h5 class='text-success'>Submitted on $row99[filldate]</h5>";
														} else { ?>
														<button class="btn btn-dark " onclick="window.location.href='../../feedback.php?id=<?php echo $row['form_id'] ?>'" style="border-radius:5px"> <strong>

																<?php echo "Fill"; ?>
															</strong>
														</button>
														<?php } ?>
														
													</div>

												</div>
											</div>

										</div>
									</div>
							<?php }
							} ?>

<div class="col-md-3">
										<div class="card border shadow-none" style="border-radius:12px">
											<div class="card-body">
												<h4 class="h4"><strong>
													Suggestions
													</strong></h4>
												<h6> 

												</h6>
												<div class="row">
													<div class="col-md-12">
														

													<button type="button" class="btn btn-dark "  data-bs-toggle="modal" data-bs-target="#exampleModal">Fill</button>
																												
													</div>

												</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Fill Suggestions</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<form action="" method="post">

															<div class="modal-body">
																<div class="row">

																<div class="col-md-12 my-1">
																		<div class="form-group">
																			<label for="questions">Please enter your suggestions</label>
																			<textarea name="suggestion" required="" class="form-control" id="suggestion"></textarea>
																		</div>
																	</div>


																</div>

															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																<button id="addform" type="submit" class="btn btn-primary">Save changes</button>
															</div>
															</form>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>

						</div>
						<br>
						
					
				<div class="">
					<div class="row">
						<h1 class="h3 mb-3"><strong>Past</strong> Feedback Surveys: </h1>
						<div class="row">
							<?php
							include '../../imports/config.php';
							$student_login = "select * from login where uname = '".$_SESSION['uname']."'";
							$student_login_result = mysqli_query($conn, $student_login);
							$student_login_row = mysqli_fetch_assoc($student_login_result);
							$groups = explode(";", $student_login_row['student_groups']);
							$groups = array_filter($groups);
							$groups_string = "(".implode(",", $groups).")";
							$sql = "SELECT * FROM groups, forms WHERE groups.id IN $groups_string and forms.group_id = groups.id and `status` = '0'";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								
								while ($row = mysqli_fetch_assoc($result)) {
									$sql2 = "select * from courses where course_code='{$row["subject"]}'";
									$result2 = mysqli_query($conn, $sql2);
									$row2 = mysqli_fetch_assoc($result2);
							?>
									<div class="col-md-3">
										<div class="card border shadow-none" style="border-radius:12px">
											<div class="card-body">
												<h4 class="h4"><strong>
														<?php echo $row2["course_name"] . " (" . $row2["course_code"]; ?>)
													</strong></h4>
												<h6> 

														<?php
														$sql3 = "select * from departments where dept_id='{$row["deptcode"]}'";
														$result3 = mysqli_query($conn, $sql3);
														$row3 = mysqli_fetch_assoc($result3);
														echo "<class style='color:blue'>" . $row3["dept_name"] . "</class>";
														?>
													</a>
												</h6>
												<h6 class="">- <?php
													echo $row["author"] ?>
												</h6>
												<div class="row">
													<div class="col-md-12">
														<?php
														$sql99 = "select * from form_responses where form_id='{$row["id"]}' and student_id='{$_SESSION["uname"]}'";
														$result99 = mysqli_query($conn, $sql99);
														if (mysqli_num_rows($result99) > 0) {
															$row99 = mysqli_fetch_assoc($result99);
															echo "<h5 class='text-success'>Submitted on $row99[filldate]</h5>";
														} else { ?>
														<?php echo "<h5><span class='text-danger'>Not Submitted</span></h5>"; ?>
															</strong>
														
														<?php } ?>
														
													</div>

												</div>
											</div>

										</div>
									</div>
							<?php }
							} ?>

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
		var textarea = document.getElementById("textarea");
		var heightLimit = 200;

		textarea.oninput = function() {
			textarea.style.height = "";
			textarea.style.height = Math.min(textarea.scrollHeight, heightLimit) + "px";
		};
	</script>
	
</body>

</html>