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

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

	<style>
		@font-face {
			font-family: "San Francisco";
			font-weight: 400;
			src: url("https://raw.githubusercontent.com/sahibjotsaggu/San-Francisco-Pro-Fonts/master/SF-Pro-Display-Semibold.otf")
		}

		body {

			font-family: "San Francisco" !important;
			font-size: .875rem;
		}

		.main-question {
			border: 0px;
			padding: 0px;
			outline: none;
		}

		.main-question:focus {
			border-bottom: 2px solid #ccc;
			font-size: .999rem;

		}

		.slider-title:focus {
			border-bottom: 2px solid #ccc !important;
			font-size: .999rem;

		}

		.slider-list {
			width: 100%;
			display: table;
			table-layout: fixed;
			/* optional, for equal spacing */
			border-collapse: collapse;
		}

		.slider-listi {
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}
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

<body>
	<div class="wrapper">
		<?php
		#include 'sidebar.php';
		?>
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Feedback Portal</span>
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
						</a>
					</li>


					</li>

					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div>
					<h1 class="h3 mb-0"><strong>Feedback Survey </strong></h1>
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
						<li class="nav-item dropdown">
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
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="middle" style="align-items: center; text-align:center;">
						<img src="/assets/img/logo.png" alt="" style="width: 100px">
					</div>

					<form action="./create_form.php" method="post">
						<!-- checkbox for personal details -->

						<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom  ">
							<div class="row">
								<div class="col-md-12 my-1">
									<h3 class="h2">
										<input type="text" name="form-title" id="form-title" style="background-color: transparent; outline:none; border:0px" placeholder="Course Name (Course Code)">
									</h3>
								</div>
								<div class="col-md-12">
									<h6 class="h6">
										<div class="blockquote-footer">Teacher Name</div>
									</h6>
								</div>
							</div>


							<div class="btn-toolbar mb-2 mb-md-0">
								<div class="btn-group me-2">
									<button type="button" class="btn btn-md btn-dark ">Export</button>
								</div>
								<button type="button" class="btn btn-md btn-outline dropdown-toggle">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true">
										<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
										<line x1="16" y1="2" x2="16" y2="6"></line>
										<line x1="8" y1="2" x2="8" y2="6"></line>
										<line x1="3" y1="10" x2="21" y2="10"></line>
									</svg>
									This week
								</button>
							</div>

						</div>
						<div class="card " style="background-color: transparent; border:1px solid black">
							<div class="card-body">
								<div class="row">

									<textarea name="instructions" id="textarea instructions" class="instructions" style="background-color: transparent; color: #515151;; border:0px; outline:none" placeholder="Important: Please fill in the details of the student who is taking the course.
        - Please fill in the details of the student who is taking the course."></textarea>


								</div>
							</div>
						</div>
						<div class="form-group my-1">
							<input class="form-check-input" type="checkbox" name="personalcheck" id="personalcheck" checked>
							<label class="form-check-label" for="defaultCheck1">
								Personal details
							</label>
						</div>

						<div class="card" id="personal">
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

						</div>
						<br>


						<div class="row" style="justify-content: center">
							<div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
								<button style="width:100%" type="button" class="btn btn-secondary" id="shortans">
									Add Short Answer Question</button>
								<button class="btn btn-secondary" type="button" style="width:100%" id="longans">
									Add Long Answer Question</button>
								<button class="btn btn-secondary" type="button" style="width:100%" id="mcqans">
									Add Multi Choice Question</button>

								<button class="btn btn-secondary" type="button" style="width:100%" id="sliderans">
									Add Slider Rating Question</button>
								<button type="button" class="btn btn-secondary" style="height: 100%" data-bs-toggle="modal" data-bs-target="#exampleModal">
									Add Bulk Questions
								</button>

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
						</div>

						<br>
						<input type="submit" class="btn  btn-dark" value="Save Form">
						<button class="btn btn-light border">Discard</button>

					</form>


				</div>
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

			</main>

			
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>


	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var highlightDate = {};
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate,
				touchUi: true,
				onChange: function(selectedDates, dateStr, instance) {
					var date = new Date(dateStr);
					var mydate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();

					highlightDate = mydate;
					//alert(mydate);

					function postSend() {
						var xhr = new XMLHttpRequest();
						xhr.open("GET", "datedetails.php/?date=", true);
						xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhr.send(mydate);
					}
					postSend();

					$.get("./calendar.php", {
							date: mydate
						},
						function(data, status) {
							$("#calendar").html(data);
						}
					);

				}



			});
		});
	</script>


	<script type="text/babel">

	</script>



</body>

</html>



<!--


		  <script type="text/babel">
      function LatestFeedBack() {
        const [date, setDate] = React.useState("2022-07-15");
        const [data, setData] = React.useState(null);

        const fetchData = (date) => {
          var requestOptions = {
            method: "GET",
            redirect: "follow",
          };

          fetch(
            `http://localhost:9090/datedetails.php?date=${date}`,
            requestOptions
          )
            .then((response) => response.json())
            .then((result) => setData(result))
            .catch((error) => console.log("error", error));
        };

        React.useEffect(() => {
          fetchData(date);
        }, [date]);

        return (
          <div>
            <input
              type="date"
              onChange={(e) => {
                setDate(e.target.value);
              }}
            />

            <br />
            <table>
              <tr>
                <th>Subject</th>
                <th>Teacher</th>
                <th>Date</th>
              </tr>
              {data ? (
                <>
                  {data.map((d) => {
                    return (
                      <tr>
                        <td> {d?.subject} </td>
                        <td> {d?.teacher} </td>
                        <td> {d?.date} </td>
                      </tr>
                    );
                  })}
                </>
              ) : null}
            </table>
          </div>
        );
      }

      ReactDOM.render(<LatestFeedBack />, document.getElementById("mydiv"));
	</script>







	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var highlightDate = {};
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate,
				touchUi: true,
				onChange: function(selectedDates, dateStr, instance) {
					var date = new Date(dateStr);
					
					
					//window.location.href = "?date=" + date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
					//alert(date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate());
					//var dateUTC = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate());
					//alert(dateUTC);
					//highlightDate[dateUTC] = dateUTC;
					//document.getElementById("chartjs-dashboard-line").chartjs.update();
					
					function postSend() {
						var xhr = new XMLHttpRequest();
						xhr.open("POST", url , true);
						xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
						xhr.send("date=" + dateStr);
					}

				}
			});
		});

	</script>





    <script>
        var highlightDate = {};
        highlightDate[ new Date('01/20/2022')] = new Date('01/20/2022');
        highlightDate[ new Date('01/21/2022')] = new Date('01/21/2022');
        highlightDate[ new Date('01/22/2022')] = new Date('01/22/2022');
        highlightDate[ new Date('01/23/2022')] = new Date('01/23/2022');

        $('#datepickerId').datepicker({
            beforeShowDay: function( date ) {
                var highlight = highlightDate[date];
                if( highlight ) {
                    return [true, "eventClass", 'Tooltip text'];
                } else {
                    return [true, '', ''];
                }
            }
        });
    </script>

	-->