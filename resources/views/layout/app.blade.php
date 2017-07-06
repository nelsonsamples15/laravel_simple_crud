<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laravel @yield('title')</title>
	<link rel="stylesheet"  href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet"  href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">

</head>
<body>
	<div class="container">
		<div class="row">
			@section('body')
				@show
		</div>
	</div>
</body>
</html>

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>