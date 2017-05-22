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

				<form method="POST" action="{{ url($thumbnail->id . '/countries') }}" enctype="multipart/form-data">
					{{ csrf_field() }}

					<input type="hidden" name="thumbnail_id" value="{{ $thumbnail->id }}">

					<div class="form-group">
						<label>Artist (initials)</label>	
						<input type="text" class="form-control" name="artist" value="{{ old('artist') }}">
					</div>	

					<div class="form-group">
						<input type="file" name="media[]" multiple>
					</div>

					<button class="btn btn-primary">Submit</button>

				</form>

			</div>

		</div>

	</div>	

</div>

@endsection