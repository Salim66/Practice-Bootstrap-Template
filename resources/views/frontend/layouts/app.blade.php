<!DOCTYPE html>
<html>
    @include('frontend.layouts.head')
<body>
	<!-- Header Section -->
	@include('frontend.layouts.header')

    @section('main-content')
    @show()

	<!-- Footer Part -->
	@include('frontend.layouts.footer')



	@include('frontend.layouts.partials.scripts')
</body>
</html>
