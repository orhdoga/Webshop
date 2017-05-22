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

		Route::get('/countries', 'CountryController@show');
		Route::get('/countries/upload', 'CountryController@upload');
		Route::post('/countries', 'CountryController@store');		

		Route::get('/models', 'FashionModelController@show');
		Route::get('/models/upload', 'FashionModelController@upload');
		Route::post('/models', 'FashionModelController@store');
		
		Route::get('/news', 'NewsController@show');
		Route::get('/news/upload', 'NewsController@upload');
		Route::post('/news', 'FashionModelController@store');

		Route::delete('/countries/{country}/delete', 'CountryController@destroy');
		Route::delete('/models/{fashionModel}/delete', 'FashionModelController@destroy');
		Route::delete('/news/{newsItem}/delete', 'NewsController@destroy');

	});

	Route::get('/countries/{id}/add-to-cart', 'CountryController@getAddToCart')->name('country.addToCart');
	Route::get('/models/{id}/add-to-cart', 'FashionModelController@getAddToCart')->name('fashionModel.addToCart');
	Route::get('/news/{id}/add-to-cart', 'NewsController@getAddToCart')->name('news.addToCart');

	Route::get('/shopping-cart', function () {
		return view('shoppingCart');
	});

});
