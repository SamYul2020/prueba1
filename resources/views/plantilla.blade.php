<!DOCTYPE html>
<html>
<head>

		<style type="text/css">
			.active a {

				color:red;
				text-decoration: none;
			}			


		</style>

</head>
<body>

	<nav>

		<ul>
			<li class="{{setActive('about') }}"><a href="/about">About</a></li>
			<li class="{{setActive('contact') }}"><a href="/contact">Contact</a></li>
			<li class="{{setActive('home') }}"><a href="/">Home</a></li>
			<li class="{{setActive('portfolio') }}"><a href="/portfolio">Portfolio</a></li>

		</ul>

	</nav>

	@yield('content')

	

</body>
</html>