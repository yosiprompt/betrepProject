<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Card;
use Faker\Generator as Faker;

$factory->define(Card::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'card' => $faker->regexify('[0-9]{13}')
    ];
});
