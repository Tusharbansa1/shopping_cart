@extends('main')

@section('title', 'Cart')

@section('content')

		<div class="container-fluid">
			<div class="row">
			 <div class="col-md-6 col-lg-6 text-center">
				<h4 class="text-center">Name</h4>
			</div>
			<div class="col-md-6 col-lg-6 text-center">
				<h4 class="text-center">{{ $user->name }}</h4>
			</div>
			</div>
			<hr>
			<div class="row">
			 <div class="col-md-6 text-center">
				<h4>Email</h4>
			</div>
			<div class="col-md-6 text-center">
				<h4>{{ $user->email }}</h4>
			</div>
			</div>
			<hr>
			<div class="row">
			 <div class="col-md-6 text-center">
				<h4>Address</h4>
			</div>
			<div class="col-md-6 text-center">
				<h4>{{ $user->address }}</h4>
			</div>
			</div>
			<hr>
		</div>

		@endsection