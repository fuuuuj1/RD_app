<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exposure;
use App\User;
use Faker\Generator as Faker;

$factory->define(Exposure::class, function (Faker $faker) {

    // $user_id = factory(App\User::class)->create()->id;

    return [
        'year' => $faker->numberBetween($min = 2010, $max = 2020),
        'month' => $faker->month,
        'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
        'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
        'position_id' => '3',
        'comment' => $faker->realText($maxNbChars = 20, $indexSize = 2),
        'user_id' => function() {
            return factory(User::class);
        },
    ];
});
