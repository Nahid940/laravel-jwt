<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cars;
use Faker\Generator as Faker;

$factory->define(Cars::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name(),
        'price'=>$faker->numberBetween(1000,9999)
    ];
});
