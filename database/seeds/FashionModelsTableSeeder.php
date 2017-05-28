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
        $fashionModel->artist = "Ph";
        $fashionModel->name = "Title";
        $fashionModel->description = "This is a description.";
        $fashionModel->media = "fashionModel-1.mp4";
        $fashionModel->price = 30;
        $fashionModel->save();

        $fashionModel1 = new FashionModel;
        $fashionModel1->artist = "Ph";
        $fashionModel1->name = "Title";
        $fashionModel1->description = "This is a description.";
        $fashionModel1->media = "fashionModel-2.mp4";
        $fashionModel1->price = 50;
        $fashionModel1->save();

        $fashionModel2 = new FashionModel;
        $fashionModel2->artist = "Ph";
        $fashionModel2->name = "Title";
        $fashionModel2->description = "This is a description.";
        $fashionModel2->media = "fashionModel-3.mp4";
        $fashionModel2->price = 80;
        $fashionModel2->save();

        factory(FashionModel::class, 9)->create();
    }
}
