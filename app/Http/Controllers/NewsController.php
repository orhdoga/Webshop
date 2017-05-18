<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;

class NewsController extends Controller
{
    public function show(Thumbnail $thumbnail) 
    {
    	$news = $thumbnail->news()->paginate(9);

        return view('news.show', [
            'thumbnail' => $thumbnail,
            'news' => $news
        ]);
    }
}
