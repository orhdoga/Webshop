<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$thumbnails = App\Thumbnail::all();
    return view('welcome', compact('thumbnails'));
});

Route::get('/test', function() {
	return view('test');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    
	Route::group(['prefix' => '{thumbnail}'], function () {

		Route::get("/countries", 'CountryController@show');
		Route::get("/countries/upload", 'CountryController@upload');		
		Route::delete("/{country}/delete", 'CountryController@destroy');

		Route::get("/models", 'FashionModelController@show');
		Route::get("/models/upload", 'FashionModelController@upload');
		Route::delete("/{fashionModel}/delete", 'FashionModelController@destroy');
		
		Route::get("/news", "NewsController@show");
		Route::get("/news/upload", 'NewsController@upload');
		Route::delete("/{newsItem}/delete", 'NewsController@destroy');

	});

});
