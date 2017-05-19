<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;
use App\Country;

use App\Http\Requests\UploadRequest;

class CountryController extends Controller
{
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
    public function store(Thumbnail $thumbnail, UploadRequest $request)
    {
        $country = $thumbnail->countries()->create(request()->all());

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
