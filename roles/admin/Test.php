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
  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar Chart</h5>
              <div id="barChart" style="min-height: 400px;" class="echart"></div>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#barChart")).setOption({
                    xAxis: {
                      type: 'category',
                      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [120, 200, 150, 80, 70, 110, 130],
                      type: 'bar'
                    }]
                  });
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body d-flex">
              <canvas id="barChart1" style="max-height: 800px;"></canvas>
              <script>
                  document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart1'), {
                      type: 'bar',
                      data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                          label: 'Bar Chart',
                          data: [65, 59, 80, 81, 56, 55, 40],
                          backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                          ],
                          borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                          ],
                          borderWidth: 1
                      }]
                      },
                      options: {
                      scales: {
                          y: {
                          beginAtZero: true
                          }
                      }
                      }
                  });
                  });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <script src="assets/js/main.js"></script>
	<script src="js/app.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

</body>
</html>