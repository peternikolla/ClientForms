<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	
		<nav class="navbar navbar-inverse">
<!-- 		
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('clients') }}">Client Alert</a>
			</div>
 -->			
			<ul class="nav navbar-nav">
				<li><a class="navbar-brand" href="{{ URL::to('clients') }}">View All Clients</a></li>
				<li><a class="navbar-brand" href="{{ URL::to('clients/create') }}">Create a Client</a>
				<li><a class="navbar-brand" href="{{ URL::to('logout') }}">Logout</a>
			</ul>
		</nav>
		
		@yield('content')
		
	</div>
</body>
</html>
