@extends('admin.layout.admin')

@section('content')
		<!-- Content wrapper scroll start -->
		<div class="content-wrapper-scroll">
				<!-- Content wrapper start -->
				<div class="content-wrapper">
						<!-- System Statistics -->
						<div class="row">
								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-red">
														<i class="bi bi-life-preserver"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-red">10</h3>
														<p>Leagues</p>
												</div>
										</div>
								</div>

								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-blue">
														<i class="bi bi-person-check"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-blue">24</h3>
														<p>Officials</p>
												</div>
										</div>
								</div>

								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-yellow">
														<i class="bi bi-ui-checks"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-yellow">20</h3>
														<p>Teams</p>
												</div>
										</div>
								</div>

								<div class="col-xxl-3 col-sm-6 col-12">
										<div class="stats-tile">
												<div class="sale-icon shade-green">
														<i class="bi bi-people"></i>
												</div>
												<div class="sale-details">
														<h3 class="text-green">200</h3>
														<p>Players</p>
												</div>
										</div>
								</div>
						</div>
						<!-- Scheduled Matches -->
						<div class="row">
								<div class="col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Scheduled Matches</div>
												</div>
												<div class="card-body">

														<div class="table-responsive">
																<table class="table v-middle">
																		<thead>
																				<tr>
																						<th>Team 1</th>
																						<th>Team 2</th>
																						<th>League</th>
																						<th>Date</th>
																						<th>Time</th>
																						<th>Semester</th>
																						<th>Venue</th>
																				</tr>
																		</thead>
																		<tbody>
																				<tr>
																						<td>
																								<div class="media-box">
																										<img src="assets/images/user3.png" class="media-avatar" alt="Bootstrap Gallery">
																										<div class="media-box-body">
																												<div class="text-truncate">Ellie Collins</div>
																										</div>
																								</div>
																						</td>
																						<td>
																								<div class="media-box">
																										<img src="assets/images/food/img3.jpg" class="media-avatar" alt="Admin Themes">
																										<div class="media-box-body">
																												<div class="text-truncate">Ginger Snacks</div>
																										</div>
																								</div>
																						</td>
																						<td>Arise827</td>
																						<td>12/12/2021</td>
																						<td>$18.00</td>
																						<td>
																								<span class="text-green td-status"><i class="bi bi-check-circle"></i> Paid</span>
																						</td>
																						<td>
																								<span class="badge shade-green min-90">Delivered</span>
																						</td>
																				</tr>
																				<tr>
																						<td>
																								<div class="media-box">
																										<img src="assets/images/user.png" class="media-avatar" alt="Bootstrap Gallery">
																										<div class="media-box-body">
																												<div class="text-truncate">Sophie Nguyen</div>
																										</div>
																								</div>
																						</td>
																						<td>
																								<div class="media-box">
																										<img src="assets/images/food/img6.jpg" class="media-avatar" alt="Admin Themes">
																										<div class="media-box-body">
																												<div class="text-truncate">Guava Sorbet</div>
																										</div>
																								</div>
																						</td>
																						<td>Arise253</td>
																						<td>18/12/2021</td>
																						<td>$32.00</td>
																						<td>
																								<span class="text-red td-status"><i class="bi bi-x-circle"></i> Failed</span>
																						</td>
																						<td>
																								<span class="badge shade-red min-90">Cancelled</span>
																						</td>
																				</tr>
																				<tr>
																						<td>
																								<div class="media-box">
																										<img src="assets/images/user4.png" class="media-avatar" alt="Bootstrap Gallery">
																										<div class="media-box-body">
																												<div class="text-truncate">Darcy Ryan</div>
																										</div>
																								</div>
																						</td>
																						<td>
																								<div class="media-box">
																										<img src="assets/images/food/img5.jpg" class="media-avatar" alt="Admin Themes">
																										<div class="media-box-body">
																												<div class="text-truncate">Gooseberry Surprise</div>
																										</div>
																								</div>
																						</td>
																						<td>Arise878</td>
																						<td>22/12/2021</td>
																						<td>$19.00</td>
																						<td>
																								<span class="text-blue td-status"><i class="bi bi-clock-history"></i> Awaiting</span>
																						</td>
																						<td>
																								<span class="badge shade-blue min-90">Processing</span>
																						</td>
																				</tr>
																		</tbody>
																</table>
														</div>

												</div>
										</div>
								</div>
						</div>
						<!-- Officials, Leagues -->
						<div class="row">
								{{-- Officils --}}
								<div class="col-sm-6 col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Officials</div>
												</div>
												<div class="card-body">
														<div class="scroll370">
																<ul class="user-messages">
																		<li>
																				<div class="customer shade-blue">MK</div>
																				<div class="delivery-details">
																						<span class="badge shade-blue">Refree</span>
																						<h5>Marie Kieffer</h5>
																						<p>Thanks for choosing Apple product, further if you have any questions please contact sales
																								team.</p>
																				</div>
																		</li>
																		<li>
																				<div class="customer shade-yellow">ES</div>
																				<div class="delivery-details">
																						<span class="badge shade-yellow">Line Man</span>
																						<h5>Ewelina Sikora</h5>
																						<p>Boost your sales by 50% with the easiest and proven marketing tool for customer enggement
																								&amp; motivation.</p>
																				</div>
																		</li>
																		<li>
																				<div class="customer shade-yellow">TN</div>
																				<div class="delivery-details">
																						<span class="badge shade-yellow">Line Mna</span>
																						<h5>Teboho Ncube</h5>
																						<p>Use an exclusive promo code HKYMM50 and get 50% off on your first order in the new year.
																						</p>
																				</div>
																		</li>
																		<li>
																				<div class="customer shade-blue">CJ</div>
																				<div class="delivery-details">
																						<span class="badge shade-blue">Refree</span>
																						<h5>Carla Jackson</h5>
																						<p>Befor inviting the administrator, you must create a role that can be assigned to them.
																						</p>
																				</div>
																		</li>
																		<li>
																				<div class="customer shade-red">JK</div>
																				<div class="delivery-details">
																						<span class="badge shade-red">Red Cross</span>
																						<h5>Julie Kemp</h5>
																						<p>Your security subscription has expired. Please renew the subscription.</p>
																				</div>
																		</li>
																</ul>
														</div>
												</div>
										</div>
								</div>
								{{-- Leagues --}}
								<div class="col-sm-6 col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Leagues</div>
												</div>
												<div class="card-body">

														<div class="scroll370">
																<div class="activity-container">
																		<div class="activity-block">
																				<div class="activity-user">
																						<img src="assets/images/user.png" alt="Activity User">
																				</div>
																				<div class="activity-details">
																						<h4>Institutional Football League 2025</h4>
																						<h5>10 Teams</h5>
																						<h5>2025-03-01 to 2025-07-30</h5>
																						<p>Knockout</p>
																						<span class="badge shade-green">Started</span>
																				</div>
																		</div>
																		<div class="activity-block">
																				<div class="activity-user">
																						<img src="assets/images/user3.png" alt="Activity User">
																				</div>
																				<div class="activity-details">
																						<h4>Institutional Football League 2025</h4>
																						<h5>10 Teams</h5>
																						<h5>2025-03-01 to 2025-07-30</h5>
																						<p>Knockout</p>
																						<span class="badge shade-red">Payments</span>
																				</div>
																		</div>
																		<div class="activity-block">
																				<div class="activity-user">
																						<img src="assets/images/user4.png" alt="Activity User">
																				</div>
																				<div class="activity-details">
																						<h4>Institutional Football League 2025</h4>
																						<h5>10 Teams</h5>
																						<h5>2025-03-01 to 2025-07-30</h5>
																						<p>Knockout</p>
																						<span class="badge shade-green">Paid</span>
																				</div>
																		</div>
																		<div class="activity-block">
																				<div class="activity-user">
																						<img src="assets/images/user5.png" alt="Activity User">
																				</div>
																				<div class="activity-details">
																						<h4>Institutional Football League 2025</h4>
																						<h5>10 Teams</h5>
																						<h5>2025-03-01 to 2025-07-30</h5>
																						<p>Knockout</p>
																						<span class="badge shade-green">Sent</span>
																				</div>
																		</div>
																		<div class="activity-block">
																				<div class="activity-user">
																						<img src="assets/images/user2.png" alt="Activity User">
																				</div>
																				<div class="activity-details">
																						<h4>Institutional Football League 2025</h4>
																						<h5>10 Teams</h5>
																						<h5>2025-03-01 to 2025-07-30</h5>
																						<p>Knockout</p>
																						<span class="badge shade-red">Invoice</span>
																				</div>
																		</div>
																</div>
														</div>

												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- Content wrapper end -->
		</div>
		<!-- Content wrapper scroll end -->
@endsection
