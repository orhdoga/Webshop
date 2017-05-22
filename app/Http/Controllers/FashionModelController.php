<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;
use App\FashionModel;

use App\Http\Requests\UploadRequest;

class FashionModelController extends Controller
{
    public function show(Thumbnail $thumbnail)
    {
    	$fashionModels = $thumbnail->fashionModels()->paginate(9);

        return view('fashionModel.show', [
            'thumbnail' => $thumbnail,
            'fashionModels' => $fashionModels
        ]);
    }

    public function upload(Thumbnail $thumbnail)
    {
        return view('fashionModel.form', compact('thumbnail'));
    }

    public function store(Thumbnail $thumbnail, FashionModel $fashionModel, UploadRequest $request)
    {
        $fashionModel = $thumbnail->fashionModels()->create(request()->all());

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            \Image::make($media)->save(public_path('/images/fashionModel/' . $filename));
            $fashionModel->media = $filename;
            $fashionModel->save();
        }

        flash(e("You have successfully created " . $fashionModel->name), 'success');

        return redirect($thumbnail->id . '/models');
    }

    public function destroy(Thumbnail $thumbnail, FashionModel $fashionModel)
    {
        $fashionModel->delete();

        flash(e("You have successfully deleted " . $fashionModel->media), 'danger');

        return back();
    }
}
