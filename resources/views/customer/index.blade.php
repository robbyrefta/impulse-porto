@extends('layouts.app')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{session('success')}}</p>
@endif
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
<div class="row text-center mb-2">
	<h4>Data Customer</h4>
</div>
<div class="card mb-5">
	<div class="card-header" style="margin-right: 0;margin-left: auto;">
		<form class="row row-cols-auto g-2">
			<div class="col">
				<input class="form-control" type="text" name="q" value="{{$q}}" placeholder="Search here..">
			</div>
			<div class="col">
				<button class="btn btn-primary">Search</button>
			</div>
			<div class="col">
				<a class="btn btn-warning" href="/customer">Refresh</a>
			</div>
			<div class="col">
				<a class="btn btn-success" href="{{route('customer.create')}}">Add Data</a>
			</div>
		</form>
	</div>
	<div class="card-body table-responsive p-0">		
		<table class="table table-bordered table-striped table-hover m-0 table-sm">
			<thead>
				<th>#</th>
				<th>Customer Name</th>
				<th>Contact Name</th>
				<th>Address</th>
				<th>City</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($customers as $customer)
					<tr>
						<td>{{ $customer->customer_id }}.</td>
						<td>{{ $customer->customer_name }}</td>
						<td>{{ $customer->contact_name }}</td>
						<td>{{ $customer->address }}</td>
						<td>{{ $customer->city }}</td>
						<td>
							<a href="{{route('customer.edit', $customer)}}" class="btn btn-sm btn-primary">Edit</a>
							<form method="post" action="{{route('customer.destroy',$customer)}}" style="display: inline;" onsubmit="return confirm('Delete {{$customer->customer_name}} ?')">
								@csrf
								@method('DELETE')
								<button class="btn btn-sm btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection