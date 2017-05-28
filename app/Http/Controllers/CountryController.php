<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Cart, Country};
use Session;

use App\Traits\UploadCountry;
use App\Http\Requests\UploadRequest;

class CountryController extends Controller
{
    use UploadCountry;

    public function getAddToCart(Request $request, $id)
    {
        // First we find country.
        $country = Country::find($id);
        // If user already add value we show it.
        $oldCart = Session::has('cart') ? Session::get('cart') : NULL;
        // If not we make new cart.
        $cart = new Cart($oldCart);
        // Add product woth its id.
        $cart->add($country, $country->id);
        // Then put that on $cart.
        $request->session()->put('cart', $cart);

        // dd($request->session()->get('cart'));

        flash(e("You have successfully added " . $country->name . " to the Shopping Card"), 'success');

        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Country::all();
        // The splice method removes and returns a slice of items starting at the specified index.
        $chunk = $collection->splice(3);
        $firstCountries = $collection->all();

        $collection = Country::all();
        // The skip method returns a slice of the collection starting at the given index.
        $countries = $collection->slice(3);

        return view('country.index', [
            'firstCountries' => $firstCountries,
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Country $country, UploadRequest $request)
    {
        $country = Country::create([
            'artist' => $request->input('artist'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            \Image::make($media)->save(public_path('/media/countries/' . $filename));
            $country->media = $filename;
            $country->save();
        }

        flash(e("You have successfully created " . $country->name), 'success');

        return redirect('/countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        flash(e("You have successfully deleted " . $country->media), 'danger');

        return back();
    }
}
