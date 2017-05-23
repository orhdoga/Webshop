<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Cart;

class ShoppingCartController extends Controller
{
	public function index()
    {
    	// If user has no purchase we return.
    	if (!Session::has('cart')) {
        	return view('shoppingCart');
    	}
    	// Else we get session of cart.
    	$oldCart = Session::get('cart');
    	// And again create new cart.
    	$cart = new Cart($oldCart);
    	// And get resutl of purchase to our page [Items & Price].
    	return view('shoppingCart', [
        	'countries' => $cart->items,
        	'totalPrice' => $cart->totalPrice
    	]);
    }
}
