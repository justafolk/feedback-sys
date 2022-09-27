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

	<title>Create Form</title>
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
					<h1 class="h3 mb-0"><strong>Create Feedback</strong></h1>
				</div>

				<?php
				include 'notification.php';
				?>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-md-12">

							<div class="card shadow-none border" style="border-radius: 12px">
								<div class="card-body">
									<div class="container">
										<div class="middle mb-5" style="align-items: center; text-align:center;">

										</div>

										<form action="./create_feedback.php" method="post">
											<!-- checkbox for personal details -->

											<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 border-bottom  ">
												<div class="row">
													<div class="col-md-12">
														<h3 class="h2">
															<strong>
																<?php
																include "./../../imports/config.php";
																$sql = "select * from groups where id={$_GET['id']}";
																$result = mysqli_query($conn, $sql);
																$row = mysqli_fetch_assoc($result);
																$sql2 = "select * from courses where course_code='{$row['subject']}'";
																$result2 = mysqli_query($conn, $sql2);
																$row2 = mysqli_fetch_assoc($result2);
																echo $row2['course_name'] . " - " . $row['subject'];
																?>
															</strong>
														</h3>
													</div>
													<input type="hidden" name="course_name" value="<?php echo $row["subject"] ?>">
													<input type="hidden" name="group_id" value="<?php echo $_GET["id"] ?>">

													<div class="col-md-12">
														<h6 class="mt-2">
															<div class="blockquote-footer">
																<?php
																echo $_SESSION['name'];
																?>

															</div>
														</h6>
													</div>
												</div>


												<div class="btn-toolbar mb-2 mb-md-0">

													<button type="button" class="btn btn-md btn-outline ">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true">
															<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
															<line x1="16" y1="2" x2="16" y2="6"></line>
															<line x1="8" y1="2" x2="8" y2="6"></line>
															<line x1="3" y1="10" x2="21" y2="10"></line>
														</svg>
														20/10/2020
													</button>
												</div>

											</div>
											<div class="card " style="background-color: transparent; border:1px solid black">
												<div class="card-body">
													<div class="row">
														<textarea name="instructions" id="textarea instructions" class="instructions" style="height:100px;background-color: transparent; color: #515151;; border:0px; outline:none" placeholder="Important: Please fill in the details of the student who is taking the course.
														- Please fill in the details of the student who is taking the course."> Note:
     - Please fill the survey questions and ratings in the order of your preference.
     - Extreme left indicates postive and extreme right indicates negative.
     - If any difficulty is encountered, please contact your respective supervisor. </textarea>
													</div>
												</div>
											</div>
											<div class="form-group my-1">
												<input class="form-check-input" type="checkbox" name="personalcheck" id="personalcheck" checked>
												<label class="form-check-label" for="defaultCheck1">
													Personal details
												</label>
											</div>

											<div class="card shadow-none border" id="personal">
												<div class="card-body">
													<div class="row">

														<div class="col-6">
															<div class="form-group">
																<label for="firstName">First name</label>
																<input type="text" class="form-control" id="firstName" placeholder="First name">
															</div>
															<br>
															<div class="form-group">
																<label for="email">Email ID</label>
																<input type="email" class="form-control" id="email" placeholder="idk@cwit.com">
															</div>

														</div>
														<div class="col-6">
															<div class="form-group">
																<label for="lastName">Last name</label>
																<input type="text" class="form-control" id="lastName" placeholder="Last name">
															</div>
															<br>
															<div class="form-group">
																<label for="enroll">Enrollment number</label>
																<input type="number" class="form-control" id="Enrollment Number" placeholder="194033">
															</div>

														</div>
													</div>

												</div>
											</div>

											<div id="allquestions">

												<div class="question1">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="1. " name="main-question main-question1" id="main-question1"> </h5>
															<input type="hidden" name="slidercount1" id="slidercount1" value="1">
															<div class="sliders1">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title1-1" id="slider-title1-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-1-1" name="slider-1-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions1" onclick="addSlider(1)" id="addoptions1">Add Another Slider</button>
														</div>

													</div>
												</div>

												<div class="question2">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="2. " name="main-question main-question2" id="main-question2"> </h5>
															<input type="hidden" name="slidercount2" id="slidercount2" value="1">
															<div class="sliders2">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title2-1" id="slider-title2-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-2-1" name="slider-2-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions2" onclick="addSlider(2)" id="addoptions2">Add Another Slider</button>
														</div>

													</div>
												</div>

												<div class="question3">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="3. " name="main-question main-question3" id="main-question3"> </h5>
															<input type="hidden" name="slidercount3" id="slidercount3" value="1">
															<div class="sliders3">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title3-1" id="
                        slider-title3-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-3-1" name="slider-3-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions3" onclick="addSlider(3)" id="addoptions3">Add Another Slider</button>
														</div>

													</div>
												</div>

												<div class="question4">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="4. " name="main-question main-question4" id="main-question4"> </h5>
															<input type="hidden" name="slidercount4" id="slidercount4" value="1">
															<div class="sliders4">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title4-1" id="
                        slider-title4-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-4-1" name="slider-4-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions4" onclick="addSlider(4)" id="addoptions4">Add Another Slider</button>
														</div>

													</div>
												</div>

												<div class="question5">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="5. " name="main-question main-question5" id="main-question5"> </h5>
															<input type="hidden" name="slidercount5" id="slidercount5" value="1">
															<div class="sliders5">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title5-1" id="
                        slider-title5-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-5-1" name="slider-5-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions5" onclick="addSlider(5)" id="addoptions5">Add Another Slider</button>
														</div>

													</div>
												</div>

												<div class="question6">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="6. " name="main-question main-question6" id="main-question6"> </h5>
															<input type="hidden" name="slidercount6" id="slidercount6" value="1">
															<div class="sliders6">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title6-1" id="
                        slider-title6-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-6-1" name="slider-6-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions6" onclick="addSlider(6)" id="addoptions6">Add Another Slider</button>
														</div>

													</div>
												</div>

												<div class="question7">
													<div class="card my-2 shadow-none border">
														<div class="card-body">
															<h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="7. " name="main-question main-question7" id="main-question7"> </h5>
															<input type="hidden" name="slidercount7" id="slidercount7" value="1">
															<div class="sliders7">
																<input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title7-1" id="
                        slider-title7-1" class="form-label slider-title">
																<ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
																	<li class="">Very Bad</li>
																	<li>Bad</li>
																	<li>Neutral </li>
																	<li>Good</li>
																	<li>Excellent</li>
																</ul>

																<div class="range">
																	<input type="range" class="form-range" id="slider-7-1" name="slider-7-1" min="1" max="100">
																</div>
															</div>
															<button type="button" class="btn btn-primary" name="addoptions7" onclick="addSlider(7)" id="addoptions7">Add Another Slider</button>
														</div>

													</div>
												</div>

											</div>
											<br>


											<div class="row" style="justify-content: center">
												<div class="text-center">
													<button type="button" class="btn btn-primary mb-3" id="shortans">Add Short Answer Question</button>
													<button type="button" class="btn btn-primary mb-3" id="longans">Add Long Answer Question</button>
													<button type="button" class="btn btn-primary mb-3" id="mcqans">Add Multi Choice Question</button>
													<button type="button" class="btn btn-primary mb-3" id="sliderans">Add Slider Rating Question</button>
													<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Bulk Questions</button>
												</div>
												<!-- <div class="col-md-2">
													<button style="width:100%" type="button" class="btn btn-dark" id="shortans">
														Add Short Answer Question</button>
												</div>
												<div class="col-md-2"><button class="btn btn-dark" type="button" style="width:100%" id="longans">
														Add Long Answer Question</button></div>
												<div class="col-md-2"><button class="btn btn-dark" type="button" style="width:100%" id="mcqans">
														Add Multi Choice Question</button></div>

												<div class="col-md-2"><button class="btn btn-dark" type="button" style="width:100%" id="sliderans">
														Add Slider Rating Question</button></div>
												<div class="col-md-2">
												<button type="button" class="btn btn-dark" style="height: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
													Add Bulk Questions
												</button>
												
												</div> -->

												<!-- Modal -->
												<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Add Bulk Questions</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">
																<div class="row">

																	<div class="col-6">
																		<div class="form-group">
																			Select Question Type
																			<select name="formtype" class="form-control custom-select" id="formtype">
																				<option value="None">Select Question Type</option>
																				<option value="shortans">Short Answer</option>
																				<option value="longans">Long Answer</option>
																				<option value="mcqans">Multi Choice </option>
																				<option value="sliderans">Slider Rating </option>

																			</select>
																		</div>
																	</div>
																	<div class="col-6">
																		<div class="form-group">
																			<label for="quantity">Enter quantity of questions.</label>
																			<input type="number" name="quantity" class="form-control" id="quantity">
																		</div>
																	</div>

																	<div class="col-md-12 my-1">
																		<div class="form-group">
																			<label for="questions">(Optional) Enter questions separated by comma.</label>
																			<textarea name="questions" class="form-control" id="questions"></textarea>
																		</div>
																	</div>


																</div>

															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																<button id="addform" type="button" class="btn btn-primary">Save changes</button>
															</div>
														</div>
													</div>
												</div>
											</div>

											<br>
											<input type="submit" class="btn  btn-primary" value="Save Form">
											<button class="btn btn-light border">Discard</button>

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
	<script>
		var index = 0;
		$(document).ready(function() {
			$("#shortans").click(function() {
				index++;
				$.get("./genform.php", {
					'id': index,
					'type': "shortans"
				}, function(data) {
					$("#allquestions").append(data);
				})

			});
			$("#longans").click(function() {
				index++;
				$.get("./genform.php", {
					'id': index,
					'type': "longans"
				}, function(data) {
					$("#allquestions").append(data);
				})

			});
			$("#mcqans").click(function() {
				index++;
				$.get("./genform.php", {
					'id': index,
					'type': "mcqans"
				}, function(data) {
					$("#allquestions").append(data);
				})

			});
			$("#sliderans").click(function() {
				index++;
				$.get("./genform.php", {
					'id': index,
					'type': "sliderans"
				}, function(data) {
					$("#allquestions").append(data);
				})

			});
			$("#addform").click(function() {
				var formtype = $("#formtype").val();
				var quantity = $("#quantity").val();
				var questions = $("#questions").val();
				for (let i = 0; i < quantity; i++) {
					index++;
					$.get("./genform.php", {
						'id': index,
						'type': formtype,
						'questions': questions
					}, function(data) {
						$("#allquestions").append(data);
					})
				}


			});
		});
	</script>
	<script>
		document.getElementById("personalcheck").addEventListener("click", function() {
			if (this.checked) {
				document.getElementById("personal").style.display = "block";
			} else {
				document.getElementById("personal").style.display = "none";
			}
		});
	</script>
</body>

</html>
