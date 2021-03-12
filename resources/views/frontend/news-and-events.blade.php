@extends('frontend.layouts.app')


@section('main-content')
	<!-- Banner Section -->
	<section class="banner_part">
		<img src="{{ asset('frontend/assets/image/') }}/banner.jpg" style="width: 100%">
	</section>

	<!-- Mission Section -->
	<section class="about_us">
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
@endsection

