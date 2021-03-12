@extends('frontend.layouts.app')

@section('main-content')
    	<!-- Slider Section -->
    @include('frontend.slider')
	<!-- Mission and Vision -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission and Vision</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="{{ URL::to('/') }}/upload/mission_images/{{ $mission->image }}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px; width:300px; height: 290px;">
					<p style="text-align: justify;"><strong>Mission</strong> {{ $mission->title }}</p>
				</div>
				<div class="col-md-6">
					<img src="{{ URL::to('/') }}/upload/vission_images/{{ $vission->image }}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px; width:300px;">
					<p style="text-align: justify;"><strong>Vision</strong> {{ $vission->title }}</p>
				</div>
			</div>
		</div>
	</section>
	<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 85%">News and Events</h3>
				</div>
				<div class="col-md-9" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($news_events as  $news)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ date('d-M-Y', strtotime($news->date)) }}</td>
                                    <td><img src="{{ URL::to('/') }}/upload/news_images/{{  $news->image }}" style="width: 200px; height: 120px;"></td>
                                    <td>{{  $news->title }}</td>
                                    <td><a href="{{ route('news_events.details',  $news->id) }}" class="btn btn-info">Details</a></td>
                                </tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Services -->
	<section class="our_services">
		<div class="container" style="padding-top: 15px">
			<!-- Nav tab -->
			<ul class="nav nav-tabs">
                @php
                    $service_count = 0;
                @endphp
                @foreach($services as $service)
				<li class="nav-item">
					<a href="#{{ $service->id }}" class="nav-link @if($service_count == 0) { active } @endif" data-toggle="tab">{{ $service->title }}</a>
				</li>
                @php
                    $service_count ++;
                @endphp
                @endforeach
			</ul>
			<!-- Tab Content -->
			<div class="tab-content">
                @php
                    $service_count = 0;
                @endphp
                @foreach($services as $service)
				<div id="{{ $service->id }}" class="container tab-pane @if($service_count == 0) { active } @endif">
					<h3>{{ $service->title }}</h3>
					<p>{{ $service->sub_title }}</p>
				</div>
                @php
                    $service_count ++;
                @endphp
                @endforeach
			</div>
		</div>
	</section>
@endsection
