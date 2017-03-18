<?php

use Wadepenistone\Devicecrafting\Models\{Robot,Battle};

$factory->define(Battle::class, function (Faker\Generator $faker) {
    list($attacker, $defender) = $contestants = Robot::inRandomOrder()->take(2)->get();

    return [
        'attacker_id' => $attacker->id,
        'defender_id' => $defender->id,
        'winner_id' => $contestants->random()->id
    ];
});
