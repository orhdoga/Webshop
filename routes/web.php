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
    return view('welcome');
});

Route::get('/test', function() {
	return view('test');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

	Route::get('/shopping-cart', 'ShoppingCartController@index');
    
	Route::get('/countries/{id}/add-to-cart', 'CountryController@getAddToCart')->name('country.addToCart');
	Route::get('/models/{id}/add-to-cart', 'FashionModelController@getAddToCart')->name('fashionModel.addToCart');
	Route::get('/news/{id}/add-to-cart', 'NewsController@getAddToCart')->name('news.addToCart');

	Route::get('/reduce/{id}', 'ShoppingCartController@getReduceByOne')->name('country.reduceByOne');
	Route::get('/remove/{id}', 'ShoppingCartController@getRemove')->name('country.remove');

	Route::delete('/countries/{country}/delete', 'CountryController@destroy');
	Route::delete('/models/{fashionModel}/delete', 'FashionModelController@destroy');
	Route::delete('/news/{newsItem}/delete', 'NewsController@destroy');

	Route::resource('countries', 'CountryController');
	Route::resource('models', 'FashionModelController');
	Route::resource('news', 'NewsController');	

});
