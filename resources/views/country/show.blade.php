@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">Countries</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="#">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>

		</div>

	</div>

	<hr>

	<div class="row">

		@foreach ($countries as $country)
			<form method="POST" action="{{ url($thumbnail->id . '/' . $country->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<div class="col-md-4" style="margin-top: 15px;">
		            <div class="thumbnail">
		                <img src="{{ url('images/welcome/' . $country->media) }}">
			            <div class="caption">
			            	<span style="font-size: 40px;">{{ $country->artist }}.</span>
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
			<span class="pull-right">{{ $countries->links() }}</span>
		</div>

	</div>

</div>

@include('partials.welcome.footer')

@endsection