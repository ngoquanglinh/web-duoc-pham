<!DOCTYPE html>
<html>
<head>
	<title>@yield('tittle')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}}">
	<link rel="icon"  type="image/png" href="uploads/logo.png">
	<script src="https://kit.fontawesome.com/8dbffa4ba2.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	@include('layout.header')
	@yield('main')
	@include('layout.footer')
</body>
</html>