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
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 30%;">Vission</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="{{ URL::to('/') }}/upload/vission_images/{{ $vission->image }}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px; width:300px; height: 290px;">
					<p style="text-align: justify;"> {{ $vission->title }}</p>
				</div>
		</div>
	</section>
@endsection

