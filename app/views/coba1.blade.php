<!DOCTYPE html>
<html>
<head>
	<title>Blade Template</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap/css/bootstrap.css') }}"/>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Blade Template - Laravel 4.2</h1>
			<p>@yield('content')</p>
			<p><a href="#" class="btn btn-danger btn-md">Learn more &raquo;</a></p>
		</div>
	</div>
</body>
</html>