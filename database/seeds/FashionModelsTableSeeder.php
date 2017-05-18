<?php

use Illuminate\Database\Seeder;

use App\FashionModel;

class FashionModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fashionModel = new FashionModel;
        $fashionModel->thumbnail_id = 1;
        $fashionModel->image = "example-2.jpg";
        $fashionModel->save();

        $fashionModel2 = new FashionModel;
        $fashionModel2->thumbnail_id = 2;
        $fashionModel2->image = "example-3.jpg";
        $fashionModel2->save();

        $fashionModel3 = new FashionModel;
        $fashionModel3->thumbnail_id = 3;
        $fashionModel3->image = "example-4.jpg";
        $fashionModel3->save();
    }
}
