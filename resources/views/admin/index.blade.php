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
														<h3 class="text-red">{{ $leagues }}</h3>
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
														<h3 class="text-blue">{{ $officials }}</h3>
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
														<h3 class="text-yellow">{{ $teams }}</h3>
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
														<h3 class="text-green">{{ $players }}</h3>
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
														<div class="card-title">Available Refrees</div>
												</div>
												<div class="card-body">
														<div class="scroll370">
																<ul class="user-messages">
																		@foreach ($refrees as $refree)
																				<li>
																						<div class="customer shade-blue">MK</div>
																						<div class="delivery-details">
																								<span class="badge shade-blue">{{ $refree->role }}</span>
																								<h5>{{ $refree->fullname }}</h5>
																								<p>{{ $refree->phone }}</p>
																						</div>
																				</li>
																		@endforeach
																</ul>
														</div>
												</div>
										</div>
								</div>
								{{-- Leagues --}}
								<div class="col-sm-6 col-12">
										<div class="card">
												<div class="card-header">
														<div class="card-title">Leagues Scheduled</div>
												</div>
												<div class="card-body">

														<div class="scroll370">
																<div class="activity-container">
																		@foreach ($scheduled_leagues as $league)
																				<div class="activity-block">
																						<div class="activity-user">
																								<img src="{{ url($league->photo) }}" alt="Activity User">
																						</div>
																						<div class="activity-details">
																								<h4>{{ $league->title }}</h4>
																								<h5>{{ $league->teams }} Teams</h5>
																								<h5>{{ $league->start_date }} to {{ $league->end_date }}</h5>
																								<p>{{ $league->semester_season }}</p>
																								<span class="badge shade-green">{{ $league->status }}</span>
																						</div>
																				</div>
																		@endforeach
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
