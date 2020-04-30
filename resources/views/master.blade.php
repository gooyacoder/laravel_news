<!DOCTYPE html>
<html>
<head>
	<title>Online News</title>
</head>
<body>
	@section('sidebar')
		<p>This is parent / Master page.</p>

		@show

	<div>
		@yield('component')
	</div>

</body>
</html>