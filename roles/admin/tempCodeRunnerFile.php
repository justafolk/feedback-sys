<?php
<div class="col-12 col-md-6 col-xxl-6 order-2 order-xxl-2">
									<div class="card flex-fill w-100">
										<div class="card-header d-flex justify-content-between">
											<div>
												<h5 class="card-title mb-0">PHP - Course Exits Survey</h5>
												<h6 class="card-title mb-0">26/03/2022</h6>
											</div>
											<button class="btn btn-primary" id="id5">View</button>
										</div>
										<div class="card">
											<div class="card-body">
											<div id="barChart1" style="min-height: 400px;" class="echart"></div>

											<script>
												document.addEventListener("DOMContentLoaded", () => {
												echarts.init(document.querySelector("#barChart1")).setOption({
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