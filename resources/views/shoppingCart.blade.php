@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Shopping Cart</h1>
			<hr>
		</div>
	</div>	

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

			<ul class="list-group">
				<li class="list-group-item">
					<strong>Test</strong>
					<span class="label label-success">$20</span>
					<span class="badge">2</span>
				</li>

				<li class="list-group-item">
					<strong>Test</strong>
					<span class="label label-success">$20</span>
					<span class="badge">2</span>
				</li>

				<li class="list-group-item">
					<strong>Test</strong>
					<span class="label label-success">$20</span>
					<span class="badge">2</span>
				</li>

				<li class="list-group-item">
					<strong>Test</strong>
					<span class="label label-success">$20</span>
					<span class="badge">2</span>
				</li>
			</ul>

		</div>

	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<strong>Total: </strong>$50
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<button class="btn btn-primary">Checkout</button>
		</div>
	</div>	
	
</div>		

@endsection