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
        'RFC' => $faker->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
        'card' => $faker->regexify('[0-9]{13}'),
        'status' => $faker->randomElement($array = array ('A', 'I', 'S'))
    ];
});
