<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aid;
use App\User;
use Faker\Generator as Faker;
use Te7aHoudini\LaravelTrix\Models\TrixRichText;

$factory->define(Aid::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->limit(1)->get()->first()->id,
        'summary' => $faker->sentence,
        'amount' => $faker->numberBetween(1, 500) * 100,
        'require_account' => $faker->boolean,
        'needed_by' => $faker->dateTimeBetween('now', '+30 days')
    ];
});

$factory->afterCreating(Aid::class, function ($aid, Faker $faker) {
    TrixRichText::create([
        'field' => 'details',
        'model_type' => Aid::class,
        'model_id' => $aid->id,
        'content' => '<div><p>'.$faker->paragraphs(3, true).'</p></div>',
    ]);
});
