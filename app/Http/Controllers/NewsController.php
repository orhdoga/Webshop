<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thumbnail;
use App\News;

use App\Http\Requests\UploadRequest;

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

    public function upload(Thumbnail $thumbnail)
    {
        return view('news.form', compact('thumbnail'));
    }

    public function store(Thumbnail $thumbnail, News $news, UploadRequest $request)
    {
        $news = $thumbnail->news()->create(request()->all());

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            \Image::make($media)->save(public_path('/images/news/' . $filename));
            $news->media = $filename;
            $news->save();
        }

        flash(e("You have successfully created " . $news->name), 'success');

        return redirect($thumbnail->id . '/news');
    }

    public function destroy(Thumbnail $thumbnail, News $newsItem)
    {
        $newsItem->delete();

        flash(e("You have successfully deleted " . $newsItem->media), 'danger');

        return back();
    }
}
