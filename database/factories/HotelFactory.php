<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {

    $hotel_manager = factory(App\User::class)->states('hotel_manager');

    return [
        'name' => $faker->name(),
        'email' => $faker->email(),
        'phone' => $faker->phoneNumber(),
        'evaluation' => $faker->numberBetween($min = 0, $max = 5),
        'address_id' => factory(App\Address::class),
        'created_by' => $hotel_manager,
        'updated_by' => $hotel_manager
    ];
});
