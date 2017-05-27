@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-6">

			<h1>Upload media</h1>
			<hr>

		</div>

	</div>

	<div class="row">

		<div class="col-md-6">

			<div class="well">

				<form method="POST" action="{{ url('/countries') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<label for="artist">Artist (initials)</label>	
						<input id="artist" type="text" class="form-control" name="artist" value="{{ old('artist') }}" style="width: 60px;">
					</div>

					<div class="form-group">
						<label for="title">Title</label>	
						<input id="title" type="text" class="form-control" name="name" value="{{ old('title') }}">
					</div>

					<div class="form-group">
						<label for="description">Description</label>	
						<textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}"></textarea>
					</div>

				    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input id="price" type="text" class="form-control" name="price" style="width: 70px;" value="{{ old('price') }}">
                        </div>
                    </div>				

					<div class="form-group">
						<input type="file" name="media">
					</div>

					<button class="btn btn-primary">Submit</button>

				</form>

			</div>

		</div>

	</div>	

</div>

@endsection