@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">Countries</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="{{ url('/countries/create') }}">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>

		</div>

	</div>

	<hr>

	<div class="row">

		<div class="col-md-4">
			<div class="thumbnail">
				<video autoplay loop muted name="media" style="height: 200px !important; width: 100% !important;">
					<source src="{{ url('media/countries/country-1.mp4') }}" type="video/mp4">
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
					<source src="{{ url('media/countries/country-2.mp4') }}" type="video/mp4">
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
					<source src="{{ url('media/countries/country-3.mp4') }}" type="video/mp4">
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

		@foreach ($countries as $country)

			<form method="POST" action="{{ url('/countries/' . $country->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				
				<div class="col-md-4" style="margin-top: 15px;">

		            <div class="thumbnail">

		                <img src="{{ url('media/countries/' . $country->media) }}" 
		                style="height: 200px !important; width: 100% !important">

			            <div class="caption">
			            	<h3 style="display: inline-block;">{{ ucfirst($country->name) }}</h3>
			            	<h3 style="display: inline-block;" class="pull-right">${{ $country->price }}</h3>
			            	
			            	<p>{{ ucfirst($country->description) }}</p>
			            	<span style="font-size: 40px;">{{ ucfirst($country->artist) }}.</span>

			            	<a href="{{ route('country.addToCart', ['id' => $country->id]) }}" 
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
			<span class="pull-right">{{ $countries->links() }}</span>
		</div>

	</div>

</div>

@endsection