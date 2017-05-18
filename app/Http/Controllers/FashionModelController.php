<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;

class FashionModelController extends Controller
{
    public function show(Thumbnail $thumbnail) {
    	return $thumbnail->fashionModels;
    }
}
