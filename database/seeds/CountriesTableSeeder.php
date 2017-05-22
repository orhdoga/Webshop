<?php

use Illuminate\Database\Seeder;

use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country;
        $country->thumbnail_id = 1;
        $country->artist = "Ph";
        $country->name = "John Doe";
        $country->description = "This is a description.";
        $country->media = "country-1.jpg";
        $country->price = 30;
        $country->save();

        $country2 = new Country;
        $country2->thumbnail_id = 2;
        $country2->artist = "Ph";
        $country2->name = "John Doe";
        $country2->description = "This is a description.";
        $country2->media = "country-2.jpg";
        $country2->price = 50;
        $country2->save();

        $country3 = new Country;
        $country3->thumbnail_id = 3;
        $country3->artist = "Ph";
        $country3->name = "John Doe";
        $country3->description = "This is a description.";
        $country3->media = "country-3.jpg";
        $country3->price = 80;
        $country3->save();

        factory(Country::class, 20)->create();
    }
}
