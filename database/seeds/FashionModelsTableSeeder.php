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
        $fashionModel->artist = "Ph";
        $fashionModel->media = "example-2.jpg";
        $fashionModel->save();

        $fashionModel2 = new FashionModel;
        $fashionModel2->thumbnail_id = 2;
        $fashionModel2->artist = "Ph";
        $fashionModel2->media = "example-3.jpg";
        $fashionModel2->save();

        $fashionModel3 = new FashionModel;
        $fashionModel3->thumbnail_id = 3;
        $fashionModel3->artist = "Ph";
        $fashionModel3->media = "example-4.jpg";
        $fashionModel3->save();

        factory(FashionModel::class, 20)->create();
    }
}
