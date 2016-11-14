
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Blog Laravel">
	<meta name="author" content="Marcelo Garbin">
	<link rel="icon" href="{{ asset('favicon.gif') }}">

	<title>@yield('title', 'The Laravel 5.3 Blog')</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/blog.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	</head>

	<body>

		<div class="blog-masthead">
			<div class="container">
				<nav class="blog-nav">
					<a class="blog-nav-item" href="{{ route('posts.index') }}">Home</a>
					<a class="blog-nav-item" href="{{ route('admin.posts.index') }}">Admin</a>
				</nav>
			</div>
		</div>

		<div class="container">
			@yield('content')
		</div>

		<footer class="blog-footer">
			<p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
			<p>
				<a href="#">Back to top</a>
			</p>
		</footer>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
