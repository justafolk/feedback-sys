<!DOCTYPE html>
<html lang="en">
<?php

session_start();
include "../../imports/config.php";
//include 'imports/config.php';
error_reporting(0);

if ($_SESSION['role'] != 'Faculty') {
	echo "<script>alert('Invalid Session, please login again');</script>";
	echo "<script>window.location.href='index.php';</script>";
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
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Create student group</title>

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
			background-color: #D9F8C4;
			top: 0;
			left: 0;
			z-index: 2;
			color: black;
		}

		input:not(:checked)+label {
			background-color: #F37878;
			top: 0;
			left: 0;
			z-index: 2;
			color: white;
		}

		.atrangi {
			display: block;
			overflow-x: auto;
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
					<h1 class="h3 mb-0"><strong>Create Feedback</strong></h1>
				</div>

				<?php
				include 'notification.php';
				?>
			</nav>


			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<h1 class="h3 mb-3"><strong>Create</strong> Student group</h1>
						<div class="card border">
							<div class="card-body">
								<form action="" method="POST">

									<div class="form-group">
										<!-- select department -->
										<div class="row">
											<div class=col-md-4>
												<label for="department">Select Department</label>
												<select class="form-control" id="department" name="deptcode" required="">
													<option value="">Select Department</option>
													<?php

													$sql = "SELECT * FROM departments";
													$result = mysqli_query($conn, $sql);
													while ($row = mysqli_fetch_assoc($result)) {
														echo "<option value='" . $row["dept_id"] . "'>" . $row["dept_name"] . "</option>";
													}
													if (isset($_POST["deptcode"])) {
														$deptcode = $_POST["deptcode"];
														$sql = "SELECT * FROM departments WHERE dept_id = '$deptcode'";
														$result = mysqli_query($conn, $sql);
														$row = mysqli_fetch_assoc($result);
														echo "<option value='" . $_POST["deptcode"] . "' selected>" . $row["dept_name"] . "</option>";
													}
													?>

												</select>
											</div>
											<!-- select semester -->
											<div class=col-md-4>
												<label for="semester">Select Semester</label>
												<select class="form-control" id="semester" name="semester" required="" value="<?php echo $_POST["semester"] ?>">
													<option value="">Select Semester</option>
													<option value="1" <?php if ($selected == '1') {
																			echo ("selected");
																		} ?>>1st Semester</option>
													<option value="2">2nd Semester</option>
													<option value="3">3rd Semester</option>
													<option value="4">4th Semester</option>
													<option value="5">5th Semester</option>
													<option value="6">6th Semester</option>
													<?php
													if (isset($_POST["semester"])) {
														echo "<option value='" . $_POST["semester"] . "' selected>" . $_POST["semester"] . "th Semester</option>";
													}
													?>
												</select>
											</div>

											<div class=col-md-4>
												<label for="semester">Select Subject</label>
												<select class="form-control" id="subject" name="subject" required="">
													<option value="">Select Subject</option>
													<?php 
														$sql = "select * from courses";
														$result = mysqli_query($conn, $sql);
														while ($row = mysqli_fetch_assoc($result)) {
															echo "<option value='" . $row["course_code"] . "'>" . $row["course_name"]."(".$row["course_code"].")". "</option>";
														}
													?>
													<?php
													if (isset($_POST["subject"])) {
														$sql = "select * from courses where course_code = '{$_POST["subject"]}'";
														$result = mysqli_query($conn, $sql);
														$row = mysqli_fetch_assoc($result);
														echo "<option value='" . $_POST["subject"] . "' selected>" . $row["course_name"]."(".$row["course_code"].")". "</option>";
													}
													?>
												</select>
											</div>

										</div>
										<br />

										<!--
										<label for="department">Select Department</label>
										<select class="form-control" id="department" name="department">
											<option value="">Select Department</option>
											<option value="10">Civil Engineering (Aided)</option>
											<option value="20">Mechanical Engineering (Aided)</option>
											<option value="21">Mechanical Engineering (Un-Aided)</option>
											<option value="30">Electrical Engineering</option>
											<option value="40">Computer Engineering</option>
											<option value="50">Electronics And Telecommuncation (Aided)</option>
											<option value="51">Electronics And Telecommuncation (Un-Aided)</option>
										</select> -->
									</div>


									<div class="form-group">
										<div class="row">

											<div class=col-md-4>
												<label for="name">Enter roll number range</label>
												<input type="text" class="form-control" id="name" name="rollrange" placeholder="specify with '-'" required="" value="<?php echo $_POST["rollrange"] ?>">
											</div>

											<div class=col-md-4>
												<label for="name">Additional Roll numbers (Range)</label>
												<input type="text" class="form-control" id="name" name="addrollrange" value="<?php echo $_POST["addrollrange"] ?>" placeholder="specify with '-'">
											</div>
											<div class=col-md-4>
												<label for="name">Additional Roll numbers (Units)</label>
												<input type="text" value="<?php echo $_POST["addrollunit"] ?>" class="form-control" id="name" name="addrollunit" placeholder="split with ','">
											</div>
										</div>

										<br />
										<br />

										<center><button type="submit" class="btn btn-primary" name="checkroll">Summarise range</submit>
										</center>
									</div>



									<div class="form-group">


										<h3><label for="exampleInputPassword1"><b>Final student survey group </b></label></h3>
										<div class="form-group atrangi">
											<?php

											if (isset($_POST['checkroll']) or isset($_POST['finalroll'])) {
												$deptcode = $_POST['deptcode'];
												$semester = $_POST['semester'];
												$subject = $_POST['subject'];
												$rollrange = $_POST['rollrange'];
												$rollrange = explode('-', $rollrange);

												if ($additionalroll = $_POST['addrollrange']) {
													$additionalroll = explode('-', $additionalroll);
												} else {
													$additionalroll = "-";
												}

												$additionalstart = $additionalroll[0];
												$additionalend = $additionalroll[1];
												$additionalyear = $additionalstart[0] . $additionalstart[1];

												$addstart = explode($deptcode, $additionalstart);
												$addstart = $addstart[1];

												$addend = explode($deptcode, $additionalend);
												$addend = $addend[1];


												$start = $rollrange[0];
												$end = $rollrange[1];
												$year = $start[0] . $start[1];

												$rollstart = explode($deptcode, $start);
												$rollstart = $rollstart[1];

												$rollend = explode($deptcode, $end);
												$rollend = $rollend[1];
											}
											$count = $rollstart;

											$active_roll = array();

											//current year
											for ($i = $rollstart; $i <= $rollend; $i++) {
												$i = sprintf("%02d", $i);
												$active_roll[] = $year . $deptcode . $i;
											}
											//new year
											for ($i = $addstart; $i <= $addend; $i++) {
												$i = sprintf("%02d", $i);
												$active_roll[] = $additionalyear . $deptcode . $i;
											}
											foreach (explode(";", $_POST["addrollunit"]) as $key => $value) {
												$active_roll[] = $value;
											}

											$allrolls = count($active_roll);
											echo "<p>Total number of students: " . $allrolls . "</p>";
											$count = 1;

											while ($count <= $allrolls) {
												echo "<group>";
												for ($i = 1; $i < 16; $i++) {

													$row["enrollid"] = $active_roll[$count - 1];


													$count += 1;
													if ($row['enrollid'] == 0) {
														continue;
													}
													if ($count == $allrolls + 2) {
														break;
													}
													error_reporting(0);
													//array_push($rolls, $row['enrollid']);

													echo  "<div class=\"input-container\"/>
                                                            <input checked type=\"checkbox\" name=\"{$row['enrollid']}\" id=\"{$row['enrollid']}\">
                                                            <label for=\"{$row['enrollid']}\">{$row['enrollid']}</label>
                                                            </div>";
												}
												echo "</group>";
											}
											?>

										</div>
										<br />
										<br />
										<center><button submit class="btn btn-primary" name="finalroll">Finalise range</submit>
										</center>
									</div>
							</div>

							<br />
							</form>
						</div>
					</div>
				</div>


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


	<?php

	if (isset($_POST['finalroll'])) {


		$known_posts = array('deptcode', 'semester', 'subject', 'rollrange', 'addrollrange', 'addrollunit', 'finalroll');
		$active_rolls = array();
		foreach ($_POST as $key => $value) {
			if (!in_array($key, $known_posts)) {
				array_push($active_rolls, $key);
			}
		}
		$active_rolls = array_unique($active_rolls);
		$active_rolls = json_encode($active_rolls);
		$sqltest = "SELECT * FROM `groups` WHERE `deptcode` = '$deptcode' AND `year` = '$year' AND `subject` = '$subject'";
		$resulttest = mysqli_query($conn, $sqltest);
		if (mysqli_num_rows($resulttest) > 0) {
			echo "<script>alert('Group already exists');</script>";
			echo "<script>window.location.href='create_group.php';</script>";
		} else {
			$sql = "INSERT INTO groups(year, semester, subject , deptcode, activeRoll, teacher_id) VALUES ('$year','{$_POST["semester"]}','$subject', '$deptcode', '$active_rolls', '{$_SESSION["id"]}')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "success";
			} else {
				echo mysqli_error($conn);
			}
		}
	}

	?>
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