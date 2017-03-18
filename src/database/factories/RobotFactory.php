<?php

use App\User;
use Wadepenistone\Devicecrafting\Models\Robot;

$factory->define(Robot::class, function (Faker\Generator $faker) {
    $rnd = $faker->unique()->numberBetween(1, 100);

    return [
        'name' => "Robot ${rnd}",
        //'avatar' => '',
        'weight' => $faker->randomFloat(2, 1, 100),
        'power' => $faker->randomFloat(2, 1, 100),
        'speed' => $faker->randomFloat(2, 1, 100)
    ];
});
