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

	<title>CWIT-Feedback Portol</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
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
					<h1 class="h3 mb-0"><strong>Feedback | <?php
						$dept_id = $_GET["dept_id"];
						include "../../imports/config.php";
						$sql = "SELECT * FROM departments WHERE dept_id = '$dept_id'";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						echo $row['dept_name'];
						?></strong>
					</h1>
				</div>
				<?php
				include "notification.php";
				?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle" id="name"><?php echo $row["dept_name"] ?></h1>
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for ....">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button">Search</button>
						</span>
					</div>
					<br>
					<?php
					$i = 1;
					while ($i < 7) {
					?>
						<button class="btn btn-primary me-3" id="home-tab"><?php echo $i ?> Semester</button>
					<?php
					$i++;
					}

					?>

					</ul>
					<br>
					<br>

					<div class="row">
						<?php
						include "../../imports/config.php";
						$sql = "SELECT * FROM groups, forms where deptcode = '{$row["dept_id"]}' and groups.id=forms.form_id";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$forms = "select * from login where id = '{$row["teacher_id"]}'";

								$results = mysqli_query($conn, $forms);
								$forms = mysqli_fetch_assoc($results);
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
												<a href="">
													<?php
													echo $forms["name"];
													?>
												</a>
											</h6>
											<p>Number of Students : <?php
																	$students = json_decode($row["activeRoll"], true);
																	echo count($students);
																	?></p>
											<div class="row">
												<div class="col-md-12">
													<button class="btn btn-dark " onclick="window.location.href='./report.php?id=<?php echo $row['form_id'] ?>'" style="border-radius:5px"> <strong>

															View
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
			</main>
			<?php
			include "footer.php";
			?>
		</div>
	</div>
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<script src="assets/js/main.js"></script>
	<script src="js/app.js"></script>
	<!-- <script>
		document.getElementById("profile1").style.display = "none";
		var id1 = document.getElementById("id1");
		var profile1 = document.getElementById("profile1")
		id1.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id2.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id3.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id4.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("home").style.display = "none";
		}
		id5.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("home").style.display = "none";
		}
		function back(){
			document.getElementById("profile1").style.display = 'none';
			document.getElementById("home").style.display = "block";
		}
		function back1(){
			document.getElementById("profile1").style.display = 'none';
			document.getElementById("list").style.display = "block";
		}
	</script> -->
	<!-- <script>
        first1 = document.getElementById("home-tab");
        second1 = document.getElementById("list-tab");
        third1 = document.getElementById("list2-tab");
        first = document.getElementById("home");
        second = document.getElementById("profile");
        profile1 = document.getElementById("profile1");
        list = document.getElementById("list");
        third = document.getElementById("list1");
        const name = document.getElementById("name");
        // let b = ["b1","b2","b3","b4","b5","b6","b7","b8","b9"];
        // for (let i = 0; i < 3; i++) {
        //     b[i] = document.getElementById(b[i]);
        //     console.log(b[i]);
        // } 
        name.innerHTML = "First Year";

        first.style.display = "block";
        second.style.display = "none";
        third.style.display = "none";
        list.style.display = "none";
        profile1.style.display = "none";

        first.style.display = "block";
        second.style.display = "none";
        list.style.display = "none";
        name.innerHTML = "First Year | Bar Graph";
        b1.onclick = function() {
            first.style.display = "block";
            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
        }
        b2.onclick = function() {
            first.style.display = "none";
            profile1.style.display = "block";
            list.style.display = "none";
            name.innerHTML = "First Year | Pie Graph";
        }
        b3.onclick = function() {
            first.style.display = "none";
            profile1.style.display = "none";
            list.style.display = "block";
            name.innerHTML = "First Year | List Form";
        }
        first1.onclick = function() {
            first.style.display = "block";
            second.style.display = "none";
            third.style.display = "none";
            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
            b1.onclick = function() {
                first.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "First Year | Bar Graph";
            }
            b2.onclick = function() {
                first.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "First Year | Pie Graph";
            }
            b3.onclick = function() {
                first.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "First Year | List Form";
            }
        }

        second1.onclick = function() {
            first.style.display = "none";
            second.style.display = "block";
            third.style.display = "none";

            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "Second Year | Bar Graph";
            b4.onclick = function() {
                second.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "Second Year | Bar Graph";
            }
            b5.onclick = function() {
                second.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "Second Year | Pie Graph";
            }
            b6.onclick = function() {
                second.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "Second Year | List Form";
            }
        }
        third1.onclick = function() {
            first.style.display = "none";
            second.style.display = "none";
            third.style.display = "block";

            profile1.style.display = "none";
            list.style.display = "none";

            name.innerHTML = "Third Year | Bar Graph";
            b7.onclick = function() {
                third.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "Third Year | Bar Graph";
            }
            b8.onclick = function() {
                third.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "Third Year | Pie Graph";
            }
            b9.onclick = function() {
                third.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "Third Year | List Form";
            }
        }
    </script> -->

	<script>
		first1 = document.getElementById("home-tab");
		second1 = document.getElementById("list-tab");
		third1 = document.getElementById("list2-tab");
		first = document.getElementById("home");
		second = document.getElementById("profile");
		profile1 = document.getElementById("profile1");
		profile2 = document.getElementById("profile2");
		list = document.getElementById("list");
		third = document.getElementById("list1");
		const name = document.getElementById("name");
		// let b = ["b1","b2","b3","b4","b5","b6","b7","b8","b9"];
		// for (let i = 0; i < 3; i++) {
		//     b[i] = document.getElementById(b[i]);
		//     console.log(b[i]);
		// } 

		first.style.display = "block";
		second.style.display = "none";
		third.style.display = "none";

		list.style.display = "none";
		profile1.style.display = "none";
		profile2.style.display = "none";

		first.style.display = "block";
		second.style.display = "none";
		list.style.display = "none";
		b1.onclick = function() {
			first.style.display = "block";
			profile1.style.display = "none";
			list.style.display = "none";
		}
		b2.onclick = function() {
			first.style.display = "none";
			profile1.style.display = "block";
			list.style.display = "none";
		}
		b3.onclick = function() {
			first.style.display = "none";
			profile1.style.display = "none";
			list.style.display = "block";
		}
		first1.onclick = function() {
			first.style.display = "block";
			second.style.display = "none";
			third.style.display = "none";
			profile1.style.display = "none";
			list.style.display = "none";
			b1.onclick = function() {
				first.style.display = "block";
				profile1.style.display = "none";
				list.style.display = "none";
			}
			b2.onclick = function() {
				first.style.display = "none";
				profile1.style.display = "block";
				list.style.display = "none";
			}
			b3.onclick = function() {
				first.style.display = "none";
				profile1.style.display = "none";
				list.style.display = "block";
			}
		}

		second1.onclick = function() {
			first.style.display = "none";
			second.style.display = "block";
			third.style.display = "none";

			profile1.style.display = "none";
			list.style.display = "none";
			b4.onclick = function() {
				second.style.display = "block";
				profile1.style.display = "none";
				list.style.display = "none";
			}
			b5.onclick = function() {
				second.style.display = "none";
				profile1.style.display = "block";
				list.style.display = "none";
			}
			b6.onclick = function() {
				second.style.display = "none";
				profile1.style.display = "none";
				list.style.display = "block";
			}
		}
		third1.onclick = function() {
			first.style.display = "none";
			second.style.display = "none";
			third.style.display = "block";

			profile1.style.display = "none";
			list.style.display = "none";

			b7.onclick = function() {
				third.style.display = "block";
				profile1.style.display = "none";
				list.style.display = "none";
			}
			b8.onclick = function() {
				third.style.display = "none";
				profile1.style.display = "block";
				list.style.display = "none";
			}
			b9.onclick = function() {
				third.style.display = "none";
				profile1.style.display = "none";
				list.style.display = "block";
			}
		}

		function show1() {
			first.style.display = "block";
			second.style.display = "none";
			third.style.display = "none";

			list.style.display = "none";
			profile1.style.display = "none";
			profile2.style.display = "none";

		}

		function show2() {
			first.style.display = "none";
			second.style.display = "none";
			third.style.display = "none";

			list.style.display = "none";
			profile1.style.display = "none";
			profile2.style.display = "block";

			first.style.display = "block";
			second.style.display = "none";
			list.style.display = "none";
		}

		function show3() {
			first.style.display = "none";
			second.style.display = "none";
			third.style.display = "none";

			list.style.display = "block";
			profile1.style.display = "none";
			profile2.style.display = "none";

			first.style.display = "none";
			second.style.display = "none";
		}
	</script>

	<script>
		<?php
		for ($i = 1; $i < 6; $i++) {
		?>
			document.addEventListener("DOMContentLoaded", function() {
				// Pie chart
				new Chart(document.getElementById("chartjs-dashboard-pie<?php echo $i; ?>"), {
					type: "pie",
					data: {
						labels: ["5-Ratings", "4-Ratings", "3-Ratings", "2-Ratings", "1-Ratings"],
						datasets: [{
							data: [4306, 3801, 1689, 834, 434],
							backgroundColor: [
								window.theme.success,
								window.theme.primary,
								window.theme.secondary,
								window.theme.warning,
								window.theme.danger
							],
							borderWidth: 5
						}]
					},
					options: {
						responsive: !window.MSInputMethodContext,
						maintainAspectRatio: false,
						legend: {
							display: false
						},
						cutoutPercentage: 75
					}
				});
			});
		<?php
		}
		?>
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["5-Ratings", "4-Ratings", "3-Ratings", "2-Ratings", "1-Ratings"],
					datasets: [{
						data: [406, 301, 1689, 8344, 3434],
						backgroundColor: [
							window.theme.success,
							window.theme.primary,
							window.theme.secondary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>

</body>

</html>
