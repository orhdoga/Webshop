<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;
use App\FashionModel;

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

    public function destroy(Thumbnail $thumbnail, FashionModel $fashionModel)
    {
        $fashionModel->delete();

        flash(e('You have successfully deleted ' . $fashionModel->media), 'danger');

        return back();
    }
}
