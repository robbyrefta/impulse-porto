@extends('layouts.head')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner carousel-fade" data-bs-ride="carousel">
    <div class="carousel-item active">
      <img src="d.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block rounded" style="background-color: rgb(0, 0, 0, 0.3);">
        <h5>Phasellus feugiat lectus quam</h5>
        <p>Aenean a sapien vel diam placerat tempor. Sed eget ligula.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="e.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block rounded" style="background-color: rgb(0, 0, 0, 0.3);">
        <h5>Suspendisse ut orci id sem</h5>
        <p>Ut vitae pharetra tellus, vel dapibus lorem. Aenean commodo diam.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="f.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block rounded" style="background-color: rgb(0, 0, 0, 0.3);">
        <h5>Ut ac orci eu sapien</h5>
        <p>Nam ornare placerat purus, eu semper sem vestibulum ut. Sed.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div>
	<img src="impulsex.png" class="img-fluid rounded mx-auto d-block mt-5 mb-5">
</div>
<div class="container">
	<hr>
	<div class="row mb-2 mt-5 text-center" id="our-services">
		<h2>Our Services</h2>
	</div>

	<div class="row mb-5">
		<div class="card-group">
		  <div class="card text-center">
		    <img src="a.png" class="rounded mx-auto d-block card-img-top mt-5" style="width: 5rem;" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Mauris sed egestas</h5>
		      <p class="card-text">Duis hendrerit magna in justo ullamcorper ultricies. Nunc volutpat lacus vehicula quam dignissim cursus. Ut.</p>
		    </div>
		  </div>
		  <div class="card text-center">
		    <img src="b.png" class="rounded mx-auto d-block card-img-top mt-5" style="width: 5rem;" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Quisque cursus tortor</h5>
		      <p class="card-text">Etiam et molestie felis. Vivamus molestie turpis ac velit faucibus elementum. Nulla ornare nisi facilisis.</p>
		    </div>
		  </div>
		  <div class="card text-center">
		    <img src="c.png" class="rounded mx-auto d-block card-img-top mt-5" style="width: 5rem;" alt="...">
		    <div class="card-body">
		      <h5 class="card-title">Cras tortor enim</h5>
		      <p class="card-text">Pellentesque dolor tellus, malesuada nec condimentum vel, dapibus quis quam. Cras rutrum, lacus eget consectetur.</p>
		    </div>
		  </div>
		</div>
	</div>

	<hr>
	<div class="row">
		<figure class="text-center">
			<img src="g.jpg" class="img-fluid">
		  <blockquote class="blockquote">
		    <p><b>A well-known quote, contained in a blockquote element.</b></p>
		  </blockquote>
		  <figcaption class="blockquote-footer">
		    Someone famous in <cite title="Source Title">Source Title</cite>
		  </figcaption>
		</figure>
	</div>

	<hr>
	<div class="row mb-2 mt-5 text-center">
		<h2>Get your special offers</h2>
	</div>
		
	<div class="row text-center">
	  <div class="col-sm-4 mb-5">
	    <div class="card">
	      <div class="card-body">
	        <h1 class="card-title">$15 / year</h1>
	        <p class="card-text">Maecenas sodales lacus eget eros euismod, et dictum eros mollis. Cras volutpat et odio at sodales. In tempus sodales eros, at mattis orci aliquam molestie.</p>
	        <a href="#" class="btn btn-primary">Go somewhere</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <div class="card-body">
	        <h1 class="card-title">$50 / year</h1>
	        <p class="card-text">Quisque eget nibh justo. Quisque feugiat, justo a dignissim consequat, orci leo vehicula mi, vitae varius leo neque vel dolor. Cras a mattis diam, sit.</p>
	        <a href="#" class="btn btn-primary">Go somewhere</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <div class="card-body">
	        <h1 class="card-title">$100 / year</h1>
	        <p class="card-text">Nam sodales luctus arcu vitae convallis. Curabitur augue mauris, commodo id tellus eget, sollicitudin consequat mi. Fusce laoreet tempus nisi et porttitor.</p>
	        <a href="#" class="btn btn-primary">Go somewhere</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endsection