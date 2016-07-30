@extends('layouts.base')

@section('content')

	<h1>New Flyer!</h1>

	<hr />

	<div class="row">

		@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</div>
		@endif

		<form class="col-md-6" method="POST" action="/flyers" enctype="multipart/form-data">

			@include('flyers.form')

		</form>

	</div>

@endsection