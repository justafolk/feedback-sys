<div id="profile1">
							<div class="row mt-3">
								<div class="col-md-12 mb-3">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for ....">
										<span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Search</button>
										</span>
									</div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-3" onclick="show1()" >Bar Graph</button>
                                        <button class="btn btn-primary me-3" onclick="show2()" >Pie Graph</button>
                                        <button class="btn btn-primary me-3" onclick="show3()" >List Form</button>
                                    </div>
								</div>
								<div class="col-12 col-md-12 col-xxl-6 order-1 order-xxl-1">
									<div class="card flex-fill w-200">
										<div class="card-header d-flex justify-content-between">
											<div>
												<h5 class="card-title mb-0">PHP - Feedback</h5>
												<h6 class="card-title mb-0">26/03/2022</h6>
											</div>
											<button class="btn btn-primary" id="id4">View</button>
										</div>
										<div class="card-body d-flex">
											<canvas id="barChart" style="max-height: 800px;"></canvas>
											<script>
												document.addEventListener("DOMContentLoaded", () => {
												new Chart(document.querySelector('#barChart'), {
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
						</div>