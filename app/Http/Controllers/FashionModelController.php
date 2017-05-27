<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Cart, FashionModel};
use Session;

use App\Http\Requests\UploadRequest;

class FashionModelController extends Controller
{
    public function index()
    {
        return view('fashionModel.index', [
            'fashionModels' => FashionModel::paginate(9)
        ]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $fashionModel = FashionModel::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($fashionModel, $fashionModel->id);

        $request->session()->put('cart', $cart);

        flash(e("You have successfully added " . $fashionModel->name . " to the Shopping Card"), 'success');

        return back();
    }

    public function create()
    {
        return view('fashionModel.form');
    }

    public function store(FashionModel $fashionModel, UploadRequest $request)
    {
        $fashionModel = FashionModel::create($request->all());

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            \Image::make($media)->save(public_path('/media/fashionModels/' . $filename));
            $fashionModel->media = $filename;
        }

        $fashionModel->save();

        flash(e("You have successfully created " . $fashionModel->name), 'success');

        return redirect('/models');
    }

    public function destroy(FashionModel $fashionModel)
    {
        $fashionModel->delete();

        flash(e("You have successfully deleted " . $fashionModel->media), 'danger');

        return back();
    }
}
