@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">Models</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="{{ url($thumbnail->id . '/' . 'models' . '/upload') }}">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>

		</div>

	</div>

	<hr>		

	<div class="row">

		@foreach ($fashionModels as $fashionModel)
			<form method="POST" action="{{ url($thumbnail->id . '/models/' . $fashionModel->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<div class="col-md-4" style="margin-top: 15px;">
		            <div class="thumbnail">
		                <img src="{{ url('images/fashionModel/' . $fashionModel->media) }}"
		                style="height: 200px !important; width: 100% !important">
			            <div class="caption">
			            	<h3 style="display: inline-block;">{{ $fashionModel->name }}</h3>
			            	<h3 style="display: inline-block;" class="pull-right">${{ $fashionModel->price }}</h3>
			            	<p>{{ $fashionModel->description }}</p>
			            	<span style="font-size: 40px;">{{ ucfirst($fashionModel->artist) }}.</span>
			            		<button style="margin-top: 16px; margin-left: 10px;" class="btn btn-primary pull-right">Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button>
			            	<button style="margin-top: 16px;" class="btn btn-danger pull-right">Delete</button>
			            </div>   	            
		            </div>  
				</div>
			</form>
		@endforeach

	</div>

	<hr>

	<div class="row">

		<div class="col-md-12">
			<span class="pull-right">{{ $fashionModels->links() }}</span>
		</div>

	</div>

</div>

@endsection