<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Hall;
use Faker\Generator as Faker;

$factory->define(Hall::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->city,
        'phone' => '9842089687'
    ];
});
