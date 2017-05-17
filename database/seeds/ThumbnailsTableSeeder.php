<?php

use Illuminate\Database\Seeder;

use App\Thumbnail;

class ThumbnailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thumbnai = new Thumbnail;
        $thumbnai->image = "example-2.jpg";
    	$thumbnai->save();

    	$thumbnai2 = new Thumbnail;
        $thumbnai2->image = "example-3.jpg";
    	$thumbnai2->save();

    	$thumbnai3 = new Thumbnail;
        $thumbnai3->image = "example-4.jpg";
    	$thumbnai3->save();
    }
}
