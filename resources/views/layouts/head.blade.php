<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Impulse Porto | Robby</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand fs-5" href="/"><b>Impulse Porto</b></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
		      <div class="offcanvas-header">
		        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Impulse Porto | Robby</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		      </div>
		      <div class="offcanvas-body">
		        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
		          <li class="nav-item">
		            <a class="nav-link active" aria-current="page" href="/">Home</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="/product">Product</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="/about">About</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="/contact">Contact</a>
		          </li>
		          @guest
		          <li class="nav-item">
		            <a class="nav-link" href="/login">Login To Admin Page</a>
		          </li>
		          @else
		          <li class="nav-item">
	                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
	              </li>
	              @endguest
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>
	</div>
	<div class="container-fluid">
		@yield('content')
	</div>
	<footer class="bg-dark">
		<div class="container-fluid">
			<div class="row">
				<footer class="mt-4" style="color:rgb(108,117,125)">
			    <div class="row">
			    	<div class="col-sm-4">
			    		<h4>IMPULSE PORTO</h4>
			    		<p>Lorem ipsum dolor sit amet<br>Sed mattis tempor mi non.</p>
			    		<p>Phone : +62 343 1234<br>Email : robbyrefta@gmail.com</p>
			    	</div>
			    	<div class="col-sm-4">
			    		<h5>Usefull Links</h5>
			    		<ul>
				    		<li class="mb-2"><a href="/" class="text-decoration-none">Home</a></li>
				    		<li class="mb-2"><a href="/product" class="text-decoration-none">Product</a></li>
				    		<li class="mb-2"><a href="/about" class="text-decoration-none">About</a></li>
				    		<li class="mb-2"><a href="/contact" class="text-decoration-none">Contact</a></li>
				    		<li class="mb-2"><a href="/login" class="text-decoration-none">Login To Admin Page</a></li>
			    		</ul>
			    	</div>
			    	<div class="col-sm-4">
			    		<h5>Our Services</h5>
			    		<ul>
				    		<li class="mb-2"><a href="#our-services" class="text-decoration-none">Mauris sed egestas</a></li>
				    		<li class="mb-2"><a href="#our-services" class="text-decoration-none">Quisque cursus tortor</a><br></li>
				    		<li class="mb-2"><a href="#our-services" class="text-decoration-none">Cras tortor enim</a><br></li>
			    		</ul>
			    	</div>
			    </div>
			  </footer>
		  </div>
		  <div class="row">
		  	<div class="col-sm-12 justify-content-center mb-3 mt-3" style="color: ghostwhite;">
		  		<small>&copy; Copyright <b><a class="text-decoration-none" href="https://www.linkedin.com/in/robbyrefta/" target="_blank">Robby Refta</a></b>. All Rights Reserved</small>
		  	</div>
		  </div>
		</div>
	</footer>
</body>
</html>