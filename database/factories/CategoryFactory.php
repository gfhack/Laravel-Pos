<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    $hotel_manager = factory(App\User::class)->states('hotel_manager');

    return [
        'name' => $faker->title(),
        'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'created_by' => $hotel_manager,
        'updated_by' => $hotel_manager
    ];
});
