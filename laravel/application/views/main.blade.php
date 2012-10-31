<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans YEAH</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
</head>
<body class="body">
	<div class="navbar-inner navbar navbar-fixed-top">
		<div class="" id="nav-main">
			<a class="brand" href="#"><b>Guestgame</b></a>
			<ul class="nav">							
				@yield('nav-elem')
			</ul>
		</div>
	</div>

	<div class="container-fluid" id="container">
		<div class="row-fluid">
			<div class="span2" >
				@yield('nav-elem-second')									
			</div>
			<div class="span10">
				@yield('container')		
			</div>
		</div>
	</div>
	{{ HTML::script('http://code.jquery.com/jquery-1.8.2.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/login-sign-in.js') }}
	{{ HTML::script('js/site.js') }}	
	@yield('script')

</body>
</html>
