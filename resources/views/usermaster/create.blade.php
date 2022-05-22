@extends('layouts.app')
@section('content')
<h3 class="mb-3 mt-3">@yield('title', $title)</h3>
<div class="row">
	<div class="col-md-12">
		@if($errors->any())
		@foreach($errors->all() as $err)
		<p class="alert alert-danger">{{$err}}</p>
		@endforeach
		@endif
		<form method="post" action="{{route('create')}}">
			@csrf
			<div class="mb-3">
				<label>Name <span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="name" value="{{old('name')}}">
			</div>
			<div class="mb-3">
				<label>Email <span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="email" value="{{old('email')}}">
			</div>
			<div class="mb-3">
				<label>Password </label>
				<input type="text" class="form-control" name="password" value="{{old('password')}}">
			</div>
			<div class="mb-3 text-center">
				<button class="btn btn-success">Save</button>
				<a href="{{route('usermaster.index')}}" class="btn btn-danger">Cancel</a>
			</div>
		</form>
	</div>
</div>

@endsection