<?php

use App\User;
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

    // $gender = $faker->randomElements(["male", "female"]);

    // $job_get_id = $faker->randomDigitNot(0, 8, 9);
    // $job_data = DB::table('jobs')->where('j_id', $job_get_id);
    // $job_id = $job_data->j_id;

    return [
        'lastname' => $faker->lastname,
        'firstname' => $faker->firstname,
        'gender' => 'male',
        'age' => Str::random(2),
        'job_id' => $faker->randomDigitNot(0, 8, 9),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
