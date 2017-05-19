<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Country::class, function (Faker\Generator $faker) {
    return [
        'thumbnail_id' => rand(1, 3),
        'artist' => 'Ph',
        'media' => 'country-' . rand(1, 9) . '.jpg'
    ];
});

$factory->define(App\FashionModel::class, function (Faker\Generator $faker) {
    return [
        'thumbnail_id' => rand(1, 3),
        'artist' => 'Ph',
        'media' => 'FashionModel-' . rand(1, 9) . '.jpg'
    ];
});

$factory->define(App\News::class, function (Faker\Generator $faker) {
    return [
        'thumbnail_id' => rand(1, 3),
        'artist' => 'Ph',
        'media' => 'news-' . rand(1, 9) . '.jpg'
    ];
});
