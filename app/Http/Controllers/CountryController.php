<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Thumbnail;
use App\Country;

use Session;
use App\Http\Requests\UploadRequest;

class CountryController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {
        $country = Country::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($country, $country->id);

        $request->session()->put('cart', $cart);

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Thumbnail $thumbnail)
    {
        return view('country.form', compact('thumbnail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Thumbnail $thumbnail, Country $country, UploadRequest $request)
    {
        dd($request);

        $country = $thumbnail->countries()->create(request()->all());

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Thumbnail $thumbnail)
    {
        $countries = $thumbnail->countries()->paginate(9);

        return view('country.show', [
            'thumbnail' => $thumbnail,
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thumbnail $thumbnail, Country $country)
    {
        $country->delete();

        flash(e("You have successfully deleted " . $country->media), 'danger');

        return back();
    }
}
