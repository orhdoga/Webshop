<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Thumbnail;
use App\News;

use Session;
use App\Http\Requests\UploadRequest;

class NewsController extends Controller
{
    public function index(Thumbnail $thumbnail) 
    {
        $news = $thumbnail->news()->paginate(9);

        return view('news.index', [
            'thumbnail' => $thumbnail,
            'news' => $news
        ]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $news = News::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($news, $news->id);

        $request->session()->put('cart', $cart);

        flash(e("You have successfully added " . $news->name . " to the Shopping Card"), 'success');

        return back();
    }

    public function create(Thumbnail $thumbnail)
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

    public function destroy(News $newsItem)
    {
        $newsItem->delete();

        flash(e("You have successfully deleted " . $newsItem->media), 'danger');

        return back();
    }
}
