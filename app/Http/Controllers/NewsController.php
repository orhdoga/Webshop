<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;
use App\News;

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

    public function upload()
    {
        return view('news.form');
    }

    public function destroy(Thumbnail $thumbnail, News $newsItem)
    {
        $newsItem->delete();

        flash(e("You have successfully deleted " . $newsItem->media), 'danger');

        return back();
    }
}
