@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<h1 style="display: inline-block">News</h1>
			<h2 style="display: inline-block" class="pull-right">
				<a href="{{ url($thumbnail->id . '/' . 'news' . '/upload') }}">Upload media <i class="fa fa-upload" aria-hidden="true"></i></a>
			</h2>

		</div>

	</div>

	<hr>

	<div class="row">

		@foreach ($news as $newsItem)

			<form method="POST" action="{{ url($thumbnail->id . '/news/' . $newsItem->id . '/delete') }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				
				<div class="col-md-4" style="margin-top: 15px;">

		            <div class="thumbnail">

		                <img src="{{ url('images/news/' . $newsItem->media) }}" 
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

	<div class="row">

		<div class="col-md-12">
			<span class="pull-right">{{ $news->links() }}</span>
		</div>

	</div>

</div>

@endsection