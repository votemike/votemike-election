<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Votemike</title>

		<link href="/css/app.css" rel="stylesheet">

		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		@include('mainnav')
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					@yield('header')
					@yield('content')
				</div>
			</div>
		</div>

		<footer>
			@section('credits')
				Website by <a href="http://www.votemike.co.uk" title="Michael Gwynne's Homepage">Michael Gwynne</a>
			@show
		</footer>
		
		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
