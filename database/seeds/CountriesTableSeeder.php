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
        $country->artist = "Ph";
        $country->name = "Title";
        $country->description = "This is a description.";
        $country->media = "country-1.jpg";
        $country->price = 30;
        $country->save();

        $country1 = new Country;
        $country1->artist = "Ph";
        $country1->name = "Title";
        $country1->description = "This is a description.";
        $country1->media = "country-2.jpg";
        $country1->price = 50;
        $country1->save();

        $country2 = new Country;
        $country2->artist = "Ph";
        $country2->name = "Title";
        $country2->description = "This is a description.";
        $country2->media = "country-3.jpg";
        $country2->price = 80;
        $country2->save();

        factory(Country::class, 9)->create();
    }
}
