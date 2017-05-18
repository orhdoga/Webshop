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
        $country->image = "example-2.jpg";
        $country->save();

        $country2 = new Country;
        $country2->thumbnail_id = 2;
        $country2->image = "example-3.jpg";
        $country2->save();

        $country3 = new Country;
        $country3->thumbnail_id = 3;
        $country3->image = "example-4.jpg";
        $country3->save();
    }
}