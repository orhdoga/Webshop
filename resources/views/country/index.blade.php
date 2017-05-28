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

	<div class="row" id="fadeOne">

		@foreach ($firstCountries as $firstCountry)

			<form method="POST" action="{{ url('/countries/' . $firstCountry->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}

				<div class="col-md-4" style="margin-top: 15px;">

					<div class="thumbnail">

						<video autoplay loop muted poster="{{ url('media/placeholder.jpg') }}" name="media" style="height: 200px !important; width: 100% !important;">
							<source src="{{ url('media/countries/' . $firstCountry->media) }}" type="video/mp4">
						</video>

						<div class="caption">
			            	<h3 style="display: inline-block;">{{ $firstCountry->name }}</h3>
			            	<h3 style="display: inline-block;" class="pull-right">${{ $firstCountry->price }}</h3>
			            	
			            	<p>{{ $firstCountry->description }}</p>
			            	<span style="font-size: 40px;">{{ $firstCountry->artist }}</span>

			            	<a href="{{ route('country.addToCart', ['id' => $firstCountry->id]) }}" 
			            	style="margin-top: 16px; margin-left: 10px;" 
			            	class="btn btn-primary pull-right">
			            		Add To Shopping Cart &nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i>
			            	</a>

			            	<button style="margin-top: 16px;" class="btn btn-danger pull-right">Delete</button>
			            </div> 

		        	</div> 

				</div>

			</form>	

		@endforeach

	</div>

	<div class="row" id="fadeOne">

		@foreach($countries as $country)

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

</div>

@endsection