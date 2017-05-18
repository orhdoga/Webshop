@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">Models</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="#">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>
			<hr>

		</div>

	</div>

	<div class="row">

		@foreach ($thumbnail->fashionModels as $fashionModel)
			<div class="col-md-4" style="margin-top: 15px;">
	            <div class="thumbnail">
	                <img src="{{ url('images/welcome/' . $fashionModel->media) }}">
		            <div class="caption">
		            	<span style="font-size: 40px;">{{ $fashionModel->artist }}.</span>
		            	<button style="margin-top: 16px;" class="btn btn-primary pull-right">Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button>
		            </div>  	            
	            </div>  
			</div>
		@endforeach

	</div>

</div>

@endsection