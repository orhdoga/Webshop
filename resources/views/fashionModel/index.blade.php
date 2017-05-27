@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">Models</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="{{ url('/models/create') }}">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>

		</div>

	</div>

	<hr>	

	<div class="row">

		<div class="col-md-4">
			<div class="thumbnail">
				<video autoplay loop muted name="media" style="height: 200px !important; width: 100% !important;">
					<source src="{{ url('media/fashionModels/fashionModel-1.mp4') }}" type="video/mp4">
				</video>
				<div class="caption">
	            	<h3 style="display: inline-block;">Test</h3>
	            	<h3 style="display: inline-block;" class="pull-right">$30</h3>
	            	
	            	<p>Test</p>
	            	<span style="font-size: 40px;">Ph.</span>

	            	<a href="#" 
	            	style="margin-top: 16px; margin-left: 10px;" class="btn btn-primary pull-right">
	            		Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i>
	            	</a>

	            	<button style="margin-top: 16px;" class="btn btn-danger pull-right">Delete</button>
	            </div>  
        	</div>    
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<video autoplay loop muted name="media" style="height: 200px !important; width: 100% !important;">
					<source src="{{ url('media/fashionModels/fashionModel-2.mp4') }}" type="video/mp4">
				</video>
				<div class="caption">
	            	<h3 style="display: inline-block;">Test</h3>
	            	<h3 style="display: inline-block;" class="pull-right">$50</h3>
	            	
	            	<p>Test</p>
	            	<span style="font-size: 40px;">Ph.</span>

	            	<a href="#" 
	            	style="margin-top: 16px; margin-left: 10px;" class="btn btn-primary pull-right">
	            		Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i>
	            	</a>

	            	<button style="margin-top: 16px;" class="btn btn-danger pull-right">Delete</button>
	            </div>  
        	</div>    
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<video autoplay loop muted name="media" style="height: 200px !important; width: 100% !important;">
					<source src="{{ url('media/fashionModels/fashionModel-3.mp4') }}" type="video/mp4">
				</video>
				<div class="caption">
	            	<h3 style="display: inline-block;">Test</h3>
	            	<h3 style="display: inline-block;" class="pull-right">$80</h3>
	            	
	            	<p>Test</p>
	            	<span style="font-size: 40px;">Ph.</span>

	            	<a href="#" 
	            	style="margin-top: 16px; margin-left: 10px;" class="btn btn-primary pull-right">
	            		Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i>
	            	</a>

	            	<button style="margin-top: 16px;" class="btn btn-danger pull-right">Delete</button>
	            </div>  
        	</div>    
		</div>

	</div>	

	<div class="row">

		@foreach ($fashionModels as $fashionModel)

			<form method="POST" action="{{ url('/models/' . $fashionModel->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				
				<div class="col-md-4" style="margin-top: 15px;">

		            <div class="thumbnail">

		                <img src="{{ url('media/fashionModels/' . $fashionModel->media) }}" 
		                style="height: 200px !important; width: 100% !important">

			            <div class="caption">
			            	<h3 style="display: inline-block;">{{ ucfirst($fashionModel->name) }}</h3>
			            	<h3 style="display: inline-block;" class="pull-right">${{ $fashionModel->price }}</h3>
			            	
			            	<p>{{ ucfirst($fashionModel->description) }}</p>
			            	<span style="font-size: 40px;">{{ ucfirst($fashionModel->artist) }}.</span>

			            	<a href="{{ route('fashionModel.addToCart', ['id' => $fashionModel->id]) }}" 
			            	style="margin-top: 16px; margin-left: 10px;" class="btn btn-primary pull-right">
			            		Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i>
			            	</a>

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