<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Belajar Laravel 5.1</title>
	{!! Html::style('assets/css/bootstrap.min.css') !!}
</head>
<body>
@yield('content')
 	{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') !!}
 	{!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>