<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
// use Faker\Generator as Faker;
$faker = \Faker\Factory::create('pt_BR');

$factory->define(Address::class, function () use ($faker) {

    $hotel_manager = factory(App\User::class)->states('hotel_manager');

    return [
        'cep' => $faker->postcode(),
        'state' => $faker->stateAbbr(),
        'city' => $faker->city(),
        'street' => $faker->streetAddress(),
        'created_by' => $hotel_manager,
        'update_by' => $hotel_manager
    ];  
});
