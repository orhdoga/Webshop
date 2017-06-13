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

 		<div class="col-md-4" id="fadeOne">
            <a href="{{ url('/countries') }}">
	            <div class="thumbnail">
	                <img src="{{ url('media/welcome/country.jpg') }}">
	                <div class="caption">
	                	<div class="text-center">
				    		<span class="tag">Countries</span>
			    		</div>
	                </div>
	            </div>    
  			</a>
        </div>

 		<div class="col-md-4" id="fadeTwo">
            <a href="{{ url('/models') }}">
	            <div class="thumbnail">
	                <img src="{{ url('media/welcome/model.jpg') }}">
	                <div class="caption">
	                	<div class="text-center">
				    		<span class="tag">Models</span>
			    		</div>
	                </div>
	            </div>    
  			</a>
        </div>

 		<div class="col-md-4" id="fadeThree">
            <a href="{{ url('/news') }}">
	            <div class="thumbnail">
	                <img src="{{ url('media/welcome/newsItem.jpg') }}">
	                <div class="caption">
	                	<div class="text-center">
				    		<span class="tag">News</span>
			    		</div>
	                </div>
	            </div>    
  			</a>
        </div>

	</div>
	
</div>	

@include('partials.welcome.footer')			

@endsection