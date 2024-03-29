<!DOCTYPE html>
<html lang="en">

<?php
session_start();
//include '../imports/config.php';
error_reporting(0);

if ($_SESSION['role'] != 'Faculty') {
	echo "<script>alert('Invalid Session, please login again');</script>";
	echo "<script>window.location.href='../../index.php';</script>";
}
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "feedback";

$conn = mysqli_connect($server, $user, $passwd, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../../assets/img/logo.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Faculty Home</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<style>
		group {
			display: flex;
		}

		input[type=checkbox] {
			opacity: 0;
			width: 100%;
			height: 0px;
			background-color: green;
			position: relative;
			z-index: 1;
		}

		.input-container {
			width: 75px;
			height: 42px;
		}

		.input-container label {
			position: absolute;
			top: 0;
			left: 0;
			color: #737373;
			width: 76px;
			line-height: 42px;
			text-align: center;
			position: relative;
		}

		input:checked+label {
			background-color: green;
			top: 0;
			left: 0;
			z-index: 2;
			color: white;
		}

		input:not(:checked)+label {
			background-color: red;
			top: 0;
			left: 0;
			z-index: 2;
			color: white;
		}
	</style>
</head>
<style>
	.eventClass a {
		background-color: #dda919 !important;
		color: #FFF !important;
	}
</style>

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
					<h1 class="h3 mb-0"><strong>Home</strong></h1>
				</div>
				<?php 
					include "./notification.php";
				
				?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 "><strong>Faculty</strong> Home </h1>
					<div class="row">

						<div class="col-3">
							<button class="btn btn-primary  " style="width: 100%; height:100%" type="button">
								<i class="align-middle" data-feather="user-plus">

								</i>
								<a href="create_group.php" style="color: white;">Create Group</a>
							</button>
						</div>
						<div class="col-3">
							<button class="btn btn-primary  " style="width: 100%; height:100%" type="button">
								<i class="align-middle" data-feather="info">

								</i>
								<a href="feedback_home.php" style="color: white;">View Group</a>
							</button>
						</div>
						<div class="col-3">
							<button class="btn btn-primary  " style="width: 100%; height:100%" type="button">
								<i class="align-middle" data-feather="user-check">

								</i>
								<a href="requested_forms.php" style="color: white;">View Requested forms</a>
							</button>
						</div>
						<div class="col-3">
							<button class="btn btn-primary  " style="width: 100%; height:100%" type="button">
								<i class="align-middle" data-feather="user-check">

								</i>
								<a href="change_pass.php" style="color: white;">Change password</a>
							</button>
						</div>
					</div>
					
					<hr>
					<div class="row">

						<div class="col-xl-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Current Created Forms</h5>
													</div>
													<?php

														$teach_id = $_SESSION['id'];
														$sqlcount = "SELECT COUNT(teacher_id) FROM `groups` WHERE `req` = '0' and `accepted` = '0' and `rejected`='0' and `teacher_id` = '$teach_id'";
														$result = mysqli_query($conn, $sqlcount);
														$row = mysqli_fetch_array($result);
														$created = $row['COUNT(teacher_id)'];
														//echo "<script>alert('".$created."')</script>";

														$sqltotal = "SELECT COUNT(teacher_id) FROM `groups` WHERE `teacher_id` = '$teach_id'";
														$result = mysqli_query($conn, $sqltotal);
														$row = mysqli_fetch_array($result);
														$total = $row['COUNT(teacher_id)'];
													?>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="info"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"> <?php echo $created; ?> </h1>
												<div class="mb-0">

													<span class="text-primary"> <i class="mdi mdi-arrow-bottom-right"></i> Total <?php echo $total; ?> </span>
													<span class="text-muted">till date</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Current Requested Forms</h5>
													</div>
													<?php

														$teach_id = $_SESSION['id'];
														$sqlcount = "SELECT COUNT(teacher_id) FROM `groups` WHERE `req` = '1' and `accepted` = '0' and `rejected`='0' and `teacher_id` = '$teach_id'";
														$result = mysqli_query($conn, $sqlcount);
														$row = mysqli_fetch_array($result);
														$requsted = $row['COUNT(teacher_id)'];
														//echo "<script>alert('".$created."')</script>";

														$sqltotal = "SELECT COUNT(teacher_id) FROM `groups` WHERE `accepted`='1' AND `teacher_id` = '$teach_id'";
														$result = mysqli_query($conn, $sqltotal);
														$row = mysqli_fetch_array($result);
														$accepted = $row['COUNT(teacher_id)'];
													?>
													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="info"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"> <?php echo $requsted; ?></h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> <?php echo $accepted; ?></span>
													<span class="text-muted">accepted till date</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">On Going Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="hash"></i>
														</div>
													</div>
												</div>

												<?php 
													$today = date("Y-m-d");

													$sqllogin = "SELECT `name` from `login` where `id` = '$teach_id'";
													$result = mysqli_query($conn, $sqllogin);
													$row = mysqli_fetch_array($result);
													$teacher_name = $name = $row['name'];

													$sqlongoing = "SELECT COUNT(status) from `forms` WHERE `status` = '1' OR `ini_date`='$today' and `author` = '$name'";
													$result = mysqli_query($conn, $sqlongoing);
													$row = mysqli_fetch_array($result);
													$ongoing = $row['COUNT(status)'];
													//echo "<script>alert('".$name."')</script>";

													$sqlcompleted = "SELECT COUNT(`status`) from `forms` WHERE `status` = '1' and `author` = '$name' and date(`ini_date`) >= '$today'";
													//echo "<script>alert('".$today."')</script>";
													$result = mysqli_query($conn, $sqlcompleted);
													$row = mysqli_fetch_array($result);
													$completed = $row['COUNT(status)'];
													//echo "<script>alert('".$completed."')</script>";
												?>

												<h1 class="mt-1 mb-3"><?php echo $ongoing; ?></h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> <?php echo $completed; ?></span>
													<span class="text-muted">Feedbacks</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Session Details</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="info"></i>
														</div>
													</div>
												</div>
												<class="mt-1 mb-3">
													<?php
													echo "<b>Username : </b>".$_SESSION['uname'];
													echo "<br>";
													echo '<b>Name : </b>'.$name; 
													echo '<br>';
													echo '<b>teacher ID : </b>'.$teach_id;
													echo '<br>';
													echo '<b>Role : </b>'.$_SESSION['role'];
													?>
													

												</class>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 my-2">
							<!-- table showing active feedbacks -->
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Active Feedbacks  - <?php $td= date('Y-m-d'); echo "<b>$td</b>"; ?></h5>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Course</th>
													<th>Course Code</th>
													<th>Total Students</th>
													
												</tr>
											</thead>
											<tbody>
												<?php

													$active_feedbacks = "SELECT * FROM forms WHERE `ini_date` = '$td' AND `status` = '1' and `author`='$name' ORDER BY `form_id` DESC";
													$active_feedbacks_result = mysqli_query($conn, $active_feedbacks);
													$active_feedbacks_count = mysqli_num_rows($active_feedbacks_result);

													if($active_feedbacks_count > 0){
														$active_feedbacks_count = 1;
														while($active_feedbacks_row = mysqli_fetch_assoc($active_feedbacks_result)){
															$course_code = $active_feedbacks_row['course_code'];

															$course = "SELECT * FROM courses WHERE course_code = '$course_code'";
															$course_result = mysqli_query($conn, $course);
															$course_row = mysqli_fetch_assoc($course_result);
															$course_name = $course_row['course_name'];
															$total_stud = $active_feedbacks_row['total_students'];
															//$feedback_date = date('d-m-Y', strtotime($feedback_date));
															echo "<tr>
																	<td>$active_feedbacks_count</td>
																	<td>$course_name</td>
																	<td>$course_code</td>
																	<td>$total_stud</td>
																</tr>";
															$active_feedbacks_count++;
														}
													}
													else{
														echo "<tr>
																<td colspan='4' span class='text-center'><h5>No Active Feedbacks</h5></td>
															</tr>";
													}

												?>

											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>

						<div class="col-md-6 my-2">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Past Feedbacks</h5>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th> ID</th>
													<th>Course</th>
													<th>Code</th>
													<th>Students</th>
													<th>Date</th>
													
												</tr>
											</thead>
											<tbody>
											<?php

												$active_feedbacks = "SELECT * FROM forms WHERE `ini_date` < '$td' AND `status` = '0' AND `author` = '$name' ORDER BY `form_id` DESC";
												$active_feedbacks_result = mysqli_query($conn, $active_feedbacks);
												$active_feedbacks_count = mysqli_num_rows($active_feedbacks_result);

												if($active_feedbacks_count > 0){
													$active_feedbacks_count = 1;
													while($active_feedbacks_row = mysqli_fetch_assoc($active_feedbacks_result)){
														$course_code = $active_feedbacks_row['course_code'];

														$course = "SELECT * FROM courses WHERE course_code = '$course_code'";
														$course_result = mysqli_query($conn, $course);
														$course_row = mysqli_fetch_assoc($course_result);
														$course_name = $course_row['course_name'];
														$total_stud = $active_feedbacks_row['total_students'];
														//$feedback_date = date('d-m-Y', strtotime($feedback_date));
														echo "<tr>
																<td>$active_feedbacks_count</td>
																<td>$course_name</td>
																<td>$course_code</td>
																<td>$total_stud</td>
																<td>$active_feedbacks_row[ini_date]</td>
															</tr>";
														$active_feedbacks_count++;
													}
												}
												else{
													echo "<tr>
															<td colspan='4' span class='text-center'><h5>No Feedback Records</h5></td>
														</tr>";
												}

												?>
											</tbody>
										</table>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- add a create new form button -->



					<div class="row">




					</div>

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
