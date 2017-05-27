<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Cart, News};
use Session;

use App\Http\Requests\UploadRequest;

class NewsController extends Controller
{
    public function index() 
    {
        return view('news.index', [
            'news' => News::paginate(9)
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

    public function create()
    {
        return view('news.form');
    }

    public function store(News $news, UploadRequest $request)
    {
        $news->fill($request->all());

        if ($request->hasFile('media')) {
            $media = $request->file('media');
            $filename = time() . '.' . $media->getClientOriginalExtension();
            \Image::make($media)->save(public_path('/media/news/' . $filename));
            $news->media = $filename;
        }

        $news->save();

        flash(e("You have successfully created " . $news->name), 'success');

        return redirect('/news');
    }

    public function destroy(News $newsItem)
    {
        $newsItem->delete();

        flash(e("You have successfully deleted " . $newsItem->media), 'danger');

        return back();
    }
}
