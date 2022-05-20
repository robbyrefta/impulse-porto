@extends('layouts.head')
@section('content')
<h3 class="mb-3 mt-3">@yield('title', $title)</h3>
<div class="row">
	<div class="col-md-12">
		@if($errors->any())
		@foreach($errors->all() as $err)
		<p class="alert alert-danger">{{$err}}</p>
		@endforeach
		@endif
		<form method="post" action="{{route('customer.store')}}">
			@csrf
			<div class="mb-3">
				<label>Customer Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="customer_name" value="{{old('customer_name')}}">
			</div>
			<div class="mb-3">
				<label>Contact Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="contact_name" value="{{old('contact_name')}}">
			</div>
			<div class="mb-3">
				<label>Address </label>
				<input type="text" class="form-control" name="address" value="{{old('address')}}">
			</div>
			<div class="mb-3">
				<label>City </label>
				<input type="text" class="form-control" name="city" value="{{old('city')}}">
			</div>
			<div class="mb-3 text-center">
				<button class="btn btn-success">Save</button>
				<a href="{{route('customer.index')}}" class="btn btn-danger">Cancel</a>
			</div>
		</form>
	</div>
</div>

@endsection