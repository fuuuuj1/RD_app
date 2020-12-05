<?php

use App\User;
use App\Job;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

    $gender = $faker->randomElement(["male", "female"]);
    $job_id = \App\Job::inRandomOrder()->value('j_id');

    return [
        'lastname' => $faker->lastname,
        'firstname' => $faker->firstname,
        'gender' => $gender,
        'age' => $faker->randomNumber($nbDigits = 2),
        'job_id' => $job_id,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'remember_token' => Str::random(10),
    ];
});
