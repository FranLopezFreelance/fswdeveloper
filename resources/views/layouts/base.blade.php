<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FSWDeveloper</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/libs.css">

</head>
<body>

	@include(flash)

		<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <a class="navbar-brand" href="/">F.S.W.Developer</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

	<div class="container">

		@yield('content')

	</div>

	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="/js/libs.js"></script>

</body>
</html>