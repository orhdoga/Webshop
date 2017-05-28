@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">News</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="{{ url('/news/create') }}">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>

		</div>

	</div>

	<hr>

	<div class="row" id="fadeOne">

		@foreach ($firstNewsItems as $firstNewsItem)

			<form method="POST" action="{{ url('/countries/' . $firstNewsItem->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}

				<div class="col-md-4" style="margin-top: 15px;">

					<div class="thumbnail">

						<video autoplay loop muted poster="{{ url('media/placeholder.jpg') }}" name="media" style="height: 200px !important; width: 100% !important;">
							<source src="{{ url('media/news/' . $firstNewsItem->media) }}" type="video/mp4">
						</video>

						<div class="caption">
			            	<h3 style="display: inline-block;">{{ $firstNewsItem->name }}</h3>
			            	<h3 style="display: inline-block;" class="pull-right">${{ $firstNewsItem->price }}</h3>
			            	
			            	<p>{{ $firstNewsItem->description }}</p>
			            	<span style="font-size: 40px;">{{ $firstNewsItem->artist }}</span>

			            	<a href="{{ route('country.addToCart', ['id' => $firstNewsItem->id]) }}" 
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

		@foreach ($news as $newsItem)

			<form method="POST" action="{{ url('/news/' . $newsItem->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				
				<div class="col-md-4" style="margin-top: 15px;">

		            <div class="thumbnail">

		                <img src="{{ url('media/news/' . $newsItem->media) }}" 
		                style="height: 200px !important; width: 100% !important">

			            <div class="caption">
			            	<h3 style="display: inline-block;">{{ ucfirst($newsItem->name) }}</h3>
			            	<h3 style="display: inline-block;" class="pull-right">${{ $newsItem->price }}</h3>

			            	<p>{{ ucfirst($newsItem->description) }}</p>
			            	<span style="font-size: 40px;">{{ ucfirst($newsItem->artist) }}.</span>

			            	<a href="{{ route('news.addToCart', ['id' => $newsItem->id]) }}" 
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