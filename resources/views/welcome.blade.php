@extends('layouts.welcome')

@section('content')

<div class="container-fluid">

	<div class="row">

		<div class="col-md-12">

			@include('partials.welcome.carousel')

		</div>

	</div>
	
</div>

<div class="container">

	<div class="row">

		<div class="col-md-12 text-center">
			
			<div class="page-header">
			  <h1>Pictures at its best shape..</h1>
			</div>

		</div>

	</div>

	<div class="row">
		@foreach ($thumbnails as $thumbnail)
		 		<div class="col-md-4">
		            <div class="thumbnail">
		                <img src="{{ url('images/welcome/' . $thumbnail->image) }}">
		                <div class="caption">
		                	<div class="text-center">
					    		<a href="#" class="tag">
					    			Countries
					    		</a>
					    		<a href="#" class="tag">
					    			Models
					    		</a>
					    		<a href="#" class="tag">
					    			News
					    		</a>
				    		</div>
		                </div>
		            </div>    
		        </div>
		@endforeach
	</div>
	
</div>	

@include('partials.welcome.footer')			

@endsection