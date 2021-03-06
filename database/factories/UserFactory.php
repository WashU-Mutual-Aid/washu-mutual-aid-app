<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aid;
use App\User;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Te7aHoudini\LaravelTrix\Models\TrixRichText;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'affiliation' => Arr::random([
            'Undergraduate',
            'Arts & Sciences',
            'Brown School',
            'McKelvey School of Engineering',
            'Olin Business School',
            'Sam Fox School of Design & Visual Arts',
            'School of Law',
            'School of Medicine',
            'Alumni',
        ]),
        'current_location' => Arr::random(['St. Louis City/County', 'Other']),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->afterCreating(User::class, function ($user, Faker $faker) {
    $user->paymentProfiles()->create(['type' => 'venmo', 'username' => $faker->userName]);
});

