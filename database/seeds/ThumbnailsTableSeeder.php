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
        $thumbnail = new Thumbnail;
        $thumbnail->image = "example-2.jpg";
        $thumbnail->save();

        $thumbnail2 = new Thumbnail;
        $thumbnail2->image = "example-3.jpg";
        $thumbnail2->save();

        $thumbnail3 = new Thumbnail;
        $thumbnail3->image = "example-4.jpg";
        $thumbnail3->save();
    }
}
