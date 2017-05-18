<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;

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
}
