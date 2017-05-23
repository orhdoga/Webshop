@extends('layouts.app')

@section('content')

 @if (Session::has('cart'))

	<div class="row">
		
		<div class="col-md-6 col-md-offset-3">
			<h1>Shopping Cart</h1>
			<hr>
		</div>

	</div>	

    <div class="row">
      
    	<div class="col-md-6 col-md-offset-3">
        	
        	<ul class="list-group">
            	@foreach($countries as $country)
                	<li class="list-group-item">
        				<strong>{{ $country['item']['name'] }}</strong>
        				<span class="label label-success">${{ $country['price'] }}</span>
        				<span class="badge">{{ $country['qty']}}</span>
    				
	    				<div class="btn-group">
	               			<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
	                 			Action <span class="caret"></span>
	                 		</button>
		                 	<ul class="dropdown-menu">
		                   		<li>
		                   			<a href="{{ route('country.reduceByOne', ['id' => $country['item']['id']]) }}">Reduce By 1
		                   			</a>
								</li>
		                    	<li>
		                    		<a href="{{ route('country.remove', ['id' => $country['item']['id']]) }}">
										Reduce By All
									</a>
		                      	</li>
		                 	</ul>
	            		</div>
    				</li>
              	@endforeach
           </ul>

       </div>

    </div>


    <div class="row">

       <div class="col-md-6 col-md-offset-3">
             <strong>Total: ${{ $totalPrice }}</strong>
       </div>

    </div>

    <hr>

    <div class="row">

       <div class="col-md-6 col-md-offset-3">
         <a href="#" type="button" class="btn btn-success">Checkout</a>
       </div>

    </div>

@else

	<div class="row">
    	<div class="col-md-6 col-md-offset-3">
        	<h2 class="title-page">No Items In the Cart!</h2>
        </div>
    </div>

@endif

@endsection