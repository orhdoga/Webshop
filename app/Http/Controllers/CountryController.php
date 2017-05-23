<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Thumbnail;
use App\Country;

use App\Traits\UploadCountry;

use App\Http\Requests\UploadRequest;
use Session;

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

        dd($request->session()->get('cart'));

        flash(e("You have successfully added " . $country->name . " to the Shopping Card"), 'success');

        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Thumbnail $thumbnail)
    {
        $countries = $thumbnail->countries()->paginate(9);

        return view('country.index', [
            'thumbnail' => $thumbnail,
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Thumbnail $thumbnail)
    {
        return view('country.form', compact('thumbnail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Thumbnail $thumbnail, Country $country, UploadRequest $request)
    {
        $country = $thumbnail->countries()->create($request->all());

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            \Image::make($media)->save(public_path('/images/country/' . $filename));
            $country->media = $filename;
            $country->save();
        }

        flash(e("You have successfully created " . $country->name), 'success');

        return redirect($thumbnail->id . '/countries');
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
