<?php

use Illuminate\Database\Seeder;

use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = new News;
        $news->thumbnail_id = 1;
        $news->artist = "Ph";
        $news->media = "news-1.jpg";
        $news->save(); 

        $news2 = new News;
        $news2->thumbnail_id = 2;
        $news2->artist = "Ph";
        $news2->media = "news-2.jpg";
        $news2->save(); 

        $news3 = new News;
    	$news3->thumbnail_id = 3;
        $news3->artist = "Ph";
        $news3->media = "news-3.jpg";
        $news3->save();

        factory(News::class, 20)->create();
    }
}
