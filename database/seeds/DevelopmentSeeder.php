<?php

use App\Aid;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Skyler',
            'last_name' => 'Katz',
            'affiliation' => 'School of Law',
            'current_location' => 'St. Louis City/County',
            'email' => 'skyler@wustl.edu',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
        factory(User::class, 30)->create();
        factory(Aid::class, 50)->create();
    }
}
