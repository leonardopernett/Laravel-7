<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
<style>
	.active{
		color:red;
		text-decoration: none;
	}
</style>
<body>
    @include('partial.navigation')
	@yield('content')
</body>
</html>