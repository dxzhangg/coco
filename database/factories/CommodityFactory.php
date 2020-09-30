<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Commodity::class, function (Faker $faker) {
    return [
        'title' => $faker->userName,
    ];
});

$factory->define(\App\Models\CommoditySku::class, function (Faker $faker) {
    return [
        'title' => $faker->userName,
        'price' => $faker->randomFloat(2, 10, 1000),
    ];
});
