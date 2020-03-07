<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address_id' => factory(App\Address::class),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'remember_token' => Str::random(10),
    ];
});

$factory->state(App\User::class, 'travel_agent', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address_id' => factory(App\Address::class),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'role' => 'travel_agent',
        'remember_token' => Str::random(10),
    ];
});

$factory->state(App\User::class, 'hotel_attendant', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address_id' => factory(App\Address::class),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'role' => 'hotel_attendant',
        'remember_token' => Str::random(10),
    ];
});

$factory->state(App\User::class, 'hotel_manager', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address_id' => factory(App\Address::class),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'role' => 'hotel_manager',
        'remember_token' => Str::random(10),
    ];
});

$factory->state(App\User::class, 'guest', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address_id' => factory(App\Address::class),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'role' => 'guest',
        'remember_token' => Str::random(10),
    ];
});