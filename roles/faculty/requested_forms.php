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
				<div class="container-fluid p-0">
					<div class="row">
						<h1 class="h3 mb-3"><strong>Requested</strong> Feedback Survey: </h1>
						<div class="row">
							<?php
							include "../../imports/config.php";
							$sql = "SELECT * FROM groups where teacher_id = '{$_SESSION["id"]}' ORDER BY id DESC"; 
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
													
												</h6>
												<p>Number of Students : <?php
																		$students = json_decode($row["activeRoll"], true);
																		echo count($students);
																		?></p>
												<p>Date : <?php 
												if($row["fdate"] == ""){
													echo "Not Set";
												}else{
												echo $row["fdate"]; } ?></p>

												<p>Status : <?php 
												if($row["rejected"] == "1"){
													echo "<b>Rejected</b>";
												}elseif ($row["accepted"] == "1") {
													echo "<b>Accepted</b>";
												 }
												 else{
													if($row["req"] == "1"){
														echo "<b>Pending</b>"; }
														else{
															echo "<b>Error, contact admin</b>";
														}
													
												 } ?></p>
												 



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

<!--

<?php 

//if($row["accepted"] == "0"){ ?>
<div class="row">
	<div class="col-md-12">
		<button class="btn btn-dark " onclick="window.location.href='./viewedit.php?id=<?php //echo $row['id'] ?>'" style="border-radius:5px"> <strong>

				Update
			</strong>
		</button>
		<button class="btn btn-dark " onclick="window.location.href='./delete_form.php?id=<?php //echo $row['id'] ?>'" style="border-radius:5px"> 
		<strong>

				Delete
			</strong>
		</button>
	</div>

</div>
<?php //} ?>

-->
