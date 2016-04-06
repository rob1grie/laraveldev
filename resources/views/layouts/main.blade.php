<!DOCTYPE html>
<html>
	<head>
		<title>TaskManager - @yield('title')</title>
		<link rel='stylesheet' href="/css/style.css">
	</head>
	<body>
		<header>
			<h1>TaskManager</h1>
			<nav>
				<li><a href="/task">Home</a></li>
				<li><a href="/task/create">Create New Task</a></li>
			</nav>
		</header>
		<div class='clr'>
		@yield('content')
	</body>
</html>