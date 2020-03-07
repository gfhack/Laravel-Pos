<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'room_id' => factory(App\Room::class),
        'initial_date' => now(),
        'end_date' => now()->addDays(1)
    ];
});
