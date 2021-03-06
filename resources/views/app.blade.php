<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{url()}}/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>



@if(URL::current() === 'http://www.christchurch.e-sussex.sch.uk/dev/public')

	<header class="homepage">

	@include('partials.header_img')

@else

	<header>

@endif

	@include('partials.nav')
	
	</header>
	
	@yield('content')

	<!-- Scripts -->
	
	@include('partials.footer')
	<script src="{{ asset('/js/vendor.js') }}"></script>
	@yield('scripts')
	@include('partials.scripts')
</body>
</html>
