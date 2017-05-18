<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;

class NewsController extends Controller
{
    public function show(Thumbnail $thumbnail) {
        return view('news.show', [
            'thumbnail' => $thumbnail
        ]);
    }
}
