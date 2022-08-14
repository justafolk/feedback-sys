

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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Requested Forms</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<style>
		@font-face {
			font-family: "San Francisco";
			font-weight: 400;
			src: url("../../assets/css/SF-Pro-Display-Semibold.otf")
		}

		/* .main {

            font-family: "San Francisco" !important;
            font-size: .875rem;
        } */
	</style>
	<script type="text/javascript">
		function addOption(id) {
			var optioncount = document.getElementById("optioncount" + id).value;
			optioncount++;
			document.getElementById("optioncount" + id).value = optioncount;
			$.get("./genform.php", {
				'id': id,
				'optioncount': optioncount,
				'type': "option"
			}, function(data) {
				console.log(data);
				$(".options" + id).append(data);
			})

		}

		function addSlider(id) {
			var optioncount = document.getElementById("slidercount" + id).value;
			optioncount++;
			document.getElementById("slidercount" + id).value = optioncount;
			$.get("./genform.php", {
				'id': id,
				'optioncount': optioncount,
				'type': "slider"
			}, function(data) {
				console.log(data);
				$(".sliders" + id).append(data);
			})

		}
	</script>
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
					<h1 class="h3 mb-0"><strong>Requested Feedback</strong></h1>
				</div>

				<?php
				include 'notification.php';
				?>
			</nav>


			<main class="content">
			<div class="row">
						<h1 class="h3 mb-3"><strong>Active</strong> Feedback Surveys: </h1>
						<div class="row">
							<?php
							include "../../imports/config.php";
							$sql = "SELECT * FROM forms where author = '{$_SESSION["name"]}'";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$sql2 = "select * from courses where course_code='{$row["course_name"]}'";
									$result2 = mysqli_query($conn, $sql2);
									$row2 = mysqli_fetch_assoc($result2);
							?>
									<div class="col-md-3">
										<div class="card border shadow-none" style="border-radius:12px">
											<div class="card-body">
												<h4 class="h4"><strong>
														<?php echo $row2["course_name"] . " (" . $row2["course_code"]; ?>)
													</strong></h4>
												<h6> <a href="">

														<?php
														$sql3 = "select * from departments where dept_id='
												{$row["dept_code"]}'";
														$result3 = mysqli_query($conn, $sql3);
														$row3 = mysqli_fetch_assoc($result3);
														echo $row3["dept_name"];
														?>
													</a>
												</h6>
												<p style="color:green">Number of Students Filled : <?php
																		$students = json_decode($row["activeRoll"], true);
																		echo count($students);
																		?></p>
																		
												<div class="row">
													<div class="col-md-12">
														<button class="btn btn-dark " onclick="window.location.href='./create_form.php?id=<?php echo $row['id'] ?>'" style="border-radius:5px"> <strong>

																Revoke
															</strong>
														</button>
													</div>

												</div>

											</div>

										</div>
									</div>
							<?php }
							} ?>

						</div>
					
					</div>
					<br>

					

						</div>
					
					</div>
				</div>
				

		</div>
		</main>

	</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>



