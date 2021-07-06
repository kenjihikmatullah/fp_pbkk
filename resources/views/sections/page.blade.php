<!DOCTYPE html>
<html lang="en">

<head>
	@include('sections.head')

	@yield('more_css')
</head>

<body>
	@include('sections.header')

	@yield('content')

	<!-- contact section end -->
	@include('sections.footer')

	@include('sections.scripts')
	@yield('more_js')

</body>

</html>