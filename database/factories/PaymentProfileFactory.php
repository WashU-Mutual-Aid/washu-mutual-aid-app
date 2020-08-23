<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PaymentProfile;
use Faker\Generator as Faker;

$factory->define(PaymentProfile::class, function (Faker $faker) {
    return [
        'type' => 'venmo',
        'username' => $faker->userName
    ];
});
