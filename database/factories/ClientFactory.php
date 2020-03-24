<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'phone' => $faker->phoneNumber(),
        'email' => $faker->unique()->safeEmail,
        'sex' => $faker->randomElement($array = array ('M', 'F')),
        'flotilla' => $faker->boolean(),
        'RFC' => Str::random(8),
        'card' => Str::random(13),
        'status' => $faker->randomElement($array = array ('A', 'I', 'S'))
    ];
});
