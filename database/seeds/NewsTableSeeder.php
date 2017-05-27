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
        $news->artist = "Ph";
        $news->name = "Title";
        $news->description = "This is a description.";
        $news->media = "newsItem-1.jpg";
        $news->price = 30;
        $news->save(); 

        $news1 = new News;
        $news1->artist = "Ph";
        $news1->name = "Title"; 
        $news1->description = "This is a description."; 
        $news1->media = "newsItem-2.jpg";
        $news1->price = 50;
        $news1->save(); 

        $news2 = new News;
        $news2->artist = "Ph";
        $news2->name = "Title";
        $news2->description = "This is a description.";
        $news2->media = "newsItem-3.jpg";
        $news2->price = 80;
        $news2->save();

        factory(News::class, 9)->create();
    }
}
