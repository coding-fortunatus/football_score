@extends('layout.app')

@section('title', 'Index - Mapoly Football match score stats')

@section('content')
		<section class="sub-main-banner float-start w-100">
				<div class="sub-banner">
						<div class="container">
								<h1 class="text-center"> Schedule </h1>
								<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="{{ route('client.index') }}">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page"> Schedule </li>
										</ol>
								</nav>
						</div>
				</div>
		</section>

		<section class="body-part-total float-start w-100">
				<div class="schedule-main-div my-5">
						<div class="container">
								<div class="table-div-left mt-4">
										<table id="seri3" class="display" style="width:100%">
												<thead>
														<tr>
																<th>Date-Time</th>
																<th>Fixture</th>
																<th>League</th>
																<th>Season</th>
																<th>Field</th>
																<th>Referee</th>
																<th>Status</th>
														</tr>
												</thead>
												<tbody>
														@foreach ($schedules as $schedule)
																<tr>
																		<td> {{ $schedule->match_time }}</td>
																		<td>
																				<a href="#" class="btn ms-ti">
																						{{ $schedule->team1->short_name }}
																						<span>vs</span>
																						{{ $schedule->team2->short_name }}
																				</a>
																		</td>
																		<td> {{ $schedule->league->title }}</td>
																		<td> {{ $schedule->league->semester_season }}</td>
																		<td> {{ $schedule->field->name }}</td>
																		<td> {{ $schedule->official->fullname }}</td>
																		<td> {{ $schedule->status }}</td>
																</tr>
														@endforeach
												</tbody>
										</table>
								</div>
						</div>
				</div>
		</section>
@endsection
