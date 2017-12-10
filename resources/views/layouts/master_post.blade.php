<!DOCTYPE html>
<html>
<head>

	<title>Laravel 5</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>

	@include('layouts.nav_post')


	@if($flash = session('message'))
		
		<div class="alert alert-success">
		
			{{ $flash }}

		</div>

	@endif


	<div id="container" class="total-width">
		<div id="content" class="site-width center">
			<div id="main">
				@yield('content')
			</div>
			<div id="sidebar">
				@include('layouts.sidebar')
			</div>
		</div>
	</div>

	@include('layouts.footer')

</body>
</html>