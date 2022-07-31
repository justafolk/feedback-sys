<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

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


	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

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
					<h1 class="h3 mb-0"><strong>Dashboard</strong></h1>
				</div>
				<?php
				include 'notification.php';
				?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
					<div class="row">
						<div class="col-xl-12 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Total Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">2424</h1>
												<div class="mb-0">
													<span class="text-muted">Since last month</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Pending Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="users"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">14</h1>
												<div class="mb-0">
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Filled Feedbacks</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="dollar-sign"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">29</h1>
												<div class="mb-0">
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Students</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="shopping-cart"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">67594</h1>
												<div class="mb-0">
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="col-12 col-lg-8 col-xxl-9 d-flex order-2 order-xxl-2">
							<div class="calendar col-12" id="calendar">
							</div>
						</div> -->
						<div class="col-12 col-lg-12 col-xxl-9 d-flex order-2 order-xxl-2">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title mb-0">Latest Feedbacks</h5>
								</div>
								<div class="calendar col-12" id="calendar">

								</div>
							</div>
						</div>

			</main>



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
				var date = new Date(Date.now());
				var mydate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
				document.addEventListener("DOMContentLoaded", function() {
					var highlightDate = {};
					var date = new Date(Date.now());
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
							//

							function postSend() {
								var xhr = new XMLHttpRequest();
								xhr.open("GET", "calendar.php/?date=", true);
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
				$.get("./calendar.php", {
						date: mydate
					},
					function(data, status) {
						console.log(Date.now());
						$("#calendar").html(data);
					}
				);
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