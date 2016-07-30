<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FSWDeveloper</title>

	<!-- bootstrap core css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/app.css">

</head>
<body>

	<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
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

	<!-- bootstrap core js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

</body>
</html>