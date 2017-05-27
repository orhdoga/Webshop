<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use Session;

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
    	// And get result of purchase to our page [Items & Price].
    	return view('shoppingCart', [
        	'countries' => $cart->items,
        	'totalPrice' => $cart->totalPrice
    	]);
    }

    public function getReduceByOne($id)
    {
        // If user already add value we show it
        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        // If not we make new cart
        $cart = new Cart($oldCart);
        // Using our Method from Cart
        $cart->reduceByOne($id);
        
        if (count($cart->items) > 0) {
            Session::put('cart',$cart);
        } else {
            Session::forget('cart');
        }
        
        return back();
    }
    
    public function getRemove($id)
    {
        // If user already add value we show it
        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        // If not we make new cart
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart',$cart);
        } else {
            Session::forget('cart');
        }
      
        return back();
    }
}
