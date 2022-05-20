@extends('layouts.head')
@section('content')

<div class="container">
	<div class="row mb-2 text-center" id="our-services">
		<h2>Contact Us</h2>
		<p>Integer convallis magna id arcu blandit blandit. Etiam scelerisque, nibh ac accumsan elementum, tellus nulla placerat augue, non ultricies mauris mauris.</p>
	</div>
	<div class="card">
	  <div class="card-body text-center">
	  	<img src="contact/q.jpg" class="img-fluid mt-3 mb-4" style="width:30rem">
			<div class="mapouter container-fluid">
				<div class="gmap_canvas">
					<iframe width="2000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kec%20tutur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					<a href="https://123movies-to.org"></a><br>
					<style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
					<a href="https://www.embedgooglemap.net">embedding google maps into website</a>
					<style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
				</div>
			</div>
	  </div>
	</div>
	<div class="row mt-5 mb-5">
		<div class="col-4">
			<h4>Contact Us : </h4>
			<p>Mauris ut urna mattis libero congue suscipit. Aenean semper semper tortor, nec hendrerit imperdiet non.</p>
			<hr>
			<div class="row">
				<div class="col-sm-2">
					<span><img src="contact/c1.png" style="width:3rem"></span>
				</div>
				<div class="col">
					<b>Location :</b><br>Pasuruan - East Java - Indonesia
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-2">
					<span><img src="contact/a1.png" style="width:3rem"></span>
				</div>
				<div class="col">
					<b>Email :</b><br>robbyrefta@gmail.com
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-2">
					<span><img src="contact/b1.png" style="width:3rem"></span>
				</div>
				<div class="col">
					<b>Phone :</b><br>(+62)822 3385 8250
				</div>
			</div>
		</div>
		<div class="col-8">
			<form>
			  <div class="mb-3">
			    <input type="text" class="form-control" id="exampleInput" placeholder="Your Name">
			  </div>
			  <div class="mb-3">
			    <input type="email" class="form-control" id="exampleInput" placeholder="Your Emaik">
			  </div>
			  <div class="mb-3">
			    <input type="text" class="form-control" id="exampleInput" placeholder="Subject">
			  </div>
			  <div class="mb-3">
			    <textarea id="exampleTextArea" class="form-control" placeholder="Message" style="height:12rem"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Send Message</button>
			</form>
		</div>
	</div>
</div>
@endsection