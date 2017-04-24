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
			  <h1>Models</h1>
			</div>

		</div>

	</div>

	<div class="row">

  		<div class="col-md-4">
    		<a href="#" class="thumbnail">
      			<img src="images/welcome/example-2.jpg">
    		</a>
 		</div>

 		<div class="col-md-4">
    		<a href="#" class="thumbnail">
      			<img src="images/welcome/example-3.jpg">
    		</a>
 		</div>

 		  <div class="col-md-4">
    		<a href="#" class="thumbnail">
      			<img src="images/welcome/example-4.jpg">
    		</a>
 		</div>

	</div>


	
</div>	

@include('partials.welcome.footer')			

@endsection