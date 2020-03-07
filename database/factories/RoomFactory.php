<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {

    $hotel_manager = factory(App\User::class)->states('hotel_manager');

    return [
        'number' => $faker->numberBetween($min = 0, $max = 100),
        'price' => $faker->randomFloat(),
        'beds' => $faker->numberBetween($min = 1, $max = 3),
        'category_id' => factory(App\Category::class),
        'created_by' => $hotel_manager,
        'updated_by' => $hotel_manager
    ];
});
