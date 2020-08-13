<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aid;
use App\User;
use Faker\Generator as Faker;

$factory->define(Aid::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->limit(1)->get()->first()->id,
        'summary' => $faker->sentence,
        'request' => $faker->paragraph(),
        'amount' => $faker->numberBetween(1, 500) * 100,
        'require_account' => $faker->boolean,
        'needed_by' => $faker->dateTimeBetween('now', '+30 days')
    ];
});
