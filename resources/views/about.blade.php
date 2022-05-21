@extends('layouts.head')
@section('content')

<style>
#exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: rgb(76,180,169);
  padding : 5px 15px;
}
</style>

<div class="container">
	<div class="row mb-2 text-center" id="our-services">
		<h2>About Us</h2>
	</div>
	<div class="card">
	  <div class="card-body text-center">
	  	<img src="img/about/p.jpg" class="img-fluid mb-3" style="width:40rem">
		<div id="exTab3" class="container">
			<ul class="nav nav-tabs">
				<li><a class="nav-link active" href="#1a" data-toggle="tab">Proin et</a></li>
				<li><a class="nav-link" href="#2a" data-toggle="tab">In ornare</a></li>
				<li><a class="nav-link" href="#3a" data-toggle="tab">In fermentum</a></li>
	  			<li><a class="nav-link" href="#4a" data-toggle="tab">Nulla dignissim</a></li>
			</ul>
			<div class="tab-content clearfix">
				<div class="tab-pane active" id="1a">
	          		<h4>Proin vel turpis arcu. Morbi cursus scelerisque urna, et sagittis neque pretium eget. Duis varius ante sit amet volutpat fringilla. Vestibulum quis nulla vitae purus sollicitudin suscipit. Nam id iaculis ex. Curabitur vehicula ligula justo. Nullam ullamcorper libero lorem, non tristique magna pharetra vel. Vivamus pellentesque orci quis dignissim fringilla. Maecenas volutpat gravida ullamcorper. Sed viverra mollis scelerisque.</h4>
				</div>
				<div class="tab-pane" id="2a">
	          		<h4>Vivamus cursus sed tortor in commodo. Nulla semper vitae turpis at mollis. Nullam lacinia nibh sed enim facilisis placerat. In ornare at mi auctor porttitor. In quis porta odio. Ut turpis ligula, consequat euismod ipsum quis, cursus feugiat odio. Phasellus feugiat nisi eu rutrum dignissim. Sed dapibus vehicula interdum. Quisque aliquet efficitur est quis feugiat.</h4>
				</div>
		        <div class="tab-pane" id="3a">
		         	<h4>Sed aliquet, sem vitae pellentesque facilisis, turpis mi blandit urna, sed laoreet quam dui at leo. Suspendisse rutrum leo in sapien rutrum accumsan. Ut vehicula viverra orci varius molestie. Fusce placerat elit vitae erat ultricies, sit amet pharetra elit venenatis. Aliquam at volutpat ex. Duis justo sem, facilisis at enim ac, faucibus consectetur lorem. Aliquam vitae suscipit lorem.</h4>
				</div>
	          	<div class="tab-pane" id="4a">
	          		<h4>Fusce sagittis libero accumsan aliquam dignissim. Proin eleifend nibh orci, vel lobortis sapien lacinia in. Phasellus placerat neque suscipit augue luctus auctor. Phasellus eleifend sollicitudin dui eu commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer ipsum eros, aliquam ac felis eget, iaculis finibus elit.</h4>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<div class="row text-center mt-5">
		<h4>Our Partnership</h4>
	</div>
	<div class="row text-center mt-5 mb-5">
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/s.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/t.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/u.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/v.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/w.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/x.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/y.png" class="card-img-top" alt="...">
			</div>
		</div>
		<div class="col">
			<div style="width: 7rem;">
			  <img src="img/about/z.png" class="card-img-top" alt="...">
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection