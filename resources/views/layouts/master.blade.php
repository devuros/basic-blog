<!DOCTYPE html>
<html>
<head>
	<title>My app-Laravel 5</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

	@include('layouts.nav')

	<div id="container" class="total-width">
		<div id="content" class="site-width center">
			@yield('content')
		</div>
	</div>

	@include('layouts.footer')

</body>
</html>