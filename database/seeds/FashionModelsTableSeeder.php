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
        $fashionModel->name = "Title";
        $fashionModel->description = "This is a description.";
        $fashionModel->media = "fashionModel-1.jpg";
        $fashionModel->price = 30;
        $fashionModel->save();

        $fashionModel2 = new FashionModel;
        $fashionModel2->thumbnail_id = 2;
        $fashionModel2->artist = "Ph";
        $fashionModel2->name = "Title";
        $fashionModel2->description = "This is a description.";
        $fashionModel2->media = "fashionModel-2.jpg";
        $fashionModel2->price = 50;
        $fashionModel2->save();

        $fashionModel3 = new FashionModel;
        $fashionModel3->thumbnail_id = 3;
        $fashionModel3->artist = "Ph";
        $fashionModel3->name = "Title";
        $fashionModel3->description = "This is a description.";
        $fashionModel3->media = "fashionModel-3.jpg";
        $fashionModel3->price = 80;
        $fashionModel3->save();

        factory(FashionModel::class, 20)->create();
    }
}
