@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<nav class="navbar bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand fs-5" href="/"><b>Impulse Porto</b></a>
          @guest	          
            <a class="nav-link" href="/login">Login To Admin Page</a>	          
          @else
              <a class="nav-link" href="{{ route('signout') }}">Logout</a>
          @endguest		   
		  </div>
		</nav>
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-sm-3 mb-3">
				<div class="card" style="width: 10rem;">
					<a href="/usermaster" class="text-decoration-none text-center">
				  	<img src="img/be/user.png" class="card-img-top mt-2" alt="asdasd" style="height:5rem;width:5rem">
				  	<hr>
						<h5 class="card-title text-dark">User</h5>
				  </a>
				</div>
			</div>
			<div class="col-sm-3 mb-3">
				<div class="card" style="width: 10rem;">
					<a href="/customer" class="text-decoration-none text-center">
				  	<img src="img/be/customer.png" class="card-img-top mt-2" alt="asdasd" style="height:5rem;width:5rem">
				  	<hr>
						<h5 class="card-title text-dark">Customer</h5>
				  </a>
				</div>
			</div>
			<div class="col-sm-3 mb-3">
				<div class="card" style="width: 10rem;">
					<a href="#" class="text-decoration-none text-center">
				  	<img src="img/be/product.png" class="card-img-top mt-2" alt="asdasd" style="height:5rem;width:5rem">
				  	<hr>
						<h5 class="card-title text-dark">Product</h5>
				  </a>
				</div>
			</div>
			<div class="col-sm-3 mb-3">
				<div class="card" style="width: 10rem;">
					<a href="#" class="text-decoration-none text-center">
				  	<img src="img/be/delivery.png" class="card-img-top mt-2" alt="asdasd" style="height:5rem;width:5rem">
				  	<hr>
						<h5 class="card-title text-dark">Delivery</h5>
				  </a>
				</div>
			</div>
		</div>
	</div>
@endsection